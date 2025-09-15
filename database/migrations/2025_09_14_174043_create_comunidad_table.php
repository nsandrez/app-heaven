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
        Schema::create('comunidad', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable(); 
            $table->string('usuario')->nullable(); 
            $table->string('video_url'); 
            $table->string('video_id');  
            $table->boolean('activo')->default(true); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunidad');
    }
};
