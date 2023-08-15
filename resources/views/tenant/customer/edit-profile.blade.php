@extends('layouts.tenant', ['title' => 'My Profile'])

@section('content')
    {{-- using same base component for provider and customer --}}
    @livewire('app.provider.edit-my-profile',['user_id'=>Auth::id(),'userType'=>'customer'])
    
@endsection
