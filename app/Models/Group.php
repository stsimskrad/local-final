<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['academic_year','is_regular','is_active','semester_id'];

    public function lists()
    {
        return $this->hasMany('App\Models\GroupList', 'group_id');
    } 

    public function benefits()
    {
        return $this->hasMany('App\Models\GroupBenefit', 'group_id');
    } 

    public function months()
    {
        return $this->hasMany('App\Models\GroupMonth', 'group_id');
    } 

    public function semester()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'semester_id', 'id');
    }

    public function completed()
    {
        return $this->hasMany('App\Models\GroupList', 'group_id')->where('count',5)->count();
    } 

    public function hold()
    {
        return $this->hasMany('App\Models\GroupList', 'group_id')->where('is_hold',1)->count();
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
