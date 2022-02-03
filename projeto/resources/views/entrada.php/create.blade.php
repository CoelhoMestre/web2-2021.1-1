@extends('layouts.main')

@section('title', 'Entrada')

@section('conteudo')

    <span class="display-6">Entradas</span>
            

    <section class="d-flex justify-content-center">
        <form id="realizarEntrada" method="GET" action="{{ route('entrada.itensentrada') }}">
            <div class="row align-items-end mb-3 d-flex">
                <div class="col">
                    <label for="barraPesquisa" class="form-label black-text">FORNECEDOR</label>
                    <input type="text" placeholder="FORNECEDOR" class="form-control" id="barraPesquisa" aria-describedby="fornecedorHelp">
                    <input id="idfornecedor" name="idfornecedor" type="hidden" required>
                    <div id="fornecedorHelp" class="form-text">Digite o nome do fornecedor e selecione-o na lista.</div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-dark">DAR ENTRADA</button>
                </div>
            </div>
        </form>
    </section>

    <section class="container-fluid text-start mb-5">
        <div class="table-responsive-lg">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">FORNECEDOR</th>
                        <th scope="col">DATA</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">ITENS</th>
                        <th scope="col">VALOR TOTAL</th>
                        <th scope="col">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$itensentrada->id}}</td>
                        <td>{{$itensentrada->fornecedor}}</td>
                        <td>{{$itensentrada->data}}</td>
                        <td>{{$itensentrada->status}}</td>
                        <td>{{$itensentrada->itens}}</td>
                        <td>{{$itensentrada->valortotal}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{ route('entrada.itensentrada') }}">VISUALIZAR</a>
                                <button class="btn btn-dark" onclick="deletar('', '')">APAGAR</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>
@endsection('conteudo')
