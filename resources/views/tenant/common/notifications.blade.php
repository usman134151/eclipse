@extends('layouts.tenant', ['title' => 'Notifications'])

@section('content')
	{{-- BEGIN: Content --}}
	{{-- @livewire('app.common.notifications', ['showForm'=>$showForm]) --}}
	<x-coming-soon></x-coming-soon>
	{{-- End: Content --}}
@endsection