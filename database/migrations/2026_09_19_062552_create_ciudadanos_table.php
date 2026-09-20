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
        Schema::create('administracion.ciudadanos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_doc_id')->constrained('administracion.tipo_documento');
            $table->string('cedula', 30)->unique();
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('correo_personal', 150)->unique();
            $table->foreignId('genero_id')->constrained('administracion.generos');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion_corta')->nullable();
            $table->foreignId('estado_id')->constrained('administracion.estados');
            $table->foreignId('municipio_id')->constrained('administracion.municipio');
            $table->foreignId('parroquia_id')->constrained('administracion.parroquia');
            $table->foreignId('pais_id')->constrained('administracion.paises');
            $table->string('RIF')->nullable();
            $table->string('telefono_movil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administracion.ciudadanos');
    }
};
