<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NintendoRequest extends FormRequest
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
            'title' => 'required|min:5',
            'gender' => 'required|min:5',
            'price' => 'required|max_digits:6',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => "Il nome del videogioco è obbligatorio",
            'title.min' => 'Il nome deve contenere almeno 5 caratteri',

            'gender.required' => "Il genere è obbligatorio",
            'gender.min' => 'Il nome del genere deve contenere almeno 5 caratteri',

            'price.required' => "Il prezzo è obbligatorio",
            'price.min' => 'Il prezzo deve contenere almeno 6 cifre',
        ];
    }
}
