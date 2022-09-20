<?php

namespace App\Http\Middleware;

use App\Models\Scholar;
use App\Models\ListDropdown;
use App\Models\ListProgram;
use App\Models\ListExpense;
use App\Models\ListPrivilege;
use App\Models\LocationRegion;
use Illuminate\Http\Request;
use Inertia\Middleware;
use App\Http\Resources\UserResource;
use App\Http\Resources\Scholar\IndexResource;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';

    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    public function share(Request $request): array
    {   
        if(\Auth::check()){
            if((\Auth::user()->role == 'Scholar')){
                $data = Scholar::with('profile.address.region','profile.address.province','profile.address.municipality','profile.address.barangay')
                ->with('program')->with('profile.user')->with('education.school.school','education.course')
                ->whereHas('profile',function ($query) {
                    $query->whereHas('user',function ($query) {
                        $query->where('id',\Auth::user()->id);
                    });
                })->first();

                $data = new IndexResource($data);
            }
        }

        return array_merge(parent::share($request), [
        
            'auth' => (\Auth::check()) ? new UserResource(\Auth::user()) : '',
            'scholar' => (\Auth::check()) ? (\Auth::user()->role == 'Scholar') ?  $data : 'n/a' : '',
            'flash' => [
                'message' => session('message'),
                'datares' => session('data'),
                'datares2' => session('data2'),
                'type' => session('type'),
                'profile' => session('profile')
            ],
            'regions' => LocationRegion::all(),
            'dropdowns' => ListDropdown::all(),
            'programs' => ListProgram::all(),
            'expenses' => ListExpense::all(),
            'privileges' => ListPrivilege::all()
        ]);
    }
}
