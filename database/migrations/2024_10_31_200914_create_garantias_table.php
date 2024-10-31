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
        Schema::create('garantias', function (Blueprint $table) {
            $table->id(); // id (PK)
            $table->foreignId('contrato_id')->constrained('contratos'); // FK hacia contratos
            $table->string('tipo_garantia'); // Tipo de garantía
            $table->date('fecha_inicio_garantia');
            $table->date('fecha_fin_garantia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garantias');
    }
};
