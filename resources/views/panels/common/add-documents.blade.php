{{-- BEGIN: Add Document Off Canvas --}}
<x-off-canvas show="addDocuments" size="fullscreen" style="z-index: 10569;">
    <x-slot name="title">Add Document</x-slot>
   
        @livewire('app.common.panels.add-documents',['booking_id'=>$booking_id])
</x-off-canvas>
{{-- END: Add Document Off Canvas --}}
