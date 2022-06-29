<?php

namespace App\Http\Resources\Scholar;

use Illuminate\Http\Resources\Json\JsonResource;

class BenefitResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'total' => $this->total,
            'month' => $this->release->month->month,
            'is_regular' => $this->release->month->group->is_regular,
            'semester' => $this->release->month->group->semester->name,
            'academic_year' => $this->release->month->group->academic_year,
            'lists' => ListsResource::collection($this->lists),
            'created_at' => $this->created_at,
        ];
    }
}
