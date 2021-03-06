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
<form action="/itens/adiciona" method="post" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control" />
  </div>
  <div class="form-group">
    <label>Categoria</label>
    <input name="categoria" class="form-control" />
  </div>
  <!-- <div class="form-group">
    <label>Descricao</label>
    <input name="descricao" class="form-control"/>
  </div> -->
  <div class="form-group">
    <label>Valor</label>
    <input name="preco_bruto" class="form-control" />
  </div>
  <div class="form-group">
    <label>Quantidade</label>
    <input type="number" name="quantidade" class="form-control" />
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="img_itens" id="input_img_itens">
    <label class="custom-file-label" for="input_img_itens">Escolha o arquivo</label>
  </div>
</div>
  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>

@stop