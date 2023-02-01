@extends('layouts.tenant', ['title' => 'Setting'])

@section('content')
	{{-- BEGIN: Content --}}
		@livewire('app.common.forms.change-password', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection