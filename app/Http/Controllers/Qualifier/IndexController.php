<?php

namespace App\Http\Controllers\Qualifier;

use App\Models\Qualifier;
use App\Models\ListAgency;
use App\Models\SchoolCampus;
use App\Models\ProfileAddress;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Qualifier\IndexResource;

class IndexController extends Controller
{
    public function index(Request $request)
    {   
        if($request->search){
            $data = IndexResource::collection(
                Qualifier::with('profile.address.region','profile.address.province','profile.address.municipality','profile.address.barangay')->with('program')
                ->when($request->keyword, function ($query, $keyword) {
                    $query->whereHas('profile',function ($query) use ($keyword) {
                        $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')
                        ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%')
                        ->orWhere('spas_id','LIKE','%'.$keyword.'%');
                    });
                })
                ->where(function ($query) use ($request) {
                    switch($request->type){
                        case 'Qualifiers' : 
                            $query->where('is_qualified',NULL)->where('is_referral',0);  
                        break;
                        case 'Endorsed' : 
                            $query->where('is_referral',1); 
                        break;
                        case 'Qualified' : 
                            $query->where('is_qualified',1);   
                        break;
                    }
                    ($request->is_undergrad == 'all') ? '' : $query->where('is_undergrad',$request->is_undergrad);
                    ($request->program == null) ? '' : $query->where('program_id',$request->program);
                    ($request->year == null) ? '' : $query->where('year',$request->year);
                })
                ->orderBy('id','DESC')
                ->paginate($request->count)
                ->withQueryString()
            );
            return $data;
        }else{
            return inertia('Qualifiers/Index');
        }
    }

    public function show($data){
        if($data == 'import'){
            return inertia('Qualifiers/Import');
        }else{
            return inertia('Qualifiers/Sync');
        }
    }

    public function update(Request $request){
        $data = ProfileAddress::where('id',$request->id)->first();
        $data->update(array_merge($request->except('editable','qualifier_id')));
        $q = Qualifier::where('id',$request->qualifier_id)->first();

        return back()->with([
            'message' => 'Qualifier updated successfully. Thanks',
            'data' => new IndexResource($q),
            'type' => 'bxs-check-circle'
        ]); 
    }

    public function store(Request $request){
        try{
            $url = 'http://stsims.main/api/endorsement/store';
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                    'code' => '01101011 01110010 01100001 01100100',
                    'school_id' => $request->school_id,
                    'course_id' => $request->course_id,
                    'name' => $request->name,
                    'spas_id' => $request->spas_id,
                    'information' => json_encode($request->information),
                    'endorsed_to' => $this->school($request->school_id),
                    'endorsed_by' => $this->agency()
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $data = json_decode($response);

            if($data->code == 200){
                $qualifier = Qualifier::where('id',$request->id)->update(['is_referral' => 1]);
                $q = Qualifier::where('id',$request->id)->first();
    
                return back()->with([
                    'message' => 'Qualifier successfully endorsed. Thanks',
                    'data' =>  new IndexResource($q),
                    'type' => 'bxs-check-circle'
                ]); 
            }
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function create(){
        $region_code = $this->agency();
        try{
            $url = 'http://stsims.main/api/endorsements/'.$region_code;
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            return $datas = response()->json(json_decode($response));
            // $datas = json_decode($response);
           
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function agency(){
        $agency_id = config('app.agency');
        $agency = ListAgency::where('id',$agency_id)->first();
        return $region_code = $agency->region_code;
    }

    public function school($id){
        $data = SchoolCampus::with('municipality.province.region')->where('id',$id)->first();
        return $data->municipality->province->region->code;
    }
}
