@extends('layouts.tenant', ['title' => 'Provider'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.common.provider', ['showForm'=>$showForm,'status'=>$status])
	{{-- End: Content --}}
@endsection