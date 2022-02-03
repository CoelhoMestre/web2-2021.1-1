@extends('layouts.main')

@section('titulo','Edição de clientes')

@section('conteudo')
<div id="form">
<h1>Edição de Cliente</h1>
    <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="row">
        <div class="col">
                <label for="">cpf</label>
                <input type="text" name="cpf" id="cpf" class="form-control @error('cpf') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$cliente->cpf}}">
                @error('cpf')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror  
            </div>
            <div class="col">
                <label for="">cnpj</label>
                <input type="text" name="cnpj" id="cnpj" class="form-control @error('cnpj') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$cliente->cnpj}}">
                @error('cnpj')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror  
            </div>
            <p>
            <div class="col">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$cliente->nome}}">
                @error('nome')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror  
            </div>
            <div class="col">
                <label for="">Débito</label>
                <input type="number" name="debito" id="debito" class="form-control @error('debito') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$cliente->debito}}">
                @error('debito')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
            </div>
            <p>
            </div>

        <div class="btn btn-lg" id= "button">
            <input type="submit" class="form-control btn-dark" value="Salvar">
        </div>
    </form>
    
    </div>
@endsection('conteudo')