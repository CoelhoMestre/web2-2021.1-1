@extends('layouts.main')

@section('titulo','Edição de ItensEntradas')

@section('conteudo')
<div id="form">
<h1>Edição de ItensEntrada</h1>
    <form action="{{route('itensentradas.update', ['id' => $itensentrada->id])}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="input m-3">
            <label for="">Identradas:</label>
            <input type="text" name="identrada" id="identrada" class="form-control @error('identrada') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$entrada->id}}">
            @error('identrada')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
        </div>

        <div class="input m-3">
            <p><label for="">Quantidade:</label>
            <input type="text" name="quantidade" id="quantidade" class="form-control @error('quantidade') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$itensentrada->quantidade}}">
            @error('quantidade')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
        </div>

    </form>
    </div>
@endsection('conteudo')
