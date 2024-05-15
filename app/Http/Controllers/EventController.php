<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
class EventController extends Controller
{
   
    public function create(Request $request) {
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'status' => 'required',
            'description' => 'required|max:255',
            'day' => 'required|max:255',
            'hour' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $event = Event::create([
            'name' => $request->name,
            'status' => $request->status,
            'description' => $request->description,
            'day' => $request->day,
            'hour' => $request->hour,
        ]);

        if (!$event) {
            $data = [
                'message' => 'Error al crear el estudiante',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'event' => $event,
            'status' => 201     
        ];

        return response()->json($data, 201);

    }

   
    public function show()
    {
        $event = Event::where('status',true)->select('name', 'description')->get();

        if (!$event) {
            $data = [
                'message' => 'evento no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $data = [
            'event' => $event,
            'status' => 200
        ];

        return response()->json($data, 200);
    } 
    
   
    public function showfull(){   
        $events= Event::all();
        if ($events->isEmpty()) { 
            return response()->json([ 'message' => 'No hay eventos registrados'], 404); 
            }
        return response()->json($events, 200);
    }
    public function showfilter($id){   
        $events= Event::find($id);
        if (!$events) {
            $data = [
                'message' => 'evento no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $data = [
            'event' => $events,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
 
    
   
}
