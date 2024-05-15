<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PurchaseRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
      
    }
    public function create(Request $request )
    {
    }

}
