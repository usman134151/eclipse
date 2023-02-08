@extends('layouts.tenant', ['title' => 'Quotes'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.admin.quotes')
	{{-- End: Content --}}
@endsection