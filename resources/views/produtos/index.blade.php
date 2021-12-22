@extends('layouts.main')

@section('titulo','Produtos Cadastrados')

@section('conteudo')



<div id="form">

<h1>Produtos Cadastrados</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">ICMS</th>
            <th scope="col">IPI</th>
            <th scope="col">Frete</th>
            <th scope="col">PreçoFábrica</th>
            <th scope="col">PreçoCompra</th>
            <th scope="col">PreçoVenda</th>
            <th scope="col">Lucro</th>
            <th scope="col">Desconto</th>
            <th scope="col">Quantidade</th>
            
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
        <tr>
            
            <th scope="row">{{$produto->id}}</td>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->icms}}</td>
            <td>{{$produto->ipi}}</td>
            <td>{{$produto->frete}}</td>
            <td>{{$produto->precofabrica}}</td>
            <td>{{$produto->precocompra}}</td>
            <td>{{$produto->precovenda}}</td>
            <td>{{$produto->lucro}}</td>
            <td>{{$produto->desconto}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>
            
            <a href="{{route('produtos.edit', [$produto->id])}} "><input type="submit" class="btn btn-danger" value="editar"></a>
            </td>
            <td>
            <form action="{{route('produtos.destroy', [$produto->id])}}" method="POST">
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