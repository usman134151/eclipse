@extends('layouts.tenant', ['title' => 'Notifications'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.common.notifications', ['showForm'=>$showForm])

	{{-- End: Content --}}
@endsection