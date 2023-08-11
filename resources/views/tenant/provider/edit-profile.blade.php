@extends('layouts.tenant', ['title' => 'Provider Profile'])

@section('content')
		@livewire('app.common.forms.provider-form',['isProvider'=>true]) {{-- Show Add / Edit Form With Provider Restrictions --}}
@endsection