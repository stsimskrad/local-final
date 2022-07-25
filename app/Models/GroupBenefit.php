<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupBenefit extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'month', 'group_id', 'benefit_id', 'scholar_id', 'amount', 'release_type', 'status_id'
    ];

    public function group()
    {
        return $this->belongsTo('App\Models\Group', 'group_id', 'id');
    }

    public function scholar()
    {
        return $this->belongsTo('App\Models\Scholar', 'scholar_id', 'id');
    }

    public function benefit()
    {
        return $this->belongsTo('App\Models\ListPrivilige', 'benefit_id', 'id');
    }

    public function getMonthAttribute($value)
    {
        return date('M Y', strtotime($value));
    }
}
