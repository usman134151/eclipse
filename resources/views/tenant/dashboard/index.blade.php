@extends('layouts.tenant', ['title' => 'Dashboard'])

@section('content')
{{-- BEGIN: Content --}}
@livewire('app.common.dashboard')
{{-- End: Content --}}
@endsection
