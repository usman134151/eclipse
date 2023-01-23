@extends('layouts.tenant', ['title' => 'Blog'])

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
 @livewire('dashboard')
    </div>
    <!-- End: Content-->
@endsection