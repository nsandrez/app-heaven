<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('usuario_ruletas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('ruleta_promocion_id')->constrained('ruleta_promociones')->onDelete('cascade');
            $table->boolean('canjeado')->default(false);
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('usuario_ruletas');
    }
};
