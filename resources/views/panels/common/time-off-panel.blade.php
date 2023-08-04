
{{-- Time-Off Off Canvas - Start --}}
<x-off-canvas show="timeOffSlots">
	<x-slot name="title">Submit Time Off</x-slot>
  @livewire('app.common.panels.time-off-slots',['provider_id'=>$userid])
</x-off-canvas>
{{-- Time-Off Off Canvas - End --}}