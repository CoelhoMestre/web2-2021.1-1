@extends('layouts.main')

@section('titulo','Lista de clientes')

@section('conteudo')

<div id="form">
<h1>Clientes Cadastrados</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Sexo</th>
            <th scope="col">Endereço</th>
            <th scope="col">Debito</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <th scope="row">{{$cliente->id}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->sexo}}</td>
            <td>{{$cliente->endereco}}</td>
            <td>{{$cliente->debito}}</td>
            <td>
            
            <a href="{{route('clientes.edit', [$cliente->id])}} "><input type="submit" class="btn btn-danger" value="editar"></a>
            </td>
            <td>
            <form action="{{route('clientes.destroy', [$cliente->id])}}" method="POST">
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