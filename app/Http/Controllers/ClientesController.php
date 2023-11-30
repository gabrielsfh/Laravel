<?php

namespace App\Http\Controllers;
use App\Models\clientes;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $clientes = clientes::paginate();
        return view('clientes.index',['clientes'=> $clientes]);
    }
    public function create(){
        return view('clientes.create'); 
    }
    public function insert(Request $request){
        $cliente = new clientes();
        $cliente->nome = $request->nome;
        $cliente->sexo = $request->sexo;
        $cliente-> save();
        return redirect()->route('clientes');
    }
}
