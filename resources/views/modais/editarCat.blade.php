<!--MODAL EDITAR CATEGORIA-->
<div class="modal" id="editarCatModal-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="editarCatModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">  
   <form class="form-horizontal" id="formcat" action="{{route('categorias.update', $cat->id)}}" method="POST">
    @method('PUT')      
            @csrf
             <div class="modal-header">
                    <h5 class="modal-title">Editar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="nomecat" class="control-label">Nome</label>

                        <div class="input-group">
                            <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{$cat->nome}}">
                        </div>
                    </div>
                     <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>      
            </form>
        </div>
    </div>
</div>
@if (count($errors) > 0 )
<script>
    $( document ).ready(function() {
        $('#editarCatModal').modal('show');
    });
</script>
@endif