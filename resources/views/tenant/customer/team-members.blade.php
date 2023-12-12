@extends('layouts.tenant', ['title' => 'Team Members'])

@section('content')
    {{-- BEGIN: Content --}}
	@livewire('app.customer.team-members', ['showProfile'=>$showProfile])
	{{-- End: Content --}}
@endsection
