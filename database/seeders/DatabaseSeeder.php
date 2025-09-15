<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(RolesSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(DropsSeeder::class);
    }
}
