@extends('layouts.main')

@section('titulo','Cadastro de Fornecedor')

@section('conteudo')

<div id="form">
    <h1>Cadastrar Fornecedor</h1>
    <form action="{{route('fornecedores.store')}}" method="post">
        @csrf

        <div class="row">
            <div class="col">
                <label for="">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('nome') }}">
                @error('nome')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror      
            </div>

        
            <div class="col">
                <label for="">CNPJ:</label>
                <input type="text" name="cnpj" id="cnpj" class="form-control @error('cnpj') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('cnpj') }}">
                @error('cnpj')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col">
                <label for="">Endereço:</label>
                <input type="text" name="endereco" id="endereco" class="form-control @error('endereco') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('endereco') }}">
                @error('endereco')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
            </div>

        </div>

        <div class="btn btn-lg" id= "button">
            <input type="submit" class="form-control btn-primary custom-btn" value="Cadastrar" >
        </div> 
    </form>
</div>
@endsection('conteudo')