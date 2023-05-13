{{-- Create Invoice - Start --}}
<x-off-canvas show="createInvoices" :allowBackdrop="false" style="z-index: 2147483647;">
	<x-slot name="title">Create Invoice</x-slot>
	@livewire('app.common.panels.invoices.create-invoice')
</x-off-canvas>
{{-- Create Invoice - End --}}