@extends('layouts.main')

@section('titulo','Edição de ItensEntradas')

@section('conteudo')
<div id="form">
<h1>Edição de ItensEntrada</h1>
    <form action="{{route('itensentradas.update', ['id' => $itensentrada->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="input m-3">
            <label for="">Identrada</label>
            <input type="text" name="entrada" id="entrada" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$entrada->id}}">
        </div>
        <div class="input m-3">
            <p><label for="">Quantidade:</label>
            <input type="text" name="quantidade" id="quantidade" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$itensentrada->quantidade}}">
        </div>
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="salvar">
        </div>
    </form>
    </div>
@endsection('conteudo')
