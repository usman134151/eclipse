@extends('layouts.tenant', ['title'=>'savedforms'])

@section('content')
    {{-- BEGIN: Content --}}
    <div class="app-content content">
        @livewire('app.common.savedforms', ['showForm'=>$showForm])
    </div>
    {{-- End: Content --}}
@endsection