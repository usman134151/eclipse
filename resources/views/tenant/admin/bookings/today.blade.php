@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.admin.bookings.today', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection