@extends('layouts.tenant', ['title'=>'All Admin Staff Teams'])

@section('content')
    {{-- BEGIN: Content --}}
    @livewire('app.common.all-admin-staff-teams', ['showForm'=>$showForm])
    {{-- End: Content --}}
@endsection