<div>
    <!-- BEGIN: Content-->
       <div class="content-header row">
         <div class="content-header-left col-md-9 col-12 mb-2">
           <div class="row breadcrumbs-top">
             <div class="col-12">
               <h1 class="content-header-title float-start mb-0">Add Service</h1>
               <div class="breadcrumb-wrapper">
                 <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                     <a href="">
                     Home
                     </a>
                   </li>
                   <li class="breadcrumb-item">
                     <a href="javascript:void(0)">
                     Accommodation & Services Setup
                     </a>
                   </li>
                   <li class="breadcrumb-item">
                     Add Service
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
             <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                 <button class="nav-link active" id="basic-service-setup-tab" data-bs-toggle="tab" data-bs-target="#basic-service-setup" type="button" role="tab" aria-controls="basic-service-setup" aria-selected="true"><span class="number">1</span> Basic Service Setup</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="advanced-service-rate-tab" data-bs-toggle="tab" data-bs-target="#advanced-service-rate" type="button" role="tab" aria-controls="advanced-service-rate" aria-selected="false"><span class="number">2</span> Advanced Service Rate</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="service-forms-tab" data-bs-toggle="tab" data-bs-target="#service-forms" type="button" role="tab" aria-controls="service-forms" aria-selected="false"><span class="number">3</span> Service Forms</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="service-configuration-tab" data-bs-toggle="tab" data-bs-target="#service-configuration" type="button" role="tab" aria-controls="service-configuration" aria-selected="false"><span class="number">4</span> Service Configuration</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="advance-options-tab" data-bs-toggle="tab" data-bs-target="#advance-options" type="button" role="tab" aria-controls="advance-options" aria-selected="false"><span class="number">5</span> Advance Options</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="notification-setting-tab" data-bs-toggle="tab" data-bs-target="#notification-setting" type="button" role="tab" aria-controls="notification-setting" aria-selected="false"><span class="number">6</span> Notification Setting</button>
               </li>
             </ul>
             <!-- Tab panes -->
             <div class="tab-content">
               <div class="tab-pane fade active show" id="basic-service-setup" role="tabpanel" aria-labelledby="basic-service-setup-tab" tabindex="0">
                 <div class="d-lg-flex justify-content-between align-items-center mb-4">
                   <h2 class="mb-lg-0">Basic Service Setup</h2>
                   <div class="form-check form-switch form-switch-column">
                     <input class="form-check-input" type="checkbox" role="switch" id="basicService">
                     <label class="form-check-label" for="basicService">Active</label>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="mb-4">
                       <label class="form-label" for="service-name">
                       Service Name <span class="mandatory">*</span>
                       </label>
                       <input
                         type="text"
                         id="service-name"
                         class="form-control"
                         name="service-name"
                         placeholder="Company"
                         />
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="mb-4">
                       <label class="form-label" for="service-name">
                       Service Type <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </label>
                       <div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" id="All" name="All" type="checkbox" tabindex="" />
                           <label class="form-check-label" for="All">All</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" id="InPerson" name="InPerson" type="checkbox" tabindex="" />
                           <label class="form-check-label" for="InPerson"> In-Person</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" id="Virtual" name="Virtual" type="checkbox" tabindex="" />
                           <label class="form-check-label" for="Virtual"> Virtual</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" id="Phone" name="Phone" type="checkbox" tabindex="" />
                           <label class="form-check-label" for="Phone"> Phone</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" id="Teleconference" name="Teleconference" type="checkbox" tabindex="" />
                           <label class="form-check-label" for="Teleconference"> Teleconference</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="mb-4">
                       <label class="form-label" for="description">
                       Description <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </label>
                       <textarea rows="4" cols="4" id="description"
                         class="form-control"
                         name="description"
                         placeholder=""></textarea>
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="mb-4">
                       <label class="form-label" for="service-name">
                       Permitted Scheduling Frequencies <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </label>
                       <div class="form-check">
                         <input class="form-check-input" id="one-time-request" name="one-time-request" type="checkbox" tabindex="" />
                         <label class="form-check-label" for="one-time-request">One-Time Request</label>
                       </div>
                       <div class="form-check">
                         <input class="form-check-input" id="Daily" name="Daily" type="checkbox" tabindex="" />
                         <label class="form-check-label" for="Daily"> Daily</label>
                       </div>
                       <div class="form-check">
                         <input class="form-check-input" id="Weekly" name="Weekly" type="checkbox" tabindex="" />
                         <label class="form-check-label" for="Weekly"> Weekly</label>
                       </div>
                       <div class="form-check">
                         <input class="form-check-input" id="WeekdailyBusinessDays" name="WeekdailyBusinessDays" type="checkbox" tabindex="" />
                         <label class="form-check-label" for="WeekdailyBusinessDays"> Weekdaily (Business Days)</label>
                       </div>
                       <div class="form-check">
                         <input class="form-check-input" id="Monthly" name="Monthly" type="checkbox" tabindex="" />
                         <label class="form-check-label" for="Monthly"> Monthly</label>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="mb-5">
                       <div class="d-lg-flex gap-4 align-items-center">
                         <h2 class="mb-lg-0">Enable Billing Rates</h2>
                         <div>
                           <div class="form-check form-check-inline">
                             <input class="form-check-input" id="HourlyMinutesRate" name="HourlyMinutesRate" type="radio" tabindex="" />
                             <label class="form-check-label" for="HourlyMinutesRate">Hourly/Minutes Rate</label>
                           </div>
                           <div class="form-check form-check-inline">
                             <input class="form-check-input" id="DayRate" name="DayRate" type="radio" tabindex="" />
                             <label class="form-check-label" for="DayRate"> Day Rate</label>
                           </div>
                           <div class="form-check form-check-inline">
                             <input class="form-check-input" id="FixedRate" name="FixedRate" type="radio" tabindex="" />
                             <label class="form-check-label" for="FixedRate"> Fixed Rate</label>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-12 mb-5">
                     <h2>Standard Rates</h2>
                     <div class="row justify-content-between">
                       <div class="col-lg-5">
                         <!-- In-Person Rates -->
                         <div class="mb-4">
                           <div class="d-lg-flex align-items-center justify-content-between mb-3">
                             <div class="d-lg-flex align-items-center gap-3">
                               <h3 class="form-label mb-0">
                                 In-Person Rates
                               </h3>
                               <div class="form-check form-check-inline">
                                 <input class="form-check-input" id="MultiplyProvidersInPerson" name="MultiplyProvidersInPerson" type="checkbox" tabindex="" />
                                 <label class="form-check-label" for="MultiplyProvidersInPerson"> Multiply by No. of Providers</label>
                               </div>
                             </div>
                           </div>
                           <div class="border px-3 py-4 d-flex flex-column gap-3">
                             <div class="input-group">
                               <span class="input-group-text bg-secondary col-lg-7" id="BusinessHoursperhour">
                               Business Hours (per hour)
                               </span>
                               <input type="text" class="form-control rounded-0 text-center px-0" placeholder="$" aria-label="" aria-describedby="">
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="BusinessHoursperhour">
                             </div>
                             <div class="input-group">
                               <span class="input-group-text bg-secondary col-lg-7" id="AfterHoursperhour">
                               After-Hours (per hour)
                               </span>
                               <input type="text" class="form-control text-center px-0" placeholder="$" aria-label="" aria-describedby="">
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="AfterHoursperhour">
                             </div>
                             <div class="input-group">
                               <span class="input-group-text bg-secondary col-lg-7" id="DayRate">
                               Day Rate
                               </span>
                               <input type="text" class="form-control text-center px-0" placeholder="$" aria-label="" aria-describedby="">
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="DayRate">
                             </div>
                             <div class="input-group">
                               <span class="input-group-text bg-secondary col-lg-7" id="FixedRate">
                               Fixed Rate
                               </span>
                               <input type="text" class="form-control text-center px-0" placeholder="$" aria-label="" aria-describedby="">
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="FixedRate">
                             </div>
                           </div>
                         </div>
                         <!-- /In-Person Rates -->
                       </div>
                       <div class="col-lg-5">
                         <!-- Virtual Rates -->
                         <div class="mb-4">
                           <div class="d-lg-flex align-items-center justify-content-between mb-3">
                             <div class="d-lg-flex align-items-center gap-3">
                               <label class="form-label mb-0">
                               Virtual Rates
                               </label>
                               <div class="form-check form-check-inline">
                                 <input class="form-check-input" id="MultiplyProvidersVirtual" name="MultiplyProvidersVirtual" type="checkbox" tabindex="" />
                                 <label class="form-check-label" for="MultiplyProvidersVirtual"> Multiply by No. of Providers</label>
                               </div>
                             </div>
                             <div>
                               <a href="" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                 <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M1.9 19.0008H13.3C14.3479 19.0008 15.2 18.1486 15.2 17.1008V5.70078C15.2 4.65293 14.3479 3.80078 13.3 3.80078H1.9C0.85215 3.80078 0 4.65293 0 5.70078V17.1008C0 18.1486 0.85215 19.0008 1.9 19.0008ZM1.9 5.70078H13.3L13.3019 17.1008H1.9V5.70078Z" fill="black"/>
                                   <path d="M17.1002 0H5.7002V1.9H17.1002V13.3H19.0002V1.9C19.0002 0.85215 18.148 0 17.1002 0Z" fill="black"/>
                                 </svg>
                               </a>
                             </div>
                           </div>
                           <div class="border px-3 py-4 d-flex flex-column gap-3">
                             <div class="input-group">
                               <span class="input-group-text bg-secondary col-lg-7" id="BusinessHoursperhour">
                               Business Hours (per hour)
                               </span>
                               <input type="text" class="form-control rounded-0 text-center px-0" placeholder="$" aria-label="" aria-describedby="">
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="BusinessHoursperhour">
                             </div>
                             <div class="input-group">
                               <span class="input-group-text bg-secondary col-lg-7" id="AfterHoursperhour">
                               After-Hours (per hour)
                               </span>
                               <input type="text" class="form-control text-center px-0" placeholder="$" aria-label="" aria-describedby="">
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="AfterHoursperhour">
                             </div>
                             <div class="input-group">
                               <span class="input-group-text bg-secondary col-lg-7" id="DayRate">
                               Day Rate
                               </span>
                               <input type="text" class="form-control text-center px-0" placeholder="$" aria-label="" aria-describedby="">
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="DayRate">
                             </div>
                             <div class="input-group">
                               <span class="input-group-text bg-secondary col-lg-7" id="FixedRate">
                               Fixed Rate
                               </span>
                               <input type="text" class="form-control text-center px-0" placeholder="$" aria-label="" aria-describedby="">
                               <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="FixedRate">
                             </div>
                           </div>
                         </div>
                         <!-- /Virtual Rates -->
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-12">
                     <h2>Service Capacity & Capabilities</h2>
                     <div class="row justify-content-between">
                       <div class="col-lg-5">
                         <!-- Service Type: In-Person -->
                         <div class="mb-4">
                           <div class="d-lg-flex align-items-center justify-content-between mb-3">
                             <div class="d-lg-flex align-items-center gap-3">
                               <h3 class="mb-0">
                                 Service Type: In-Person
                               </h3>
                             </div>
                           </div>
                           <div class="border px-3 py-4 d-flex flex-column gap-3">
                             <div class="row justify-content-between">
                               <div class="col-lg-6">
                                 <div class="mb-4">
                                   <label class="form-label-base">
                                   Min. Duration <span class="mandatory">*</span> <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <div class="d-flex justify-content-around">
                                     <label class="form-label-sm">Hours</label>
                                     <label class="form-label-sm">Minutes</label>
                                   </div>
                                   <div class="input-group">
                                     <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                     <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-6">
                                 <div class="mb-4">
                                   <label class="form-label-base">
                                   Max. Duration <span class="mandatory">*</span> <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <div class="d-flex justify-content-around">
                                     <label class="form-label-sm">Hours</label>
                                     <label class="form-label-sm">Minutes</label>
                                   </div>
                                   <div class="input-group">
                                     <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                     <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-6">
                                 <div class="mb-4">
                                   <label class="form-label-base">
                                   Min. Providers <span class="mandatory">*</span> <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <input type="text" class="form-control text-center" placeholder="1" aria-label="1" aria-describedby="">
                                 </div>
                               </div>
                               <div class="col-lg-6">
                                 <div class="mb-4">
                                   <label class="form-label-base">
                                   Max. Providers <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <input type="text" class="form-control text-center" placeholder="50" aria-label="50" aria-describedby="">
                                 </div>
                               </div>
                               <div class="col-12">
                                 <div class="mb-4 row">
                                   <label class="form-label-base col-lg-6">
                                   Default Providers <span class="mandatory">*</span> <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <div class="col-lg-6">
                                     <input type="text" class="form-control text-center" placeholder="2" aria-label="2" aria-describedby="">
                                   </div>
                                 </div>
                               </div>
                               <div class="col-12">
                                 <div class="mb-4 row">
                                   <label class="form-label-base col-lg-6">
                                   Provider Limit <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <div class="col-lg-6">
                                     <input type="text" class="form-control text-center" placeholder="100" aria-label="100" aria-describedby="">
                                   </div>
                                 </div>
                               </div>
                               <div class="col-12">
                                 <div class="mb-4 row">
                                   <label class="form-label-base col-lg-7 align-self-center">
                                   Provider Return Window <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <div class="col-lg-5">
                                     <div class="d-flex justify-content-around">
                                       <label class="form-label-sm">Hours</label>
                                       <label class="form-label-sm">Minutes</label>
                                     </div>
                                     <div class="input-group">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-12">
                                 <div class="form-check form-check-inline">
                                   <input class="form-check-input" id="ExcludeAfterHoursInPerson" name="ExcludeAfterHoursInPerson" type="checkbox" tabindex="" />
                                   <label class="form-check-label" for="ExcludeAfterHoursInPerson">Exclude After-hours</label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                   <input class="form-check-input" id="ExcludeClosedHoursInPerson" name="ExcludeClosedHoursInPerson" type="checkbox" tabindex="" />
                                   <label class="form-check-label" for="ExcludeClosedHoursInPerson"> Exclude Closed-hours</label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                   <input class="form-check-input" id="ByRequestInPerson" name="ByRequestInPerson" type="checkbox" tabindex="" />
                                   <label class="form-check-label" for="ByRequestInPerson"> By Request</label>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                         <!-- /Service Type: In-Person -->
                       </div>
                       <div class="col-lg-5">
                         <!-- Service Type: Virtual -->
                         <div class="mb-4">
                           <div class="d-lg-flex align-items-center justify-content-between mb-3">
                             <div class="d-lg-flex align-items-center gap-3">
                               <h3 class="mb-0">
                                 Service Type: Virtual
                               </h3>
                             </div>
                             <div>
                               <div>
                                 <a href="" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                   <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M1.9 19.0008H13.3C14.3479 19.0008 15.2 18.1486 15.2 17.1008V5.70078C15.2 4.65293 14.3479 3.80078 13.3 3.80078H1.9C0.85215 3.80078 0 4.65293 0 5.70078V17.1008C0 18.1486 0.85215 19.0008 1.9 19.0008ZM1.9 5.70078H13.3L13.3019 17.1008H1.9V5.70078Z" fill="black"/>
                                     <path d="M17.1002 0H5.7002V1.9H17.1002V13.3H19.0002V1.9C19.0002 0.85215 18.148 0 17.1002 0Z" fill="black"/>
                                   </svg>
                                 </a>
                               </div>
                             </div>
                           </div>
                           <div class="border px-3 py-4 d-flex flex-column gap-3">
                             <div class="row justify-content-between">
                               <div class="col-lg-6">
                                 <div class="mb-4">
                                   <label class="form-label-base">
                                   Min. Duration <span class="mandatory">*</span> <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <div class="d-flex justify-content-around">
                                     <label class="form-label-sm">Hours</label>
                                     <label class="form-label-sm">Minutes</label>
                                   </div>
                                   <div class="input-group">
                                     <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                     <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-6">
                                 <div class="mb-4">
                                   <label class="form-label-base">
                                   Max. Duration <span class="mandatory">*</span> <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <div class="d-flex justify-content-around">
                                     <label class="form-label-sm">Hours</label>
                                     <label class="form-label-sm">Minutes</label>
                                   </div>
                                   <div class="input-group">
                                     <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                     <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-6">
                                 <div class="mb-4">
                                   <label class="form-label-base">
                                   Min. Providers <span class="mandatory">*</span> <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <input type="text" class="form-control text-center" placeholder="1" aria-label="1" aria-describedby="">
                                 </div>
                               </div>
                               <div class="col-lg-6">
                                 <div class="mb-4">
                                   <label class="form-label-base">
                                   Max. Providers <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <input type="text" class="form-control text-center" placeholder="50" aria-label="50" aria-describedby="">
                                 </div>
                               </div>
                               <div class="col-12">
                                 <div class="mb-4 row">
                                   <label class="form-label-base col-lg-6">
                                   Default Providers <span class="mandatory">*</span> <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <div class="col-lg-6">
                                     <input type="text" class="form-control text-center" placeholder="2" aria-label="2" aria-describedby="">
                                   </div>
                                 </div>
                               </div>
                               <div class="col-12">
                                 <div class="mb-4 row">
                                   <label class="form-label-base col-lg-6">
                                   Provider Limit <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <div class="col-lg-6">
                                     <input type="text" class="form-control text-center" placeholder="100" aria-label="100" aria-describedby="">
                                   </div>
                                 </div>
                               </div>
                               <div class="col-12">
                                 <div class="mb-4 row">
                                   <label class="form-label-base col-lg-7 align-self-center">
                                   Provider Return Window <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                   </label>
                                   <div class="col-lg-5">
                                     <div class="d-flex justify-content-around">
                                       <label class="form-label-sm">Hours</label>
                                       <label class="form-label-sm">Minutes</label>
                                     </div>
                                     <div class="input-group">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="00" aria-describedby="">
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-12">
                                 <div class="form-check form-check-inline">
                                   <input class="form-check-input" id="ExcludeAfterHoursVirtual" name="ExcludeAfterHoursVirtual" type="checkbox" tabindex="" />
                                   <label class="form-check-label" for="ExcludeAfterHoursVirtual">Exclude After-hours</label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                   <input class="form-check-input" id="ExcludeClosedHoursVirtual" name="ExcludeClosedHoursVirtual" type="checkbox" tabindex="" />
                                   <label class="form-check-label" for="ExcludeClosedHoursVirtual"> Exclude Closed-hours</label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                   <input class="form-check-input" id="ByRequestVirtual" name="ByRequestVirtual" type="checkbox" tabindex="" />
                                   <label class="form-check-label" for="ByRequestVirtual"> By Request</label>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                         <!-- /Service Type: Virtual -->
                       </div>
                     </div>
                   </div>
                   <div class="col-12 justify-content-center form-actions d-flex">
                     <button type="button" class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList">Back</button>
                     <button type="submit" class="btn btn-primary rounded">Next</button>
                   </div>
                 </div>
               </div>
               <!-- END: basic-service-setup -->
               <div class="tab-pane fade" id="advanced-service-rate" role="tabpanel" aria-labelledby="advanced-service-rate-tab" tabindex="0">
                 <div class="d-lg-flex justify-content-between align-items-center mb-4">
                   <h2 class="mb-lg-0">Service Rates And Charges</h2>
                 </div>
                 <div class="row">
                   <div class="col-lg-5">
                     <div class="mb-4 border p-3">
                       <h3>
                         Customer Payment:
                       </h3>
                       <div class="form-check mb-4">
                         <input class="form-check-input" id="BillAfterServices" name="BillAfterServices" type="checkbox" tabindex="" />
                         <label class="form-check-label" for="BillAfterServices">Bill After Services</label>
                       </div>
                       <div class="form-check mb-4">
                         <input class="form-check-input" id="BillBeforeStartServices" name="BillBeforeStartServices" type="checkbox" tabindex="" />
                         <label class="form-check-label" for="BillBeforeStartServices">Bill Before or at Start of Services</label>
                       </div>
                       <div class="ps-4">
                         <label class="form-label-sm">
                         Deduct Prepayment Parameter <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                         </label>
                         <input type="text" class="form-control" placeholder="0 Hours" aria-label="" aria-describedby="DeductPrepaymentParameter">
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-12 mb-5">
                     <h2>Billing Increment <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></h2>
                     <div class="row">
                       <div class="col-12">
                         <div class="border p-3">
                           <div class="row">
                             <div class="col-lg-6 pe-lg-5">
                               <div class="d-flex flex-column gap-5">
                                 <!-- In-Person Billing Increment -->
                                 <div>
                                   <div class="text-primary fw-bold">
                                     In-Person
                                   </div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Billing Increment <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                       </span>
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="HRS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="00" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="MINS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="" aria-describedby="">
                                     </div>
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Payment Increment <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                       </span>
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="HRS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="00" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="MINS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="" aria-describedby="">
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /In-Person Billing Increment -->
                                 <!-- Phone Billing Increment -->
                                 <div>
                                   <div class="text-primary fw-bold">
                                     Phone
                                   </div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Billing Increment <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                       </span>
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="HRS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="00" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="MINS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="" aria-describedby="">
                                     </div>
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Payment Increment <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                       </span>
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="HRS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="00" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="MINS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="" aria-describedby="">
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Phone Billing Increment -->
                               </div>
                             </div>
                             <div class="col-lg-6 ps-lg-5">
                               <div class="d-flex flex-column gap-5">
                                 <!-- Virtual Billing Increment -->
                                 <div>
                                   <div class="text-primary fw-bold">
                                     Virtual
                                   </div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Billing Increment <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                       </span>
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="HRS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="00" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="MINS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="" aria-describedby="">
                                     </div>
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Payment Increment <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                       </span>
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="HRS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="00" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="MINS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="" aria-describedby="">
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Virtual Billing Increment -->
                                 <!-- Teleconference Billing Increment -->
                                 <div>
                                   <div class="text-primary fw-bold">
                                     Teleconference
                                   </div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Billing Increment <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                       </span>
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="HRS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="00" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="MINS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="" aria-describedby="">
                                     </div>
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Payment Increment <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                       </span>
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="HRS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="00" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control rounded-0 text-center" placeholder="MINS" aria-label="" aria-describedby="">
                                       <input type="text" class="form-control text-center" placeholder="00" aria-label="" aria-describedby="">
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Teleconference Billing Increment -->
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-12 mb-5">
                     <div class="d-lg-flex align-items-center mb-4 gap-3">
                       <div class="form-check form-switch form-switch-column mb-lg-0">
                          <input class="form-check-input js-form-switch-toggle" type="checkbox" role="switch" id="AdditionalServiceCharges">
                          <label class="form-check-label js-hidden-switch-toggle-content d-none" for="AdditionalServiceCharges">Enable</label>
                          <label class="form-check-label js-hidden-switch-toggle-content" for="AdditionalServiceCharges">Disable</label>
                        </div>
                       <h2 class="mb-lg-0">Additional Service Charges</h2>
                     </div>
                     <div class="row js-hidden-switch-toggle-content switch-toggle-content">
                       <div class="col-lg-12">
                         <div class="border p-3">
                           <div class="row">
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 In-Person
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- In-Person Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-4">
                                     <div class="d-flex flex-column gap-3">
                                       <div class="input-group">
                                         <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                         Additional Charge
                                         </span>
                                         <input type="text" class="form-control" placeholder="Label" aria-label="" aria-describedby="">
                                         <div class="col-lg-1">
                                           <input type="text" class="form-control text-center rounded-0" placeholder="$" aria-label="" aria-describedby="">
                                         </div>
                                         <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                       </div>
                                       <div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">X by No. of Providers <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for=""> X by Duration</label>
                                         </div>
                                       </div>
                                       <div class="text-end">
                                         <a href="" class="fw-bold">
                                           <small>
                                             Add Additional Service Charges 
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                             </svg>
                                           </small>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /In-Person Additional Service Charges -->
                                 <!-- Additional Payment Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-4">
                                     <div class="d-flex flex-column gap-3">
                                       <div class="input-group">
                                         <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                         Additional Charge
                                         </span>
                                         <input type="text" class="form-control" placeholder="Label" aria-label="" aria-describedby="">
                                         <div class="col-lg-1">
                                           <input type="text" class="form-control text-center rounded-0" placeholder="$" aria-label="" aria-describedby="">
                                         </div>
                                         <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                       </div>
                                       <div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">X by No. of Providers <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for=""> Charge to Customer</label>
                                         </div>
                                       </div>
                                       <div class="text-end">
                                         <a href="" class="fw-bold">
                                           <small>
                                             Add Additional Service Charges 
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                             </svg>
                                           </small>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Additional Payment Additional Service Charges -->
                               </div>
                             </div>
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 Virtual
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- Virtual Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-4">
                                     <div class="d-flex flex-column gap-3">
                                       <div class="input-group">
                                         <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                         Additional Charge
                                         </span>
                                         <input type="text" class="form-control" placeholder="Label" aria-label="" aria-describedby="">
                                         <div class="col-lg-1">
                                           <input type="text" class="form-control text-center rounded-0" placeholder="$" aria-label="" aria-describedby="">
                                         </div>
                                         <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                       </div>
                                       <div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">X by No. of Providers <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for=""> X by Duration</label>
                                         </div>
                                       </div>
                                       <div class="text-end">
                                         <a href="" class="fw-bold">
                                           <small>
                                             Add Additional Service Charges 
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                             </svg>
                                           </small>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Virtual Additional Service Charges -->
                                 <!-- Additional Payment Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-4">
                                     <div class="d-flex flex-column gap-3">
                                       <div class="input-group">
                                         <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                         Additional Charge
                                         </span>
                                         <input type="text" class="form-control" placeholder="Label" aria-label="" aria-describedby="">
                                         <div class="col-lg-1">
                                           <input type="text" class="form-control text-center rounded-0" placeholder="$" aria-label="" aria-describedby="">
                                         </div>
                                         <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                       </div>
                                       <div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">X by No. of Providers <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for=""> Charge to Customer</label>
                                         </div>
                                       </div>
                                       <div class="text-end">
                                         <a href="" class="fw-bold">
                                           <small>
                                             Add Additional Service Charges 
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                             </svg>
                                           </small>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Additional Payment Additional Service Charges -->
                               </div>
                             </div>
                           </div>
                           <div class="row">
                             <div class="col-12 px-0">
                               <hr>
                             </div>
                           </div>
                           <div class="row">
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 Phone
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- Phone Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-4">
                                     <div class="d-flex flex-column gap-3">
                                       <div class="input-group">
                                         <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                         Additional Charge
                                         </span>
                                         <input type="text" class="form-control" placeholder="Label" aria-label="" aria-describedby="">
                                         <div class="col-lg-1">
                                           <input type="text" class="form-control text-center rounded-0" placeholder="$" aria-label="" aria-describedby="">
                                         </div>
                                         <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                       </div>
                                       <div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">X by No. of Providers <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for=""> X by Duration</label>
                                         </div>
                                       </div>
                                       <div class="text-end">
                                         <a href="" class="fw-bold">
                                           <small>
                                             Add Additional Service Charges 
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                             </svg>
                                           </small>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Phone Additional Service Charges -->
                                 <!-- Additional Payment Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-4">
                                     <div class="d-flex flex-column gap-3">
                                       <div class="input-group">
                                         <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                         Additional Charge
                                         </span>
                                         <input type="text" class="form-control" placeholder="Label" aria-label="" aria-describedby="">
                                         <div class="col-lg-1">
                                           <input type="text" class="form-control text-center rounded-0" placeholder="$" aria-label="" aria-describedby="">
                                         </div>
                                         <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                       </div>
                                       <div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">X by No. of Providers <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for=""> Charge to Customer</label>
                                         </div>
                                       </div>
                                       <div class="text-end">
                                         <a href="" class="fw-bold">
                                           <small>
                                             Add Additional Service Charges 
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                             </svg>
                                           </small>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Additional Payment Additional Service Charges -->
                               </div>
                             </div>
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 Teleconference
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- Teleconference Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-4">
                                     <div class="d-flex flex-column gap-3">
                                       <div class="input-group">
                                         <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                         Additional Charge
                                         </span>
                                         <input type="text" class="form-control" placeholder="Label" aria-label="" aria-describedby="">
                                         <div class="col-lg-1">
                                           <input type="text" class="form-control text-center rounded-0" placeholder="$" aria-label="" aria-describedby="">
                                         </div>
                                         <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                       </div>
                                       <div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">X by No. of Providers <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for=""> X by Duration</label>
                                         </div>
                                       </div>
                                       <div class="text-end">
                                         <a href="" class="fw-bold">
                                           <small>
                                             Add Additional Service Charges 
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                             </svg>
                                           </small>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Teleconference Additional Service Charges -->
                                 <!-- Additional Payment Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-4">
                                     <div class="d-flex flex-column gap-3">
                                       <div class="input-group">
                                         <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                         Additional Charge
                                         </span>
                                         <input type="text" class="form-control" placeholder="Label" aria-label="" aria-describedby="">
                                         <div class="col-lg-1">
                                           <input type="text" class="form-control text-center rounded-0" placeholder="$" aria-label="" aria-describedby="">
                                         </div>
                                         <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                       </div>
                                       <div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">X by No. of Providers <i class="fa fa-question-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for=""> Charge to Customer</label>
                                         </div>
                                       </div>
                                       <div class="text-end">
                                         <a href="" class="fw-bold">
                                           <small>
                                             Add Additional Service Charges 
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                             </svg>
                                           </small>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Additional Payment Additional Service Charges -->
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-12 mb-5">
                     <div class="d-lg-flex align-items-center mb-4 gap-3">
                       <div class="form-check form-switch form-switch-column mb-lg-0">
                         <input class="form-check-input js-form-switch-toggle" type="checkbox" role="switch" id="ExpeditedServices">
                          <label class="form-check-label js-hidden-switch-toggle-content d-none" for="ExpeditedServices">Enable</label>
                          <label class="form-check-label js-hidden-switch-toggle-content" for="ExpeditedServices">Disable</label>
                       </div>
                       <h2 class="mb-lg-0">Expedited Services</h2>
                     </div>
                     <div class="row js-hidden-switch-toggle-content switch-toggle-content">
                       <div class="col-lg-12">
                         <div class="border p-3">
                           <div class="row">
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 In-Person
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- In-Person Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Parameter 1 <small>(Hour)</small>
                                       </span>
                                       <input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
                                       <div class="col-lg-2">
                                         <select class="form-select rounded-0">
                                           <option>$</option>
                                         </select>
                                       </div>
                                       <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                     </div>
                                     <div class="d-grid grid-cols-2 gap-1">
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for="">X by Duration</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for=""> X by No. of Providers</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for="">Exclude After-hours</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for=""> Exclude Closed-hours</label>
                                       </div>
                                     </div>
                                     <div class="text-end">
                                       <a href="" class="fw-bold">
                                         <small>
                                           Add Additional Service Charges 
                                           <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                           </svg>
                                         </small>
                                       </a>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /In-Person Additional Service Charges -->
                               </div>
                             </div>
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 Virtual
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- Virtual Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Parameter 1 <small>(Hour)</small>
                                       </span>
                                       <input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
                                       <div class="col-lg-2">
                                         <select class="form-select rounded-0">
                                           <option>$</option>
                                         </select>
                                       </div>
                                       <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                     </div>
                                     <div class="d-grid grid-cols-2 gap-1">
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for="">X by Duration</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for=""> X by No. of Providers</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for="">Exclude After-hours</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for=""> Exclude Closed-hours</label>
                                       </div>
                                     </div>
                                     <div class="text-end">
                                       <a href="" class="fw-bold">
                                         <small>
                                           Add Additional Service Charges 
                                           <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                           </svg>
                                         </small>
                                       </a>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Virtual Additional Service Charges -->
                               </div>
                             </div>
                           </div>
                           <div class="row">
                             <div class="col-12 px-0">
                               <hr>
                             </div>
                           </div>
                           <div class="row">
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 Phone
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- Phone Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Parameter 1 <small>(Hour)</small>
                                       </span>
                                       <input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
                                       <div class="col-lg-2">
                                         <select class="form-select rounded-0">
                                           <option>$</option>
                                         </select>
                                       </div>
                                       <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                     </div>
                                     <div class="d-grid grid-cols-2 gap-1">
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for="">X by Duration</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for=""> X by No. of Providers</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for="">Exclude After-hours</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for=""> Exclude Closed-hours</label>
                                       </div>
                                     </div>
                                     <div class="text-end">
                                       <a href="" class="fw-bold">
                                         <small>
                                           Add Additional Service Charges 
                                           <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                           </svg>
                                         </small>
                                       </a>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Phone Additional Service Charges -->
                               </div>
                             </div>
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 Teleconference
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- Teleconference Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Parameter 1 <small>(Hour)</small>
                                       </span>
                                       <input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
                                       <div class="col-lg-2">
                                         <select class="form-select rounded-0">
                                           <option>$</option>
                                         </select>
                                       </div>
                                       <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                     </div>
                                     <div class="d-grid grid-cols-2 gap-1">
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for="">X by Duration</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for=""> X by No. of Providers</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for="">Exclude After-hours</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                         <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                         <label class="form-check-label" for=""> Exclude Closed-hours</label>
                                       </div>
                                     </div>
                                     <div class="text-end">
                                       <a href="" class="fw-bold">
                                         <small>
                                           Add Additional Service Charges 
                                           <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                           </svg>
                                         </small>
                                       </a>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Teleconference Additional Service Charges -->
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div><!-- /Expedited Services -->
                   <div class="col-lg-12 mb-5">
                     <div class="d-lg-flex align-items-center mb-4 gap-3">
                       <div class="form-check form-switch form-switch-column mb-lg-0">
                         <input class="form-check-input js-form-switch-toggle" type="checkbox" role="switch" id="SpecializationRates">
                          <label class="form-check-label js-hidden-switch-toggle-content d-none" for="SpecializationRates">Enable</label>
                          <label class="form-check-label js-hidden-switch-toggle-content" for="SpecializationRates">Disable</label>
                       </div>
                       <h2 class="mb-lg-0">Cancellations, Modifications & Rescheduling</h2>
                     </div>
                     <div class="row js-hidden-switch-toggle-content switch-toggle-content">
                       <div class="col-lg-12">
                         <div class="border p-3">
                           <div class="row">
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 In-Person
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- In-Person Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Parameter 1 <small>(Hour)</small>
                                       </span>
                                       <input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
                                       <div class="col-lg-2">
                                         <select class="form-select rounded-0">
                                           <option>$</option>
                                         </select>
                                       </div>
                                       <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                     </div>
                                     <div>
                                       <label class="form-label">
                                         Apply too
                                       </label>
                                       <div class="d-grid grid-cols-2 gap-1">
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Cancellations</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Exclude After-hours</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Modifications</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Exclude Closed-hours</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Rescheduling</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Bill Service Minimums</label>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="text-end">
                                       <a href="" class="fw-bold">
                                         <small>
                                           Add Additional Service Charges 
                                           <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                           </svg>
                                         </small>
                                       </a>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /In-Person Additional Service Charges -->
                               </div>
                             </div>
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 Virtual
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- Virtual Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Parameter 1 <small>(Hour)</small>
                                       </span>
                                       <input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
                                       <div class="col-lg-2">
                                         <select class="form-select rounded-0">
                                           <option>$</option>
                                         </select>
                                       </div>
                                       <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                     </div>
                                     <div>
                                       <label class="form-label">
                                         Apply too
                                       </label>
                                       <div class="d-grid grid-cols-2 gap-1">
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Cancellations</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Exclude After-hours</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Modifications</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Exclude Closed-hours</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Rescheduling</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Bill Service Minimums</label>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="text-end">
                                       <a href="" class="fw-bold">
                                         <small>
                                           Add Additional Service Charges 
                                           <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                           </svg>
                                         </small>
                                       </a>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Virtual Additional Service Charges -->
                               </div>
                             </div>
                           </div>
                           <div class="row">
                             <div class="col-12 px-0">
                               <hr>
                             </div>
                           </div>
                           <div class="row">
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 Phone
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- Phone Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Parameter 1 <small>(Hour)</small>
                                       </span>
                                       <input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
                                       <div class="col-lg-2">
                                         <select class="form-select rounded-0">
                                           <option>$</option>
                                         </select>
                                       </div>
                                       <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                     </div>
                                     <div>
                                       <label class="form-label">
                                         Apply too
                                       </label>
                                       <div class="d-grid grid-cols-2 gap-1">
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Cancellations</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Exclude After-hours</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Modifications</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Exclude Closed-hours</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Rescheduling</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Bill Service Minimums</label>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="text-end">
                                       <a href="" class="fw-bold">
                                         <small>
                                           Add Additional Service Charges 
                                           <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                           </svg>
                                         </small>
                                       </a>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Phone Additional Service Charges -->
                               </div>
                             </div>
                             <div class="col-lg-6 pe-lg-5">
                               <div class="text-primary fw-bold">
                                 Teleconference
                               </div>
                               <div class="d-flex flex-column gap-5">
                                 <!-- Teleconference Additional Service Charges -->
                                 <div>
                                   <div class="d-flex flex-column gap-3">
                                     <div class="input-group">
                                       <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                       Parameter 1 <small>(Hour)</small>
                                       </span>
                                       <input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
                                       <div class="col-lg-2">
                                         <select class="form-select rounded-0">
                                           <option>$</option>
                                         </select>
                                       </div>
                                       <input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
                                     </div>
                                     <div>
                                       <label class="form-label">
                                         Apply too
                                       </label>
                                       <div class="d-grid grid-cols-2 gap-1">
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Cancellations</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Exclude After-hours</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Modifications</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Exclude Closed-hours</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Rescheduling</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                           <label class="form-check-label" for="">Bill Service Minimums</label>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="text-end">
                                       <a href="" class="fw-bold">
                                         <small>
                                           Add Additional Service Charges 
                                           <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                           </svg>
                                         </small>
                                       </a>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- /Teleconference Additional Service Charges -->
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div><!-- /Cancellations, Modifications & Rescheduling -->
                   <div class="col-lg-12 mb-5">
                     <div class="d-lg-flex align-items-center mb-4 gap-3">
                       <div class="form-check form-switch form-switch-column mb-lg-0">
                         <input class="form-check-input js-form-switch-toggle" type="checkbox" role="switch" id="SpecializationRates">
                          <label class="form-check-label js-hidden-switch-toggle-content d-none" for="SpecializationRates">Enable</label>
                          <label class="form-check-label js-hidden-switch-toggle-content" for="SpecializationRates">Disable</label>
                       </div>
                       <h2 class="mb-lg-0">Specialization Rates</h2>
                     </div>
                     <div class="row js-hidden-switch-toggle-content switch-toggle-content">
                       <div class="col-lg-12">
                         <div class="border p-3">
                           <div class="text-lg-end mb-4">
                             <a href="" class="btn btn-primary">Create New Specialization</a>
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
                             <div class="">
                               <div class="form-check form-check-inline">
                                 <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                 <label class="form-check-label" for="">Hide from Customers</label>
                               </div>
                               <div class="form-check form-check-inline">
                                 <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                 <label class="form-check-label" for="">X by No. of Providers</label>
                               </div>
                               <div class="form-check form-check-inline">
                                 <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                 <label class="form-check-label" for="">Hide from Providers</label>
                               </div>
                               <div class="form-check form-check-inline">
                                 <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                 <label class="form-check-label" for="">X by Duration</label>
                               </div>
                               <div class="form-check form-check-inline">
                                 <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                 <label class="form-check-label" for="">Disable</label>
                               </div>
                             </div>
                             <div class="text-end">
                               <a href="" class="fw-bold">
                                 <small>
                                   Add Additional Specialization 
                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                   </svg>
                                 </small>
                               </a>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div><!-- /Specialization Rates -->
                   <div class="col-12 justify-content-center form-actions d-flex">
                     <button type="button" class="btn btn-outline-dark rounded mx-2">Back</button>
                     <button type="submit" class="btn btn-primary rounded">Next</button>
                   </div>
                 </div>
               </div>
               <div class="tab-pane fade" id="service-forms" role="tabpanel" aria-labelledby="service-forms-tab" tabindex="0">
                 <div class="d-lg-flex justify-content-between align-items-center mb-4">
                   <h2 class="mb-lg-0">Customized Forms Selection</h2>
                 </div>
                 <div class="row">
                   <div class="col-lg-6 pe-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Request Form
                       </h3>
                       <div class="mb-2">
                         <select class="form-select">
                           <option>Select Request Form</option>
                         </select>
                       </div>
                       <div class="text-end">
                         <a href="" class="fw-bold">
                           <small>
                             Add New Form
                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                             </svg>
                           </small>
                         </a>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 ps-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Default Timesheet Template
                       </h3>
                       <div class="mb-2">
                         <select class="form-select">
                           <option>Select Timesheet Form</option>
                         </select>
                       </div>
                       <div class="text-end">
                         <a href="" class="fw-bold">
                           <small>
                             Add New Template Form
                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                             </svg>
                           </small>
                         </a>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 pe-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Default Invoice Line Item Template
                       </h3>
                       <div class="mb-2">
                         <select class="form-select">
                           <option>Select Timesheet Form</option>
                         </select>
                       </div>
                       <div class="text-end">
                         <a href="" class="fw-bold">
                           <small>
                             Add New Template Form
                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                             </svg>
                           </small>
                         </a>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 ps-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Default Quotes Line Item Template
                       </h3>
                       <div class="mb-2">
                         <select class="form-select">
                           <option>Select Timesheet Form</option>
                         </select>
                       </div>
                       <div class="text-end">
                         <a href="" class="fw-bold">
                           <small>
                             Add New Template Form
                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                             </svg>
                           </small>
                         </a>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 ps-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Default Remittance Line Item Template
                       </h3>
                       <div class="mb-2">
                         <select class="form-select">
                           <option>Select Timesheet Form</option>
                         </select>
                       </div>
                       <div class="text-end">
                         <a href="" class="fw-bold">
                           <small>
                             Add new Template Form
                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                             </svg>
                           </small>
                         </a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-12 justify-content-center form-actions d-flex">
                     <button type="button" class="btn btn-outline-dark rounded mx-2">Back</button>
                     <button type="submit" class="btn btn-primary rounded">Next</button>
                   </div>
                 </div>
               </div>
               <div class="tab-pane fade" id="service-configuration" role="tabpanel" aria-labelledby="service-configuration-tab" tabindex="0">
                 <div class="d-lg-flex justify-content-between align-items-center mb-4">
                   <h2 class="mb-lg-0">Service Configuration</h2>
                 </div>
                 <div class="row mb-4">
                   <div class="col-lg-6 pe-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Request a Start Time for Services? <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesYes" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesYes">Yes</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesNo" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesNo">No</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 ps-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Request an End Time for Services? <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesYes" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesYes">Yes</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesNo" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesNo">No</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 pe-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Request an Address for End of In-person Services? <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesYes" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesYes">Yes</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesNo" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesNo">No</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 ps-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Request Number of Providers? <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesYes" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesYes">Yes</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesNo" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesNo">No</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 pe-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Request Service Consumers? <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesYes" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesYes">Yes</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesNo" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesNo">No</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 ps-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Request Participants? <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesYes" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesYes">Yes</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="RequestStartTimeforServicesNo" name="RequestStartTimeforServices" type="radio" tabindex="" />
                           <label class="form-check-label" for="RequestStartTimeforServicesNo">No</label>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-12 justify-content-center form-actions d-flex">
                     <button type="button" class="btn btn-outline-dark rounded mx-2">Back</button>
                     <button type="submit" class="btn btn-primary rounded">Next</button>
                   </div>
                 </div>
               </div>
               <div class="tab-pane fade" id="advance-options" role="tabpanel" aria-labelledby="advance-options-tab" tabindex="0">
                 <div class="d-lg-flex justify-content-between align-items-center mb-4">
                   <h2 class="mb-lg-0">Default Time Zone & Booking Procedures</h2>
                 </div>
                 <div class="row mb-4">
                   <div class="col-lg-6 pe-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Billing to Companies
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="AdminBusinessHours" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="AdminBusinessHours">Admin Business Hours</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="CustomerBusinessHours" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="CustomerBusinessHours">Customer's Business Hours</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 ps-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Payment to Providers
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="AdminBusinessHours" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="AdminBusinessHours">Admin Business Hours</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="CustomerBusinessHours" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="CustomerBusinessHours">Customer's Business Hours</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 pe-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Billing Time Zone <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="d-flex flex-column gap-1">
                         <div class="row">
                           <div class="col-lg-3">
                             <label class="col-form-label">In-Person</label>
                           </div>
                           <div class="col-lg-9">
                             <select class="form-select">
                               <option>Admin Time Zone</option>
                             </select>
                           </div>
                         </div>
                         <div class="row">
                           <div class="col-lg-3">
                             <label class="col-form-label">Virtual</label>
                           </div>
                           <div class="col-lg-9">
                             <select class="form-select">
                               <option>Customer’s Time Zone</option>
                             </select>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 ps-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Payment Time Zone <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="d-flex flex-column gap-1">
                         <div class="row">
                           <div class="col-lg-3">
                             <label class="col-form-label">In-Person</label>
                           </div>
                           <div class="col-lg-9">
                             <select class="form-select">
                               <option>Admin Time Zone</option>
                             </select>
                           </div>
                         </div>
                         <div class="row">
                           <div class="col-lg-3">
                             <label class="col-form-label">Virtual</label>
                           </div>
                           <div class="col-lg-9">
                             <select class="form-select">
                               <option>Provider's Time Zone</option>
                             </select>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 pe-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         In-Person Billing <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="ScheduledDuration" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="ScheduledDuration">Scheduled Duration</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="ActualDuration" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="ActualDuration">Actual Duration</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 ps-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         In-Person Payments <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="ScheduledDuration" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="ScheduledDuration">Scheduled Duration</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="ActualDuration" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="ActualDuration">Actual Duration</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 pe-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Virtual Billing <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="ScheduledDuration" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="ScheduledDuration">Scheduled Duration</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="ActualDuration" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="ActualDuration">Actual Duration</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 ps-lg-5">
                     <div class="mb-5 border p-3">
                       <h3>
                         Virtual Payments <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="">
                         <div class="form-check">
                           <input class="form-check-input" id="ScheduledDuration" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="ScheduledDuration">Scheduled Duration</label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" id="ActualDuration" name="RequestStartTimeforServices" type="radio" tabindex="">
                           <label class="form-check-label" for="ActualDuration">Actual Duration</label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 ps-lg-5 ms-lg-auto">
                     <div class="mb-5 border p-3">
                       <h3>
                         Minimum Payment Duration <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                       </h3>
                       <div class="d-flex flex-column gap-2">
                         <div class="row">
                           <div class="col-lg-3 align-self-center">
                             <div class="form-check mb-0">
                               <input class="form-check-input" id="ScheduledDuration" name="RequestStartTimeforServices" type="radio" tabindex="">
                               <label class="form-check-label" for="ScheduledDuration">In-Person</label>
                             </div>
                           </div>
                           <div class="col-lg-3">
                             <input type="text" class="form-control form-control-sm text-center" placeholder="00:00" aria-label="" aria-describedby="">
                           </div>
                         </div>
                         <div class="row">
                           <div class="col-lg-3 align-self-center">
                             <div class="form-check mb-0">
                               <input class="form-check-input" id="ActualDuration" name="RequestStartTimeforServices" type="radio" tabindex="">
                               <label class="form-check-label" for="ActualDuration">Virtual</label>
                             </div>
                           </div>
                           <div class="col-lg-3">
                             <input type="text" class="form-control form-control-sm text-center" placeholder="00:00" aria-label="" aria-describedby="">
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="row mb-4">
                   <div class="col-lg-6 pe-lg-5 float-left">
                     <div class="w-100">
                       <div class="mb-5 border p-3 pb-lg-5">
                         <h2>
                           Check-In Procedure <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                         </h2>
                         <div class="d-flex flex-column gap-3">
                           <div class="form-check">
                             <input class="form-check-input" id="EnableCheckinButton" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <label class="form-check-label" for="EnableCheckinButton">Enable “Check-in” Button</label>
                           </div>
                           <div class="form-check">
                             <input class="form-check-input" id="RequireCheckinforProvidertoInvoice" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <label class="form-check-label" for="RequireCheckinforProvidertoInvoice">Require "Check-in" for Provider to Invoice</label>
                           </div>
                           <div class="form-check">
                             <input class="form-check-input" id="RequireCustomerSignature" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <label class="form-check-label" for="RequireCustomerSignature">Require Customer Signature</label>
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="AddCustomizedCheckinForm">Add Customized Check-in Form</label>
                             <input class="form-check-input show-hidden-content" id="AddCustomizedCheckinForm" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <div class="hidden-content">
                               <label class="form-label-sm">Select Form</label>
                               <select class="form-select">
                                 <option>Select Form</option>
                               </select>
                             </div>
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="NotifyCustomerofCheckin">Notify Customer of Check-in</label>
                             <input class="form-check-input show-hidden-content" id="NotifyCustomerofCheckin" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <div class="hidden-content">
                               <label class="form-label-sm">Select Customer-Users</label>
                               <select class="form-select">
                                 <option>Select Customer-Users</option>
                               </select>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div><!-- /Check-In Procedure -->
                     <div class="w-100">
                       <div class="mb-5 border p-3 pb-lg-5">
                         <h2>
                           Running Late Procedure
                         </h2>
                         <div class="d-flex flex-column gap-3">
                           <div class="form-check">
                             <label class="form-check-label" for="EnableRunningLateButton">Enable “Running Late” Button</label>
                             <input class="form-check-input" id="EnableRunningLateButton" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="NotifyCustomer">Notify Customer</label>
                             <input class="form-check-input show-hidden-content" id="NotifyCustomer" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <div class="hidden-content">
                               <label class="form-label-sm">Select Customer</label>
                               <select class="form-select">
                                 <option>Select Customer</option>
                               </select>
                             </div>
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="NotifyTeamProviders">Notify Team Providers</label>
                             <input class="form-check-input" id="NotifyTeamProviders" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="AddCustomizedRunningLateForm">Add Customized “Running Late” Form</label>
                             <input class="form-check-input show-hidden-content" id="AddCustomizedRunningLateForm" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <div class="hidden-content">
                               <label class="form-label-sm">Select Form</label>
                               <select class="form-select">
                                 <option>Select Form</option>
                               </select>
                             </div>
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="NotifyCustomerofCheckin">Notify Customer of Check-in</label>
                             <input class="form-check-input show-hidden-content" id="NotifyCustomerofCheckin" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <div class="hidden-content">
                               <label class="form-label-sm">Select Customer-Users</label>
                               <select class="form-select">
                                 <option>Select Customer-Users</option>
                               </select>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div><!-- /Running Late Procedure -->
                     <div class="w-100">
                       <div class="mb-5 border p-3 pb-lg-5">
                         <h2>
                           Display to providers prior to being assigned
                         </h2>
                         <div class="d-flex flex-column gap-3">
                           <div class="form-check">
                             <label class="form-check-label" for="CompanyName">Company Name</label>
                             <input class="form-check-input" id="CompanyName" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="FullServiceAddress">Full Service Address</label>
                             <input class="form-check-input" id="FullServiceAddress" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check">
                             <input class="form-check-input" id="requester" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <label class="form-check-label" for="requester">Requester</label>
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="ServiceConsumer">Service Consumer(s)</label>
                             <input class="form-check-input" id="ServiceConsumer" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="Participants">Participants</label>
                             <input class="form-check-input" id="Participants" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="Step2Details">Step 2 Details</label>
                             <input class="form-check-input" id="Step2Details" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                         </div>
                       </div>
                     </div><!-- /Display to providers prior to being assigned -->
                   </div>
                   <div class="col-lg-6 ps-lg-5 float-right">
                     <div class="w-100">
                       <div class="mb-5 border p-3 pb-lg-5">
                         <h2>
                           Authorize & Close-Out Procedure <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                         </h2>
                         <div class="d-flex flex-column gap-3">
                           <div class="form-check">
                             <input class="form-check-input" id="EnableAuthorizeandCloseButtonforProviders" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <label class="form-check-label" for="EnableAuthorizeandCloseButtonforProviders">Enable “Authorize and Close” Button for Providers</label>
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="EnableAuthorizeandCloseButtonforCustomers">Enable “Authorize and Close” Button for Customers</label>
                             <input class="form-check-input show-hidden-content" id="EnableAuthorizeandCloseButtonforCustomers" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <div class="hidden-content">
                               <label class="form-label-sm">Select Customer-Users</label>
                               <select class="form-select">
                                 <option>Select Customer-Users</option>
                               </select>
                             </div>
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="RequireAuthorizeCloseOutforProviderPayment">Require "Authorize & Close-out" for Provider Payment</label>
                             <input class="form-check-input" id="RequireAuthorizeCloseOutforProviderPayment" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="RequireAuthorizeCloseOutforCustomerInvoicing">Require "Authorize & Close-out" for Customer Invoicing</label>
                             <input class="form-check-input" id="RequireAuthorizeCloseOutforCustomerInvoicing" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="RequireCustomerSignature">Require Customer Signature</label>
                             <input class="form-check-input" id="RequireCustomerSignature" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="AddCustomizedCloseOutForm">Add Customized “Close-Out” Form</label>
                             <input class="form-check-input show-hidden-content" id="AddCustomizedCloseOutForm" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <div class="hidden-content">
                               <label class="form-label-sm">Select Form</label>
                               <select class="form-select">
                                 <option>Select Form</option>
                               </select>
                             </div>
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="AutoApproveTimeExtensions">Auto-Approve Time Extensions</label>
                             <input class="form-check-input" id="AutoApproveTimeExtensions" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="EnableCloseOutStatuses">Enable Close-out Statuses</label>
                             <input class="form-check-input show-hidden-content" id="EnableCloseOutStatuses" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                             <div class="hidden-content">
                               <div class="d-flex flex-column gap-3 mt-3">
                                 <div class="form-check">
                                   <label class="form-check-label" for="EnableCloseOutStatusesCompleted">Completed</label>
                                   <input class="form-check-input" id="EnableCloseOutStatusesCompleted" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                 </div>
                                 <div class="form-check">
                                   <label class="form-check-label" for="EnableCloseOutStatusesNoShow">No Show</label>
                                   <input class="form-check-input show-hidden-content" id="EnableCloseOutStatusesNoShow" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                   <div class="hidden-content">
                                     <div class="d-flex flex-column gap-3 mt-3">
                                       <div class="form-check">
                                         <label class="form-check-label" for="SendToInvoiceGeneratorAsNormalNoShow">Send to Invoice Generator as Normal</label>
                                         <input class="form-check-input" id="SendToInvoiceGeneratorAsNormalNoShow" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                       </div>
                                       <div class="form-check">
                                         <label class="form-check-label" for="BillServiceMinimumNoShow">Bill Service Minimum</label>
                                         <input class="form-check-input" id="BillServiceMinimumNoShow" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                       </div>
                                       <div class="form-check">
                                         <label class="form-check-label" for="PayProviderServiceMinimumNoShow">Pay Provider Service Minimum</label>
                                         <input class="form-check-input" id="PayProviderServiceMinimumNoShow" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                       </div>
                                       <div class="form-check">
                                         <label class="form-check-label" for="CancelBookingWithChargeNoShow">Cancel Booking with Charge</label>
                                         <input class="form-check-input" id="CancelBookingWithChargeNoShow" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                       </div>
                                       <div class="form-check">
                                         <label class="form-check-label" for="CancelBookingWithoutChargeNoShow">Cancel Booking without Charge</label>
                                         <input class="form-check-input" id="CancelBookingWithoutChargeNoShow" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                                 <div class="form-check">
                                   <label class="form-check-label" for="EnableCloseOutStatusesCancelled">Cancelled</label>
                                   <input class="form-check-input show-hidden-content" id="EnableCloseOutStatusesCancelled" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                   <div class="hidden-content">
                                     <div class="d-flex flex-column gap-3 mt-3">
                                       <div class="form-check">
                                         <label class="form-check-label" for="SendToInvoiceGeneratorAsNormalCancelled">Send to Invoice Generator as Normal</label>
                                         <input class="form-check-input" id="SendToInvoiceGeneratorAsNormalCancelled" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                       </div>
                                       <div class="form-check">
                                         <label class="form-check-label" for="BillServiceMinimumCancelled">Bill Service Minimum</label>
                                         <input class="form-check-input" id="BillServiceMinimumCancelled" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                       </div>
                                       <div class="form-check">
                                         <label class="form-check-label" for="PayProviderServiceMinimumCancelled">Pay Provider Service Minimum</label>
                                         <input class="form-check-input" id="PayProviderServiceMinimumCancelled" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                       </div>
                                       <div class="form-check">
                                         <label class="form-check-label" for="CancelBookingWithChargeCancelled">Cancel Booking with Charge</label>
                                         <input class="form-check-input" id="CancelBookingWithChargeCancelled" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                       </div>
                                       <div class="form-check">
                                         <label class="form-check-label" for="CancelBookingWithoutChargeCancelled">Cancel Booking without Charge</label>
                                         <input class="form-check-input" id="CancelBookingWithoutChargeCancelled" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div><!-- /Authorize & Close-Out Procedure -->
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-12 justify-content-center form-actions d-flex">
                     <button type="button" class="btn btn-outline-dark rounded mx-2">Back</button>
                     <button type="submit" class="btn btn-primary rounded">Next</button>
                   </div>
                 </div>
               </div>
               <div class="tab-pane fade" id="notification-setting" role="tabpanel" aria-labelledby="notification-setting-tab" tabindex="0">
                 <div class="d-lg-flex justify-content-between align-items-center">
                   <h2>Default Notification Settings</h2>
                 </div>
                 <div class="row mb-4">
                   <div class="col-lg-8">
                     <h3 class="text-primary">In-Person Services</h3>
                     <div class="row">
                       <div class="col-lg-5 mb-4">
                         <div class="d-flex gap-3">
                           <label class="form-label-sm">
                               Broadcast
                           </label>
                           <div class="form-check form-switch form-switch-column">
                             <input class="form-check-input" type="checkbox" role="switch" id="AutoNotifyBroadcast" checked>
                             <label class="form-check-label" for="AutoNotifyBroadcast">Auto-notify</label>
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-7 mb-4">
                         <div class="d-flex gap-3">
                           <label class="form-label-sm">
                               Assign
                           </label>
                           <div class="form-check form-switch form-switch-column">
                             <input class="form-check-input" type="checkbox" role="switch" id="AutoNotifyAssign" checked>
                             <label class="form-check-label" for="AutoNotifyAssign">Auto-notify</label>
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-7 ms-lg-auto mb-4">
                         <div class="d-flex flex-column gap-3">
                           <div class="form-check">
                             <label class="form-check-label" for="FirstAvailableAssign">First Available</label>
                             <input class="form-check-input" id="FirstAvailableAssign" name="RequestStartTimeforServices" type="radio" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="PriorityAssign">Priority</label>
                             <input class="form-check-input" id="PriorityAssign" name="RequestStartTimeforServices" type="radio" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="PriorityPreferredProvidersAssign">Priority & Preferred Providers</label>
                             <input class="form-check-input" id="PriorityPreferredProvidersAssign" name="RequestStartTimeforServices" type="radio" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="ClosestProviderAssign">Closest Provider</label>
                             <input class="form-check-input" id="ClosestProviderAssign" name="RequestStartTimeforServices" type="radio" tabindex="">
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-12 mb-4">
                         <div class="d-lg-flex align-items-center gap-5">
                           <label class="form-label mb-lg-0">Broadcast via</label>
                           <div class="form-check mb-lg-0">
                             <label class="form-check-label" for="emailBroadcastvia">Email</label>
                             <input class="form-check-input" id="emailBroadcastvia" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check mb-lg-0">
                             <label class="form-check-label" for="smsBroadcastvia">SMS</label>
                             <input class="form-check-input" id="smsBroadcastvia" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check mb-lg-0">
                             <label class="form-check-label" for="pushNotificationBroadcastvia">Push Notification</label>
                             <input class="form-check-input" id="pushNotificationBroadcastvia" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-12 mb-4">
                         <div class="d-lg-flex align-items-center gap-5">
                           <label class="form-label mb-lg-0">Variable</label>
                           <div class="form-check mb-lg-0">
                             <label class="form-check-label" for="ProviderPriority">Provider Priority</label>
                             <input class="form-check-input" id="ProviderPriority" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check mb-lg-0">
                             <label class="form-check-label" for="ProximitytoServiceAddress">Proximity to Service Address</label>
                             <input class="form-check-input" id="ProximitytoServiceAddress" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-12 mb-4">
                         <div class="d-lg-flex align-items-center gap-5">
                           <div>
                             <label class="form-label-sm">Max. Radius</label>
                             <div class="input-group">
                               <input type="" name="" class="form-control form-control-sm w-50" placeholder="00">
                               <select class="form-select form-select-sm">
                                 <option>Miles</option>
                               </select>
                             </div>
                           </div>
                           <div>
                             <label class="form-label-sm">Provider Count</label>
                             <div class="input-group">
                               <input type="" name="" class="form-control form-control-sm" placeholder="00">
                             </div>
                           </div>
                           <div>
                             <label class="form-label-sm">Interval</label>
                             <div class="input-group">
                               <input type="" name="" class="form-control form-control-sm w-50" placeholder="00">
                               <select class="form-select form-select-sm">
                                 <option>Min</option>
                               </select>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="row mb-4">
                   <div class="col-lg-8">
                     <h3 class="text-primary">Virtual Services</h3>
                     <div class="row">
                       <div class="col-lg-5 mb-4">
                         <div class="d-flex gap-3">
                           <label class="form-label-sm">
                               Broadcast
                           </label>
                           <div class="form-check form-switch form-switch-column">
                             <input class="form-check-input" type="checkbox" role="switch" id="AutoNotifyBroadcast" checked>
                             <label class="form-check-label" for="AutoNotifyBroadcast">Auto-notify</label>
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-7 mb-4">
                         <div class="d-flex gap-3">
                           <label class="form-label-sm">
                               Assign
                           </label>
                           <div class="form-check form-switch form-switch-column">
                             <input class="form-check-input" type="checkbox" role="switch" id="AutoNotifyAssign" checked>
                             <label class="form-check-label" for="AutoNotifyAssign">Auto-notify</label>
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-7 ms-lg-auto mb-4">
                         <div class="d-flex flex-column gap-3">
                           <div class="form-check">
                             <label class="form-check-label" for="FirstAvailableAssign">First Available</label>
                             <input class="form-check-input" id="FirstAvailableAssign" name="RequestStartTimeforServices" type="radio" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="PriorityAssign">Priority</label>
                             <input class="form-check-input" id="PriorityAssign" name="RequestStartTimeforServices" type="radio" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="PriorityPreferredProvidersAssign">Priority & Preferred Providers</label>
                             <input class="form-check-input" id="PriorityPreferredProvidersAssign" name="RequestStartTimeforServices" type="radio" tabindex="">
                           </div>
                           <div class="form-check">
                             <label class="form-check-label" for="ClosestProviderAssign">Closest Provider</label>
                             <input class="form-check-input" id="ClosestProviderAssign" name="RequestStartTimeforServices" type="radio" tabindex="">
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-12 mb-4">
                         <div class="d-lg-flex align-items-center gap-5">
                           <label class="form-label mb-lg-0">Broadcast via</label>
                           <div class="form-check mb-lg-0">
                             <label class="form-check-label" for="emailBroadcastvia">Email</label>
                             <input class="form-check-input" id="emailBroadcastvia" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check mb-lg-0">
                             <label class="form-check-label" for="smsBroadcastvia">SMS</label>
                             <input class="form-check-input" id="smsBroadcastvia" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check mb-lg-0">
                             <label class="form-check-label" for="pushNotificationBroadcastvia">Push Notification</label>
                             <input class="form-check-input" id="pushNotificationBroadcastvia" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-12 mb-4">
                         <div class="d-lg-flex align-items-center gap-5">
                           <label class="form-label mb-lg-0">Variable</label>
                           <div class="form-check mb-lg-0">
                             <label class="form-check-label" for="ProviderPriority">Provider Priority</label>
                             <input class="form-check-input" id="ProviderPriority" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                           <div class="form-check mb-lg-0">
                             <label class="form-check-label" for="ProximitytoServiceAddress">Proximity to Service Address</label>
                             <input class="form-check-input" id="ProximitytoServiceAddress" name="RequestStartTimeforServices" type="checkbox" tabindex="">
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-12 mb-4">
                         <div class="d-lg-flex align-items-center gap-5">
                           <div>
                             <label class="form-label-sm">Max. Radius</label>
                             <div class="input-group">
                               <input type="" name="" class="form-control form-control-sm w-50" placeholder="00">
                               <select class="form-select form-select-sm">
                                 <option>Miles</option>
                               </select>
                             </div>
                           </div>
                           <div>
                             <label class="form-label-sm">Provider Count</label>
                             <div class="input-group">
                               <input type="" name="" class="form-control form-control-sm" placeholder="00">
                             </div>
                           </div>
                           <div>
                             <label class="form-label-sm">Interval</label>
                             <div class="input-group">
                               <input type="" name="" class="form-control form-control-sm w-50" placeholder="00">
                               <select class="form-select form-select-sm">
                                 <option>Min</option>
                               </select>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-12 justify-content-center form-actions d-flex">
                     <button type="button" class="btn btn-outline-dark rounded mx-2">Back</button>
                     <button type="submit" class="btn btn-primary rounded">Save</button>
                   </div>
                 </div>
               </div>
             </div>
             <!-- END: Steps -->    
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- End: Content-->
</div>