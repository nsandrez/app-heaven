<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutenticacionService
{
  

    public function iniciarSesion(array $credenciales): bool
    {
        if (Auth::attempt([
            'correo_electronico' => $credenciales['correo_electronico'],
            'password' => $credenciales['clave'],
        ])) {
            session()->regenerate();
            return true;
        }

        return false;
    }

    public function cerrarSesion(): void
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
    }

    public function verificarClave(string $clave, string $hash): bool
    {
        return Hash::check($clave, $hash);
    }
}
