@extends('layouts.tenant')

@section('content')


    <div class="w-8/12 flex flex-column justify-center items-center bg-[#f8f8f8]">
      <div class="w-7/12">
        <lottie-player src="{{asset('video/video.json')}}" background="transparent" speed="1" classname="w-full" loop="" autoplay="true"></lottie-player>
      </div>
    </div>
    <div class="w-4/12 flex flex-col justify-center px-14">
      <h1>Welcome to Eclipse Scheduling!</h1>
      <p class="mb-5">Please sign into your account to start exploring.</p>
      <form method="POST" action="{{ route('tenant.login') }}">
            @csrf
            <div>
                <x-form.label for="email" value="Email address"/>

                <div class="mt-1 rounded-md">
                    <x-form.input name="email" id="email" type="email" required name="email" value="{{ old('email', request()->query('email')) }}" autofocus/>

                    <x-form.input-error for="email" />
                </div>
            </div>
            
            <div class="mt-6">
                <x-form.label for="password" value="Password"/>

                <div class="mt-1 rounded-md">
                    <x-form.input id="password" type="password" required name="password"/>

                    <x-form.input-error for="password" />
                </div>
            </div>
            
            <div class="mt-6 flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                    <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
                        {{ __('Remember me') }}
                    </label>
                </div>
                
                @if (Route::has('tenant.password.request'))
                <div class="text-sm leading-5">
                    <a href="{{ route('tenant.password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
            </div>
            @endif
            
            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <x-button class="w-full" type="submit">Login</x-button>
                </span>
            </div>
        </form>
    </div>
  

<?php /*
<div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
        {{ __('Login') }}
    </h2>
    @if (Route::has('tenant.register'))
    <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
        Or
        <a href="{{ route('tenant.register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
            register a new account.
        </a>
    </p>
    @endif
</div>
*/ ?>

<?php /*
<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <form method="POST" action="{{ route('tenant.login') }}">
            @csrf
            <div>
                <x-form.label for="email" value="Email address"/>

                <div class="mt-1 rounded-md">
                    <x-form.input name="email" id="email" type="email" required name="email" value="{{ old('email', request()->query('email')) }}" autofocus/>

                    <x-form.input-error for="email" />
                </div>
            </div>
            
            <div class="mt-6">
                <x-form.label for="password" value="Password"/>

                <div class="mt-1 rounded-md">
                    <x-form.input id="password" type="password" required name="password"/>

                    <x-form.input-error for="password" />
                </div>
            </div>
            
            <div class="mt-6 flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                    <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
                        {{ __('Remember me') }}
                    </label>
                </div>
                
                @if (Route::has('tenant.password.request'))
                <div class="text-sm leading-5">
                    <a href="{{ route('tenant.password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
            </div>
            @endif
            
            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <x-button class="w-full" type="submit">Login</x-button>
                </span>
            </div>
        </form>
        
    </div>
</div>
*/ ?>
@endsection
