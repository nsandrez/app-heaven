<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->string('rut');
            $table->string('nombre_completo');
            $table->string('calle');
            $table->string('apartamento')->nullable();
            $table->string('region');
            $table->string('comuna');
            $table->string('codigo_postal');
            $table->string('telefono')->nullable();
            $table->boolean('es_principal')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('direcciones');
    }
};
