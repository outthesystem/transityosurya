<form class="" action="{{url('/qualifications')}}" method="post">
  <div class="modal fade" id="create_qualify" tabindex="-1" role="dialog" aria-labelledby="create_qualifyLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="create_qualifyLabel">Crear Habilitación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nameInput1">Selecciona Agencia</label>
            <select class="form-control" name="agency_id">
              @foreach ($agencies as $a)
                <option value="{{$a->id}}">{{$a->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="nameInput1">Selecciona Vehiculo</label>
            <select class="form-control" name="vehicle_id">
              @foreach ($vehicles as $v)
                <option value="{{$v->id}}">{{$v->brand}} {{$v->model}} {{$v->year}} {{$v->patent}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="nameInput1">Selecciona Conductor</label>
            <select class="form-control" name="driver_id">
              @foreach ($drivers as $d)
                <option value="">Lo conduce el propietario</option>
                <option value="{{$d->id}}">{{$d->name}} - {{$d->dni}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="expedientInput1">Expediente</label>
            <input type="text" class="form-control" id="expedientInput1" name="expedient">
          </div>
          <div class="form-group">
            <label for="credentialnInput1">Numero de Credencial</label>
            <input type="text" class="form-control" id="credentialnInput1" name="credentialn">
          </div>
          <div class="form-group">
            <label for="nameInput1">Nombre</label>
            <input type="text" class="form-control" id="nameInput1" name="name">
          </div>
          <div class="form-group">
            <label for="ini_dateInput1">Fecha de inicio</label>
            <input type="date" class="form-control" id="ini_dateInput1" name="ini_date">
          </div>
          <div class="form-group">
            <label for="expirationInput1">Expira el</label>
            <input type="date" class="form-control" id="expirationInput1" name="expiration">
          </div>
          <div class="form-group">
            <label for="wafersInput1">Oblea</label>
            <input type="text" class="form-control" id="wafersInput1" name="wafers">
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
