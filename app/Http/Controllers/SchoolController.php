<?php

namespace App\Http\Controllers;

use Hashids\Hashids;
use App\Models\SchoolCampus;
use App\Models\SchoolCourse;
use App\Models\SchoolSemester;
use App\Models\SchoolCourseProspectus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SchoolProfileRequest;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\School\IndexResource;
use App\Http\Resources\School\CourseResource;

class SchoolController extends Controller
{
    public function index(Request $request)
    {   
        $data = IndexResource::collection(
            SchoolCampus::query()
            ->with('school')
            ->when($request->keyword, function ($query, $keyword) {
                $query->whereHas('school',function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', '%'.$keyword.'%');
                })->orWhere(function ($query) use ($keyword) {
                    $query->where('campus', 'LIKE', '%'.$keyword.'%');
                });
            })
            ->orderBy('created_at','DESC')
            ->paginate($request->count)
            ->withQueryString()
        );

        if($request->search){
            return $data;
        }else{
            return inertia('Schools/Index');
        }
    }

    public function show($id)
    {
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($id);
        
        $data = new IndexResource(
            SchoolCampus::with('school')
            ->with('courses.course','courses.prospectuses')
            ->with('semesters.semester')
            ->where('id',$id[0])->first()
        );
        return inertia('Schools/View',[
            'school' => $data
        ]);
    }

    public function store(SchoolProfileRequest $request){
        switch($request->option){
            case 'semester': 
                $message = 'Semester successfully created. Thanks';
                $data = new DefaultResource(SchoolSemester::create($request->all()));
                $update = SchoolSemester::where('id','!=',$data->id)->where('school_id',$data->school_id)->update(['is_active' => false]);
            break;
            case 'course': 
                $message = 'Course successfully added. Thanks';
                $data = new CourseResource(SchoolCourse::create($request->all()));
            break;
            case 'prospectus': 
                $level = ['First Year','Second Year','Third Year','Fourth Year','Fifth Year'];
                $semester = ['First Semester', 'Second Semester', 'Summer Class'];
                $trimester = ['First Term', 'Second Term', 'Third Term', 'Midyear'];
                $quarter = ['First Term', 'Second Term', 'Third Term','Fourth Term'];
                $years = $request->years;
                $type = $request->type;
                if($type == 'Semester'){
                    $semesters = $semester;
                }else  if($type == 'Trimester'){
                    $semesters = $trimester;
                }else{
                    $semesters = $quarter;
                }
                $group = []; $courses = [];

                for ($i = 0; $i < $years; ++$i) {
                    $sem = [];
                    foreach($semesters as $key=>$semester){
                        $sem[] = ['semester' => $semester,'total' => 0,'courses' => $courses];
                    }
                    $group[] = ['year_level' => $level[$i],'semesters' => $sem];
                }
                $request['subjects'] = json_encode($group,true);
                $request['added_by'] = \Auth::user()->id;
                $data = SchoolCourseProspectus::create($request->all());
                $data = SchoolCourseProspectus::where('id',$data->id)->first();
                $message = 'Course successfully added. Thanks';
            break;
        }
        
        return back()->with([
            'data' => $data,
            'message' => $message,
            'type' => 'bxs-check-circle'
        ]);
    }

    public function update(Request $request){
        $data = SchoolCourseProspectus::where('id',$request->id)->first();
        $data->update($request->except('editable'));
        $message = 'Prospectus successfully updated. Thanks';
        
        return back()->with([
            'data' => $data,
            'message' => $message,
            'type' => 'bxs-check-circle'
        ]);
    }
}
