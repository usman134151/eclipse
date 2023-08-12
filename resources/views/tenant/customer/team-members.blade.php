@extends('layouts.tenant', ['title' => 'Departments'])

@section('content')
    <x-coming-soon moduleName="Team Members"></x-coming-soon>

    {{-- @livewire('app.common.department', ["showForm"=>false,'status'=>1]) --}}
@endsection
