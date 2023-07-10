@extends('layouts.tenant', ['title' => 'customer'])

@section('content')
	{{-- BEGIN: Content --}}
	@livewire('app.common.customer', ['showForm'=>$showForm,'showProfile'=>$showProfile,'status'=>$status])
	{{-- End: Content --}}
@endsection