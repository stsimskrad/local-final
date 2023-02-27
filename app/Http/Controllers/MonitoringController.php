<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualifier;
use App\Models\Scholar;

class MonitoringController extends Controller
{
    public function index(){
        return inertia('Monitoring/Index');
    }
    

    public function api(){

        $data = [
            'Examinees' => 0,
            'Ongoing Scholars' => Scholar::where('status_id',31)->count(),
            'Graduates' => Scholar::where('status_id',36)->count(),
            'Qualifiers' => Qualifier::count()
        ];

        return $data;
    }
}
