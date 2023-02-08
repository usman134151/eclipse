@extends('layouts.tenant', ['title'=>'Department'])

@section('content')
    {{-- BEGIN: Content --}}
    @livewire('app.common.department', ['showForm'=>$showForm])
    {{-- End: Content --}}
@endsection