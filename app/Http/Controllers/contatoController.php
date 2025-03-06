<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function index()
    {
        $dados = ['titulo' => 'Contato'];
        return view('contato');
    }
    public function create()
    {
        return 'contato criado';
    }
}
