<!--MODAL EDITAR EQUIPAMENTO-->
<div class="modal" id="editarEquiModal-{{$equi->id}}" tabindex="-1" role="dialog" aria-labelledby="editarEquiModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">  
  
   
    <form class="form-horizontal" id="formEqui" action="{{route('equipamentos.update', $equi->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')      
   
            @csrf
             <div class="modal-header">
                    <h5 class="modal-title">Editar Equipamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="localEquipamento" class="control-label">Local</label>
                        <div class="input-group">
                            <select class="form-control" name="local_id">
                                @foreach(App\Local::all() as $local)
                                <option value="{{$local->id}}"{{$local->id === $equi->local_id ? ' selected' : '' }}>{{$local->nome}}</option>
                                @endforeach                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="latitudeEquipamento" class="control-label">Latitude</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="latitude" placeholder="Latitude" value="{{$equi->latitude}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="longitudeEquipamento" class="control-label">Longitude</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="longitude" placeholder="Longitude" value="{{$equi->longitude}}">
                        </div>
                    </div>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto" id="fotoEqui" value="{{$equi->foto}}">
                        <label class="custom-file-label" for="fotoEqui">Imagem</label>
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