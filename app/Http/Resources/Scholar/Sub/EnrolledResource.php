<?php

namespace App\Http\Resources\Scholar\Sub;

use Illuminate\Http\Resources\Json\JsonResource;

class EnrolledResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'academic_year' => $this->semester->academic_year,
            'semester' => $this->semester->semester->name,
            'level' => $this->level->others,
            'school' => ucwords(strtolower($this->semester->school->school->name)),
            'campus' => ucwords(strtolower($this->semester->school->campus)),
            'scholar' => $this->scholar->profile->firstname.' '.$this->scholar->profile->middlename.' '.$this->scholar->profile->lastname,
            'enrolled_at' => $this->created_at
        ];
    }
}
