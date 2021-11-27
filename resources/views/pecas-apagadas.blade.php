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
          <h3 class="card-title">Produtos apagados</h3>
      </div>
      <div class="card-body">

        <table id="tabelaPecasA" class="table table-bordered table-striped" >

                <thead>
                    <tr>
                        <!--<th>id</th>-->
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Quantidade</th>
                        <!--<th>Patrimônio</th>-->
                        <!--<th>Marca</th>-->
                        <th>Condição</th>
                        <th>Descrição</th>
                        <th>Foto</th>
                        @if(Auth::user()->nivel == "1")
                        <th>Opções</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @forelse($pecas as $peca)
                    <tr>
                        <!--<td>{{$peca->id}}</td>-->
                        <td>{{$peca->nome}}</td>
                        <td>{{$peca->categoria->nome}}</td>
                        <td>{{$peca->nserie}}</td>
                        <!--<td>{{$peca->patrimonio}}</td>-->
                        <td>{{$peca->marca}}</td>
                        <td>{{$peca->estado}}</td>
                        <td>{{$peca->descricao}}</td>
                        <!-- <td><div class="col-7">{{$peca->descricao}}</div></td> -->
                        <td>
                            @if(isset($peca->foto))               
                            <!-- <img class="card-img-top figure-img img-fluid rounded" src="{{asset('storage') . '/'  . $peca->foto}}"> -->
                            <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$peca->foto}}">
                            @endif
                        </td>
                        <td>
                            @if(Auth::user()->nivel == "1")

                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#restaurarPecaModal-{{$peca->id}}">Restaurar</a>
                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#apagarPecaPermanModal-{{$peca->id}}">Apagar</a>

                            @else




                            @endif
                        </td>
                    </tr>
                    @include('modais.restaurarPeca')
                    @include('modais.apagarPecaPerman')
                    @empty
                    <td colspan="10">Nenhum dado encontrado</td>
                    @endforelse
                </tbody>

            </table>
        </div>
    </section>
    <!-- <div class="ml-auto"> -->
      <!-- </div> --> <!--aparece botão pra escolher a página-->
      <script type="text/javascript">
    //Portugues
    $('#tabelaPecasA').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,

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