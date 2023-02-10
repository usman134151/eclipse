@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.admin.bookings.upcoming', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection