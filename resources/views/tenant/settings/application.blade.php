@extends('layouts.tenant', ['title' => 'Application settings'])

@section('content')

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Configuration.
        </h3>
        <p class="mt-1 text-sm leading-5 text-gray-600">
          Settings for your application.
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{ route('tenant.settings.application.configuration') }}" method="POST">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div>
              <label for="company" class="block text-sm font-medium leading-5 text-gray-700">Company name
              </label>
              <div class="mt-1 relative rounded-md shadow-sm">
                <input id="company" name="company" value="{{ old('company', tenant('company')) }}" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="My company" />
              </div>
            </div>

            @error('company')
              <p class="text-red-500 text-xs mt-4">
                  {{ $message }}
              </p>
            @enderror
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
        <h3 class="text-lg font-medium leading-6 text-gray-900">Domains
        </h3>
        <p class="mt-1 text-sm leading-5 text-gray-600">
          Manage your application's domains.
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
                    {{ __('Password') }}
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
                <label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700">
                    {{ __('Confirm password') }}
                </label>
                <div class="mt-1 rounded-md">
                    <input id="password_confirmation" type="password" required class="shadow-sm appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password_confirmation') border-red-500 @enderror" name="password_confirmation" />
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
