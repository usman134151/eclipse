@extends('layouts.tenant', ['title' => 'Setting'])

@section('content')
	{{-- BEGIN: Content --}}
	<div class="app-content content">
        <p>livewire component</p>
		@livewire('app.common.sms-templates', ['showForm'=>$showForm])
	</div>
	{{-- End: Content --}}
@endsection