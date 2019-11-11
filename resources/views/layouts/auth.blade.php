<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <meta name="keywords" content="connect, tanzania, events, food, halls">
  <meta name="description" content="@yield('description')">
 
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

   {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Roboto&display=swap|Material+Icons" rel="stylesheet"> --}}

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('assets/site/icofont.min.css')}}">
  <!-- CSS Files -->
  <link href="{{ asset('assets/site/css/main.css') }}" rel="stylesheet" />
   <link href="{{ asset('assets/site/css/card.css') }}" rel="stylesheet" />
  
  
</head>


<body class="off-canvas-sidebar">

  {{-- @include('inc.auth.header') --}}

    @yield('content')


  {{-- @include('site.inc.footer') --}}


  <script src="{{ asset('assets/site/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/site/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/site/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/site/js/plugins/moment.min.js') }}"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ asset('assets/site/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets/site/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>

  <!--  Plugin for Sharrre btn -->
  <script src="{{ asset('assets/site/js/plugins/jquery.sharrre.js') }}" type="text/javascript"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ asset('assets/site/js/plugins/bootstrap-tagsinput.js') }}"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ asset('assets/site/js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
  <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('assets/site/js/plugins/jasny-bootstrap.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for Small Gallery in Product Page -->
  <script src="{{ asset('assets/site/js/plugins/jquery.flexisel.js') }}" type="text/javascript"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="{{ asset('assets/site/demo/demo.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/site/js/material-kit.min1036.js') }}" type="text/javascript"></script>


   <script>
    $().ready(function() {
      materialKitDemo.initContactUsMap();
    });
  </script>
</body>