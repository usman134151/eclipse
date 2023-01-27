<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eclipse Scheduling') }}</title>

    <link rel="stylesheet" href="central/css/bootstrap.min.css">
    <link rel="stylesheet" href="central/css/colors.css">
    <link rel="stylesheet" href="central/css/components.css">
    <link rel="stylesheet" href="central/css/bootstrap-extended.css">
    <link rel="stylesheet" href="central/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    @stack('head')
</head>

<body>
    

    @yield('content')
  
 
  </body>
</html>