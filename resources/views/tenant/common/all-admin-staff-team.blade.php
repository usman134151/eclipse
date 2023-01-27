@extends('layouts.tenant', ['title'=>'All Admin Staff Teams'])

@section('content')
    {{-- BEGIN: Content --}}
    <div class="app-content content">
        @livewire('app.common.all-admin-staff-teams', ['showForm'=>$showForm])
    </div>
    {{-- End: Content --}}
@endsection