@extends('layouts.main')

@section('titulo','Cadastro de Fornecedor')

@section('conteudo')

<div id="form">
    <h1>Cadastrar Fornecedor</h1>
    <form action="{{route('fornecedores.store')}}" method="post">
        @csrf
        <div class="input m-3">
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Nome">
        </div>


        <div class="input m-3">
        <p><label for="">CNPJ:</label>
        <input type="text" name="cnpj" id="cnpj" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="CNPJ">
        </div>


        <div class="input m-3">
        <p><label for="">Endereço:</label>
        <input type="text" name="endereco" id="endereco" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Endereço">
        </div>

        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="Cadastrar">
        </div> 
    </form>
</div>
@endsection('conteudo')