<?php

namespace App\Services;

use App\Models\Drop;

class DropService
{

    public function obtenerDrops()
    {
        return Drop::all();
    }

    public function crearDrop(array $data)
    {
        return Drop::create(['nombre' => $data['nombre'], 'fecha_lanzamiento' => $data['fecha_lanzamiento'] ?? null, 'estado' => $data['estado'] ?? 1,]);
    }

    public function actualizarDrop(int $id, array $data)
    {
        $drop = Drop::findOrFail($id);
        $drop->update($data);

        return $drop;
    }

    public function desactivarDrop(int $id)
    {
        $drop = Drop::findOrFail($id);
        $drop->estado = 0;
        $drop->save();

        return $drop;
    }

    public function obtenerDropPorId(int $id)
    {
        return Drop::findOrFail($id);
    }
}
