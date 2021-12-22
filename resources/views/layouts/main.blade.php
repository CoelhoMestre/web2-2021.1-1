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
        
        </div>
        <div id="nav">
            <nav class="navbar navbar-expand-sm navbar-dark bg-black">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('produtos.index')}}">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('entradas.index')}}">Entradas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('vendas.index')}}">Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('fornecedores.index')}}">Fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('clientes.index')}}">Contratos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('clientes.index')}}">Orçamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('clientes.index')}}">Relatórios</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Mais</a>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="">Marca</a></li>
                            <li><a class="dropdown-item" href="">Categoria</a></li>
                            <li><a class="dropdown-item" href="">Gerente</a></li>
                            <li><a class="dropdown-item" href="">Funcionários</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Minha Conta</a>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="">Perfil</a></li>
                            <li><a class="dropdown-item" href="">Sair</a></li>
                        </ul>
                    </li>
                </ul>      
        
            </nav>
        </div>
        
        
                    </nav>
        <div id="conteudo">
            @yield('conteudo')
        </div>
        
        <div id="footer">
            
        <img src="{{ asset('imagens/teste.png') }}">
        </div>
       
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
