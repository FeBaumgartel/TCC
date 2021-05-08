<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Igreja;
use App\Facades\SystemConfig;
use Illuminate\Http\Request;
use DB;

class IgrejasController extends Controller
{
    public function listarIgrejas(Request $request){
        $igrejas = Igreja::with('eventos')->get();

        return response()->json([
            'igrejas' => $igrejas
        ]);
    }


    public function cadastrarIgreja(Request $request){
        $hino = new Igreja();
        $hino->nome = $request->nome;
        $hino->save();

        return response()->json(['status' => 200]);
    }

    public function editarIgreja(Request $request){
        $hino = Igreja::findOrFail($request->id);
        $hino->nome = $request->nome;
        $hino->save();

        return response()->json(['status' => 200]);
    }

    public function excluirIgreja(Request $request){
        $hino =  Igreja::findOrFail($request->id);

        $hino->delete();

        return response()->json(['status' => 200]);
    }
}
