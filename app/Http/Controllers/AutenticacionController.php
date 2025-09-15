<?php

namespace App\Http\Controllers;

use App\Models\Drop;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Services\AutenticacionService;
use App\Http\Requests\AutenticacionRequest;


class AutenticacionController extends Controller
{

    protected $servicio;

    public function __construct(AutenticacionService $servicio)
    {
        $this->servicio = $servicio;
    }

    public function index()
    {
        $categorias = Categoria::where('estado', 1)->get();
        $drops = Drop::where('estado', 1)->get();

        return view('iniciarSesion.formularioInicioSesion', compact('categorias', 'drops'));
    }

    public function iniciarSesion(AutenticacionRequest $request)
    {
        $credenciales = $request->only('correo_electronico', 'clave');

        if ($this->servicio->iniciarSesion($credenciales)) {
            return redirect()->route('redireccion');
        }

        return back()->withErrors([
            'correo_electronico' => 'Las credenciales no son correctas.',
        ])->onlyInput('correo_electronico');
    }


    public function cerrarSesion(Request $request)
    {
        $this->servicio->cerrarSesion();
        return redirect()->route('inicio');
    }
}
