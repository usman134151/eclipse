@extends('layouts.tenant', ['title' => 'Setting'])

@section('content')
	{{-- BEGIN: Content --}}
	
		@livewire('app.common.forms.profile', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection