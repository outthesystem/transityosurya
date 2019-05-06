@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <a class="btn btn-info" href="{{url('/agencies')}}">
          Volver
        </a>
      </div>
        <div class="col-md-12">
          <br>
            <form class="" action="{{url('/agency/'.$agency->id)}}" method="post">
              <div class="card">
                  <div class="card-header">Editando a: {{$agency->name}} - {{$agency->address}}</div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="nameInput1">Nombre</label>
                      <input type="text" class="form-control" id="nameInput1" name="name" value="{{$agency->name}}" autofocus>
                    </div>
                    <div class="form-group">
                      <label for="addressInput1">Dirección</label>
                      <input type="text" class="form-control" name="address" id="addressInput1" value="{{$agency->address}}">
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
