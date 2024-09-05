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
        Schema::create('users', function (Blueprint $table) {
            $table->id('idUser')->autoIncrement()->nullable(false); // Clave primaria
            $table->string('photo', 255)->nullable(); // Imagen de perfil (opcional)
            $table->string('name', 50)->nullable(false); // Nombre del usuario (no opcional)
            $table->string('email', 100)->nullable(false)->unique(); // Email (único y no opcional)
            $table->string('password', 255)->nullable(false); // Contraseña (no opcional)
            $table->integer('verified')->nullable(false); // Verificado (no opcional)
            $table->integer('logicdeleted')->nullable(); // Marcador de eliminación lógica (opcional)
            $table->string('token', 255)->nullable(); // Token (opcional)
            $table->timestamps(); // Created_at y Updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Eliminar tabla si existe
    }
};
