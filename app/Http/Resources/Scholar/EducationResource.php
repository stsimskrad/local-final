<?php

namespace App\Http\Resources\Scholar;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Scholar\Sub\SchoolResource;

class EducationResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'is_completed' => $this->is_completed,
            'school' => ($this->school == null) ? $this->schoolInfo['name'] : new SchoolResource($this->school),
            'level' => ($this->level == null) ? 'n/a' : $this->level,
            'course' => ($this->course == null) ? $this->courseInfo['name'] : $this->course,
            'subcourse' => $this->subcourse,
            'award' => ($this->award == null) ? 'n/a' : $this->award,
            'information' => json_decode($this->information), //json_decode
            'has_school' => ($this->school == null) ? false : true,
            'has_level' => ($this->level == null) ? false : true,
            'has_course' => ($this->course == null) ? false : true,
            'has_subcourse' => ($this->subcourse == null) ? false : true,
        ];
    }
}
