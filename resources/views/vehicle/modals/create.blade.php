<form class="" action="{{url('/vehicles')}}" method="post">
  <div class="modal fade" id="create_vehicle" tabindex="-1" role="dialog" aria-labelledby="create_vehicleLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="create_vehicleLabel">Crear Vehiculo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nameInput1">Selecciona Propietario</label>
            <select class="form-control" name="owner_id">
              @foreach ($owners as $o)
                <option value="{{$o->id}}">{{$o->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="brandInput1">Marca</label>
            <input type="text" class="form-control" id="brandInput1" name="brand">
          </div>
          <div class="form-group">
            <label for="modelInput1">Modelo</label>
            <input type="text" class="form-control" id="modelInput1" name="model">
          </div>
          <div class="form-group">
            <label for="yearInput1">Año</label>
            <input type="text" class="form-control" id="yearInput1" name="year">
          </div>
          <div class="form-group">
            <label for="patentInput1">Patente</label>
            <input type="text" class="form-control" id="patentInput1" name="patent">
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
