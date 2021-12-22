
@extends('layouts.main')

@section('titulo','Lista de Entradas')

@section('conteudo')

<div id="form">
<h1>Entradas Cadastradas</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">IDFornecedor</th>
            <th scope="col">ValorTotal</th>
            <th scope="col">Data</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($entradas as $entrada)
        <tr>
            <th scope="row">{{$entrada->id}}</td>
            <td>{{$entrada->idfornecedor}}</td>
            <td>{{$entrada->valortotal}}</td>
            <td>{{$entrada->datacompra}}</td>
           
            <td>
            
            <a href="{{route('entradas.edit', [$entrada->id])}} "><input type="submit" class="btn btn-danger" value="editar"></a>
            </td>
            <td>
            <form action="{{route('entradas.destroy', ['id' => $entrada->id])}}" method="POST">
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