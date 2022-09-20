<?php

namespace App\Http\Resources\Scholar;

use Illuminate\Http\Resources\Json\JsonResource;

class ReimbursementResource extends JsonResource
{
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'status' => $this->status->name,
            'color' => $this->status->color,
            'benefit' => $this->benefit->name,
            'scholar' => $this->scholar->profile->firstname.' '.$this->scholar->profile->middlename.' '.$this->scholar->profile->lastname,
            'attachment' => json_decode($this->attachment)
        ];
    }
}
