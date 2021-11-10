@extends('layouts.main')

@section('titulo','Cadastro de clientes')

@section('conteudo')

<div id="form">
    <h1>Cadastro de Cliente</h1>
    <form action="{{route('clientes.store')}}" method="post">
        @csrf
        
        <div class="input m-3">
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Nome">
        </div>
        <div class="input m-3">
            <label for="">Sexo</label>
            <input type="text" name="sexo" id="sexo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Sexo">
        </div>
        <div class="input m-3">
            <label for="">Endereço</label>
            <input type="text"  name="endereco" id="endereco" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Endereço">
        </div>
        <div class="input m-3">
            <label for="">Débito</label>
            <input type="text" name="debito" id="debito" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Débito">
        </div>
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="Cadastrar">
        </div>
    </form>
    
    </div>
@endsection('conteudo')