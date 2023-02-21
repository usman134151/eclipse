@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.common.bookings.upcoming', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection