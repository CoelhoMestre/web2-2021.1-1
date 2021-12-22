@extends('layouts.main')

@section('titulo','Lista de ItensEntradas')

@section('conteudo')

<div id="form">
<h1>ItensEntradas Cadastradas</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">IdEntrada</th>
            <th scope="col">Quantidade</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($itensentradas as $itensentrada)
        <tr>
            <th scope="row">{{$itensentrada->id}}</td>
            <td>{{$itensentrada->identrada}}</td>
            <td>{{$itensentrada->quantidade}}</td>
           
            <td>
            
            <a href="{{route('itensentradas.edit', [$itensentrada->id])}} "><input type="submit" class="btn btn-danger" value="editar"></a>
            </td>
            <td>
            <form action="{{route('itensentradas.destroy', ['id' => $itensentrada->id])}}" method="POST">
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