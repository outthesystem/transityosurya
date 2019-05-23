<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="row">
      <div class="col-sm-12">
        <nav class="navbar navbar-dark bg-primary">
          <a class="navbar-brand" href="{{url('/')}}">< Volver</a>
        </nav>
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <center>
              <h3>
                {{$agency->name}}
              </h3>
              <hr>

            </center>
            <br>
            <div class="row mx-auto">
              <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                      <thead>
                        <th>ID</th>
                        <th>Vehiculo</th>
                        <th>Conductor</th>
                        <th>Expediente</th>
                        <th>Numero de Crendecial</th>
                        <th>Nombre</th>
                        <th>Fecha de vencimiento</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </thead>
                      <tbody>
                        @foreach ($agency->qualifications as $q)
                          <tr
                          data-toggle="tooltip" data-placement="top" title="Tooltip on top"
                          class="@if (\Carbon\Carbon::parse($q->expiration)->lt(\Carbon\Carbon::now()))
                            bg-danger text-white
                            @else
                            bg-success text-white
                          @endif">
                            <td>{{$q->id}}</td>
                            <td>{{$q->vehicle->brand}} {{$q->vehicle->model}} {{$q->vehicle->year}} {{$q->vehicle->patent}}</td>
                            <td>{{@$q->driver->name}} {{@$q->driver->dni}}</td>
                            <td>{{$q->expedient}}</td>
                            <td>{{$q->credentialn}}</td>
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
                              <a href="{{url('result/'.$q->id)}}">
                                <b>Ver</b>
                              </a>
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
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
