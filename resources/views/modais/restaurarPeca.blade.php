<div class="modal" id="restaurarPecaModal-{{$peca->id}}" tabindex="-1" role="dialog" aria-labelledby="restaurarPecaModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('pecas-apagadas.update', $peca->id)}}" method="POST">        
            @method('PUT')           
            @csrf
                <div class="modal-header modal-danger">
                    <h5 class="modal-title-restaurar">Restaurar Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="certezarestaurar" class="control-label">Tem certeza que quer restaurar o produto "{{$peca->nome}}" com id "{{$peca->id}}"?</label> 
                    </div>
	               <div style="text-align: right;">
                        <button right type="submit" class="btn btn-danger">Sim</button>
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
	                   
	                
	            </div>
            </form>
        </div>
    </div>
</div>