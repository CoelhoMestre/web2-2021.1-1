@extends('layouts.main')

@section('titulo','Cadastro de Marca')

@section('conteudo')

<div id="form">
<h1>Cadastro de Marca</h1>
    <form action="{{route('marca.update')}}" method="post" >
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control @error('marca') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                @error('marca')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror  
            </div>
            </div>
            <div class="text-end">
                <a href="../../views/consulta/marca.php" class="btn btn-primary ">VOLTAR</a>
                <button type="submit" class="btn btn-dark">SALVAR</button>
            </div>
    </form>
    
    </div>
@endsection('conteudo')
