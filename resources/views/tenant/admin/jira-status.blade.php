@extends('layouts.tenant', ['title' => 'Jira Status'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.admin.jira-status', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection