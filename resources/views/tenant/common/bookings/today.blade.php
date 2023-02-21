@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.common.bookings.today', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection