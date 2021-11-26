@extends('layouts.master') 
<title>Categoria</title>
@section('content')
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables/dataTables.bootstrap4.js')}}"></script>




<div class="content-wrapper">
  <!-- Content Header (Page header) -->
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
    </div><!-- /.container-fluid -->
  </section>






  <section class="content">
    
    

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Categorias</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
       
       <table class="table table-bordered table-striped"  id="tabelaCategorias">
        <thead>
          <tr>
            <th>id</th>
            <th>Nome</th>
            @if(Auth::user()->nivel == "1")
            <th>Opções</th>
            @endif
          </tr>
        </thead>
        <tbody>
          @forelse($categorias as $cat)
          <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->nome}}</td>
            <td>
              @if(Auth::user()->nivel == "1")
              <a class="btn btn-sm btn-primary" href="{{route('categorias.edit', $cat->id)}}" data-toggle="modal" data-target="#editarCatModal-{{$cat->id}}">Editar</a>
              <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#apagarCatModal-{{$cat->id}}">Apagar</a>
              @else
              
              @endif
            </td>
          </tr>
          @include('modais.editarCat')
          @include('modais.apagarCat')
          @empty
          <td colspan="10">Nenhum dado encontrado</td>
          @endforelse
        </tbody>
        
      </table>
    </div>
    <!--aparece botão pra escolher a página-->
  </div>

  @if(Auth::user()->nivel == "1")

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#novaCatModal">Adicionar Categoria</button>

@include('modais.novaCategoria')

  
</section>
</div>




@else

@endif

<script type="text/javascript">
    //Portugues
    $('#tabelaCategorias').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,

      "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ categorias",
        "sZeroRecords":   "Nenhum dado encontrado",
        "sEmptyTable":    "Nenhum dado encontrado",
        "sInfo":          "Mostrando categorias de _START_ a _END_ de um total de _TOTAL_ categorias",
        "sInfoEmpty":     "Mostrando categorias de 0 a 0 de um total de 0 categorias",
        "sInfoFiltered":  "(filtrado de um total de _MAX_ categorias)",
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
