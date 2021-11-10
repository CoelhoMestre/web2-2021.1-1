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
            <h1>SISTEMA DE VENDAS</h1>
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
                </ul>
            </nav>
        </div>
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
