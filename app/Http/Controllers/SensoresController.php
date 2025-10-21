<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensoresController
{

     public function find(Request $request){

        $sensor = Sensor::where('codigo', '=', $request->codigo)->first();
        if($sensor == null){
            return response()->json([
                'status' => false,
                'message' => 'status não informado'
            ]);
        }

        return response()->json([
            'message' => 'status informado com sucesso',
            'status'=> $sensor->status
        ]);
    }

    public function update(Request $request)
    {

        $sensor = Sensor::where('codigo', '=', $request->codigo)->first();
        if ($sensor == null) {
            return response()->json([
                'status' => false,
                'message' => 'codigo nao encontrado'
            ]);
        }

        $sensor->update(['status' => $request->status]);

        return response()->json([
            'message' => 'status atualizado com sucesso',
            'status' => true
        ]);
    }
}
