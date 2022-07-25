<?php

namespace App\Http\Resources\Benefit;

use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
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
            'name' => $this->profile->lastname.', '. $this->profile->firstname.' '. $this->profile->middlename,
            'benefits' => $this->benefits,
            'total' => $this->benefits->sum('amount')
        ];
    }
}
