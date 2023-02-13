@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.admin.bookings.past', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection