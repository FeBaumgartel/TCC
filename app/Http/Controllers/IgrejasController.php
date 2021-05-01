<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

use App\Models\Igrejas;
use App\Facades\SystemConfig;
use Illuminate\Http\Request;
use DB;

class IgrejasController extends Controller
{
    public function listarIgrejas(Request $request){
        $igrejas = Igrejas::all();

        return response()->json([
            'igrejas' => $igrejas
        ]);
    }
}
