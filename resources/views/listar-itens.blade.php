@extends('principal')

@section('conteudo')

 @if(empty($itens))
  <div class="alert alert-danger">
    Você não tem nenhum produto cadastrado.
  </div>

 @else
  <h1>Listagem de itens</h1>
  <table class="table table-striped table-bordered table-hover">
    @foreach ($itens as $p)
    <tr class="{{$p->quantidade<=1 ? 'text-danger' : '' }}">
      <td> {{$p->nome}} </td>
      <td> {{$p->preco_bruto}} </td>
      <td> {{$p->quantidade}} </td>
      <td> 
        <a href="/itens/mostraritens/{{$p->id}}">
          <span class="fa fa-search"></span>
        </a>
      </td>
    </tr>
    @endforeach
  </table>
 @endif

 <h4>
  <span class="alert alert-danger float-right">
    Um ou menos itens no estoque
  </span>
 </h4>

 @if(old('nome'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong> 
        O produto {{ old('nome') }} foi adicionado.
  </div>
@endif

@stop