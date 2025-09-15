<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DropRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'nombre' => 'required|string|',
            'fecha_lanzamiento' => 'nullable|date',
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
