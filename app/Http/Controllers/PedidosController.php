<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function creaPedido(Request $req){

        $validatorPedido = Validator::make($req->all(), [

            'total' => 'required|numeric|min:0',
            'items' => 'required|array',
            'items.*.producto_id' => 'required|exists:productos,id',
            'items.*.deposito_id' => 'required|exists:depositos,id',
            'items.*.cantidad' => 'required|numeric|min:1',
            'items.*.precio_venta' => 'required|numeric|min:0',
            'items.*.descuento' => 'required|numeric|min:0',
            'items.*.total' => 'required|numeric|min:0',
            'items.*.comision'=>'nullable|numeric|min:0'
        ]);

        $user = $req->user();

        $datosPedido = [
            'factura_id' =>null,
            'cliente_id'=> $req->cliente_id ?? null,
            'user_id' =>$user->id,
            'armazon_id' =>$req->armazon_id,

            'total',
            'total_neto',
            'total_iva',
            'total_exenta',

            'facturado'=> 0,
            'codigo_cliente'=>$req->codigo_cliente,
            'nro_factura'=>null,
            'obs_cliente'=>$req->obs_cliente,
            'obs_laboratorio'=> $req->obs_laboratorio,
            'estado_pago'=>$req->estado_pago,
            'tipo'=>$req->tipo,
            'motivo_cancelacion'=>null
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
