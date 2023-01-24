@extends('layouts.tenant', ['title' => 'Blog'])

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
 @livewire('app.common.specialization',['showForm'=>$showForm])
    </div>
    <!-- End: Content-->
@endsection