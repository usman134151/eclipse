@extends('layouts.central')

@section('content')

<div class="text-center leading-loose">
    <h1 class="font-bold text-4xl">Eclipse Scheduling</h1>
    <p>Our intuitive, secure system improves the efficiency by which your staff, customers, and providers manage language interpreting and accommodation services. Eclipse Scheduling was envisioned, designed, and developed by a team of professional interpreters and accommodation professionals with more than 50-years of industry experience.</p>
    <p>After years of the industry feeling pressure to accommodate out-dated and overly-restrictive scheduling platforms, the Eclipse Scheduling team recognized how operations could be improved through innovations that can only be recognized by professionals actively working in the field.</p>
    <p>Our friendly software curators lead you through an in-depth demo of Eclipse's comprehensive management system, specially customized around your agency's operation needs. Our friendly software curators lead you through an in-depth demo of Eclipse's comprehensive management system, specially customized around your agency's operation needs</p>
</div>

<div class="flex justify-center mt-4">
    <x-button as="a" href="{{ route('central.tenants.login') }}">Login</x-button>
    <x-button class="ml-2" as="a" href="{{ route('central.tenants.register') }}">Register</x-button>
</div>

@endsection