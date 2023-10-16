{{-- Invoice generator bookings - Start --}}
<x-off-canvas show="invoiceGeneratorbookings" :allowBackdrop="false" size="fullscreen">
    <x-slot name="title">Create Invoice</x-slot>
    @if ($company_id > 0)
        @livewire('app.common.panels.invoices.invoice-generator-bookings', ['company_id' => $company_id])
    @endif
    <x-slot name="outsideBody">

        <div class="justify-content-center w-100 d-flex my-1">
            <div class="w-100 bg-muted py-2">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-between">
                            <div class="fw-bold text-sm">Total</div>
                            <div class="fw-bold text-sm text-lg-end">$<span id="total-price"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-1">
            <a x-on:open-invoice-panel.window="createInvoices = true" wire:click="$emit('openInvoicePanel')"
                href="#" class="btn btn-primary rounded">Create invoice</a>

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
