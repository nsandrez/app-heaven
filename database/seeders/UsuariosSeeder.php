<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nombre_completo'   => 'Nicolas',
                'correo_electronico' => 'nsandres@heaven.cl',
                'clave'             => Hash::make('20262113-9n'),
                'rol_id'            => 1,
                'telefono'          => '939324353',
                'estado'            => 'activo',
                'created_at'        => now(),
            ],
            [
                'nombre_completo'   => 'Elias',
                'correo_electronico' => 'elias@heaven.cl',
                'clave'             => Hash::make('elias1234'),
                'rol_id'            => 1,
                'telefono'          => '958279607',
                'estado'            => 'activo',
                'created_at'        => now(),
            ],
            [
                'nombre_completo'   => 'Gabriel',
                'correo_electronico' => 'gabriel@heaven.cl',
                'clave'             => Hash::make('gabriel1234'),
                'rol_id'            => 1,
                'telefono'          => '998458461',
                'estado'            => 'activo',
                'created_at'        => now(),
            ],
            [
                'nombre_completo'   => 'Mitchel',
                'correo_electronico' => 'mitchel@heaven.cl',
                'clave'             => Hash::make('mitchel1234'),
                'rol_id'            => 1,
                'telefono'          => '984669591',
                'estado'            => 'activo',
                'created_at'        => now(),
            ],
            [
                'nombre_completo'   => 'Cliente',
                'correo_electronico' => 'cliente@heaven.cl',
                'clave'             => Hash::make('cliente123'),
                'rol_id'            => 2,
                'telefono'          => '900000000',
                'estado'            => 'activo',
                'created_at'        => now(),
            ],
        ]);
    }
}
