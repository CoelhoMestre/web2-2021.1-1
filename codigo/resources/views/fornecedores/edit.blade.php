@extends('layouts.main')

@section('titulo','Edição de fornecedores')

@section('conteudo')
<div id="form">
<h1>Edição de Fornecedor</h1>
    <form action="{{route('fornecedores.update', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('PUT')
    
        <div class="input m-3">
        <label for="">Nome do Fornecedor</label>
        <input type="text" name="nome" id="nome" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$fornecedor->nome}}">
        </div>
        <div class="input m-3">
        <label for="">CNPJ do Fornecedor</label>
        <input type="text" name="cnpj" id="cnpj" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$fornecedor->cnpj}}">
        </div>
        <div class="input m-3">
        <label for="">Endereço do Fornecedor</label>
        <input type="text" name="endereco" id="endereco" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$fornecedor->endereco}}">
        </div>
        
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="salvar">
        </div>  
    </form>
    </div>
@endsection('conteudo')