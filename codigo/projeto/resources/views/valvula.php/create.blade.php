@extends('layouts.main')

@section('titulo','Cadastro de Valvula')

@section('conteudo')

<div id="form">
<h1>Cadastro de Valvula</h1>
    <form action="{{route('valvula.store')}}" method="post" >
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Valvula</label>
                <input type="text" name="valvula" id="valvula" class="form-control @error('valvula') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                @error('valvula')
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
