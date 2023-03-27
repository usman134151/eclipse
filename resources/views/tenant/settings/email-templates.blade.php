@extends('layouts.tenant', ['title' => 'Email Templates'])

@section('content')
	{{-- BEGIN: Content --}}

	@livewire('app.common.email-templates', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection
