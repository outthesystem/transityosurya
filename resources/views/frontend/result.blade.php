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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
