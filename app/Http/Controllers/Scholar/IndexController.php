<?php

namespace App\Http\Controllers\Scholar;

use Hashids\Hashids;
use App\Models\Scholar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ScholarRequest;
use App\Http\Traits\ScholarTrait;
use App\Http\Resources\Scholar\IndexResource;

class IndexController extends Controller
{
    use ScholarTrait;

    public function index(Request $request)
    {   
        if($request->search){
            $info = (!empty(json_decode($request->info))) ? json_decode($request->info) : NULL;
            $education = (!empty(json_decode($request->education))) ? json_decode($request->education) : NULL;
            $location = (!empty(json_decode($request->location))) ? json_decode($request->location) : NULL;
    
            $data = IndexResource::collection(
                Scholar::with('profile.address.region','profile.address.province','profile.address.municipality','profile.address.barangay','profile.user')
                ->with('program')->with('profile.user')->with('education.school.school','education.course')
                ->when($info->keyword, function ($query, $keyword) {
                    $query->whereHas('profile',function ($query) use ($keyword) {
                        $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')
                        ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%')
                        ->orWhere('spas_id','LIKE','%'.$keyword.'%');
                    });
                })
                ->whereHas('profile',function ($query) use ($location) {
                    $query->whereHas('address',function ($query) use ($location) {
                        if(!empty($location)){
                            (property_exists($location, 'region')) ? $query->where('region_code',$location->region) : '';
                            (property_exists($location, 'province')) ? $query->where('province_code',$location->province) : '';
                            (property_exists($location, 'municipality')) ? $query->where('municipality_code',$location->municipality) : '';
                            (property_exists($location, 'barangay')) ? $query->where('barangay_code',$location->barangay) : '';
                        }
                    });
                })
                ->whereHas('education',function ($query) use ($education) {
                    if(!empty($education)){
                        (property_exists($education, 'school')) ? $query->where('school_id',$education->school) : '';
                        (property_exists($education, 'course')) ? $query->where('course_id',$education->course) : '';
                    }
                 })
                ->where(function ($query) use ($info) {
                    ($info->program == null) ? '' : $query->where('program_id',$info->program);
                    ($info->status == null) ? '' : $query->where('status_id',$info->status);
                    ($info->is_undergrad == 'all') ? '' : $query->where('is_undergrad',$info->is_undergrad);
                    ($info->year == null) ? '' : $query->where('awarded_year',$info->year);
                })
                ->orderBy('awarded_year','DESC')
                ->paginate($info->counts)
                ->withQueryString()
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

        }else{
            $hashids = new Hashids('krad',10);
            $id = $hashids->decode($data);
            
            $data = Scholar::with('profile','education.school','profile.address.region','profile.address.province','profile.address.municipality','profile.address.barangay')->where('id',$id)->first();
            
            return inertia('Scholars/View/Index',[
                'user' => new IndexResource($data)
            ]);
        }
    }
}
