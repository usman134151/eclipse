@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.common.bookings.invitations', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection