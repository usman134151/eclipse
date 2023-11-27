{{-- Remittance Generator Booking - Start --}}
<x-off-canvas show="remittanceGeneratorBooking" size="fullscreen">
    <x-slot name="title">Remittance Generator Booking</x-slot>
    @if ($providerId)
        @livewire('app.common.panels.remittance.remittance-generator-booking', ['providerId'=>$providerId])
    @endif
    <div class="row justify-content-center mb-2">
        <div class="col-lg-3">
            <a x-on:create-remittance-panel.window="issueRemittance = true"  wire:click="$emit('addToRemittance')" href="#" class="btn btn-primary rounded w-100">Add to
                Remittance</a>
        </div>
    </div>
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
