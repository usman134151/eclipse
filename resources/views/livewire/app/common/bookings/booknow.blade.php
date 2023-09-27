<div  x-data="{addDocuments: false, assignProvider: false }" >
    @if(@$cantRequest)
    <div class="content-body">
        <div class="card">
            <div class="card-body">  <h3 class="text-align-center">Sorry you do not have rights to request service, please contact your company admin.</h3>
            </div>
        
        </div>    
    
</div>    
    @else

    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- BEGIN: Content-->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">Booking Form</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                   
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                     </a>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">
                                    Assignments
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Booking Form
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="card">
            <div class="card-body">
                <!-- BEGIN: Assignment Booking Form -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation" >
                        <button class="nav-link {{ $component == 'requester-info' ? 'active' : '' }}" wire:click="switch('requester-info')"
                            id="requester-info-tab" data-bs-toggle="tab" data-bs-target="#requester-info" type="button"
                            role="tab"  aria-controls="requester-info" aria-selected="true"><span class="number">1</span>
                            Requester Info</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'request-details' ? 'active' : '' }}" wire:click="switch('request-details')"
                            id="request-details-tab" data-bs-toggle="tab" data-bs-target="#request-details"
                            type="button" role="tab" aria-controls="request-details" aria-selected="false"><span
                                class="number">2</span> Request Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'payment-info' ? 'active' : '' }}" wire:click="switch('payment-info')"
                            id="payment-info-tab" data-bs-toggle="tab" data-bs-target="#payment-info" type="button"
                            role="tab" aria-controls="payment-info" aria-selected="false"><span class="number">3</span>
                            Payment Info</button>
                    </li>
                   <!-- <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'booking-summary' ? 'active' : '' }}" wire:click="switch('booking-summary')"
                            id="booking-summary-tab" data-bs-toggle="tab" data-bs-target="#booking-summary"
                            type="button" role="tab" aria-controls="booking-summary" aria-selected="false"><span
                                class="number">4</span> Booking Summary</button>
                    </li> -->
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    @if($component == 'requester-info')
                    <div class="tab-pane fade {{ $component == 'requester-info' ? 'active show' : '' }}"
                        id="requester-info" role="tabpanel" aria-labelledby="requester-info-tab" tabindex="0">
                       
     
                            <h2>Requester Information</h2>
                            <div>
    @error('slot')
        <div class="alert alert-danger p-2">
            {{ $message }}
        </div>
    @enderror
    
    <!-- Rest of your component markup -->
