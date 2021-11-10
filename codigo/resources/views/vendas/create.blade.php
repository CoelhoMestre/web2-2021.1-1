@extends('layouts.main')

@section('titulo','Cadastro de vendas')

@section('conteudo')

<div id="form">
    <h1>Cadastro de Venda</h1>
    <form action="{{route('vendas.store')}}" method="post">
        @csrf
        <div class="input m-3">
            <label for="">Idcliente:</label>
            <input type="text" name="idcliente" id="idcliente" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input m-3">
            <label for="">Valor total:</label>
            <input type="text" name="valortotal" id="valortotal" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input m-3">
            <label for="">Data:</label>
            <input type="date" name="datavenda" id="datavenda"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="Cadastrar">
        </div>
    </form>
    </div>
@endsection('conteudo')

 