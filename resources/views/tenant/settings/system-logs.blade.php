@extends('layouts.tenant', ['title' => 'System Logs'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.common.system-logs', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection