<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateListingRequest extends FormRequest
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
            'title' => 'string|required|max:255',
            'description' => 'string|required|max:255',
            'make' => 'string|required|max:255',
            'model' => 'string|required|max:255',
            'year' => 'numeric|required|min:0',
            'zip' => 'numeric|required',
            'price' => 'numeric|required',
        ];
    }
}
