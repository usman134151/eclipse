@extends('layouts.tenant', ['title' => 'Admin Teams'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.admin.team.admin-team', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection