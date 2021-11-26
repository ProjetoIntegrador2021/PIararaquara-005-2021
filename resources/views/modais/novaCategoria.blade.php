   <!--MODAL NOVA CATEGORIA-->
<div class="modal" id="novaCatModal" tabindex="-1" role="dialog" aria-labelledby="novaCatModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" id="formCategoria" action="/categorias" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Nova Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="nomeCategoria" class="control-label">Nome da categoria: </label>
                        <div class="input-group">
                            <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid': ''}}" id="nomeCategoria" name="nome" placeholder="Nome da Categoria" value="{{old('nome')}}">
                        @if($errors->has('nome'))
                            <div class="invalid-feedback">
                                {{$errors->first('nome')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@if (count($errors) > 0 )
<script>
    $( document ).ready(function() {
        $('#novaCatModal').modal('show');
    });
</script>
@endif