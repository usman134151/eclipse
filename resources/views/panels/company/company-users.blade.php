{{-- Company Users Off Canvas - Start --}}
<x-off-canvas show="companyUsers"  :allowBackdrop="false" size="fullscreen" >
	<x-slot name="title">{{$cu_companyLabel}} Users</x-slot>
        @if($cu_companyId>0)

        @livewire('app.common.company-users',['companyId'=>$cu_companyId,'companyLabel'=>$cu_companyLabel])
         
        @endif
        
</x-off-canvas>

<script>
  window.addEventListener('refresh-company-users', function(event) {
    console.log('in user browser event',event.detail.companyLabel);
    var companyId = event.detail.companyId;
    var companyLabel=event.detail.companyLabel;

    Livewire.emit('refreshCompanyUsers', companyId, companyLabel); 
  });

</script>
{{-- Company Profile Off Canvas - End --}}