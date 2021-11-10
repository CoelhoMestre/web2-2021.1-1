@extends('layouts.main')

@section('titulo','Edição de entradas')

@section('conteudo')
<div id="form">
<h1>Edição de Entrada</h1>
    <form action="{{route('entradas.update', ['id' => $entrada->id])}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="input m-3">
            <label for="">Id Fornecedor</label>
            <input type="text" name="fornecedor" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="fornecedor" value="{{$entrada->id}}">
        <div class="input m-3">

        </div>
            <label for="">Valor Total</label>
            <input type="text" name="valortotal" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="valortotal" value="{{$entrada->valortotal}}">
        </div>

        <div class="input m-3">
            <label for="">Data</label>
            <input type="date" name="datacompra" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="datacompra" value="{{$entrada->datacompra}}">
        </div>
        
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="salvar">
        </div>  
    </form>
    </div>
@endsection('conteudo')