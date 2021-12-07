@extends('layouts.main')

@section('titulo','Cadastro de produtos')

@section('conteudo')
<div id="form">
    <h1>Cadastrar Produto</h1>
    <form action="{{route('produtos.store')}}" method="post">

        @csrf
        <div class="row">
            <div class="col">
            <label for="idmotor" class="form-label black-text">Motor</label>
                <select name="idmotor" id="idmotor" class="form-control" required>
                    <option selected disabled value>Selecione</option>
                    <option value="1">0.4</option>
                </select>
                @error('idmotor')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                @enderror
            </div>
            <div class="col">
            <label for="idcarro" class="form-label black-text">Carro</label>
                <select id="idcarro" name="idcarro" class="form-control" required>
                    <option selected disabled value>Selecione</option>
                    <option value="1">GOL</option>
                </select>
                @error('idcarro')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
    
            </div>
            <p>
            <div class="col">
            <label for="idvalvulas" class="form-label black-text">Válvula</label>
                <select id="idvalvulas" name="idvalvulas" class="form-control" required>
                    <option selected disabled value>Selecione</option>
                    <option value="1">8</option>
                </select>
                @error('idvalvulas')
                     <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        
            <div class="col">
            <label for="idfabricacao" class="form-label black-text">Fabricação</label>
                    <select id="idfabricacao" name="idfabricacao" class="form-control" required>
                        <option selected disabled value>Selecione</option>
                        <option value="1">1990</option>
                    </select>
                @error('idfabricacao')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <p>
            <div class="col">
            <label for="idlocalizacao" class="form-label black-text">Localização</label>
                    <select id="idlocalizacao" name="idlocalizacao" class="form-control" required>
                        <option selected disabled value>Selecione</option>
                        <option value="1">DEPART. 1</option>
                    </select>
                @error('idlocalizacao')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col">
            <label for="idcategoria" class="form-label black-text">Categoria</label>
                    <select id="idcategoria" name="idcategoria" class="form-control" required>
                        <option selected disabled value>Selecione</option>
                        <option value="1">CATALISADOR</option>
                @error('idcategoria')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <p>
            <div class="col">
            <label for="idmarca" class="form-label black-text">Marca</label>
                    <select id="idmarca" name="idmarca" class="form-control" required>
                        <option selected disabled value>Selecione</option>
                        <option value="1">TUPER</option>
                    </select>
                @error('idmarca')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="col">
            <label for="idreferencia" class="form-label black-text">Referência</label>
                <input type="text" id="idreferencia" name="referencia" oninput="validaInput(this, true)"  class="form-control" maxlength="20"  value="{{ old('referencia') }}" required> 
                @error('idreferencia')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
            <label for="unidade" class="form-label black-text">Unidade</label>
                <input type="text" id="unidade" name="unidade" oninput="validaInput(this, false)" class="form-control" maxlength="2" value="{{ old('unidade') }}" required>
                @error('unidade')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div> 
                @enderror

            </div>
            <p>
        </div>

        <div class="btn btn-lg" id= "button">

                <input type="submit" class="form-control btn-dark" value="Cadastrar">
            </div>  
    </form>
</div>
    @endsection('conteudo')
































