<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes|Cadastro</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form action="store" method="POST">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome">

        <p><label for="">Sexo:</label>
        <input type="text" name="sexo" id="sexo">

        <p><label for="">Endereço:</label>
        <input type="text" name="endereco" id="endereco">

        <p><label for="">Debito:</label>
        <input type="text" name="debito" id="debito">
        
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>