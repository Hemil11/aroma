<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela!</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        @include('admin.layout.sidebar')

        @yield('content')


        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    @stack('script')
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
	
  </body>
</html>
