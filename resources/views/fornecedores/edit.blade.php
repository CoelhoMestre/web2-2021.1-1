<h1>Editar Fornecedor</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <form action="{{route('fornecedores.update', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome Fornecedor</label>
        <input type="text" name="nome" id="nome" value="{{$fornecedor->nome}}">
        <p><label for="">CNPJ do Fornecedor</label>
        <input type="text" name="cnpj" id="cnpj" value="{{$fornecedor->cnpj}}">
        <p><label for="">Endereço do Fornecedor</label>
        <input type="text" name="endereco" id="endereco" value="{{$fornecedor->endereco}}">
        
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>