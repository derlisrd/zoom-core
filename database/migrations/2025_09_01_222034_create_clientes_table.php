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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('ruc');
            $table->string('nombre');
            $table->string('nombre_fantasia')->nullable();
            $table->string('telefono')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('direccion')->nullable();
            $table->tinyInteger('tipo_pago')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
