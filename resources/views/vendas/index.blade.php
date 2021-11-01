<h1>Vendas Cadastradas: </h1>
@foreach ($vendas as $venda)

<ul>
    
    <li>IdCliente: {{$cliente->id}};</li>
    <li>Valor: {{$venda->valortotal}};</li>
    <li>Data: {{$venda->datavenda}};</li>
    <a href="{{route('vendas.edit', [$vendas->id])}}">Editar</a>
    <form action="{{route('vendas.destroy', ['id' => $venda->id])}}" method="post">

        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach