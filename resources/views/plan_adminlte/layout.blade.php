<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->

  {{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}
  
  <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome-free/css/all.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/$plantilla/dist/css/adminlte.min.css")}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('plan_adminlte/nav')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('inicio.index')}}" class="brand-link">
      <span class="brand-text font-weight-light">KoRn</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- $plantilla = lte   la config está en appServiceProvide  en Providers--}}
          <img src="{{asset("assets/$plantilla/dist/img/avatar5.png")}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Yomar Gabriel Quispe</a>
        </div>
      </div>
      {{-- ASIDE --}}
      @include('plan_adminlte/aside')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    {{-- incluir section --}}
    <section class="content">
      <div class="container-fluid">
          @yield('contenido')
      </div>
    </section>

    





    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- FOOOTER --}}
  @include('plan_adminlte.footer')
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

@yield('scripts')
<script src="{{asset("assets/plugins/jquery/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset("assets/$plantilla/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<script src="{{asset("assets/$plantilla/dist/js/adminlte.js")}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->

</body>
</html>
