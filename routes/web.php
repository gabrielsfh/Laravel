<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientesController;

Route::get('/',HomeController::class);
Route::get('produtos',[ProdutosController::class,'index'])->name('produtos');
Route::get('produtos/inserir',[ProdutosController::class,'create'])->name('produtos.inserir');
Route::post('produtos/insert',[ProdutosController::class,'insert'])->name('produtos.insert');
Route::get('produtos/{produto}/edit',[ProdutosController::class,'edit'])->name('produtos.edit');
Route::put('produtos/{produto}',[ProdutosController::class,'editar'])->name('produtos.editar');
Route::delete('produtos/{produto}',[ProdutosController::class,'delete'])->name('produtos.delete');



Route::get('clientes',[ClientesController::class,'index'])->name('clientes');
Route::get('produtos/{id}',[ProdutosController::class,'show'])->name('produtos.descricao');
Route::get('clientes/inserir',[ClientesController::class,'inserir'])->name('clientes.inserir');
Route::post('clientes/insert',[ProdutosController::class,'insert'])->name('clientes.insert');

