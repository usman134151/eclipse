@extends('layouts.tenant', ['title' => 'Quickbook'])

@section('content')
	@if($showForm)
		@livewire('app.admin.quickbook-setup')
	@else
		@livewire('app.admin.quickbook')
	@endif
@endsection