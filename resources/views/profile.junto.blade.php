<!-- <form  action="{{route('profile.update')}}" method="POST">
            @method('PUT')
            @csrf
          <table class="table table-hover col-md-7">
            <tbody> --> 
              <!-- EDITAR SEPARADO PARA CADA -->
              <!-- <div class="form-group row">
                <tr>
                <th>Nome</th>
                <td><label for="name" id="labelname" disabled>{{ Auth::user()->name }}</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}"  required autocomplete="name" autofocus hidden placeholder="Novo nome"> -->
                  <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                <!-- </td>
                <td><a id="btnEditNome" name="btnEditNome" href="#"  onclick="habilitarNome()">Editar</a>
                  <div class="form-group row">
                                <button type="submit" id="btnSalvarNome" class="btn btn-primary btn-sm" hidden>
                                    Salvar
                                </button>
                                <button type="reset" id="btnCancelarn" onclick="CancelarNome()" class="btn btn-secondary btn-sm" hidden>
                                    Cancelar
                                </button>
                        </div> 
                </td>
              </tr>
            </div>
            <div class="form-group row">
                    <tr>
                <th>Email</th>
                <td><label for="email"  id="labelemail"  disabled>{{ Auth::user()->email }}</label><input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" hidden>
                </td>
                <td><a href="#" id="btnEditEmail" onclick="habilitarEmail()">Editar</a>
                <div class="form-group row">
                                <button type="submit" id="btnSalvarEmail" class="btn btn-primary btn-sm" hidden>
                                    Salvar
                                </button>
                                <button type="reset" id="btnCancelare" onclick="CancelarEmail()" class="btn btn-secondary btn-sm" hidden>
                                    Cancelar
                                </button>
                        </div> 
                      </td>      
              </tr>       
            </div>
              
 </tbody>
                      </table>
</form> -->
<!-- <form action="{{route('profile.update')}}" method="POST">
                        @method('PUT')
                        @csrf
                        <table class="table table-hover">
                          <tbody>
                            <tr>
                <th>Senha:</th>
                <td id="alterar-senha"><a href="#" id="btnEditar" onclick="">Alterar senha</a></td> --> 
                <!-- <td><a href="#" id="btnEditar" class="btn btn-primary btn-sm" onclick="habilitar()">Editar</a></td> -->
                
             <!--  </tr>
                          </tbody> -->
                        <!-- </table> -->
                      <!-- </form> -->
<!-- <script> -->
  <!-- // CADA UM SEPARADO -->
      <!-- function CancelarNome(){
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

  
  function habilitarNome(){
  $editnome= ['btnEditNome'];
  
  if ($editnome){
    CancelarEmail();
    
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
    
    $("#btnEditEmail").hide();
    document.getElementById('labelemail').setAttribute("hidden", "");
    document.getElementById('email').removeAttribute("hidden");
    document.getElementById('btnSalvarEmail').removeAttribute("hidden");
    document.getElementById('btnCancelare').removeAttribute("hidden");
        }
      }

  
        
  
      
    
</script> -->


<!-- <form  action="{{route('profile.update')}}" method="POST">
            @method('PUT')
            @csrf
          <table class="table table-hover">
            <tbody> -->
               
              <!-- EDITAR TD JUNTO -->
                <!-- <tr> -->
                  <!-- <div class="form-group row"> -->
               <!--  <th>Nome:</th>
                <td><label for="name" id="labelname" disabled>{{ Auth::user()->name }}</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ Auth::user()->name }}"  required autocomplete="name" autofocus hidden placeholder="Novo nome">
                  @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </td> -->
                <!-- </div> -->
             <!--  </tr>
              <tr>
                      <div class="form-group row">
                <th>Email:</th>
                <td><label for="email"  id="labelemail"  disabled>{{ Auth::user()->email }}</label><input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" required autocomplete="email" hidden>
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </td></div>
                  
              </tr>       
                   
            
            </tbody>
        </table><td><a href="#" id="btnEditar" class="btn btn-primary btn-sm" onclick="habilitar()">Editar</a>
                      <button type="submit" id="btnSalvar" onclick="Salvar()" class="btn btn-primary btn-sm" hidden>
                                    Salvar
                      </button>
                      <button type="reset" id="btnCancelar" onclick="Cancelar()" class="btn btn-secondary btn-sm" hidden>
                                    Cancelar
                      </button></td>
                      
                      </form>
                      <form action="{{route('profile.update')}}" method="POST">
                        @method('PUT')
                        @csrf
                        <table class="table table-hover">
                          <tbody>
                            <tr>
                <th>Senha:</th>
                <td id="alterar-senha"><a href="#" id="btnEditar" onclick="">Alterar senha</a></td> -->
                <!-- <td><a href="#" id="btnEditar" class="btn btn-primary btn-sm" onclick="habilitar()">Editar</a></td> -->
     <!--            
              </tr>
                          </tbody>
                        </table>
                      </form>
         </div>
      </div>
    </div>
  </div>
</div>

@endsection
<script>
  // TODOS JUNTOS
    function habilitar(){
      $editar = ['btnEditar'];
      if($editar){
        document.getElementById('btnEditar').setAttribute("hidden", "");
        document.getElementById('btnSalvar').removeAttribute("hidden");
        document.getElementById('btnCancelar').removeAttribute("hidden");
        document.getElementById('labelname').setAttribute("hidden", "");
        document.getElementById('labelemail').setAttribute("hidden", "");
        document.getElementById('name').removeAttribute("hidden");
        document.getElementById('email').removeAttribute("hidden");
       
      }
    }

    function Salvar(){
      $salvar = ['btnSalvar'];
      if($salvar){
        document.getElementById('btnSalvar').setAttribute("hidden", "");
        document.getElementById('btnCancelar').setAttribute("hidden", "");
        document.getElementById('btnEditar').removeAttribute("hidden");
        document.getElementById('name').setAttribute("hidden", "");
        document.getElementById('email').setAttribute("hidden", "");
        document.getElementById('labelname').removeAttribute("hidden", "");
        document.getElementById('labelemail').removeAttribute("hidden", "");
      }
    }

    function Cancelar(){
      $cancelar = ['btnCancelar'];
      if($cancelar){
        document.getElementById('btnSalvar').setAttribute("hidden", "");
        document.getElementById('btnCancelar').setAttribute("hidden", "");
        document.getElementById('btnEditar').removeAttribute("hidden");
         document.getElementById('name').setAttribute("hidden", "");
        document.getElementById('email').setAttribute("hidden", "");
        document.getElementById('labelname').removeAttribute("hidden", "");
        document.getElementById('labelemail').removeAttribute("hidden", "");
      }
    }

    
</script>