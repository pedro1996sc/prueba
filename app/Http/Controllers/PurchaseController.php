<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PurchaseRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
class PurchaseController extends Controller
{
    
    public function show() {
        $purchase= Purchase::all();
        if ($purchase->isEmpty()) { 
            return response()->json([ 'message' => 'No hay compra registrados'], 404); 
            }
        return response()->json($purchase, 200);
    }
    public function showclient($id_cliente){
        $purchase = Purchase::where('clientes_id',$id_cliente)->get();

        if (!$purchase) {
            $data = [
                'message' => 'compras no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $data = [
            'compras' => $purchase,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
    public function create(Request $request )
    {
        $validator = Validator::make($request->all(), [
            'clientes_id' => 'required|integer:10',
            'events_id' => 'required|integer:10',
            'precio' => 'required|numeric:100',
            'fecha'=> 'required|max:255'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $purchase = Purchase::create([
            'clientes_id' => $request->clientes_id,
            'events_id' =>$request->events_id,
            'precio' => $request->precio,
            'fecha'=> $request->fecha,
        ]);

        if (!$purchase) {
            $data = [
                'message' => 'Error al crear el estudiante',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'compra' => $purchase,
            'status' => 201     
        ];

        return response()->json($data, 201);
    }

}
