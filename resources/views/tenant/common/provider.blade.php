@extends('layouts.tenant', ['title' => 'Provider'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.common.provider', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection