<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalInfoRequest extends FormRequest
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
            'FirstName' => 'sometimes',
            'LastName' => 'sometimes',
            'Birthday' => ['sometimes'],
            'Gender' => ['sometimes'],
            'Nationality' => ['sometimes'],
            'MaritalStatus' => ['sometimes'],
            'NumberDependents' => ['sometimes'],
            'MilitaryStatus' => ['sometimes'],
            'License' => ['sometimes'],
        ];
    }
}
