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
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id(); // id (PK)
            $table->foreignId('contrato_id')->constrained('contratos'); // FK hacia contratos
            $table->string('mes'); // Mes de evaluación
            $table->integer('evaluacion'); // Evaluación
            $table->decimal('total_pagado', 10, 2); // Total pagado
            $table->decimal('promedio_evaluacion', 5, 2); // Promedio de evaluación
            $table->string('observaciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacions');
    }
};
