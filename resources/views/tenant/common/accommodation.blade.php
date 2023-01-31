@extends('layouts.tenant', ['title' => 'Accommodations'])

@section('content')
    {{-- BEGIN: Content --}}
    @livewire('app.common.accommodation', ['showForm'=>$showForm])
    {{-- End: Content --}}
@endsection