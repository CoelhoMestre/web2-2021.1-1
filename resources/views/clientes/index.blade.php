@extends('layouts.main')

@section('titulo','Clientes')

@section('conteudo')

<div id="form">
        @csrf
        <div class="row">
        <h1>Clientes Cadastrados</h1>
       
        <section class="container-fluid text-dark">
                <div class="row">
                    <div class="col mb-3">
                        <input type="text" class="form-control border border-5 border-dark" placeholder="Pesquisar nome..." id="txtBusca" aria-describedby="clienteHelp">
                       
                        <div id="clienteHelp" class="form-text">Digite o nome do cliente...</div>
                        
                    <div class="col mb-3">
                        <div class="float-end">
                            <a class="btn btn-primary" href="../cadastro/cliente.php">+</a>
                        </div>
                    </div>
                </div>
                </div>
            </section>

<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Cpf</th> 
            <th scope="col">Debito</th>
            <th scope="col">Endereço</th> 
            
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <th scope="row">{{$cliente->id}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->telefone}}</td>
            <td>{{$cliente->cpf}}</td>
            <td>{{$cliente->debito}}</td>
            <td>{{$cliente->endereco}}</td>
            
            <td>
            
            <a href="{{route('clientes.edit', [$cliente->id])}} "><input type="submit" class="btn btn-danger" value= "editar"></a>
            </td>
            <td>
            <form action="{{route('clientes.destroy', [$cliente->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button ><img src="{{ asset('imagens/editar.png') }}"></button>
        
       
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
 
@endsection('conteudo')