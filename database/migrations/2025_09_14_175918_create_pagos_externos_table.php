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
        Schema::create('pagos_externos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pago_id')->constrained('pagos')->onDelete('cascade');
            $table->string('proveedor'); 
            $table->string('transaccion_id')->nullable(); 
            $table->json('respuesta_completa'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos_externos');
    }
};
