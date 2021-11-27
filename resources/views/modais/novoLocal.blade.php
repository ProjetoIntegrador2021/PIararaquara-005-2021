<!--MODAL NOVO LOCAL-->
<div class="modal" id="novoLocalModal" tabindex="-1" role="dialog" aria-labelledby="novoLocalModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" id="formLocal" action="/locais" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Novo local</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="nomelocal" class="control-label">Nome do local: </label>
                        <div class="input-group">
                            <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid': ''}}" id="nomelocal" name="nome" placeholder="Nome do local" value="{{old('nome')}}">
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
        $('#novoLocalModal').modal('show');
    });
</script>
@endif