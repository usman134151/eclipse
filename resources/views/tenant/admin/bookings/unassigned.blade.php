@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
 <div class="app-content content ">
    <p>livewire component</p>
  @livewire('app.admin.bookings.unassigned')
  </div>
 <!-- End: Content-->
@endsection