@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <a class="btn btn-info" href="{{@url('/home')}}">
          Volver
        </a>
      </div>
        <div class="col-md-12">
          <br>
            <div class="card">
                <div class="card-header">Habilitación </div>

                <div class="card-body">
                  <center>
                    <h3 >
                      {{@$qualify->name}}
                    </h3>
                    <hr>

                  </center>
                  <br>
                  <div class="row mx-auto">
                    <div class="col-sm-6">
                      <b>Agencia:</b> {{@$qualify->agency->name}} - {{@$qualify->agency->address}}
                    </div>
                    <div class="col-sm-6">
                      <b>Propietario:</b> {{@$qualify->owner->name}} - {{@$qualify->owner->dni}}
                    </div>
                    <div class="col-sm-6">
                      <b>Vehiculo:</b> {{@$qualify->vehicle->brand}} {{@$qualify->vehicle->model}} {{@$qualify->vehicle->year}} {{@$qualify->vehicle->patent}}
                    </div>
                    <div class="col-sm-6">
                      <b>Conductor:</b> {{@$qualify->driver->name}} - {{@$qualify->driver->dni}}
                    </div>
                  </div>
                  <hr>
                  <div class="row mx-auto">
                      <div class="col-sm-12">
                        <b>Numero de Credencial:</b> {{@$qualify->credentialn}}
                      </div>
                      <div class="col-sm-12">
                        <b>Oblea:</b> {{@$qualify->wafers}}
                      </div>
                      <div class="col-sm-12
                      @if (\Carbon\Carbon::parse($qualify->expiration)->lt(\Carbon\Carbon::now()))
                        bg-danger text-white
                        @else
                        bg-success text-white
                      @endif">
                        <b>
                          @if (\Carbon\Carbon::parse($qualify->expiration)->lt(\Carbon\Carbon::now()))
                            Expirado
                            @else
                            Al dia
                          @endif
                          :</b> {{@$qualify->expiration}}
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
