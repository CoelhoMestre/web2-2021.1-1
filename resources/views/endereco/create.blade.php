<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereço|Cadastro</title>
</head>
<body>
    <h1>Cadastrar Endereço</h1>
    <form action="{{route('enderecos.store')}}" method="post">
        @csrf
        <label for="">Logradouro:</label>
        <input type="text" name="logradouro" id="logradouro">

        <p><label for="">Bairro:</label>
        <input type="text" name="bairro" id="bairro">

        <p><label for="">Cidade:</label>
        <input type="text" name="cidade" id="cidade">

        <p><label for="">Uf:</label>
        <input type="text" name="uf" id="uf">

        <p><label for="">Cliente_id:</label>
        <input type="text" name="cliente_id" id="cliente_id">
        
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>



        