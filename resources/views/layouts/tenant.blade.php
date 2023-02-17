<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eclipse Scheduling') }}</title>
    <link rel="stylesheet" href="/tenant/css/all.min.css"/>
    <link rel="stylesheet" href="/tenant/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="/tenant/css/bootstrap.min.css">
    <link rel="stylesheet" href="/tenant/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="/tenant/css/chosen.min.css">
    <link rel="stylesheet" href="/tenant/css/colors.css">
    <link rel="stylesheet" href="/tenant/css/components.css">
    <link rel="stylesheet" href="/tenant/css/bootstrap-extended.css">
    <link rel="stylesheet" href="/tenant/css/vertical-menu.css">
    <link rel="stylesheet" href="/tenant/css/daterangepicker.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css" rel="stylesheet">
    <link rel="stylesheet" href="/tenant/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
    [x-cloak]
    {
      display: none !important;
    }
    </style>
    @stack('head')
    @livewireStyles
    @powerGridStyles
</head>
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="" x-data="{offcanvasOpen: false, remittanceDetails: false}">
            @include('partials/header')

            @include('partials/sidebar')
            <!-- BEGIN: Content-->
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="app-content content ">
                <div class="content-wrapper container-xxl p-0">
                    @yield('content')
                  </div>
                </div>
            <!-- End: Content-->
            <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->
    <footer
      class="footer footer-light  footer-static">
      <p class="clearfix mb-0">
        <span class="float-md-start d-block d-md-inline-block mt-25">Copyright &copy;
        <a class="ms-25" href=""
          target="_blank">Eclipse Scheduling</a>,
        <span class="d-none d-sm-inline-block">All rights Reserved</span>
        </span>
      </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->
    
    @include('partials/panels')

    <script src="/tenant/js/jquery-3.6.3.min.js"></script>
    <script src="/tenant/js/bootstrap.bundle.min.js"></script>
    <script src="/tenant/js/moment.min.js"></script>
    <script src="/tenant/js/daterangepicker.min.js"></script>
    <script src="/tenant/js/unison-js.min.js"></script>
    <script src="/tenant/js/perfect-scrollbar.min.js"></script>
    <script src="/tenant/js/feather-icons.min.js"></script>
    <script src="/tenant/js/chosen.jquery.min.js"></script>
    <script src="/tenant/js/app.js"></script>
    <script src="/tenant/js/app-menu.js"></script>
    <script src="/tenant/js/app-new.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @livewireScripts
    @powerGridScripts
    <script src="//unpkg.com/alpinejs" defer></script>
    @stack('scripts')
  </body>
</html>