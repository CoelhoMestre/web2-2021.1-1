@extends('layouts.main')

@section('titulo','Cadastro de Localização')

@section('conteudo')

<div id="form">
<h1>Cadastro de Localização</h1>
    <form action="{{route('localizacao.store')}}" method="post" >
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Localização</label>
                <input type="text" name="localizacao" id="localizacao" class="form-control @error('localizacao') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                @error('localizacao')
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
