<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'nombre' => 'required|string|',
            'descripcion' => 'nullable|string',
            'estado' => 'boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
        ];
    }
}
