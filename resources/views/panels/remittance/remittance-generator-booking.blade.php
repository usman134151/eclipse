{{-- Remittance Generator Booking - Start --}}
<x-off-canvas show="remittanceGeneratorBooking" size="fullscreen">
    <x-slot name="title">Remittance Generator Booking</x-slot>
    @if ($providerId)
        @livewire('app.common.panels.remittance.remittance-generator-booking', ['providerId'=>$providerId])
    @endif
</x-off-canvas>
@include('modals.objection-remittance')
@include('modals.accept-remittance')
{{-- Remittance Generator Booking - End --}}

<script>
    window.addEventListener('open-provider-remittances', function(event) {
        var providerId = event.detail.providerId;
        Livewire.emit('openRemittanceGeneratorPanel', providerId);
    });
</script>
