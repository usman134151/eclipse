@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
 <div class="app-content content ">
    <p>livewire component</p>
  @livewire('app.admin.bookings.drafts')
  </div>
 <!-- End: Content-->
@endsection