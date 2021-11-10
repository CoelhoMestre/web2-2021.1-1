@extends('layouts.main')

@section('titulo','Edição de produtos')

@section('conteudo')

<div id="form">
<h1>Editar Produto</h1>
    <form action="{{route('produtos.update', ['id' => $produto->id])}}" method="post">

        @csrf
        @method('PUT')
        <div class="row">
        <div class="col">
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->nome}}">
        </div>

        <div class="col">
            <label for="">ICMS:</label>
        <input type="text" name="icms" id="icms" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->icms}}">
        </div>

        <p>
        <div class="col">
        <label for=""> IPI:</label>
        <input type="text" name="ipi" id="ipi" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->ipi}}">
        </div>
        <div class="col">
        <label for="">Frete:</label>
        <input type="text" name="frete" id="frete" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->frete}}">
        </div>
        <p>
        <div class="col">
        <label for="">Preço de Fábrica:</label>
        <input type="text" name="precofabrica" id="precofabrica" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->precofabrica}}">
        </div>
        <div class="col">
        <label for="">Preço de Compra:</label>
        <input type="text" name="precocompra" id="precocompra" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->precocompra}}">
        </div>
        <p>
        <div class="col">
        <label for=""> Preço de Venda:</label>
        <input type="text" name="precovenda" id="precovenda" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->precovenda}}">
        </div>
        
        <div class="col">
        <label for="">Lucro:</label>
        <input type="text" name="lucro" id="lucro" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->lucro}}">
        </div>
        <p>

        <div class="col">
        <label for="">Desconto:</label>
        <input type="text" name="desconto" id="desconto" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->desconto}}">
        </div>

        <div class="col">
        <label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->quantidade}}">
        </div>

        </div>
        <p>
        <div class="input m-3">
            <input type="submit" class="form-control btn-dark" value="salvar">
        </div>  
        
    </form>
</body>
</html>
@endsection('conteudo')
        