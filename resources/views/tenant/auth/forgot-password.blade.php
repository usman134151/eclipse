@extends('layouts.tenant-login')

@section('content')


	
	
	<div class="login-form">
		<div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
			<h2 class="card-title fw-bold mb-2">Forgot Password?</h2>
			<p class="card-text mb-4">
				Enter your email and we'll send you instructions to reset your password
			</p>
			<p class="login-card-description otpF" style="display:none;">Enter Your One-time Password</p>
			<form id="forgotPassword-form" method="POST" action="{{ url('forgot-password') }}">
				{{ csrf_field() }}
				<input type="hidden" class="is_login" name="is_login" value="0">
				<div class="mb-1 loginF">
					<label class="form-label" for="email">Email</label>
					<input
						type="text"
						name="email"
						id="email"
						class="form-control @error('email') border-danger border-2 @enderror"
						required
						aria-required="true"
						placeholder="Email address"
						autofocus
						value="{{ $email ?? old('email') }}"
					>
					@if ($errors->has('email'))
						<span class="d-inline-block invalid-feedback fw-semibold mt-2">
							{{ $errors->first('email') }}
						</span>
					@endif
				</div>
				<button name="login" id="login" type="submit" class="btn btn-primary w-100 mt-2">
					Send Password Reset Link
				</button>
			</form>
			<p class="text-center mt-2">
				<a href="{{ route('tenant.login') }}">
					Back to login
				</a>
			</p>
		</div>
	</div>
@endsection
