{{-- BEGIN: CloseOut Booking Off Canvas --}}
<x-off-canvas show="closeOutBooking" >
    <x-slot name="title">Close Booking # {{ $booking->booking_number }}
    </x-slot>
    @if ($closeOut)
        @livewire('app.common.panels.booking-details.booking-close-out', ['booking' => $booking])
    @endif
</x-off-canvas>
<script>
    window.addEventListener('open-booking-close-out', function(event) {
        var close_out = event.detail.close_out;
        Livewire.emit('openBookingCloseOut', close_out);


    });
</script>
{{-- END: CloseOut Booking Off Canvas --}}
