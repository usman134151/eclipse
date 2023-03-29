{{-- BEGIN: Admin Booking Details Off Canvas --}}
<x-off-canvas show="bookingDetails" size="fullscreen">
	<x-slot name="title">Booking Details</x-slot>	
	@livewire('app.common.bookings.booking-details')
</x-off-canvas>
{{-- END: Admin Booking Details Off Canvas --}}