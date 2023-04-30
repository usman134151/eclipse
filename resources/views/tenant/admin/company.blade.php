@extends('layouts.tenant')

@section('content')
  {{-- BEGIN: Content --}}
    @livewire('app.admin.company-main', ['showForm'=>$showForm])
  {{-- End: Content --}}
@endsection