@extends('layouts.main')

@section('titulo','Fabricação')

@section('conteudo')

<div id="form">
<h1>Cadastro de Fabricação</h1>
    <form action="{{route('anofabricacao.store')}}" method="post" >
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Ano</label>
                <input type="text" name="anofabricacao" id="anofabricacao" class="form-control @error('anofabricacao') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                @error('anofabricacao')
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
