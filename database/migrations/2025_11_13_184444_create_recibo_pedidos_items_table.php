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
        Schema::create('recibo_pedidos_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('recibo_id')->unsigned()->nullable();
            $table->bigInteger('pedido_id')->unsigned()->nullable();
            $table->double('total')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recibo_pedidos_items');
    }
};
