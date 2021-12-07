@extends('layouts.main')

@section('titulo','Cadastro de Carros')

@section('conteudo')

<div id="form">
<h1>Cadastro de Carros</h1>
    <form action="{{route('carro.store')}}" method="post" >
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control @error('modelo') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                @error('modelo')
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
