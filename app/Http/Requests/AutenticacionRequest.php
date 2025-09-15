<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutenticacionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // siempre permitimos esta request
    }

    public function rules(): array
    {
        return [
            'correo_electronico' => ['required', 'email', 'exists:usuarios,correo_electronico'],
            'clave' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'correo_electronico.required' => 'El correo electrónico es obligatorio.',
            'correo_electronico.email' => 'Debe ingresar un correo válido.',
            'correo_electronico.exists' => 'Este correo no está registrado en nuestra plataforma.',
            'clave.required' => 'La contraseña es obligatoria.',
        ];
    }
}
