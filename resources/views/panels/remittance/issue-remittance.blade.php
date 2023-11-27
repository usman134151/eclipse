{{-- Issue Remittance - Start --}}
<x-off-canvas show="issueRemittance" :allowBackdrop="false" size="fullscreen">
    <x-slot name="title">Issue Remittance</x-slot>
    @if(count($selectedBookings)>0)
    @livewire('app.common.panels.remittance.issue-remittance',['selectedRows'=>$selectedBookings, 'providerId'=>$providerId])
    @endif
</x-off-canvas>
<script>
    window.addEventListener('refresh-issue-remittances', function(event) {
        var ids = event.detail.ids;
        Livewire.emit('openIssueRemitancesPanel', ids);
    });
</script>

{{-- Issue Remittance - End --}}
