@extends('layouts.tenant', ['title' => 'Blog'])

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
 @livewire('app.dashboard')
    </div>
    <!-- End: Content-->
@endsection