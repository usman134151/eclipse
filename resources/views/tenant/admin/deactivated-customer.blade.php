@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.admin.deactivated-customer',["status"=>0])
 <!-- End: Content-->
@endsection