@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
  @livewire('app.admin.bookings.drafts', ['bookingType'=>$bookingType])
 <!-- End: Content-->
@endsection