<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScholarResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);

        // return [
        //     'id' => $this->id,
        //     'email' => $this->email,
        //     'avatar' => $this->avatar,
        //     'role' => $this->role,
        //     'is_active' => $this->is_active,
        //     'profile_id' => $this->scholar->id,
        //     'firstname' => $this->scholar->firstname,
        //     'lastname' => $this->scholar->lastname,
        //     'middlename' => $this->scholar->middlename,
        //     'suffix' => $this->scholar->suffix,
        //     'gender' => $this->scholar->gender,
        //     'mobile' => $this->scholar->mobile,
        //     'created_at' => $this->created_at,
        //     'updated_at' => $this->updated_at
        // ];
    }
}
