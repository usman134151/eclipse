@extends('layouts.tenant', ['title' => 'Leads'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.admin.leads')
	{{-- End: Content --}}
@endsection