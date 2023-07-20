
{{-- Sign & Upload Document Off Canvas - Start --}}
<x-off-canvas show="pendingCredentials">

	        <x-slot name="title">{{$credentialLabel}} Document</x-slot>
            @if($credentialId>0)

              @livewire('app.common.panels.pending-credentials',['user_id'=>$userid, 'document_id'=>$credentialId])
            @endif
        </x-off-canvas>
<script>
  window.addEventListener('open-credential', function(event) {
    console.log('in credential browser event', event.detail.credentialLabel);
    var credentialId = event.detail.credentialId;
    var credentialLabel=event.detail.credentialLabel;

    Livewire.emit('OpenProviderCredential', credentialId, credentialLabel); 
  });

</script>

{{-- Sign & Upload Document Off Canvas - End --}}