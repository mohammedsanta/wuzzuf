<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSkillRequest extends FormRequest
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
            'skill' => ['required'],
            'Proficiency' => ['sometimes'],
            'Interest' => ['sometimes'],
            'YearsExperience' => ['required'],
            'Justification' => ['sometimes'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => 1
        ]);
    }
}
