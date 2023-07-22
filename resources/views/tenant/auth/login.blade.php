@extends('layouts.tenant-login')

@section('content')
<style>
    /* Apply 100% width and height to the video container */
    .video-container {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }

    /* Style the video to cover the container */
    .video-container video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Style the content to be right-aligned with background color */
    .video-content {
      position: absolute;
      top: 50%;
      right: 10px; /* Updated to align content to the right */
      transform: translateY(-50%);
      background-color: rgba(255, 255, 255, 0.7) !important; /* Set your desired background color and opacity here */
      padding: 10px; /* Add padding as needed */
      border-radius: 10px; /* Optional: Add border-radius for rounded corners */
    }
  </style>
</head>
<body>
  <div class="video-container">
    <!-- Replace 'your-video.mp4' with the path to your video file -->
    <video autoplay muted loop>
      <source src="/tenant-resources/video/welcome.mp4" type="video/mp4">
      <!-- Add fallback content if video playback fails -->
      Your browser does not support the video tag.
    </video>
	
    <div class="video-content d-flex col-lg-4 align-items-center bg-white px-2 p-lg-5" x-data="{ show: true }">
      <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
		<div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
			<h1 class="card-title fw-normal mb-3">
				Welcome to Eclipse Scheduling!
			</h1>
			<p class="card-text mb-4">
				Please sign into your account to start exploring.
			</p>
			{{-- Show auth errors --}}
			@if($errors->has('loginError'))
			<div class="alert px-3 py-3 alert-danger d-flex align-items-center" role="alert">
				<svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
					<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
				</svg>
				<div>
					{{ $errors->first('loginError') }}
				</div>
			</div>
			{{-- <p class='mt-2 text-sm text-red-600'>{{$errors->first('loginError')}}</p> --}}
			@endif

			@if (session('message'))
				<div class="alert alert-success alert-dismissible fade show p-3" role="alert">
					{{ session('message') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif

			<form method="POST" action="{{ route('tenant.login') }}" name="loginForm" onsubmit="return handleValidation()">
				@csrf
				<div class="mb-3">
					<label class="form-label" for="email">Email</label>
					<input class="form-control" id="email" type="text" name="email" placeholder="Email address" aria-describedby="email" autofocus="" tabindex="1"/>
					<x-form.input-error for="email" />
					<span class='mt-2 mb-0 d-block invalid-feedback' id='emailError' role="alert"></span>
				</div>
				
				<div class="mb-3">
					<div class="d-flex justify-content-between">
						<label class="form-label" for="login-password">
							Password
						</label>
						<a href="/forgot-password">
							<small>
								Forgot Password?
							</small>
						</a>
					</div>
					<div class="input-group input-group-merge form-password-toggle">
						<input class="form-control form-control-merge" :type="show ? 'password' : 'text'" id="password" type="password" name="password" placeholder="············" aria-describedby="password" tabindex="2" />
						<span class="input-group-text cursor-pointer">
							{{-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
								<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
								<circle cx="12" cy="12" r="3"></circle>
							</svg> --}}
							<svg class="d-block" width="20" height="20" fill="none" @click="show = !show" :class="{'d-none': !show, 'd-block':show }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
								<path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
							</svg>
							
							<svg class="d-none" width="20" height="20" fill="none" @click="show = !show" :class="{'d-block': !show, 'd-none':show }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
								<path fill="currentColor" d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"></path>
							</svg>
						</span>
					</div>
					<span class='mt-2 mb-0 d-block invalid-feedback' id='passError' role="alert"></span>
				</div>
				<div class="mb-3">
					<div class="form-check">
						<input class="form-check-input" id="remember" name="remember" type="checkbox" tabindex="3" />
						<label class="form-check-label" for="remember">
							Remember Me
						</label>
					</div>
				</div>
				<button class="btn btn-primary w-100 mb-1" name="login" id="login" type="submit" tabindex="4">
					Login
					{{-- Login --}}
				</button>
				<button style="display:none" class="btn btn-primary w-100 mb-1 otpF" id="resendOtp" type="button" tabindex="4">
					Resend OTP
				</button>
				<a style="display:none" class="otpF" href="">
					Not you? Log in as a different user
				</a>
			</form>
		</div>
	</div>
	{{-- Left Text --}}
	

	</div>
	{{-- /Left Text --}}
	
	{{-- Login --}}

	{{-- /Login --}}
@endsection
@push('scripts')
	<script>
		function handleValidation()
		{
			let email = document.loginForm.email.value;
			let password = document.loginForm.password.value;
			let emailError = passError = true;
			
			if (email.trim() == '') {
				document.getElementById('emailError').innerHTML = 'The email field is required';
			}
			else
			{
				document.getElementById('emailError').innerHTML = '';
				emailError = false;
			}

			if (password.trim() == '') {
				document.getElementById('passError').innerHTML = 'The password field is required';
			}
			else
			{
				document.getElementById('passError').innerHTML = '';
				passError = false;
			}

			if((emailError || passError) == true)
			{
				return false;
			}
			else
			{
				return true;
			}
		}
	</script>
@endpush