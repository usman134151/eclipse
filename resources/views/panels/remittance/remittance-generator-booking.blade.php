{{-- Remittance Generator Booking - Start --}}
<x-off-canvas show="remittanceGeneratorBooking" size="fullscreen">
    <x-slot name="title">Remittance Generator Booking</x-slot>
    @if ($providerId)
        @livewire('app.common.panels.remittance.remittance-generator-booking', ['providerId' => $providerId])
    @endif
    <x-slot name="outsideBody">
        <div class="bg-muted py-2 my-2">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="d-flex justify-content-between">
                        <div class="fw-bold text-sm">Booking Total</div>
                        <div class="fw-bold text-sm text-lg-end"> $<span id="total-price"></span></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center mb-2">
            <div class="col-lg-3">
                <a x-on:create-remittance-panel.window="issueRemittance = true" wire:click="$emit('addToRemittance')"
                    href="#" class="btn btn-primary rounded w-100">Add to
                    Remittance</a>
            </div>
        </div>
    </x-slot>
</x-off-canvas>
{{-- Remittance Generator Booking - End --}}

<script>
    window.addEventListener('open-provider-remittances', function(event) {
        var providerId = event.detail.providerId;
        Livewire.emit('openRemittanceGeneratorPanel', providerId);
    });
</script>
