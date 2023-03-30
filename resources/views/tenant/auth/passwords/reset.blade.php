@extends('layouts.tenant-login')

@section('content')
	{{-- Left Text - Start --}}
	<div class="d-none d-lg-flex col-lg-8 align-items-center justify-content-center p-5">
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		<lottie-player src="/video/video.json" background="transparent" speed="1" class="w-75 h-75" loop autoplay></lottie-player>
	</div>
	{{-- Left Text - End --}}
	
	<div class="d-flex col-lg-4 align-items-center bg-white px-2 p-lg-5">
		<div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
			<h2 class="card-title fw-bold mb-2">Reset Your Password</h2>
			<form id="reset-password-form" method="POST" action="{{ route('tenant.reset.password.post') }}">
				@csrf
				<input type="hidden" name="token" value="{{ $token }}">
				<div class="mb-3">
					<label class="form-label" for="email">
						{{ __('E-Mail Address') }}:
					</label>
					<input id="email" type="email" class="form-control @error('email') border-danger border-2 @enderror" name="email" value="{{ $email ?? old('email') }}" required aria-required="true" autocomplete="email" autofocus>
					
					@if ($errors->has('email'))
					<span class="d-inline-block invalid-feedback fw-semibold mt-2">
						{{ $errors->first('email') }}
					</span>
					@endif
	
					{{-- @error('email')
					<p class="text-red-500 text-xs italic mt-4">
						{{ $message }}
					</p>
					@enderror --}}
				</div>
				
				<div class="mb-3">
					<label class="form-label" for="password">
						{{ __('Password') }}:
					</label>
					
					<input
						id="password"
						type="password"
						class="form-control @error('password') border-danger border-2 @enderror"
						name="password"
						required
						aria-required="true"
						autocomplete="new-password"
					>

					@if ($errors->has('password'))
					<span class="d-inline-block invalid-feedback fw-semibold mt-2">
						{{ $errors->first('password') }}
					</span>
					@endif
					
					{{-- @error('password')
					<p class="text-red-500 text-xs italic mt-4">
						{{ $message }}
					</p>
					@enderror --}}
				</div>
				
				<div class="mb-3">
					<label class="form-label" for="password-confirm">
						{{ __('Confirm Password') }}:
					</label>
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required aria-required="true" autocomplete="new-password">
					
					@if ($errors->has('password_confirmation'))
					<span class="d-inline-block invalid-feedback fw-semibold mt-2">
						{{ $errors->first('password_confirmation') }}
					</span>
					@endif
				</div>
				
				<div class="mb-3">
					<button class="btn btn-primary w-100 mb-1" type="submit">
						Reset Password
					</button>
				</div>
			</form>
		</div>
	</div>

	<?php /*
	<div class="container mx-auto">
		<div class="flex flex-wrap justify-center">
			<div class="w-full max-w-sm">
				<div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

					<div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
						{{ __('Reset Password') }}
					</div>

					<form class="w-full p-6" method="POST" action="{{ route('password.update') }}">
						@csrf

						<input type="hidden" name="token" value="{{ $token }}">

						<div class="flex flex-wrap mb-6">
							<label for="email" class="block text-gray-700 text-sm font-bold mb-2">
								{{ __('E-Mail Address') }}:
							</label>

							<input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

							@error('email')
								<p class="text-red-500 text-xs italic mt-4">
									{{ $message }}
								</p>
							@enderror
						</div>

						<div class="flex flex-wrap mb-6">
							<label for="password" class="block text-gray-700 text-sm font-bold mb-2">
								{{ __('Password') }}:
							</label>

							<input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

							@error('password')
								<p class="text-red-500 text-xs italic mt-4">
									{{ $message }}
								</p>
							@enderror
						</div>

						<div class="flex flex-wrap mb-6">
							<label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
								{{ __('Confirm Password') }}:
							</label>

							<input id="password-confirm" type="password" class="form-input w-full" name="password_confirmation" required autocomplete="new-password">
						</div>

						<div class="flex flex-wrap">
							<x-button class="w-full" type="submit">Reset Password</x-button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	*/ ?>
@endsection
