<h1>Fornecedores Cadastrados: </h1>
@foreach ($fornecedores as $fornecedor)

<ul>
    
    <li>Nome: {{$fornecedor->nome}};</li>
    <li>CNPJ: {{$fornecedor->cnpj}};</li>
    <li>Endereço: {{$fornecedor->endereco}};</li>
    <a href="{{route('fornecedores.edit', [$fornecedores->id])}}">Editar</a>
    <form action="{{route('fornecedores.destroy', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach