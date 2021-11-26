
<!-- Modal -->
<div class="modal fade" id="RegistradoModal" tabindex="-1" role="dialog" aria-labelledby="RegistradoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-success">
      <div class="modal-header">
        <h5 class="modal-title" id="RegistradoModalLabel">Usuário Registrado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>{{session('mensagem')}}</p>
        <div style="text-align: right;">
         <button class="btn btn-success" data-dismiss="modal">Ok</button>
      </div>
      </div>
      
    </div>
  </div>
</div>