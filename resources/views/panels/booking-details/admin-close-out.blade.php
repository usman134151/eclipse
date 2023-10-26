{{-- BEGIN: CloseOut Booking Off Canvas --}}
<x-off-canvas show="closeOutBooking" size="fullscreen">
    <x-slot name="title">Close Booking # {{ $booking->booking_number }}
    </x-slot>
    @if ($closeOut)
        @livewire('app.common.panels.booking-details.booking-close-out', ['booking' => $booking])
    @endif
    <x-slot name="outsideBody">

        <div class="col-12 justify-content-center form-actions d-flex gap-3">
            <button type="button" class="btn btn-outline-dark rounded"
                x-on:click="closeOutBooking = !closeOutBooking">Cancel</button>
                <button type="" x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });"
                    x-on:close-out-booking.window="closeOutBooking = !closeOutBooking" wire:click="$emit('closeBooking')"
                    class="btn btn-primary rounded">Save</button>
        </div>
    </x-slot>

</x-off-canvas>
<script>
    window.addEventListener('open-booking-close-out', function(event) {
        var close_out = event.detail.close_out;
        Livewire.emit('openBookingCloseOut', close_out);


    });
</script>
{{-- END: CloseOut Booking Off Canvas --}}
