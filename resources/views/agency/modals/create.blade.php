<form class="" action="{{url('/agencies')}}" method="post">
  <div class="modal fade" id="create_agency" tabindex="-1" role="dialog" aria-labelledby="create_agencyLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="create_agencyLabel">Crear agencia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nameInput1">Nombre</label>
            <input type="text" class="form-control" id="nameInput1" name="name">
          </div>
          <div class="form-group">
            <label for="addressInput1">Dirección</label>
            <input type="text" class="form-control" id="addressInput1" name="address">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>
