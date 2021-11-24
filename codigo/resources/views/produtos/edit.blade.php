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
                <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->nome}}">
                @error('nome')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                @enderror
            </div>

            <div class="col">
                <p><label for="">ICMS:</label>
                <input type="text" name="icms" id="icms"class="form-control @error('icms') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->icms}}">
                @error('icms')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
    
            </div>
            <p>
            <div class="col">
                <p><label for=""> IPI:</label>
                <input type="text" name="ipi" id="ipi"class="form-control @error('ipi') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->ipi}}">
                @error('ipi')
                     <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        
            <div class="col">
                <p><label for="">Frete:</label>
                <input type="text" name="frete" id="frete"class="form-control @error('frete') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->frete}}">
                @error('frete')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <p>
            <div class="col">
                <p><label for="">Preço de Fábrica:</label>
                <input type="text" name="precofabrica" id="precofabrica"class="form-control @error('precofabrica') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->precofabrica}}">
                @error('precofabrica')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col">
                <p><label for="">Preço de Compra:</label>
                <input type="text" name="precocompra" id="precocompra"class="form-control @error('precocompra') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->precocompra}}">
                @error('precocompra')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <p>
            <div class="col">
                <p><label for=""> Preço de Venda:</label>
                <input type="text" name="precovenda" id="precovenda"class="form-control @error('precovenda') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->precovenda}}">
                @error('precovenda')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col">
                <p><label for="">Lucro:</label>
                <input type="text" name="lucro" id="lucro"class="form-control @error('lucro') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->lucro}}">
                @error('lucro')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <p>
            <div class="col">
                <p><label for="">Desconto:</label>
                <input type="text" name="desconto" id="desconto"class="form-control @error('desconto') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->desconto}}">
                @error('desconto')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col">
                <p><label for="">Quantidade:</label>
                <input type="text" name="quantidade" id="quantidade"class="form-control @error('quantidade') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$produto->quantidade}}">
                @error('quantidade')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div> 
                @enderror

            </div>
            <p>
        </div>
        
        <div class="btn btn-lg" id= "button">

            <input type="submit" class="form-control btn-dark" value="salvar">
        </div>  
        
    </form>
</body>
</html>
@endsection('conteudo')
        