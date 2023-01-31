@extends('layouts.tenant', ['title' => 'customer'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.common.customer', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection