{{-- Invoice generator bookings - Start --}}
<x-off-canvas show="invoiceDetailsPanel" :allowBackdrop="false" size="fullscreen">
	<x-slot name="title">Invoice Details</x-slot>
  @livewire('app.common.panels.invoice-details')
		<!-- /Total -->
</x-off-canvas>
{{-- Invoice generator bookings - End --}}