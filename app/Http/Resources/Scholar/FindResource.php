<?php

namespace App\Http\Resources\Scholar;

use Illuminate\Http\Resources\Json\JsonResource;

class FindResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->profile->firstname.' '.$this->profile->middlename.' '.$this->profile->lastname,
            'semesters' => $this->education->school->semesters
        ];
    }
}
