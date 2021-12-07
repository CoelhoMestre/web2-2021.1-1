@extends('layouts.main')

@section('titulo','Lista de fornecedores')

@section('conteudo')

<div id="form">
<h1>Fornecedores Cadastrados</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            <th scope="col">Cnpj</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fornecedores as $fornecedor)
        <tr>
            <th scope="row">{{$fornecedor->id}}</td>
            <td>{{$fornecedor->nome}}</td>
            <td>{{$fornecedor->endereco}}</td>
            <td>{{$fornecedor->telefone}}</td>
            <td>{{$fornecedor->cnpj}}</td>
            
            <td>
            
            <a href="{{route('fornecedores.edit', [$fornecedor->id])}} "><input type="submit" class="btn btn-danger" value="editar"></a>
            </td>
            <td>
            <form action="{{route('fornecedores.destroy', [$fornecedor->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-secondary" value="deletar">
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>

@endsection('conteudo')