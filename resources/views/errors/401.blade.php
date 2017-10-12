<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Acceso restringido</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
  </head>
  <body>
    <div class="box-admin">
      <div class="container">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-title">
              Acceso restringido
            </div>
          </div>
          <div class="panel-body">
            <img class="img-responsive center-block" src="{{ asset('images/401.jpg') }}" alt="">
            <hr>
            <strong class="text-center">
              <p class="text-center">Usted no tiene acceso a esta zona</p>
              <p>
                <a href="{{ route('front.index') }}">¿Desea volver al inicio?</a>
              </p>
            </strong>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
