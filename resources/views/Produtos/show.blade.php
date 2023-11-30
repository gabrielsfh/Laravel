@extends('layouts.template')
@section('title','Produto')
@section('content')
<?php $valor_prod = number_format($produto->valor,2,',','.');?>
<div class="jumbotron">
  <h1 class="display-4"><?php echo $produto->nome ?> - Valor R$<?php echo $valor_prod ?></h1>
  <p class="lead"><?php echo $produto->descricao ?></p>
 
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="{{route('produtos')}}" role="button">Voltar</a>
</div>

@endsection