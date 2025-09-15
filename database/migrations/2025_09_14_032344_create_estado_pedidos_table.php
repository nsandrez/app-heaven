<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estado_pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained('pedidos')->onDelete('cascade');
            $table->enum('estado', ['pendiente', 'enviado', 'entregado', 'cancelado'])->default('pendiente');
            $table->timestamp('fecha_estado')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estado_pedidos');
    }
};
