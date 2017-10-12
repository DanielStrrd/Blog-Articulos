<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Default')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset('images/home-bg.jpg') }})">
      @include('admin.template.partials.nav')
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>@yield('title', 'Default')</h1>
              <span class="subheading">@yield('user', 'Default')</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <section class="container">
          @yield('content')
    </section>

    <!-- Footer -->
    <footer class="front-footer container">
        <div class="container-fluid">
          <div class="collapse navbar-collapse">
            <p class="navbar-text">Todos los derechos reservados &copy {{ date('Y') }}</p>
            <p class="navbar-text navbar-right">CCEO</p>
          </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('plugins/jquery/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/clean-blog.min.js') }}"></script>

  </body>

</html>
