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
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained('pedidos')->onDelete('cascade');
            $table->string('empresa')->nullable(); 
            $table->string('tracking')->nullable(); 
            $table->string('estado')->default('pendiente'); 
            $table->timestamp('fecha_envio')->nullable();
            $table->timestamp('fecha_entrega')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envios');
    }
};
