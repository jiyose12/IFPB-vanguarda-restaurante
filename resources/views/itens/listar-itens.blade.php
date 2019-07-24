@extends('principal')

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">
  {{ $mensagem }}
</div>
@endif

@if(empty($itens))
<div class="alert alert-danger">
  Você não tem nenhum produto cadastrado.
</div>
@else
<h1>Listagem de itens</h1>
<table id="exemplo"class="table table-striped table-bordered table-hover" style="width:100%">

<thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Preço Bruto</th>
                <th>Quantidade</th>
                <th>Detalhes</th>
                <th>Deletar Produto</th> 
            </tr>
        </thead>

<!-- <div id="example_filter" class="dataTables_filter">
  <label>Pesquisar: 
  <input type="search" class="form-control input-sm" placeholder aria-controls="exemplo" style="width:100%">
  </label>
</div> -->
  @foreach ($itens as $p)
  <tr class="{{$p->quantidade<=1 ? 'text-danger' : '' }}">
    <td><img style="width: 100px" src="/storage/img_itens/{{$p->img_itens}}" alt=""></td>
    <td> {{$p->nome}} </td>
    <td> R$ {{$p->preco_bruto}} </td>
    <td> {{$p->quantidade}} </td>
    <td>
      <a href="/itens/mostraritens/{{$p->id}}">
        <span class="fa fa-search"></span>
      </a>
    </td>
    <td>
      <form method="post" action="/itens/remove/{{$p->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{addslashes($p->nome)}}?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">
          <span class="fa fa-trash"></span>
        </button>
      </form>
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

<!-- @if(old('nome'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong> 
        O produto {{ old('nome') }} foi adicionado.
  </div>
@endif -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript"> 
$(document).ready(function() {
    $('#exemplo').DataTable({
      "language": {
            "lengthMenu": "Mostrar _MENU_ itens por página",
            "zeroRecords": "Não encontrado - desculpe",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Vazio",
            "search": "Procurar",
            "infoFiltered": "(Filtrando de _MAX_ totais)"
        }
    });
} );
// $(document).ready(function() {
//     var table = $('#exemplo').DataTable();
//     new $.fn.dataTable.FixedHeader( table, {
//         alwaysCloneTop: true
//     });
// } );
</script>
@stop