</div>

                            <div class="mb-4">
                                <label class="form-label form-label-highlighted">Permitted Scheduling Frequencies <i
                                        class="fa fa-question-circle text-muted" aria-hidden="true"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                                <div class="d-flex gap-3 flex-column flex-lg-row mb-0">
                                    @foreach($frequencies as $frequency)
                                        <div class="form-check form-check-highlighted">
                                            <input class="form-check-input" type="radio" wire:model="booking.frequency_id" id="frequency_id-{{$frequency['id']}}" name="frequency_id" value="{{$loop->index+1}}">
                                            <label class="form-check-label" for="frequency_id-{{$frequency['id']}}">{{$frequency['setup_value_label']}}</label>
                                        </div>    
                                    @endforeach
                                    @error('booking.frequency_id')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                    @enderror
                                </div>
                                @if($booking['frequency_id']=='1')
                                    <div class="mt-4 w-25 hidden">
                                @else
                                    <div class="mt-4 w-25">        
                                @endif           
                                                    <label class="form-label-sm" for="set_start_date">Frequency end at <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control form-control-md js-single-date" placeholder="Frequency End Date" aria-label="" aria-describedby="" wire:model.defer="booking.recurring_end_at" name="recurring_end_at" id="recurring_end_at">
                                    </div>
                                            
                                    @error('booking.frequency_id')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                    @enderror
                            </div>
                            <div class="row between-section-segment-spacing">
                                <div class="col-lg-6 mb-4 pe-lg-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label class="form-label" for="company-column">Company <span class="mandatory">*</span></label>
                                        <a href="#" class="fw-bold">
                                            <small>
                                                {{-- 
                                                <svg aria-label="Add New" class="me-1" width="20" height="21"
                                                    viewBox="0 0 20 21">
                                                    <use xlink:href="/css/common-icons.svg#add-new"></use>
                                                </svg>
                                                 --}}
                                            </small> 
                                        </a>
                                    </div>
                                    @if(!$isCustomer)
                                        {!! $setupValues['companies']['rendered'] !!}
                                    @else
                                     {!!$companyName!!}
                                    @endif    
                                    @error('booking.company_id')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                    @enderror
                                </div>
                              
                                <div class="col-lg-6 mb-4 ps-lg-5">
                                    <label class="form-label">Department</label>
                                    <div>
                                        <button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup"
                                            data-bs-toggle="modal" data-bs-target="#departmentModal" aria-label="Department">
                                           
                                            <svg aria-label=" Select Department" width="25" height="18"
                                                viewBox="0 0 25 18">
                                                <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                </use>
                                            </svg>
                                            
                                            Select Department
                                        </button>
                                    </div>
                                    <div>
                                        @if(count($departmentNames)>0)
                                            Selected Department(s) : 
                                            @foreach($departmentNames as $key=> $dept)
                                            {{$dept }}
                                            @if($key != count($departmentNames)-1) , @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                                  
                                <div class="col-lg-6 mb-4 pe-lg-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label class="form-label" for="requestor">Requester <span class="mandatory">*</span></label>
                                        <div class="form-check "  @if($isCustomer) style="display:none" @endif>
                                            
                                            <label class="form-check-label" for="addnewrequestor">Add New Requester  </label>
                                            <small>(coming soon)</small>
                                            <input  class="form-check-input show-hidden-content"
                                                id="addnewrequestor" name="addnewrequestor"
                                                type="checkbox" tabindex="">
                                            <div class="hidden-content">
                                                <div class="form-check-inline">
                                                    <button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                    data-bs-toggle="modal" data-bs-target="#addNewCustomer" aria-label="Requester">
                                                <svg aria-label="Requester" width="25" height="18"
                                                    viewBox="0 0 25 18">
                                                    <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                    </use>
                                                </svg>
                                                Requester
                                            </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <select class="form-select select2 mb-2" id="customer_id" name="customer_id" wire:model.defer="booking.customer_id" @if(!$selectRequestor) disabled @endif>
                                    <option value="0">Select User</option>
                                        @foreach($requesters as $requester)
                                        <option value="{{$requester->id}}">{{$requester->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-check form-check-inline mt-1">
                                        <input class="form-check-input" id="hide_request_from_providers" wire:model="booking.requester_information"
                                            name="hide_request_from_providers" type="checkbox" tabindex="" value="1" />
                                        <label class="form-check-label" for="HideRequesterInfofromProviders" value="1"><small>Hide
                                                Requester's Info from Providers</small></label>
                                    </div>
                                    @error('booking.customer_id')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                    @enderror
                                </div>
                                
                                <div class="col-lg-6 mb-4 ps-lg-5">
                                    <label class="form-label" >Industry <span class="mandatory">*</span></label>
                                    <div>
                                        <button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup"
                                            data-bs-toggle="modal" data-bs-target="#industryModal" aria-label="Industry">
                                           
                                            <svg aria-label=" Select Industry" width="25" height="18"
                                                viewBox="0 0 25 18">
                                                <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                </use>
                                            </svg>
                                            
                                            Select Industry
                                        </button>
                                    </div>
                                    <div>
                                        @if(count($industryNames)>0)
                                            Selected Industries : 
                                            @foreach($industryNames as $key=> $ind)
                                            {{$ind }}
                                            @if($key != count($industryNames)-1) , @endif
                                            @endforeach
                                        @endif
                                    </div>
                                    @error('selectedIndustries')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                    @enderror
                                </div>
                                @if($booking['requester_information']==1)
                                <div class="col-lg-6 mb-4 pe-lg-5">
                                    <label class="form-label" for="point-of-contact">Point of Contact </label>
                                    <input type="" class="form-control" placeholder="Enter Name" id="point-of-contact" name="point_of_contact" wire:model.defer="booking.contact_point">
                                </div>
                                <div class="col-lg-6 mb-4 ps-lg-5">
                                    <label class="form-label" for="ph-number">Phone Number</label>
                                    <input type="" class="form-control" placeholder="Enter Phone Number" id="ph-number" name="phone_number" wire:model.defer="booking.poc_phone">
                                </div>
                                @endif
                            </div>
                            <div class="row between-section-segment-spacing">
                                @if($assignedSupervisor!="checked")
                                <div class="col-lg-12" x-data="{ open: false }">
                                @else
                                <div class="col-lg-12" x-data="{ open: true }">
                                @endif    
                                    <div class="d-md-flex align-items-center mb-4 gap-3 gap-md-0">
                                        <div class="form-check form-switch form-switch-column mb-lg-0">
                                            <input class="form-check-input" type="checkbox" role="switch" id="assignedSupervisor" name="assignedSupervisor"
                                               {{$assignedSupervisor}} wire:model="assignedSupervisor" wire:click="refreshSelects()" value="checked">
                                        </div>
                                        <h3 class="mb-lg-0">Assigned Supervisor & Billing Manager</h3>
                                    </div>
                                    @if($assignedSupervisor!="checked" )
                                    <div class="row switch-toggle-content" style="display:none">
                                    @else
                                     <div class="row switch-toggle-content">
                                    @endif    
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="supervisor">Supervisor</label>
                                            <select class="form-select select2" id="supervisor" name="supervisor" wire:model.defer='booking.supervisor'>
                                            <option value="0">Select User</option>
                                                @foreach($supervisors as $supervisor)
                                                <option value="{{$supervisor->id}}">{{$supervisor->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-4 ps-lg-5">
                                            <label class="form-label" for="billing-manager">Billing Manager</label>
                                            <select class="form-select select2" id="billing_manager_id" name="billing_manager_id" wire:model.defer="booking.billing_manager_id">
                                            <option value="0">Select User</option>
                                                 @foreach($bManagers as $manager)
                                                    <option value="{{$manager->id}}">{{$manager->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row between-section-segment-spacing">
                                <!-- Service Information -->
                                <div class="col-lg-12 mb-4">
                                    <h2>Service Information</h2>
                                    <div class="row">
                                        <div class="col-lg-6 pe-lg-5 mb-4">
                                            <label class="form-label" for="booking-title">Booking Title</label>
                                            <input type="text" class="form-control" placeholder="Enter Booking Title" id="booking-title" wire:model.defer="booking.booking_title">
                                        </div>
                                    </div>

                                    <!-- Services Duplicate Block -->
                                    @foreach($services as $index=>$service)
                                    <div class="duplicate-block mb-3" >
                                        <div class="d-flex justify-content-between">
                                        <h3 class="text-primary">Services {{ $loop->index + 1 }}</h3>
                                        <div class="align-items-center gap-4">
                                        @if($index>=1)
                                            <a wire:click.prevent="removeServices({{$index}})" href="#" title="Delete" aria-label="Delete"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg class="delete-icon" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                </svg>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                        <div class="row mb-5">
                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                <label class="form-label">Accommodation <span
                                                        class="mandatory">*</span></label>
                                                        <select class="form-select select2 mb-2" id="accommodation_id_{{$index}}" name="accommodation_id_{{$index}}" wire:model="services.{{$index}}.accommodation_id">
                                                        <option value="0">Select Accommodation</option>  
                                                        @foreach($accommodations as $accommodation)
                                                            <option value="{{$accommodation['id']}}">{{$accommodation['name']}}</option>
                                                            
                                                        @endforeach
                                                        </select>
                                                        @error('services.' . $index . '.accommodation_id')
                                                             <span class="d-inline-block invalid-feedback mt-2">
                                                                Accommodation is required
                                                            </span>
                                                        @enderror
                                            </div>
                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                <label class="form-label" for="service">Service <span class="mandatory">*</span> <i
                                                        class="fa fa-question-circle text-muted" aria-hidden="true"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" ></i></label>
                                                        <select class="form-select select2 mb-2" id="services_{{$index}}" name="services_{{$index}}" wire:model="services.{{$index}}.services">
                                                        @if($services[$index]['accommodation_id'])
                                                            @foreach($accommodations as $accommodation)
                                                                @if($services[$index]['accommodation_id']==$accommodation['id'])
                                                                   
                                                                    <option value="">Select Service</option>
                                                                    @foreach($accommodation['services'] as $service_id)
                                                                        <option value="{{$service_id['id']}}">{{$service_id['name']}}</option>
                                                                    @endforeach
                                                                 
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                        </select>
                                                        @error('services.' . $index . '.services')
                                                             <span class="d-inline-block invalid-feedback mt-2">
                                                               Service is required
                                                            </span>
                                                        @enderror
                                            </div>
                                            @if($services[$index]['services'])
                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                <label class="form-label">Service Type <span
                                                        class="mandatory" >*</span></label>
                                                <div class="d-grid grid-cols-3">
                                                  
                                                       @php
                                                       // Convert the array to a Laravel Collection
                                                            $accommodationsCollection = collect($accommodations);

                                                            // Perform the search using the filter method

                                                            $serviceIdToFind = $services[$index]['services'];
                                                            $foundService = $accommodationsCollection
                                                                ->flatMap(fn($item) => $item['services'])
                                                                ->firstWhere('id', $serviceIdToFind);
    
                                                       @endphp
                                                      @foreach($serviceTypes as $key=>$serviceType)
                                                        @if(in_array($key,$foundService['service_type']))
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="serviceType-{{$serviceType['title']}}-{{$index}}" id="serviceType-{{$serviceType['title']}}-{{$index}}" wire:model="services.{{$index}}.service_types" value="{{$key}}" wire:click="updateServiceDefaults({{$index}},{{$key}})">
                                                            <label class="form-check-label" for="serviceType-{{$serviceType['title']}}-{{$index}}">
                                                                {{$serviceType['title']}}
                                                            </label>
                                                        </div>
                                                        @endif    
                                                      @endforeach
                                                    

                                                </div>
                                                @error('services.' . $index . '.service_types')
                                                             <span class="d-inline-block invalid-feedback mt-2">
                                                               Service type is required
                                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                <label class="form-label" >Specializations</label>
                                                <div class="" >
                                                  @foreach($foundService['specializations'] as $specialization)
                                                 
                                                  <div class="form-check"><input class="form-check-input" type="checkbox" id="service_specializations-{{$index}}-{{$specialization['id']}}" name="service_specializations" value="{{$specialization['id']}}" tabindex="1" wire:model.defer="services.{{$index}}.specialization"><label class="form-check-label" for="service_specializations-{{$index}}-{{$specialization['id']}}">{{$specialization['name']}}</label></div>
                                                  @endforeach
                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                <label class="form-label" for="number-of-provider">Number of Providers <span
                                                        class="mandatory">*</span></label>
                                                <input type="" class="form-control"
                                                    placeholder="Enter Number of Providers" id="number-of-provider" wire:model.defer="services.{{$index}}.provider_count" >
                                                    @error('services.' . $index . '.provider_count')
                                                             <span class="d-inline-block invalid-feedback mt-2">
                                                              Provider count is required
                                                            </span>
                                                @enderror    
                                            </div>
                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-6 mb-4">
                                                        <div class="d-flex gap-3">
                                                            <label class="form-label-sm">
                                                                Broadcast
                                                            </label>
                                                            <div class="form-check form-switch form-switch-column">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="AutoNotifyBroadcast" checked aria-label="Auto-notify Broadcast" value="true" wire:model.defer="services.{{$index}}.auto_notify" >
                                                                <label class="form-check-label"
                                                                    for="AutoNotifyBroadcast">Manual-notify</label>
                                                                <label class="form-check-label"
                                                                    for="AutoNotifyBroadcast">Auto-notify</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-6 mb-4">
                                                        <div class="d-flex gap-3">
                                                            <label class="form-label-sm">
                                                                Assign
                                                            </label>
                                                            <div class="form-check form-switch form-switch-column">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="ManualAssignAssign" checked aria-label="Auto assign" value="true" wire:model.defer="services.{{$index}}.auto_assign">
                                                                <label class="form-check-label"
                                                                    for="ManualAssignAssign">Manual-assign</label>
                                                                <label class="form-check-label"
                                                                    for="ManualAssignAssign">Auto-assign</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12" x-data="{ open: true }">
                                                <div class="row inner-section-segment-spacing">
                                                    <div class="col-lg-12">
                                                        <div class="d-md-flex align-items-center mb-4 gap-3 gap-md-0">
                                                            <div
                                                                class="form-check form-switch form-switch-column mb-lg-0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="" @click="open = !open"
                                                                    x-text="open==true  ? 'hide' : 'show'" checked>
                                                            </div>
                                                            <h3 class="mb-lg-0">Add Consumers & Participants</h3>
                                                        </div>
                                                        <div class="row mb-4 switch-toggle-content" x-show="open">
                                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <label class="form-label">Service
                                                                        Consumer(s)</label>

                                                                </div>
                                                                <div class="js-wrapper-manual-entry">

                                                                    @if($services[$index]['is_manual_consumer'])
                                                                    <div class="hidden">
                                                                    <select id="service_consumer_{{$index}}" name="service_consumer_{{$index}}"
                                                                        class="form-select select2 select2-container js-form-select-manual-entry"
                                                                        aria-label="Select Service Consumer(s)" wire:model="services.{{$index}}.service_consumer" multiple>
                                                                        <option>Select Service Consumer(s)</option>
                                                                        @foreach($consumers as $consumer)
                                                                        <option value="{{$consumer['id']}}">{{$consumer['name']}}</option>
                                                                        @endforeach
                                                                    </select>
                                                </div>
                                                                    <input type="" name=""
                                                                        class="form-control mb-2  js-form-input-manual-entry mt-2"
                                                                        placeholder="Enter Service Consumer(s)" wire:model="services.{{$index}}.service_consumer">
                                                                    @else
                                                                    <select id="service_consumer_{{$index}}" name="service_consumer_{{$index}}"
                                                                        class="hidden form-select select2 select2-container js-form-select-manual-entry"
                                                                        aria-label="Select Service Consumer(s)" wire:model="services.{{$index}}.service_consumer" multiple>
                                                                        <option>Select Service Consumer(s)</option>
                                                                        @foreach($consumers as $consumer)
                                                                        <option value="{{$consumer['name']}}">{{$consumer['name']}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <input type="" name=""
                                                                        class="form-control mb-2 hidden js-form-input-manual-entry mt-2"
                                                                        placeholder="Enter Service Consumer(s)">
                                                                    @endif    
                                                                    <div class="form-check mt-2">
                                                                      
                                                                        <input
                                                                            class="form-check-input js-form-check-input-manual-entry"
                                                                            id="ManualEntryServiceConsumer" name=""
                                                                            type="checkbox" tabindex="" wire:key="manual-{{ $index }}" wire:model="services.{{$index}}.is_manual_consumer">
                                                                        <label class="form-check-label"
                                                                            for="ManualEntryServiceConsumer"><small>Manual Entry</small></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                                <div class="d-flex justify-content-between align-items-center js-form-select-manual-entry">
                                                                    <label class="form-label">Participant(s)</label>
                                                                    <div class="form-check ">
                                                                        <label class="form-check-label" for="EnableCloseOutStatuses">Add New Participant</label>


                                                                       
                                                                        </div>
                                                                    </div>
                                                                
                                                                <div class="js-wrapper-manual-entry">
                                                                    @if($services[$index]['is_manual_attendees'])
                                                                    <div class="hidden">
                                                                    <select
                                                                        class="form-select select2 select2-container js-form-select-manual-entry"  multiple id="attendees_{{$index}}" name="attendees_{{$index}}"
                                                                        aria-label="Select Participant(s)" wire:model.defer="services.{{$index}}.attendees">
                                                                       
                                                                        @foreach($participants as $participant)
                                                                        <option value="{{$participant['name']}}">{{$participant['name']}}</option>
                                                                        @endforeach
                                                                    </select></div>
                                                                    <input type="" name=""
                                                                        class="form-control mb-2  js-form-input-manual-entry"
                                                                        placeholder="Enter Participant(s)" wire:model="services.{{$index}}.attendees">
                                                                    @else
                                                                  
                                                                    <select
                                                                        class="form-select select2 select2-container js-form-select-manual-entry"  multiple id="attendees_{{$index}}" name="attendees_{{$index}}"
                                                                        aria-label="Select Participant(s)" wire:model.defer="services.{{$index}}.attendees">
                                                                       
                                                                        @foreach($participants as $participant)
                                                                        <option value="{{$participant['name']}}">{{$participant['name']}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <input type="" name=""
                                                                        class="form-control mb-2 hidden js-form-input-manual-entry"
                                                                        placeholder="Enter Participant(s)">
                                                                    @endif    
                                                                    <div class="form-check">
                                                                        <input
                                                                            class="form-check-input js-form-check-input-manual-entry"
                                                                            id="ManualEntryParticipant" name=""
                                                                            type="checkbox" tabindex="" wire:key="manual-{{ $index }}" wire:model="services.{{$index}}.is_manual_attendees">
                                                                        <label class="form-check-label"
                                                                            for="ManualEntryParticipant"><small>Manual
                                                                                Entry</small></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($services[$index]['service_types']>1)
                                                <div class="row mb-md-4" >
                                                    <div class="col-lg-6 align-self-center">
                                                        <h2 class="mb-lg-0">Meeting Information</h2>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-4 mb-md-0">
                                                                <a href="#"
                                                                    class="btn btn-primary rounded w-100 btn-has-icon">
                                                                  
                                                                    <svg aria-label="Add Manually" width="24"
                                                                        height="19" viewBox="0 0 24 19" fill="none">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#check-add">
                                                                        </use>
                                                                    </svg>
                                                                  
                                                                    Add Manually
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6 mb-4 mb-md-0">
                                                                <a href="#" class="btn btn-primary rounded w-100"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#RequestfromUserModal">
                                                                    Request from User 
                                                                </a> (Coming Soon)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($services[$index]['meetings'] as $meetingIndex=>$meeting)
                                                <div class="border-dashed rounded p-3 mb-3" >
                                                    <div class="d-flex justify-content-between">

                                                        <div class="align-items-center gap-4">
                                                            <h3 class="text-primary">Meeting Link {{ $loop->index + 1 }}</h3>
                                                        </div>
                                                        <div class="align-items-center gap-4">
                                                            <a wire:click.prevent="removeMeeting({{$meetingIndex}},{{$index}})" href="#" title="Delete" aria-label="Delete"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg class="delete-icon" width="20" height="20"
                                                                    viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row" >
                                                        <div class="col-lg-4 mb-3">
                                                            <label class="form-label" for="meeting-name" >Meeting Name</label>
                                                            <input type="" class="form-control"
                                                                placeholder="Enter Meeting Name" id="meeting-name" wire:key="name-{{$index}}-{{ $meetingIndex }}" wire:model.lazy="services.{{$index}}.meetings.{{$meetingIndex}}.meeting_name" >
                                                        </div>
                                                        <div class="col-lg-4 mb-3">
                                                            <label class="form-label" for="phone-number">Phone Number</label>
                                                            <input type="" class="form-control"
                                                                placeholder="Enter Phone Number" id="phone-number" wire:key="phone-{{$index}}-{{ $meetingIndex }}" wire:model.lazy="services.{{$index}}.meetings.{{$meetingIndex}}.phone_number">
                                                        </div>
                                                        <div class="col-lg-4 mb-3">
                                                            <label class="form-label" for="access-code">Access Code</label>
                                                            <input type="" class="form-control"
                                                                placeholder="Enter Access Code" id="access-code" wire:key="access-{{$index}}-{{ $meetingIndex }}" wire:model.lazy="services.{{$index}}.meetings.{{$meetingIndex}}.access_code">
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                             
                                                <div class="row justify-content-end">
                                                    <div class="col-md-6 col-lg-3">
                                                        <a href="#" wire:click.prevent="addMeeting({{$index}})" class="btn btn-primary rounded btn-has-icon w-100">
                                                            <svg aria-label="Add Link" width="20" height="20"
                                                                viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#plus">
                                                                </use>
                                                            </svg>
                                                            Add Link
                                                        </a>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- /Services Duplicate Block -->
                                    <div class="row justify-content-end">
                                        <div class="col-md-6 col-lg-3">
                                            <a wire:click.prevent="addService" href="#" class="btn btn-primary rounded btn-has-icon w-100">
                                                <svg aria-label=" Add Service" width="20" height="20"
                                                    viewBox="0 0 20 20">
                                                    <use xlink:href="/css/common-icons.svg#plus">
                                                    </use>
                                                </svg>
                                                Add Service
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Service Information -->
                            </div>
                            <div class="row between-section-segment-spacing">
                                <!-- Select Dates & Times -->
                                <div class="col-lg-12 mb-4">
                                    <h2>Select Dates & Times</h2>
                                    <!-- Select Dates & Times Duplicate Block -->
                                    @foreach($dates as $index=>$date)
                                    <div class="duplicate-block mb-4">
                                        <div class="d-flex justify-content-between">
                                        <h3 class="text-primary">Date & Time {{ $loop->index + 1 }}</h3>
                                        <div class="align-items-center gap-2">
                                            @if($index>=1)
                                            <a wire:click.prevent="removeDate({{$index}})" href="#" title="Delete" aria-label="Delete"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg class="delete-icon" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                </svg>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                        <div class="d-md-flex flex-md-wrap justify-content-between">
                                            <div class="col-lg-3 col-md-6 pe-md-2 pe-lg-0 mb-4">
                                                <label class="form-label-sm" for="set_time_zone">Set Time Zone <span
                                                        class="mandatory">*</span></label>
                                               <select class="form-select select2 mb-2" wire:model.defer='dates.{{ $index }}.time_zone'  id="timezone_{{$index}}" name="timezone_{{$index}}">
                                                 @foreach($timezones as $zone)
                                                  <option value="{{$zone['id']}}">{{$zone['setup_value_label']}}</option>
                                                 @endforeach

                                               </select>
                                            </div>
                                            <div class="col-lg-auto col-md-6 ps-md-2 ps-lg-0 mb-4">
                                                <label class="form-label-sm" for="start_date_{{$index}}">Start Date <span
                                                        class="mandatory">*</span></label>
                                                <div class="position-relative">
                                                    <input type="" name=""
                                                        class="form-control form-control-md js-single-date" 
                                                        placeholder="MM/DD/YYYY" id="start_date_{{$index}}" value="{{$dates[0]['start_date']}}"
                                                        aria-label="Set Start Date" wire:model="dates.{{$index}}.start_date" style="width:200px">
                                                   
                                                    <svg aria-label="Date" class="icon-date md" width="20" height="20"
                                                        viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                        </use>
                                                    </svg>
                                                    
                                                </div>
                                                @error('dates.' . $index . '.start_date')
                                                             <span class="d-inline-block invalid-feedback mt-2">
                                                             Start date is required
                                                            </span>
                                                @enderror 
                                            </div>
                                            <div class="d-flex col-lg-auto mb-4">
                                                <div class="d-flex flex-column">
                                                    <label class="form-label-sm" for="set_start_time">Start Time</label>
                                                    <div class="d-flex">
                                                        <div class="time d-flex align-items-center gap-2">
                                                            <select wire:model.defer="dates.{{$index}}.start_hour"  wire:change="updateDurations({{ $index }})">
                                                                @for($i=0;$i<24;$i++)
                                                                 <option value="{{str_pad($i, 2, '0', STR_PAD_LEFT)}}">{{str_pad($i, 2, '0', STR_PAD_LEFT)}}</option>
                                                                @endfor

                                                            </select>
                                                           
                                                            <svg aria-label="colon" width="5" height="19"
                                                                viewBox="0 0 5 19">
                                                                <use xlink:href="/css/common-icons.svg#date-colon">
                                                                </use>
                                                            </svg>
                                                            
                                                            <select wire:model.defer="dates.{{$index}}.start_min"  wire:change="updateDurations({{ $index }})">
                                                                @for($i=0;$i<59;$i++)
                                                                 <option value="{{str_pad($i, 2, '0', STR_PAD_LEFT)}}">{{str_pad($i, 2, '0', STR_PAD_LEFT)}}</option>
                                                                @endfor

                                                            </select>
                                                        </div>
                                                        <div class="form-check form-switch form-switch-column mb-0">
                                                           <!-- <input checked="" class="form-check-input" type="checkbox"
                                                                role="switch" id="startTimeAMPM" aria-label="AM PM Toggle button" wire:key="starttime-{{ $index }}" wire:model="dates.{{$index}}.start_time">
                                                            <label class="form-check-label"
                                                                for="startTimeAMPM">AM</label>
                                                            <label class="form-check-label"
                                                                for="startTimeAMPM">PM</label> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-auto mb-4">
                                                <label class="form-label-sm" for="end_date_{{$index}}">End Date<span
                                                        class="mandatory">*</span></label>
                                                <div class="position-relative">
                                                    <input type="" name=""
                                                        class="form-control form-control-md js-single-date"
                                                        placeholder="MM/DD/YYYY" id="end_date_{{$index}}"
                                                        aria-label="Set End Date" wire:key="endtime-{{ $index }}" wire:model="dates.{{$index}}.end_date"  style="width:200px">
                                                   
                                                    <svg aria-label="Date" class="icon-date md" width="20" height="20"
                                                        viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                        </use>
                                                    </svg>
                                                    
                                                </div>
                                                @error('dates.' . $index . '.end_date')
                                                             <span class="d-inline-block invalid-feedback mt-2">
                                                             {{ $message }}
                                                            </span>
                                                @enderror 
                                            </div>
                                            <div class="d-flex col-lg-auto mb-4">
                                                <div class="d-flex flex-column">
                                                    <label class="form-label-sm" for="set_start_time">End Time</label>
                                                    <div class="d-flex">
                                                        <div class="time d-flex align-items-center gap-2">
                                                            <select wire:model.defer="dates.{{$index}}.end_hour"  wire:change="updateDurations({{ $index }})">
                                                                @for($i=0;$i<24;$i++)
                                                                 <option value="{{str_pad($i, 2, '0', STR_PAD_LEFT)}}">{{str_pad($i, 2, '0', STR_PAD_LEFT)}}</option>
                                                                @endfor

                                                            </select>
                                                           
                                                            <svg aria-label="colon" width="5" height="19"
                                                                viewBox="0 0 5 19">
                                                                <use xlink:href="/css/common-icons.svg#date-colon">
                                                                </use>
                                                            </svg>
                                                            
                                                            <select wire:model.defer="dates.{{$index}}.end_min"  wire:change="updateDurations({{ $index }})">
                                                                @for($i=0;$i<59;$i++)
                                                                 <option value="{{str_pad($i, 2, '0', STR_PAD_LEFT)}}">{{str_pad($i, 2, '0', STR_PAD_LEFT)}}</option>
                                                                @endfor

                                                            </select>
                                                        </div>
                                                        <div class="form-check form-switch form-switch-column mb-0">
                                                          <!--  <input checked="" class="form-check-input" type="checkbox"
                                                                role="switch" id="startTimeAMPM" aria-label="AM PM Toggle button" wire:key="starttime-{{ $index }}" wire:model.defer="dates.{{$index}}.end_time">
                                                            <label class="form-check-label"
                                                                for="startTimeAMPM">AM</label>
                                                            <label class="form-check-label"
                                                                for="startTimeAMPM">PM</label> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-md-flex align-items-center gap-5">
                                            <label class="form-label mb-lg-0">Total Billable Service Duration</label>
                                            @if($dates[$index]['day_rate'])
                                            <div>
                                            @else
                                            <div style="display:none">
                                            @endif    
                                                <label class="form-label-sm"
                                                    for="total_billable_service_duration_days">Days</label>
                                                <input type="" class="form-control form-control-md text-center"
                                                    aria-label="Days" placeholder="0"
                                                    id="dates.{{$index}}.duration_day" wire:key="total-{{ $index }}" wire:model="dates.{{$index}}.duration_day" style="width:100px">
                                            </div>
                                            <div>
                                                <label class="form-label-sm">Hours</label>
                                                <input type=""
                                                    class="form-control form-control-md form-control-md text-center"
                                                    aria-label="Hours" placeholder="00"
                                                    id="dates.{{$index}}.duration_hour" wire:key="total-{{ $index }}" wire:model="dates.{{$index}}.duration_hour" style="width:100px" >
                                            </div>
                                            <div>
                                                <label class="form-label-sm">Minutes</label>
                                                <input type="" class="form-control form-control-md text-center"
                                                    aria-label="Minutes" placeholder="00"
                                                    id="dates.{{$index}}.duration_minute" wire:key="total-{{ $index }}" wire:model="dates.{{$index}}.duration_minute" style="width:100px">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- /Select Dates & Times Duplicate Block 
                                    <div class="d-flex justify-content-end mt-3">
                                        <button class="btn btn-primary rounded" wire:click.prevent="addDate">
                                            <svg aria-label="Add Date" width="20" height="20" viewBox="0 0 20 20">
                                                <use xlink:href="/css/common-icons.svg#plus">
                                                </use>
                                            </svg>
                                            <span class="mx-2">Add Date</span>
                                        </button>
                                    </div>-->
                                </div>
                                <!-- /Select Dates & Times -->
                            </div>
                            <div class="row between-section-segment-spacing">
                            {{-- Default Billing Address --}}
                                                   @php
                                                   $filteredServices = array_filter($services, function($subArray) {
                                                        return isset($subArray['service_types']) && $subArray['service_types'] == 1;
                                                        });
                                                   @endphp
                                @if($filteredServices)
                                <div class="col-lg-12">
                                    <!-- Physical Address -->
                                    <div class="row mb-4">
                                        <div class="col-lg-6 mb-4 align-self-center">
                                            <h2 class="mb-lg-0">Physical Address</h2>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <a href="#" class="btn btn-primary rounded w-100 btn-has-icon">
                                                       
                                                        <svg aria-label="Add Manually" width="24" height="19"
                                                            viewBox="0 0 24 19" fill="none">
                                                            <use xlink:href="/css/common-icons.svg#check-add">
                                                            </use>
                                                        </svg>

                                                        Add Manually
                                                    </a>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <a href="#" class="btn btn-primary rounded w-100"
                                                        data-bs-toggle="modal" data-bs-target="#RequestfromUserModal" disabled>
                                                        Request from User 
                                                    </a> (Coming Soon)
                                                </div>
                                            </div>
                                        </div>

                                                    <div class="col-lg-12">
                                                        <div class="row between-section-segment-spacing">
                                                        <input type="hidden" wire:model="booking.physical_address_id" id="addressId">
                                                        @include('components.default-address', ['type' => 1, 'userAddresses' => $userAddresses, 'title'=>'Physical'])
                                                        </div>
                                                    </div>    
                                                 

                                        <!-- end address <div class="col-lg-6">
                                            <div class="mb-4">
                                                <div class="d-lg-flex justify-content-between align-items-center">
                                                    <h3 class="mb-lg-0">Start End Address</h3>
                                                    <a href="#"
                                                        class="btn btn-primary btn-sm rounded js-show-start-service-hidden-content">End
                                                        Address</a>
                                                </div>
                                            </div>
                                            <div class="js-start-service-hidden-content hidden">
                                               
                                                <div class="col-lg-12 text-lg-end">
                                                    <div class="mb-4">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm rounded gap-2"
                                                            data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                                            <svg aria-label="Add New Address" width="20" height="20"
                                                                viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#plus">
                                                                </use>
                                                            </svg>
                                                            <span>Add New Address</span>
                                                        </button>
                                                    </div>
                                                </div>
                                              
                                                <div class="col-lg-12 mb-4 border">

                                                </div>
                                           
                                            </div>
                                        </div> end address-->
                                    </div>
                                    <!-- /Physical Address -->
                                </div>
                                @endif 
                                <div class="justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                    <button type="button" class="btn btn-outline-dark rounded">Cancel</button>
                                    <button type="button" class="btn btn-primary rounded" wire:click="save(1,1)" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">Save as Draft</button>
                                    <button type="button" class="btn btn-primary rounded"
                                    wire:click="save(0,1)" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });" >Proceed to Request Details</button>
                                </div>
                            </div>
                           
                       
                     
                    </div>
                   
                    <!-- END: requester-info -->
                    @elseif($component == 'request-details')
                    <div class="tab-pane fade {{ $component == 'request-details' ? 'active show' : '' }}"
                        id="request-details" role="tabpanel" aria-labelledby="request-details-tab" tabindex="0">
                        @foreach($formIds as $formIndex => $formId)
                            <div class="" wire:ignore>
                                @php
                                 $lastForm = ($formIndex ===  count($formIds) - 1) ? true : false;
                                @endphp
                                @livewire('app.common.forms.custom-form-display',['showForm'=>true,'formId'=> $formId  ,'bookingId'=>$booking->id,'lastForm' => $lastForm], key($formIndex))
                            </div>
                        @endforeach     

                        @if(count($formIds)==0)
                            <div class="row between-section-segment-spacing">
                                <div class="col-12 justify-content-center  d-flex flex-column flex-md-row gap-2">
                                    <h4>No form attached with industry / service(s)</h4>
                                </div>
                                <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                    
                                            <button type="button" class="btn btn-outline-dark rounded" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });" wire:click="$emit('switch','requester-info')">Back</button> 
                                            <button type="button" class="btn btn-primary rounded"
                                            x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });"  wire:click="$emit('switch','payment-info')">Proceed to  Payment Info</button>
                                    
                                </div>
                            </div>
                        @endif
                                              
                    </div>
                    @elseif($component == 'payment-info') 
                    <div class="tab-pane fade {{ $component == 'payment-info' ? 'active show' : '' }}" id="payment-info"
                        role="tabpanel" aria-labelledby="payment-info-tab" tabindex="0">
                        
                       
                            <h2>Booking Services</h2>
                            <div class="row mb-5">
                               
                                 
                                      @foreach($services as $index=>$service)
                                      <div class="row border-bottom pb-4 mt-3">
                                        <h3>Services {{$index+1}} - {{$service['service_data']['name']}}</h3>
                                            <div class="col-lg-6 pe-4">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">Accommodation:</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary ">{{$service['accommodation']['name']}}</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">Duration:</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary"> @if($service['service_data']['rate_status']==2) {{$service['total_duration']['days']}} day(s) @endif {{$service['total_duration']['hours']}} hours {{$service['total_duration']['mins']}} minutes</div>
                                                    </div>
                                                </div> 
                                                @if($service['service_data']['rate_status']==4)
                                                <div class="mt-3"><h3 style="color:#023DB0">Fixed Rate  </h3></div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">Service Rate</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{formatPayment($service['service_charges'])}}</div>
                                                    </div>
                                                </div> 
                                                @elseif($service['service_data']['rate_status']==2)
                                                <div class="mt-3"><h3 style="color:#023DB0">Day Rate  </h3></div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">Service Day Rate</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{formatPayment($service['service_charges'])}}</div>
                                                    </div>
                                                </div> 
                                                @else
                                                <div class="mt-3"><h3 style="color:#023DB0">Standard Hourly Rate  </h3></div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">Business Hours:</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{formatPayment($service['business_hour_charges'])}} for {{$service['business_hours']}} hours {{$service['business_minutes']}} minutes</div>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">After Hours</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{formatPayment($service['after_business_hour_charges'])}} for {{$service['after_business_hours']}} hours {{$service['after_business_minutes']}} minutes</div>
                                                    </div>
                                                </div>  
                                                <div class="row border-top">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">Total:</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{formatPayment($service['business_hour_charges']+$service['after_business_hour_charges'])}}</div>
                                                    </div>
                                                </div> 
                                                @endif
 
    
                                                <div class="mt-3"><h3 style="color:#023DB0">Additional Charges </h3></div>
                                                @foreach($service['additional_charges'] as $charge)
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">{{$charge['label']}}</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{formatPayment($charge['charges'])}}</div>
                                                    </div>
                                                </div> 
                                                @endforeach

                                                <div class="row border-top">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">Total:</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{formatPayment($service['additional_charges_total'])}}</div>
                                                    </div>
                                                </div> 
                                                <div class="mt-3"><h3 style="color:#023DB0">Additional Payment </h3></div>
                                                @foreach($service['additional_payments'] as $payment)
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">{{$payment['label']}}</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{formatPayment($payment['charges'])}}</div>
                                                    </div>
                                                </div> 
                                               @endforeach
                                                <div class="row border-top">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">Total:</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{formatPayment($service['service_payment_total'])}}</div>
                                                    </div>
                                                </div> 

                  
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="mt-3"><h3 style="color:#023DB0">Specializations </h3></div>
                                            @foreach($service['specialization_charges'] as $charge)
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">{{$charge['label']}}:</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{formatPayment($charge['charges'])}}</div>
                                                    </div>
                                                </div>  
                                                @endforeach
                                                <div class="row border-top">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">Total:</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{formatPayment($service['specialization_total'])}}</div>
                                                    </div>
                                                </div> 
                                                @if(count($service['expedited_charges']) && $service['expedited_charges']['charges']>0)
                                                <div class="mt-3"><h3 style="color:#023DB0">Expedited Services Charges </h3></div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="col-form-label">{{ $service['expedited_charges']['hour']}} Hour:</label>
                                                    </div>
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="font-family-tertiary">{{ formatPayment($service['expedited_charges']['charges'])}}</div>
                                                    </div>
                                                </div>                                                 
                                               @endif  
                                               <div class="mt-5 ps-3 border border-dark rounded bg-lighter mt-1">
                                                <div class="mt-3"><h3 style="color:#023DB0">Total Service Charges </h3></div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="col-form-label">Calculated Total</label>
                                                        </div>
                                                        <div class="col-lg-8 align-self-center">
                                                            <div class="font-family-tertiary">{{ formatPayment($service['total_charges'])}}</div>
                                                        </div>
                                                    </div>    
                                                    <div class="row mb-5" @if($isCustomer) style="visibility:hidden" @endif>
                                                        <label class="form-label mb-lg-0 col-lg-4 align-self-center" for="enter-override-amount">Override</label>
                                                        <div class="col-md-3 mb-3 mb-md-0">
                                                            <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00" id="enter-override-amount" wire:model="services.{{$index}}.billed_total">
                                                        </div>
                                                        <div class="col-md-3 align-self-center">
                                                            <a href="#" class="btn btn-primary btn-sm rounded w-100" wire:click="updateTotals">Apply</a>
                                                        </div>
                                                    </div> 
                                                </div>    
                                              </div>
                                        </div>              
                                      @endforeach
                                   


                               

                            </div><!--end of services loop-->
                         
                            <div class="row ">
                                <!--start of addtional charges and discount-->
                                <div class="col-lg-7 pe-5">
                                <h2 class="pt-1 ">Booking Totals </h2>
                                    <div class="mt-2" @if($isCustomer) style="display:none" @endif>
                                    <h3>Discounts</h3>
                                        <div class="d-flex gap-3 flex-column flex-md-row mb-4">

                                            <div class="form-check mb-0">
                                                <input class="form-check-input" id="$Amount" name="discounts"
                                                    type="radio" tabindex="" wire:model="payment.coupon_type" value="2" wire:click="updateTotals">
                                                <label class="form-check-label" for="$Amount">$ Amount</label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" id="%Amount" name="discounts"
                                                    type="radio" tabindex="" wire:model="payment.coupon_type" value="3" wire:click="updateTotals">
                                                <label class="form-check-label" for="%Amount">% Amount</label>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-4">
                                            <label class="form-label mb-md-0 col-lg-3 col-md-3 align-self-center" for="coupon-code">Enter Value</label>
                                            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
                                                <input type="" name="" class="form-control form-control-md"
                                                    placeholder="Enter Value" id="coupon-code" wire:model.defer="payment.coupon_discount_amount">
                                            </div>
                                            <div class="col-md-3 align-self-center">
                                                <a href="#" class="btn btn-primary btn-sm rounded w-100" wire:click="updateTotals">Apply</a>
                                            </div>
                                        </div>
                                        @error('payment.coupon_discount_amount')
                                        <div class="d-inline-block invalid-feedback mt-2">
                                               Discount  amount must be a numeric value
                                        </div>                                   
                                        @enderror
                                       
                                    </div>
                                    <div class="mt-5" @if($isCustomer) style="display:none" @endif>
                                        <h3>Additional Customer Charge</h3>
                                        <div class="input-group">
                                            <input type="" name="" class="form-control form-control-md"
                                                placeholder="Enter Charge Label" aria-label="Enter Charge Label" wire:model.defer="payment.additional_label">
                                            <input type="" name="" class="form-control form-control-md text-center"
                                                placeholder="$00.00" aria-label="Additional Customer Charges in dollars" wire:model.defer="payment.additional_charge" wire:blur="updateTotals">
                                        </div>
                                        <div class="text-lg-end">
                                           <!--  <a href="#" class="fw-bold">
                                                <small>
                                                    Add Additional Charges
                                                   
                                                    <svg aria-label="Add Additional Charges" class="me-1" width="20"
                                                        height="21" viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#add-new"></use>
                                                    </svg>
                                                    
                                                </small>
                                            </a> -->
                                        </div>
                                        @error('payment.additional_charge')
                                        <div class="d-inline-block invalid-feedback mt-2">
                                               Charges must be a numeric value
                                        </div>                                   
                                        @enderror
                                    </div>
                                    <div class="mt-5" @if($isCustomer) style="display:none" @endif>
                                        <h3>Additional Provider Payment</h3>
                                        <div class="input-group mb-2">
                                            <input type="" name="" class="form-control form-control-md"
                                                placeholder="Enter Charge Label" aria-label="Enter Charge Label" wire:model.defer="payment.additional_label_provider" >
                                            <input type="" name="" class="form-control form-control-md text-center"
                                                placeholder="$00.00" aria-label="Additional Provider Payment" wire:model.defer="payment.additional_charge_provider" wire:blur="updateTotals">
                                        </div>
                                        @error('payment.additional_charge_provider')
                                        <div class="d-inline-block invalid-feedback mt-2">
                                               Payment amount must be a numeric value
                                        </div>                                   
                                        @enderror    
                                       <!--  <div
                                            class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-1 gap-md-0">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="ChargetoCustomer" name=""
                                                    type="checkbox" tabindex="">
                                                <label class="form-check-label" for="ChargetoCustomer"><small>Charge to
                                                        Customer</small></label>
                                            </div> 
                                            <a href="#" class="fw-bold">
                                                <small>
                                                    Add Additional Charges
                                                   
                                                    <svg aria-label="Add Additional Charges" class="me-1" width="20"
                                                        height="21" viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#add-new"></use>
                                                    </svg>
                                                    
                                                </small>
                                            </a>
                                        </div> -->

                                    </div>     
     
                                    <div class="row between-section-segment-spacing" >
                                        <div class="col-lg-12">
                                            <div class="row mt-2" @if($isCustomer) style="display:none" @endif>
                                                <div class="col-lg-12">
                                                    <div class="d-flex gap-3 p-2">
                                                        <label class="form-label mb-0">Calculated Discount:</label>
                                                        <div class="align-self-center text-black">{{formatPayment($discountedAmount)}}</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2" @if($isCustomer) style="display:none" @endif>
                                                <div class="col-lg-12 ">
                                                    <div class="row p-2">
                                                        <label class="form-label mb-lg-0 col-lg-4 align-self-center" for="enter-override-amount">                                                           Override
                                                            Amount:</label>
                                                        <div class="col-md-3 mb-3 mb-md-0">
                                                            <input type="" name=""
                                                                class="form-control form-control-md text-center"
                                                                placeholder="$00.00" id="enter-override-amount" wire:model.defer="payment.override_amount">
                                                        </div>
                                                        <div class="col-md-3 align-self-center">
                                                            <a href="#" class="btn btn-primary btn-sm rounded w-100" wire:click="updateTotals">Apply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('payment.override_amount')
                                        <div class="d-inline-block invalid-feedback mt-2">
                                               Please add valid numeric value
                                        </div>                                   
                                        @enderror
                                            <div class="row mb-4">
                                                <div class="col-lg-12">
                                                    <div class="d-flex gap-3 bg-gray p-2">
                                                        <label class="form-label mb-0">Booking Total:</label>
                                                        <div class="align-self-center text-black">{{formatPayment($totalAmount)}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class="row border-top pt-5">
                                <div class="col-lg-6">
                                    <!-- Payment Preference -->
                                    <div class="row mb-5">
                                        <h2>Payment Preference:</h2>
                                        <div class="mb-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="PayLater" name="PaymentPreference"
                                                    type="radio" tabindex="" wire.model.defer="payment.payment_method" value="2" checked/>
                                                <label class="form-check-label" for="PayLater"> Pay Later</label>
                                            </div>
                                           <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="PayNow" name="PaymentPreference"
                                                    type="radio" tabindex="" disabled />
                                                <label class="form-check-label" for="PayNow"> Pay Now</label>
                                            </div> -->
                                        </div>
                                        <!--<div class="input-group mb-3">
                                            <input type="" name="" class="form-control form-control-md"
                                                placeholder="Enter Card number" aria-label="Enter Card number" disabled>
                                            <input type="" name="" class="form-control form-control-md text-center"
                                                placeholder="MM/YY" aria-label="Enter Month/Year" disabled>
                                            <input type="" name="" class="form-control form-control-md text-center"
                                                placeholder="CVC" aria-label="Enter CVC" disabled>
                                        </div>
                                        <div class="text-lg-end">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="SaveforFuturePayments"
                                                    name="PaymentPreference" type="checkbox" tabindex="" />
                                                <label class="form-check-label" for="SaveforFuturePayments" disabled> Save for
                                                    Future
                                                    Payments</label>
                                            </div>
                                        </div> -->
                                    </div>
                                    <!-- /Payment Preference -->
                                </div>
                            </div>
                         
                            <div class="row border-top pt-5 ">
                            <h2 class="mt-3">Booking Documents </h2>
                                <div class="col-lg-12">
                                  
                                    <!-- Add Document -->
                                    @if(!is_null($booking->id))
                                   
                                    <div>@livewire('app.common.bookings.booking-attachments', ['booking_id' => $booking->id])</div>
                                    @endif 
                                    <!-- /Add Document -->
                                </div>
                            </div>
                                </div>
                              
                                <!--end of addtional charges and discount-->
                                <div class="col-lg-5 mt-2 ps-3 border border-dark rounded bg-lighter mt-1" @if($isCustomer) style="height:300px" @endif>
                                <h2 class="mt-3">Booking Notes </h2>
                                    <!-- Billing Notes -->
                                    <div class="mb-lg-5 mb-4 col-lg-12 col-md-6 pe-md-3 pe-lg-2" @if($isCustomer) style="display:none" @endif>
                                        <label class="form-label" for="billing-notes" >
                                            Billing Notes
                                        </label>
                                        <textarea class="form-control" rows="3" cols="5" id="billing-notes" wire:model.defer="booking.billing_notes"></textarea>
                                    </div>
                                    <!-- /Billing Notes -->
                                    <!-- Payment Notes -->
                                    <div class="mb-lg-5 mb-4 col-lg-12 col-md-6 ps-md-3 ps-lg-0"  @if($isCustomer) style="display:none" @endif>
                                        <label class="form-label" for="payment-notes">
                                            Payment Notes
                                        </label>
                                        <textarea class="form-control" rows="3" cols="3" id="payment-notes" wire:model.defer="booking.payment_notes"></textarea>
                                    </div>
                                    <div class="my-lg-5" @if($isCustomer) style="display:none" @endif>
                                                <label class="form-label" for="provider_notes" >
                                                    Provider Notes
                                                </label>
                                                <textarea class="form-control" rows="3" cols="4" id="provider_notes" wire:model.defer="booking.provider_notes"></textarea>
                                   </div>
                                   <div class="my-lg-5">
                                                <label class="form-label" for="customer-notes">
                                                    Customer Notes
                                                </label>
                                                <textarea class="form-control" rows="3" cols="4" id="customer-notes" wire:model.defer="booking.customer_notes"></textarea>
                                    </div>
                                    <div class="my-lg-5" @if($isCustomer) style="display:none" @endif>
                                                <label class="form-label" for="private-notes">
                                                    Private Notes
                                                </label>
                                                <textarea class="form-control" rows="3" cols="4" id="private-notes" wire:model.defer="booking.private_notes"></textarea>
                                            </div>
                                            <div class="my-lg-5" @if($isCustomer) style="display:none" @endif>
                                                <label class="form-label" for="tags" >
                                                    Tags 
                                                </label>
                                                <div class="mb-3">
                                                <select data-placeholder="" multiple
                                                                    class="form-select  select2 form-select select2-hidden-accessible" tabindex="" id="tags-select" aria-label="Select Tags" wire:model.defer="tags">
                                                                    <option value=""></option>
                                                                    <option selected>Admin staff</option>
                                                                    <option selected>Customers</option>
                                                                </select>
                                                </div>

                                                <div @if($isCustomer) style="display:none" @endif>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" id="Requester" name=""
                                                            type="checkbox" tabindex="" />
                                                        <label class="form-check-label"
                                                            for="Requester">Requester</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" id="ServiceConsumers" name=""
                                                            type="checkbox" tabindex="" />
                                                        <label class="form-check-label" for="ServiceConsumers">Service
                                                            Consumer(s)</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" id="Participants" name=""
                                                            type="checkbox" tabindex="" />
                                                        <label class="form-check-label"
                                                            for="Participants">Company</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" id="Participants" name=""
                                                            type="checkbox" tabindex="" />
                                                        <label class="form-check-label"
                                                            for="Participants">Department</label>
                                                    </div>
                                                </div>
                                            </div>        
                                    <!-- /Payment Notes -->
                                </div>
                                <!--end of notes-->
                            </div>  



                            <div
                                class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                <button type="button" class="btn btn-outline-dark rounded"
                                   x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('request-details')">Back</button>
                                <button type="button" class="btn btn-primary rounded" wire:click.prevent="save(1,1,3)" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">Save as Draft</button>
                                <div class="dropdown">
                                        <button type="" class="btn btn-primary rounded dropdown-toggle w-100 h-100"
                                            type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Confirm Booking</button>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" wire:click.prevent="save(1,1,3)">Confirm Only</a></li>
                                            <li><a class="dropdown-item" href="#">Confirm + Invite</a></li>
                                            <li><a class="dropdown-item" href="#">Confirm + Assign</a></li>
                                        </ul>
                                    </div>
                            </div> 
                     
                      
                    </div>
                    @elseif($component == 'booking-summary')
                    <div class="tab-pane fade {{ $component == 'booking-summary' ? 'active show' : '' }}"
                        id="booking-summary" role="tabpanel" aria-labelledby="booking-summary-tab" tabindex="0">
                        
                        

                            <!-- Scheduling Details -->
                            <div class="mb-5">
                                <h2>Scheduling Details</h2>
                                <div class="d-flex flex-column gap-3 mt-5">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4">
                                            <label class="col-form-label">Date & Time:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-8 align-self-center">
                                            <div class="font-family-tertiary">(10/25/2022 13:35 - 10/25/2022 13:35)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4">
                                            <label class="col-form-label">Frequency:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-8 align-self-center">
                                            <div class="font-family-tertiary">One-Time Request</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Scheduling Details -->
                            <!-- Service Request -->
                            <div class="mb-5">
                                <h2>Service Request (10/25/2022 13:35 - 10/25/2022 13:35)</h2>
                                <!-- Services 1 -->
                                <div class="my-5">
                                    <h2>Services 1</h2>
                                    <div class="d-flex flex-column gap-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Accommodation:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">Sign Language Interpreting Services
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Service:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">English to Arabic Sign Language</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Service Type:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">In person</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Number of Providers:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">13</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Total Billable Time:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">1 hour(s) 0 minute(s)</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Total Cost:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">$00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Services 1 -->
                                <!-- Services 2 -->
                                <div class="my-5">
                                    <h2>Services 2</h2>
                                    <div class="d-flex flex-column gap-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Accommodation:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">Sign Language Interpreting Services
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Service:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">English to Arabic Sign Language</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Service Type:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">In person</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Number of Providers:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">13</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Service Consumer:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">John Wick</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Participant(s):</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">Scott Hall</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Total Billable Time:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">1 hour(s) 0 minute(s)</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Total Cost:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">$00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Services 2 -->
                                <!-- Service Billing -->
                                <div class="my-5">
                                    <h2>Service Billing</h2>
                                    <div class="d-flex flex-column gap-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Total Service Rate:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">$6,500.00</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label pb-0">Differentials:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">$70.00</div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 ps-lg-4">
                                                <label class="form-label-sm fw-normal mb-0">
                                                    Specializations Service Charges:
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center value">
                                                $50.00
                                            </div>
                                            <div class="col-lg-3 col-md-4 ps-lg-4">
                                                <label class="form-label-sm fw-normal mb-0">
                                                    Expedited Service Charges
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center value">
                                                $20.00
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label">Specializations:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">$70.00</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label pb-0">Total Service Charges:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">$26.00</div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 ps-lg-4">
                                                <label class="form-label-sm fw-normal mb-0">
                                                    Fuel Charges:
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center value">
                                                $10.00
                                            </div>
                                            <div class="col-lg-3 col-md-4 ps-lg-4">
                                                <label class="form-label-sm fw-normal mb-0">
                                                    Travel Charges:
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center value">
                                                $16.00
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <label class="col-form-label fw-semibold">Service Total:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-8 align-self-center">
                                                <div class="font-family-tertiary fw-medium">$6,596.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Service Billing -->
                                <!-- Booking Total -->
                                <div class="my-5">
                                    <h2>Booking Total</h2>
                                    <div class="d-flex flex-column gap-3">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <label class="col-form-label">Total Service Rate:</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">$6,500.00</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <label class="col-form-label">Total Differentials:</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">$70.00</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <label class="col-form-label">Total Service Charges:</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">$27.00</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <label class="col-form-label">Additional Customer Charges:</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 align-self-center">
                                                <div class="font-family-tertiary">$26.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Booking Total -->
                                <!-- Gross Total - Discount - Net Total -->
                                <div class="my-5">
                                    <div class="d-flex flex-column gap-3">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3">
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">Gross
                                                    Total:
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 align-self-center">
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">
                                                    $6,500.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3">
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">
                                                    Discount:
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 align-self-center">
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">$00.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3">
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">Net
                                                    Total:
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 align-self-center">
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">
                                                    $6,596.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Gross Total - Discount - Net Total -->
                                <!-- Assign Admin-Staff & admin-Staff Team -->
                                <div class="my-5">
                                    <div class="form-check">
                                        <input class="form-check-input" id="AssignAdminStaff&adminStaffTeam" name=""
                                            type="checkbox" tabindex="" />
                                        <label class="form-check-label" for="AssignAdminStaff&adminStaffTeam">Assign
                                            Admin-Staff & admin-Staff Team</label>
                                    </div>
                                    <div class="d-flex flex-column flex-md-row gap-2 mb-4">
                                        <a href="#" class="btn btn-outline-dark btn-sm rounded" data-bs-toggle="modal"
                                            data-bs-target="#assignAdminStaffModal">
                                            Assign Admin-Staff
                                        </a>
                                        <!-- Programming note: only show on admin-end -->
                                        <a href="#" class="btn btn-primary btn-sm rounded" data-bs-toggle="modal"
                                            data-bs-target="#assignAdminStaffTeamModal">
                                            Assign Admin-Staff Team
                                        </a>
                                        <!-- /Programming note: only show on admin-end -->
                                    </div>
                                    <!-- Programming note: only show on admin-end -->
                                    <div class="col-lg-6">
                                        <div class="d-flex justify-content-end mb-1">
                                            <a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                              
                                                svg icon--}}
                                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
                                                    <use xlink:href="/css/common-icons.svg#pencil">
                                                    </use>
                                                </svg>
                                               
                                            </a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover border">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select All Admin Staff Team"/>
                                                            </div>
                                                        </th>
                                                        <th class="align-middle">
                                                            ADMIN-STAFF TEAM
                                                        </th>
                                                        <th class="align-middle">
                                                            PERMISSION
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="align-middle">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Admin Staff Team"/>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div>
                                                                    <img width="50" height="50"
                                                                        src="/tenant-resources/images/portrait/small/image.png"
                                                                        class="rounded-circle" alt="Admin staff Team Profile Image">
                                                                </div>
                                                                <div class="pt-2">
                                                                    <div class="font-family-secondary leading-none">Fast
                                                                        Talkers</div>
                                                                    <a href="#"
                                                                        class="font-family-secondary"><small>fasttalker@gmail.com</small></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="form-check form-switch">
                                                                <label class="form-check-label"
                                                                    for="Visible">Visible</label>
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="Visible" aria-label="Permission Toggle">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Admin Staff Team"/>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div>
                                                                    <img width="50" height="50"
                                                                        src="/tenant-resources/images/portrait/small/image.png"
                                                                        class="rounded-circle" alt="Admin staff Team Profile Image">
                                                                </div>
                                                                <div class="pt-2">
                                                                    <div class="font-family-secondary leading-none">Fast
                                                                        Talkers</div>
                                                                    <a href="#"
                                                                        class="font-family-secondary"><small>fasttalker@gmail.com</small></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="form-check form-switch">
                                                                <label class="form-check-label"
                                                                    for="Manage">Manage</label>
                                                                <input checked class="form-check-input" type="checkbox"
                                                                    role="switch" id="Manage" aria-label="Permission Toggle">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Programming note: only show on admin-end -->
                                </div>
                                <!-- /Assign Admin-Staff & admin-Staff Team -->
                                <!-- Checkbox Options -->
                                <div class="d-grid lg:grid-cols-3 sm:grid-cols-2 gap-2 my-5 col-lg-10">
                                    <div class="form-check">
                                        <input class="form-check-input" id="ExcludeAllNotifications" name=""
                                            type="checkbox" tabindex="">
                                        <label class="form-check-label form-check-label-sm fw-semibold"
                                            for="ExcludeAllNotifications">Exclude All Notifications</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="ExcludeParticipantNotifications" name=""
                                            type="checkbox" tabindex="">
                                        <label class="form-check-label form-check-label-sm fw-semibold"
                                            for="ExcludeParticipantNotifications">Exclude Participant
                                            Notifications</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="ExcludeRequesterNotifications" name=""
                                            type="checkbox" tabindex="">
                                        <label class="form-check-label form-check-label-sm fw-semibold"
                                            for="ExcludeRequesterNotifications">Exclude Requester Notifications</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="ExcludeProviderNotifications" name=""
                                            type="checkbox" tabindex="">
                                        <label class="form-check-label form-check-label-sm fw-semibold"
                                            for="ExcludeProviderNotifications">Exclude Provider Notifications</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="ExcludeServiceConsumerNotifications" name=""
                                            type="checkbox" tabindex="">
                                        <label class="form-check-label form-check-label-sm fw-semibold"
                                            for="ExcludeServiceConsumerNotifications">Exclude Service Consumer
                                            Notifications</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="ExcludeAdminNotifications" name=""
                                            type="checkbox" tabindex="">
                                        <label class="form-check-label form-check-label-sm fw-semibold"
                                            for="ExcludeAdminNotifications">Exclude Admin Notifications</label>
                                    </div>
                                </div>
                                <!-- /Checkbox Options -->
                                <div
                                    class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                    <button type="button" class="btn btn-outline-dark rounded" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('payment-info')">Back</button>
                                    <button type="" class="btn btn-primary rounded">Save as Draft</button>
                                    <button type="" class="btn btn-primary rounded">Request Feedback</button>
                                    <div class="dropdown">
                                        <button type="" class="btn btn-primary rounded dropdown-toggle w-100 h-100"
                                            type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Confirm</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Confirm + Invite</a></li>
                                            <li><a class="dropdown-item" href="#">Confirm + Assign</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service Request -->
                 
                        

                    </div>
                    @endif
                </div>
                <!-- END: Assignment Booking Form -->
            </div>
        </div>
    </div>



    <!-- Modal Request from User -->
    <div class="modal fade" id="RequestfromUserModal" tabindex="-1" aria-labelledby="RequestfromUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="RequestfromUserModalLabel">Request Service Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label class="form-label">Who would you like to request this information from?</label>
                                <div class="col-lg-8">
                                    <select class="form-select">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="mb-2">
                                    <label class="form-label">When should they first be notified?</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                id="WhenShouldTheyFirstBeNotifiedNow" value="optionNow">
                                            <label class="form-check-label" for="WhenShouldTheyFirstBeNotifiedNow">
                                                Now
                                                <svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.6943 0.858394C12.5168 0.781472 12.3153 0.776492 12.1341 0.844549C11.9528 0.912605 11.8067 1.04812 11.7279 1.22129C11.649 1.39446 11.6439 1.59109 11.7137 1.76793C11.7834 1.94477 11.9223 2.08734 12.0998 2.16426C12.1115 2.16997 12.2653 2.23998 12.5142 2.38286C14.0097 3.25097 15.2622 4.46617 16.1603 5.92041C17.6539 8.36212 17.5455 10.9524 17.525 11.441L17.5221 11.5125C17.5219 11.7019 17.5989 11.8837 17.736 12.0178C17.8732 12.1519 18.0593 12.2274 18.2535 12.2276C18.4477 12.2278 18.634 12.1527 18.7714 12.0188C18.9089 11.885 18.9862 11.7034 18.9864 11.5139V11.5196L18.9879 11.4825C19.02 10.7986 18.9882 10.1133 18.8927 9.4351C18.7316 8.2521 18.3436 6.7005 17.4196 5.18889C15.5892 2.19998 12.8642 0.931259 12.6943 0.859822V0.858394ZM12.8261 4.50882C12.7471 4.45174 12.6572 4.41075 12.5617 4.3883C12.4662 4.36585 12.367 4.36239 12.27 4.37813C12.1731 4.39388 12.0804 4.4285 11.9975 4.47993C11.9146 4.53137 11.8431 4.59856 11.7873 4.67752C11.7316 4.75648 11.6927 4.84557 11.673 4.9395C11.6533 5.03343 11.6531 5.13028 11.6726 5.22426C11.6921 5.31824 11.7307 5.40744 11.7862 5.48654C11.8418 5.56563 11.9131 5.63302 11.9958 5.68467C12.6792 6.12922 13.2423 6.72846 13.637 7.43126C14.0317 8.13407 14.2463 8.9196 14.2626 9.72085V9.72656C14.2626 9.91602 14.3397 10.0977 14.477 10.2317C14.6143 10.3657 14.8005 10.4409 14.9947 10.4409C15.1889 10.4409 15.3751 10.3657 15.5124 10.2317C15.6497 10.0977 15.7269 9.91602 15.7269 9.72656V9.63655C15.719 9.34531 15.6896 9.055 15.639 8.76788C15.5164 8.07154 15.2795 7.39903 14.9376 6.77622C14.587 6.14643 14.1312 5.57809 13.589 5.0946C13.1702 4.72027 12.8217 4.50596 12.8261 4.50882ZM0.738335 14.6643C-0.00870693 13.3536 -0.197783 11.8089 0.211892 10.3635C0.621566 8.91798 1.59716 7.68756 2.92822 6.9376C4.25929 6.18764 5.83915 5.97825 7.32702 6.3546C8.81488 6.73094 10.0915 7.66286 10.8815 8.94933L12.0822 10.9781L14.8732 12.9598C14.9717 13.0298 15.0508 13.1227 15.1032 13.2301C15.1556 13.3375 15.1797 13.456 15.1733 13.5748C15.1669 13.6935 15.1302 13.8089 15.0666 13.9103C15.0029 14.0118 14.9143 14.0961 14.8088 14.1556L11.1041 16.243L11.1085 16.2459L7.09924 18.5047V18.499L3.39457 20.585C3.28898 20.6444 3.16986 20.6771 3.04801 20.6803C2.92615 20.6834 2.80543 20.6568 2.69678 20.6029C2.58814 20.5489 2.49501 20.4694 2.42585 20.3715C2.35669 20.2735 2.31369 20.1603 2.30074 20.042L1.93906 16.6945L0.738335 14.6643ZM2.00642 13.9499L3.28475 16.1116C3.33578 16.198 3.3677 16.2939 3.37846 16.393L3.63911 18.799L13.1014 13.4684L11.0953 12.0454C11.013 11.9866 10.9441 11.9117 10.8932 11.8254L9.61344 9.66512C9.01966 8.70284 8.06247 8.00642 6.9478 7.72572C5.83314 7.44501 4.65009 7.60246 3.65318 8.16417C2.65628 8.72588 1.92519 9.64697 1.61722 10.7293C1.30925 11.8116 1.449 12.9671 2.00642 13.9499ZM7.64103 19.8506C8.02306 20.3204 8.56545 20.6406 9.16928 20.7528C9.7731 20.8649 10.3981 20.7616 10.9304 20.4615C11.4626 20.1615 11.8666 19.6849 12.0686 19.1184C12.2706 18.552 12.2573 17.9336 12.031 17.376L7.64103 19.8492V19.8506Z"
                                                        fill="black" />
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input js-form-check-input-notify-later" type="checkbox"
                                                id="WhenShouldTheyFirstBeNotifiedLater" value="optionLater">
                                            <label class="form-check-label" for="WhenShouldTheyFirstBeNotifiedLater">
                                                Later
                                                <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.40375 16.9197C11.1845 16.9197 12.8923 16.2123 14.1514 14.9532C15.4106 13.694 16.118 11.9862 16.118 10.2055C16.118 8.42478 15.4106 6.71699 14.1514 5.45783C12.8923 4.19867 11.1845 3.49128 9.40375 3.49128C7.62302 3.49128 5.91524 4.19867 4.65607 5.45783C3.39691 6.71699 2.68952 8.42478 2.68952 10.2055C2.68952 11.9862 3.39691 13.694 4.65607 14.9532C5.91524 16.2123 7.62302 16.9197 9.40375 16.9197ZM9.40375 18.2626C8.34568 18.2626 7.29797 18.0542 6.32044 17.6493C5.34291 17.2444 4.45471 16.6509 3.70654 15.9027C2.95837 15.1545 2.36489 14.2663 1.95999 13.2888C1.55508 12.3113 1.34668 11.2636 1.34668 10.2055C1.34668 9.14744 1.55508 8.09973 1.95999 7.1222C2.36489 6.14467 2.95837 5.25647 3.70654 4.5083C4.45471 3.76013 5.34291 3.16665 6.32044 2.76175C7.29797 2.35684 8.34568 2.14844 9.40375 2.14844C11.5406 2.14844 13.59 2.9973 15.101 4.5083C16.6119 6.01929 17.4608 8.06864 17.4608 10.2055C17.4608 12.3424 16.6119 14.3917 15.101 15.9027C13.59 17.4137 11.5406 18.2626 9.40375 18.2626Z"
                                                        fill="black" />
                                                    <path
                                                        d="M4.79388 16.7597L5.95678 17.4312L4.94965 19.1755C4.90588 19.2525 4.84733 19.32 4.77735 19.3743C4.70736 19.4285 4.62734 19.4684 4.54189 19.4916C4.45644 19.5148 4.36724 19.5209 4.27943 19.5095C4.19162 19.4981 4.10694 19.4694 4.03025 19.4251C3.95357 19.3808 3.8864 19.3218 3.83261 19.2515C3.77883 19.1812 3.73948 19.1009 3.71685 19.0153C3.69422 18.9297 3.68874 18.8404 3.70074 18.7527C3.71273 18.665 3.74196 18.5805 3.78675 18.5041L4.79388 16.7597ZM14.0138 16.7597L12.8509 17.4312L13.8581 19.1755C13.9018 19.2525 13.9604 19.32 14.0304 19.3743C14.1004 19.4285 14.1804 19.4684 14.2658 19.4916C14.3513 19.5148 14.4405 19.5209 14.5283 19.5095C14.6161 19.4981 14.7008 19.4694 14.7775 19.4251C14.8542 19.3808 14.9213 19.3218 14.9751 19.2515C15.0289 19.1812 15.0682 19.1009 15.0909 19.0153C15.1135 18.9297 15.119 18.8404 15.107 18.7527C15.095 18.665 15.0658 18.5805 15.021 18.5041L14.0138 16.7597ZM9.40386 10.2013H12.761C12.939 10.2013 13.1098 10.272 13.2357 10.3979C13.3617 10.5238 13.4324 10.6946 13.4324 10.8727C13.4324 11.0508 13.3617 11.2215 13.2357 11.3475C13.1098 11.4734 12.939 11.5441 12.761 11.5441H8.73244C8.55437 11.5441 8.38359 11.4734 8.25768 11.3475C8.13176 11.2215 8.06102 11.0508 8.06102 10.8727V6.17274C8.06102 5.99467 8.13176 5.82389 8.25768 5.69797C8.38359 5.57206 8.55437 5.50132 8.73244 5.50132C8.91051 5.50132 9.08129 5.57206 9.20721 5.69797C9.33313 5.82389 9.40386 5.99467 9.40386 6.17274V10.2013ZM0.559891 6.01026C0.131397 5.36456 -0.0605141 4.59049 0.0167198 3.81941C0.0939537 3.04832 0.435575 2.3277 0.983623 1.77981C1.53167 1.23192 2.25239 0.89051 3.0235 0.813498C3.79461 0.736487 4.56861 0.928621 5.21419 1.3573L4.23123 2.34026C3.85536 2.16075 3.43307 2.10218 3.02253 2.17262C2.61199 2.24305 2.23339 2.43904 1.93885 2.73357C1.64431 3.02811 1.44833 3.40672 1.37789 3.81726C1.30745 4.2278 1.36603 4.65008 1.54554 5.02595L0.561234 6.01026H0.559891ZM18.0854 6.01026C18.5133 5.36465 18.7048 4.59095 18.6274 3.82029C18.55 3.04963 18.2086 2.32942 17.6609 1.78175C17.1132 1.23407 16.393 0.892613 15.6224 0.815257C14.8517 0.7379 14.078 0.929402 13.4324 1.3573L14.4154 2.34026C14.7912 2.16075 15.2135 2.10218 15.6241 2.17262C16.0346 2.24305 16.4132 2.43904 16.7077 2.73357C17.0023 3.02811 17.1983 3.40672 17.2687 3.81726C17.3391 4.2278 17.2806 4.65008 17.101 5.02595L18.0854 6.01026Z"
                                                        fill="black" />
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 js-notify-later-content hidden">
                                    <label class="form-label-sm">Notify</label>
                                    <div class="d-flex align-items-center">
                                        <input type="" name=""
                                            class="form-control form-control-md form-control-max-w-xs text-center"
                                            value="100">
                                        <div class="ms-3">Day(s)</div>
                                    </div>
                                    <div class="mt-1">before the service start-time</div>
                                </div>
                                <div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="RepeatNotification" checked>
                                        <label class="form-check-label" for="RepeatNotification">Repeat Notification</label>
                                        <label class="form-check-label" for="RepeatNotification">Repeat Notification</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">
                                    How often should they be notified?
                                </label>
                                <div>
                                    <div class="form-check-inline">
                                        <input type="" name="" class="form-control form-control-md text-center form-control-max-w-xs"
                                            value="10">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="HowOftenShouldTheyBeNotified"
                                            id="Time" value="option1">
                                        <label class="form-check-label" for="Time">Time(s)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="HowOftenShouldTheyBeNotified"
                                            id="EveryDays" value="option2">
                                        <label class="form-check-label" for="EveryDays"> Every ___ Days</label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <label class="form-label">Message for the Requestee</label>
                                <textarea class="form-control" rows="3" cols="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <div class=" form-actions">
                        <div class="col-lg-6">
                            <button type="button" class="btn rounded w-100 btn-outline-dark"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col-lg-6">
                            <button type="button" class="btn rounded w-100 btn-primary">Add</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('modals.common.add-address')
    @include('modals.common.add-industry')
    @include('modals.common.add-department')
    
    @include('modals.common.add-new-customer')
    @include('modals.common.assign-admin-staff')
    @include('modals.common.assign-admin-staff-team')
    <!-- /Modal Request from User -->
    @if(!is_null($booking->id))

        @include('panels.common.add-documents', ['booking_id' => $booking->id])
    @endif

    @push('scripts')

    <script>
            function updateVal(attrName,val){
            
            Livewire.emit('updateVal', attrName, val);

        }

        Livewire.on('updateAddressType', (type) => {
            // Handle the event here
           
            // Open the modal
            $('#addAddressModal').modal('show');
        });
        Livewire.on('modalDismissed', () => {
            $('#addAddressModal').modal('hide');
               
            });
			
            document.addEventListener('updateModelVars', function (event) {
				const elemId = event.detail.elem;
				var elem = document.getElementById(elemId);
				var clickEvent = new Event("click");
				elem.dispatchEvent(clickEvent);
            });

    function setAddressAndBooking(addressId) {
        $('#addressId').val(addressId);
        @this.setBookingAddress(addressId);
    }

    </script>
    @if(!is_null($booking->id) || (!is_null($booking->company_id) && session()->get('isCustomer')))
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            Livewire.emit('isBooking');
            Livewire.emit('setBookingDepartments', @json($selectedDepartments),{{$booking->company_id}});
            Livewire.emit('updateCompany',{{$booking->company_id}});
        }, 1000);
    });
</script>
@endif
    <script src="/tenant-resources/js/form-functions.js"></script>
    @endpush
    @endif
</div>