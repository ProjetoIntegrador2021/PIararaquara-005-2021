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
   <form class="form-horizontal" id="formEditarUser" action="{{route('editar.update', $users->id)}}" method="POST">
     @method('PUT')      
     @csrf

     <div class="card">
      <div class="card-header">
        <h3 class="card-title">Usuário</h3>
      </div>
      
      <div class="card-body">

       <table class="table table-hover">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Nível</th>
            <th>Opções</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label for="name" id="labelname" disabled>{{ $users->name }}</label></td>
            <td><label for="email"  id="labelemail"  disabled>{{ $users->email }}</label></td>
            <td>
              <select class="form-control" id="nivel" name="nivel">
                <option value="{{$users->nivel}}">
                  @if($users->nivel == 1)
                  Administrador
                  @else
                  <!-- @if($users->nivel == 2) -->
                  Normal
                  <!-- @endif -->
                  @endif
                </option>    
                <option value="@if($users->nivel == 1)
                  2
                  @else
                  @if($users->nivel == 2)
                  1
                  @endif
                  @endif">@if($users->nivel == 1)
                  Normal
                  @else
                  @if($users->nivel == 2)
                  Administrador
                  @endif
                @endif</option>
              </select> 
            </td>
            <td> 
              <button type="submit" id="btnSalvarNome" class="btn btn-primary btn-sm">
                Salvar
              </button>
              <a class="btn btn-sm btn-secondary" href="{{route('usuarios')}}">Cancelar</a>
            </td>
          </tr>
        </tbody>
      </table> 
</div>
</div>





















    </form>
</section>
  </div>



  @endsection