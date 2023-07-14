@extends('layouts.tenant', ['title' => 'Setting'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.admin.staff.admin-staff', ['showForm'=>$showForm,'showProfile'=>$showProfile])
	{{-- End: Content --}}
@endsection