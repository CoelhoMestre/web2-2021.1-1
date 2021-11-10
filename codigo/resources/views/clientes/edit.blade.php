@extends('layouts.main')

@section('titulo','Edição de clientes')

@section('conteudo')
<div id="form">
<h1>Edição de Cliente</h1>
    <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="input m-3">
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$cliente->nome}}">
        </div>
        <div class="input m-3">
            <label for="">Sexo</label>
            <input type="text" name="sexo" id="sexo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$cliente->sexo}}">
        </div>
        <div class="input m-3">
            <label for="">Endereço</label>
            <input type="text"  name="endereco" id="endereco" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$cliente->endereco}}">
        </div>
        <div class="input m-3">
            <label for="">Débito</label>
            <input type="text" name="debito" id="debito" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  value="{{$cliente->debito}}">
        </div>
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="salvar">
        </div>

    </form>
</div>
@endsection('conteudo')