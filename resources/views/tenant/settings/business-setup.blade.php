@extends('layouts.tenant', ['title' => 'Setting'])

@section('content')
	{{-- BEGIN: Content --}}
		@livewire('app.common.forms.business-setup', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection