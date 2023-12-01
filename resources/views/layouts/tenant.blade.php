<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="id" content="{{Auth::user()->id}}">
        <meta name="url" content="{{ url('').'/'.config('chatify.routes.prefix') }}" data-user="{{ Auth::user()->id }}">

		<title>Eclipse Scheduling</title>
        <script src="/js/chatify/font.awesome.min.js"></script>
        <script src="/js/chatify/autosize.js"></script>
        <link href="/css/chatify/style.css" rel="stylesheet"/>
        <link href="/css/chatify/light.mode.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/tenant-resources/css/all.min.css"/>
		<link rel="stylesheet" href="/tenant-resources/css/font-awesome.min.css" type="text/css"/>
		<link rel="stylesheet" href="/tenant-resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="/tenant-resources/css/perfect-scrollbar.css">
		<link rel="stylesheet" href="/tenant-resources/css/vertical-menu.css">
		<link rel="stylesheet" href="/tenant-resources/css/daterangepicker.css">
		<link rel="stylesheet" href="/tenant-resources/css/select2.min.css"/>
		<link rel="stylesheet" href="/tenant-resources/css/pikaday.css">

	

		@if(session()->has('theme') && session('theme'))
			<link id="theme" rel="stylesheet" href="/tenant-resources/css/dark-colors.css">
			<link id="theme" rel="stylesheet" href="/tenant-resources/css/dark-components.css">
			<link id="theme" rel="stylesheet" href="/tenant-resources/css/dark-bootstrap-extended.css">
			<link id="theme" rel="stylesheet" href="/tenant-resources/css/dark-style.css">
			<link id="theme" rel="stylesheet" href="/tenant-resources/css/dark-fixes.css">
			<link id="dark_mode" rel="stylesheet" href="/tenant-resources/css/dark-mode.css" >
		@else
			<link id="theme" rel="stylesheet" href="/tenant-resources/css/colors.css">
			<link id="theme" rel="stylesheet" href="/tenant-resources/css/components.css">
			<link id="theme" rel="stylesheet" href="/tenant-resources/css/bootstrap-extended.css">
			<link id="theme" rel="stylesheet" href="/tenant-resources/css/style.css">
			<link id="theme" rel="stylesheet" href="/tenant-resources/css/fixes.css">	
		@endif
			{{-- <link rel="stylesheet" href="/tenant-resources/css/dark-layout.css"> --}}
		<link rel="stylesheet" href='/tenant-resources/css/bootstrap-icons.css'/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>
            :root {
                --primary-color: #213969;
            }
        </style>

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
	<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="" x-data="{offcanvasOpen: false}">
		@include('partials/header')
		@if(Auth::user()->roleUser)
			@if (Auth::user()->roleUser->role_id == '1')
				@include('partials/sidebar')
			@elseif (Auth::user()->roleUser->role_id == '2')
				@include('partials/provider-sidebar')
			@elseif (Auth::user()->roleUser->role_id == '4')
				@include('partials/customer-sidebar')
			@endif
		@else
			@include('partials/sidebar')
		@endif
		{{-- BEGIN: Content --}}
		<div class="content-overlay"></div>
		<div class="app-content content">
			<div class="content-wrapper container-xxl p-0">
				@yield('content')
			</div>
		</div>
		{{-- End: Content --}}
		<div class="sidenav-overlay"></div>
		<div class="drag-target"></div>
		{{-- BEGIN: Footer --}}
		<footer class="footer footer-light  footer-static">
			<p class="clearfix mb-0">
				<span class="float-md-start d-block d-md-inline-block mt-25">
					Copyright &copy;
					<a class="ms-25" href="" target="_blank">Eclipse Scheduling</a>,
					<span class="d-none d-sm-inline-block">All rights Reserved</span>
				</span>
			</p>
		</footer>
		<button class="btn btn-primary btn-icon scroll-top" type="button">
			<i data-feather="arrow-up"></i>
		</button>
		{{-- END: Footer --}}
		{{-- Updated by Sohail Asghar to comment out un-useful panels and modals file --}}
		{{-- @include('partials/panels') --}}
		{{-- @include('partials/modals') --}}
		{{-- End of update by Sohail Asghar --}}
		@include('modals/global/savebrowserpopup')

        @include('Chatify::pages.single-chat')
		<script src="/tenant-resources/js/jquery-3.6.3.min.js"></script>
		<script src="/tenant-resources/js/bootstrap.bundle.min.js"></script>
		<script src="/tenant-resources/js/moment.min.js"></script>
		<script src="/tenant-resources/js/daterangepicker.min.js"></script>
		<script src="/tenant-resources/js/unison-js.min.js"></script>
		<script src="/tenant-resources/js/perfect-scrollbar.min.js"></script>
		<script src="/tenant-resources/js/feather-icons.min.js"></script>
		<script src="/tenant-resources/js/app.js"></script>
		<script src="/tenant-resources/js/app-menu.js"></script>
		<script src="/tenant-resources/js/app-new.js"></script>
		<script src="/tenant-resources/js/select2.min.js"></script>
		<script src="/tenant-resources/js/sweetalert.min.js"></script>
		<script src="/tenant-resources/js/common.js"></script>
		{{-- <script src="/tenant-resources/js/app-theme.js" ></script> --}}

		<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAANwmAq3UQc8j5GkJgzF9AglzF7XLfPxI&libraries=places&language=en-AU"></script>
		@auth
		@if(!request()->cookie('savedBrowser'))

			<script>
			//openSaveBrowserPopup();
			</script>
		@endif
		@endauth
		@livewireScripts
		@powerGridScripts
		<script src="/tenant-resources/js/alpinejs-3.11.1.js" defer></script>
		@stack('scripts')



		<script src="/tenant-resources/js/select2-functions.js"></script>
	</body>
</html>
