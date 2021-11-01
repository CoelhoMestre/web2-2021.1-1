<h1>Entradas Cadastradas: </h1>
@foreach ($entradas as $entrada)

<ul>
    
    <li>Idfornecedor: {{$fornecedor->id}};</li>
    <li>Valor: {{$entrada->valortotal}};</li>
    <li>Data: {{$entrada->datacompra}};</li>
    <a href="{{route('entrada.edit', [$entrada->id])}}">Editar</a>
    <form action="{{route('entradas.destroy', ['id' => $entrada->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach
