@extends('layouts.template')
@section('title','Produtos')
@section('content')


<div> 
    <h1>PÁGINA DE PRODUTOS</h1>
    @foreach($produtos as $produto)
    <p>{{$produto->nome}}</p>

    @endforeach
    {{$produtos->links()}}
    
    @endsection
</div>