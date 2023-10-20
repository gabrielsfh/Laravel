<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function show($nome){
        return view('clientes.index', ['nome' => $nome]);
    }
}
