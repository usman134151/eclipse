@extends('layouts.tenant', ['title' => 'Manage Availability'])

@section('content')
    @livewire('app.provider.availability',['user_id'=>Auth::id()])
@endsection
