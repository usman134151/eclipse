@extends('layouts.tenant', ['title' => 'Blog'])

@section('content')
    <!-- BEGIN: Content-->
    @livewire('app.common.specialization',['showForm'=>$showForm])
    <!-- End: Content-->
@endsection
