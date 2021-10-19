@foreach ($fornecedores as $fornecedor)
<ul>
    <li>Nome: {{$fornecedor->nome}};</li>
    <li>CNPJ: {{$fornecedor->cnpj}};</li>
    <li>Endereço: {{$fornecedor->endereco}};</li>
    
</ul>
@endforeach