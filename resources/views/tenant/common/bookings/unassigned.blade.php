@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.common.bookings.unassigned', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection