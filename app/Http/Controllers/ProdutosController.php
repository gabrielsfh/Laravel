<?php
namespace App\Http\Controllers;
use App\Models\produto;
use Illuminate\Http\Request;
class ProdutosController extends Controller
{
    public function index(){
        $produtos = produto::orderby('id','desc') -> paginate();
       // return $produtos;
        return view('produtos.index',['produtos'=> $produtos]);
    }
    public function create(){
        return view('produtos.create');
    }
    public function show($id){
        $produto = produto::find($id);
        return view('produtos.show',['produto' => $produto]);
    }

    public function insert(Request $request){
        $produto = new produto();

        $produto->nome = $request-> nome;
        $produto->descricao = $request->descricao;
        $produto->valor = $request->valor;
       
        $produto -> save();
        
        return redirect()->route('produtos');
    }
}
