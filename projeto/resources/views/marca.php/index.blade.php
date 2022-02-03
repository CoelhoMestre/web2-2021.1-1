@extends('layouts.main')

@section('title', 'Marcas')

@section('conteudo')
    
        <div class="row">
            <div class="col">
                <h1 class="display-6">CONSULTAR MARCA</h1>
                </div>
            </div>
      

        <section class="container-fluid text-dark">
            <div class="row">
                <div class="col mb-3">
                    <input type="text" id="txtBusca" class="form-control border border-5 border-dark" placeholder="Pesquisar marca..." aria-describedby="Help">
                    <div id="Help" class="form-text">Digite a marca...</div>
                </div>
                <div class="col mb-3">
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('cadastro.marca') }}">NOVO CADASTRO</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="table-responsive-lg">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">MARCA</th>
                        <th scope="col">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$anofabricacao->id}}</td>
                        <td>{{$anofabricacao->marca}}</td>
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
    </main>
@endsection('conteudo')