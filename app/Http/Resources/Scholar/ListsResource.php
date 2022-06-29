<?php

namespace App\Http\Resources\Scholar;

use Illuminate\Http\Resources\Json\JsonResource;

class ListsResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'release_type' => $this->release_type,
            'benefit' => $this->benefit->name,
            'benefit_amount' => $this->benefit->amount,
            'dividen' => $this->amount/$this->benefit->amount
        ];
    }
}
