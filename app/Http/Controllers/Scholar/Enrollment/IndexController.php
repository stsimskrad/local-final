<?php

namespace App\Http\Controllers\Scholar\Enrollment;

use Hashids\Hashids;
use App\Models\Scholar;
use App\Models\ScholarEducation;
use App\Models\ScholarEnrollment;
use App\Models\ScholarEnrollmentList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\UploadTrait;
use App\Http\Traits\EnrollmentTrait;
use App\Http\Requests\EnrollmentRequest;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\Scholar\EvaluationResource;
use App\Http\Resources\Scholar\Sub\EnrollmentResource;
use App\Http\Resources\Scholar\Sub\EnrolledResource;

class IndexController extends Controller
{
    use EnrollmentTrait, UploadTrait;

    public function index(Request $request)
    {       
        if($request->search){
            $keyword = $request->keyword;
            if($request->type == 'enrolled'){
                $data = ScholarEnrollment::with('scholar.profile','user.profile','level','semester.semester','semester.school.school')
                ->orderBy('created_at','DESC')
                ->paginate($request->counts)
                ->withQueryString();
                return EnrolledResource::collection($data);
            }
            if($keyword != ''){
                $data = Scholar::with('profile')->with('status')->with('enrollments')->with('education.school.school','education.course','education.level')
                ->when($request->keyword, function ($query, $keyword) {
                    $query->whereHas('profile',function ($query) use ($keyword) {
                        $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')
                        ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%')
                        ->orWhere('spas_id','LIKE','%'.$keyword.'%');
                    });
                })->take(5)->get();
                return EvaluationResource::collection($data);
            }
        }else{
            return inertia('Enrollments/Index');
        }
    }

    public function store(EnrollmentRequest $request){
        // dd($request);
        $data = \DB::transaction(function () use ($request){
            $hashids = new Hashids('krad',10);
            $scholar_id = $hashids->decode($request->scholar_id);

            $this->newFinancialGroup($request);
            
            $attachments = [
                'grades' => [],
                'enrollments' => $this->enrollment($request)
            ];
            
            $data = ScholarEnrollment::create(array_merge($request->all(),['scholar_id' => $scholar_id[0],'attachment' => json_encode($attachments), 'added_by' => \Auth::user()->id]));
            $this->level($request);
            $this->createList($data->id,$request);
            $data = ScholarEnrollment::find($data->id);
            return $data;
        });

        return back()->with([
            'message' => 'Scholar enrolled successfully. Thanks',
            'data' =>  new EnrollmentResource($data),
            'type' => 'bxs-check-circle'
        ]); 
    }

    public function update(Request $request){
        switch($request->type){
            case 'switch': 
                $this->switch($request);
            break;
        }
    }

    public function show($id){
        $data = ScholarEnrollmentList::where('enrollment_id',$id)->get();
        return DefaultResource::collection($data);
    }

    public function switch($request){
        $from = $request->from;
        $to = $request->to;
        $p = ScholarEducation::with('subcourse')->where('scholar_id',$request->scholar_id)->first();
        $years = $p->subcourse->years; 
        $semesters = 3;
        $prospectus = json_decode($p->information,true);
    
        for($x = 0; $x < $years; $x++){
            for($y = 0; $y < $semesters; $y++){
                $result = array_filter($prospectus['prospectus'][$x]['semesters'][$y]['courses'], function($all) use ($from) {
                    return $all['code'] == $from['code'];
                });
                if(!empty($result)){
                    for($z = 0; $z < $years; $z++){
                        for($w = 0; $w < $semesters; $w++){
                            $result2 = array_filter($prospectus['prospectus'][$z]['semesters'][$w]['courses'], function($all) use ($to) {
                                return $all['code'] == $to['code'] && $all['is_lab'] == $to['is_lab'];
                            });
                            if(!empty($result2)){
                                $key = array_keys($result)[0];
                                $key2 = array_keys($result2)[0];
                                $prospectus['prospectus'][$x]['semesters'][$y]['courses'][$key] = $result2[$key2];
                                $prospectus['prospectus'][$z]['semesters'][$w]['courses'][$key2] = $result[$key];
                                break;
                            }
                        }
                    }
                    break;
                }
            }
        }
        $p->information = $prospectus;
        $p->save();   

        return back()->with([
            'message' => 'Subject switched successfully. Thanks',
            'data2' =>  new DefaultResource($p),
            'type' => 'bxs-check-circle'
        ]); 
    }
}
