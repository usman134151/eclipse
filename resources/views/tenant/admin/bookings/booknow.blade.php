@extends('layouts.tenant', ['title' => 'Create Assignment'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.admin.bookings.booknow')
	{{-- End: Content --}}
@endsection