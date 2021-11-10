@extends('layouts.main')

@section('titulo','Lista de clientes')

@section('conteudo')

<div id="form">
<h1>Clientes Cadastrados</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Logradouro</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Uf</th>
            <th scope="col">IDCliente</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($enderecos as $endereco)
        <tr>
            <th scope="row">{{$endereco->id}}</td>
            <td>{{$endereco->logradouro}}</td>
            <td>{{$endereco->bairro}}</td>
            <td>{{$endereco->cidade}}</td>
            <td>{{$endereco->uf}}</td>
            <td>{{$endereco->idcliente}}</td>
            <td>
            
            <a href="{{route('enderecos.edit', [$endereco->id])}} "><input type="submit" class="btn btn-danger" value="editar"></a>
            </td>
            <td>
            <form action="{{route('enderecos.destroy', [$endereco->id])}}" method="POST">
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