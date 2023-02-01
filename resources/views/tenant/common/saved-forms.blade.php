@extends('layouts.tenant', ['title'=>'Saved Forms'])

@section('content')
    {{-- BEGIN: Content --}}
    @livewire('app.common.saved-forms', ['showForm'=>$showForm])
    {{-- End: Content --}}
@endsection