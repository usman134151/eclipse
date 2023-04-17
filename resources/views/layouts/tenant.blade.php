<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Eclipse Scheduling</title>
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
		<link rel="stylesheet" href="/tenant/css/select2.min.css"/>
		<link rel="stylesheet" href="/tenant/css/pikaday.css">
		<link rel="stylesheet" href="/tenant/css/dark-layout.css">
		<link rel="stylesheet" href="/tenant/css/style.css">
		<link rel="stylesheet" href='/tenant/css/bootstrap-icons.css'/>
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

		<script src="/tenant/js/jquery-3.6.3.min.js"></script>
		<script src="/tenant/js/bootstrap.bundle.min.js"></script>
		<script src="/tenant/js/moment.min.js"></script>
		<script src="/tenant/js/daterangepicker.min.js"></script>
		<script src="/tenant/js/unison-js.min.js"></script>
		<script src="/tenant/js/perfect-scrollbar.min.js"></script>
		<script src="/tenant/js/feather-icons.min.js"></script>
		<script src="/tenant/js/chosen.jquery.min.js"></script>
		<script src="/tenant/js/tinymce.min.js"></script>
		<script src="/tenant/js/app.js"></script>
		<script src="/tenant/js/app-menu.js"></script>
		<script src="/tenant/js/app-new.js"></script>
		<script src="/tenant/js/select2.min.js"></script>
		<script src="/tenant/js/sweetalert.min.js"></script>
		<script src="/tenant/js/common.js"></script>

		@auth
		@if(!request()->cookie('savedBrowser'))

			<script>
			//openSaveBrowserPopup();
			</script>
		@endif
		@endauth
		@livewireScripts
		@powerGridScripts
		<script src="/tenant/js/alpinejs-3.11.1.js" defer></script>
		@stack('scripts')
		<script>
    window.addEventListener('update-url', function(event) {
      pushStateToUrl(event.detail.url);
    });
	window.addEventListener('refreshSelects', function(event) {

	  $(".chosen-select").chosen();
    });
	function pushStateToUrl(url) {
  history.pushState(null, null, url);
}
</script>
	</body>
</html>
