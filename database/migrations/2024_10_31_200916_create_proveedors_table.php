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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id(); // id (PK)
            $table->string('nombre'); // Nombre del proveedor
            $table->string('ruc');
            $table->string('localidad');
            $table->string('provincia');
            $table->enum('es_socio', ['SI', 'NO']);
            $table->enum('es_critico', ['SI', 'NO']);
            $table->string('nombre_alterno')->nullable();
            $table->string('personeria')->nullable();
            $table->string('persona_contacto')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('email')->nullable();
            $table->decimal('total_adjudicado', 10, 2)->nullable();
            $table->decimal('iva', 10, 2)->nullable();
            $table->decimal('total', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
