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
        Schema::create('nacimientos', function (Blueprint $table) {
            $table->id();
            // Recién nacido registrado en pobladores (un nacimiento por poblador)
            $table->foreignId('id_poblador')
                ->constrained('pobladores')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            // Familia asociada (opcional)
            $table->foreignId('id_familia')
                ->nullable()
                ->constrained('familias')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            // Madre: si es pobladora se usa id_madre; si es externa se usan dni y nombre completo
            $table->foreignId('id_madre')
                ->nullable()
                ->constrained('pobladores')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->string('madre_dni', 15)->nullable();
            $table->string('madre_nombre_completo', 180)->nullable();

            // Padre: si es poblador se usa id_padre; si es externo se usan dni y nombre completo
            $table->foreignId('id_padre')
                ->nullable()
                ->constrained('pobladores')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->string('padre_dni', 15)->nullable();
            $table->string('padre_nombre_completo', 180)->nullable();

            // Datos del evento de nacimiento
            $table->date('fecha_nacimiento');
            $table->time('hora_nacimiento')->nullable();
            $table->enum('sexo', ['M', 'F']);
            $table->string('tipo_parto', 80)->nullable();
            $table->string('lugar_nacimiento', 150)->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();

            // Restricciones e índices
            $table->unique('id_poblador', 'uq_nacimientos_poblador');
            $table->index('fecha_nacimiento', 'idx_nacimientos_fecha');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nacimientos');
    }
};
