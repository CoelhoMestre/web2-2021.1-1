<h1>ItensVendas Cadastradas: </h1>
@foreach ($itensvendas as $itensvenda)

<ul>
    
    <li>IdVenda: {{$venda->id}};</li>
    <li>Quantidade: {{$itensvenda->quantidade}};</li>
    <a href="{{route('itensvenda.edit', [$itensvenda->id])}}">Editar</a>
    <form action="{{route('itensvendas.destroy', ['id' => $itensvenda->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach