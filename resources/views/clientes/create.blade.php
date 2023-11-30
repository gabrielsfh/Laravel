@extends('layouts.template') 
@section('title','Criar Cliente') 
@section('content') 
<div class="container mt-4">
    <form method="POST" action="{{route('clientes.insert')}}">
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
                    <label for="InputValor">Sexo</label>
                    <input type="number" step="0.01"  class="form-control" id="InputValor" name="valor">
                </div>
            </div>
        </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection 