<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS local -->
    <link rel="stylesheet" href="./css/flexbox.css">
    <title>Socape </title>
</head>

<body>
  <header>
    <h1>Socape</h1>
  </header>

  <section>
    <article>
      <td>Clientes</td>
      <td>Fornecedores</td>
      <td>Produtos</td>
      <td>Entrada</td>
      <td>Vendas</td>
    </article>
    <article id="conteudo">
      <h1>Página inicial de vendas</h1>
      @yield('conteudo')
    </article>

    <article id="catalogo">
      @yield('catalogo')
    </article>

    <article id="footer">
      copyright @ WEBII 2021
    </article>
  </section>
</body>
</html>
