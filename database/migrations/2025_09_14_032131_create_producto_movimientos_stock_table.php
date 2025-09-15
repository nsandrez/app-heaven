<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('movimientos_stock', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_talla_id')->constrained('producto_tallas')->onDelete('cascade');
            $table->enum('tipo', ['entrada', 'salida']); 
            $table->integer('cantidad');
            $table->string('descripcion')->nullable(); 
            $table->timestamp('fecha')->useCurrent();
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('producto_movimientos_stock');
    }
};
