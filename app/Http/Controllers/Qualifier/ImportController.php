<?php

namespace App\Http\Controllers\Qualifier;

use App\Models\Profile;
use App\Models\ProfileAddress;
use App\Models\ListProgram;
use App\Models\Qualifier;
use App\Imports\QualifierImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\CheckTrait;
use App\Http\Traits\AddressTrait;

class ImportController extends Controller
{   
    use CheckTrait, AddressTrait;

   public function index(Request $request)
    {
        $validated = $request->validate([
            'import_file' => 'required',
            'type' => 'required',
        ]);

        $datas =  Excel::toCollection(new QualifierImport,$request->import_file);
        foreach($datas as $data){
            $rows = $data;
            foreach($rows as $row){
                if(substr_count($row[5],'*') < 2){

                    $birthday = ($row[7] - 25569) * 86400;
                    $birthday = 25569 + ($birthday / 86400);
                    $birthday = ($birthday - 25569) * 86400;
                    $birthday = gmdate("Y-m-d", $birthday);
                    

                    $address = [
                        'name' => $row[12].' '.$row[13].', '.$row[14],
                        'name2' => $row[15].', '.$row[16].' REGION '.$row[17],
                        'street' => $row[12],
                        'village' => $row[13],
                        'district' => $row[18],
                        'zip' => $row[19],
                        'barangay' => $row[14],
                        'municipality' =>$row[15],
                        'province' => $row[16],
                        'region' => $row[17],
                    ];

                    $parents = [
                        'father' => 'n/a',
                        'mother' => 'n/a',
                    ];

                    $requirements = [
                        'count' => substr_count($row[5],'*'),
                        'lacking' => $row[25],
                    ];

                    $information = [
                        'birth_place' => 'n/a',
                        'course' => 'n/a',
                        'school' => $row[20],
                        'address' => $address,
                        'parents' => $parents,
                        'requirements' => $requirements
                    ];
                
                    $name[] = [
                        'spas_id' => $row[0],
                        'category' => $row[1],
                        'email' => $row[10],
                        'lastname' => $row[3],
                        'firstname' => $row[4],
                        'middlename' => preg_replace("/[*]/", "", $row[5]),
                        'suffix' => ($row[6] != '') ? $row[7] : '',
                        'birthday' => $birthday,
                        'gender' => ($row[8] == 'M') ? 1 : 2,
                        'mobile' => '0'.$row[9],
                        'information' => $information,
                        'type' => ($request->type == 'Undergraduate') ? 1 : 0
                    ]; 
                }
            }
        }
        return $name;
    }

