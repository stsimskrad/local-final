<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use \Spatie\WelcomeNotification\ReceivesWelcomeNotification;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Laravel\Sanctum\HasApiTokens;
use App\Jobs\EmailNewAccount;
use App\Http\Traits\ImageUploadTrait;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, ReceivesWelcomeNotification, LogsActivity, ImageUploadTrait; 

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable()
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }

    protected $fillable = [
        'email',
        'password',
        'role',
        'is_active',
        'avatar',
        'welcome_valid_until'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne('App\Models\UserProfile', 'user_id');
    } 

    public function scholar()
    {
        return $this->hasOne('App\Models\Profile', 'user_id');
    } 

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'user_id');
    } 

    public function hasRole($roles)
    {
        foreach ($roles as $role) {
            if ($this->role == $role) {
                return true;
            }
        }
        return false;
    }

    public function scopeNew($query, $request){
        $user = $query->create(array_merge($request, ['password' => bcrypt('dost9ict')]));
        $user->profile()->create($request);
        $user = $this->storeImage($request,$user->id);
        EmailNewAccount::dispatch($user->id)->delay(now()->addSeconds(10));
        return $user;
    }

    public function scopeImage($query, $request){
        $user = $this->storeImage($request);
        return $user;
    }

    public function scopeMail($query, $request){
        
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }
}
