{{-- Remittance Generator Booking - Start --}}
<x-off-canvas show="remittanceGeneratorBooking" size="fullscreen">
	<x-slot name="title">Remittance Generator Booking</x-slot>
	@livewire('app.common.panels.remittance.remittance-generator-booking')
</x-off-canvas>
@include('modals.objection-remittance')
@include('modals.accept-remittance')
{{-- Remittance Generator Booking - End --}}
