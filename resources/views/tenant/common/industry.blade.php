@extends('layouts.tenant', ['title'=>'Industries'])

@section('content')
    {{-- BEGIN: Content --}}
    @livewire('app.common.industries', ['showForm'=>$showForm])
    {{-- End: Content --}}
@endsection