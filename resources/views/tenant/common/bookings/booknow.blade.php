@extends('layouts.tenant', ['title' => 'Create Assignment'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.common.bookings.booknow')
	{{-- End: Content --}}
@endsection