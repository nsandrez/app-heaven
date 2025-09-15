<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('correo_electronico')->unique();
            $table->string('clave');
            $table->foreignId('rol_id')->constrained('roles')->onDelete('cascade');
            $table->string('telefono');
            $table->string('estado')->default('activo');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
