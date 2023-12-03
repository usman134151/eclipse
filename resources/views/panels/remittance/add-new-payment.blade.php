{{-- Add New Payment - Start --}}
<x-off-canvas show="addNewPayment" :allowBackdrop="false" style="z-index: 2147483647;">
	<x-slot name="title">Add New Payment </x-slot>
    @livewire('app.common.panels.remittance.add-new-payment')
</x-off-canvas>
