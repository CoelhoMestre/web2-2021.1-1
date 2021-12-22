@extends('layouts.main')

@section('titulo','Edição de endereços')

@section('conteudo')
<div id="form">
<h1>Edição de Endereço</h1>
    <form action="{{route('enderecos.update', ['id' => $enderecos->id])}}" method="post">
        @csrf
        @method('PUT')
        
        <form action="{{route('enderecos.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <p><label for="">Logradouro:</label>
                <input type="text" name="logradouro" id="logradouro" class="form-control @error('logradouro') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$enderecos->logradouro}}">
                @error('logradouro')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
            </div>
            <p>
            <div class="col">
                <label for="">Bairro:</label>
                <input type="text" name="bairro" id="bairro" class="form-control @error('bairro') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$enderecos->bairro}}">
                @error('bairro')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror    
            </div>
            
            <div class="col">
                <label for="">Cidade:</label>
                <input type="text" name="cidade" id="cidade" class="form-control @error('cidade') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$enderecos->cidade}}">
                 @error('cidade')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror  
            </div>
            <p>
            <div class="col">
                <label for="">Uf:</label>
                <input type="text" name="uf" id="uf" class="form-control @error('uf') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$enderecos->uf}}">
                @error('uf')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror   
            </div>
            
            <div class="col">
                <label for="">IdCliente:</label>
                <input type="text" name="idcliente" id="idcliente" class="form-control @error('idcliente') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$enderecos->idcliente}}">
                @error('idcliente')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
            </div>
            
    </div>
    <div class="btn btn-lg" id= "button">
            <input type="submit" class="form-control btn-dark" value="salvar">
        </div>
    </form>
    </div>
@endsection('conteudo')

