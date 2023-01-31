@extends('layouts.tenant')

@section('content')

<!-- BEGIN: Content-->
 <div class="app-content content ">
    <p>livewire component</p>
  @livewire('app.admin.provider-screenings')
  </div>
 <!-- End: Content-->
@endsection