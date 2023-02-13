@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.admin.bookings.unassigned', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection