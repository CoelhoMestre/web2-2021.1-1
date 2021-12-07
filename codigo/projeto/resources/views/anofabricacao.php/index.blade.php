@extends('layouts.main')

@section('title', 'Fabricação')

@section('conteudo')
    
        <h1 class="display-6">CONSULTAR ANO DE FABRICAÇÃO</h1>
                
        <section class="container-fluid text-dark">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control border border-5 border-dark" placeholder="Pesquisar ano..." id="txtBusca" aria-describedby="Help">
                    <div id="Help" class="form-text">Digite o ano de fabricação...</div>
                </div>
                <div class="col">
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('cadastro.fabricacao') }}">Novo Cadastro</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="table-responsive-lg">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ano</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$anofabricacao->id}}</td>
                        <td>{{$anofabricacao->Ano}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">VISUALIZAR/EDITAR</a>
                                <button class="btn btn-sm btn-dark" onclick="deletar('', '')">APAGAR</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection('conteudo')