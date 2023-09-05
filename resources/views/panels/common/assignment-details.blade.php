<x-off-canvas show="assignmentDetails" style="z-index: 1056;">
    <x-slot name="title">Assignment Detail ({{ $bookingNumber }}) </x-slot>
    @if ($booking_id)
        @livewire('app.common.panels.assignment-details')
    @endif
</x-off-canvas>
