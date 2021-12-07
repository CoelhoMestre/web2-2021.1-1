@extends('layouts.dashboard')

@section('title', 'Venda')

@section('content')
   
        <span class="display-6">VENDAS</span>
        <section class="d-flex justify-content-center">
            <form id="realizarVenda" method="GET" action="{{ route('venda.itensvenda') }}">
                <div class="row">
                    <div class="col">
                        <label for="barraPesquisa" class="form-label black-text">CLIENTE</label>
                        <input type="text" autocomplete="off" class="form-control" id="barraPesquisa" aria-describedby="clienteHelp">
                        <input id="idcliente" type="hidden" name="idcliente" required>
                        <div id="clienteHelp" class="form-text">Digite o nome do cliente e selecione-o na lista.</div>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary ms-auto">REALIZAR VENDA</button>
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
                            <th scope="col">CLIENTE</th>
                            <th scope="col">FORMA DE PAGAMENTO</th>
                            <th scope="col">DATA</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">ITENS</th>
                            <th scope="col">VALOR TOTAL</th>
                            <th scope="col">AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$itensvenda->id}}</td>
                            <td>{{$itensvenda->cliente}}</td>
                            <td>{{$itensvenda->formapagamento}}</td>
                            <td>{{$itensvendaa->data}}</td>
                            <td>{{$itensvenda->status}}</td>
                            <td>{{$itensvenda->itens}}</td>
                            <td>{{$itensvenda->valortotal}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="{{ route('venda.itensvenda') }}">VISUALIZAR</a>
                                    <button class="btn btn-dark" onclick="deletar('', '')">APAGAR</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection('content')


