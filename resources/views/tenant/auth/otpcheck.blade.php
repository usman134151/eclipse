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
          <p class="card-text mb-4">Enter Your One-time Password.</p>
          
        {{-- Display error and success messages --}} 
        @if(session()->has('message'))
            <div class="alert alert-success mb-1 rounded-0" role="alert">
            <div class="alert-body">
                {{ session()->get('message') }}
            </div>
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger mb-1 rounded-0" role="alert">
            <div class="alert-body">
                {{ session()->get('error') }}
            </div>
            </div>
        @endif
            
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
            
          <form method="POST" action="{{ route('tenant.otpverify') }}">
            @csrf
        
            <div class="mb-1 otpF">
                <label for="password" class="form-label">OTP</label>
                <input type="text" name="otp" autocomplete="off" class="form-control otp @error('otp') is-invalid @enderror" placeholder="OTP" required>
                @error('otp')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <button class="btn btn-primary w-100 mb-1" name="login" id="login" type="submit" tabindex="4">Login</button>
            <a href="{{ route('tenant.resendotp') }}" class="btn btn-primary w-100 mb-1 otpF" id="resendOtp" type="button" tabindex="4">Resend OTP</a>
            <a class="otpF" href="javascript:void();" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Not you? Log in as a different user</a>
          </form>
        </div>
      </div>
      <!-- /Login-->
 
@endsection
