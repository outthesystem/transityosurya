@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create_qualify">
          Crear registro
        </button>
      </div>
        <div class="col-md-12">
          <br>
            <div class="card">
                <div class="card-header">Habilitaciones <span class="badge badge-info">{{$qualifications->count()}}</span></div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-sm table-hover table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Agencia</th>
                          <th scope="col">Vehiculo</th>
                          <th scope="col">Conductor</th>
                          <th scope="col">Numero de Crendecial</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Expiración</th>
                          <th scope="col">Oblea</th>
                          <th scope="col">Acciones</th>
                      </thead>
                    </tr>
                      <tbody>
                        @forelse ($qualifications as $c)
                          <tr>
                            <th scope="row">{{$c->id}}</th>
                            <td>{{$c->agency->name}} - {{$c->agency->address}}</td>
                            <td>{{$c->vehicle->brand}} {{$c->vehicle->model}} {{$c->vehicle->year}} {{$c->vehicle->patent}}</td>
                            <td>{{@$c->driver->name}} {{@$c->driver->dni}}</td>
                            <td>{{$c->credetendialn}}</td>
                            <td>{{$c->name}}</td>
                            <td>{{$c->expiration}}</td>
                            <td>{{$c->wafers}}</td>
                            <td>
                              <a href="{{url('/generateQR/'.$c->id)}}">Generar QR</a>
                              <a href="{{url('/qualify/'.$c->id)}}">Editar</a>
                              <a href="{{url('/qualifydelete/'.$c->id)}}">Eliminar</a>
                            </td>
                          </tr>
                        @empty
                          <tr>
                            <td class="table-warning" colspan="12">No se han encontrado resultados.</td>
                          </tr>
                        @endforelse

                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('qualify.modals.create')
