@extends('layouts.tenant', ['title' => 'Service Category'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.admin.accommodation.service-category', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection