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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('producto_id')->unsigned()->nullable();
            $table->bigInteger('deposito_id')->unsigned()->nullable();
            $table->float('cantidad')->default(0);
            $table->float('graduacion_esferico')->default(0);
            $table->float('graduacion_cilindrico')->default(0);
            $table->float('eje')->default(0);
            $table->float('adicion')->default(0);
            $table->float('base')->default(1);
            $table->tinyInteger('lado')->default(1); // 1 derecho 2 izquierdo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
