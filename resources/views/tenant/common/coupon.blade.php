@extends('layouts.tenant', ['title'=>'Coupons'])

@section('content')
    {{-- BEGIN: Content --}}
    @livewire('app.common.coupon', ['showForm'=>$showForm])
    {{-- End: Content --}}
@endsection