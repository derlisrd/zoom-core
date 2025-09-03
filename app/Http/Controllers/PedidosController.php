<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Pedido::all();
        return response()->json([
            'success'=>true,
            'results'=>$results
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = [
            'factura_id',
            'cliente_id',
            'user_id',
            'armazon_id',

            'total',
            'total_neto',
            'total_iva',
            'total_exenta',

            'facturado',
            'codigo_cliente',
            'nro_factura',
            'obs_cliente',
            'obs_laboratorio',
            'estado_pago',
            'tipo',
            'motivo_cancelacion'
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
