<h1>ItensEntradas Cadastradas: </h1>
@foreach ($itensentradas as $itensentrada)

<ul>
    
    <li>Identrada: {{$entrada->id}};</li>
    <li>Quantidade: {{$itensentrada->quantidade}};</li>
    <a href="{{route('itensentrada.edit', [$itensentrada->id])}}">Editar</a>
    <form action="{{route('itensentradas.destroy', ['id' => $itensentrada->id])}}" method="post">

        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach
