@extends('layouts.master') 
<title>Equipamentos</title>
@section('content')
<!-- <div class="form-group">
    <label for="localEquipamento" class="control-label">Selecione o local onde o equipamento está localizado:</label>
            <select class="form-control form-control-sm" name="local_id" id="selectLocal">
            @foreach(App\Local::all() as $local)
				<option value="{{$local->id}}">{{$local->nome}}</option>
			@endforeach  
            </select>
          </div> -->
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

            <!-- Main content -->
            <section class="content">
              
              <div class="card">
               <div class="card-header">
                 <h3 class="card-title">Equipamentos</h3>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                 <table id="TabelaEquipamento" class="table table-bordered table-striped">
                   <thead>
                    <tr>
                     <th>id</th>
                     <th>Local</th>
                     <th>Latitude</th>
                     <th>Longitude</th>
                     <th>Foto</th>
                     @if(Auth::user()->nivel == "1")
                    <th>Opções</th>
                    @endif
                   </tr>
                 </thead>
                 <tbody>
                  @forelse($equipamentos as $equi)
                  <tr>
                    <td>{{$equi->id}}</td>
                    <td>{{$equi->local->nome}}</td>			
                    <td>{{$equi->latitude}}</td>
                    <td>{{$equi->longitude}}</td>
                    <td>
                      @if(isset($equi->foto))               
                      <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$equi->foto}}">
                      @endif
                    </td>
                    @if(Auth::user()->nivel == "1")
                    <td>
                     <a class="btn btn-sm btn-primary" href="{{route('equipamentos.edit', $equi->id)}}" data-toggle="modal" data-target="#editarEquiModal-{{$equi->id}}">Editar</a>
                     <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#apagarEquiModal-{{$equi->id}}">Apagar</button>
                     @include('modais.apagarEqui')
                   </td>
                   @endif
                 </tr>
                 @include('modais.editarEqui')
                 @empty
                 <td colspan="10">Nenhum dado encontrado</td>
                 @endforelse
               </tbody>
             </table>
           </div>
           <!-- /.card-body -->



           
</div>
@if(Auth::user()->nivel == "1")
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#novoEquiModal">Adicionar Equipamento</button>
     @include('modais.novoEqui')
     
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#novoLocalModal">Adicionar Local</button>
@include('modais.novoLocal')
 -->
@else
@endif
</section>


</div>



<script type="text/javascript">
    //Portugues
    $('#TabelaEquipamento').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,

      "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ equipamentos",
        "sZeroRecords":   "Nenhum dado encontrado",
        "sEmptyTable":    "Nenhum dado encontrado",
        "sInfo":          "Mostrando equipamentos de _START_ a _END_ de um total de _TOTAL_ equipamentos",
        "sInfoEmpty":     "Mostrando equipamentos de 0 a 0 de um total de 0 equipamentos",
        "sInfoFiltered":  "(filtrado de um total de _MAX_ equipamentos)",
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

