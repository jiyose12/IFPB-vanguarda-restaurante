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

<style>
    .categoria button {
        margin: 0 25px 0 25px;
    }
    .menu-table td{
        text-align: center;
    }

    .row{
      background: #fff;
      padding: 1px;
      text-align: center;
      
    }

    .col-sm-12{
      padding: 20px;
      background-color: #FAFAFA;
      width: 100%;      
    }

    .responsive {
      width: 250px;
      height: auto;
    }

</style>
<div class="row">    
  @foreach ($itens as $p)
  <div class="col-sm-12 col-md-3">
      <div class="thumbnail">       
           <a href="/itens/mostraritens/{{$p->id}}"> <img class="responsive" src="/storage/img_itens/{{$p->img_itens}}" alt="Imagem"></a>
            </div>
            <p>{{$p->nome}}  R${{$p->preco_bruto}}</p>
                <form action="/cart/add/{{$p->id}}" method="get" onsubmit="return confirm('Tem certeza que deseja adicionar {{addslashes($p->nome)}}?')">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <button class="btn btn-primary">
                        <span class="fa-stack">
                        <i class="fa fa-shopping-cart fa-stack-2x"></i>
                    </button>
            </form>
    </div>
   @endforeach
  </div>
@endif
@stop