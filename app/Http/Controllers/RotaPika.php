<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RotaPika extends Controller
{
    public function show($nome,$valor = null){
        return ("nome:$nome valor:$valor");
    }
}
