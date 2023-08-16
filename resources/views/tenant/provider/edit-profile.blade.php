@extends('layouts.tenant', ['title' => 'Provider Profile'])

@section('content')
    @livewire('app.provider.edit-my-profile',['user_id'=>Auth::id()])

@endsection