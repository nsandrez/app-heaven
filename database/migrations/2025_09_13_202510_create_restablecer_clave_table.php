<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('restablecer_clave', function (Blueprint $table) {
            $table->string('correo_electronico')->index();
            $table->string('token');
            $table->timestamp('creado_en')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('restablecer_clave');
    }
};
