<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RolRedireccion
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            $usuario = auth()->user();

            if ($usuario->rol) {
                switch ($usuario->rol->nombre) {
                    case 'Administrador':
                        if (!$request->routeIs('admin.inicio')) {
                            return redirect()->route('admin.inicio');
                        }
                        break;

                    case 'Cliente':
                        if (!$request->routeIs('inicio')) {
                            return redirect()->route('inicio');
                        }
                        break;

                    default:
                        if (!$request->routeIs('inicio')) {
                            return redirect()->route('inicio');
                        }
                }
            }
        }

        return $next($request);
    }
}
