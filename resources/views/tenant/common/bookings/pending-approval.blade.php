@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.common.bookings.pending-approval', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection