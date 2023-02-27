<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Jobs\EmailNewAccount;

class UserController extends Controller
{
    public function index(Request $request)
    {   
        $data = UserResource::collection(
            User::query()
            ->with('profile')
            ->when($request->keyword, function ($query, $keyword) {
                $query->whereHas('profile',function ($query) use ($keyword) {
                    $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', "%{$keyword}%")
                    ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', "%{$keyword}%");
                })->orWhere(function ($query) use ($keyword) {
                    $query->where('email', 'LIKE', "%{$keyword}%");
                });
            })
            ->whereNotIn('role',['Scholar','Super Administrator'])
            ->orderBy('created_at','DESC')
            ->paginate($request->count)
            ->withQueryString()
        );

        if($request->search){
            return $data;
        }else{
            return inertia('Users/Index');
        }
        
    }

    public function store(UserRequest $request)
    { 
        $data = \DB::transaction(function () use ($request){
            return $data = User::new($request->all());
        });

        return back()->with([
            'message' => 'User created successfully. Thanks',
            'data' => new UserResource($data),
            'type' => 'bxs-check-circle'
        ]); 
    }

    public function update(UserRequest $request)
    {   
        $data = \DB::transaction(function () use ($request){
            if($request->editable === 'verify'){
                if(EmailNewAccount::dispatch($request->id)->delay(now()->addSeconds(10))){
                    return [
                        'data' => '',
                        'message' => 'User verification successfully send. Thanks',
                        'type' => 'bx-mail-send'
                    ];
                }
            }else{
                $data = User::findOrFail($request->id);
                $data->update($request->except('img','editable'));
                $profile = UserProfile::where('user_id',$request->id)->first();
                $profile->update($request->except('email','role','is_active','img','editable'));
                ($request->img != '') ? $data = $data->image($request->all()) : '';
                $data = User::findOrFail($request->id);
                return [
                    'data' => $data,
                    'message' => 'User updated successfully. Thanks',
                    'type' => 'bxs-check-circle'
                ];
            }
        });
        
        if($request->editable){
            return back()->with([
                'message' => $data['message'],
                'data' => ($data['data'] != '') ? new UserResource($data['data']) : '',
                'type' => $data['type']
            ]);
        }else{
            return new UserResource($data['data']);
        }
    }

    public function password(Request $request){

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json(['error' => "Password doesn't match."], 401);
        }

        if(strcmp($request->get('current_password'), $request->get('password')) == 0){
            return response()->json(['error' => 'Please choose a different password'], 401);
        }

        $validatedData = $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:9|confirmed',
        ]);

        User::find(\Auth::user()->id)->update(['password'=> Hash::make($request->input('password'))]);

        if(Auth::user()->status == 'Inactive'){
            User::find(auth()->user()->id)->update(['status'=> 'Active']);
            return response()->json(['success' => 'First Attempt'], 200);
        }else{
            return response()->json(['success' => 'Password changed successfully !'], 200);
        }
    }


}
