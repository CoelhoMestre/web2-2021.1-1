@extends('layouts.main')

@section('titulo','Cadastro de Endereços')

@section('conteudo')

<div id="form">
    <h1>Cadastro de Endereço</h1>
    <form action="{{route('enderecos.store')}}" method="post">
        @csrf
        <p><label for="">Logradouro:</label>
        <input type="text" name="logradouro" id="logradouro" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Logradouro">

        <p><label for="">Bairro:</label>
        <input type="text" name="bairro" id="bairro" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Bairro">

        <p><label for="">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Cidade">

        <p><label for="">Uf:</label>
        <input type="text" name="uf" id="uf" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="UF">

        <p><label for="">IdCliente:</label>
        <input type="text" name="idcliente" id="idcliente" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="IdCliente">
        
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="Cadastrar">
        </div>    
    </form>
    </div>
@endsection('conteudo')



        