<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Facades\SystemConfig;
use App\Models\Grupo;
use App\Models\UsuarioGrupo;
use Illuminate\Http\Request;
use DB;

class GruposController extends Controller
{
    public function listarGrupos(Request $request){
        $grupos = Grupo::with('usuarios')->get();

        return response()->json([
            'grupos' => $grupos
        ]);
    }

    public function cadastrarGrupo(Request $request){
        $grupo = new Grupo();
        $grupo->nome = $request->nome;
        $grupo->save();

        foreach ($request->usuarios as $usuario){
            $usuarioGrupo = new UsuarioGrupo();
            $usuarioGrupo->id_evento = $grupo->id;
            $usuarioGrupo->id_usuario = $usuario->id;
            $usuarioGrupo->save();

        }

        return response()->json(['status' => 200]);
    }

    public function excluirGrupo(Request $request){
        UsuarioGrupo::where('id_grupo', $request->id)->delete();

        Grupo::find($request->id)->delete();

        return response()->json(['status' => 200]);
    }
}
