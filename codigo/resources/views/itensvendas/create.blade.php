@extends('layouts.main')

@section('titulo','Cadastro de Itensvendas')

@section('conteudo')

<div id="form">
    
    <h1>Cadastrar ItensVenda</h1>
    <form action="{{route('itensvendas.store')}}" method="post">

        @csrf
        <div class="input m-3">
            <label for="">Idvendas:</label>
            <input type="text" name="idvenda" id="idvenda" class="form-control @error('idvenda') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('idvenda') }}">
            @error('idvenda')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
        </div>

        <div class="input m-3">
            <p><label for="">Quantidade:</label>
            <input type="text" name="quantidade" id="quantidade" class="form-control @error('quantidade') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('quantidade') }}">
            @error('quantidade')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
        </div>
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="Cadastrar">
        </div>
    </form>
    </div>
@endsection('conteudo')
