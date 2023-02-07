@extends('layouts.tenant', ['title' => 'Setting'])

@section('content')
	{{-- BEGIN: Content --}}
		@livewire('app.common.sms-templates', ['showForm'=>$showForm])
	{{-- End: Content --}}
@endsection