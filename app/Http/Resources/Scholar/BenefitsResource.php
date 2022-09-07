<?php

namespace App\Http\Resources\Scholar;

use Illuminate\Http\Resources\Json\JsonResource;

class BenefitsResource extends JsonResource
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
            'amount' => $this->amount,
            'month' => $this->month,
            'benefit' => $this->benefit->name,
            'status' => $this->status->name,
        ];
    }
}
