<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

use App\Models\Hinos;
use App\Facades\SystemConfig;
use Illuminate\Http\Request;
use DB;

class HinosController extends Controller
{
    public function listarHinos(Request $request){
        $hinos = Hinos::all();

        return response()->json([
            'hinos' => $hinos
        ]);
    }
}
