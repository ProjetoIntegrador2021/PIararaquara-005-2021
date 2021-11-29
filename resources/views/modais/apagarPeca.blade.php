<div class="modal" id="apagarPecaModal-{{$peca->id}}" tabindex="-1" role="dialog" aria-labelledby="apagarPecaModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
           
                <div class="modal-header modal-danger">
                    <h5 class="modal-title-apagar">Apagar Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="certezaApagar" class="control-label">Tem certeza que quer apagar o produto "{{$peca->nome}}" com id "{{$peca->id}}"?</label> 
                    </div>
                     <form action="{{route('pecas.destroy', $peca->id)}}" method="POST">        
                @method('DELETE')           
                @csrf
                    <div style="text-align: right;">
                        <button right type="submit" class="btn btn-danger">Sim</button>
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>