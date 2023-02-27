<?php

namespace App\Http\Controllers\Scholar;

use Hashids\Hashids;
use App\Models\Scholar;
use App\Models\User;
use App\Models\Profile;
use App\Models\ListAgency;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ScholarRequest;
use App\Http\Traits\ScholarTrait;
use App\Http\Resources\Scholar\IndexResource;
use App\Http\Resources\DefaultResource;

class IndexController extends Controller
{
    use ScholarTrait;

    public $link, $agency;

    public function __construct()
    {
        $this->link = config('app.api_link');
        $this->agency = config('app.agency');
    }

    public function index(Request $request)
    {   
        if($request->search){
            $info = (!empty(json_decode($request->info))) ? json_decode($request->info) : NULL;
            $education = (!empty(json_decode($request->education))) ? json_decode($request->education) : NULL;
            $location = (!empty(json_decode($request->location))) ? json_decode($request->location) : NULL;
    
            $data = IndexResource::collection(
                Profile::
                with('address.region','address.province','address.municipality','address.barangay','user')
                ->with('scholar.program')
                ->with('scholar.education.school.school','scholar.education.course')
                ->when($info->keyword, function ($query, $keyword) {
                    $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')
                    ->where(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%');
                })
                ->whereHas('address',function ($query) use ($location) {
                    if(!empty($location)){
                        (property_exists($location, 'region')) ? $query->where('region_code',$location->region) : '';
                        (property_exists($location, 'province')) ? $query->where('province_code',$location->province) : '';
                        (property_exists($location, 'municipality')) ? $query->where('municipality_code',$location->municipality) : '';
                        (property_exists($location, 'barangay')) ? $query->where('barangay_code',$location->barangay) : '';
                    }
                })
                ->whereHas('scholar',function ($query) use ($education) {
                    $query->whereHas('education',function ($query) use ($education) {
                        if(!empty($education)){
                            (property_exists($education, 'school')) ? $query->where('school_id',$education->school) : '';
                            (property_exists($education, 'course')) ? $query->where('course_id',$education->course) : '';
                        }
                    });
                })
                ->whereHas('scholar',function ($query) use ($info) {
                    ($info->program == null) ? '' : $query->where('program_id',$info->program);
                    ($info->status == null) ? '' : $query->where('status_id',$info->status);
                    ($info->is_undergrad == 'all') ? '' : $query->where('is_undergrad',$info->is_undergrad);
                    ($info->year == null) ? '' : $query->where('awarded_year',$info->year);
                 })
                ->orderBy('lastname',$info->sorty)
                ->paginate($info->counts)
                ->withQueryString()
                // Scholar::with('profile.address.region','profile.address.province','profile.address.municipality','profile.address.barangay','profile.user')
                // ->with('program')->with('profile.user')->with('education.school.school','education.course')
                // ->when($info->keyword, function ($query, $keyword) {
                //     $query->whereHas('profile',function ($query) use ($keyword) {
                //         $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')
                //         ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%')
                //         ->orWhere('spas_id','LIKE','%'.$keyword.'%');
                //     });
                // })
                // ->whereHas('profile',function ($query) use ($location) {
                //     $query->whereHas('address',function ($query) use ($location) {
                //         if(!empty($location)){
                //             (property_exists($location, 'region')) ? $query->where('region_code',$location->region) : '';
                //             (property_exists($location, 'province')) ? $query->where('province_code',$location->province) : '';
                //             (property_exists($location, 'municipality')) ? $query->where('municipality_code',$location->municipality) : '';
                //             (property_exists($location, 'barangay')) ? $query->where('barangay_code',$location->barangay) : '';
                //         }
                //     });
                // })
                // ->whereHas('education',function ($query) use ($education) {
                //     if(!empty($education)){
                //         (property_exists($education, 'school')) ? $query->where('school_id',$education->school) : '';
                //         (property_exists($education, 'course')) ? $query->where('course_id',$education->course) : '';
                //     }
                //  })
                // ->where(function ($query) use ($info) {
                //     ($info->program == null) ? '' : $query->where('program_id',$info->program);
                //     ($info->status == null) ? '' : $query->where('status_id',$info->status);
                //     ($info->is_undergrad == 'all') ? '' : $query->where('is_undergrad',$info->is_undergrad);
                //     ($info->year == null) ? '' : $query->where('awarded_year',$info->year);
                // })
                // ->orderBy('awarded_year','DESC')
                // ->paginate($info->counts)
                // ->withQueryString()
            );
            return $data;
        }else{
            return inertia('Scholars/Index');
        }
    }

    public function store(ScholarRequest $request){
        $data = \DB::transaction(function () use ($request){
            switch($request->editable){
                case 'single': 
                    return $this->single($request);
                break;
                case 'qualifier': 
                    return $this->qualifier($request);
                break;
                case 'course': 
                    return $this->course($request);
                break;
                case 'true': 
                    return $this->true($request);
                break;
                case 'login':
                    return $this->login($request);
                break;
                case 'api': 
                    return $this->api($request);
                break;
            }
        });
        return back()->with([
            'message' => 'Scholar updated successfully. Thanks',
            'data' =>  $data,
            'type' => 'bxs-check-circle'
        ]); 
    }

    public function show($data){
        if($data == 'import'){
            return inertia('Scholars/Import');
        }elseif($data == 'report'){
            return inertia('Scholars/Report');
        }elseif($data == 'sync'){
            return inertia('Scholars/Sync');
        }elseif($data == 'fetch'){

            $region_code = ListAgency::where('id',$this->agency)->select('region_code')->first();

            try{
                $url = $this->link.'/api/scholars/'.$region_code['region_code'];
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
            //    $datas = response()->json(json_decode($response));
                return $datas = json_decode($response);
         
                
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }else{
            $hashids = new Hashids('krad',10);
            $id = $hashids->decode($data);
            
            // $data = Scholar::with('profile','education.school','profile.address.region','profile.address.province','profile.address.municipality','profile.address.barangay')->where('id',$id)->first();
            $data = Profile::with('scholar.education.school','address.region','address.province','address.municipality','address.barangay')->where('id',$id)->first();
            return inertia('Scholars/View/Index',[
                'user' => new IndexResource($data)
            ]);
        }
    }
}
