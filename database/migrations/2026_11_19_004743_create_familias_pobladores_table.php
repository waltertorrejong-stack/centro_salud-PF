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
        Schema::create('familias_pobladores', function (Blueprint $table) {
            $table->id();
             $table->foreignId('id_familia')
                ->constrained('familias')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('id_poblador')
                ->constrained('pobladores')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('parentesco', 60);
            $table->timestamps();
            $table->unique(['id_familia', 'id_poblador'], 'uq_familia_poblador');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familias_pobladores');
    }
};
