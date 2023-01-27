@extends('layouts.tenant', ['title' => 'Accommodations'])

@section('content')
    {{-- BEGIN: Content --}}
    <div class="app-content content">
        @livewire('app.common.accommodation', ['showForm'=>$showForm])
    </div>
    {{-- End: Content --}}
@endsection