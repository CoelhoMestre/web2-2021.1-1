@extends('layouts.main')

@section('titulo','Lista de Vendas')

@section('conteudo')

<div id="form">
<h1>Vendas Cadastradas</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">IdCliente</th>
            <th scope="col">ValorTotal</th>
            <th scope="col">Data</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vendas as $venda)
        <tr>
            <th scope="row">{{$venda->id}}</td>
            <td>{{$venda->idcliente}}</td>
            <td>{{$venda->valortotal}}</td>
            <td>{{$venda->datavenda}}</td>
            <td>
            
            <a href="{{route('vendas.edit', [$venda->id])}} "><input type="submit" class="btn btn-danger" value="editar"></a>
            </td>
            <td>
            <form action="{{route('vendas.destroy', [$venda->id])}}" method="POST">
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