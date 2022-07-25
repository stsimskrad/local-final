<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'avatar' => $this->avatar,
            'role' => $this->role,
            'is_active' => $this->is_active,
            'profile_id' => ($this->role == 'Scholar') ? $this->scholar->id : $this->profile->id,
            'firstname' => ($this->role == 'Scholar') ? $this->scholar->firstname : $this->profile->firstname,
            'lastname' => ($this->role == 'Scholar') ? $this->scholar->lastname : $this->profile->lastname,
            'middlename' => ($this->role == 'Scholar') ? $this->scholar->middlename : $this->profile->middlename,
            'suffix' => ($this->role == 'Scholar') ? $this->scholar->suffix : $this->profile->suffix,
            'gender' => ($this->role == 'Scholar') ? $this->scholar->gender : $this->profile->gender,
            'mobile' => ($this->role == 'Scholar') ? $this->scholar->mobile : $this->profile->mobile,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
