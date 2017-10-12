<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Default') | Panel de Administracion</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
  </head>
  <body class="container">
    @include('admin.template.partials.nav')
    @include('flash::message')
    @include('admin.template.partials.errors')
    <section>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">@yield('title', 'Default')</h3>
        </div>
        <div class="panel-body">
          @yield('content')
        </div>
      </div>
    </section>

    <footer class="admin-footer">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="collapse navbar-collapse">
            <p class="navbar-text">Todos los derechos reservados &copy {{ date('Y') }}</p>
            <p class="navbar-text navbar-right">CCEO</p>
          </div>
        </div>
      </nav>
    </footer>

    <script src="{{ asset('plugins/jquery/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    @yield('js')

  </body>
</html>
