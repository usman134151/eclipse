@extends('layouts.tenant', ['title' => 'Departments'])

@section('content')

    @livewire('app.common.department', ['isSupervisor'=>true,"showForm"=>false,'status'=>1])
@endsection
