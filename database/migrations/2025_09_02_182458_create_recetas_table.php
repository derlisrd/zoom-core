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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pedido_id')->unsigned()->nullable();
            
            $table->string('codigo_derecho')->nullable();
            $table->string('codigo_izquierdo')->nullable();
            
            $table->float('adicion_derecho')->default(0);
            $table->float('adicion_izquierdo')->default(0);

            $table->float('cerca_derecho_cilindrico')->default(0);
            $table->float('cerca_derecho_esferico')->default(0);
            
            $table->float('cerca_eje_derecho')->default(0);
            $table->float('cerca_eje_izquierdo')->default(0);
            
            $table->float('cerca_izquierdo_cilindrico')->default(0);
            $table->float('cerca_izquierdo_esferico')->default(0);

            $table->float('lejos_derecho_cilindrico')->default(0);
            $table->float('lejos_derecho_esferico')->default(0);
            
            $table->float('lejos_eje_derecho')->default(0);
            $table->float('lejos_eje_izquierdo')->default(0);
            
            $table->float('lejos_izquierdo_cilindrico')->default(0);
            $table->float('lejos_izquierdo_esferico')->default(0);
            
            $table->float('dnp_izquierdo')->default(30);
            $table->float('dnp_derecho')->default(30);
            
            $table->float('altura_derecho')->default(15);
            $table->float('altura_izquierdo')->default(15);
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recetas');
    }
};
