<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('drops', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique(); 
            $table->date('fecha_lanzamiento')->nullable();
            $table->boolean('estado')->default(true); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('drops');
    }
};
