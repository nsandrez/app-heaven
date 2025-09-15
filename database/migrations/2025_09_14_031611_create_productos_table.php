<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->foreignId('drop_id')->nullable()->constrained('drops')->onDelete('set null');
            $table->string('imagen_url')->nullable();
            $table->string('imagenDos_url')->nullable();
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
