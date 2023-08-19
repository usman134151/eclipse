<x-off-canvas show="offcanvasOpenCheckOut">
    <x-slot name="title">Check-Out # {{ $bookingNumber }}</x-slot>
    @if ($booking_id)
        @livewire('app.common.panels.provider.check-out', ['booking_id' => $booking_id])
    @endif
</x-off-canvas>
