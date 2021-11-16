@extends('layouts.main')

@section('titulo','Edição de entradas')

@section('conteudo')
<div id="form">
<h1>Edição de Entrada</h1>
    <form action="{{route('entradas.update', ['id' => $entrada->id])}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="input m-3">
            <label for="">Id Fornecedor</label>
            <input type="text" name="idfornecedor" id="idfornecedor" class="form-control @error('idfornecedor') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$entrada->id}}">
            @error('idfornecedor')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror

        </div>
            <label for="">Valor Total</label>
            <input type="text" name="valortotal" id="valortotal" class="form-control @error('valortotal') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$entrada->valortotal}}">
           
            @error('valortotal')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
        </div>

        <div class="input m-3">
            <label for="">Data</label>
            <input type="date" name="datacompra" id="datacompra" class="form-control @error('datacompra') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  value="{{$entrada->datacompra}}">
            @error('datacompra')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="salvar">
        </div>  
    </form>
    </div>
@endsection('conteudo')