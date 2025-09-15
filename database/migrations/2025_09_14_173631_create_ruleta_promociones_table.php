<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('ruleta_promociones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->string('tipo'); 
            $table->decimal('valor', 10, 2)->nullable(); 
            $table->integer('probabilidad')->default(10); 
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ruleta_promociones');
    }
};
