<?php

namespace App\Http\Resources\Scholar\Sub;

use App\Http\Resources\NameResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ReleaseResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'number' => $this->number,
            'dv_no' => $this->dv_no,
            'added_by' => new NameResource($this->user),
            'total' => $this->scholarsTotal(),
            'scholars' => $this->scholarsCount(),
            'created_at' => $this->created_at
        ];
    }
}
