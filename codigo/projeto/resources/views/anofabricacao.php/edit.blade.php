@extends('layouts.main')

@section('titulo','Cadastro de Fabricação')

@section('conteudo')

<div id="form">
<h1>Cadastro de Fabricação</h1>
    <form action="{{route('anofabricacao.update')}}" method="post" >
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Ano</label>
                <input type="text" name="anofabricacao" id="anofabricacao" class="form-control @error('anofabricacao') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                @error('anofabricacao')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror  
            </div>
            </div>
            <div class="text-end">
                <a href="../../views/consulta/anofabricacao.php" class="btn btn-primary ">VOLTAR</a>
                <button type="submit" class="btn btn-dark">SALVAR</button>
            </div>
    </form>
        
    </div>
@endsection('conteudo')

                   
             
   