<?php

namespace App\Http\Controllers\Scholar;

use App\Models\Scholar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request){
        if($request->type == 'totals'){
            return $this->totals();
        }
    }

    public function totals(){
        $total = Scholar::count();
        $graduates = Scholar::where('status_id',36)->count();
        $ongoing = Scholar::whereIn('status_id',[31,32,33,34,35])->count();

        $array = [
            ['counts' => $total, 'name' => 'Total Scholars', 'icon' => 'bx-group', 'color' => 'success'],
            ['counts' => $graduates,'name' => 'Total Graduates', 'icon' => 'bxs-graduation', 'color' => 'info'],
            ['counts' => $ongoing,'name' => 'Ongoing Scholars', 'icon' => 'bx-user-circle', 'color' => 'primary']
        ];

        return $array;
    }
}
