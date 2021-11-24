@extends('layouts.main')

@section('titulo','Cadastro de Itensentradas')

@section('conteudo')

<div id="form">
    <h1>Cadastrar Itens Entrada</h1>
    <form action="{{route('itensentradas.store')}}" method="post">
        @csrf


        <div class="row">
            <div class="col">
            <label for="">Identradas:</label>
            <input type="text" name="identrada" id="identrada" class="form-control @error('identrada') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('identrada') }}">
            @error('identrada')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror      
            </div>

        
        <div class="col">
            <p><label for="">Quantidade:</label>
            <input type="text" name="quantidade" id="quantidade" class="form-control @error('quantidade') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('quantidade') }}">
            @error('quantidade')
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
@endsection('conteudo')
