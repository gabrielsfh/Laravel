<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientesController;

Route::get('/',HomeController::class);

Route::get('produtos/inserir',[ProdutosController::class,'create'])->name('produtos.inserir');
Route::get('produtos/{id}',[ProdutosController::class,'show'])->name('produtos.descricao');
Route::get('produtos',[ProdutosController::class,'index'])->name('produtos');

Route::get('clientes',function() {
    return("Olá, seja bem vindo ao cadastro de cliente");
});


Route::post('produtos',[ProdutosController::class,'insert'])->name('produtos.insert');
Route::get('clientes/{nome}',[ClientesController::class,'show']);