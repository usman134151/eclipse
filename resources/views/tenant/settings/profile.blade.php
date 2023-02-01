@extends('layouts.tenant', ['title' => 'Setting'])

@section('content')
	{{-- BEGIN: Content --}}
        <p>livewire component</p>
		@livewire('app.common.profile', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection