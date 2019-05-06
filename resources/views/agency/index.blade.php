@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create_agency">
          Crear registro
        </button>
      </div>
        <div class="col-md-12">
          <br>
            <div class="card">
                <div class="card-header">Agencias <span class="badge badge-info">{{$agencies->count()}}</span></div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-sm table-hover table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Dirección</th>
                          <th scope="col">Acciones</th>
                      </thead>
                    </tr>
                      <tbody>
                        @forelse ($agencies as $a)
                          <tr>
                            <th scope="row">{{$a->id}}</th>
                            <td>{{$a->name}}</td>
                            <td>{{$a->address}}</td>
                            <td>
                              <a href="{{url('/agency/'.$a->id)}}">Editar</a>
                              <a href="{{url('/agencydelete/'.$a->id)}}">Eliminar</a>
                            </td>
                          </tr>
                        @empty
                          <tr>
                            <td class="table-warning" colspan="4">No se han encontrado resultados.</td>
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

@include('agency.modals.create')
