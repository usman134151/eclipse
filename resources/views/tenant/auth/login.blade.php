@extends('layouts.tenant-login')

@section('content')

      <!-- Left Text-->
      <div class="d-none d-lg-flex col-lg-8 align-items-center justify-content-center p-5">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> 
        <lottie-player src="video/video.json" background="transparent" speed="1" class="w-75 h-75" loop autoplay></lottie-player>
      </div>
      <!-- /Left Text-->
      <!-- Login-->
      <div class="d-flex col-lg-4 align-items-center bg-white px-2 p-lg-5">
        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-4 mx-auto">
          <h1 class="card-title fw-normal mb-3">Welcome to Eclipse Scheduling! </h1>
          <p class="card-text mb-4">Please sign into your account to start exploring.</p>

          {{-- Show auth errors --}}

          @if($errors->has('loginError'))
          <p class='mt-2 text-sm text-red-600'>{{$errors->first('loginError')}}</p>
          @endif

          <form method="POST" action="{{ route('tenant.login') }}">
            @csrf
            <div class="mb-3">
              <label class="form-label" for="email">Email</label>
              <input class="form-control" id="email" type="text" name="email" placeholder="Email address" aria-describedby="email" autofocus="" tabindex="1" />
              <x-form.input-error for="email" />

            </div>
            <div class="mb-3">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="login-password">Password</label><a href=""><small>Forgot Password?</small></a>
              </div>
              <div class="input-group input-group-merge form-password-toggle">
                <input class="form-control form-control-merge" id="password" type="password" name="password" placeholder="············" aria-describedby="password" tabindex="2" />
                <span class="input-group-text cursor-pointer">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                </span>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" id="remember" name="remember" type="checkbox" tabindex="3" />
                <label class="form-check-label" for="remember"> Remember Me</label>
              </div>
            </div>
            <button class="btn btn-primary w-100 mb-1" name="login" id="login" type="submit" tabindex="4">Login</button>
            <button style="display:none" class="btn btn-primary w-100 mb-1 otpF" id="resendOtp" type="button" tabindex="4">Resend OTP</button>
            <a style="display:none" class="otpF" href="">Not you? Log in as a different user</a>
          </form>
        </div>
      </div>
      <!-- /Login-->
 
@endsection
