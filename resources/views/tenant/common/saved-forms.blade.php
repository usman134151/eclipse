@extends('layouts.tenant', ['title'=>'Saved Forms'])

@section('content')
    {{-- BEGIN: Content --}}
    <div class="app-content content">
        @livewire('app.common.saved-forms', ['showForm'=>$showForm])
    </div>
    {{-- End: Content --}}
@endsection