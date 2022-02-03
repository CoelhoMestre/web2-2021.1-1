@extends('layouts.main')

@section('titulo','Cadastro de Valvula')

@section('conteudo')

<div id="form">
<h1>Cadastro de Valvula</h1>
    <form action="{{route('valvula.update')}}" method="post" >
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Valvula</label>
                <input type="text" name="valvula" id="valvula" class="form-control @error('valvula') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                @error('valvula')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror  
            </div>
            </div>
            <div class="text-end">
            <a href="../../views/consulta/valvula.php" class="btn btn-primary ">VOLTAR</a>
            <button type="submit" class="btn btn-dark">SALVAR</button>
        </div>
    </form>
    
    </div>
@endsection('conteudo')
