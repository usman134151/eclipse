@extends('layouts.tenant', ['title' => 'Blog'])

@section('content')
    <!-- BEGIN: Content-->
    @livewire('app.common.tags',['showForm'=>$showForm])
    <!-- End: Content-->
@endsection
