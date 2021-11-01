<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas|Cadastro</title>
</head>
<body>
    <h1>Cadastrar Entrada</h1>
    <form action="{{route('entradas.store')}}" method="post">
        @csrf
        <label for="">Idfornecedor:</label>
        <input type="text" name="idfornecedor" id="idfornecedor">

        <p><label for="">Valor total:</label>
        <input type="text" name="valortotal" id="valortotal">

        <p><label for="">Data:</label>
        <input type="text" name="datacompra" id="datacompra">
        
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>


