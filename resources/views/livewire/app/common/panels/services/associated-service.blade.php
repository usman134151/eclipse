<div>
  @if(!is_null($service))
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <div class="breadcrumb-wrapper">
            <ol class="breadcrumb flex">
              <li class="breadcrumb-item">
                <a href="#">
                  <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23">
                    <use xlink:href="/css/common-icons.svg#home"></use>
                    </svg>
                </a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">
                   Services
                </a>
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
    <div class="card">
      <div class="card-body">
        <!-- BEGIN: Steps -->
        <!-- Nav tabs -->
       
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane fade active show" id="basic-service-setup" role="tabpanel" aria-labelledby="basic-service-setup-tab" tabindex="0">
           <div class="d-lg-flex justify-content-between align-items-center mb-4">
               <h2 class="mb-lg-0">Associated Service</h2>

             </div>
             <div class="d-lg-flex justify-content-between align-items-center mb-4">
               <div class="col-lg-4">
               <h4 class="mb-lg-0">Associated With:{{$modelName}}({{ucwords($modelType)}})</h4></div>
               <div class="col-lg-8">
               <button type="submit" class="btn btn-primary rounded px-4 py-2" wire:click="resetConfigurations()">RESET CONFIGURATION</button></div>
             </div>
             <div class="d-lg-flex justify-content-between align-items-center mb-4">
               <h2 class="mb-lg-0">Basic Service Setup </h2>
             </div>
             <div class="d-lg-flex justify-content-between align-items-center mb-4">
               <div class="col-lg-4">
               <h4 class="mb-lg-0">Service Name:</h4>
           <div><p class="mb-lg-0">{{$service->name}}</p></div></div>
               <div class="col-lg-8">
                   <h4 class="mb-lg-0">Description:<i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></h4>
                   <div><p class="mb-lg-0">{{$service->description}} </p></div></div>
             </div>
             
             
             <div class="row">
             <div class="col-lg-12 between-section-segment-spacing">
                                    <h2>Standard Rates</h2>
                                    @if($errors->has('service.hours_price') || $errors->has('service.after_hours_price') || $errors->has('service.fixed_rate') || $errors->has('service.day_rate_price'))
                                        <span class="d-inline-block invalid-feedback mt-2 mb-3">
                                            {{ $errors->first('service.hours_price') }}
                                            {{ $errors->first('service.after_hours_price') }}
                                            {{ $errors->first('service.fixed_rate') }}
                                            {{ $errors->first('service.day_rate_price') }}
                                        </span>
                                    @endif
                                    <div class="row justify-content-between">
                                    @if(!is_null($service->service_type) && count($service->service_type)==0)
                                        <div class="col-lg-6 mb-5 rates-alert ">
                                            Please select service type to configure Rates
                                        </div>   
                                    @endif   
                                    @foreach($serviceTypes as $type=>$parameters)
                                        @if(!is_null($service->service_type) && in_array($type,$service->service_type))
                                            <div class="col-lg-6 mb-5 {{$parameters['class']}}">
                                        @else
                                            <div class="col-lg-6 mb-5 d-none {{$parameters['class']}}">
                                        @endif        
                                                <!-- In-Person Rates -->
                                                <div class="d-lg-flex align-items-center justify-content-between mb-3">
                                                    <div class="d-lg-flex align-items-center gap-3">
                                                        <h3 class="form-label mb-0">
                                                            {{$parameters['title']}} Rates
                                                        </h3>

                                                    </div>
                                                    @if($type!=1)    
                                                <div>
                                                <a class="btn btn-sm btn-secondary rounded btn-hs-icon"  href="#" onclick=copyTo({{$type}},'charge')>
                                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.9 19.0008H13.3C14.3479 19.0008 15.2 18.1486 15.2 17.1008V5.70078C15.2 4.65293 14.3479 3.80078 13.3 3.80078H1.9C0.85215 3.80078 0 4.65293 0 5.70078V17.1008C0 18.1486 0.85215 19.0008 1.9 19.0008ZM1.9 5.70078H13.3L13.3019 17.1008H1.9V5.70078Z" fill="black"></path>
                                                    <path d="M17.1002 0H5.7002V1.9H17.1002V13.3H19.0002V1.9C19.0002 0.85215 18.148 0 17.1002 0Z" fill="black"></path>
                                                    </svg>
                                                </a>
                                                </div>
                                                @endif
                                                </div>
                                                
                                                <div class="border px-3 py-4 d-flex flex-column gap-3">
                                                    <div class="input-group billing-rates hour-rate @if($service->rate_status!=1) d-none @endif">
                                                        <span class="input-group-text bg-secondary col-lg-7"
                                                            id="BusinessHoursPerhour">
                                                            Business Hours (per hour)
                                                        </span>
                                                        <input type="text" class="form-control rounded-0 text-center px-0"
                                                            placeholder="$" aria-label="$" aria-describedby="" disabled>
                                                        <input type="text" class="form-control text-center chargeFld_{{$type}}"
                                                             aria-label="Enter Charges"
                                                            aria-describedby="BusinessHoursPerhour" wire:model.defer="service.hours_price{{$parameters['postfix']}}" maxlength="6" id="bh_{{$type}}">
                                                    </div>
                                                    <div class="input-group billing-rates hour-rate @if($service->rate_status!=1) d-none @endif">
                                                        <span class="input-group-text bg-secondary col-lg-7"
                                                            id="AfterHoursperhour">
                                                            After-Hours (per hour)
                                                        </span>
                                                        <input type="text" class="form-control text-center px-0"
                                                            placeholder="$" aria-label="$" aria-describedby="" disabled>
                                                        <input type="text" class="form-control text-center chargeFld_{{$type}}"
                                                             aria-label="Enter Charges"
                                                            aria-describedby="AfterHoursperhour" wire:model.defer="service.after_hours_price{{$parameters['postfix']}}" maxlength="6" id="abh_{{$type}}">
                                                    </div>
                                                    <div class="input-group billing-rates day-rate @if($service->rate_status!=2) d-none @endif">
                                                        <span class="input-group-text bg-secondary col-lg-7 " id="DayRate">
                                                            Day Rate
                                                        </span>
                                                        <input type="text" class="form-control text-center px-0"
                                                            placeholder="$" aria-label="$" aria-describedby="">
                                                        <input type="text" class="form-control text-center chargeFld_{{$type}}"
                                                             aria-label="Enter Charges" aria-describedby="DayRate" wire:model.defer="service.day_rate_price{{$parameters['postfix']}}" maxlength="6" id="dr_{{$type}}">
                                                    </div>
                                                    <div class="input-group billing-rates fixed-rate @if($service->rate_status!=4) d-none @endif">
                                                        <span class="input-group-text bg-secondary col-lg-7" id="FixedRate">
                                                            Fixed Rate
                                                        </span>
                                                        <input type="text" class="form-control text-center px-0"
                                                            placeholder="$" aria-label="$" aria-describedby="">
                                                        <input type="text" class="form-control text-center chargeFld_{{$type}}"
                                                             aria-label="Enter Charges" aria-describedby="FixedRate" wire:model.defer="service.fixed_rate{{$parameters['postfix']}}" maxlength="6" id="fr_{{$type}}">
                                                    </div>
                                                </div>
                                                <!-- /In-Person Rates -->
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
               <div class="row">
                        

                                <!-- Additional service charges -->
                                @if($additionalCharge)
                                <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: true }">
                                @else
                                <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
                                @endif    
                                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                                        <div class="form-check form-switch form-switch-column mb-lg-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="AdditionalServiceCharges" @click="open = !open"
                                                x-text="open==true  ? 'hide' : 'show'" wire:model="additionalCharge">
                                            <label class="form-check-label"
                                                for="AdditionalServiceCharges">Disable</label>
                                            <label class="form-check-label"
                                                for="AdditionalServiceCharges">Enable</label>
                                        </div>
                                        <h2 class="mb-lg-0">Additional Service Charges</h2>
                                    </div>
                                    <div class="row switch-toggle-content" x-show="open">
                                        <div class="col-lg-12">
                                            <div class="border p-3">
                                           
                                                <div class="row">
                                                @foreach($serviceTypes as $type=>$parameters)
                                                @if(!is_null($service->service_type) && in_array($type,$service->service_type))
                                                 <div class="col-lg-6 pe-lg-5">
                                                 @else
                                                 <div class="col-lg-6 pe-lg-5 d-none">
                                                @endif 
                                                    
                                                        <div class="text-primary fw-bold">
                                                           {{$parameters['title']}}
                                                        </div>
                                                        <div class="d-flex flex-column gap-5">
                                                            <!-- In-Person Additional Service Charges -->
                                                            <div>
                                                                <div class="d-flex flex-column gap-4">
                                                                    @foreach($serviceCharge[$type] as $index=>$data)
                                                                    <div class="d-flex flex-column gap-3">
                                                                        <div class="input-group">
                                                                            <span
                                                                                class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                id="">
                                                                                Additional Charge
                                                                            </span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label" aria-label=""
                                                                                aria-describedby="" wire:key="labels_{{$parameters['title']}}-{{ $index }}" wire:model.defer="serviceCharge.{{$type}}.{{$index}}.label"/>
                                                                            <div class="col-lg-1">
                                                                                <input type="text"
                                                                                    class="form-control text-center rounded-0"
                                                                                    placeholder="$" aria-label=""
                                                                                    aria-describedby="" wire:key="hours_{{$parameters['title']}}-{{ $index }}" disabled="disabled" />
                                                                            </div>
                                                                            <input type="text"
                                                                                class="form-control text-center"
                                                                                 aria-label=""
                                                                                aria-describedby="" wire:key="charge_{{$parameters['title']}}-{{ $index }}" wire:model.defer="serviceCharge.{{$type}}.{{$index}}.price" />
                                                                        </div>


                                                                    </div>
                                                                    @endforeach
                                                                    
                                                                   <div class="text-end">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <!-- /In-Person Additional Service Charges -->
                                                            <!-- Additional Payment Additional Service Charges -->
                                                            <div>
                                                                <div class="d-flex flex-column gap-4">
                                                                @foreach($servicePayment[$type] as $index=>$data)
                                                                    <div class="d-flex flex-column gap-3">
                                                                        <div class="input-group">
                                                                            <span
                                                                                class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                id="">
                                                                                Additional Payment
                                                                            </span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label" aria-label=""
                                                                                aria-describedby="" wire:key="service_payment_label-{{ $index }}" wire:model.defer="servicePayment.{{$type}}.{{$index}}.label"/>
                                                                            <div class="col-lg-1">
                                                                                <input type="text"
                                                                                    class="form-control text-center rounded-0"
                                                                                    placeholder="$" aria-label=""
                                                                                    aria-describedby="" disabled/>
                                                                            </div>
                                                                            <input type="text"
                                                                                class="form-control text-center"
                                                                                placeholder="00.00" aria-label=""
                                                                                aria-describedby="" wire:key="payment_price_{{$type}}-{{ $index }}"  wire:model.defer="servicePayment.{{$type}}.{{$index}}.price"/>
                                                                        </div>

                                                                    </div>
                                                                @endforeach   
                                                                    <div class="text-end">
                                                                       <!-- <a href="#" class="fw-bold" wire:click.prevent="addPayment({{$type}})">
                                                                            <small>
                                                                            Add Additional Service Payment
                                                                                
                                                                                <svg aria-label="Add Additional Service Charges"
                                                                                    class="me-1" width="20"
                                                                                    height="21" viewBox="0 0 20 21">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#add-new">
                                                                                    </use>
                                                                                </svg>
                                                                               
                                                                            </small>
                                                                        </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Additional Payment Additional Service Charges -->
                                                        </div>
                                                    </div>
                                                    @if($loop->index==1)
                                                    <div class="row">
                                                    <div class="col-12 px-0">
                                                        <hr>
                                                    </div>
                                                </div>
                                                    @endif
                                                @endforeach    

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- Additional service charges -->
                                 @if($emergencyCharge) 
                                 <div class="col-lg-12 between-section-segment-spacing">
                                 @else
                                <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
                                @endif    
                                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                                        <div class="form-check form-switch form-switch-column mb-lg-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="ExpeditedServices" @click="open = !open"
                                                x-text="open==true  ? 'hide' : 'show'" wire:model="emergencyCharge">
                                            <label class="form-check-label" for="ExpeditedServices">Disable</label>
                                            <label class="form-check-label" for="ExpeditedServices">Enable</label>
                                        </div>
                                        <h2 class="mb-lg-0">Expedited Services</h2>
                                    </div>
                                    <div class="row switch-toggle-content" x-show="open">
                                        <div class="col-lg-12">
                                            <div class="border p-3">
                                                <div class="row">
                                                @foreach($serviceTypes as $type=>$parameters)
                                                @if(!is_null($service->service_type) && in_array($type,$service->service_type))
                                                 <div class="col-lg-6 pe-lg-5">
                                                 @else
                                                 <div class="col-lg-6 pe-lg-5 d-none">
                                                @endif 
                                                        <div class="text-primary fw-bold">
                                                           {{$parameters['title']}}
                                                        </div>
                                                        <div class="d-flex flex-column gap-5">
                                                            <!-- In-Person Additional Service Charges -->
                                                            <div>
                                                               @foreach($emergencyHour[$type] as $index=>$data)
                                                                <div class="d-flex flex-column gap-3 mb-3">
                                                                    <div class="input-group">
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Parameter {{ $loop->index + 1 }} <small>(Hour)</small>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00 Hour" aria-label=""
                                                                            aria-describedby="" wire:key="hour_service_emergency-{{$type}}-{{ $index }}" wire:model.defer="emergencyHour.{{$type}}.{{$index}}.hour" />
                                                                        <div class="col-lg-2">
                                                                            <select class="form-select rounded-0"  wire:model.defer="emergencyHour.{{$type}}.{{$index}}.price_type">
                                                                                <option value="$">$</option>
                                                                                <option value="%">%</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00.00" aria-label=""
                                                                            aria-describedby=""   wire:model.defer="emergencyHour.{{$type}}.{{$index}}.price" />
                                                                    </div>


                                                                </div>
                                                                @endforeach
                                                                <div class="text-end">
                                                                    <a href="#" class="fw-bold" wire:click.prevent="addEmergency({{$type}})">
                                                                       <!-- <small>
                                                                            Add Additional Parameter

                                                                            <svg aria-label="Add Additional Service Charges"
                                                                                class="me-1" width="20" height="21"
                                                                                viewBox="0 0 20 21">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#add-new">
                                                                                </use>
                                                                            </svg>
                                                                           
                                                                        </small> -->
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- /In-Person Additional Service Charges -->
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 px-0">
                                                        <hr>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /Expedited Services -->
                                @if($cancelCharge) 
                                 <div class="col-lg-12 between-section-segment-spacing">
                                 @else
                                <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
                                @endif   
                                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                                        <div class="form-check form-switch form-switch-column mb-lg-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="CancellationsModifications&Rescheduling" @click="open = !open"
                                                x-text="open==true  ? 'hide' : 'show'" wire:model="cancelCharge">
                                            <label class="form-check-label"
                                                for="CancellationsModifications&Rescheduling">Disable</label>
                                            <label class="form-check-label"
                                                for="CancellationsModifications&Rescheduling">Enable</label>
                                        </div>
                                        <h2 class="mb-lg-0">Cancellations, Modifications & Rescheduling</h2>
                                    </div>
                                    <div class="row switch-toggle-content" x-show="open">
                                        <div class="col-lg-12">
                                            <div class="border p-3">
                                                <div class="row">
                                                @foreach($serviceTypes as $type=>$parameters)
                                                @if(!is_null($service->service_type) && in_array($type,$service->service_type))
                                                 <div class="col-lg-6 pe-lg-5">
                                                 @else
                                                 <div class="col-lg-6 pe-lg-5 d-none">
                                                @endif 
                                                        <div class="text-primary fw-bold">
                                                            {{$parameters['title']}}
                                                        </div>
                                                        <div class="d-flex flex-column gap-5">
                                                            <!-- In-Person Additional Service Charges -->
                                                            <div>
                                                            @foreach($cancelCharges[$type] as $index=>$data)
                                                                <div class="d-flex flex-column gap-3 mb-3">
                                                                    <div class="input-group">
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Parameter {{ $loop->index + 1 }} <small>(Hour)</small>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00 Hour" aria-label=""
                                                                            aria-describedby=""  wire:model.defer="cancelCharges.{{$type}}.{{$index}}.hour" />
                                                                        <div class="col-lg-2">
                                                                            <select class="form-select rounded-0" wire:model.defer="cancelCharges.{{$type}}.{{$index}}.price_type">
                                                                                <option value="$">$</option>
                                                                                <option value="%">%</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00.00" aria-label=""
                                                                            aria-describedby="" wire:model.defer="cancelCharges.{{$type}}.{{$index}}.price"/>
                                                                    </div>

                                                                </div>
                                                                @endforeach
                                                                <div class="text-end">
                                                                    <a href="#" class="fw-bold" wire:click.prevent="addCancelCharge({{$type}})">
                                                                      <!--  <small>
                                                                            Add Additional Parameter

                                                                            <svg aria-label="Add Additional Service Charges"
                                                                                class="me-1" width="20" height="21"
                                                                                viewBox="0 0 20 21">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#add-new">
                                                                                </use>
                                                                            </svg>
                                                                           
                                                                        </small> -->
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- /In-Person Additional Service Charges -->
                                                        </div>
                                                    </div>
                                                @endforeach                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 px-0">
                                                        <hr>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /Cancellations, Modifications & Rescheduling -->
                                @if($showSpecialization)
                                <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: true }">
                                @else
                                <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
                                @endif    
                              
                                    <div class="d-lg-flex align-items-center mb-3 gap-3">
                                        <div class="form-check form-switch form-switch-column mb-lg-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="SpecializationRates" @click="open = !open"
                                                x-text="open==true  ? 'hide' : 'show'" wire:model="showSpecialization">
                                            <label class="form-check-label" for="SpecializationRates">Disable</label>
                                            <label class="form-check-label" for="SpecializationRates">Enable</label>
                                        </div>
                                        <h2 class="mb-lg-0">Specialization Rates</h2>
                                    </div>
                                    <div class="row switch-toggle-content" x-show="open">
                                        <div class="col-lg-12">
                                            <div class="border p-3">
                                                <!-- 
                                                <div class="text-lg-end mb-4">
                                                    <a href="#" class="btn btn-primary">Create New Specialization</a>
                                                </div> -->
                                                @foreach ($serviceSpecialization as $index=>$speclization)
                                                <div class="d-flex flex-column gap-3 mb-3">
                                                    <div class="d-lg-flex gap-4">
                                                        <div class="align-self-end col-lg-5">
                                                            <div class="input-group">
                                                                <select class="form-select  w-75" wire:model.defer="serviceSpecialization.{{$index}}.specialization_id">
                                                                   <option value="0">Select Specialization</option>
                                                                   @foreach($specializations as $specialization)
                                                                   <option value="{{$specialization->id}}">{{$specialization->name}}</option>
                                                                   @endforeach
                                                                </select>
                                                                <select class="form-select" wire:model.defer="serviceSpecialization.{{$index}}.common.price_type">
                                                                    <option value="$">$</option>
                                                                    <option value="%">%</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        @foreach($serviceTypes as $type=>$parameters)
                                                        @if(!is_null($service->service_type) && in_array($type,$service->service_type))
                                                        <div class="align-self-end">
                                                        @else
                                                        <div class="align-self-end d-none">
                                                        @endif     
                                                        
                                                            <div class="text-primary fw-bold">{{$parameters['title']}}</div>
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="00.00" aria-label="" aria-describedby="" wire:model.defer="serviceSpecialization.{{$index}}.{{$type}}.price" />
                                                        </div>
                                                        @endforeach
                                                    </div>


                                                </div>
                                                @endforeach
                                                <div class="text-end">
                                                    <a href="#" class="fw-bold"  wire:click.prevent="addSpecialization">
                                                      <!--  <small>
                                                            Add Additional Specialization
 
                                                            <svg aria-label="Add Additional Specialization"
                                                                class="me-1" width="20" height="21"
                                                                viewBox="0 0 20 21">
                                                                <use xlink:href="/css/common-icons.svg#add-new">
                                                                </use>
                                                            </svg>
                                                           
                                                        </small> -->
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /Specialization Rates -->

                         
                        </div>
               {{--Customized Forms Selection start  --}}
               <div class="col-lg-12 mb-5" x-data="{ open: false }">
                   <div class="d-lg-flex align-items-center mb-4 gap-3">
                     <div class="form-check form-switch form-switch-column mb-lg-0">
                       <input class="form-check-input" type="checkbox" role="switch" id="SpecializationRates" @click="open = !open" x-text="open==true  ? 'hide' : 'show'">
                        <label class="form-check-label" for="SpecializationRates">Disable</label>
                        <label class="form-check-label" for="SpecializationRates">Enable</label>
                     </div>
                     <h2 class="mb-lg-0">Customized Forms Selection</h2>
                   </div>
                   <div class="row switch-toggle-content" x-show="open">
                     <div class="col-lg-12">
                       <div class="border p-3">
                         <div class="text-lg-end mb-4">
                           <a href="#" class="btn btn-primary">Create New Specialization</a>
                         </div>
                         <div class="d-flex flex-column gap-3">
                           
                         
                           <div class="d-lg-flex gap-4">
                             <div class="align-self-end col-lg-5">
                               <div class="input-group">
                                 <select class="form-select bg-secondary w-75">
                                   <option>Medical Interpreting</option>
                                 </select>
                                 <select class="form-select">
                                   <option>$</option>
                                 </select>
                               </div>
                             </div>
                             <div class="align-self-end">
                               <div class="text-primary fw-bold">In-Person</div>
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                             </div>
                             <div class="align-self-end">
                               <div class="text-primary fw-bold">Virtual</div>
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                             </div>
                             <div class="align-self-end">
                               <div class="text-primary fw-bold">Phone</div>
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                             </div>
                             <div class="align-self-end">
                               <div class="text-primary fw-bold">Teleconference</div>
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                             </div>
                           </div>
                          
                           <div class="text-end">
                             <a href="#" class="fw-bold">
                             <!--  <small>
                                 Add Additional Specialization 
                                 <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                 </svg>
                               </small> -->
                             </a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div> {{--Customized Forms Selection end  --}}
               <div class="col-12 justify-content-center form-actions d-flex gap-2">
                
                 <button type="submit" class="btn btn-primary rounded" @click="associateservice = false" wire:click="saveServiceRates()">Save Changes </button>
                
               </div>
             </div>
          </div>
          <!-- END: basic-service-setup -->
        </div>
        <!-- END: Steps -->    
      </div>
    </div>
  </div>
@endif  
</div>