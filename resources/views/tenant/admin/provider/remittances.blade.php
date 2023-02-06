@extends('layouts.tenant', ['title' => 'Remittances'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.admin.provider.remittance')
	{{-- End: Content --}}
@endsection