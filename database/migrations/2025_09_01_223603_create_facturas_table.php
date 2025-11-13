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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cliente_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();

            $table->float('total')->default(0);
            $table->float('total_neto')->default(0);
            $table->float('total_exenta')->default(0);
            $table->float('total_iva')->default(0);
            $table->float('total_iva5')->default(0);
            $table->float('total_iva10')->default(0);

            $table->string('numero')->nullable(); //numero de factura
            $table->text('pedidos')->nullable(); // numero de pedidos o id
            $table->boolean('pagado')->default(1); // 1 si 0 no
            $table->tinyInteger('condicion')->default(1); // 1 contado 2 credito
            $table->tinyInteger('estado')->default(1); // 0 anulado 1 normal
            $table->tinyInteger('tipo_pago')->default(1); // 1 efectivo 2 banco
            $table->date('fecha_cobro')->nullable();
            
            $table->dateTime('fecha')->nullable();
            
            $table->text('motivo_cancelacion');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
