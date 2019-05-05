@extends('principal')

@section('conteudo')

<h1>Detalhes de itens: {{$p->nome}} </h1>

<ul>
  <li>
    <b>Valor:</b> R$ {{$p->preco_bruto}} 
  </li>
  <li>
    <b>Quantidade em estoque:</b> {{$p->quantidade}}
  </li>
</ul>

@stop