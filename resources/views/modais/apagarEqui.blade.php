<div class="modal" id="apagarEquiModal-{{$equi->id}}" tabindex="-1" role="dialog" aria-labelledby="apagarEquiModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
            
                <div class="modal-header modal-danger">
                    <h5 class="modal-title-apagar">Apagar Equipamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="certezaApagar" class="control-label">Tem certeza que quer apagar o equipamento  com id "{{$equi->id}}"?</label> 
                    </div>
                    <form action="{{route('equipamentos.destroy', $equi->id)}}" method="POST">        
            @method('DELETE')           
            @csrf
	               <div style="text-align: right;">
	                    <button type="submit" class="btn btn-danger">Sim</button>
	                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	                </div>
	            </div>
            </form>
        </div>
    </div>
</div>