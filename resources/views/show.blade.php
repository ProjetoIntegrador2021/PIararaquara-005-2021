@extends('layouts.master') 

@section('content')

<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables/dataTables.bootstrap4.js')}}"></script>


<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1></h1>
      </div>
      <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
      </div>
  </div>
</div>
</section>

<section class="content">

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Produtos</h3>
      </div>
      <div class="card-body">

        <table id="tabelaPecas-{{$pecas->id}}" class="table table-bordered table-striped" >







            <thead>
                <tr>
                <!--<th>id</th>-->
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Quantidade</th>
                    <!--<th>Patrimônio</th>-->
                   <!-- <th>Marca</th>-->
                    <th>Condição</th>
                    <th scope="col">Descrição</th>
                    <th>Foto</th>
                    <th>Criado</th>
                    <th>Atualizado</th>
                    <!-- @if($pecas->trashed()) -->
                    <th>Apagado</th>
                    <!-- @else -->
                    <!-- @endif -->
                    <!-- <th>Restaurado</th> -->
                    <th>Usuario</th>
                </tr>
            </thead>
            <tbody>


                <tr>
                    <!--<td>{{$pecas->id}}</td>-->
                    <td>{{$pecas->nome}}</td>
                    <td>{{$pecas->categoria->nome}}</td>
                    <td>{{$pecas->nserie}}</td>
                    <!--<td>{{$pecas->patrimonio}}</td>-->
                    <td>{{$pecas->marca}}</td>
                    <td>{{$pecas->estado}}</td>
                    <td>{{$pecas->descricao}}</td>
                    <td>
                        @if(isset($pecas->foto))               
                        <!-- <img class="card-img-top figure-img img-fluid rounded" src="{{asset('storage') . '/' . $pecas->foto}}"> -->
                        <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$pecas->foto}}">
                        @endif
                    </td>
                    <td>{{$pecas->created_at}}</td>
                    <td>{{$pecas->updated_at}}</td>
                    <!-- @if($pecas->trashed()) -->
                    <!-- <td>{{$pecas->deleted_at}}</td> -->
                    <!-- @else -->
                    <!-- @endif -->
                    <!-- <td>{{$pecas->updated_at}}</td> -->
                    <td>{{$pecas->user_id}}-{{$pecas->user->name}}</td>

                </tr>
            </tbody>
        </table>
    </div>
</section>
<br>
<a class="btn btn-primary" href="{{route('pecas.index')}}">Ver todas as peças</a>

<script type="text/javascript">
    //Portugues
    $('#tabelaPecas-{{$pecas->id}}').DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,

      "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ peças",
        "sZeroRecords":   "Nenhum dado encontrado",
        "sEmptyTable":    "Nenhum dado encontrado",
        "sInfo":          "Mostrando peças de _START_ a _END_ de um total de _TOTAL_ peças",
        "sInfoEmpty":     "Mostrando peças de 0 a 0 de um total de 0 peças",
        "sInfoFiltered":  "(filtrado de um total de _MAX_ peças)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
          "sFirst":    "Proximo",
          "sLast":    "Último",
          "sNext":    "Proximo",
          "sPrevious": "Anterior"
      },
      "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
  }
});
</script>


@endsection 