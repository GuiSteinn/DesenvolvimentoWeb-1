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
        return view('imc', ['peso' => $peso, 'altura' => $altura, 'imc' => $imc]);
    }
}
