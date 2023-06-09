@extends('layouts.tenant', ['title' => 'customer'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.common.customer', ['showForm'=>$showForm,'status'=>$status])
	{{-- End: Content --}}
@endsection