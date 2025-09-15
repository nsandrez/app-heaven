<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drop extends Model
{
    use HasFactory;

    protected $table = 'drops';

    protected $fillable = [
        'nombre',
        'fecha_lanzamiento',
        'estado',
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoria_id');
    }
}
