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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('factura_id')->unsigned()->nullable();
            $table->bigInteger('cliente_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('armazon_id')->unsigned()->nullable();
            $table->string('nro_factura_pedido')->nullable();
            $table->string('obs_laboratorio')->nullable();

            $table->tinyInteger('estado_pago')->default(0);//0 pend 1 pagado
            $table->tinyInteger('tipo')->default(1);//1 normal 2 cortesia 3 garantia
            $table->string('motivo_cancelacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
