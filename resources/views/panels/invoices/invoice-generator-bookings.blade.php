{{-- Invoice generator bookings - Start --}}
<x-off-canvas show="invoiceGeneratorbookings" :allowBackdrop="false" size="fullscreen">
    <x-slot name="title">Create Invoice</x-slot>
    @if ($company_id > 0)
        @livewire('app.common.panels.invoices.invoice-generator-bookings',['company_id'=>$company_id])
    @endif
        <x-slot name="outsideBody">

     <div class="justify-content-center d-flex my-4">


            <a x-on:open-invoice-panel.window="createInvoices = true" wire:click="$emit('openInvoicePanel')" href="#"
                class="btn btn-primary rounded">Create invoice</a>
        </div>
        </x-slot>

</x-off-canvas>
<script>
    window.addEventListener('refresh-company-pending-bookings', function(event) {
        var company_id = event.detail.company_id;

        Livewire.emit('openCompanyPendingBookings', company_id);
    });
</script>
{{-- Invoice generator bookings - End --}}
