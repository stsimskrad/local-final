<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NameResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'firstname' => $this->profile->firstname,
            'lastname' => $this->profile->lastname,
            'middlename' => $this->profile->middlename
        ];
    }
}
