@extends('layouts.master') 
<title>Produtos</title>
@section('content')




<!-- DataTables -->
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
      </div><!-- /.container-fluid
    </section>

    <!-- Main content -->
    <section class="content">
      
      

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Produtos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
         
          <table id="TabelaPecas" class="table table-bordered table-striped" >

            <thead>
              <tr>
               <!--<th>id</th>-->
               <th>Nome</th>
               <th>Categoria</th>
               <th>Quantidade</th>
               <!-- <th>Patrimônio</th> -->
               <!--<th>Marca</th>-->
               <th>Condição</th>
               <th>Descrição</th>
               <!-- <th>Foto</th> -->
               <th>Opções</th>
             </tr>
           </thead>
           <tbody>
            @forelse($pecas as $peca)
            <tr>
              <!--<td>{{$peca->id}}</td>-->
              <td>{{$peca->nome}}</td>
              <td>{{$peca->categoria->nome}}</td>
              <td>{{$peca->nserie}}</td>
              <!-- <td>{{$peca->patrimonio}}</td> -->
              <td>{{$peca->marca}}</td>
              <td>{{$peca->estado}}</td>
              <td>{{$peca->descricao}}</td>
             <!--  <td><div class="col-3 col-sm-6">{{$peca->descricao}}</div><br></td> -->
           <!--  <td>
                @if(isset($peca->foto))               
                <img class="card-img-top figure-img img-fluid rounded" src="{{asset('storage') . '/'  . $peca->foto}}">
                     <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$peca->foto}}">
                @endif
              </td> -->
              <td>
                @if(Auth::user()->nivel == "1")
                <a class="btn btn-sm btn-success" href="{{route('pecas.show', $peca->id)}}">Visualizar</a>
                <a class="btn btn-sm btn-primary" href="{{route('pecas.edit', $peca->id)}}" data-toggle="modal" data-target="#editarPecaModal-{{$peca->id}}">Editar</a>
              <!--   @if($peca->trashed())
                <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#restaurarPecaModal-{{$peca->id}}">Restaurar</a>
                <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#apagarPecaPermanModal-{{$peca->id}}">Apagar</a>
                @else -->
                <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#apagarPecaModal-{{$peca->id}}">Apagar</a>
                <!-- @endif -->
                @else
                
                <a class="btn btn-sm btn-success" href="{{route('pecas.show', $peca->id)}}">Visualizar</a>
                
                
                @endif
              </td>
            </tr>
            @include('modais.editarPeca')
            @include('modais.apagarPeca')
           <!--  @include('modais.restaurarPeca')
        @include('modais.apagarPecaPerman') -->
            @empty
            <td colspan="10">Nenhum dado encontrado</td>
            @endforelse
          </tbody>
          
        </table>
      </div>
      

      <!-- /.card-body -->
      
      <!-- /.card -->
      
    </section>
    <!-- /.content -->
    @if(Auth::user()->nivel == "1")

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#novaPecaModal">Adicionar Peça</button>
    
    @include('modais.novaPeca')
    <a class="btn btn-primary" href="{{route('pecas-apagadas.index')}}">Peças Apagadas</a>

   <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#novaCatModal">Adicionar Categoria</button> -->

 <!-- aqui vai o include da modal NovaCategoria -->


    @else
    
    @endif
  </div>

  
  <script type="text/javascript">
    //Portugues
    $('#TabelaPecas').DataTable({
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
