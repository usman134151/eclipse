@extends('layouts.tenant', ['title' => 'Add Team'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.common.forms.customer-form', ['isCustomer'=>true])
	{{-- End: Content --}}
@endsection
