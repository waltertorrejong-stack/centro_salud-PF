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
        Schema::create('pobladores', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 15)->nullable()->unique('uq_pobladores_dni');
            $table->string('nombres', 120);
            $table->string('apellido_paterno', 80);
            $table->string('apellido_materno', 80);
            $table->date('fecha_de_nacimiento');
            $table->enum('sexo', ['M', 'F']);
            $table->string('direccion', 200)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->foreignId('id_comunidad')
                ->nullable()
                ->constrained('comunidades')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->enum('estado', ['activo', 'fallecido'])->default('activo');
            $table->timestamps();
            $table->index(['apellido_paterno', 'apellido_materno', 'nombres'], 'idx_pobladores_apellidos_nombres');
            $table->index('estado', 'idx_pobladores_estado');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pobladores');
    }
};
