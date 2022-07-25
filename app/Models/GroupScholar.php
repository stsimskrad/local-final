<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupScholar extends Model
{
    use HasFactory;

    protected $fillable = [
        'total', 'scholar_id', 'release_id'
    ];

    public function benefits()
    {
        return $this->hasMany('App\Models\GroupBenefit', 'release_id');
    } 

    // public function lists()
    // {
    //     return $this->hasMany('App\Models\GroupList', 'scholar_id');
    // } 

    public function scholar()
    {
        return $this->belongsTo('App\Models\Scholar', 'scholar_id', 'id');
    }

    public function release()
    {
        return $this->belongsTo('App\Models\GroupRelease', 'release_id', 'id');
    }
}
