@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create_driver">
          Crear registro
        </button>
      </div>
        <div class="col-md-12">
          <br>
            <div class="card">
                <div class="card-header">Choferes <span class="badge badge-info">{{$drivers->count()}}</span></div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-sm table-hover table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre y Apellido</th>
                          <th scope="col">DNI</th>
                          <th scope="col">Telefono</th>
                          <th scope="col">Acciones</th>
                      </thead>
                    </tr>
                      <tbody>
                        @forelse ($drivers as $d)
                          <tr>
                            <th scope="row">{{$d->id}}</th>
                            <td>{{$d->name}}</td>
                            <td>{{$d->dni}}</td>
                            <td>{{$d->phone}}</td>
                            <td>
                              <a href="{{url('/driver/'.$d->id)}}">Editar</a>
                              <a href="{{url('/driverdelete/'.$d->id)}}">Eliminar</a>
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

@include('driver.modals.create')
