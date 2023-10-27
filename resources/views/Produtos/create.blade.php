@extends('layouts.template') 
@section('title','Criar Produto') 
@section('content') 
<div class="container mt-4">
    <form method="POST" action="{{route('produtos.insert')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputNome">Nome</label>
                    <input type="text" class="form-control" id="InputNome" name="nome" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputValor">Valor</label>
                    <input type="number" step="0.01"  class="form-control" id="InputValor" name="valor">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="InputTextarea">Descrição</label>
            <textarea class="form-control" id="InputTextarea" rows="3" name="descricao"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection 