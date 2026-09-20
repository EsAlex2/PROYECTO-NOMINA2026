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
        Schema::create('administracion.datos_familiares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_doc_id')->constrained('administracion.tipo_documento');
            $table->string('cedula');
            $table->string('correlativo_familiar')->nullable();
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->foreignId('genero_id')->constrained('administracion.generos');
            $table->date('fecha_nacimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administracion.datos_familiares');
    }
};
