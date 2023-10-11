<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobDetailsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'ExperienceNeeded' => ['required'],
            'CareerLevel' => ['required'],
            'EducationLevel' => ['required'],
            'Salary' => ['required'],
            'JobCategories' => ['required'],
            'skills' => ['required'],
        ];
    }

    // public function prepareForValidation()
    // {
    //     $this->merge([
    //         'job_id' => 1
    //     ]);
    // }
}
