@extends('layouts.main')

@section('titulo','Cadastro de clientes')

@section('conteudo')

<div id="form">

    <h1>Cadastro de Cliente</h1>
    <form action="{{route('clientes.store')}}" method="post" >
        @csrf
        <div class="row">
        
            <div class="col">
            <div id="form1">
                <label for="">Nome:</label>
            </div>
            <div id="forminput">
                <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('nome') }}">
                @error('nome')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror  
                </div>
            </div>

            <div class="col">
            <div id="form1">
                <label for="">Telefone:</label>
            </div>
            <div id="forminput">
                <input type="text" name="telefone" id="telefone" class="form-control @error('telefone') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('telefone') }}" >
                @error('telefone')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
                </div>    
            </div>
            <p>
            <div class="col">
            <div id="form1">
                <label for="">Cnpj:</label>
            </div>
            <div id="forminput">
                <input type="text" name="cnpj" id="cnpj" class="form-control @error('cnpj') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('cnpj') }}" >
                @error('cnpj')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror 
                </div>   
            </div>
            
            <div class="col">
            <div id="form1">
                <label for="">Débito:</label>
            </div>
            <div id="forminput">
                <input type="number" name="debito" id="debito" class="form-control @error('debito') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('debito') }}">
                @error('debito')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
                </div>
            </div>
            <p>
            <div class="col">
            <div id="form1">
                <label for="">Endereço:</label>
            </div>
            <div id="forminput">
                <input type="text"  name="endereco" id="endereco" class="form-control @error('endereco') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('endereco') }}">
                @error('endereco')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror   
                </div>    
            </div>
        </div>
        <div class="btn btn-lg" id= "button">
            <input type="submit" class="form-control btn-danger" value="Cadastrar">
        </div>
        
    </form>
    
    </div>
@endsection('conteudo')