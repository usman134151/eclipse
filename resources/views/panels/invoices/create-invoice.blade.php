{{-- Create Invoice - Start --}}
<x-off-canvas show="createInvoices" :allowBackdrop="false" style="z-index: 2037;">
    <x-slot name="title">Create Invoice </x-slot>
    @if (count($selectedBookingsIds)>0)
        @livewire('app.common.panels.invoices.create-invoice', ['selectedBookingsIds' => $selectedBookingsIds,'exclude_notif'=>$exclude_notif])
    @endif
</x-off-canvas>
<script>
    window.addEventListener('refresh-create-invoice', function(event) {
        var ids = event.detail.ids;
        var exclude_notif = event.detail.exclude_notif;
        Livewire.emit('openCreateInvoice', ids, exclude_notif);
    });
</script>

{{-- Create Invoice - End --}}
