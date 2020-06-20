@extends('layouts.tenant', ['title' => 'My account'])

@section('content')

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal information.
        </h3>
        <p class="mt-1 text-sm leading-5 text-gray-600">
          This information will be displayed publicly.
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{ route('tenant.settings.user.personal') }}" method="POST">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div>
              <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Name
              </label>
              <div class="mt-1 relative rounded-md shadow-sm">
                <input id="name" name="name" value="{{ old('name', auth()->user()->name) }}" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="John Doe" />
              </div>
            </div>

            @error('name')
              <p class="text-red-500 text-xs mt-4">
                  {{ $message }}
              </p>
            @enderror
            
            <div class="mt-4">
              <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email
              </label>
              <div class="mt-1 relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                  </svg>
                </div>
                <input id="email" name="email" value="{{ old('email', auth()->user()->email) }}" class="form-input block w-full pl-10 sm:text-sm sm:leading-5" placeholder="you@example.com" />
              </div>

              @error('email')
              <p class="text-red-500 text-xs mt-4">
                  {{ $message }}
              </p>
            @enderror
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue focus:bg-indigo-500 active:bg-indigo-600 transition duration-150 ease-in-out">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="hidden sm:block">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Password
        </h3>
        <p class="mt-1 text-sm leading-5 text-gray-600">
          Change your password. <a class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150" href="{{ route('tenant.password.request') }}">Forgot your current password?</a>
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{ route('tenant.settings.user.password') }}" method="POST">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="">
                <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                    {{ __('Current password') }}
                </label>
                <div class="mt-1 rounded-md">
                    <input id="password" type="password" required class="shadow-sm appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-500 @enderror" name="password" />

                    @error('password')
                    <p class="text-red-500 text-xs mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
            </div>

            <div class="mt-4">
                <label for="new_password" class="block text-sm font-medium leading-5 text-gray-700">
                    {{ __('New password') }}
                </label>
                <div class="mt-1 rounded-md">
                    <input id="new_password" type="password" required class="shadow-sm appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('new_password') border-red-500 @enderror" name="new_password" />

                    @error('new_password')
                    <p class="text-red-500 text-xs mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
            </div>

            <div class="mt-4">
                <label for="new_password_confirmation" class="block text-sm font-medium leading-5 text-gray-700">
                    {{ __('Confirm password') }}
                </label>
                <div class="mt-1 rounded-md">
                    <input id="new_password_confirmation" type="password" required class="shadow-sm appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('new_password_confirmation') border-red-500 @enderror" name="new_password_confirmation" />
                </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue focus:bg-indigo-500 active:bg-indigo-600 transition duration-150 ease-in-out">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection