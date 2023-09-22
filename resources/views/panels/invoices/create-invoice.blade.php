{{-- Create Invoice - Start --}}
<x-off-canvas show="createInvoices" :allowBackdrop="false" style="z-index: 2037;">
    <x-slot name="title">Create Invoice </x-slot>
    @if (count($selectedBookingsIds)>0)
        @livewire('app.common.panels.invoices.create-invoice', ['selectedBookingsIds' => $selectedBookingsIds])
    @endif
</x-off-canvas>
<script>
    window.addEventListener('refresh-create-invoice', function(event) {
        var ids = event.detail.ids;
        Livewire.emit('openCreateInvoice', ids, );
    });
</script>

{{-- Create Invoice - End --}}
