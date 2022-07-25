<?php

namespace App\Http\Controllers\Qualifier;

use App\Models\ListCourse;
use App\Imports\QualifierImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImportController extends Controller
{ 
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
                $name[] = [
                    'name' => $row[0],
                ]; 
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

            foreach($qualifiers as $qualifier){                
                $user = [ 
                    'name' => $qualifier['name'],
                    'is_active' => 1,
                    'created_at'	=> now(),
                    'updated_at'	=> now()
                ];
                \DB::beginTransaction();
                $profile = ListCourse::create($user);        
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
