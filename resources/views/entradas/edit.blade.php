<h1>Editar Entrada</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR ENTRADA</title>
</head>
<body>
    <form action="../update/{{$entrada->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Id Fornecedor</label>
        <input type="text" name="fornecedor" id="fornecedor" value="{{$fornecedor->id}}">
        <p><label for="">Valor Total</label>
        <input type="text" name="valortotal" id="valortotal" value="{{$entrada->valortotal}}">
        <p><label for="">Data</label>
        <input type="text" name="datacompra" id="datacompra" value="{{$entrada->datacompra}}">
        
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>