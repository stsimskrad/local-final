<?php

namespace App\Http\Controllers\Scholar\Benefit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {       
        if($request->search){
            
        }else{
            return inertia('Benefits/Index');
        }
    }
}
