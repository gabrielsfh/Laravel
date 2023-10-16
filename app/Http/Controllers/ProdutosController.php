<?php
namespace App\Http\Controllers;
use App\Models\produto;
use Illuminate\Http\Request;
class ProdutosController extends Controller
{
    public function index(){
        $produtos = produto::all();
       // return $produtos;
        return view('produtos.index',['produtos'=> $produtos]);
    }
    public function create(){
        return view('produtos.create');
    }
    public function show($nome,$valor = null){
        return view('produtos.show',['nome'=>$nome,'valor'=>$valor]);
    }
}
