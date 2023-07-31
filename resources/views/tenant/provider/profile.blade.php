@extends('layouts.tenant', ['title' => 'Provider Profile'])

@section('content')
@livewire('app.common.provider-details',['user'=>Auth::user()])
@endsection