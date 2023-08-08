{{-- BEGIN: Add Document Off Canvas --}}
<x-off-canvas show="addDocuments" size="fullscreen">
    <x-slot name="title">Add Document</x-slot>
    @if($booking_id>0)
        @livewire('app.common.panels.add-documents',['booking_id',$booking_id])
    @endif
</x-off-canvas>
{{-- END: Add Document Off Canvas --}}
