@extends('layouts.tenant', ['title' => 'Roles & Permissions'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.admin.role-permission', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection