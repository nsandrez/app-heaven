<?php

namespace App\Http\Controllers;

use App\Http\Requests\DropRequest;
use App\Models\Categoria;
use App\Services\DropService;
use Illuminate\Http\Request;

class DropController extends Controller
{
    protected $servicio;

    public function __construct(DropService $servicio)
    {
        $this->servicio = $servicio;
    }

    public function index($id = null)
    {
        $drops = $this->servicio->obtenerDrops();

        $drop = null;
        $productos = collect();

        if ($id) {
            $drop = $this->servicio->obtenerDropPorId($id);

            if (!$drop) {
                return redirect()->back()->with('error', 'Categoría no encontrada');
            }

            $productos = $drop->productos()->where('estado', 1)->get();
            $categorias = Categoria::where('estado', 1)->get();
        }

        return view('inicio.drops.drop', compact('drops', 'drop', 'productos', 'categorias'));
    }

    public function obtenerDrops()
    {
        return response()->json($this->servicio->obtenerDrops(), 200);
    }

    public function crearDrop(DropRequest $request)
    {
        $drop = $this->servicio->crearDrop($request->validated());

        return response()->json(['message' => 'Drop creado correctamente', 'data' => $drop], 201);
    }

    public function actualizarDrop(int $id, DropRequest $request)
    {
        $drop = $this->servicio->actualizarDrop($id, $request->validated());

        return response()->json(['message' => 'Drop actualizado correctamente',  'data' => $drop], 200);
    }

    public function desactivarDrop(int $id)
    {
        $this->servicio->desactivarDrop($id);

        return response()->json(['message' => 'Drop desactivado correctamente'], 200);
    }


    public function obtenerDropPorId(int $id)
    {
        $drop = $this->servicio->obtenerDropPorId($id);

        if (!$drop) {
            return response()->json(['message' => 'Drop no encontrado'], 404);
        }

        return response()->json($drop, 200);
    }
}
