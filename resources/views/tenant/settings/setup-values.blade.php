@extends('layouts.tenant', ['title'=>'Setup Values'])

@section('content')
    {{-- BEGIN: Content --}}
    @livewire('app.common.setup', ['showForm'=>$showForm])
    {{-- End: Content --}}
@endsection