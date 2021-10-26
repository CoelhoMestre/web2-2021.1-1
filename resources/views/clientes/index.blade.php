<h1>Clientes Cadastrados: </h1>
@foreach ($clientes as $cliente)

<ul>
    
    <li>Nome: {{$cliente->nome}};</li>
    <li>Sexo: {{$cliente->sexo}};</li>
    <li>Endereço: {{$cliente->endereco}};</li>
    <li>Debito: {{$cliente->debito}};</li>
    <a href="edit/{{$cliente->id}}">Editar</a>
    <form action="../clientes/{{$cliente->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach