<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Facades\SystemConfig;
use App\Models\Eventos;
use Illuminate\Http\Request;
use DB;

class EventosController extends Controller
{
    public function listaEventos(Request $request){
        $eventos = Eventos::all();

        return response()->json([
            'eventos' => $eventos
        ]);
    }
}
