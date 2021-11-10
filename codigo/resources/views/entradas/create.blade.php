@extends('layouts.main')

@section('titulo','Cadastro de entradas')

@section('conteudo')

<div id="form">
    <h1>Cadastro de Entrada</h1>
    <form action="{{route('entradas.store')}}" method="post">
        @csrf
        <div class="input m-3">
            <label for="">Idfornecedor:</label>
            <input type="text" name="idfornecedor" id="idfornecedor"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Id">
        </div>
        <div class="input m-3">
            <label for="">Valor total:</label>
            <input type="text" name="valortotal" id="valortotal"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Valor total">
        </div>
        <div class="input m-3">
            <label for="">Data:</label>
            <input type="date" name="datacompra" id="datacompra"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Data">
        </div>
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="Cadastrar">
        </div>  
    </form>
    </div>
@endsection('conteudo')

