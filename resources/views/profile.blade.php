@extends('layouts.master')

@section('content')
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
              <h3 class="card-title">Perfil</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <table id="TableUser" class="table table-bordered table-striped" >
               <tbody>
                <!-- EDITAR SEPARADO PARA CADA -->
                <form  action="{{route('profile.update.name')}}" method="POST">
                  @method('PUT')
                  @csrf
                  <tr>
                    <th>Nome:</th>
                    <td for="name" id="labelname">{{ Auth::user()->name }}</td>
                      <td id="name" hidden>
                      <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{ Auth::user()->name }}"  required autocomplete="name" autofocus  placeholder="Novo nome">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </td>
                    <td><a id="btnEditNome" name="btnEditNome" href="#"  onclick="habilitarNome()">Editar</a>                  
                      <button type="submit" id="btnSalvarNome" class="btn btn-primary btn-sm" hidden>
                        Salvar
                      </button>
                      <button type="reset" id="btnCancelarn" onclick="CancelarNome()" class="btn btn-secondary btn-sm" hidden>
                        Cancelar
                      </button>                       
                    </td>
                  </tr>
                  @if ($errors->has('name') )
                  <script>
                    $(function() {
                      habilitarNome();
                    });
                  </script>
                  @endif
                </form>
                <div role="document">
                  <form  action="{{route('profile.update.email', auth()->user()->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <tr>
                      <th>Email:</th>
                      <td for="email"  id="labelemail">{{ Auth::user()->email }}</td>
                      <td id="email" hidden><input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ Auth::user()->email }}" autocomplete="email" >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror                  
                      </td>
                      <td><a href="#" id="btnEditEmail" onclick="habilitarEmail()">Editar</a>

                        <button type="submit" id="btnSalvarEmail" class="btn btn-primary btn-sm" hidden>
                          Salvar
                        </button>
                        <button type="reset" id="btnCancelare" onclick="CancelarEmail()" class="btn btn-secondary btn-sm" hidden>
                          Cancelar
                        </button>                       
                      </td>      
                    </tr>  
                    @if ($errors->has('email') )
                    <script>
                      $(function() {
                        habilitarEmail();
                      });
                    </script>
                    @endif
                  </form> 
                </div>
                <form action="{{route('profile.update.senha')}}" method="POST">
                  @method('PUT')
                  @csrf
                  <tr>
                    <th id="senha">Senha:</th>
                    <th id="nova-senhath" hidden><label for="password">Nova senha:</label>
                      <br>
                      <br>
                      <br>
                      <label class="col-form-label" for="password-confirm">Confirmar senha:</label>
                      
                    </th>
                    
                    <td id="tdAlterar">Alterar senha</td>
                    <!-- <th id="tdAlterar">Alterar senha</th> -->
                    <td id="nova-senha" class="col-xs" hidden> 
                     <!--  <div class="col-md-7"> -->
                      <input id="password" type="password" class=" form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      @if($errors->has('password'))
                      <br>
                      @else
                      <br>
                      <br>
                      @endif
                      <input id="password-confirm" type="password" class=" form-control" name="password_confirmation" required autocomplete="new-password" fixed>
                      <!-- </div> -->
                    </td>

                    <td><a href="#" id="btnEditarSenha" onclick="habilitarSenha()">Editar</a>
                      <br>
                      <br>
                      <button type="submit" id="btnSalvarSenha" class="btn btn-primary btn-sm" hidden>
                        Salvar
                      </button>
                      <button type="reset" id="btnCancelars" onclick="CancelarSenha()" class="btn btn-secondary btn-sm" hidden>
                        Cancelar
                      </button>
                    </td> 
                    
                    
                  </tr> 
                  <tr>


                  </tr>
                  
                  @if ($errors->has('password') )
                  <script>
                    $(function() {
                      habilitarSenha();
                    });
                  </script>
                  @endif
                </form>   
              </tbody>
            </table>



            <script>
              $('#TabelaUser').DataTable({
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

             function CancelarNome(){
               $cancelarn= ['btnCancelarn'];
               if ($cancelarn){
                $("#btnEditNome").show();
                document.getElementById('labelname').removeAttribute("hidden", "");
                document.getElementById('name').setAttribute("hidden", "");
                document.getElementById('btnSalvarNome').setAttribute("hidden", "");
                document.getElementById('btnCancelarn').setAttribute("hidden", "");  
              } 
            }
            

            function CancelarEmail(){
              $cancelare= ['btnCancelare'];
              if ($cancelare){
                $("#btnEditEmail").show();
                document.getElementById('labelemail').removeAttribute("hidden", "");
                document.getElementById('email').setAttribute("hidden", "");
                document.getElementById('btnSalvarEmail').setAttribute("hidden", "");
                document.getElementById('btnCancelare').setAttribute("hidden", "");
                
              }
            }

            function CancelarSenha(){
              $cancelars= ['btnCancelars'];
              if ($cancelars){
                $("#btnEditarSenha").show();
                document.getElementById('tdAlterar').removeAttribute("hidden", "");
                document.getElementById('senha').removeAttribute("hidden", "");
                document.getElementById('nova-senhath').setAttribute("hidden", "");
                
                document.getElementById('nova-senha').setAttribute("hidden", "");
                
                document.getElementById('btnSalvarSenha').setAttribute("hidden", "");
                document.getElementById('btnCancelars').setAttribute("hidden", "");
                
              }
            }

            function habilitarNome(){
              $editnome= ['btnEditNome'];
              
              if ($editnome){
                CancelarEmail();
                CancelarSenha();
                $("#btnEditNome").hide();
                document.getElementById('labelname').setAttribute("hidden", "");
                document.getElementById('name').removeAttribute("hidden");
                document.getElementById('btnSalvarNome').removeAttribute("hidden");
                document.getElementById('btnCancelarn').removeAttribute("hidden");
              } 
              
              
            }

            function habilitarEmail(){
              $editemail= ['btnEditEmail'];
              if ($editemail){
                CancelarNome();
                CancelarSenha();
                $("#btnEditEmail").hide();
                document.getElementById('labelemail').setAttribute("hidden", "");
                document.getElementById('email').removeAttribute("hidden");
                document.getElementById('btnSalvarEmail').removeAttribute("hidden");
                document.getElementById('btnCancelare').removeAttribute("hidden");
              }
            }

            function habilitarSenha(){
              $editsenha= ['btnEditarSenha'];
              if ($editsenha){
                CancelarNome();
                CancelarEmail();
                $("#btnEditarSenha").hide();
                document.getElementById('tdAlterar').setAttribute("hidden", "");
                document.getElementById('senha').setAttribute("hidden", "");
                document.getElementById('nova-senhath').removeAttribute("hidden");
                
                document.getElementById('nova-senha').removeAttribute("hidden");
                
                document.getElementById('btnSalvarSenha').removeAttribute("hidden");
                document.getElementById('btnCancelars').removeAttribute("hidden");
              }
            }
          </script>
          @endsection