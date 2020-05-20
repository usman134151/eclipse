@extends('layouts.central')

@section('content')

Login: <a href="{{ route('central.tenants.login') }}">Login</a> <br>
Register: <a href="{{ route('central.tenants.register') }}">Register</a>

@endsection