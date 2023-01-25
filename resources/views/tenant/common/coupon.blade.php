@extends('layouts.tenant', ['title'=>'Coupons'])

@section('content')
    {{-- BEGIN: Content --}}
    <div class="app-content content">
        @livewire('app.common.coupon', ['showForm'=>$showForm])
    </div>
    {{-- End: Content --}}
@endsection