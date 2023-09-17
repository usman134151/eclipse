@extends('layouts.tenant')

@section('content')
{{-- BEGIN: Content --}}
@livewire('app.common.bookings.booking-list', ['bookingType'=>$bookingType,'showHeader'=>true])
{{-- End: Content --}}
@endsection