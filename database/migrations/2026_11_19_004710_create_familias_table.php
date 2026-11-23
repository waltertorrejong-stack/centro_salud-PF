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
        Schema::create('familias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_comunidad')->constrained('comunidades')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('numero_familia', 30)->nullable();
            $table->string('apellidos', 150);
            $table->timestamps();

            $table->unique(['id_comunidad', 'numero_familia'], 'uq_familia_comunidad_numero');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familias');
    }
};
