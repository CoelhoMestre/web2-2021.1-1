@extends('layouts.main')

@section('titulo','Edição de Vendas')

@section('conteudo')
<div id="form">
<h1>Edição de Vendas</h1>
    <form action="{{route('vendas.update', ['id' => $venda->id])}}" method="post">

        @csrf
        @method('PUT')
        <div class="row">

            <div class="col">
            <label for="">Idcliente:</label>
            <input type="text" name="idcliente" id="idcliente" class="form-control @error('idcliente') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$venda->id}}">
            @error('idcliente')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
                
            </div>
            

            <div class="col">
            <label for="">Valor total:</label>
            <input type="text" name="valortotal" id="valortotal" class="form-control @error('valortotal') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$venda->valortotal}}">
            @error('valortotal')
                <div class="invalid-feedback">
                {{$message}}
                </div>
            @enderror
            </div>

            <div class="col">
            <label for="">Data:</label>
            <input type="date" name="datavenda" id="datavenda" class="form-control @error('datavenda') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$venda->datavenda}}">
            @error('datavenda')
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