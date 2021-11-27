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
          <h3 class="card-title">Locais</h3>
      </div>
      <div class="card-body">

        <table id="tabelaLocais" class="table table-bordered table-striped" >


            <thead>
                <tr>
                    <!--<th>id</th>-->
                    <th>Nome</th>
                    @if(Auth::user()->nivel == "1")
                    <th>Opções</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @forelse($locais as $local)
                <tr>
                    <!--<td>{{$local->id}}</td>-->
                    <td>{{$local->nome}}</td>

                    <td>
                        @if(Auth::user()->nivel == "1")
                        <a class="btn btn-sm btn-primary" href="{{route('locais.edit', $local->id)}}" data-toggle="modal" data-target="#editarLocalModal-{{$local->id}}">Editar</a>
                        <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#apagarLocalModal-{{$local->id}}">Apagar</a>
                        @else

                        @endif
                    </td>
                </tr>
                @include('modais.editarLocal')
                @include('modais.apagarLocal')
                @empty
                <td colspan="10">Nenhum dado encontrado</td>
                @endforelse
            </tbody>

        </table>



    </div>
    <div class="ml-auto">
      {{$locais->links()}}</div> <!--aparece botão pra escolher a página-->
  </div>



  @if(Auth::user()->nivel == "1")

 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#novoLocalModal">Adicionar Local</button>-->

  @include('modais.novoLocal')


  @else

  @endif

  <script type="text/javascript">
    //Portugues
    $('#tabelaLocais').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,

      "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ locais",
        "sZeroRecords":   "Nenhum dado encontrado",
        "sEmptyTable":    "Nenhum dado encontrado",
        "sInfo":          "Mostrando locais de _START_ a _END_ de um total de _TOTAL_ locais",
        "sInfoEmpty":     "Mostrando locais de 0 a 0 de um total de 0 locais",
        "sInfoFiltered":  "(filtrado de um total de _MAX_ locais)",
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