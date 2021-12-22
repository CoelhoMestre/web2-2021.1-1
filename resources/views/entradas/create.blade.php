@extends('layouts.main')

@section('titulo','Cadastro de entradas')

@section('conteudo')

<div id="form">
    <h1>Cadastro de Entrada</h1>
    <form action="{{route('entradas.store')}}" method="post">
        @csrf

        <div class="row">
            <div class="col">
                <label for="">Idfornecedor:</label>
                <input type="text" name="idfornecedor" id="idfornecedor" class="form-control @error('idfornecedor') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('idfornecedor') }}">
                @error('idfornecedor')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror 
            </div>

            <div class="col">
                <label for="">Valor total:</label>
                <input type="text" name="valortotal" id="valortotal" class="form-control @error('valortotal') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('valortotal') }}">
                @error('valortotal')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col">
                <label for="">Data:</label>
                <input type="date" name="datacompra" id="datacompra" class="form-control @error('datacompra') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('datacompra') }}">
                @error('datacompra')
                    <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                     
            </div>
            
        </div>
        <div class="btn btn-lg" id= "button">
            <input type="submit" class="form-control btn-dark" value="Cadastrar">
        </div>  
    </form>
    </div>
@endsection('conteudo')

