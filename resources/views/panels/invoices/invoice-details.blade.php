<x-off-canvas show="invoiceDetails" :allowBackdrop="false" size="fullscreen">
    <x-slot name="title">Invoice Details</x-slot>
    @if ($invoice_id)
        @livewire('app.common.panels.invoice-details', ['invoice_id' => $invoice_id])
    @endif
</x-off-canvas>
<script>
    window.addEventListener('refresh-invoice-details', function(event) {
        var invoice_id = event.detail.invoice_id;
        Livewire.emit('openInvoiceDetails', invoice_id);
    });
</script>
