@extends('layouts.tenant-login')

@section('content')
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
@endsection
