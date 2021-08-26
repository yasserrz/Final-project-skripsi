<!DOCTYPE html>
<html lang="en {{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/AdminLTEX/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/AdminLTEX/css/adminlte.min.css">


  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item">
        <a href="/admin" class="nav-link">Dashboard</a>
      </li>
</ul>
<ul class="navbar-nav">
      <li class="nav-item">
            <a href="#" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" class="nav-link">
               Log Out
            </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
      </li>
</ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">

      <span class="brand-text font-weight-light">RedAuto</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/kerusakan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kerusakan Mobil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gejala" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gejala Kerusakan Mobil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/basis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Basis Pengetahuan</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield ('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/AdminLTEX/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/AdminLTEX/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/AdminLTEX/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/AdminLTEX/dist/js/demo.js"></script>
</body>
</html>
