@extends('layouts.master') 
<title>Usuários</title>
@section('content')
@if(Auth::user()->nivel == 1)

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
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="card" id="LarguraUsuarios">
      <div class="card-header">
        <h3 class="card-title">Usuários</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body" id="DivUsuarios">

        <table id="TabelaUsuarios" class="table table-bordered table-striped" >
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Nível</th>
              <th>Opções</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                @if($user->nivel == 1)
                Administrador
                @else
                @if($user->nivel == 2)
                Normal
                @endif
                @endif
              </td>
              <!-- <td>{{ $user->nivel }}</td> -->
              <td><a id="btnEditNome" name="btnEditNome" href="{{route('editar.edit', $user->id)}}">Editar</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
    <a class="btn btn-primary" href="{{route('register')}}">Adicionar Usuário</a>
  </section>
   

</div>
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<script type="text/javascript">
    //Portugues
    $('#TabelaUsuarios').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,

      "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ usuário",
        "sZeroRecords":   "Nenhum dado encontrado",
        "sEmptyTable":    "Nenhum dado encontrado",
        "sInfo":          "Mostrando usuários de _START_ a _END_ de um total de _TOTAL_ usuários",
        "sInfoEmpty":     "Mostrando usuários de 0 a 0 de um total de 0 usuários",
        "sInfoFiltered":  "(filtrado de um total de _MAX_ usuário)",
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

@else
@endif
  @endsection