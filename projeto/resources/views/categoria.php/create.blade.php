@extends('layouts.main')

@section('titulo','Cadastro de Categoria')

@section('conteudo')

<div id="form">
<h1>Cadastro de Categoria</h1>
    <form action="{{route('categoria.store')}}" method="post" >
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Categoria</label>
                <input type="text" name="categoria" id="categoria" class="form-control @error('categoria') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                @error('categoria')
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
