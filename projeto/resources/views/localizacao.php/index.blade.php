@extends('layouts.main')

@section('title', 'Departamentos')

@section('conteudo)
    <main class="container-fluid bg-light min-vh-100 text-dark">
        <section class="container py-3 text-center container">
            <div class="row">
                <div class="col-6 col-md-6 col-sm-6 mx-auto">
                    <h1 class="display-6">CONSULTAR LOCALIZAÇÃO</h1>
                </div>
            </div>
        </section>

        <section class="container-fluid text-dark">
            <div class="row">
                <div class="col mb-3">
                    <input type="text" id="txtBusca" class="form-control border border-5 border-dark" placeholder="Pesquisar departamento..." aria-describedby="Help">
                    <div id="Help" class="form-text">Digite o departamento...</div>
                </div>
                <div class="col mb-3">
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('cadastro.localizacao') }}">NOVO CADASTRO</a>
                    </div>
                </section>

                <div class="table-responsive-lg">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">LOCALIZAÇÃO</th>
                                <th scope="col">AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$localizacao->id}}</td>
                                <td>{{$localizacao->localizacao}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-primary" href="#">VISUALIZAR/EDITAR</a>
                                        <button class="btn btn-sm btn-dark" onclick="deletar('', '')">APAGAR</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection('conteudo')