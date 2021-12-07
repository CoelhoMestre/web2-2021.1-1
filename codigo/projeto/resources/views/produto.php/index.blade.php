@extends('layouts.main')

@section('title', 'Produtos')

@section('conteudo')
    <main class="container-fluid bg-light min-vh-100 text-dark">
        <section class="container py-3 text-center container">
            <div class="row">
                <div class="col-6 col-md-6 col-sm-6 mx-auto">
                    <h1 class="display-6">CONSULTAR PRODUTO</h1>
                </div>
            </div>
        </section>

        <section class="container-fluid text-dark">
            <div class="row">
                <div class="col mb-3">
                    <input type="text" id="txtBusca" class="form-control border border-5 border-dark" placeholder="Pesquisar por categoria, marca ou referência..." aria-describedby="produtoHelp" autofocus>
                    <div id="produtoHelp" class="form-text">Digite a categoria, marca ou referência do produto...</div>
                </div>
                <div class="col mb-3">
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('cadastro.produto') }}">NOVO CADASTRO</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="table-responsive-lg">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">CATEGORIA/MARCA</th>
                        <th scope="col">REFERÊNCIA</th>
                        <th scope="col">QUANTIDADE</th>
                        <th scope="col">VALOR DE VENDA</th>
                        <th scope="col">LOCALIZAÇÃO</th>
                        <th scope="col">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$produto->id}}</td>
                        <td>{{$produto->categoria}}</td>
                        <td>{{$produto->referencia}}</td>
                        <td>{{$produto->quantidade}}</td>
                        <td>{{$produto->valorvenda}}</td>
                        <td>{{$produto->localizacao}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a class="btn btn-primary" href="#">EDITAR</a>
                                <button class="btn btn-sm btn-dark" onclick="deletar('', '', '')">APAGAR</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection('conteudo')