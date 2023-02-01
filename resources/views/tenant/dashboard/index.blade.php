@extends('layouts.tenant', ['title' => 'Blog'])

@section('content')

    <!-- BEGIN: Content-->
 @livewire('app.dashboard')
    <!-- End: Content-->
@endsection