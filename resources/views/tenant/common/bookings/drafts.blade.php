@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.common.bookings.drafts', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection