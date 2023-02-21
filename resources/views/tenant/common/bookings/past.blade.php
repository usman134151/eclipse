@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.common.bookings.past', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection