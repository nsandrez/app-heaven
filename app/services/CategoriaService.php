<?php

namespace App\Services;

use App\Models\Categoria;

class CategoriaService
{
    public function obtenerCategorias()
    {
        return Categoria::all();
    }

    public function crearCategoria(array $data)
    {
        return Categoria::create(['nombre' => $data['nombre'], 'descripcion' => $data['descripcion'] ?? null, 'estado' => $data['estado'] ?? 1,]);
    }

    public function actualizarCategoria(int $id, array $data)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($data);

        return $categoria;
    }

    public function desactivarCategoria(int $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->estado = 0;
        $categoria->save();

        return $categoria;
    }

    public function obtenerCategoriaPorId(int $id)
    {
        return Categoria::findOrFail($id);
    }
}
