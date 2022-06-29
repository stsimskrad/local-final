<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SemesterResource extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'academic_year' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'semester_id' => 'required',
            'school_id' => 'required'
        ];
    }

    public function messages()
    {
        $message = [
            'academic_year.required' => 'required',
            'start_at.required' => 'required',
            'end_at.required' => 'required',
            'semester_id.required' => 'required',
        ];

        return $message;
    }
}
