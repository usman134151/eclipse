@extends('layouts.tenant', ['title' => 'Team Members'])

@section('content')
    @livewire('app.customer.company-team-members',['company_id'=>Auth::user()->company_name])
@endsection
