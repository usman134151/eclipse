@extends('layouts.tenant', ['title'=>'Coupon'])

@section('content')
    {{-- BEGIN: Content --}}
    <div class="app-content content">
        @livewire('app.common.coupon', ['showForm'=>$showForm])
    </div>
    {{-- End: Content --}}
@endsection