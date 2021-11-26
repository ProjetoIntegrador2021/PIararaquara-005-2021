
@if(App\Peca::where('categoria_id', '=', $cat->id)->exists())
<div class="modal" id="apagarCatModal-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="apagarCatModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header modal-warning">
                    <h5 class="modal-title">Apagar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="certezaApagar" class="control-label">Não é possível apagar a categoria {{$cat->nome}} pois está sendo usada em Produtos.</label> 
                    </div>
                    <div style="text-align: right;">
                        <button class="btn btn-warning" data-dismiss="modal">Ok</button>
                
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@else
<div class="modal" id="apagarCatModal-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="apagarCatModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
             <div class="modal-header modal-danger">
                    <h5 class="modal-title-apagar">Apagar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
            
                
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="certezaApagar" class="control-label">Tem certeza que quer apagar a categoria com id "{{$cat->id}}"?</label> 
                    </div>
                    <form action="{{route('categorias.destroy', $cat->id)}}" method="POST">        
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
