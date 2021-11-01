<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores|Cadastro</title>
</head>
<body>
    <h1>Cadastrar Fornecedor</h1>
    <form action="{{route('fornecedores.store')}}" method="post">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome">

        <p><label for="">CNPJ:</label>
        <input type="text" name="cnpj" id="cnpj">

        <p><label for="">Endereço:</label>
        <input type="text" name="endereco" id="endereco">
        
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>