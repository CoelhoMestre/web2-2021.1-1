@extends('layouts.main')

@section('title', 'Meu Perfil')

@section('conteudo')
    <main class="container-fluid bg-light text-dark">
        <section class="container py-3">
            <div class="row align-items-center d-flex">
                <div class="col-2 col-md-2 col-sm-2"></div>
                <div class="col-8 col-md-8 col-sm-8 text-center">
                    <span class="display-6">MEU PERFIL</span>
                </div>
            </div>
        </section>

        <div class="py-5 bg-light vh-100">
            <section class="d-flex justify-content-center align-items-center text-dark">
                <form>
                    <div class="row">
                        <img class="img-fluid w-100" src="{{ asset('images/usuario.png') }}">
                    </div>
                    <div class="row">
                        <label for="nome" class="form-label">NOME</label>
                        <input type="text" placeholder="NOME" class="form-control" id="nome" value=""disabled>
                    </div>
                    <div class="row">
                        <label for="usuario" class="form-label">USUÁRIO</label>
                        <input type="text" placeholder="USUÁRIO" class="form-control" id="usuario" value=""disabled>
                    </div>
                </form>
            </section>
        </div>
    </main>
@endsection('conteudo')