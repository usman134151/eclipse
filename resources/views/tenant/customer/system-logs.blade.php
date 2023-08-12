@extends('layouts.tenant', ['title' => 'System Logs'])

@section('content')
@livewire('app.common.system-logs')
                                    	{{-- @livewire('app.common.lists.logs',['record_id'=>Auth::id(),'record_type'=>'user']) --}}

@endsection
