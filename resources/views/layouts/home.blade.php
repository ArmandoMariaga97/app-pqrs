<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Active PQRS</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icono.png') }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/css/vendors.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/css/pages/under-maintenance.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/css/plugins/animate/animate.css')}}">

  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/assets/css/style.css')}}">
  <!-- END Custom CSS-->
</head>
<body style="background-image:url('/img/fondo.jpg');" class="vertical-layout vertical-menu-modern 1-column  menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->

  @stack('modals')

  @yield('contenido')

  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="{{ asset('modernadmin/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{ asset('modernadmin/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{ asset('modernadmin/app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{ asset('modernadmin/app-assets/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>

  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <!-- END PAGE LEVEL JS-->
</body>
</html>