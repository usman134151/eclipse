@extends('layouts.tenant')

@section('content')
  {{-- BEGIN: Content --}}
    @livewire('app.admin.company-main', ['showForm'=>$showForm,'showProfile'=>$showProfile])
  {{-- End: Content --}}
@endsection