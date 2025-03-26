<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassControllerViagem extends Controller
{
    public function calcularViagem(Request $request)
    {
        $distancia = $request->input('distancia');
        $consumo = $request->input('consumo');
        $valor_litro = $request->input('valor_litro');

        $custo = $distancia / $consumo * $valor_litro;

        return view('viagem', [
            'resultado' => 'O custo total da viagem será de R$ ' . number_format($custo, 2, ',', '.'),
            'distancia' => $distancia,
            'consumo' => $consumo,
            'valor_litro' => $valor_litro
        ]);
    }
}