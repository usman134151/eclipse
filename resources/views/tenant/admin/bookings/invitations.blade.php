@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.admin.bookings.invitations', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection