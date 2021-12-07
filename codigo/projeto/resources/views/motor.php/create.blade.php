@extends('layouts.main')

@section('titulo','Cadastro de Motor')

@section('conteudo')

<div id="form">
<h1>Cadastro de Motor</h1>
    <form action="{{route('motor.store')}}" method="post" >
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Motor</label>
                <input type="text" name="motor" id="motor" class="form-control @error('motor') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                @error('motor')
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
