<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre_completo',
        'correo_electronico',
        'clave',
        'rol_id',
        'telefono',
        'estado',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }

    public function getAuthPassword()
    {
        return $this->clave;
    }

    public function getAuthIdentifierName()
    {
        return 'correo_electronico';
    }
}
