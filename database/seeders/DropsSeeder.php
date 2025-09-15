<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DropsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('drops')->insert([
            'nombre' => 'Drop 2025',
            'fecha_lanzamiento' => '2025-10-01',
            'estado' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
