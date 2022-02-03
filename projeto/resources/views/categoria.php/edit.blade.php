@extends('layouts.main')

@section('titulo','Edição de Categoria')

@section('conteudo')

<div id="form">
<h1>Edição de Categoria</h1>
    <form action="{{route('categoria.update')}}" method="post" >
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Categoria</label>
                <input type="text" name="categoria" id="categoria" class="form-control @error('categoria') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                @error('categoria')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror  
            </div>
            </div>
            <div class="text-end">
                <a href="../../views/consulta/categoria.php" class="btn btn-primary ">VOLTAR</a>
                <button type="submit" class="btn btn-dark">SALVAR</button>
            </div>
    </form>
    
    </div>
@endsection('conteudo')
