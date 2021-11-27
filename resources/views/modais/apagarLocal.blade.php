
@if(App\Equipamento::where('local_id', '=', $local->id)->exists())
<div class="modal" id="apagarLocalModal-{{$local->id}}" tabindex="-1" role="dialog" aria-labelledby="apagarLocalModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header modal-warning">
                    <h5 class="modal-title">Apagar Local</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="certezaApagar" class="control-label">Não é possível apagar o local {{$local->nome}} pois está sendo usado em equipamentos</label> 
                    </div>
                     <div style="text-align: right;">
                        <button class="btn btn-warning" data-dismiss="modal">Ok</button>
                
                    </div>
                </div>
               
                
              
        </div>
    </div>
</div>
@else
<div class="modal" id="apagarLocalModal-{{$local->id}}" tabindex="-1" role="dialog" aria-labelledby="apagarLocalModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
           
                 <div class="modal-header modal-danger">
                    <h5 class="modal-title-apagar">Apagar Local</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="certezaApagar" class="control-label">Tem certeza que quer apagar o local com id "{{$local->id}}"?</label> 
                    </div>
                     <form action="{{route('locais.destroy', $local->id)}}" method="POST">        
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

@endif