@php
    $videoUrl = 'https://www.youtube.com/embed/epSdx8YXwNw?si=1zRdQJd90vL4WXe8';
@endphp

<div x-data="{ associateCompanies:false, associateCustomer:false, associateDepartment:false,associateservice:false}">
    {{--  commented due to creating error --}}
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    @if($showForm)
    @livewire('app.admin.accommodation.forms.add-service') {{-- Show Add / Edit Form --}}
    @else
    @include('panels.services.associate-companies')
	@include('panels.services.associate-customers')
    @include('panels.services.associate-department')
     @include('panels.services.associated-service') 
    {{-- associateservice commented due to creating error --}}
    <!-- BEGIN: Content-->
    <!-- BEGIN: Header-->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">Associate Service</h1>
                    <div class="float-lg-end float-md-end float-sm-start mb-0">
                            @include('layouts.video-guide')					
                         </div>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- End of update by Shanila --}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Services
                            </li>
                            <li class="breadcrumb-item">
                                Associate Service
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                             @livewire('app.common.lists.service-catagories', key(Str::random(1)))


                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Floating Label Form section end -->
    </div>
    <!-- End: Content-->
    @endif
    <script>
        function updateVal(attrName,val){
        console.log(attrName+'called for'+val);
        if(val!=''){
            Livewire.emit('updateVal', attrName, val);
        }


        }

	function updateRates(rate){
       var rateToggle=['inperson-rate','virtual-rate','','phone-rate','teleconference-rate'];

       if (rate.is(':checked')) {
        $("." + rateToggle[rate.val() - 1]).removeClass('d-none').addClass('d-block');
        $(".rates-alert").addClass('d-none');
       } else {
        $("." + rateToggle[rate.val() - 1]).removeClass('d-block').addClass('d-none');
       }

	}
	function updateBilling(billing){
       var billingToggle=['hour-rate','day-rate','','fixed-rate'];
       $(".billing-rates").addClass('d-none');
       
       if (billing.is(':checked')) {
       
        $("." + billingToggle[billing.val() - 1]).removeClass('d-none');
       }

	}   

    function divToggle(divId,display){
        $('#'+divId).attr('style',"display:"+display);
    }

    function showNotifications(checkBox,showDiv){
      
        if(checkBox.prop('checked')==true){
            $('#'+showDiv).removeClass("hidden");
            $('#'+showDiv).addClass("shown");
            
        }
        else{
            $('#'+showDiv).addClass("hidden");
            $('#'+showDiv).removeClass("shown");
        }
    }
    

 

</script>
</div>
