<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Hino;
use App\Facades\SystemConfig;
use Illuminate\Http\Request;
use DB;

class HinosController extends Controller
{
    public function listarHinos(Request $request){
        $hinos = Hino::all();

        return response()->json([
            'hinos' => $hinos
        ]);
    }

    public function cadastrarHino(Request $request){
        $hino = new Hino();
        $hino->nome = $request->nome;
        $hino->letra = $request->letra;
        $hino->save();

        return response()->json(['status' => 200]);
    }

    public function editarHino(Request $request){
        $hino = Hino::findOrFail($request->id);
        $hino->nome = $request->nome;
        $hino->letra = $request->letra;
        $hino->save();

        return response()->json(['status' => 200]);
    }

    public function excluirHino(Request $request){
        $hino =  Hino::findOrFail($request->id);

        $hino->delete();

        return response()->json(['status' => 200]);
    }
}
