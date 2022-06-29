<?php

namespace App\Http\Resources\Qualifier;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'suffix' => $this->suffix,
            'gender' => $this->gender,
            'mobile' => $this->mobile,
            'birthday' => $this->birthday,
            'is_completed' => $this->is_completed, 
        ];
    }
}
