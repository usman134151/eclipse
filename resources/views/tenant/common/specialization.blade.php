@extends('layouts.tenant', ['title' => 'Blog'])

@section('content')
    <!-- BEGIN: Content-->
    @livewire('app.common.specializationmain',['showForm'=>$showForm])
    <!-- End: Content-->
@endsection
