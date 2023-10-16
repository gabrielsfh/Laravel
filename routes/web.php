<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\RotaPika;

Route::get('/',HomeController::class);

Route::get('produtos/inserir',[ProdutosController::class,'create']);
Route::get('produtos/{nome}/{valor?}',[ProdutosController::class,'show']);
Route::get('produtos',[ProdutosController::class,'index']);

/* Route::get('seila/{foda}', function ($foda){
    return ("teste {$foda}");
}); */

Route::get('rotapika/{nome}/{valor?}',[RotaPika::class,'show']);