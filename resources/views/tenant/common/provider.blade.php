@extends('layouts.tenant', ['title' => 'Provider'])

@section('content')
	{{-- BEGIN: Content --}}
	<div class="app-content content">
		@livewire('app.common.provider', ['showForm'=>$showForm])
	</div>
	{{-- End: Content --}}
@endsection