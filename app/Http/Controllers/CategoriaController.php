<?php

namespace App\Http\Controllers;

use App\Models\Drop;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Services\CategoriaService;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    protected $servicio;

    public function __construct(CategoriaService $servicio)
    {
        $this->servicio = $servicio;
    }

    public function index($id = null)
    {
        $categorias = $this->servicio->obtenerCategorias();

        $categoria = null;
        $productos = collect();

        if ($id) {
            $categoria = $this->servicio->obtenerCategoriaPorId($id);

            if (!$categoria) {
                return redirect()->back()->with('error', 'Categoría no encontrada');
            }

            $productos = $categoria->productos()->where('estado', 1)->get();
            $drops = Drop::where('estado', 1)->get();
        }

        return view('inicio.categorias.categoria', compact('categorias', 'categoria', 'productos', 'drops'));
    }


    public function obtenerCategorias()
    {
        return response()->json($this->servicio->obtenerCategorias(), 200);
    }

    public function crearCategoria(CategoriaRequest $request)
    {
        $categoria = $this->servicio->crearCategoria($request->validated());

        return response()->json(['message' => 'Categoría creada correctamente', 'data' => $categoria], 201);
    }

    public function actualizarCategoria(int $id, CategoriaRequest $request)
    {
        $categoria = $this->servicio->actualizarCategoria($id, $request->validated());

        return response()->json(['message' => 'Categoría actualizada correctamente',  'data' => $categoria], 200);
    }

    public function desactivarCategoria(int $id)
    {
        $this->servicio->desactivarCategoria($id);

        return response()->json(['message' => 'Categoría desactivada correctamente'], 200);
    }


    public function obtenerCategoriaPorId(int $id)
    {
        $categoria = $this->servicio->obtenerCategoriaPorId($id);

        if (!$categoria) {
            return response()->json(['message' => 'Categoría no encontrada'], 404);
        }

        return response()->json($categoria, 200);
    }
}
