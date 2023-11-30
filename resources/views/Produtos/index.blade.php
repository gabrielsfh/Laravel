@extends('layouts.template')
@section('title','Produtos')
@section('content')
<div>
    <a href = "{{route('produtos.inserir')}}" type ="button" class="btn btn-primary mt-4 ml-4 mb-4">Inserir Produto</a>
    
<div class="card shadow mb-4">

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->descricao}}</td>
                        <td>{{$produto->valor}}</td>
                        <td>
                        <a title = "Detalhe" href="{{route('produtos.descricao',$produto->id)}}">
                            <i class ="fas fa-eye text-primary" ></i></a>
                            
                         <a title = "Editar" href="{{route('produtos.edit',$produto)}}">
                            <i class ="fas fa-edit text-info" ></i></a>

                        <a title = "Excluir" data-toggle ="modal" data-target = "#exampleModal" href="">
                            <i class ="fas fa-trash text-danger mr-1" ></i></a>

                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>
</div>  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...Deseja Excluir este produto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        <form method = "POST" action ="{{route('produtos.delete',$peoduto)}}"> 
        @csrf
        @method('delete')
        <button type="button" class="btn btn-primary">Save changes</button>

        </form>
        
      </div>
    </div>
  </div>
</div>
@endsection
 