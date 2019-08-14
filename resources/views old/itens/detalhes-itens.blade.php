@extends('principal')

@section('conteudo')

<h1>Detalhes de itens: {{$item->nome}} </h1>

<ul>
  <li>
    <b>Valor:</b> R$ {{$item->preco_bruto}} 
  </li>
  <li>
    <b>Quantidade em estoque:</b> {{$item->quantidade}}
  </li>
</ul>

@stop