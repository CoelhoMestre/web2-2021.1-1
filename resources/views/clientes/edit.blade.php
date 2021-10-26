<h1>Editar Cliente</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <form action="../update/{{$cliente->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome do Cliente</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
        <p><label for="">Sexo do Cliente</label>
        <input type="text" name="sexo" id="sexo" value="{{$cliente->sexo}}">
        <p><label for="">Endereço do Cliente</label>
        <input type="text" name="endereco" id="endereco" value="{{$cliente->endereco}}">
        <p><label for="">Debito do Cliente</label>
        <input type="text" name="debito" id="debito" value="{{$cliente->debito}}">
        
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>