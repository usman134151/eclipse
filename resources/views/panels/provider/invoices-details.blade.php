<x-off-canvas show="invoicesDetails" size="fullscreen">
    <x-slot name="title">Generate Invoice</x-slot>
    @if (count($bookingIds))
        @livewire('app.common.panels.provider.invoices-details', ['bookingIds'=>$bookingIds])
    @endif
</x-off-canvas>
<script>
    window.addEventListener('open-provider-invoice-details', function(event) {
        var bookingIds = event.detail.bookingIds;
        Livewire.emit('openInvoiceDetailsPanel', bookingIds);
    });
</script>
