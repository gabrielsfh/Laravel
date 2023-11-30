@extends('layouts.template')
@section('title','Produtos')
@section('content')
<div>
    <a href = "clientes/insert" type ="button" class="btn btn-primary mt-4 ml-4 mb-4">Inserir Clientes</a>
    
<div class="card shadow mb-4">

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Nome</th>
                <th>Sexo</th>
               
                <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $clientes)
                    <tr>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->Sexo}}</td>
                       
                        <td></td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>
</div>  
 
</div>
@endsection
 