@extends('layouts.tenant')

@section('content')
  {{-- BEGIN: Content --}}
    @livewire('app.admin.company', ['showForm'=>$showForm])
  {{-- End: Content --}}
@endsection