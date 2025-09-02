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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoria_id')->unsigned()->nullable();
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->float('costo')->default(0);
            $table->float('precio')->default(0);
            $table->float('precio_minimo')->default(0);
            $table->float('min_cilindrico')->default(0);
            $table->float('max_cilindrico')->default(0);
            $table->float('min_esferico')->default(0);
            $table->float('max_esferico')->default(0);
            $table->float('base_min')->default(0);
            $table->float('base_max')->default(0);
            $table->float('adicion_min')->default(0);
            $table->float('adicion_max')->default(0);
            $table->float('iva')->default(10);
            $table->tinyInteger('tipo')->default(1); // 1 articulo 2 servi 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
