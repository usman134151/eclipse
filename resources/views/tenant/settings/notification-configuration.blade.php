@extends('layouts.tenant', ['title' => 'Notification Configuration'])

@section('content')
	{{-- BEGIN: Content --}}
	    @livewire('app.admin.notification-configuration', ['showForm'=>$showForm,'type'=>$type,'title'=>$title])
	{{-- End: Content --}}
@endsection