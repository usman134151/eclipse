@extends('layouts.tenant')

@section('content')
{{-- BEGIN: Content --}}
@livewire('app.common.bookings.booking-list', ['bookingType'=>$bookingType])
{{-- End: Content --}}
@endsection