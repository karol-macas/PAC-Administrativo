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
        Schema::create('planificacions', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('servicio_id')->constrained('servicios'); 
            $table->boolean('es_compra'); // Indica si es compra real
            $table->string('tipo_compra'); // Tipo de compra
            $table->string('mes_inicio_compra'); // Mes de inicio
            $table->text('objeto_contratacion'); // Objeto de contratación
            $table->decimal('presupuesto_referencial_2022', 10, 2)->nullable();
            $table->decimal('presupuesto_referencial_2023', 10, 2)->nullable();
            $table->decimal('total_presupuestado', 10, 2);
            $table->date('fecha_ingreso'); // Fecha de ingreso
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planificacions');
    }
};
