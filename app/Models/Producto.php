<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'categoria_id',
        'drop_id',
        'imagen_url',
        'imagenDos_url',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function drop()
    {
        return $this->belongsTo(Drop::class, 'drop_id');
    }
}
