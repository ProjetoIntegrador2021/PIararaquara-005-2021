<!--MODAL EDITAR PEÇA-->
<div class="modal" id="editarPecaModal-{{$peca->id}}" tabindex="-1" role="dialog" aria-labelledby="editarPecaModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">  


        <form class="form-horizontal" id="formEditarPeca" action="{{route('pecas.update', $peca->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')      

            @csrf
            <div class="modal-header">

                <h5 class="modal-title">Editar Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
          </div>
          <div class="modal-body">
             <input type="hidden" id="id" class="form-control">
             <div class="form-group">
                <label for="nomePeca" class="control-label">Nome da Peça</label>
                <div class="input-group">
                    <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" placeholder="Nome da Peca" value="@if($errors->has('nome')) {{old('nome')}} @else {{$peca->nome}} @endif">
                    @if($errors->has('nome'))
                    <div class="invalid-feedback">{{$errors->first('nome')}}<!-- first pega o 1º erro do nome pra nao aparecer vários erros pro mesmo campo -->
                    </div>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="categoriaPeca" class="control-label">Categoria</label>
                <div class="input-group">  
                    <select class="form-control" name="categoria_id" placeholder="Selecione uma categoria" >
                        @foreach (App\Categoria::all() as $categoria)
                        <option value="{{$categoria->id}}"{{$categoria->id === $peca->categoria_id ? ' selected' : '' }}>{{$categoria->nome}}</option>
                        @endforeach                            
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nseriePeca" class="control-label">Quantidade</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="nserie" placeholder="Quantidade" value="{{$peca->nserie}}">
                </div>
            </div>

            <!--<div class="form-group">
                <label for="patrimonioPeca" class="control-label">Patrimonio</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="patrimonio" name="patrimonio" placeholder="Patrimonio da Peça" value="{{$peca->patrimonio}}">
                </div>
            </div>-->

<<<<<<< HEAD
          <div class="form-group">
=======
           <!-- <div class="form-group">
>>>>>>> 81707ae0fe3c836d362c84a0ae7f3f1859be7651
                <label for="marcaPeca" class="control-label">Marca</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca da Peça" value="{{$peca->marca}}">
                </div>
            </div>

            <div class="form-group">
                <label for="estadoPeca" class="control-label">Condição</label>
                <div class="input-group">
                    <select class="form-control" id="estadoPeca" name="estado" >
                        <option value="{{$peca->estado}}">{{$peca->estado}}</option>
                        <option value ="funcionando">Funcionando</option>
                        <option value ="quebrado">Quebrado</option>
                        <option value ="obsoleto">Obsoleto</option>
                    </select>    
                </div>
            </div>
            <div class="form-group">
                <label for="descricaoPeca" class="control-label">Descrição</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição da Peça" value="{{$peca->descricao}}">
                </div>
            </div>
            <!--<div class="form-group">                       

                @if(isset($peca->foto))

                <label for="fotoAPeca">Imagem atual: </label>
                <br>
                <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$peca->foto}}">
                @endif
                <br>
                <label for="fotoPeca">Adicionar Imagem</label>
                <input type="file" class="form-control-file" name="foto" id="fotoPeca" value="{{$peca->foto}}"><br>

            </div>-->

                    <!-- <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto" id="customFile" value="/storage/{{$peca->foto}}">
                        <label class="custom-file-label" for="customFile">Foto</label>
                    </div> -->

                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit-editar" id="submit-editar" class="btn btn-primary">Alterar</button>
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
                
            </form>

        </div>

    </div>
</div>
@if (count($errors) > 0 )
<script>
    $( document ).ready(function() {
        $('#editarPecaModal').modal('show');
    });
</script>
@endif
