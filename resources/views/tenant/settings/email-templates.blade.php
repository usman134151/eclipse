@extends('layouts.tenant', ['title' => 'Email Templates'])

@section('content')
	{{-- BEGIN: Content --}}
	<x-coming-soon></x-coming-soon>
	{{-- @livewire('app.common.email-templates', ['showForm'=>$showForm]) --}}
	{{-- End: Content --}}
@endsection