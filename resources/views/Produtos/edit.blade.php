@extends('layouts.template') 
@section('title','Editar Produto') 
@section('content') 
<div class="container mt-4">
    <form method="POST" action="{{route('produtos.editar',$produto)}}">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputNome">Nome</label>
                    <input type="text" class="form-control" id="InputNome" name="nome" 
                    value ="{{$produto->nome}}"
                    equired>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputValor">Valor</label>
                    <input type="number" step="0.01"  class="form-control" id="InputValor" name="valor"
                    value ="{{$produto->valor}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="InputTextarea">Descrição</label>
            <textarea class="form-control" id="InputTextarea" rows="3" name="descricao">
            "{{$produto->descricao}}"
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection 