@extends('layouts.main')

@section('title', 'Valvulas')

@section('conteudo')
    
            <div class="row">
                <div class="col-6 col-md-6 col-sm-6 mx-auto">
                    <h1 class="display-6">CONSULTAR VÁLVULA</h1>
                </div>

        <section class="container-fluid text-dark">
            <div class="row">
                <div class="col ">
                    <input type="text" id="txtBusca" class="form-control border border-5 border-dark" placeholder="Pesquisar por quantidade de válvulas..." aria-describedby="Help">
                    <div id="Help" class="form-text">Digite a quantidade de válvulas...</div>
                </div>
                <div class="col">
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('cadastro.valvula') }}">NOVO CADASTRO</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="table-responsive-lg">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">VÁLVULAS</th>
                        <th scope="col">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$valvula->id}}</td>
                        <td>{{$valvula->valvulas}}</td>
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