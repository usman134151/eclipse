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
                                <a href="#">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- End of update by Shanila --}}
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
                        <button class="nav-link  {{ $component == 'basic-service-setup' ? 'active' : '' }}"
                            id="basic-service-setup-tab" data-bs-toggle="tab" data-bs-target="#basic-service-setup"
                            type="button" role="tab" aria-controls="basic-service-setup" aria-selected="true"><span
                                class="number">1</span> Basic Service Setup</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'advanced-service-rate' ? 'active' : '' }}"
                            id="advanced-service-rate-tab" data-bs-toggle="tab" data-bs-target="#advanced-service-rate"
                            type="button" role="tab" aria-controls="advanced-service-rate" aria-selected="false"><span
                                class="number">2</span> Advanced Service Rate</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'service-forms' ? 'active' : '' }}"
                            id="service-forms-tab" data-bs-toggle="tab" data-bs-target="#service-forms" type="button"
                            role="tab" aria-controls="service-forms" aria-selected="false"><span class="number">3</span>
                            Service Forms</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'service-configuration' ? 'active' : '' }}"
                            id="service-configuration-tab" data-bs-toggle="tab" data-bs-target="#service-configuration"
                            type="button" role="tab" aria-controls="service-configuration" aria-selected="false"><span
                                class="number">4</span> Service Configuration</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'advance-options' ? 'active' : '' }}"
                            id="advance-options-tab" data-bs-toggle="tab" data-bs-target="#advance-options"
                            type="button" role="tab" aria-controls="advance-options" aria-selected="false"><span
                                class="number">5</span> Advance Options</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'notification-setting' ? 'active' : '' }}"
                            id="notification-setting-tab" data-bs-toggle="tab" data-bs-target="#notification-setting"
                            type="button" role="tab" aria-controls="notification-setting" aria-selected="false"><span
                                class="number">6</span> Notification Setting</button>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade {{ $component == 'basic-service-setup' ? 'active show' : '' }}"
                        id="basic-service-setup" role="tabpanel" aria-labelledby="basic-service-setup-tab" tabindex="0">
                        <form class="form">
                            {{-- updated by shanila to add csrf--}}
                            @csrf
                            {{-- update ended by shanila --}}
                            <div class="row">
                                <div class="col-lg-12 between-section-segment-spacing">
                                    <div class="d-lg-flex justify-content-between align-items-center mb-3">
                                        <h2 class="mb-lg-0">Basic Service Setup</h2>
                                        <div class="form-check form-switch form-switch-column mb-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="basicService">
                                            <label class="form-check-label" for="basicService">In-Active</label>
                                            <label class="form-check-label" for="basicService">Active</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label" for="serviceName">
                                                Service Name <span class="mandatory">*</span>
                                            </label>
                                            <input type="text" id="serviceName" class="form-control" name="serviceName"
                                                placeholder="Enter Service Name" />
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label" for="service-name">
                                                Service Type <i class="fa fa-question-circle" aria-hidden="true"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                            </label>
                                            <div>
                                                {!! App\Helpers\SetupHelper::createCheckboxes('SetupValue', 'id',
                                                'setup_value_label', 'setup_id', '5', 'id',[],1,'form-check
                                                form-check-inline') !!}

                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label" for="description">
                                                Description <i class="fa fa-question-circle" aria-hidden="true"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                            </label>
                                            <textarea rows="4" cols="4" id="description" class="form-control"
                                                name="description" placeholder=""></textarea>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label" for="service-name">
                                                Permitted Scheduling Frequencies <i class="fa fa-question-circle"
                                                    aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title=""></i>
                                            </label>
                                            {{-- updated by shanila to add dropdown --}}
                                            {!! App\Helpers\SetupHelper::createCheckboxes('SetupValue', 'id',
                                            'setup_value_label', 'setup_id', '6', 'id',[],1,'form-check ') !!}
                                            {{--ended updated--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 between-section-segment-spacing">
                                    <div class="d-lg-flex gap-4 align-items-center">
                                        <h2 class="mb-lg-0">Enable Billing Rates</h2>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="HourlyMinutesRate"
                                                    name="HourlyMinutesRate" type="radio" tabindex="" />
                                                <label class="form-check-label" for="HourlyMinutesRate">Hourly/Minutes
                                                    Rate</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="DayRate" name="DayRate" type="radio"
                                                    tabindex="" />
                                                <label class="form-check-label" for="DayRate"> Day Rate</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="FixedRate" name="FixedRate"
                                                    type="radio" tabindex="" />
                                                <label class="form-check-label" for="FixedRate"> Fixed Rate</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 between-section-segment-spacing">
                                    <h2>Display Service in</h2>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="newProviderApplicationForm" name=""
                                            type="checkbox" tabindex="" />
                                        <label class="form-check-label" for="newProviderApplicationForm">New Provider
                                            Application Form</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="CustomerQuoteRequestForm" name=""
                                            type="checkbox" tabindex="" />
                                        <label class="form-check-label" for="CustomerQuoteRequestForm"> Customer Quote
                                            Request Form</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="DisableserviceForCompanies" name=""
                                            type="checkbox" tabindex="" />
                                        <label class="form-check-label" for="DisableserviceForCompanies"> Disable
                                            service for Companies by Default</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 between-section-segment-spacing">
                                    <h2>Standard Rates</h2>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-5">
                                            <!-- In-Person Rates -->
                                            <div class="d-lg-flex align-items-center justify-content-between mb-3">
                                                <div class="d-lg-flex align-items-center gap-3">
                                                    <h3 class="form-label mb-0">
                                                        In-Person Rates
                                                    </h3>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" id="MultiplyProvidersInPerson"
                                                            name="MultiplyProvidersInPerson" type="checkbox"
                                                            tabindex="" />
                                                        <label class="form-check-label" for="MultiplyProvidersInPerson">
                                                            Multiply by No. of Providers</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border px-3 py-4 d-flex flex-column gap-3">
                                                <div class="input-group">
                                                    <span class="input-group-text bg-secondary col-lg-7"
                                                        id="BusinessHoursperhour">
                                                        Business Hours (per hour)
                                                    </span>
                                                    <input type="text" class="form-control rounded-0 text-center px-0"
                                                        placeholder="$" aria-label="" aria-describedby="">
                                                    <input type="text" class="form-control text-center"
                                                        placeholder="00.00" aria-label=""
                                                        aria-describedby="BusinessHoursperhour">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-secondary col-lg-7"
                                                        id="AfterHoursperhour">
                                                        After-Hours (per hour)
                                                    </span>
                                                    <input type="text" class="form-control text-center px-0"
                                                        placeholder="$" aria-label="" aria-describedby="">
                                                    <input type="text" class="form-control text-center"
                                                        placeholder="00.00" aria-label=""
                                                        aria-describedby="AfterHoursperhour">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-secondary col-lg-7" id="DayRate">
                                                        Day Rate
                                                    </span>
                                                    <input type="text" class="form-control text-center px-0"
                                                        placeholder="$" aria-label="" aria-describedby="">
                                                    <input type="text" class="form-control text-center"
                                                        placeholder="00.00" aria-label="" aria-describedby="DayRate">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-secondary col-lg-7" id="FixedRate">
                                                        Fixed Rate
                                                    </span>
                                                    <input type="text" class="form-control text-center px-0"
                                                        placeholder="$" aria-label="" aria-describedby="">
                                                    <input type="text" class="form-control text-center"
                                                        placeholder="00.00" aria-label="" aria-describedby="FixedRate">
                                                </div>
                                            </div>
                                            <!-- /In-Person Rates -->
                                        </div>
                                        <div class="col-lg-5">
                                            <!-- Virtual Rates -->
                                            <div class="d-lg-flex align-items-center justify-content-between mb-3">
                                                <div class="d-lg-flex align-items-center gap-3">
                                                    <label class="form-label mb-0">
                                                        Virtual Rates
                                                    </label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" id="MultiplyProvidersVirtual"
                                                            name="MultiplyProvidersVirtual" type="checkbox"
                                                            tabindex="" />
                                                        <label class="form-check-label" for="MultiplyProvidersVirtual">
                                                            Multiply by No. of Providers</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Duplicate" width="19" height="19"
                                                            viewBox="0 0 19 19">
                                                            <use xlink:href="/css/common-icons.svg#duplicate"></use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="border px-3 py-4 d-flex flex-column gap-3">
                                                <div class="input-group">
                                                    <span class="input-group-text bg-secondary col-lg-7"
                                                        id="BusinessHoursperhour">
                                                        Business Hours (per hour)
                                                    </span>
                                                    <input type="text" class="form-control rounded-0 text-center px-0"
                                                        placeholder="$" aria-label="" aria-describedby="">
                                                    <input type="text" class="form-control text-center"
                                                        placeholder="00.00" aria-label=""
                                                        aria-describedby="BusinessHoursperhour">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-secondary col-lg-7"
                                                        id="AfterHoursperhour">
                                                        After-Hours (per hour)
                                                    </span>
                                                    <input type="text" class="form-control text-center px-0"
                                                        placeholder="$" aria-label="" aria-describedby="">
                                                    <input type="text" class="form-control text-center"
                                                        placeholder="00.00" aria-label=""
                                                        aria-describedby="AfterHoursperhour">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-secondary col-lg-7" id="DayRate">
                                                        Day Rate
                                                    </span>
                                                    <input type="text" class="form-control text-center px-0"
                                                        placeholder="$" aria-label="" aria-describedby="">
                                                    <input type="text" class="form-control text-center"
                                                        placeholder="00.00" aria-label="" aria-describedby="DayRate">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-secondary col-lg-7" id="FixedRate">
                                                        Fixed Rate
                                                    </span>
                                                    <input type="text" class="form-control text-center px-0"
                                                        placeholder="$" aria-label="" aria-describedby="">
                                                    <input type="text" class="form-control text-center"
                                                        placeholder="00.00" aria-label="" aria-describedby="FixedRate">
                                                </div>
                                            </div>
                                            <!-- /Virtual Rates -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 between-section-segment-spacing">
                                    <h2>Service Capacity & Capabilities</h2>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-5">
                                            <!-- Service Type: In-Person -->
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
                                                                Min. Duration <span class="mandatory">*</span> <i
                                                                    class="fa fa-question-circle" aria-hidden="true"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title=""></i>
                                                            </label>
                                                            <div class="d-flex justify-content-around">
                                                                <label class="form-label-sm">Hours</label>
                                                                <label class="form-label-sm">Minutes</label>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="00" aria-label="00"
                                                                    aria-describedby="">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="00" aria-label="00"
                                                                    aria-describedby="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label-base">
                                                                Max. Duration <span class="mandatory">*</span> <i
                                                                    class="fa fa-question-circle" aria-hidden="true"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title=""></i>
                                                            </label>
                                                            <div class="d-flex justify-content-around">
                                                                <label class="form-label-sm">Hours</label>
                                                                <label class="form-label-sm">Minutes</label>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="00" aria-label="00"
                                                                    aria-describedby="">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="00" aria-label="00"
                                                                    aria-describedby="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label-base">
                                                                Min. Providers <span class="mandatory">*</span> <i
                                                                    class="fa fa-question-circle" aria-hidden="true"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title=""></i>
                                                            </label>
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="1" aria-label="1" aria-describedby="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label-base">
                                                                Max. Providers <i class="fa fa-question-circle"
                                                                    aria-hidden="true" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""></i>
                                                            </label>
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="50" aria-label="50" aria-describedby="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-4 row">
                                                            <label class="form-label-base col-lg-6">
                                                                Default Providers <span class="mandatory">*</span> <i
                                                                    class="fa fa-question-circle" aria-hidden="true"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title=""></i>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="2" aria-label="2" aria-describedby="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-4 row">
                                                            <label class="form-label-base col-lg-6">
                                                                Provider Limit <i class="fa fa-question-circle"
                                                                    aria-hidden="true" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""></i>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="100" aria-label="100"
                                                                    aria-describedby="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-4 row">
                                                            <label class="form-label-base col-lg-7 align-self-center">
                                                                Provider Return Window <i class="fa fa-question-circle"
                                                                    aria-hidden="true" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""></i>
                                                            </label>
                                                            <div class="col-lg-5">
                                                                <div class="d-flex justify-content-around">
                                                                    <label class="form-label-sm">Hours</label>
                                                                    <label class="form-label-sm">Minutes</label>
                                                                </div>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control text-center"
                                                                        placeholder="00" aria-label="00"
                                                                        aria-describedby="">
                                                                    <input type="text" class="form-control text-center"
                                                                        placeholder="00" aria-label="00"
                                                                        aria-describedby="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input"
                                                                id="ExcludeAfterHoursInPerson"
                                                                name="ExcludeAfterHoursInPerson" type="checkbox"
                                                                tabindex="" />
                                                            <label class="form-check-label"
                                                                for="ExcludeAfterHoursInPerson">Exclude
                                                                After-hours</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input"
                                                                id="ExcludeClosedHoursInPerson"
                                                                name="ExcludeClosedHoursInPerson" type="checkbox"
                                                                tabindex="" />
                                                            <label class="form-check-label"
                                                                for="ExcludeClosedHoursInPerson"> Exclude
                                                                Closed-hours</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="ByRequestInPerson"
                                                                name="ByRequestInPerson" type="checkbox" tabindex="" />
                                                            <label class="form-check-label" for="ByRequestInPerson"> By
                                                                Request</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Service Type: In-Person -->
                                        </div>
                                        <div class="col-lg-5">
                                            <!-- Service Type: Virtual -->
                                            <div class="d-lg-flex align-items-center justify-content-between mb-3">
                                                <div class="d-lg-flex align-items-center gap-3">
                                                    <h3 class="mb-0">
                                                        Service Type: Virtual
                                                    </h3>
                                                </div>
                                                <div>
                                                    <div>
                                                        <a href="#"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Duplicate" width="19" height="19"
                                                                viewBox="0 0 19 19">
                                                                <use xlink:href="/css/common-icons.svg#duplicate"></use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border px-3 py-4 d-flex flex-column gap-3">
                                                <div class="row justify-content-between">
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label-base">
                                                                Min. Duration <span class="mandatory">*</span> <i
                                                                    class="fa fa-question-circle" aria-hidden="true"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title=""></i>
                                                            </label>
                                                            <div class="d-flex justify-content-around">
                                                                <label class="form-label-sm">Hours</label>
                                                                <label class="form-label-sm">Minutes</label>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="00" aria-label="00"
                                                                    aria-describedby="">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="00" aria-label="00"
                                                                    aria-describedby="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label-base">
                                                                Max. Duration <span class="mandatory">*</span> <i
                                                                    class="fa fa-question-circle" aria-hidden="true"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title=""></i>
                                                            </label>
                                                            <div class="d-flex justify-content-around">
                                                                <label class="form-label-sm">Hours</label>
                                                                <label class="form-label-sm">Minutes</label>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="00" aria-label="00"
                                                                    aria-describedby="">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="00" aria-label="00"
                                                                    aria-describedby="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label-base">
                                                                Min. Providers <span class="mandatory">*</span> <i
                                                                    class="fa fa-question-circle" aria-hidden="true"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title=""></i>
                                                            </label>
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="1" aria-label="1" aria-describedby="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label-base">
                                                                Max. Providers <i class="fa fa-question-circle"
                                                                    aria-hidden="true" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""></i>
                                                            </label>
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="50" aria-label="50" aria-describedby="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-4 row">
                                                            <label class="form-label-base col-lg-6">
                                                                Default Providers <span class="mandatory">*</span> <i
                                                                    class="fa fa-question-circle" aria-hidden="true"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title=""></i>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="2" aria-label="2" aria-describedby="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-4 row">
                                                            <label class="form-label-base col-lg-6">
                                                                Provider Limit <i class="fa fa-question-circle"
                                                                    aria-hidden="true" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""></i>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control text-center"
                                                                    placeholder="100" aria-label="100"
                                                                    aria-describedby="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-4 row">
                                                            <label class="form-label-base col-lg-7 align-self-center">
                                                                Provider Return Window <i class="fa fa-question-circle"
                                                                    aria-hidden="true" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title=""></i>
                                                            </label>
                                                            <div class="col-lg-5">
                                                                <div class="d-flex justify-content-around">
                                                                    <label class="form-label-sm">Hours</label>
                                                                    <label class="form-label-sm">Minutes</label>
                                                                </div>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control text-center"
                                                                        placeholder="00" aria-label="00"
                                                                        aria-describedby="">
                                                                    <input type="text" class="form-control text-center"
                                                                        placeholder="00" aria-label="00"
                                                                        aria-describedby="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input"
                                                                id="ExcludeAfterHoursVirtual"
                                                                name="ExcludeAfterHoursVirtual" type="checkbox"
                                                                tabindex="" />
                                                            <label class="form-check-label"
                                                                for="ExcludeAfterHoursVirtual">Exclude
                                                                After-hours</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input"
                                                                id="ExcludeClosedHoursVirtual"
                                                                name="ExcludeClosedHoursVirtual" type="checkbox"
                                                                tabindex="" />
                                                            <label class="form-check-label"
                                                                for="ExcludeClosedHoursVirtual">
                                                                Exclude
                                                                Closed-hours</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="ByRequestVirtual"
                                                                name="ByRequestVirtual" type="checkbox" tabindex="" />
                                                            <label class="form-check-label" for="ByRequestVirtual"> By
                                                                Request</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Service Type: Virtual -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-actions">
                                    <a href="/admin/accommodation/all-services" type="button" class="btn btn-primary rounded">
                                            Save & Exit</></a>
                                    <button type="submit" class="btn btn-primary rounded"
                                        x-on:click="$wire.switch('advanced-service-rate')">Next</button>

                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END: basic-service-setup -->
                    <div class="tab-pane fade {{ $component == 'advanced-service-rate' ? 'active show' : '' }}"
                        id="advanced-service-rate" role="tabpanel" aria-labelledby="advanced-service-rate-tab"
                        tabindex="0">
                        <div class="row">
                            <form class="form">
                                {{-- updated by shanila to add csrf--}}
                                @csrf
                                {{-- update ended by shanila --}}
                                <div class="col-lg-5 between-section-segment-spacing">
                                    <div class="d-lg-flex justify-content-between align-items-center mb-3">
                                        <h2 class="mb-lg-0">Service Rates And Charges</h2>
                                    </div>
                                    <div class="border p-3">
                                        <h3>
                                            Customer Payment:
                                        </h3>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" id="BillAfterServices"
                                                name="BillAfterServices" type="checkbox" tabindex="" />
                                            <label class="form-check-label" for="BillAfterServices">Bill After
                                                Services</label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" id="BillBeforeStartServices"
                                                name="BillBeforeStartServices" type="checkbox" tabindex="" />
                                            <label class="form-check-label" for="BillBeforeStartServices">Bill Before or
                                                at
                                                Start of Services</label>
                                        </div>
                                        <div class="ps-4">
                                            <label class="form-label-sm">
                                                Deduct Prepayment Parameter <i class="fa fa-question-circle text-muted"
                                                    aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title=""></i>
                                            </label>
                                            <input type="text" class="form-control" placeholder="0 Hours" aria-label=""
                                                aria-describedby="DeductPrepaymentParameter">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 between-section-segment-spacing">
                                    <h2>Billing Increment <i class="fa fa-question-circle text-muted" aria-hidden="true"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></h2>
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
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Billing Increment <i
                                                                                class="fa fa-question-circle"
                                                                                aria-hidden="true"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title=""></i>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="HRS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="MINS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Payment Increment <i
                                                                                class="fa fa-question-circle"
                                                                                aria-hidden="true"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title=""></i>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="HRS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="MINS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
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
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Billing Increment <i
                                                                                class="fa fa-question-circle"
                                                                                aria-hidden="true"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title=""></i>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="HRS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="MINS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Payment Increment <i
                                                                                class="fa fa-question-circle"
                                                                                aria-hidden="true"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title=""></i>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="HRS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="MINS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
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
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Billing Increment <i
                                                                                class="fa fa-question-circle"
                                                                                aria-hidden="true"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title=""></i>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="HRS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="MINS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Payment Increment <i
                                                                                class="fa fa-question-circle"
                                                                                aria-hidden="true"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title=""></i>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="HRS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="MINS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
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
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Billing Increment <i
                                                                                class="fa fa-question-circle"
                                                                                aria-hidden="true"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title=""></i>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="HRS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="MINS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Payment Increment <i
                                                                                class="fa fa-question-circle"
                                                                                aria-hidden="true"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title=""></i>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="HRS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 text-center"
                                                                            placeholder="MINS" aria-label=""
                                                                            aria-describedby="">
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00" aria-label=""
                                                                            aria-describedby="">
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
                                <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
                                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                                        <div class="form-check form-switch form-switch-column mb-lg-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="AdditionalServiceCharges" @click="open = !open"
                                                x-text="open==true  ? 'hide' : 'show'">
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
                                                                            <span
                                                                                class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                id="">
                                                                                Additional Charge
                                                                            </span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label" aria-label=""
                                                                                aria-describedby="">
                                                                            <div class="col-lg-1">
                                                                                <input type="text"
                                                                                    class="form-control text-center rounded-0"
                                                                                    placeholder="$" aria-label=""
                                                                                    aria-describedby="">
                                                                            </div>
                                                                            <input type="text"
                                                                                class="form-control text-center"
                                                                                placeholder="00.00" aria-label=""
                                                                                aria-describedby="">
                                                                        </div>
                                                                        <div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">X
                                                                                    by
                                                                                    No. of Providers <i
                                                                                        class="fa fa-question-circle"
                                                                                        aria-hidden="true"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title=""></i></label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">
                                                                                    X by
                                                                                    Duration</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end">
                                                                            <a href="#" class="fw-bold">
                                                                                <small>
                                                                                    Add Additional Service Charges
                                                                                    {{-- Updated by Shanila to Add svg
                                                                                    icon--}}
                                                                                    <svg aria-label="Add Additional Service Charges"
                                                                                        class="me-1" width="20"
                                                                                        height="21" viewBox="0 0 20 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#add-new">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                                                            <span
                                                                                class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                id="">
                                                                                Additional Charge
                                                                            </span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label" aria-label=""
                                                                                aria-describedby="">
                                                                            <div class="col-lg-1">
                                                                                <input type="text"
                                                                                    class="form-control text-center rounded-0"
                                                                                    placeholder="$" aria-label=""
                                                                                    aria-describedby="">
                                                                            </div>
                                                                            <input type="text"
                                                                                class="form-control text-center"
                                                                                placeholder="00.00" aria-label=""
                                                                                aria-describedby="">
                                                                        </div>
                                                                        <div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">X
                                                                                    by
                                                                                    No. of Providers <i
                                                                                        class="fa fa-question-circle"
                                                                                        aria-hidden="true"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title=""></i></label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">
                                                                                    Charge to Customer</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end">
                                                                            <a href="#" class="fw-bold">
                                                                                <small>
                                                                                    Add Additional Service Charges
                                                                                    {{-- Updated by Shanila to Add svg
                                                                                    icon--}}
                                                                                    <svg aria-label="Add Additional Service Charges"
                                                                                        class="me-1" width="20"
                                                                                        height="21" viewBox="0 0 20 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#add-new">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                                                            <span
                                                                                class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                id="">
                                                                                Additional Charge
                                                                            </span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label" aria-label=""
                                                                                aria-describedby="">
                                                                            <div class="col-lg-1">
                                                                                <input type="text"
                                                                                    class="form-control text-center rounded-0"
                                                                                    placeholder="$" aria-label=""
                                                                                    aria-describedby="">
                                                                            </div>
                                                                            <input type="text"
                                                                                class="form-control text-center"
                                                                                placeholder="00.00" aria-label=""
                                                                                aria-describedby="">
                                                                        </div>
                                                                        <div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">X
                                                                                    by
                                                                                    No. of Providers <i
                                                                                        class="fa fa-question-circle"
                                                                                        aria-hidden="true"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title=""></i></label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">
                                                                                    X by
                                                                                    Duration</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end">
                                                                            <a href="#" class="fw-bold">
                                                                                <small>
                                                                                    Add Additional Service Charges
                                                                                    {{-- Updated by Shanila to Add svg
                                                                                    icon--}}
                                                                                    <svg aria-label="Add Additional Service Charges"
                                                                                        class="me-1" width="20"
                                                                                        height="21" viewBox="0 0 20 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#add-new">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                                                            <span
                                                                                class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                id="">
                                                                                Additional Charge
                                                                            </span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label" aria-label=""
                                                                                aria-describedby="">
                                                                            <div class="col-lg-1">
                                                                                <input type="text"
                                                                                    class="form-control text-center rounded-0"
                                                                                    placeholder="$" aria-label=""
                                                                                    aria-describedby="">
                                                                            </div>
                                                                            <input type="text"
                                                                                class="form-control text-center"
                                                                                placeholder="00.00" aria-label=""
                                                                                aria-describedby="">
                                                                        </div>
                                                                        <div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">X
                                                                                    by
                                                                                    No. of Providers <i
                                                                                        class="fa fa-question-circle"
                                                                                        aria-hidden="true"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title=""></i></label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">
                                                                                    Charge to Customer</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end">
                                                                            <a href="#" class="fw-bold">
                                                                                <small>
                                                                                    Add Additional Service Charges
                                                                                    {{-- Updated by Shanila to Add svg
                                                                                    icon--}}
                                                                                    <svg aria-label="Add Additional Service Charges"
                                                                                        class="me-1" width="20"
                                                                                        height="21" viewBox="0 0 20 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#add-new">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                                                            <span
                                                                                class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                id="">
                                                                                Additional Charge
                                                                            </span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label" aria-label=""
                                                                                aria-describedby="">
                                                                            <div class="col-lg-1">
                                                                                <input type="text"
                                                                                    class="form-control text-center rounded-0"
                                                                                    placeholder="$" aria-label=""
                                                                                    aria-describedby="">
                                                                            </div>
                                                                            <input type="text"
                                                                                class="form-control text-center"
                                                                                placeholder="00.00" aria-label=""
                                                                                aria-describedby="">
                                                                        </div>
                                                                        <div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">X
                                                                                    by
                                                                                    No. of Providers <i
                                                                                        class="fa fa-question-circle"
                                                                                        aria-hidden="true"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title=""></i></label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">
                                                                                    X by
                                                                                    Duration</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end">
                                                                            <a href="#" class="fw-bold">
                                                                                <small>
                                                                                    Add Additional Service Charges
                                                                                    {{-- Updated by Shanila to Add svg
                                                                                    icon--}}
                                                                                    <svg aria-label="Add Additional Service Charges"
                                                                                        class="me-1" width="20"
                                                                                        height="21" viewBox="0 0 20 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#add-new">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                                                            <span
                                                                                class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                id="">
                                                                                Additional Charge
                                                                            </span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label" aria-label=""
                                                                                aria-describedby="">
                                                                            <div class="col-lg-1">
                                                                                <input type="text"
                                                                                    class="form-control text-center rounded-0"
                                                                                    placeholder="$" aria-label=""
                                                                                    aria-describedby="">
                                                                            </div>
                                                                            <input type="text"
                                                                                class="form-control text-center"
                                                                                placeholder="00.00" aria-label=""
                                                                                aria-describedby="">
                                                                        </div>
                                                                        <div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">X
                                                                                    by
                                                                                    No. of Providers <i
                                                                                        class="fa fa-question-circle"
                                                                                        aria-hidden="true"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title=""></i></label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">
                                                                                    Charge to Customer</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end">
                                                                            <a href="#" class="fw-bold">
                                                                                <small>
                                                                                    Add Additional Service Charges
                                                                                    {{-- Updated by Shanila to Add svg
                                                                                    icon--}}
                                                                                    <svg aria-label="Add Additional Service Charges"
                                                                                        class="me-1" width="20"
                                                                                        height="21" viewBox="0 0 20 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#add-new">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                                                            <span
                                                                                class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                id="">
                                                                                Additional Charge
                                                                            </span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label" aria-label=""
                                                                                aria-describedby="">
                                                                            <div class="col-lg-1">
                                                                                <input type="text"
                                                                                    class="form-control text-center rounded-0"
                                                                                    placeholder="$" aria-label=""
                                                                                    aria-describedby="">
                                                                            </div>
                                                                            <input type="text"
                                                                                class="form-control text-center"
                                                                                placeholder="00.00" aria-label=""
                                                                                aria-describedby="">
                                                                        </div>
                                                                        <div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">X
                                                                                    by
                                                                                    No. of Providers <i
                                                                                        class="fa fa-question-circle"
                                                                                        aria-hidden="true"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title=""></i></label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">
                                                                                    X by
                                                                                    Duration</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end">
                                                                            <a href="#" class="fw-bold">
                                                                                <small>
                                                                                    Add Additional Service Charges
                                                                                    {{-- Updated by Shanila to Add svg
                                                                                    icon--}}
                                                                                    <svg aria-label="Add Additional Service Charges"
                                                                                        class="me-1" width="20"
                                                                                        height="21" viewBox="0 0 20 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#add-new">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                                                            <span
                                                                                class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                id="">
                                                                                Additional Charge
                                                                            </span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label" aria-label=""
                                                                                aria-describedby="">
                                                                            <div class="col-lg-1">
                                                                                <input type="text"
                                                                                    class="form-control text-center rounded-0"
                                                                                    placeholder="$" aria-label=""
                                                                                    aria-describedby="">
                                                                            </div>
                                                                            <input type="text"
                                                                                class="form-control text-center"
                                                                                placeholder="00.00" aria-label=""
                                                                                aria-describedby="">
                                                                        </div>
                                                                        <div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">X
                                                                                    by
                                                                                    No. of Providers <i
                                                                                        class="fa fa-question-circle"
                                                                                        aria-hidden="true"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title=""></i></label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label" for="">
                                                                                    Charge to Customer</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end">
                                                                            <a href="#" class="fw-bold">
                                                                                <small>
                                                                                    Add Additional Service Charges
                                                                                    {{-- Updated by Shanila to Add svg
                                                                                    icon--}}
                                                                                    <svg aria-label="Add Additional Service Charges"
                                                                                        class="me-1" width="20"
                                                                                        height="21" viewBox="0 0 20 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#add-new">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
                                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                                        <div class="form-check form-switch form-switch-column mb-lg-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="ExpeditedServices" @click="open = !open"
                                                x-text="open==true  ? 'hide' : 'show'">
                                            <label class="form-check-label" for="ExpeditedServices">Disable</label>
                                            <label class="form-check-label" for="ExpeditedServices">Enable</label>
                                        </div>
                                        <h2 class="mb-lg-0">Expedited Services</h2>
                                    </div>
                                    <div class="row switch-toggle-content" x-show="open">
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
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Parameter 1 <small>(Hour)</small>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00 Hour" aria-label=""
                                                                            aria-describedby="">
                                                                        <div class="col-lg-2">
                                                                            <select class="form-select rounded-0">
                                                                                <option>$</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00.00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="d-grid grid-cols-2 gap-1">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for="">X by
                                                                                Duration</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for=""> X by
                                                                                No.
                                                                                of Providers</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label"
                                                                                for="">Exclude
                                                                                After-hours</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for="">
                                                                                Exclude
                                                                                Closed-hours</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <a href="#" class="fw-bold">
                                                                            <small>
                                                                                Add Additional Service Charges
                                                                                {{-- Updated by Shanila to Add svg
                                                                                icon--}}
                                                                                <svg aria-label="Add Additional Service Charges"
                                                                                    class="me-1" width="20" height="21"
                                                                                    viewBox="0 0 20 21">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#add-new">
                                                                                    </use>
                                                                                </svg>
                                                                                {{-- End of update by Shanila --}}
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
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Parameter 1 <small>(Hour)</small>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00 Hour" aria-label=""
                                                                            aria-describedby="">
                                                                        <div class="col-lg-2">
                                                                            <select class="form-select rounded-0">
                                                                                <option>$</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00.00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="d-grid grid-cols-2 gap-1">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for="">X by
                                                                                Duration</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for=""> X by
                                                                                No.
                                                                                of Providers</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label"
                                                                                for="">Exclude
                                                                                After-hours</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for="">
                                                                                Exclude
                                                                                Closed-hours</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <a href="#" class="fw-bold">
                                                                            <small>
                                                                                Add Additional Service Charges
                                                                                {{-- Updated by Shanila to Add svg
                                                                                icon--}}
                                                                                <svg aria-label="Add Additional Service Charges"
                                                                                    class="me-1" width="20" height="21"
                                                                                    viewBox="0 0 20 21">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#add-new">
                                                                                    </use>
                                                                                </svg>
                                                                                {{-- End of update by Shanila --}}
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
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Parameter 1 <small>(Hour)</small>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00 Hour" aria-label=""
                                                                            aria-describedby="">
                                                                        <div class="col-lg-2">
                                                                            <select class="form-select rounded-0">
                                                                                <option>$</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00.00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="d-grid grid-cols-2 gap-1">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for="">X by
                                                                                Duration</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for=""> X by
                                                                                No.
                                                                                of Providers</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label"
                                                                                for="">Exclude
                                                                                After-hours</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for="">
                                                                                Exclude
                                                                                Closed-hours</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <a href="#" class="fw-bold">
                                                                            <small>
                                                                                Add Additional Service Charges
                                                                                {{-- Updated by Shanila to Add svg
                                                                                icon--}}
                                                                                <svg aria-label="Add Additional Service Charges"
                                                                                    class="me-1" width="20" height="21"
                                                                                    viewBox="0 0 20 21">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#add-new">
                                                                                    </use>
                                                                                </svg>
                                                                                {{-- End of update by Shanila --}}
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
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Parameter 1 <small>(Hour)</small>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00 Hour" aria-label=""
                                                                            aria-describedby="">
                                                                        <div class="col-lg-2">
                                                                            <select class="form-select rounded-0">
                                                                                <option>$</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00.00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="d-grid grid-cols-2 gap-1">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for="">X by
                                                                                Duration</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for=""> X by
                                                                                No.
                                                                                of Providers</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label"
                                                                                for="">Exclude
                                                                                After-hours</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="" />
                                                                            <label class="form-check-label" for="">
                                                                                Exclude
                                                                                Closed-hours</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <a href="#" class="fw-bold">
                                                                            <small>
                                                                                Add Additional Service Charges
                                                                                {{-- Updated by Shanila to Add svg
                                                                                icon--}}
                                                                                <svg aria-label="Add Additional Service Charges"
                                                                                    class="me-1" width="20" height="21"
                                                                                    viewBox="0 0 20 21">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#add-new">
                                                                                    </use>
                                                                                </svg>
                                                                                {{-- End of update by Shanila --}}
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
                                <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
                                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                                        <div class="form-check form-switch form-switch-column mb-lg-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="CancellationsModifications&Rescheduling" @click="open = !open"
                                                x-text="open==true  ? 'hide' : 'show'">
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
                                                    <div class="col-lg-6 pe-lg-5">
                                                        <div class="text-primary fw-bold">
                                                            In-Person
                                                        </div>
                                                        <div class="d-flex flex-column gap-5">
                                                            <!-- In-Person Additional Service Charges -->
                                                            <div>
                                                                <div class="d-flex flex-column gap-3">
                                                                    <div class="input-group">
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Parameter 1 <small>(Hour)</small>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00 Hour" aria-label=""
                                                                            aria-describedby="">
                                                                        <div class="col-lg-2">
                                                                            <select class="form-select rounded-0">
                                                                                <option>$</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00.00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div>
                                                                        <label class="form-label">
                                                                            Apply too
                                                                        </label>
                                                                        <div class="d-grid grid-cols-2 gap-1">
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input"
                                                                                    id="x-by-duration" name=""
                                                                                    type="checkbox" tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="x-by-duration">X by
                                                                                    Duration</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input"
                                                                                    id="x-by-providers" name=""
                                                                                    type="checkbox" tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="x-by-providers">X by No. of
                                                                                    Providers</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Cancellations</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Exclude After-hours</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Modifications</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Exclude Closed-hours</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Rescheduling</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Bill
                                                                                    Service Minimums</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <a href="#" class="fw-bold">
                                                                            <small>
                                                                                Add Additional Service Charges
                                                                                {{-- Updated by Shanila to Add svg
                                                                                icon--}}
                                                                                <svg aria-label="Add Additional Service Charges"
                                                                                    class="me-1" width="20" height="21"
                                                                                    viewBox="0 0 20 21">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#add-new">
                                                                                    </use>
                                                                                </svg>
                                                                                {{-- End of update by Shanila --}}
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
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Parameter 1 <small>(Hour)</small>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00 Hour" aria-label=""
                                                                            aria-describedby="">
                                                                        <div class="col-lg-2">
                                                                            <select class="form-select rounded-0">
                                                                                <option>$</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00.00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div>
                                                                        <label class="form-label">
                                                                            Apply too
                                                                        </label>
                                                                        <div class="d-grid grid-cols-2 gap-1">
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input"
                                                                                    id="x-by-duration" name=""
                                                                                    type="checkbox" tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="x-by-duration">X by
                                                                                    Duration</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input"
                                                                                    id="x-by-providers" name=""
                                                                                    type="checkbox" tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="x-by-providers">X by No. of
                                                                                    Providers</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Cancellations</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Exclude After-hours</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Modifications</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Exclude Closed-hours</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Rescheduling</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Bill
                                                                                    Service Minimums</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <a href="#" class="fw-bold">
                                                                            <small>
                                                                                Add Additional Service Charges
                                                                                {{-- Updated by Shanila to Add svg
                                                                                icon--}}
                                                                                <svg aria-label="Add Additional Service Charges"
                                                                                    class="me-1" width="20" height="21"
                                                                                    viewBox="0 0 20 21">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#add-new">
                                                                                    </use>
                                                                                </svg>
                                                                                {{-- End of update by Shanila --}}
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
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Parameter 1 <small>(Hour)</small>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00 Hour" aria-label=""
                                                                            aria-describedby="">
                                                                        <div class="col-lg-2">
                                                                            <select class="form-select rounded-0">
                                                                                <option>$</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00.00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div>
                                                                        <label class="form-label">
                                                                            Apply too
                                                                        </label>
                                                                        <div class="d-grid grid-cols-2 gap-1">
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input"
                                                                                    id="x-by-duration" name=""
                                                                                    type="checkbox" tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="x-by-duration">X by
                                                                                    Duration</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input"
                                                                                    id="x-by-providers" name=""
                                                                                    type="checkbox" tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="x-by-providers">X by No. of
                                                                                    Providers</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Cancellations</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Exclude After-hours</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Modifications</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Exclude Closed-hours</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Rescheduling</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Bill
                                                                                    Service Minimums</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <a href="#" class="fw-bold">
                                                                            <small>
                                                                                Add Additional Service Charges
                                                                                {{-- Updated by Shanila to Add svg
                                                                                icon--}}
                                                                                <svg aria-label="Add Additional Service Charges"
                                                                                    class="me-1" width="20" height="21"
                                                                                    viewBox="0 0 20 21">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#add-new">
                                                                                    </use>
                                                                                </svg>
                                                                                {{-- End of update by Shanila --}}
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
                                                                        <span
                                                                            class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                            id="">
                                                                            Parameter 1 <small>(Hour)</small>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00 Hour" aria-label=""
                                                                            aria-describedby="">
                                                                        <div class="col-lg-2">
                                                                            <select class="form-select rounded-0">
                                                                                <option>$</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control text-center"
                                                                            placeholder="00.00" aria-label=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div>
                                                                        <label class="form-label">
                                                                            Apply too
                                                                        </label>
                                                                        <div class="d-grid grid-cols-2 gap-1">
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input"
                                                                                    id="x-by-duration" name=""
                                                                                    type="checkbox" tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="x-by-duration">X by
                                                                                    Duration</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input"
                                                                                    id="x-by-providers" name=""
                                                                                    type="checkbox" tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="x-by-providers">X by No. of
                                                                                    Providers</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Cancellations</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Exclude After-hours</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Modifications</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Exclude Closed-hours</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Rescheduling</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" id=""
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="">Bill
                                                                                    Service Minimums</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <a href="#" class="fw-bold">
                                                                            <small>
                                                                                Add Additional Service Charges
                                                                                {{-- Updated by Shanila to Add svg
                                                                                icon--}}
                                                                                <svg aria-label="Add Additional Service Charges"
                                                                                    class="me-1" width="20" height="21"
                                                                                    viewBox="0 0 20 21">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#add-new">
                                                                                    </use>
                                                                                </svg>
                                                                                {{-- End of update by Shanila --}}
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
                                <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
                                    <div class="d-lg-flex align-items-center mb-3 gap-3">
                                        <div class="form-check form-switch form-switch-column mb-lg-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="SpecializationRates" @click="open = !open"
                                                x-text="open==true  ? 'hide' : 'show'">
                                            <label class="form-check-label" for="SpecializationRates">Disable</label>
                                            <label class="form-check-label" for="SpecializationRates">Enable</label>
                                        </div>
                                        <h2 class="mb-lg-0">Specialization Rates</h2>
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
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="00.00" aria-label="" aria-describedby="">
                                                        </div>
                                                        <div class="align-self-end">
                                                            <div class="text-primary fw-bold">Virtual</div>
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="00.00" aria-label="" aria-describedby="">
                                                        </div>
                                                        <div class="align-self-end">
                                                            <div class="text-primary fw-bold">Phone</div>
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="00.00" aria-label="" aria-describedby="">
                                                        </div>
                                                        <div class="align-self-end">
                                                            <div class="text-primary fw-bold">Teleconference</div>
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="00.00" aria-label="" aria-describedby="">
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="" name=""
                                                                type="checkbox" tabindex="" />
                                                            <label class="form-check-label" for="">Hide from
                                                                Customers</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="" name=""
                                                                type="checkbox" tabindex="" />
                                                            <label class="form-check-label" for="">X by No. of
                                                                Providers</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="" name=""
                                                                type="checkbox" tabindex="" />
                                                            <label class="form-check-label" for="">Hide from
                                                                Providers</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="" name=""
                                                                type="checkbox" tabindex="" />
                                                            <label class="form-check-label" for="">X by Duration</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="" name=""
                                                                type="checkbox" tabindex="" />
                                                            <label class="form-check-label" for="">Disable</label>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <a href="#" class="fw-bold">
                                                            <small>
                                                                Add Additional Specialization
                                                                {{-- Updated by Shanila to Add svg
                                                                icon--}}
                                                                <svg aria-label="Add Additional Specialization"
                                                                    class="me-1" width="20" height="21"
                                                                    viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#add-new">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /Specialization Rates -->
                                <div class="col-12 justify-content-center form-actions d-flex gap-2">
                                    <button type="button" class="btn btn-outline-dark rounded"
                                        x-on:click="$wire.switch('basic-service-setup')">Back</button>
                                    <a href="/admin/accommodation/all-services"><button type="submit"
                                            class="btn btn-primary rounded">Save & Exit</button></a>
                                    <button type="submit" class="btn btn-primary rounded"
                                        x-on:click="$wire.switch('service-forms')">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ $component == 'service-forms' ? 'active show' : '' }}"
                        id="service-forms" role="tabpanel" aria-labelledby="service-forms-tab" tabindex="0">
                        <form class="form">
                            {{-- updated by shanila to add csrf--}}
                            @csrf
                            {{-- update ended by shanila --}}

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
                                            <a href="#" class="fw-bold">
                                                <small>
                                                    Add New Form
                                                    {{-- Updated by Shanila to Add svg
                                                    icon--}}
                                                    <svg aria-label=" Add New Form" class="me-1" width="20" height="21"
                                                        viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#add-new">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                </small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Default Timesheet Template
                                        </h3>
                                        <div class="mb-2">
                                            <select class="form-select">
                                                <option>Select Timesheet Form</option>
                                            </select>
                                        </div>
                                        <div class="text-end">
                                            <a href="#" class="fw-bold">
                                                <small>
                                                    Add New Template Form
                                                    {{-- Updated by Shanila to Add svg
                                                    icon--}}
                                                    <svg aria-label=" Add New Template Form" class="me-1" width="20"
                                                        height="21" viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#add-new">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                </small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Default Invoice Line Item Template
                                        </h3>
                                        <div class="mb-2">
                                            <select class="form-select">
                                                <option>Select Timesheet Form</option>
                                            </select>
                                        </div>
                                        <div class="text-end">
                                            <a href="#" class="fw-bold">
                                                <small>
                                                    Add New Template Form
                                                    {{-- Updated by Shanila to Add svg
                                                    icon--}}
                                                    <svg aria-label=" Add New Template Form" class="me-1" width="20"
                                                        height="21" viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#add-new">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                </small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Default Quotes Line Item Template
                                        </h3>
                                        <div class="mb-2">
                                            <select class="form-select">
                                                <option>Select Timesheet Form</option>
                                            </select>
                                        </div>
                                        <div class="text-end">
                                            <a href="#" class="fw-bold">
                                                <small>
                                                    Add New Template Form
                                                    {{-- Updated by Shanila to Add svg
                                                    icon--}}
                                                    <svg aria-label=" Add New Template Form" class="me-1" width="20"
                                                        height="21" viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#add-new">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                </small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Default Remittance Line Item Template
                                        </h3>
                                        <div class="mb-2">
                                            <select class="form-select">
                                                <option>Select Timesheet Form</option>
                                            </select>
                                        </div>
                                        <div class="text-end">
                                            <a href="#" class="fw-bold">
                                                <small>
                                                    Add new Template Form
                                                    {{-- Updated by Shanila to Add svg
                                                    icon--}}
                                                    <svg aria-label=" Add New Template Form" class="me-1" width="20"
                                                        height="21" viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#add-new">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                </small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 justify-content-center form-actions d-flex gap-2">
                                    <button type="button" class="btn btn-outline-dark rounded"
                                        x-on:click="$wire.switch('advanced-service-rate')">Back</button>
                                    <a href="/admin/accommodation/all-services"><button type="submit"
                                            class="btn btn-primary rounded">Save & Exit</button></a>
                                    <button type="button" class="btn btn-primary rounded"
                                        x-on:click="$wire.switch('service-configuration')">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade {{ $component == 'service-configuration' ? 'active show' : '' }}"
                        id="service-configuration" role="tabpanel" aria-labelledby="service-configuration-tab"
                        tabindex="0">
                        <form class="form">
                            {{-- updated by shanila to add csrf--}}
                            @csrf
                            {{-- update ended by shanila --}}
                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                <h2 class="mb-lg-0">Service Configuration</h2>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-6 pe-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Request a Start Time for Services? <i
                                                class="fa fa-question-circle text-muted" aria-hidden="true"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesYes"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesYes">Yes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesNo"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesNo">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Request an End Time for Services? <i
                                                class="fa fa-question-circle text-muted" aria-hidden="true"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesYes"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesYes">Yes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesNo"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesNo">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Request an Address for End of In-person Services? <i
                                                class="fa fa-question-circle text-muted" aria-hidden="true"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesYes"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesYes">Yes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesNo"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesNo">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Request Number of Providers? <i class="fa fa-question-circle text-muted"
                                                aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title=""></i>
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesYes"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesYes">Yes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesNo"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesNo">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Request Service Consumers? <i class="fa fa-question-circle text-muted"
                                                aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title=""></i>
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesYes"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesYes">Yes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesNo"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesNo">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Request Participants? <i class="fa fa-question-circle text-muted"
                                                aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title=""></i>
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesYes"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesYes">Yes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="RequestStartTimeforServicesNo"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="RequestStartTimeforServicesNo">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 justify-content-center form-actions d-flex gap-2">
                                    <button type="button" class="btn btn-outline-dark rounded"
                                        x-on:click="$wire.switch('service-forms')">Back</button>
                                    <a href="/admin/accommodation/all-services"><button type="submit"
                                            class="btn btn-primary rounded">Save & Exit</button></a>
                                    <button type="submit" class="btn btn-primary rounded"
                                        x-on:click="$wire.switch('advance-options')">Next</button>

                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="tab-pane fade {{ $component == 'advance-options' ? 'active show' : '' }}"
                        id="advance-options" role="tabpanel" aria-labelledby="advance-options-tab" tabindex="0">
                        <form class="form">
                            {{-- updated by shanila to add csrf--}}
                            @csrf
                            {{-- update ended by shanila --}}

                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                <h2 class="mb-lg-0">Default Time Zone & Booking Procedures</h2>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-6 pe-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Billing to Companies
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="AdminBusinessHours"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="AdminBusinessHours">Admin Business
                                                    Hours</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="CustomerBusinessHours"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="CustomerBusinessHours">Customer's
                                                    Business Hours</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Payment to Providers
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="AdminBusinessHours"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="AdminBusinessHours">Admin Business
                                                    Hours</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="CustomerBusinessHours"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="CustomerBusinessHours">Customer's
                                                    Business Hours</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Billing Time Zone <i class="fa fa-question-circle text-muted"
                                                aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title=""></i>
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
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Payment Time Zone <i class="fa fa-question-circle text-muted"
                                                aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title=""></i>
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
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            In-Person Billing <i class="fa fa-question-circle text-muted"
                                                aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title=""></i>
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="ScheduledDuration"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="ScheduledDuration">Scheduled
                                                    Duration</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="ActualDuration"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="ActualDuration">Actual
                                                    Duration</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            In-Person Payments <i class="fa fa-question-circle text-muted"
                                                aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title=""></i>
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="ScheduledDuration"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="ScheduledDuration">Scheduled
                                                    Duration</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="ActualDuration"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="ActualDuration">Actual
                                                    Duration</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Virtual Billing <i class="fa fa-question-circle text-muted"
                                                aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title=""></i>
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="ScheduledDuration"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="ScheduledDuration">Scheduled
                                                    Duration</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="ActualDuration"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="ActualDuration">Actual
                                                    Duration</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Virtual Payments <i class="fa fa-question-circle text-muted"
                                                aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title=""></i>
                                        </h3>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="ScheduledDuration"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="ScheduledDuration">Scheduled
                                                    Duration</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="ActualDuration"
                                                    name="RequestStartTimeforServices" type="radio" tabindex="">
                                                <label class="form-check-label" for="ActualDuration">Actual
                                                    Duration</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-lg-5">
                                    <div class="inner-section-segment-spacing border p-3">
                                        <h3>
                                            Minimum Payment Duration <i class="fa fa-question-circle text-muted"
                                                aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title=""></i>
                                        </h3>
                                        <div class="d-flex flex-column gap-2">
                                            <div class="row">
                                                <div class="col-lg-3 align-self-center">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" id="ScheduledDuration"
                                                            name="RequestStartTimeforServices" type="radio" tabindex="">
                                                        <label class="form-check-label"
                                                            for="ScheduledDuration">In-Person</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control form-control-sm text-center"
                                                        placeholder="00:00" aria-label="" aria-describedby="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 align-self-center">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" id="ActualDuration"
                                                            name="RequestStartTimeforServices" type="radio" tabindex="">
                                                        <label class="form-check-label"
                                                            for="ActualDuration">Virtual</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control form-control-sm text-center"
                                                        placeholder="00:00" aria-label="" aria-describedby="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-6 pe-lg-5">
                                    <div class="w-100">
                                        <div class="inner-section-segment-spacing border p-3 pb-lg-5">
                                            <h2>
                                                Check-In Procedure <i class="fa fa-question-circle text-muted"
                                                    aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title=""></i>
                                            </h2>
                                            <div class="d-flex flex-column gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="EnableCheckinButton"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                    <label class="form-check-label" for="EnableCheckinButton">Enable
                                                        “Check-in” Button</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input"
                                                        id="RequireCheckinforProvidertoInvoice"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                    <label class="form-check-label"
                                                        for="RequireCheckinforProvidertoInvoice">Require "Check-in" for
                                                        Provider to Invoice</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="RequireCustomerSignature"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                    <label class="form-check-label"
                                                        for="RequireCustomerSignature">Require
                                                        Customer Signature</label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="AddCustomizedCheckinForm">Add
                                                        Customized Check-in Form</label>
                                                    <input class="form-check-input show-hidden-content"
                                                        id="AddCustomizedCheckinForm" name="RequestStartTimeforServices"
                                                        type="checkbox" tabindex="">
                                                    <div class="hidden-content">
                                                        <label class="form-label-sm">Select Form</label>
                                                        <select class="form-select">
                                                            <option>Select Form</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="NotifyCustomerofCheckin">Notify
                                                        Customer of Check-in</label>
                                                    <input class="form-check-input show-hidden-content"
                                                        id="NotifyCustomerofCheckin" name="RequestStartTimeforServices"
                                                        type="checkbox" tabindex="">
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
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="w-100">
                                        <div class="inner-section-segment-spacing border p-3 pb-lg-5">
                                            <h2>
                                                Authorize & Close-Out Procedure <i
                                                    class="fa fa-question-circle text-muted" aria-hidden="true"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                            </h2>
                                            <div class="d-flex flex-column gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"
                                                        id="EnableAuthorizeandCloseButtonforProviders"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                    <label class="form-check-label"
                                                        for="EnableAuthorizeandCloseButtonforProviders">Enable
                                                        “Authorize
                                                        and Close” Button for Providers</label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                        for="EnableAuthorizeandCloseButtonforCustomers">Enable
                                                        “Authorize
                                                        and Close” Button for Customers</label>
                                                    <input class="form-check-input show-hidden-content"
                                                        id="EnableAuthorizeandCloseButtonforCustomers"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                    <div class="hidden-content">
                                                        <label class="form-label-sm">Select Customer-Users</label>
                                                        <select class="form-select">
                                                            <option>Select Customer-Users</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                        for="RequireAuthorizeCloseOutforProviderPayment">Require
                                                        "Authorize
                                                        & Close-out" for Provider Payment</label>
                                                    <input class="form-check-input"
                                                        id="RequireAuthorizeCloseOutforProviderPayment"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                        for="RequireAuthorizeCloseOutforCustomerInvoicing">Require
                                                        "Authorize & Close-out" for Customer Invoicing</label>
                                                    <input class="form-check-input"
                                                        id="RequireAuthorizeCloseOutforCustomerInvoicing"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                        for="RequireCustomerSignature">Require
                                                        Customer Signature</label>
                                                    <input class="form-check-input" id="RequireCustomerSignature"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="AddCustomizedCloseOutForm">Add
                                                        Customized “Close-Out” Form</label>
                                                    <input class="form-check-input show-hidden-content"
                                                        id="AddCustomizedCloseOutForm"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                    <div class="hidden-content">
                                                        <label class="form-label-sm">Select Form</label>
                                                        <select class="form-select">
                                                            <option>Select Form</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                        for="AutoApproveTimeExtensions">Auto-Approve Time
                                                        Extensions</label>
                                                    <input class="form-check-input" id="AutoApproveTimeExtensions"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="EnableCloseOutStatuses">Enable
                                                        Close-out Statuses</label>
                                                    <input class="form-check-input show-hidden-content"
                                                        id="EnableCloseOutStatuses" name="RequestStartTimeforServices"
                                                        type="checkbox" tabindex="">
                                                    <div class="hidden-content">
                                                        <div class="d-flex flex-column gap-3 mt-3">
                                                            <div class="form-check">
                                                                <label class="form-check-label"
                                                                    for="EnableCloseOutStatusesCompleted">Completed</label>
                                                                <input class="form-check-input"
                                                                    id="EnableCloseOutStatusesCompleted"
                                                                    name="RequestStartTimeforServices" type="checkbox"
                                                                    tabindex="">
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label"
                                                                    for="EnableCloseOutStatusesNoShow">No Show</label>
                                                                <input class="form-check-input show-hidden-content"
                                                                    id="EnableCloseOutStatusesNoShow"
                                                                    name="RequestStartTimeforServices" type="checkbox"
                                                                    tabindex="">
                                                                <div class="hidden-content">
                                                                    <div class="d-flex flex-column gap-3 my-3">
                                                                        <label
                                                                            class="form-label-sm mb-0">Billing:</label>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="ProcessAsNormalNoShowBilling">Process
                                                                                as Normal</label>
                                                                            <input class="form-check-input"
                                                                                id="ProcessAsNormalNoShowBilling"
                                                                                name="EnableCloseoutStatusesNoShowBillingBilling"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="BillServiceMinimumNoShowBilling">Bill
                                                                                Service Minimum</label>
                                                                            <input class="form-check-input"
                                                                                id="BillServiceMinimumNoShowBilling"
                                                                                name="EnableCloseoutStatusesNoShowBillingBilling"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="PayProviderServiceMinimumNoShowBilling">Pay
                                                                                Provider Service Minimum</label>
                                                                            <input class="form-check-input"
                                                                                id="PayProviderServiceMinimumNoShowBilling"
                                                                                name="EnableCloseoutStatusesNoShowBillingBilling"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="CancelBookingWithChargeNoShowBilling">Cancel
                                                                                Booking with Charge</label>
                                                                            <input class="form-check-input"
                                                                                id="CancelBookingWithChargeNoShowBilling"
                                                                                name="EnableCloseoutStatusesNoShowBillingBilling"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="CancelBookingWithoutChargeNoShowBilling">Cancel
                                                                                Booking without Charge</label>
                                                                            <input class="form-check-input"
                                                                                id="CancelBookingWithoutChargeNoShowBilling"
                                                                                name="EnableCloseoutStatusesNoShowBilling"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex flex-column gap-3 my-3">
                                                                        <label
                                                                            class="form-label-sm mb-0">Payment:</label>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="ProcessAsNormalNoShowPayment">Process
                                                                                as Normal</label>
                                                                            <input class="form-check-input"
                                                                                id="ProcessAsNormalNoShowPayment"
                                                                                name="EnableCloseoutStatusesNoShowPayment"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="BillServiceMinimumNoShowPayment">Bill
                                                                                Service Minimum</label>
                                                                            <input class="form-check-input"
                                                                                id="BillServiceMinimumNoShowPayment"
                                                                                name="EnableCloseoutStatusesNoShowPayment"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="PayProviderServiceMinimumNoShowPayment">Pay
                                                                                Provider Service Minimum</label>
                                                                            <input class="form-check-input"
                                                                                id="PayProviderServiceMinimumNoShowPayment"
                                                                                name="EnableCloseoutStatusesNoShowPayment"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="CancelBookingWithChargeNoShowPayment">Cancel
                                                                                Booking with Charge</label>
                                                                            <input class="form-check-input"
                                                                                id="CancelBookingWithChargeNoShowPayment"
                                                                                name="EnableCloseoutStatusesNoShowPayment"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="CancelBookingWithoutChargeNoShowPayment">Cancel
                                                                                Booking without Charge</label>
                                                                            <input class="form-check-input"
                                                                                id="CancelBookingWithoutChargeNoShowPayment"
                                                                                name="EnableCloseoutStatusesNoShowPayment"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label"
                                                                    for="EnableCloseOutStatusesCancelled">Cancelled</label>
                                                                <input class="form-check-input show-hidden-content"
                                                                    id="EnableCloseOutStatusesCancelled"
                                                                    name="RequestStartTimeforServices" type="checkbox"
                                                                    tabindex="">
                                                                <div class="hidden-content">
                                                                    <div class="d-flex flex-column gap-3 my-3">
                                                                        <label
                                                                            class="form-label-sm mb-0">Billing:</label>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="ProcessAsNormalCancelledBilling">Process
                                                                                as Normal</label>
                                                                            <input class="form-check-input"
                                                                                id="ProcessAsNormalCancelledBilling"
                                                                                name="EnableCloseoutStatusesCancelledBilling"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="BillServiceMinimumCancelledBilling">Bill
                                                                                Service Minimum</label>
                                                                            <input class="form-check-input"
                                                                                id="BillServiceMinimumCancelledBilling"
                                                                                name="EnableCloseoutStatusesCancelledBilling"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="PayProviderServiceMinimumCancelledBilling">Pay
                                                                                Provider Service Minimum</label>
                                                                            <input class="form-check-input"
                                                                                id="PayProviderServiceMinimumCancelledBilling"
                                                                                name="EnableCloseoutStatusesCancelledBilling"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="CancelBookingWithChargeCancelledBilling">Cancel
                                                                                Booking with Charge</label>
                                                                            <input class="form-check-input"
                                                                                id="CancelBookingWithChargeCancelledBilling"
                                                                                name="EnableCloseoutStatusesCancelledBilling"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="CancelBookingWithoutChargeCancelledBilling">Cancel
                                                                                Booking without Charge</label>
                                                                            <input class="form-check-input"
                                                                                id="CancelBookingWithoutChargeCancelledBilling"
                                                                                name="EnableCloseoutStatusesCancelledBilling"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex flex-column gap-3 my-3">
                                                                        <label
                                                                            class="form-label-sm mb-0">Payment:</label>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="ProcessAsNormalCancelledPayment">Process
                                                                                as Normal</label>
                                                                            <input class="form-check-input"
                                                                                id="ProcessAsNormalCancelledPayment"
                                                                                name="EnableCloseoutStatusesCancelledPayment"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="BillServiceMinimumCancelledPayment">Bill
                                                                                Service Minimum</label>
                                                                            <input class="form-check-input"
                                                                                id="BillServiceMinimumCancelledPayment"
                                                                                name="EnableCloseoutStatusesCancelledPayment"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="PayProviderServiceMinimumCancelledPayment">Pay
                                                                                Provider Service Minimum</label>
                                                                            <input class="form-check-input"
                                                                                id="PayProviderServiceMinimumCancelledPayment"
                                                                                name="EnableCloseoutStatusesCancelledPayment"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="CancelBookingWithChargeCancelledPayment">Cancel
                                                                                Booking with Charge</label>
                                                                            <input class="form-check-input"
                                                                                id="CancelBookingWithChargeCancelledPayment"
                                                                                name="EnableCloseoutStatusesCancelledPayment"
                                                                                type="radio" tabindex="">
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                for="CancelBookingWithoutChargeCancelledPayment">Cancel
                                                                                Booking without Charge</label>
                                                                            <input class="form-check-input"
                                                                                id="CancelBookingWithoutChargeCancelledBilling"
                                                                                name="EnableCloseoutStatusesCancelledPayment"
                                                                                type="radio" tabindex="">
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
                            <div class="row mb-4">
                                <div class="col-lg-6 pe-lg-5">
                                    <div class="w-100">
                                        <div class="inner-section-segment-spacing border p-3 pb-lg-5">
                                            <h2>
                                                Running Late Procedure
                                            </h2>
                                            <div class="d-flex flex-column gap-3">
                                                <div class="form-check">
                                                    <label class="form-check-label" for="EnableRunningLateButton">Enable
                                                        “Running Late” Button</label>
                                                    <input class="form-check-input" id="EnableRunningLateButton"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="NotifyCustomer">Notify
                                                        Customer</label>
                                                    <input class="form-check-input show-hidden-content"
                                                        id="NotifyCustomer" name="RequestStartTimeforServices"
                                                        type="checkbox" tabindex="">
                                                    <div class="hidden-content">
                                                        <label class="form-label-sm">Select Customer</label>
                                                        <select class="form-select">
                                                            <option>Select Customer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="NotifyTeamProviders">Notify
                                                        Team
                                                        Providers</label>
                                                    <input class="form-check-input" id="NotifyTeamProviders"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                        for="AddCustomizedRunningLateForm">Add
                                                        Customized “Running Late” Form</label>
                                                    <input class="form-check-input show-hidden-content"
                                                        id="AddCustomizedRunningLateForm"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                    <div class="hidden-content">
                                                        <label class="form-label-sm">Select Form</label>
                                                        <select class="form-select">
                                                            <option>Select Form</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="NotifyCustomerofCheckin">Notify
                                                        Customer of Check-in</label>
                                                    <input class="form-check-input show-hidden-content"
                                                        id="NotifyCustomerofCheckin" name="RequestStartTimeforServices"
                                                        type="checkbox" tabindex="">
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
                                        <div class="inner-section-segment-spacing border p-3 pb-lg-5">
                                            <h2>
                                                Display to providers prior to being assigned
                                            </h2>
                                            <div class="d-flex flex-column gap-3">
                                                <div class="form-check">
                                                    <label class="form-check-label" for="CompanyName">Company
                                                        Name</label>
                                                    <input class="form-check-input" id="CompanyName"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="FullServiceAddress">Full
                                                        Service
                                                        Address</label>
                                                    <input class="form-check-input" id="FullServiceAddress"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="requester"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                    <label class="form-check-label" for="requester">Requester</label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="ServiceConsumer">Service
                                                        Consumer(s)</label>
                                                    <input class="form-check-input" id="ServiceConsumer"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                        for="Participants">Participants</label>
                                                    <input class="form-check-input" id="Participants"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="Step2Details">Step 2
                                                        Details</label>
                                                    <input class="form-check-input" id="Step2Details"
                                                        name="RequestStartTimeforServices" type="checkbox" tabindex="">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /Display to providers prior to being assigned -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 justify-content-center form-actions d-flex gap-2">
                                    <button type="button" class="btn btn-outline-dark rounded"
                                        x-on:click="$wire.switch('service-configuration')">Back</button>
                                    <a href="/admin/accommodation/all-services"><button type="submit"
                                            class="btn btn-primary rounded">Save & Exit</button></a>
                                    <button type="submit" class="btn btn-primary rounded"
                                        x-on:click="$wire.switch('notification-setting')">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade {{ $component == 'notification-setting' ? 'active show' : '' }}"
                        id="notification-setting" role="tabpanel" aria-labelledby="notification-setting-tab"
                        tabindex="0">
                        <form class="form">
                            {{-- updated by shanila to add csrf--}}
                            @csrf
                            {{-- update ended by shanila --}}

                            <div class="between-section-segment-spacing">
                                <div class="d-lg-flex justify-content-between align-items-center">
                                    <h2>Default Notification Settings</h2>
                                </div>
                                <div class="row inner-section-segment-spacing">
                                    <div class="col-lg-8">
                                        <h3 class="text-primary">In-Person Services</h3>
                                        <div class="row">
                                            <div class="col-lg-5 mb-4">
                                                <div class="d-flex gap-3">
                                                    <label class="form-label-sm">
                                                        Broadcast
                                                    </label>
                                                    <div class="form-check form-switch form-switch-column">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="AutoNotifyBroadcast" checked>
                                                        <label class="form-check-label"
                                                            for="AutoNotifyBroadcast">Auto-notify</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 mb-4">
                                                <div>
                                                    <div class="d-flex gap-3 mb-4">
                                                        <label class="form-label-sm">
                                                            Assign
                                                        </label>
                                                        <div class="form-check form-switch form-switch-column">
                                                            <input class="form-check-input js-auto-notify"
                                                                type="checkbox" role="switch" id="AutoNotifyAssign">
                                                            <label class="form-check-label"
                                                                for="AutoNotifyAssign"></label>
                                                            <label class="form-check-label"
                                                                for="AutoNotifyAssign">Auto-notify</label>
                                                        </div>
                                                    </div>
                                                    <div class="js-auto-notify-content hidden">
                                                        <div class="d-flex flex-column gap-3">
                                                            <div class="form-check">
                                                                <label class="form-check-label"
                                                                    for="FirstAvailableAssign">First
                                                                    Available</label>
                                                                <input class="form-check-input"
                                                                    id="FirstAvailableAssign"
                                                                    name="RequestStartTimeforServices" type="radio"
                                                                    tabindex="">
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label"
                                                                    for="PriorityAssign">Priority</label>
                                                                <input class="form-check-input" id="PriorityAssign"
                                                                    name="RequestStartTimeforServices" type="radio"
                                                                    tabindex="">
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label"
                                                                    for="PriorityPreferredProvidersAssign">Priority &
                                                                    Preferred
                                                                    Providers</label>
                                                                <input class="form-check-input"
                                                                    id="PriorityPreferredProvidersAssign"
                                                                    name="RequestStartTimeforServices" type="radio"
                                                                    tabindex="">
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label"
                                                                    for="ClosestProviderAssign">Closest Provider</label>
                                                                <input class="form-check-input"
                                                                    id="ClosestProviderAssign"
                                                                    name="RequestStartTimeforServices" type="radio"
                                                                    tabindex="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="d-lg-flex align-items-center gap-5">
                                                    <label class="form-label mb-lg-0">Broadcast via</label>
                                                    <div class="form-check mb-lg-0">
                                                        <label class="form-check-label"
                                                            for="emailBroadcastvia">Email</label>
                                                        <input class="form-check-input" id="emailBroadcastvia"
                                                            name="RequestStartTimeforServices" type="checkbox"
                                                            tabindex="">
                                                    </div>
                                                    <div class="form-check mb-lg-0">
                                                        <label class="form-check-label"
                                                            for="smsBroadcastvia">SMS</label>
                                                        <input class="form-check-input" id="smsBroadcastvia"
                                                            name="RequestStartTimeforServices" type="checkbox"
                                                            tabindex="">
                                                    </div>
                                                    <div class="form-check mb-lg-0">
                                                        <label class="form-check-label"
                                                            for="pushNotificationBroadcastvia">Push
                                                            Notification</label>
                                                        <input class="form-check-input"
                                                            id="pushNotificationBroadcastvia"
                                                            name="RequestStartTimeforServices" type="checkbox"
                                                            tabindex="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="d-lg-flex align-items-center gap-5">
                                                    <label class="form-label mb-lg-0">Variable</label>
                                                    <div class="form-check mb-lg-0">
                                                        <label class="form-check-label" for="ProviderPriority">Provider
                                                            Priority</label>
                                                        <input class="form-check-input" id="ProviderPriority"
                                                            name="RequestStartTimeforServices" type="checkbox"
                                                            tabindex="">
                                                    </div>
                                                    <div class="form-check mb-lg-0">
                                                        <label class="form-check-label"
                                                            for="ProximitytoServiceAddress">Proximity to Service
                                                            Address</label>
                                                        <input class="form-check-input" id="ProximitytoServiceAddress"
                                                            name="RequestStartTimeforServices" type="checkbox"
                                                            tabindex="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="d-lg-flex align-items-center gap-5">
                                                    <div>
                                                        <label class="form-label-sm">Max. Radius</label>
                                                        <div class="input-group">
                                                            <input type="" name=""
                                                                class="form-control form-control-sm w-50"
                                                                placeholder="00">
                                                            <select class="form-select form-select-sm">
                                                                <option>Miles</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="form-label-sm">Provider Count</label>
                                                        <div class="input-group">
                                                            <input type="" name="" class="form-control form-control-sm"
                                                                placeholder="00">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="form-label-sm">Interval</label>
                                                        <div class="input-group">
                                                            <input type="" name=""
                                                                class="form-control form-control-sm w-50"
                                                                placeholder="00">
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
                                    <div class="col-lg-8">
                                        <h3 class="text-primary">Virtual Services</h3>
                                        <div class="row">
                                            <div class="col-lg-5 mb-4">
                                                <div class="d-flex gap-3">
                                                    <label class="form-label-sm">
                                                        Broadcast
                                                    </label>
                                                    <div class="form-check form-switch form-switch-column">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="AutoNotifyBroadcast" checked>
                                                        <label class="form-check-label"
                                                            for="AutoNotifyBroadcast">Auto-notify</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 mb-4">
                                                <div>
                                                    <div class="d-flex gap-3 mb-4">
                                                        <label class="form-label-sm">
                                                            Assign
                                                        </label>
                                                        <div class="form-check form-switch form-switch-column">
                                                            <input class="form-check-input js-auto-notify"
                                                                type="checkbox" role="switch" id="AutoNotifyAssign">
                                                            <label class="form-check-label"
                                                                for="AutoNotifyAssign"></label>
                                                            <label class="form-check-label"
                                                                for="AutoNotifyAssign">Auto-notify</label>
                                                        </div>
                                                    </div>
                                                    <div class="js-auto-notify-content hidden">
                                                        <div class="d-flex flex-column gap-3">
                                                            <div class="form-check">
                                                                <label class="form-check-label"
                                                                    for="FirstAvailableAssign">First
                                                                    Available</label>
                                                                <input class="form-check-input"
                                                                    id="FirstAvailableAssign"
                                                                    name="RequestStartTimeforServices" type="radio"
                                                                    tabindex="">
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label"
                                                                    for="PriorityAssign">Priority</label>
                                                                <input class="form-check-input" id="PriorityAssign"
                                                                    name="RequestStartTimeforServices" type="radio"
                                                                    tabindex="">
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label"
                                                                    for="PriorityPreferredProvidersAssign">Priority &
                                                                    Preferred
                                                                    Providers</label>
                                                                <input class="form-check-input"
                                                                    id="PriorityPreferredProvidersAssign"
                                                                    name="RequestStartTimeforServices" type="radio"
                                                                    tabindex="">
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label"
                                                                    for="ClosestProviderAssign">Closest Provider</label>
                                                                <input class="form-check-input"
                                                                    id="ClosestProviderAssign"
                                                                    name="RequestStartTimeforServices" type="radio"
                                                                    tabindex="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="d-lg-flex align-items-center gap-5">
                                                    <label class="form-label mb-lg-0">Broadcast via</label>
                                                    <div class="form-check mb-lg-0">
                                                        <label class="form-check-label"
                                                            for="emailBroadcastvia">Email</label>
                                                        <input class="form-check-input" id="emailBroadcastvia"
                                                            name="RequestStartTimeforServices" type="checkbox"
                                                            tabindex="">
                                                    </div>
                                                    <div class="form-check mb-lg-0">
                                                        <label class="form-check-label"
                                                            for="smsBroadcastvia">SMS</label>
                                                        <input class="form-check-input" id="smsBroadcastvia"
                                                            name="RequestStartTimeforServices" type="checkbox"
                                                            tabindex="">
                                                    </div>
                                                    <div class="form-check mb-lg-0">
                                                        <label class="form-check-label"
                                                            for="pushNotificationBroadcastvia">Push
                                                            Notification</label>
                                                        <input class="form-check-input"
                                                            id="pushNotificationBroadcastvia"
                                                            name="RequestStartTimeforServices" type="checkbox"
                                                            tabindex="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="d-lg-flex align-items-center gap-5">
                                                    <label class="form-label mb-lg-0">Variable</label>
                                                    <div class="form-check mb-lg-0">
                                                        <label class="form-check-label" for="ProviderPriority">Provider
                                                            Priority</label>
                                                        <input class="form-check-input" id="ProviderPriority"
                                                            name="RequestStartTimeforServices" type="checkbox"
                                                            tabindex="">
                                                    </div>
                                                    <div class="form-check mb-lg-0">
                                                        <label class="form-check-label"
                                                            for="ProximitytoServiceAddress">Proximity to Service
                                                            Address</label>
                                                        <input class="form-check-input" id="ProximitytoServiceAddress"
                                                            name="RequestStartTimeforServices" type="checkbox"
                                                            tabindex="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="d-lg-flex align-items-center gap-5">
                                                    <div>
                                                        <label class="form-label-sm">Max. Radius</label>
                                                        <div class="input-group">
                                                            <input type="" name=""
                                                                class="form-control form-control-sm w-50"
                                                                placeholder="00">
                                                            <select class="form-select form-select-sm">
                                                                <option>Miles</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="form-label-sm">Provider Count</label>
                                                        <div class="input-group">
                                                            <input type="" name="" class="form-control form-control-sm"
                                                                placeholder="00">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="form-label-sm">Interval</label>
                                                        <div class="input-group">
                                                            <input type="" name=""
                                                                class="form-control form-control-sm w-50"
                                                                placeholder="00">
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
                            </div>
                            <div class="row">
                                <div class="col-12 justify-content-center form-actions d-flex gap-2">
                                    <button type="button" class="btn btn-outline-dark rounded"
                                        x-on:click="$wire.switch('advance-options')">Back</button>
                                    <a href="/admin/accommodation/all-services"><button type="submit"
                                            class="btn btn-primary rounded">Save & Exit</button></a>
                                </div>
                            </div>
                        </form>
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
