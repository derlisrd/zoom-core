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
        Schema::create('pedidos_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pedido_id')->unsigned()->nullable();
            $table->bigInteger('producto_id')->unsigned()->nullable();
            $table->bigInteger('deposito_id')->unsigned()->nullable();
            $table->float('cantidad')->default(0);
            $table->float('precio_venta')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos_items');
    }
};
