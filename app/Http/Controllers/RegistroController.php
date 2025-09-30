<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Sensor;
use Illuminate\Http\Request;

class RegistroController
{

    public function store(Request $request){

        $sensor = Sensor::where('codigo', '=', $request->codigo)->first();
        if($sensor == null){
            return response()->json([
                'status' => false,
                'message' => 'codigo nao encontrado'
            ]);
        } 
        
        
        $registro = Registro::create([
            'sensor_id' => $sensor->id,
            'valor' => $request->valor,
            'unidade' => $request->unidade,
            'data_hora' => date('Y/m/d H:i:s')
        ]);
            return response()->json([
                'status' => true,
                'message' => 'Feito o Create com sucesso',
                'data' => $registro
            ]);
        
    }
}
