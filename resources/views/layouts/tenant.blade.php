<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eclipse Scheduling') }}</title>

    <link rel="stylesheet" href="/tenant/css/bootstrap.min.css">
    <link rel="stylesheet" href="/tenant/css/colors.css">
    <link rel="stylesheet" href="/tenant/css/components.css">
    <link rel="stylesheet" href="/tenant/css/bootstrap-extended.css">
    <link rel="stylesheet" href="/tenant/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    @stack('head')
    @livewireStyles
</head>
<body class="pace-done vertical-layout vertical-menu-modern navbar-floating footer-static menu-expanded">
@include('partials/header')
            @include('partials/sidebar')
 
            @yield('content')
            <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->
    <footer
      class="footer footer-light  footer-static">
      <p class="clearfix mb-0">
        <span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy;
        <a class="ms-25" href=""
          target="_blank">Eclipse Scheduling</a>,
        <span class="d-none d-sm-inline-block">All rights Reserved</span>
        </span>
      </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->
    <script type="text/javascript" src="tenant/js/bootstrap.bundle.min.js"></script>
    <script src="tenant/js/app.js"></script>
    @include('layouts/savebrowserpopup')
    @livewireScripts
  </body>
</html>