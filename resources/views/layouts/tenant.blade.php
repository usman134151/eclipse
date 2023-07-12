<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Eclipse Scheduling</title>
		<link rel="stylesheet" href="/tenant-resources/css/all.min.css"/>
		<link rel="stylesheet" href="/tenant-resources/css/font-awesome.min.css" type="text/css"/>
		<link rel="stylesheet" href="/tenant-resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="/tenant-resources/css/perfect-scrollbar.css">
			<link rel="stylesheet" href="/tenant-resources/css/colors.css">
		<link rel="stylesheet" href="/tenant-resources/css/components.css">
		<link rel="stylesheet" href="/tenant-resources/css/bootstrap-extended.css">
		<link rel="stylesheet" href="/tenant-resources/css/vertical-menu.css">
		<link rel="stylesheet" href="/tenant-resources/css/daterangepicker.css">
		<link rel="stylesheet" href="/tenant-resources/css/select2.min.css"/>
		<link rel="stylesheet" href="/tenant-resources/css/pikaday.css">
		<link rel="stylesheet" href="/tenant-resources/css/dark-layout.css">
		<link rel="stylesheet" href="/tenant-resources/css/style.css">
		<link rel="stylesheet" href='/tenant-resources/css/bootstrap-icons.css'/>
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
		<script>
    window.addEventListener('update-url', function(event) {
      pushStateToUrl(event.detail.url);
    });
	document.addEventListener('refreshSelects', function(event) {
		
		let el = $('.select2')
		initSelect()
		
		Livewire.hook('message.processed', (message, component) => {
			initSelect()
		})


		function initSelect () {
			
			
			el.select2({
				placeholder: '{{__('Select your option')}}',
				allowClear: !el.attr('required'),
			});
			el.on('change', function (e) {
				if($(this).attr('id')!='tags-select'){
					let attrName = $(this).attr('id');
					updateVal(attrName,  $(this).select2("val"));
				}
				else{
						$('#tags-holder').val( $(this).select2("val"));
					updateVal('tags',$('#tags-holder').val());
				}
            });
		}
		$('.js-single-date').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			autoApply: true
		});
		$('.js-single-date').val('');
		$('.js-single-date').attr("placeholder","MM/DD/YYYY");
		$('.js-single-date').on('apply.daterangepicker', function(ev, picker) {
        console.log($(this).val());
        updateVal($(this).attr('id'),  $(this).val());

    });
		$('.js-select-day').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			autoApply: true
		});
		$('.js-select-day').val('');
		$('.js-select-day').attr("placeholder","Select Day");

			
	});
	function pushStateToUrl(url) {
  history.pushState(null, null, url);
}
       

        
window.addEventListener("livewire:load", () => {
	
		let el = $('.select2')
		initSelect()

		Livewire.hook('message.processed', (message, component) => {
			initSelect()
		})


		function initSelect () {
			
			el.select2({
				placeholder: '{{__('Select your options')}}',
				allowClear: !el.attr('required'),
			})
			el.on('change', function (e) {
				if($(this).attr('id')!='tags-select'){
					let attrName = $(this).attr('id');
					updateVal(attrName,  $(this).select2("val"));
				}
				else{
					
					$('#tags-holder').val( $(this).select2("val"));
					updateVal('tags',$('#tags-holder').val());

				}

            });
			$('#tags-select').select2({
        tags: true,
        createTag: function (params) {
          return {
            id: params.term,
            text: params.term,
            isNew: true
          };
        }
      });

      $('#mySelect').on('select2:select', function (e) {
        var selectedOption = e.params.data;

        if (selectedOption.isNew) {
          // A new value was entered
          console.log('New value:', selectedOption.text);
        }
      });
		}
		
	})
	$('.js-select-date').on('apply.daterangepicker', function(ev, picker) {
   
});
</script>
<script>

	$(document).on("keypress", "input.js-search-by-keyword", function(e){
        if(e.which == 13){
            $('#searchByKeywordModal').modal('show');
        }
      });
      $(document).on("keypress", "input.js-search-by-no", function(e){
        if(e.which == 13){
            $('#searchByNoModal').modal('show');
        }
      });
	  $(document).ready(function() {
      $('#tags-select').select2({
        tags: true,
        createTag: function (params) {
          return {
            id: params.term,
            text: params.term,
            isNew: true
          };
        }
      });

      $('#mySelect').on('select2:select', function (e) {
        var selectedOption = e.params.data;

        if (selectedOption.isNew) {
          // A new value was entered
          console.log('New value:', selectedOption.text);
        }
      });
    });

</script>

	</body>
</html>
