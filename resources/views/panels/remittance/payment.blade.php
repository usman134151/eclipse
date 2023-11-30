{{-- Remittance Generator Booking - Start --}}
<x-off-canvas show="payment" size="fullscreen">
    <x-slot name="title">Remittances</x-slot>
    @if ($providerId)
        @livewire('app.common.panels.remittance.payment',['providerId'=>$providerId])
    @endif
</x-off-canvas>
<script>
    window.addEventListener('refresh-remittances-payment', function(event) {
        var providerId = event.detail.providerId;
        Livewire.emit('openRemittancePaymentsPanel', providerId);
    });
</script>

{{-- Remittance Generator Booking - End --}}
