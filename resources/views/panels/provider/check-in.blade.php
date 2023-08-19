<x-off-canvas show="offcanvasOpenCheckIn">
    <x-slot name="title">Check-In # {{ $bookingNumber }}</x-slot>
    @if ($booking_id)
        @livewire('app.common.panels.provider.check-in', ['booking_id' => $booking_id])
    @endif
</x-off-canvas>
