<?php

use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function(){
    Route::post('/login');
});

Route::middleware(['auth:api'])->group(function () {
    

    Route::prefix('/pedidos')->group(function(){
        Route::get('/',[PedidosController::class,'index']);
    });

});