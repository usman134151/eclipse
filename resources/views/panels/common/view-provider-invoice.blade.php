<x-off-canvas show="providerInvoiceDetails" style="z-index: 1057;">
    <x-slot name="title">Provider Invoice Details</x-slot>
    @if ($invoiceId)
        @livewire('app.common.panels.provider-invoice-details', ['invoiceId' => $invoiceId])
    @endif
</x-off-canvas>
<script>
    window.addEventListener('provider-invoice-details', function(event) {
        var invoiceId = event.detail.invoiceId;
        Livewire.emit('openProviderInvoiceDetails', invoiceId);
    });
</script>
