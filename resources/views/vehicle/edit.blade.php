@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <a class="btn btn-info" href="{{url('/vehicles')}}">
          Volver
        </a>
      </div>
        <div class="col-md-12">
          <br>
            <form class="" action="{{url('/vehicle/'.$vehicle->id)}}" method="post">
              <div class="card">
                  <div class="card-header">Editando a: {{$vehicle->brand}} {{$vehicle->model}} {{$vehicle->year}}</div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="nameInput1">Selecciona Conductor</label>
                      <select class="form-control" name="driver_id">
                        @foreach ($drivers as $d)
                          <option value="{{$d->id}}"
                            @if ($d->id == $vehicle->driver_id)
                              selected
                            @endif
                            >{{$d->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="brandInput1">Marca</label>
                      <input type="text" class="form-control" id="brandInput1" name="brand" value="{{$vehicle->brand}}">
                    </div>
                    <div class="form-group">
                      <label for="modelInput1">Modelo</label>
                      <input type="text" class="form-control" id="modelInput1" name="model" value="{{$vehicle->model}}">
                    </div>
                    <div class="form-group">
                      <label for="yearInput1">Año</label>
                      <input type="text" class="form-control" id="yearInput1" name="year" value="{{$vehicle->year}}">
                    </div>
                    <div class="form-group">
                      <label for="patentInput1">Patente</label>
                      <input type="text" class="form-control" id="patentInput1" name="patent" value="{{$vehicle->patent}}">
                    </div>
                  </div>
                  <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-success">Guardar</button>
                  </div>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
