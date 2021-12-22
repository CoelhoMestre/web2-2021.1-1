@extends('layouts.main')

@section('titulo','Lista de ItensVendas')

@section('conteudo')

<div id="form">
<h1>ItensVendas Cadastrados</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">IDVenda</th>
            <th scope="col">Quantidade</th>
            
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($itensvendas as $itensvenda)
        <tr>
            <th scope="row">{{$itensvenda->id}}</td>
            <td>{{$itensvenda->idvenda}}</td>
            <td>{{$itensvenda->quantidade}}</td>
            <td>
            
            <a href="{{route('itensvendas.edit', [$itensvenda->id])}} "><input type="submit" class="btn btn-danger" value="editar"></a>
            </td>
            <td>
            <form action="{{route('itensvendas.destroy', [$itensvenda->id])}}" method="POST">
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