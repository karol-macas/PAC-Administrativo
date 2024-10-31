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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id(); // id (PK)
            $table->foreignId('servicio_id')->constrained('servicios'); // FK hacia servicios
            $table->enum('requiere_contrato', ['SI', 'NO']);
            $table->string('codigo_contrato');
            $table->date('fecha_suscripcion');
            $table->decimal('monto_contrato', 10, 2);
            $table->string('nombre_admin_contrato');
            $table->date('fecha_inicio_contrato');
            $table->date('fecha_fin_contrato');
            $table->text('alerta')->nullable();
            $table->text('alerta_vencimiento')->nullable();
            $table->enum('contrato_recurrente', ['SI', 'NO']);
            $table->string('tipo_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
