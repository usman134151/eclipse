@extends('layouts.tenant', ['title'=>'Industries'])

@section('content')
    {{-- BEGIN: Content --}}
    <div class="app-content content">
        @livewire('app.common.industries', ['showForm'=>$showForm])
    </div>
    {{-- End: Content --}}
@endsection