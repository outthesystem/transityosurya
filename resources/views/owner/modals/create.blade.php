<form class="" action="{{url('/owners')}}" method="post">
  <div class="modal fade" id="create_owner" tabindex="-1" role="dialog" aria-labelledby="create_ownerLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="create_ownerLabel">Crear Propietario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nameInput1">Nombre y Apellido</label>
            <input type="text" class="form-control" id="nameInput1" name="name">
          </div>
          <div class="form-group">
            <label for="addressInput1">DNI</label>
            <input type="text" class="form-control" id="dniInput1" name="dni">
          </div>
          <div class="form-group">
            <label for="addressInput1">Telefono</label>
            <input type="number" class="form-control" id="phoneInput1" name="phone">
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
