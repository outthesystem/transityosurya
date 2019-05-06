@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create_vehicle">
          Crear registro
        </button>
      </div>
        <div class="col-md-12">
          <br>
            <div class="card">
                <div class="card-header">Vehiculos <span class="badge badge-info">{{$vehicles->count()}}</span></div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-sm table-hover table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Propietario</th>
                          <th scope="col">Marca</th>
                          <th scope="col">Modelo</th>
                          <th scope="col">Año</th>
                          <th scope="col">Patente</th>
                          <th scope="col">Acciones</th>
                      </thead>
                    </tr>
                      <tbody>
                        @forelse ($vehicles as $v)
                          <tr>
                            <th scope="row">{{$v->id}}</th>
                            <td>{{$v->owner->name}}</td>
                            <td>{{$v->brand}}</td>
                            <td>{{$v->model}}</td>
                            <td>{{$v->year}}</td>
                            <td>{{$v->patent}}</td>
                            <td>
                              <a href="{{url('/vehicle/'.$v->id)}}">Editar</a>
                              <a href="{{url('/vehicledelete/'.$v->id)}}">Eliminar</a>
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

@include('vehicle.modals.create')
