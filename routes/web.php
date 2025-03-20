<?php

use App\Http\Controllers\ClassControllerIMC;
use App\Http\Controllers\ClassControllerSono;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
})->name('index');

Route::get('/imc', function () {
    return view('imc');
})->name('imc');

Route::post('/calcular-imc', [ClassControllerIMC::class, 'calcularIMC'])->name('calcular_imc');

Route::get('/sono', function () {
    return view('sono');
})->name('sono');

Route::post('/calcular-sono', [ClassControllerSono::class, 'calcularSono'])->name('calcular_sono');