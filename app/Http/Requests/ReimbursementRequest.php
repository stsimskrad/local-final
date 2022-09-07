<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReimbursementRequest extends FormRequest
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
            'amount' => 'required|integer|not_in:0',
            'benefit_id' => 'required',
            'scholar_id' => 'required',
            'school_semester_id' => 'required',
            'files.*' => 'required|mimes:pdf,docx|max:2000'
        ];
    }

    public function messages()
    {
        $message = [
            'benefit_id.required' => 'Benefit is required.',
            'scholar_id.required' => 'Scholar is required.',
            'school_semester_id.required' => 'AY/Semester is Required.',
            'amount.required' => 'Amount is required.'

        ];
        return $message;
    }
}
