<h1>Fornecedores Cadastrados: </h1>
@foreach ($fornecedores as $fornecedor)

<ul>
    
    <li>Nome: {{$fornecedor->nome}};</li>
    <li>CNPJ: {{$fornecedor->cnpj}};</li>
    <li>Endereço: {{$fornecedor->endereco}};</li>
    <a href="edit/{{$fornecedor->id}}">Editar</a>
    <form action="../fornecedores/{{$fornecedor->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach