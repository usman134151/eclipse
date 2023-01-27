@extends('layouts.tenant', ['title' => 'customer'])

@section('content')
	{{-- BEGIN: Content --}}
	<div class="app-content content">
		@livewire('app.common.customer', ['showForm'=>$showForm])
	</div>
	{{-- End: Content --}}
@endsection