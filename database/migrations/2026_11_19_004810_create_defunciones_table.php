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
        Schema::create('defunciones', function (Blueprint $table) {
            $table->id();
             $table->foreignId('id_poblador')
                ->constrained('pobladores')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->date('fecha_defuncion');
            $table->string('causa', 255);
            $table->string('lugar', 150)->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();

            $table->unique('id_poblador', 'uq_defunciones_poblador');
            $table->index('fecha_defuncion', 'idx_defunciones_fecha');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defunciones');
    }
};
