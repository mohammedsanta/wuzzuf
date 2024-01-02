<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLinksRequest extends FormRequest
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
            'LinkedIn' => ['sometimes'],
            'Facebook' => ['sometimes'],
            'Twitter' => ['sometimes'],
            'Behance' => ['sometimes'],
            'Instagram' => ['sometimes'],
            'GitHub' => ['sometimes'],
            'Overflow' => ['sometimes'],
            'YouTube' => ['sometimes'],
            'Blog' => ['sometimes'],
            'Website' => ['sometimes'],
            'Other' => ['sometimes'],
        ];
    }
}
