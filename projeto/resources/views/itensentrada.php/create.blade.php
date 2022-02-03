@extends('layouts.main')

@section('title', 'Itens entrada')

@section('conteudo')

    <span class="display-6">ITENS - ENTRADA</span>
           

            <div class="row">
                <p class="display-6 ms-auto">INFORMAÇÕES DO FORNECEDOR</p>
            </div>

            <div class="row">
                <div class="col">
                    <label for="nomeFornecedor" class="form-label black-text">NOME</label>
                    <input type="text" id="nomeFornecedor" class="form-control" value="{{$fornecedor->nome}}" disabled>
                </div>
                <div class="col">
                    <label for="enderecoFornecedor" class="form-label black-text">ENDEREÇO</label>
                    <input type="text" id="enderecoFornecedor" class="form-control" value="{{$fornecedor->endereco}}" disabled>
                </div>
                <div class="col">
                    <label for="telefoneFornecedor" class="form-label black-text">TELEFONE</label>
                    <input type="text" id="telefoneFornecedor" class="form-control" value="{{$fornecedor->telefone}}" disabled>
                </div>
                <div class="col">
                    <label for="cnpjFornecedor" class="form-label black-text">CNPJ</label>
                    <input type="text" id="cnpjFornecedor" class="form-control" value="{{$fornecedor->cnpj}}" disabled>
                </div>
            </div>
        </section>
            <section class="text-start mb-3">
                <div class="row">
                    <p class="display-6 ms-auto">INSERIR ITENS</p>
                </div>

                <form method="GET" id="inserirItensEntrada" action="">
                    
                        <div class="col">
                            <label for="idproduto" class="form-label black-text">PRODUTO</label>
                            <input type="text" class="form-control" placeholder="Pesquise pelo produto..." value="1" disabled>
                            <input type="hidden" id="idproduto" name="idproduto" value="#" required>

                        </div>
                        <div class="col">
                            <a class="btn btn-primary" title="Editar" onclick="window.open(`#`, 'Pesquisar produto', 'width=1000,height=800'); return false;">
                                PESQUISAR
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="precoCompra" class="form-label black-text">PREÇO COMPRA</label>
                            <input type="number" min="0" id="precoCompra" oninput="validaInputNumber(this);" name="precoCompra" class="form-control" placeholder="PREÇO DE COMPRA" value="" placeholder="PREÇO DE COMPRA" required>
                        </div>
                        <div class="col">
                            <label for="quantidade" class="form-label black-text">QUANTIDADE</label>
                            <input type="number" min="1" id="quantidade" name="quantidade" class="form-control" placeholder="QUANTIDADE" autocomplete="off" required>
                        </div>
                        <div class="col">
                            <label for="unidade" class="form-label black-text">UNIDADE</label>
                            <input type="text" oninput="validaInput(this);" autocomplete="off" name="unidade" id="unidade" class="form-control" placeholder="UNIDADE" required maxlength="2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ipi" class="form-label black-text">IPI (%)</label>
                            <input type="number" min="1" id="ipi" autocomplete="off" oninput="validaInputNumber(this);" name="ipi" class="form-control" placeholder="IPI" required>
                        </div>
                        <div class="col">
                            <label for="frete" class="form-label black-text">FRETE (%)</label>
                            <input type="number" min="1" id="frete" autocomplete="off" oninput="validaInputNumber(this);" name="frete" class="form-control" placeholder="FRETE" required>
                        </div>
                        <div class="col">
                            <label for="icms" class="form-label black-text">ICMS (%)</label>
                            <input type="number" min="1" id="icms" autocomplete="off" oninput="validaInputNumber(this);" name="icms" class="form-control" placeholder="ICMS" required>
                        </div>
                        <div class="col">
                            <label for="valorTotalItem" class="form-label black-text">VALOR TOTAL</label>
                            <input type="text" id="valorTotalItem" class="form-control" value="R$0.0" disabled>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col">
                            <form method="POST" id="inserirItensEntrada" action="">
                                <button id="inserir" class="btn btn-primary ms-auto">INSERIR</button>
                            </form>
                        </div>
                    </div>
                </form>
            </section>

        <section class="text-start mb-5">
            <div class="row">
                <p class="display-6 ms-auto">ITENS</p>
            </div>

            <div class="table-responsive-lg">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">PRODUTO</th>
                            <th scope="col">PREÇO</th>
                            <th scope="col">QUANTIDADE</th>
                            <th scope="col">UNIDADE</th>
                            <th scope="col">IPI</th>
                            <th scope="col">FRETE</th>
                            <th scope="col">ICMS</th>
                            <th scope="col">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$produto->id}}</td>
                            <td>{{$produto->produto}}</td>
                            <td>{{$produto->preco}}</td>
                            <td>{{$produto->quantidade}}</td>
                            <td>{{$produto->unidade}}</td>
                            <td>{{$produto->ipi}}</td>
                            <td>{{$produto->frete}}</td>
                            <td>{{$produto->icms}}</td>
                            <td>{{$produto->total}}</td>
                        </tr>
                        <tr>
                            <td colspan="3">TOTAL</td>
                            <td colspan="5"></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="text-start">
            <div class="row">
                <p class="display-6 ms-auto">FINALIZAR ENTRADA</p>
            </div>

            <form id="finalizarEntrada" method="GET" action="{{ route('entrada.index') }}">
                <div class="row align-items-end mb-3 d-flex">
                    <input type="hidden" name="identrada" value="1">
                    <div class="col">
                        <label for="valorTotalnota" class="form-label black-text">VALOR TOTAL DA ENTRADA</label>
                        <input type="text" id="valorTotalnota" class="form-control" value="" disabled>
                    </div>
                    <div class="col">
                        <button type="button" id="finalizar" class="btn btn-primary ms-auto">FINALIZAR</button>
                    </div>
                </div>
            </form>
        </section>
    </section>
</main>
@endsection('conteudo')