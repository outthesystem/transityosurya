@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Habilitaciones vencidas</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                          <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Fecha de vencimiento</th>
                            <th>Vencimiento</th>
                            <th>Acciones</th>
                          </thead>
                          <tbody>
                            @foreach ($qualifications as $q)
                              <tr
                              data-toggle="tooltip" data-placement="top" title="Tooltip on top"
                              class="@if (\Carbon\Carbon::parse($q->expiration)->lt(\Carbon\Carbon::now()))
                                bg-danger text-white
                                @else
                                bg-success text-white
                              @endif">
                                <td>{{$q->id}}</td>
                                <td>{{$q->name}}</td>
                                <td>{{$q->expiration}}</td>
                                <td>
                                  @if (\Carbon\Carbon::parse($q->expiration)->lt(\Carbon\Carbon::now()))
                                    <b>Vencido</b>
                                    @else
                                    <b>Al dia</b>
                                  @endif
                                </td>
                                <td class="bg-white">
                                  @if (\Carbon\Carbon::parse($q->expiration)->lt(\Carbon\Carbon::now()))
                                    <a href="#" data-toggle="modal" data-target="#extendModal">
                                      <b>Extender</b>
                                    </a>
                                    <a href="{{url('qualification/show/'.$q->id)}}">
                                      <b>Ver</b>
                                    </a>

                                    @else
                                      <a href="{{url('qualification/show/'.$q->id)}}">
                                        <b>Ver</b>
                                      </a>
                                  @endif
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form class="" action="{{url('extend/'.$q->id)}}" method="post">

<div class="modal fade" id="extendModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Extender Habilitación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="input-group mb-3">
            <input type="date" class="form-control" name="expiration" aria-describedby="basic-addon1">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>

@endsection
