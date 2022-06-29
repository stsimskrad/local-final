<?php

namespace App\Http\Traits;

use App\Models\User;
use App\Models\Scholar;
use App\Models\Profile;
use App\Models\Qualifier;
use App\Models\ScholarStatus;
use App\Models\SchoolCourseProspectus;
use App\Models\ScholarEducation;
use App\Http\Resources\Scholar\IndexResource;
use App\Http\Resources\Scholar\EvaluationResource;

trait ScholarTrait { //Storing Scholar
    
    public static function single($request){
        $parents = [
            'mother' => $request->mother,
            'father' => $request->father,
        ];

        $information2 = [
            'birth_place' => 'n/a',
            'course' => 'n/a',
            'school' => 'n/a',
            'address' => 'n/a',
            'parents' => $parents
        ];
        ($request->information) ? $information = json_decode($request->information,true) : $information = $information2;
        $info = [];

        $data = Profile::create(array_merge($request->all(),['information' => json_encode($information)]));
        $data->address()->create(array_merge($request->all(), ['type' => 'original','is_completed' => 1]));
        $test = $data->scholar()->create(array_merge($request->all(), ['awarded_year' => '2022']));
        $test->education()->create(array_merge($request->all(),['information' => json_encode($info)]));
        $data = Scholar::findOrFail($test->id);

        if($data){
            if($request->type == 'endorsed'){
                try{
                    $url = 'http://stsims.main/api/endorsement/update';
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
                            'id' => $request->id
                        ),
                    ));
                    $response = curl_exec($curl);
                    curl_close($curl);
                    $data = json_decode($response);
                    return $data;
                    
                } catch (Exception $e) {
                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                }
            }
        }

        return new IndexResource($data);
    }

    public static function qualifier($request){
        $info = []; $is_completed = 1;

        (\Request::has('school_id')) ? '' : $is_completed = 0;
        (\Request::has('course_id')) ? '' : $is_completed = 0;
        // (\Request::has('subcourse_id')) ? '' : $is_completed = 0;
        (\Request::has('level_id')) ? '' : $is_completed = 0;

        $data = Scholar::create($request->all());
        // $data->address()->create(array_merge($request->all(), ['type' => 'original']));
        $data->education()->create(['information' => json_encode($info), 'is_completed' => $is_completed]);
        if($data){
            $user = User::create(array_merge($request->all(), ['password' => bcrypt('dost9ict'),'role' => 'Scholar']));
            $data->profile()->update(['user_id'=> $user->id]);
            $qualifier = Qualifier::where('id',$request->id)->update(['is_qualified' => 1]);

            return new IndexResource($data);
        }
    }

    public static function true($request){
        $data = Scholar::with('profile')->with('education.school')->where('id',$request->id)->first();
        if($request->type == 'old'){
            $request['is_completed'] = 1;
            $data->education()->update($request->except('id','editable','type'));
            $data->update($request->except('editable','type'));
            $data = Scholar::with('profile')->with('profile.address.municipality.province.region')->with('education.school.school','education.course')->where('id',$request->id)->first();
        }else{
            $request['status_id'] = 31;
            $data->update(array_merge($request->except('editable')));
            $wew = ScholarStatus::create([
                'scholar_id' => $request->id,
                'status_id' => $request->status_id,
                'updated_by' => \Auth::user()->id,
            ]);
        }
        return new IndexResource($data);
    }

    public function course($request){
        $data = ScholarEducation::where('scholar_id',$request->id)->first();

        $pros = SchoolCourseProspectus::where('school_course_id',$request->subcourse_id)->first();
        $information = [
            'prospectus' => json_decode($pros->subjects)
        ];
        $data->subcourse_id = $request->subcourse_id;
        $data->information = json_encode($information);
        if($data->save()){
            $data = Scholar::with('profile')->with('status')->with('enrollments')->with('education.school.school','education.course','education.level')
            ->where('id',$request->id)
            ->first();
            return new EvaluationResource($data);
        }   
    }

}