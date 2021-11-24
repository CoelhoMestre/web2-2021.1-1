@extends('layouts.main')

@section('titulo','Cadastro de clientes')

@section('conteudo')

<div id="form">

    <h1>Cadastro de Cliente</h1>
    <form action="{{route('clientes.store')}}" method="post" >
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('nome') }}">
                @error('nome')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror  
            </div>

            <div class="col">
                <label for="">Sexo</label>
                <input type="text" name="sexo" id="sexo" class="form-control @error('sexo') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('sexo') }}" >
                @error('sexo')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror    
            </div>

            <p>
            <div class="col">
                <label for="">Endereço</label>
                <input type="text"  name="endereco" id="endereco" class="form-control @error('endereco') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('endereco') }}">
                @error('endereco')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror       
            </div>
            
            <div class="col">
                <label for="">Débito</label>
                <input type="number" name="debito" id="debito" class="form-control @error('debito') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('debito') }}">
                @error('debito')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
            </div>
            <p>
            </div>

        <div class="btn btn-lg" id= "button">
            <input type="submit" class="form-control btn-dark" value="Cadastrar">
        </div>
    </form>
    
    </div>
@endsection('conteudo')