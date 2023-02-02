@extends('layouts.tenant', ['title' => 'Tenants'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.admin.tenants', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection