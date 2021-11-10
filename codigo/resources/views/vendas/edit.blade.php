@extends('layouts.main')

@section('titulo','Edição de Vendas')

@section('conteudo')
<div id="form">
<h1>Edição de Vendas</h1>
    <form action="{{route('vendas.update', ['id' => $venda->id])}}" method="post">

        @csrf
        @method('PUT')
        <div class="input m-3">
        <label for="">Id Cliente</label>
        <input type="text" name="cliente" id="cliente" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$venda->id}}">
        </div>

        <div class="input m-3">
        <p><label for="">Valor Total</label>
        <input type="text" name="valortotal" id="valortotal" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$venda->valortotal}}">
        </div>

        <div class="input m-3">
        <p><label for="">Data</label>
        <input type="date" name="datavenda" id="datavenda" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$venda->datavenda}}">
        </div>

        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="salvar">
        </div> 
    </form>
    </div>
@endsection('conteudo')


