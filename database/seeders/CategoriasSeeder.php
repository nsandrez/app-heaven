<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriasSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'nombre' => 'Hoodies',
                'descripcion' => 'Categoría para polerones',
                'estado' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Pantalones',
                'descripcion' => 'Categoría para pantalones',
                'estado' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Poleras',
                'descripcion' => 'Categoría para poleras',
                'estado' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
