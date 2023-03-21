<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>laravel</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}assets/images/logos/squanchy.jpg" >
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('') }}assets/images/logos/squanchy.jpg">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('') }}assets/images/logos/squanchy.jpg">
<!-- jQuery -->
<!-- Bootstrap4 files-->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/> 
<link href="{{ asset('assets/css/ui.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('assets/css/OverlayScrollbars.css') }}" type="text/css" rel="stylesheet"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset("plugins/fontawesome-free/css/all.min.css") }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css") }}">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="   {{ asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}">
        <!-- iCheck -->
        <link rel="stylesheet" href=  " {{ asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="   {{ asset("plugins/jqvmap/jqvmap.min.css") }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="   {{ asset("dist/css/adminlte.min.css") }}">
        <link rel="stylesheet" href="   {{ asset("dist/css/custom_style.css") }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="   {{ asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="   {{ asset("plugins/daterangepicker/daterangepicker.css") }}">
        <!-- summernote -->
        <link rel="stylesheet" href="   {{ asset("plugins/summernote/summernote-bs4.css") }}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript">
          $(function() {
          $("#printable").find('.print').on('click', function() {
            $("#printable").printPage();
          });
        });
           </script>
        <style>
            .avatar {
            vertical-align: middle;
            width: 35px;
            height: 35px;
            border-radius: 50%;
          }
          .bg-default, .btn-default{
            background-color: #f2f3f8;
          }
          .btn-error{
            color: #ef5f5f;
          }
          </style>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('layouts.navigation')
            <!-- Page Heading -->
             <!-- Content Wrapper. Contains page content -->
             <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                  
                </div>
                <!-- /.content-header -->
                
                <!-- Main content -->
               <!-- ========================= SECTION CONTENT ========================= -->
               <section class="header-main">
            <!-- Page Content -->
                {{ $slot }}
               </section>
              </div>
<!-- /.content -->
         </div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
</body>
</html>
