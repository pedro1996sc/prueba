<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ClienteController extends Controller
{
   
    public function showfull(){   
        $clientes= Cliente::all();
        if ($clientes->isEmpty()) { 
            return response()->json([ 'message' => 'No hay clientes registrados'], 404); 
            }
        return response()->json($clientes, 200);
    }
    
}
