<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="icon" type="image/png" href="/assets/logos/favicon.png">
  <meta name="theme-color" content="#673AB7">


  <title>
    @yield('title')
  </title>

  <meta name="description" content="@yield('description', 'Lets Connect.')">
  <meta name="keywords" content="connect, tanzania, events, food, halls">
 
  <!--     Fonts and icons     -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

   <link rel="stylesheet" href="{{ asset('assets/site/fonts/Feather/feather.css') }}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  {{-- icons --}}
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/logo/favicon.ico')}}" id="main-favicon">
  <link rel="icon" href="/assets/logos/favicon-16x16.png" sizes="16x16" id="16x16-favicon">
  <link rel="icon" href="/assets/logos/favicon-32x32.png" sizes="32x32" id="32x32-favicon">
  <link rel="icon" href="/assets/logos/favicon-96x96.png" sizes="96x96" id="96x96-favicon">

  {{-- stylesheets --}}
   <link rel="stylesheet" href="{{ asset('assets/site/libs/flickity/dist/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/libs/flickity-fade/flickity-fade.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/libs/jarallax/dist/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/libs/highlightjs/styles/vs2015.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/site/icofont.min.css')}}">
  <!-- CSS Files -->
   <link href="{{ asset('assets/site/css/card.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/site/css/main.css') }}" rel="stylesheet" />
  
  
</head>


<body class="landing-page sidebar-collapse">

  @include('site.inc.header')

    @yield('content')


  @include('site.inc.footer')


    <script src="{{ asset('assets/site/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/site/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/site/libs/flickity/dist/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/site/libs/flickity-fade/flickity-fade.js') }}"></script>
    <script src="{{ asset('assets/site/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/site/libs/smooth-scroll/dist/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('assets/site/libs/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/site/libs/jarallax/dist/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('assets/site/libs/jarallax/dist/jarallax-element.min.js') }}"></script>
    <script src="{{ asset('assets/site/libs/typed.js/lib/typed.min.js') }}"></script>
    <script src="{{ asset('assets/site/libs/countup.js/dist/countUp.min.js') }}"></script>
    <script src="{{ asset('assets/site/libs/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('assets/site/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>

    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/site/js/theme.min.js') }}"></script>
</body>