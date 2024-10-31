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
        Schema::create('proceso_contratacions', function (Blueprint $table) {
            $table->id(); // id (PK)
            $table->foreignId('servicio_id')->constrained('servicios'); // FK hacia servicios
            $table->string('codigo_compra');
            $table->string('gestor_compra');
            $table->date('fecha_solicitud');
            $table->date('fecha_adjudicacion');
            $table->text('descripcion_compra');
            $table->string('tipo_compra');
            $table->integer('plazo_ejecucion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('forma_pago');
            $table->enum('garantia_tecnica', ['SI', 'NO']);
            $table->string('estado');
            $table->string('nombre_admin_compra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proceso_contratacions');
    }
};
