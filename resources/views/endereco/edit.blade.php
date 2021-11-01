<h1>Editar Endereços</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <form action="{{route('enderecos.update', ['id' => $enderecos->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Logradouro:</label>
        <input type="text" name="logradouro" id="logradouro" value="{{$enderecos->debito}}">

        <p><label for="">Bairro:</label>
        <input type="text" name="bairro" id="bairro" value="{{$enderecos->debito}}">

        <p><label for="">Cidade:</label>
        <input type="text" name="cidade" id="cidade" value="{{$enderecos->debito}}">

        <p><label for="">Uf:</label>
        <input type="text" name="uf" id="uf" value="{{$enderecos->debito}}">

        <p><label for="">Cliente_id:</label>
        <input type="text" name="cliente_id" id="cliente_id" value="{{$enderecos->debito}}">
        
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>