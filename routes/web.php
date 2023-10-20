<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientesController;

Route::get('/',HomeController::class);

Route::get('produtos/inserir',[ProdutosController::class,'create']);
Route::get('produtos/{nome}/{valor?}',[ProdutosController::class,'show']);
Route::get('produtos',[ProdutosController::class,'index']);

Route::get('clientes',function() {
    return("Olá, seja bem vindo ao cadastro de cliente");
});

Route::get('clientes/{nome}',[ClientesController::class,'show']);
