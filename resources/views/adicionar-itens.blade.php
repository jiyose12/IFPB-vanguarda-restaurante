@extends('principal')

@section('conteudo')

<h1>Novo produto</h1>
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="/itens/adiciona" method="post">

<input type="hidden" 
    name="_token" value="{{{ csrf_token() }}}" />

  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control"/>
  </div>
  <div class="form-group">
    <label>Categoria</label>
    <input name="categoria" class="form-control"/>
  </div>
  <!-- <div class="form-group">
    <label>Descricao</label>
    <input name="descricao" class="form-control"/>
  </div> -->
  <div class="form-group">
    <label>Valor</label>
    <input name="preco_bruto" class="form-control"/>
  </div>
  <div class="form-group">
    <label>Quantidade</label>
    <input type="number" name="quantidade" class="form-control"/>
  </div>
  <button type="submit" 
    class="btn btn-primary btn-block">Submit</button>
</form>

@stop