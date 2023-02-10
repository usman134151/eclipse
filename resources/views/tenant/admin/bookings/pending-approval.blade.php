@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.admin.bookings.pending-approval', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection