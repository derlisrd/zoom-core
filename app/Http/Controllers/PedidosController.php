<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidosItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
            //'estado_pago'=> 'required|in:0,1',
            //'total' => 'required|numeric|min:0',
            'items' => 'required|array',
            'items.*.producto_id' => 'required|exists:productos,id',
            'items.*.deposito_id' => 'required|exists:depositos,id',
            'items.*.cantidad' => 'required|numeric|min:1',
            'items.*.precio_venta' => 'required|numeric|min:0',
            'items.*.comision'=>'nullable|numeric|min:0'
        ]);
        if($validatorPedido->fails())
            return response()->json(['success'=>false,'message'=> 'Error. '.$validatorPedido->errors()->first()],400);

        // AQUI SE DE CAMBIAR CUANDO YA ESTE EN PRODUCCION
        //$user = $req->user();
        $importe_final = ($req->total - $req->descuento);
        $datosPedido = [
            'factura_id' =>null,
            'cliente_id'=> $req->cliente_id ?? null,
            'user_id' =>1, //$user->id,
            'armazon_id' =>$req->armazon_id,

            'total'=>$importe_final,
            'total_neto',
            'total_iva',
            'total_exenta',

            'facturado'=> 0,
            'codigo_cliente'=>$req->codigo_cliente,
            'nro_factura'=>null,
            'obs_cliente'=>$req->obs_cliente,
            'obs_laboratorio'=> $req->obs_laboratorio,
            'estado_pago'=> 0,
            'tipo'=>$req->tipo,
            'motivo_cancelacion'=>null
        ];
         

        DB::beginTransaction();
        try {
            $pedido =  Pedido::create($datosPedido);
            foreach($req->items as $item){
                PedidosItems::create([
                    'pedido_id'=>$pedido->id,
                    'producto_id'=>1,
                    'deposito_id'=>0,
                    'cantidad'=>1,
                    'precio_venta'=>10,
                    'lado_item'=>0,
                    'total'=>10
                ]);
            }
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Pedido creado con éxito'], 201);
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }

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
