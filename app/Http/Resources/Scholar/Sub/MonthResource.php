<?php

namespace App\Http\Resources\Scholar\Sub;

use Illuminate\Http\Resources\Json\JsonResource;

class MonthResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'month' => $this->month,
            'group_id' => $this->group_id,
            'academic_year' => $this->group->academic_year,
            'semester' => $this->group->semester->name,
            'is_regular' => $this->group->is_regular,
            'releases' => ReleaseResource::collection($this->releases)
        ];
    }
}
