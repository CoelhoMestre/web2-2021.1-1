@extends('layouts.main')

@section('titulo','Cadastro de produtos')

@section('conteudo')
<div id="form">
    <h1>Cadastrar Produto</h1>
    <form action="{{route('produtos.store')}}" method="post">

        @csrf
        <div class="row">
        <div class="col">
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Nome">
        </div>

        <div class="col">
        <p><label for="">ICMS:</label>
        <input type="text" name="icms" id="icms"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="ICMS">
        </div>
        <p>
        <div class="col">
        <p><label for=""> IPI:</label>
        <input type="text" name="ipi" id="ipi"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="IPI">
        </div>
        
        <div class="col">
        <p><label for="">Frete:</label>
        <input type="text" name="frete" id="frete"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Frete">
        </div>
        <p>

        <div class="col">
        <p><label for="">Preço de Fábrica:</label>
        <input type="text" name="precofabrica" id="precofabrica"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Preço de Fábrica">
        </div>

        <div class="col">
        <p><label for="">Preço de Compra:</label>
        <input type="text" name="precocompra" id="precocompra"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Preço de Compra">
        </div>

        <p>
        <div class="col">
        <p><label for=""> Preço de Venda:</label>
        <input type="text" name="precovenda" id="precovenda"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Preço de Venda">
        </div>

        <div class="col">
        <p><label for="">Lucro:</label>
        <input type="text" name="lucro" id="lucro"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Lucro">
        </div>
        <p>
        <div class="col">
        <p><label for="">Desconto:</label>
        <input type="text" name="desconto" id="desconto"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Desconto">
        </div>

        <div class="col">
        <p><label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Quantidade">
        </div>
        <p>
    </div>

        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="Cadastrar">
        </div>  
    </form>
</div>
    @endsection('conteudo')

    
    
    
    
    
    
    