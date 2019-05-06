@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <a class="btn btn-info" href="{{url('/drivers')}}">
          Volver
        </a>
      </div>
        <div class="col-md-12">
          <br>
            <form class="" action="{{url('/driver/'.$driver->id)}}" method="post">
              <div class="card">
                  <div class="card-header">Editando a: {{$driver->name}}</div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="nameInput1">Nombre y Apellido</label>
                      <input type="text" class="form-control" id="nameInput1" name="name" value="{{$driver->name}}" autofocus>
                    </div>
                    <div class="form-group">
                      <label for="dniInput1">DNI</label>
                      <input type="text" class="form-control" name="dni" id="dniInput1" value="{{$driver->dni}}">
                    </div>
                    <div class="form-group">
                      <label for="phoneInput1">Telefono</label>
                      <input type="number" class="form-control" name="phone" id="phoneInput1" value="{{$driver->phone}}">
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
