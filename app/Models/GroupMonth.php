<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMonth extends Model
{
    use HasFactory;

    protected $fillable = [
        'month', 'group_id'
    ];

    public function group()
    {
        return $this->belongsTo('App\Models\Group', 'group_id', 'id');
    }

    public function releases()
    {
        return $this->hasMany('App\Models\GroupRelease', 'month_id');
    } 

    public function getMonthAttribute($value)
    {
        return date('F', strtotime($value));
    }

}
