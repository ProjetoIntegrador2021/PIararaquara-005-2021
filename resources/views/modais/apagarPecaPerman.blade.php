<div class="modal" id="apagarPecaPermanModal-{{$peca->id}}" tabindex="-1" role="dialog" aria-labelledby="apagarPecaPermanModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
           
                <div class="modal-header modal-danger">
                    <h5 class="modal-title-apagar">Apagar Peça PERMANENTEMENTE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="certezaApagar" class="control-label">Tem certeza que quer apagar a peça "{{$peca->nome}}" com id "{{$peca->id}}" permanentemente?</label> 
                    </div>
                     <form action="{{route('pecas-apagadas.destroy', $peca->id)}}" method="POST">        
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