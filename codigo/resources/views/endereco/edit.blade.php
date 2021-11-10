@extends('layouts.main')

@section('titulo','Edição de endereços')

@section('conteudo')
<div id="form">
<h1>Edição de Endereço</h1>
    <form action="{{route('enderecos.update', ['id' => $enderecos->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="input m-3">
        <label for="">Logradouro:</label>
        <input type="text" name="logradouro" id="logradouro" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$enderecos->debito}}">
        </div>

        <div class="input m-3">
        <p><label for="">Bairro:</label>
        <input type="text" name="bairro" id="bairro" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$enderecos->debito}}">
        </div>

        <div class="input m-3">
        <p><label for="">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$enderecos->debito}}">
        </div>

         <div class="input m-3">
        <p><label for="">Uf:</label>
        <input type="text" name="uf" id="uf" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$enderecos->debito}}">
        </div>

        <div class="input m-3">
        <p><label for="">Cliente_id:</label>
        <input type="text" name="cliente_id" id="cliente_id" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$enderecos->debito}}">
        </div>

        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="salvar">
        </div>
    </form>
    </div>
@endsection('conteudo')

