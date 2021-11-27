<!--MODAL NOVO EQUIPAMENTO-->
<div class="modal" id="novoEquiModal" tabindex="-1" role="dialog" aria-labelledby="novoEquiModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form class="form-horizontal" id="formEquipamento" action="/equipamentos" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="modal-header">
					<h5 class="modal-title">Novo Equipamento</h5>
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
								<option value="" disabled selected>Selecione um local</option>
								@foreach(App\Local::all() as $local)
								<option value="{{$local->id}}">{{$local->nome}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="latitudeEquipamento" class="control-label">Latitude</label>
						<div class="input-group">
							<input type="text" class="form-control" name="latitude" placeholder="Latitude">
						</div>
					</div>
					<div class="form-group">
						<label for="longitudeEquipamento" class="control-label">Longitude</label>
						<div class="input-group">
							<input type="text" class="form-control" name="longitude" placeholder="Longitude">
						</div>
					</div>
					<div class="form-group">
						<label for="fotoEquipamento">Imagem</label>
						<input type="file" class="form-control-file" name="foto" id="fotoEquipamento">

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