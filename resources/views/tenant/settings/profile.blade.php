@extends('layouts.tenant', ['title' => 'Setting'])

@section('content')
	{{-- BEGIN: Content --}}
<<<<<<< HEAD
	<div class="app-content content">
		
		@livewire('app.common.forms.profile', ['showForm'=>$showForm])
	</div>
=======
        <p>livewire component</p>
		@livewire('app.common.profile', ['showForm'=>$showForm])
>>>>>>> 06ff60288e0726eb98e9ebe1ea93b9f18a257df6
	{{-- End: Content --}}
@endsection