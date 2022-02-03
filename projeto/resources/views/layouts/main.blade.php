<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS only -->
    <link rel="stylesheet" href="http://localhost/codigo/public/css/style.css">
    <title> @yield('titulo') </title>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Socape</h1>
        </div>
        
        <div class="collapse navbar-collapse" id="navegacao">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('dashboard.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('venda.index') }}">Venda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('entrada.index') }}">Entrada</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Consultar</a>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="{{ route('consulta.cliente') }}">Cliente</a></li>
                            <li><a class="dropdown-item" href="{{ route('consulta.fornecedor') }}">Fornecedor</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('consulta.produto') }}">Poduto</a></li>
                            <li><a class="dropdown-item" href="{{ route('consulta.carro') }}">Carro</a></li>
                            <li><a class="dropdown-item" href="{{ route('consulta.localizacao') }}">Localização</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('consulta.valvula') }}">Válvula</a></li>
                            <li><a class="dropdown-item" href="{{ route('consulta.categoria') }}">Categoria</a></li>
                            <li><a class="dropdown-item" href="{{ route('consulta.motor') }}">Motor</a></li>
                            <li><a class="dropdown-item" href="{{ route('consulta.fabricacao') }}">Fabricação</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('consulta.marca') }}">Marca</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Minha
                            Conta</a>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li>
                                <h6 class="dropdown-header">Olá Marcos Coelho</h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('usuario.perfil') }}">Perfil</a></li>
                            <li><a class="dropdown-item" href="{{ route('usuario.logout') }}">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div id="conteudo">
            @yield('conteudo')
        </div>
        <div id="footer">
            copyright @ WEBII 2021 MARCOS
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>