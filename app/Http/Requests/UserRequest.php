<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'sometimes|required|email|max:150|unique:users,email,'.$this->id,
            'role' => 'sometimes|required|string',
            'firstname' => 'sometimes|required|string|max:100',
            'lastname' => 'sometimes|required|string|max:100',
            'middlename' => 'sometimes|required|string|max:20',
            'gender' => 'sometimes|required',
            'is_active' => 'sometimes|required',
            'mobile' => 'sometimes|required|numeric|unique:user_profiles,mobile,'.$this->profile_id,
            'img' => 'nullable|image64:jpeg,jpg,png',
        ];
    }
}
