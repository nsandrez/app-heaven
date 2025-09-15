<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('codigos_descuento', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique(); 
            $table->decimal('descuento_porcentaje', 5, 2)->nullable(); 
            $table->decimal('descuento_fijo', 10, 2)->nullable(); 
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->integer('uso_maximo')->default(1); 
            $table->integer('uso_actual')->default(0); 
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codigos_descuento');
    }
};
