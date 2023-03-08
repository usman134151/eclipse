@extends('layouts.tenant')

@section('content')
@livewire('app.provider.bookings.booking-list', ['bookingType'=>$bookingType])
@endsection