    public function store(Request $request){
        set_time_limit(0);
        $result = \DB::transaction(function () use ($request){

            $qualifiers = $request->users;
            $users = array();
            $success = array();
            $failed = array();
            $duplicate = array();

            if($request->editable == 'api'){
                
                foreach($qualifiers as $qualifier){
                    $count = Qualifier::where('spas_id',$qualifier['spas_id'])->count();
                    if($count == 0){
                        $information = [
                            "level" => "n/a",
                            "course"=> "n/a",
                            "school"=> "GODOD NHS",
                            "address"=> [
                                "zip"=> 7126,
                                "name"=> "PRK. 1 SOMALIA, POBLACION",
                                "name2"=> "GODOD, ZAMBOANGA DEL NORTE REGION 9",
                                "region"=> 9,
                                "street"=> "PRK. 1",
                                "village"=> "SOMALIA",
                                "barangay"=> "POBLACION",
                                "district"=> 3,
                                "province"=> "ZAMBOANGA DEL NORTE",
                                "municipality"=> "GODOD"
                            ],
                            "parents" => [
                                "father"=> "n/a",
                                "mother"=> "n/a"
                            ],
                            "birth_place"=> "n/a",
                            "requirements"=> [
                                "count"=> 0,
                                "lacking"=> null
                            ]
                        ];

                       
                        $user = [ 
                            'email' => $qualifier['email'],
                            'firstname' => $qualifier['firstname'],
                            'middlename' => $qualifier['middlename'],
                            'lastname' => $qualifier['lastname'],
                            'suffix' => $qualifier['suffix'],
                            'gender' => $qualifier['gender'],
                            'birthday' => $qualifier['birthday'],
                            'mobile' => $qualifier['mobile'],
                            'information' => json_encode($information),
                            'created_at'	=> now(),
                            'updated_at'	=> now()
                        ];
                        \DB::beginTransaction();
                        $profile = Profile::create($user);

                        if($profile){                       
                            $haha = [
                                'spas_id' => $qualifier['spas_id'],
                                'school_code' => 'n/a',
                                'course_id' => 'n/a',
                                'program_id' => $qualifier['program']['id'],
                                'profile_id' => $profile->id,
                                'is_undergrad' => $qualifier['is_undergrad'],
                                'is_waiting' => false,
                                'year' =>  date('Y'),
                                'created_at'	=> now(),
                                'updated_at'	=> now()
                            ];
                            
                            $q = Qualifier::insertOrIgnore($haha); 
                           

                            if($q){
                                $address = [
                                    'type' => 'Main',
                                    'is_within' => 1,
                                    'barangay_code' =>  $qualifier['barangay']['code'],
                                    'municipality_code' => $qualifier['municipality']['code'],
                                    'province_code' => $qualifier['province']['code'],
                                    'region_code' =>  $qualifier['region']['code'],
                                    'profile_id' => $profile->id,
                                    'is_completed' => 1,
                                    'created_at' => now(),
                                    'updated_at' => now()
                                ];
                                $a = ProfileAddress::insertOrIgnore($address);

                                array_push($success,$qualifier['spas_id']);
                                \DB::commit();
                            }else{
                                array_push($failed,$qualifier['spas_id']);
                                \DB::rollback();
                            }

                        }else{
                            array_push($failed,$qualifier['spas_id']);
                            \DB::rollback();
                        }

                    }else{
                        array_push($duplicate,$qualifier['spas_id']);
                    }
                }
            }else{
                foreach($qualifiers as $qualifier){
                    $count = Qualifier::where('spas_id',$qualifier['spas_id'])->count();
                    if($count == 0){

                        $program_id = ListProgram::where('name',$qualifier['category'])->pluck('id')->first();
                        
                        $address = [
                            'name' => $qualifier['information']['address']['name'],
                            'name2' => $qualifier['information']['address']['name2'],
                            'street' => $qualifier['information']['address']['street'],
                            'village' => $qualifier['information']['address']['village'],
                            'district' => $qualifier['information']['address']['district'],
                            'zip' => $qualifier['information']['address']['zip'],
                            'barangay' => $qualifier['information']['address']['barangay'],
                            'municipality' => $qualifier['information']['address']['municipality'],
                            'province' => $qualifier['information']['address']['province'],
                            'region' => $qualifier['information']['address']['region'],
                        ];
        
                        $parents = [
                            'father' => 'n/a',
                            'mother' => 'n/a',
                        ];
        
                        $requirements = [
                            'count' => $qualifier['information']['requirements']['count'],
                            'lacking' => $qualifier['information']['requirements']['lacking'],
                        ];
        
                        $information = [
                            'birth_place' => 'n/a',
                            'course' => 'n/a',
                            'level' => 'n/a',
                            'school' => $qualifier['information']['school'],
                            'address' => $address,
                            'parents' => $parents,
                            'requirements' => $requirements
                        ];    
                        
                        $birthday = date('Y-m-d',strtotime($qualifier['birthday']));
            
                        $user = [ 
                            'email' => $qualifier['email'],
                            'firstname' => $qualifier['firstname'],
                            'middlename' => $qualifier['middlename'],
                            'lastname' => $qualifier['lastname'],
                            'suffix' => $qualifier['suffix'],
                            'gender' => $qualifier['gender'],
                            'birthday' => $birthday,
                            'mobile' => ($qualifier['mobile'] == '') ? '09123456789' : $qualifier['mobile'],
                            'information' => json_encode($information),
                            'created_at'	=> now(),
                            'updated_at'	=> now()
                        ];
                        \DB::beginTransaction();
                        $profile = Profile::create($user);

                        if($profile){                       
                            $haha = [
                                'spas_id' => $qualifier['spas_id'],
                                'school_code' => 'n/a',
                                'course_id' => 'n/a',
                                'program_id' => $program_id,
                                'profile_id' => $profile->id,
                                'is_undergrad' => $qualifier['type'],
                                'is_waiting' => ($qualifier['information']['requirements']['count'] > 0) ? true : false,
                                'year' =>  date('Y'),
                                'created_at'	=> now(),
                                'updated_at'	=> now()
                            ];
                            
                            $q = Qualifier::insertOrIgnore($haha); 
                            $address = $this->searchAddress($qualifier['information']['address']['province'],$qualifier['information']['address']['municipality'],$qualifier['information']['address']['barangay'],$profile->id,1);
                            if($address == null){
                                $address = $this->searchAddress($qualifier['information']['address']['province'],$qualifier['information']['address']['municipality'],$qualifier['information']['address']['barangay'],$profile->id,0);
                            }

                            if($q){
                                array_push($success,$qualifier['spas_id']);
                                \DB::commit();
                            }else{
                                array_push($failed,$qualifier['spas_id']);
                                \DB::rollback();
                            }

                        }else{
                            array_push($failed,$qualifier['spas_id']);
                            \DB::rollback();
                        }
                    }else{
                        array_push($duplicate,$qualifier['spas_id']);
                    }
                }
            }

            $result = [
                'success' => $success,
                'failed' => $failed,
                'duplicate' => $duplicate,
            ];

            return $result;
        });

        return $result;
    }
}
