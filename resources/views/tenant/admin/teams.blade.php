@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.admin.teams', ['showForm'=>$showForm,'showProfile'=>$showProfile])
 <!-- End: Content-->
@endsection