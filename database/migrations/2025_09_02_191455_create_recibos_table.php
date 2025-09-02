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
        Schema::create('recibos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cliente_id')->unsigned()->nullable();
            $table->bigInteger('numero')->unique();
            $table->float('total')->default(0);
            $table->float('efectivo')->default(0);
            $table->float('transferencia')->default(0);
            $table->float('cheque')->default(0);
            $table->string('cheque_numero')->nullable();
            $table->string('banco')->nullable();
            $table->date('fecha');
            $table->text('obs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recibos');
    }
};
