@extends('principal')

@section('conteudo')

<style>
    .categoria button {
        margin: 0 25px 0 25px;
    }
    .menu-table td{
        text-align: center;
    }

</style>
<section>
    <h1 class="text-center"><b>Menu do Restaurante</b></h1>
    <!-- Campo pesquisa -->
    <form method="get" action="/menu/findByName/">
        <div class="input-group">
            <input type="text" class="form-control" name="pesquisa" placeholder="Buscar">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</section>

</section>
<h3 class="text-center"><b>Escolha a Categoria</b></h3>
<!-- Botoes categorias -->
<div class="categoria d-flex justify-content-center">
    <form action="/menu/findByName/">
        <input type="hidden" name="pesquisa" value="Comida">
        <button type="submit" class="btn btn-primary btn-lg">COMIDAS</button>
    </form>
    <form action="/menu/findByName/">
        <input type="hidden" name="pesquisa" value="Bebida">
        <button type="submit" class="btn btn-primary btn-lg">BEBIDAS</button>
    </form>
</div>
</section>

<hr>
@if(empty($itens))
<div class="text-center">
<b>Sua Pesquisa Aparecerá Aqui.</b>
</div>
@else

<section class="menu-table">
<table class="table table-bordered table-hover">
<thead class="thead-light">
    <tr>
      <th scope="col"> <b>Nome</b> </th>
      <th scope="col"> <b>R$</b> </th>
      <th scope="col"><b>Detalhes</b></th>
      <th scope="col"><b>Adicionar</b></th>
      <th scope="col"><b>Remover</b></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($itens as $p)
  <tr>
    <td> {{$p->nome}} </td>
    <td> R$ {{$p->preco_bruto}} </td>
    <td>
      <a href="/itens/mostraritens/{{$p->id}}">
        <span class="fa fa-2x fa-search"></span>
      </a>
    </td>
    <td>
      <form method="post" action="/itens/teste/{{$p->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{addslashes($p->nome)}}?')">
        
        <button class="btn btn-primary">
        <span class="fa-stack">
    <i class="fa fa-shopping-cart fa-stack-2x"></i>
    <i class="fa fa-plus fa-stack-1x text-success"></i>
</span>
          <!-- <span class="fa fa-cart-plus "></span> -->
        </button>
      </form>
    </td>
    <td>
      <form method="post" action="/itens/teste/{{$p->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{addslashes($p->nome)}}?')">
        
        <button class="btn btn-danger">
        <span class="fa-stack">
    <i class="fa fa-shopping-cart fa-stack-2x"></i>
    <i class="fa fa-minus fa-stack-1x text-danger"></i>
</span>
          <!-- <span class="fa fa-cart-plus "></span> -->
        </button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
</section>
@endif
@stop