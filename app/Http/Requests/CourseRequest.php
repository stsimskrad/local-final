<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'course_id' => 'required',
            'type' => 'nullable|string|max:100|unique:school_courses,type,NULL,'.$this->id.',school_id,'.$this->school_id,'course_id,'.$this->course_id,
            'years' => 'required'
        ];
    }
}
