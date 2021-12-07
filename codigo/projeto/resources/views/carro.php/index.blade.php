@extends('layouts.main')

@section('title', 'Carros')

@section('conteudo')
    
            <div class="row">
                   
                    <h1 class="display-6">CONSULTAR MODELO DE CARRO</h1>
            </div>
            
            <section class="container-fluid text-dark">
                <div class="row">
                    <div class="col" >
                        <input type="text" id="txtBusca" class="form-control border border-5 border-dark" placeholder="Pesquisar modelo de carro..." aria-describedby="Help">
                        <div id="Help" class="form-text">Digite o modelo do carro...</div>
                    </div>
                    <div class="col">
                        <div class="float-end">
                            <a class="btn btn-primary" href="{{ route('cadastro.carro') }}">NOVO CADASTRO</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="table-responsive-lg">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">MODELO</th>
                            <th scope="col">AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$carro->id}}</td>
                            <td>{{$carro->modelo}}</td>
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
        </section>
    </main>
@endsection('conteudo')