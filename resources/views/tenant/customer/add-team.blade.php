@extends('layouts.tenant', ['title' => 'Add Team'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.common.forms.customer-form')
	{{-- End: Content --}}
@endsection
