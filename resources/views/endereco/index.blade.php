<h1>Clientes Cadastrados: </h1>
@foreach ($clientes as $cliente)

<ul>
    
    <li>Logradouro: {{$endereco->logradouro}};</li>
    <li>Bairro: {{$endereco->bairro}};</li>
    <li>Cidade: {{$endereco->cidade}};</li>
    <li>Uf: {{$endereco->uf}};</li>
    <li>Cliente_id: {{$endereco->cliente_id}};</li>
    <a href="{{route('endereco.edit', [$endereco->id])}}">Editar</a>
    <form action="{{route('enderecos.destroy', ['id' => $enderecos->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach

