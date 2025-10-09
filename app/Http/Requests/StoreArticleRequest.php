<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Autorizzazione:  true
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Regole di validazione
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:150',
            'category' => 'required|max:50',
            'body' => 'nullable|max:5000',
        ];
    }

   
    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare i 150 caratteri.',
            'category.required' => 'La categoria è obbligatoria.',
            'category.max' => 'La categoria non può superare i 50 caratteri.',
            'body.max' => 'Il contenuto non può superare i 5000 caratteri.',
        ];
    }
}
