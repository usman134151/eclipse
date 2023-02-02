@extends('layouts.tenant', ['title' => 'Setting'])

@section('content')
	{{-- BEGIN: Content --}}
	<div class="app-content content">
		
		@livewire('app.common.forms.profile', ['showForm'=>$showForm])
	</div>
	{{-- End: Content --}}
@endsection