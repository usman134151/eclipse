@extends('layouts.central')

@section('content')

<div class="flex max-w-2xl">
<div class="lg:w-5/12">
    <img src="{{asset('images/img-content-1.jpg')}}" alt="img-content-1" class="w-full">
</div>
<div class="lg:w-7/12">
    <h1 class="font-semibold text-4xl mb">Eclipse Scheduling</h1>
    <p class="leading-normal mb-4">Our intuitive, secure system improves the efficiency by which your staff, customers, and providers manage language interpreting and accommodation services. Eclipse Scheduling was envisioned, designed, and developed by a team of professional interpreters and accommodation professionals with more than 50-years of industry experience.</p>
    <p class="leading-normal mb-4">After years of the industry feeling pressure to accommodate out-dated and overly-restrictive scheduling platforms, the Eclipse Scheduling team recognized how operations could be improved through innovations that can only be recognized by professionals actively working in the field.</p>
    <p class="leading-normal">Our friendly software curators lead you through an in-depth demo of Eclipse's comprehensive management system, specially customized around your agency's operation needs. Our friendly software curators lead you through an in-depth demo of Eclipse's comprehensive management system, specially customized around your agency's operation needs</p>
</div>

<div class="flex justify-center mt-4">
    <x-button as="a" href="{{ route('central.tenants.login') }}">Login</x-button>
    <x-button class="ml-2" as="a" href="{{ route('central.tenants.register') }}">Register</x-button>
</div>
</div>

@endsection