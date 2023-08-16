@extends('layouts.tenant', ['title' => 'Departments'])

@section('content')
    @livewire('app.common.department', ["showForm"=>false,'status'=>1])
@endsection
