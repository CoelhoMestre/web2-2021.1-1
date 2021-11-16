@extends('layouts.main')

@section('titulo','Cadastro de Endereços')

@section('conteudo')

<div id="form">
    <h1>Cadastro de Endereço</h1>
    <form action="{{route('enderecos.store')}}" method="post">
        @csrf
        <div class="input m-3">
            <p><label for="">Logradouro:</label>
            <input type="text" name="logradouro" id="logradouro" class="form-control @error('logradouro') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('nome') }}">
            @error('logradouro')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
        </div>
        <div class="input m-3">
        <p><label for="">Bairro:</label>
        <input type="text" name="bairro" id="bairro" class="form-control @error('bairro') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('bairro') }}">
        @error('bairro')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
        </div>
        <div class="input m-3">
        <p><label for="">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="form-control @error('cidade') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('cidade') }}">
        @error('cidade')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
        </div>
        <div class="input m-3">
        <p><label for="">Uf:</label>
        <input type="text" name="uf" id="uf" class="form-control @error('uf') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('uf') }}">
        @error('uf')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
        </div>
        <div class="input m-3">
        <p><label for="">IdCliente:</label>
        <input type="text" name="idcliente" id="idcliente" class="form-control @error('idcliente') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('idcliente') }}">
            @error('idcliente')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
        </div>
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="Cadastrar">
        </div>    
    </form>
    </div>
@endsection('conteudo')



        