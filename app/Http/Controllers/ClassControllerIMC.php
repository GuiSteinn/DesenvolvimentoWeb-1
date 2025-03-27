<?php

namespace App\Http\Controllers;

use App\Models\ClassModelIMC;
use Illuminate\Http\Request;

class ClassControllerIMC extends Controller
{
    public function calcularIMC(Request $request)
    {
        $peso = $request->input('peso');
        $altura = $request->input('altura');
        $imc = $peso / ($altura * $altura);

        // Definir a mensagem com base no IMC
        if ($imc < 18.5) {
            $mensagem = 'Você está abaixo do peso.';
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            $mensagem = 'Você está com o peso normal.';
        } elseif ($imc >= 25 && $imc < 29.9) {
            $mensagem = 'Você está com sobrepeso.';
        } else {
            $mensagem = 'Você está com obesidade.';
        }

        return view('imc', ['peso' => $peso, 'altura' => $altura, 'imc' => number_format($imc, 2), 'mensagem' => $mensagem]);
    }
}
