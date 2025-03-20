<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassControllerSono extends Controller
{
    public function calcularSono(Request $request)
    {
        $idade = $request->input('idade');
        $horas = $request->input('horas');
        $mensagem = '';

        if ($idade <= 2) {
            $mensagem = "Crianças de até 2 anos precisam de 12 a 16 horas de sono por dia.";
        } else if ($idade <= 5) {
            if ($horas < 10) {
                $mensagem = "Você não está dormindo o suficiente, você precisa dormir pelo menos 10 horas por dia.";
            }
            else {
                $mensagem = "Você está dormindo o suficiente.";
            }
        } else if ($idade <= 13) {
            if ($horas < 9) {
                $mensagem = "Você não está dormindo o suficiente, você precisa dormir pelo menos 9 horas por dia.";
            }
            else {
                $mensagem = "Você está dormindo o suficiente.";
            }
        } else if ($idade <= 17) {
            if ($horas < 8) {
                $mensagem = "Você não está dormindo o suficiente, você precisa dormir pelo menos 8 horas por dia.";
            }
            else {
                $mensagem = "Você está dormindo o suficiente.";
            }
        } else {
            if ($horas < 7) {
                $mensagem = "Você não está dormindo o suficiente, você precisa dormir pelo menos 7 horas por dia.";
            }
            else {
                $mensagem = "Você está dormindo o suficiente.";
            }
        }

        return view('sono', ['idade' => $idade, 'horas' => $horas, 'mensagem' => $mensagem]);
    }
}