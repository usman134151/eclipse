@php
    $videoUrl = 'https://www.youtube.com/embed/epSdx8YXwNw?si=1zRdQJd90vL4WXe8';
@endphp

<div>
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
                    <h1 class="content-header-title float-start mb-0">{{ $label }} Service</h1>
                    <div class="float-lg-end float-md-end float-sm-start mb-0">
                            @include('layouts.video-guide')					
                         </div>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    {{-- Updated by Shanila to Add svg icon --}}
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>

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
                <div x-data="{ tab: @entangle('component') }" id="tab_wrapper">
                    <!-- BEGIN: Steps -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'basic-service-setup' }"
                                @click.prevent="tab = 'basic-service-setup'" id="basic-service-setup-tab" role="tab"
                                aria-controls="basic-service-setup" aria-selected="true" wire:click="setStep(1)"><span
                                    class="number">1</span>Basic Service Setup</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            @if ($service->name)
                                <a href="#" class="nav-link"
                                    :class="{ 'active': tab === 'advanced-service-rate' }"
                                    @click.prevent="tab = 'advanced-service-rate'" id="advanced-service-rate-tab"
                                    role="tab" aria-controls="advanced-service-rate" aria-selected="false"
                                    wire:click="setStep(2)"><span class="number">2</span>Advanced Service Rate</a>
                            @else
                                <div class="nav-link" title="Please fill step 1 to proceed"><span
                                        class="number">2</span>Advanced Service Rate</div>
                            @endif

                        </li>
                        <li class="nav-item" role="presentation">
                            @if ($service->name)
                                <a href="#" class="nav-link" :class="{ 'active': tab === 'service-forms' }"
                                    @click.prevent="tab = 'service-forms'" id="service-forms-tab" role="tab"
                                    aria-controls="service-forms" aria-selected="false" wire:click="setStep(3)"><span
                                        class="number">3</span>Service Forms</a>
                            @else
                                <div class="nav-link" title="Please fill step 1 to proceed"><span
                                        class="number">3</span>Service Forms</div>
                            @endif
                        </li>
                        <li class="nav-item" role="presentation">
                            @if ($service->name)
                                <a href="#" class="nav-link"
                                    :class="{ 'active': tab === 'service-configuration' }"
                                    @click.prevent="tab = 'service-configuration'" id="service-configuration-tab"
                                    role="tab" aria-controls="service-configuration" aria-selected="false"
                                    wire:click="setStep(4)"><span class="number">4</span>Service Configuration</a>
                            @else
                                <div href="#" class="nav-link" title="Please fill step 1 to proceed"><span
                                        class="number" title="Please fill step 1 to proceed">4</span>Service
                                    Configuration</div>
                            @endif
                        </li>
                        <li class="nav-item" role="presentation">
                            @if ($service->name)
                                <a href="#" class="nav-link" :class="{ 'active': tab === 'advance-options' }"
                                    @click.prevent="tab = 'advance-options'" id="advance-options-tab" role="tab"
                                    aria-controls="advance-options" aria-selected="false" wire:click="setStep(5)"><span
                                        class="number">5</span>Advance Options</a>
                            @else
                                <div class="nav-link" title="Please fill step 1 to proceed"><span class="number"
                                        title="Please fill step 1 to proceed">5</span>Advance Options</div>
                            @endif
                        </li>
                        <li class="nav-item" role="presentation">
                            @if ($service->name)
                                <a href="#" class="nav-link"
                                    :class="{ 'active': tab === 'notification-setting' }"
                                    @click.prevent="tab = 'notification-setting'" id="notification-setting-tab"
                                    role="tab" aria-controls="notification-setting" aria-selected="false"
                                    wire:click="setStep(6)"><span class="number"
                                        title="Please fill step 1 to proceed">6</span>Notification Setting</a>
                            @else
                                <div class="nav-link" title="Please fill step 1 to proceed"><span class="number"
                                        title="Please fill step 1 to proceed">6</span>Notification Setting</div>
                            @endif
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    @if ($errors->any())
                        <div class="d-inline-block invalid-feedback mt-2 mb-2 ">
                            Please review the form below and fix the highlighted errors.
                            Scroll down to see the relevant fields with errors.
                        </div>
                    @endif
                    <div class="tab-content">
                        @if ($step == 1)
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'basic-service-setup' }"
                                id="basic-service-setup" role="tabpanel" aria-labelledby="basic-service-setup-tab"
                                tabindex="0" x-show="tab === 'basic-service-setup'">
                                <form class="form">

                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-12 between-section-segment-spacing">
                                            <div class="d-lg-flex justify-content-between align-items-center mb-3">
                                                <h2 class="mb-lg-0">Basic Service Setup</h2>

                                                <div class="form-check form-switch form-switch-column mb-0">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        role="switch" id="basicService"
                                                        aria-label="Active Toggle Button" wire:model="service.status">
                                                    <label class="form-check-label"
                                                        for="basicService">In-Active</label>
                                                    <label class="form-check-label" for="basicService">Active</label>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 mb-4 pe-lg-5">
                                                    <label class="form-label">Accommodation <span
                                                            class="mandatory">*</span></label>
                                                    {!! $setupValues['accomodations']['rendered'] !!}
                                                    @error('service.accommodations_id')
                                                        <span class="d-inline-block invalid-feedback mt-2">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <label class="form-label" for="service-name">
                                                        Service Type <span class="mandatory">*</span></label> <i
                                                        class="fa fa-question-circle" aria-hidden="true"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title=""></i>
                                                    </label>
                                                    <div>
                                                        {!! $setupCheckboxes['service_types']['rendered'] !!}
                                                        @error('service.service_type')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <label class="form-label" for="service-name">
                                                        Service Name <span class="mandatory">*</span>
                                                    </label>
                                                    <input type="text" id="service-name" class="form-control"
                                                        name="service-name" placeholder="Enter Service Name"
                                                        wire:model.defer="service.name" />
                                                    @error('service.name')
                                                        <span class="d-inline-block invalid-feedback mt-2">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <label class="form-label" for="service-name">
                                                        Permitted Scheduling Frequencies <span
                                                            class="mandatory">*</span></label> <i
                                                        class="fa fa-question-circle" aria-hidden="true"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title=""></i>
                                                    </label>
                                                    <div>
                                                        {!! $setupCheckboxes['frequency_id']['rendered'] !!}
                                                        @error('service.frequency_id')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <label class="form-label" for="service_category-description">
                                                        Description <i class="fa fa-question-circle"
                                                            aria-hidden="true" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""></i>
                                                    </label>
                                                    <textarea rows="4" cols="4" id="service_category-description" class="form-control"
                                                        name="service_category-description" placeholder="" wire:model.defer="service.description"></textarea>
                                                    @error('service.description')
                                                        <span class="d-inline-block invalid-feedback mt-2">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 between-section-segment-spacing">
                                            <div class="d-lg-flex gap-4 align-items-center">
                                                <h2 class="mb-lg-0">Enable Billing Rates <span
                                                        class="mandatory">*</span></label></h2>
                                                <div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" id="rate_status"
                                                            name="rate_status" type="radio" tabindex=""
                                                            value="1" wire:model.defer="service.rate_status"
                                                            onclick="updateBilling($(this))" />
                                                        <label class="form-check-label"
                                                            for="HourlyMinutesRate">Hourly/Minutes
                                                            Rate</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" id="rate_status"
                                                            name="rate_status" type="radio" tabindex=""
                                                            value="2" wire:model.defer="service.rate_status"
                                                            onclick="updateBilling($(this))" />
                                                        <label class="form-check-label" for="Day-Rate"> Day
                                                            Rate</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input"
                                                            id="service_category-fixed_rate" id="rate_status"
                                                            name="rate_status" type="radio" tabindex=""
                                                            value="4" wire:model.defer="service.rate_status"
                                                            onclick="updateBilling($(this))" />
                                                        <label class="form-check-label"
                                                            for="service_category-fixed_rate"> Fixed Rate</label>
                                                    </div>
                                                </div>
                                                @error('service.rate_status')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 between-section-segment-spacing">
                                            <h2>Display Service in</h2>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="newProviderApplicationForm"
                                                    name="" type="checkbox" tabindex=""
                                                    wire:model.defer="service.display_in_application" />
                                                <label class="form-check-label" for="newProviderApplicationForm">New
                                                    Provider
                                                    Application Form</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="CustomerQuoteRequestForm"
                                                    name="" type="checkbox" tabindex=""
                                                    wire:model.defer="service.display_in_quote" />
                                                <label class="form-check-label" for="CustomerQuoteRequestForm">
                                                    Customer Quote
                                                    Request Form</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="DisableserviceForCompanies"
                                                    name="" type="checkbox" tabindex=""
                                                    wire:model.defer="service.disable_for_companies" />
                                                <label class="form-check-label" for="DisableserviceForCompanies">
                                                    Disable
                                                    service for Companies by Default</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 between-section-segment-spacing">
                                            <h2>Standard Rates</h2>
                                            @if (
                                                $errors->has('service.hours_price') ||
                                                    $errors->has('service.after_hours_price') ||
                                                    $errors->has('service.fixed_rate') ||
                                                    $errors->has('service.day_rate_price'))
                                                <span class="d-inline-block invalid-feedback mt-2 mb-3">
                                                    {{ $errors->first('service.hours_price') }}
                                                    {{ $errors->first('service.after_hours_price') }}
                                                    {{ $errors->first('service.fixed_rate') }}
                                                    {{ $errors->first('service.day_rate_price') }}
                                                </span>
                                            @endif
                                            <div class="row justify-content-between">
                                                @if (!is_null($service->service_type) && count($service->service_type) == 0)
                                                    <div class="col-lg-6 mb-5 rates-alert ">
                                                        Please select service type to configure Rates
                                                    </div>
                                                @endif
                                                @foreach ($serviceTypes as $type => $parameters)
                                                    @if (!is_null($service->service_type) && in_array($type, $service->service_type))
                                                        <div class="col-lg-6 mb-5 {{ $parameters['class'] }}">
                                                        @else
                                                            <div
                                                                class="col-lg-6 mb-5 d-none {{ $parameters['class'] }}">
                                                    @endif
                                                    <!-- In-Person Rates -->
                                                    <div
                                                        class="d-lg-flex align-items-center justify-content-between mb-3">
                                                        <div class="d-lg-flex align-items-center gap-3">
                                                            <h3 class="form-label mb-0">
                                                                {{ $parameters['title'] }} Rates
                                                            </h3>
                                                            <div class="form-check form-check-inline">
                                                                @if ($parameters['postfix'] == '_v')
                                                                    <input class="form-check-input"
                                                                        name="MultiplyProvidersInPerson"
                                                                        type="checkbox" tabindex=""
                                                                        wire:model.defer="service.standard_rate_virtual_multiply_provider"
                                                                        id="mbp_{{ $type }}" />
                                                                @else
                                                                    <input
                                                                        class="form-check-input chargeChk_{{ $type }}"
                                                                        id="mbp_{{ $type }}"
                                                                        name="MultiplyProvidersInPerson"
                                                                        type="checkbox" tabindex=""
                                                                        wire:model.defer="service.standard_in_person_multiply_provider{{ $parameters['postfix'] }}"
                                                                        maxlength="3" />
                                                                @endif
                                                                <label class="form-check-label"
                                                                    for="Multiply-ProvidersInPerson">
                                                                    Multiply by No. of Providers</label>
                                                            </div>
                                                        </div>
                                                        @if ($type != 1)
                                                            <div>
                                                                <a class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    href="#"
                                                                    onclick=copyTo({{ $type }},'charge')>
                                                                    <svg width="19" height="19"
                                                                        viewBox="0 0 19 19" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M1.9 19.0008H13.3C14.3479 19.0008 15.2 18.1486 15.2 17.1008V5.70078C15.2 4.65293 14.3479 3.80078 13.3 3.80078H1.9C0.85215 3.80078 0 4.65293 0 5.70078V17.1008C0 18.1486 0.85215 19.0008 1.9 19.0008ZM1.9 5.70078H13.3L13.3019 17.1008H1.9V5.70078Z"
                                                                            fill="black"></path>
                                                                        <path
                                                                            d="M17.1002 0H5.7002V1.9H17.1002V13.3H19.0002V1.9C19.0002 0.85215 18.148 0 17.1002 0Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="border px-3 py-4 d-flex flex-column gap-3">
                                                        <div
                                                            class="input-group billing-rates hour-rate @if ($service->rate_status != 1) d-none @endif">
                                                            <span class="input-group-text bg-secondary col-lg-7"
                                                                id="BusinessHoursPerhour">
                                                                Business Hours (per hour)
                                                            </span>
                                                            <input type="text"
                                                                class="form-control rounded-0 text-center px-0"
                                                                placeholder="$" aria-label="$" aria-describedby=""
                                                                disabled>
                                                            <input type="text"
                                                                class="form-control text-center chargeFld_{{ $type }}"
                                                                placeholder="00.00" aria-label="Enter Charges"
                                                                aria-describedby="BusinessHoursPerhour"
                                                                wire:model.defer="service.hours_price{{ $parameters['postfix'] }}"
                                                                maxlength="6" id="bh_{{ $type }}">
                                                        </div>
                                                        <div
                                                            class="input-group billing-rates hour-rate @if ($service->rate_status != 1) d-none @endif">
                                                            <span class="input-group-text bg-secondary col-lg-7"
                                                                id="AfterHoursperhour">
                                                                After-Hours (per hour)
                                                            </span>
                                                            <input type="text"
                                                                class="form-control text-center px-0" placeholder="$"
                                                                aria-label="$" aria-describedby="" disabled>
                                                            <input type="text"
                                                                class="form-control text-center chargeFld_{{ $type }}"
                                                                placeholder="00.00" aria-label="Enter Charges"
                                                                aria-describedby="AfterHoursperhour"
                                                                wire:model.defer="service.after_hours_price{{ $parameters['postfix'] }}"
                                                                maxlength="6" id="abh_{{ $type }}">
                                                        </div>
                                                        <div
                                                            class="input-group billing-rates day-rate @if ($service->rate_status != 2) d-none @endif">
                                                            <span class="input-group-text bg-secondary col-lg-7 "
                                                                id="DayRate">
                                                                Day Rate
                                                            </span>
                                                            <input type="text"
                                                                class="form-control text-center px-0" placeholder="$"
                                                                aria-label="$" aria-describedby="">
                                                            <input type="text"
                                                                class="form-control text-center chargeFld_{{ $type }}"
                                                                placeholder="00.00" aria-label="Enter Charges"
                                                                aria-describedby="DayRate"
                                                                wire:model.defer="service.day_rate_price{{ $parameters['postfix'] }}"
                                                                maxlength="6" id="dr_{{ $type }}">
                                                        </div>
                                                        <div
                                                            class="input-group billing-rates fixed-rate @if ($service->rate_status != 4) d-none @endif">
                                                            <span class="input-group-text bg-secondary col-lg-7"
                                                                id="FixedRate">
                                                                Fixed Rate
                                                            </span>
                                                            <input type="text"
                                                                class="form-control text-center px-0" placeholder="$"
                                                                aria-label="$" aria-describedby="">
                                                            <input type="text"
                                                                class="form-control text-center chargeFld_{{ $type }}"
                                                                placeholder="00.00" aria-label="Enter Charges"
                                                                aria-describedby="FixedRate"
                                                                wire:model.defer="service.fixed_rate{{ $parameters['postfix'] }}"
                                                                maxlength="6" id="fr_{{ $type }}">
                                                        </div>
                                                    </div>
                                                    <!-- /In-Person Rates -->
                                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-lg-12 between-section-segment-spacing">
                    <h2>Service Capacity & Capabilities</h2>


                    <div class="row justify-content-between">
                        @if (!is_null($service->service_type) && count($service->service_type) == 0)
                            <div class="col-lg-6 mb-5 rates-alert ">
                                Please select service type to configure Capacity & Capabilities
                            </div>
                        @endif
                        @if (
                            $errors->hasAny([
                                'service.provider_limit',
                                'service.minimum_assistance_hours',
                                'service.minimum_assistance_min',
                                'service.maximum_assistance_hours',
                                'service.maximum_assistance_min',
                                'service.min_providers',
                                'service.max_providers',
                                'service.default_providers',
                            ]))
                            <div class="d-inline-block invalid-feedback mb-3">
                                Only Numeric values are acceptable in Service Capacity & Capabilities
                            </div>
                        @endif
                        @foreach ($serviceTypes as $type => $parameters)
                            @if (!is_null($service->service_type) && in_array($type, $service->service_type))
                                <div class="col-lg-6 mb-5 {{ $parameters['class'] }}">
                                @else
                                    <div class="col-lg-6 mb-5 {{ $parameters['class'] }} d-none">
                            @endif
                            <!-- Service Type: In-Person -->

                            <div class="d-lg-flex align-items-center justify-content-between mb-3 ">



                                <div class="d-lg-flex align-items-center gap-3">
                                    <h3 class="mb-0">
                                        Service Type: {{ $parameters['title'] }}
                                    </h3>
                                    <div>
                                        <a class="btn btn-sm btn-secondary rounded btn-hs-icon" href="#"
                                            onclick=copyTo({{ $type }},'cap')>
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.9 19.0008H13.3C14.3479 19.0008 15.2 18.1486 15.2 17.1008V5.70078C15.2 4.65293 14.3479 3.80078 13.3 3.80078H1.9C0.85215 3.80078 0 4.65293 0 5.70078V17.1008C0 18.1486 0.85215 19.0008 1.9 19.0008ZM1.9 5.70078H13.3L13.3019 17.1008H1.9V5.70078Z"
                                                    fill="black"></path>
                                                <path
                                                    d="M17.1002 0H5.7002V1.9H17.1002V13.3H19.0002V1.9C19.0002 0.85215 18.148 0 17.1002 0Z"
                                                    fill="black"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                            <div class="border px-3 py-4 d-flex flex-column gap-3">
                                <div class="row justify-content-between">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label-base">
                                                Min. Duration <i class="fa fa-question-circle" aria-hidden="true"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title=""></i>
                                            </label>
                                            <div class="d-flex justify-content-around">
                                                <label class="form-label-sm">Hours</label>
                                                <label class="form-label-sm">Minutes</label>
                                            </div>
                                            <div class="input-group">
                                                <input id="mdh_{{ $type }}" type="text"
                                                    class="form-control text-center capFld_{{ $type }}"
                                                    placeholder="00" aria-label="00" aria-describedby=""
                                                    wire:model.defer="service.minimum_assistance_hours{{ $parameters['postfix'] }}"
                                                    maxlength="6">
                                                <input type="text"
                                                    class="form-control text-center capFld_{{ $type }}"
                                                    placeholder="00" aria-label="00" aria-describedby=""
                                                    wire:model.defer="service.minimum_assistance_min{{ $parameters['postfix'] }}"
                                                    maxlength="6" id="mdm_{{ $type }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label-base">
                                                Max. Duration <i class="fa fa-question-circle" aria-hidden="true"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title=""></i>
                                            </label>
                                            <div class="d-flex justify-content-around">
                                                <label class="form-label-sm">Hours</label>
                                                <label class="form-label-sm">Minutes</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control text-center capFld_{{ $type }}"
                                                    placeholder="00" aria-label="00" aria-describedby=""
                                                    wire:model.defer="service.maximum_assistance_hours{{ $parameters['postfix'] }}"
                                                    maxlength="6" id="mdurh_{{ $type }}">
                                                <input type="text"
                                                    class="form-control text-center capFld_{{ $type }}"
                                                    placeholder="00" aria-label="00" aria-describedby=""
                                                    wire:model.defer="service.maximum_assistance_min{{ $parameters['postfix'] }}"
                                                    maxlength="6" id="mdurm_{{ $type }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label-base">
                                                Min. Providers <i class="fa fa-question-circle" aria-hidden="true"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title=""></i>
                                            </label>
                                            <input type="text"
                                                class="form-control text-center capFld_{{ $type }}"
                                                placeholder="1" aria-label="1" aria-describedby=""
                                                wire:model.defer="service.min_providers{{ $parameters['postfix'] }}"
                                                maxlength="6" id="minp_{{ $type }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label-base">
                                                Max. Providers <i class="fa fa-question-circle" aria-hidden="true"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title=""></i>
                                            </label>
                                            <input type="text"
                                                class="form-control text-center capFld_{{ $type }}"
                                                placeholder="50" aria-label="50" aria-describedby=""
                                                wire:model.defer="service.max_providers{{ $parameters['postfix'] }}"
                                                maxlength="6" id="maxp_{{ $type }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4 row">
                                            <label class="form-label-base col-lg-6">
                                                Default Providers <i class="fa fa-question-circle" aria-hidden="true"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title=""></i>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text"
                                                    class="form-control text-center capFld_{{ $type }}"
                                                    placeholder="2" aria-label="2" aria-describedby=""
                                                    wire:model.defer="service.default_providers{{ $parameters['postfix'] }}"
                                                    maxlength="6" id="dp_{{ $type }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4 row">
                                            <label class="form-label-base col-lg-6">
                                                Provider Limit <i class="fa fa-question-circle" aria-hidden="true"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title=""></i>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text"
                                                    class="form-control text-center capFld_{{ $type }}"
                                                    placeholder="100" aria-label="100" aria-describedby=""
                                                    wire:model.defer="service.provider_limit{{ $parameters['postfix'] }}"
                                                    maxlength="6" id="pl_{{ $type }}">
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
                                                    <input type="text"
                                                        class="form-control text-center capFld_{{ $type }}"
                                                        placeholder="00" aria-label="00" aria-describedby=""
                                                        wire:model.defer="providerReturn.{{ $type }}.0.hour"
                                                        maxlength="6" id="prh_{{ $type }}">
                                                    <input type="text" id="prm_{{ $type }}"
                                                        class="form-control text-center capFld_{{ $type }}"
                                                        placeholder="00" aria-label="00" aria-describedby=""
                                                        wire:model.defer="providerReturn.{{ $type }}.0.minute"
                                                        maxlength="6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input capChk_{{ $type }}"
                                                id="ExcludeAfterHoursInPerson_{{ $type }}"
                                                name="ExcludeAfterHoursInPerson" type="checkbox" value="true"
                                                tabindex=""
                                                wire:model.defer="providerReturn.{{ $type }}.0.exclude_after_hours" />
                                            <label class="form-check-label" for="ExcludeAfterHoursInPerson">Exclude
                                                After-hours</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input capChk_{{ $type }}"
                                                id="ExcludeClosedHoursInPerson_{{ $type }}"
                                                name="ExcludeClosedHoursInPerson" type="checkbox" tabindex=""
                                                wire:model.defer="providerReturn.{{ $type }}.0.exclude_holidays" />
                                            <label class="form-check-label" for="ExcludeClosedHoursInPerson"> Exclude
                                                Closed-hours</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input capChk_{{ $type }}"
                                                id="ByRequestInPerson_{{ $type }}" name="ByRequestInPerson"
                                                type="checkbox" tabindex=""
                                                wire:model.defer="providerReturn.{{ $type }}.0.by_request" />
                                            <label class="form-check-label" for="ByRequestInPerson"> By
                                                Request</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service Type: In-Person -->
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-actions">
                <button type="submit" class="btn btn-primary rounded" wire:click.prevent="save"
                    x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">Save & Exit</button>
                <button type="button" class="btn btn-primary rounded" wire:click.prevent="save(0)"
                    x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('advanced-service-rate')">Next</button>

            </div>
        </div>
        </form>
    </div>
@elseif($step == 2)
    <!-- END: basic-service-setup -->
    <div class="tab-pane fade" :class="{ 'active show': tab === 'advanced-service-rate' }" id="advanced-service-rate"
        role="tabpanel" aria-labelledby="advanced-service-rate-tab" tabindex="0"
        x-show="tab === 'advanced-service-rate'">
        <div class="row">
            <form class="form">

                @csrf

                <div class="col-lg-5 between-section-segment-spacing">
                    <div class="d-lg-flex justify-content-between align-items-center mb-3">
                        <h2 class="mb-lg-0">Service Rates And Charges</h2>
                    </div>
                    <div class="border p-3">
                        <h3>
                            Customer Payment:
                        </h3>
                        <div class="form-check mb-4">
                            <input class="form-check-input" id="bill_status" name="bill_status" type="radio"
                                tabindex="" value="2" wire:model.defer="service.bill_status"
                                onclick="divToggle('payment_deduct_hour','none')" />
                            <label class="form-check-label" for="BillAfterServices">Bill After
                                Services</label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" id="bill_status" name="bill_status" type="radio"
                                tabindex="" value="1" wire:model.defer="service.bill_status"
                                onclick="divToggle('payment_deduct_hour','')" />
                            <label class="form-check-label" for="BillBeforeStartServices">Bill Before or
                                at
                                Start of Services</label>
                        </div>
                        @if ($service->bill_status == 1)
                            <div class="ps-4" id="payment_deduct_hour" style="display:''">
                            @else
                                <div class="ps-4" id="payment_deduct_hour" style="display:none">
                        @endif
                        <label class="form-label-sm">
                            Deduct Prepayment Parameter <i class="fa fa-question-circle text-muted" aria-hidden="true"
                                data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                        </label>
                        <select wire:model.defer="service.payment_deduct_hour" id="payment_deduct_hour"
                            class="form-control" name="payment_deduct_hour" aria-invalid="false">
                            <option value="0">0 hours</option>
                            <option value="1">1 hours</option>
                            <option value="2">2 hours</option>
                            <option value="3">3 hours</option>
                            <option value="4">4 hours</option>
                            <option value="5">5 hours</option>
                            <option value="6">6 hours</option>
                            <option value="7">7 hours</option>
                            <option value="8">8 hours</option>
                            <option value="9">9 hours</option>
                            <option value="10">10 hours</option>
                            <option value="11">11 hours</option>
                            <option value="12">12 hours</option>
                            <option value="13">13 hours</option>
                            <option value="14">14 hours</option>
                            <option value="15">15 hours</option>
                            <option value="16">16 hours</option>
                            <option value="17">17 hours</option>
                            <option value="18">18 hours</option>
                            <option value="19">19 hours</option>
                            <option value="20">20 hours</option>
                            <option value="21">21 hours</option>
                            <option value="22">22 hours</option>
                            <option value="23">23 hours</option>
                            <option value="24">24 hours</option>
                            <option value="25">25 hours</option>
                            <option value="26">26 hours</option>
                            <option value="27">27 hours</option>
                            <option value="28">28 hours</option>
                            <option value="29">29 hours</option>
                            <option value="30">30 hours</option>
                            <option value="31">31 hours</option>
                            <option value="32">32 hours</option>
                            <option value="33">33 hours</option>
                            <option value="34">34 hours</option>
                            <option value="35">35 hours</option>
                            <option value="36">36 hours</option>
                            <option value="37">37 hours</option>
                            <option value="38">38 hours</option>
                            <option value="39">39 hours</option>
                            <option value="40">40 hours</option>
                            <option value="41">41 hours</option>
                            <option value="42">42 hours</option>
                            <option value="43">43 hours</option>
                            <option value="44">44 hours</option>
                            <option value="45">45 hours</option>
                            <option value="46">46 hours</option>
                            <option value="47">47 hours</option>
                            <option value="48">48 hours</option>
                            <option value="49">49 hours</option>
                            <option value="50">50 hours</option>
                            <option value="51">51 hours</option>
                            <option value="52">52 hours</option>
                            <option value="53">53 hours</option>
                            <option value="54">54 hours</option>
                            <option value="55">55 hours</option>
                            <option value="56">56 hours</option>
                            <option value="57">57 hours</option>
                            <option value="58">58 hours</option>
                            <option value="59">59 hours</option>
                            <option value="60">60 hours</option>
                            <option value="61">61 hours</option>
                            <option value="62">62 hours</option>
                            <option value="63">63 hours</option>
                            <option value="64">64 hours</option>
                            <option value="65">65 hours</option>
                            <option value="66">66 hours</option>
                            <option value="67">67 hours</option>
                            <option value="68">68 hours</option>
                            <option value="69">69 hours</option>
                            <option value="70">70 hours</option>
                            <option value="71">71 hours</option>
                            <option value="72">72 hours</option>
                            <option value="73">73 hours</option>
                            <option value="74">74 hours</option>
                            <option value="75">75 hours</option>
                            <option value="76">76 hours</option>
                            <option value="77">77 hours</option>
                            <option value="78">78 hours</option>
                            <option value="79">79 hours</option>
                            <option value="80">80 hours</option>
                            <option value="81">81 hours</option>
                            <option value="82">82 hours</option>
                            <option value="83">83 hours</option>
                            <option value="84">84 hours</option>
                            <option value="85">85 hours</option>
                            <option value="86">86 hours</option>
                            <option value="87">87 hours</option>
                            <option value="88">88 hours</option>
                            <option value="89">89 hours</option>
                            <option value="90">90 hours</option>
                            <option value="91">91 hours</option>
                            <option value="92">92 hours</option>
                            <option value="93">93 hours</option>
                            <option value="94">94 hours</option>
                            <option value="95">95 hours</option>
                            <option value="96">96 hours</option>
                            <option value="97">97 hours</option>
                            <option value="98">98 hours</option>
                            <option value="99">99 hours</option>
                            <option value="100">100 hours</option>
                        </select>
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
                            @foreach ($serviceTypes as $type => $parameters)
                                @if (!is_null($service->service_type) && in_array($type, $service->service_type))
                                    <div class="col-lg-6 pe-lg-5 mb-3 {{ $parameters['class'] }}">
                                    @else
                                        <div class="col-lg-6 pe-lg-5 mb-3 d-none {{ $parameters['class'] }}">
                                @endif

                                <div class="d-flex flex-column gap-5">

                                    <!-- In-Person Billing Increment -->
                                    <div>
                                        <div class="text-primary fw-bold">
                                            {{ $parameters['title'] }}
                                        </div>
                                        <div class="d-flex flex-column gap-3">
                                            <div class="input-group">
                                                <span class="input-group-text gap-2 bg-secondary col-lg-5"
                                                    id="">
                                                    Billing Increment <i class="fa fa-question-circle"
                                                        aria-hidden="true" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""></i>
                                                </span>
                                                <input type="text" class="form-control rounded-0 text-center"
                                                    placeholder="HRS" aria-label="" aria-describedby="" disabled>
                                                <input type="text" class="form-control rounded-0 text-center"
                                                    placeholder="00" aria-label="" aria-describedby=""
                                                    wire:model.defer="billingIncrements.{{ $type }}.BH"
                                                    maxlength=2>
                                                <input type="text" class="form-control rounded-0 text-center"
                                                    placeholder="MINS" aria-label="" aria-describedby="" disabled>
                                                <input type="text" class="form-control text-center"
                                                    placeholder="00" aria-label="" aria-describedby=""
                                                    wire:model.defer="billingIncrements.{{ $type }}.BM"
                                                    maxlength=2>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-text gap-2 bg-secondary col-lg-5"
                                                    id="">
                                                    Payment Increment <i class="fa fa-question-circle"
                                                        aria-hidden="true" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""></i>
                                                </span>
                                                <input type="text" class="form-control rounded-0 text-center"
                                                    placeholder="HRS" aria-label="" aria-describedby="" disabled>
                                                <input type="text" class="form-control rounded-0 text-center"
                                                    placeholder="00" aria-label="" aria-describedby=""
                                                    wire:model.defer="billingIncrements.{{ $type }}.PH"
                                                    maxlength=2>
                                                <input type="text" class="form-control rounded-0 text-center"
                                                    placeholder="MINS" aria-label="" aria-describedby="" disabled>
                                                <input type="text" class="form-control text-center"
                                                    placeholder="00" aria-label="" aria-describedby=""
                                                    wire:model.defer="billingIncrements.{{ $type }}.PM"
                                                    maxlength=2>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- /In-Person Billing Increment -->

                                </div>
                        </div>
                        @endforeach
                        @error('billingIncrements.*.*')
                            <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Additional service charges -->
    @if ($additionalCharge)
        <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: true }">
        @else
            <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
    @endif
    <div class="d-lg-flex align-items-center mb-4 gap-3">
        <div class="form-check form-switch form-switch-column mb-lg-0">
            <input class="form-check-input" type="checkbox" role="switch" id="AdditionalServiceCharges"
                @click="open = !open" x-text="open==true  ? 'hide' : 'show'" wire:model="additionalCharge">
            <label class="form-check-label" for="AdditionalServiceCharges">Disable</label>
            <label class="form-check-label" for="AdditionalServiceCharges">Enable</label>
        </div>
        <h2 class="mb-lg-0">Additional Service Charges</h2>
    </div>
    <div class="row switch-toggle-content" x-show="open">
        <div class="col-lg-12">
            <div class="border p-3">

                <div class="row">
                    @foreach ($serviceTypes as $type => $parameters)
                        @if (!is_null($service->service_type) && in_array($type, $service->service_type))
                            <div class="col-lg-6 pe-lg-5">
                            @else
                                <div class="col-lg-6 pe-lg-5 d-none">
                        @endif

                        <div class="text-primary fw-bold">
                            {{ $parameters['title'] }}
                        </div>
                        <div class="d-flex flex-column gap-5">
                            <!-- In-Person Additional Service Charges -->
                            <div>
                                <div class="d-flex flex-column gap-4">
                                    @foreach ($serviceCharge[$type] as $index => $data)
                                        <div class="d-flex flex-column gap-3">
                                            <div class="input-group">
                                                <span class="input-group-text gap-2 bg-secondary col-lg-5"
                                                    id="">
                                                    Additional Charge
                                                </span>
                                                <input type="text" class="form-control" placeholder="Label"
                                                    aria-label="" aria-describedby=""
                                                    wire:key="labels_{{ $parameters['title'] }}-{{ $index }}"
                                                    wire:model.defer="serviceCharge.{{ $type }}.{{ $index }}.label" />
                                                <div class="col-lg-1">
                                                    <input type="text" class="form-control text-center rounded-0"
                                                        placeholder="$" aria-label="" aria-describedby=""
                                                        wire:key="hours_{{ $parameters['title'] }}-{{ $index }}"
                                                        disabled="disabled" />
                                                </div>
                                                <input type="text" class="form-control text-center"
                                                    placeholder="00.00" aria-label="" aria-describedby=""
                                                    wire:key="charge_{{ $parameters['title'] }}-{{ $index }}"
                                                    wire:model.defer="serviceCharge.{{ $type }}.{{ $index }}.price" />
                                            </div>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="" name=""
                                                        type="checkbox" tabindex=""
                                                        wire:key="providers_{{ $parameters['title'] }}-{{ $index }}"
                                                        wire:model.defer="serviceCharge.{{ $type }}.{{ $index }}.multiply_providers" />
                                                    <label class="form-check-label" for="">X
                                                        by
                                                        No. of Providers <i class="fa fa-question-circle"
                                                            aria-hidden="true" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""></i></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="" name=""
                                                        type="checkbox" tabindex=""
                                                        wire:key="durations_{{ $parameters['title'] }}-{{ $index }}"
                                                        wire:model.defer="serviceCharge.{{ $type }}.{{ $index }}.multiply_duration" />
                                                    <label class="form-check-label" for="">
                                                        X by
                                                        Duration</label>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach

                                    <div class="text-end">
                                        <a class="fw-bold" wire:click.prevent="addCharges({{ $type }})">
                                            <small>
                                                Add Additional Service Charges

                                                <svg aria-label="Add Additional Service Charges" class="me-1"
                                                    width="20" height="21" viewBox="0 0 20 21">
                                                    <use xlink:href="/css/common-icons.svg#add-new">
                                                    </use>
                                                </svg>

                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- /In-Person Additional Service Charges -->
                            <!-- Additional Payment Additional Service Charges -->
                            <div>
                                <div class="d-flex flex-column gap-4">
                                    @foreach ($servicePayment[$type] as $index => $data)
                                        <div class="d-flex flex-column gap-3">
                                            <div class="input-group">
                                                <span class="input-group-text gap-2 bg-secondary col-lg-5"
                                                    id="">
                                                    Additional Payment
                                                </span>
                                                <input type="text" class="form-control" placeholder="Label"
                                                    aria-label="" aria-describedby=""
                                                    wire:key="service_payment_label-{{ $index }}"
                                                    wire:model.defer="servicePayment.{{ $type }}.{{ $index }}.label" />
                                                <div class="col-lg-1">
                                                    <input type="text" class="form-control text-center rounded-0"
                                                        placeholder="$" aria-label="" aria-describedby=""
                                                        disabled />
                                                </div>
                                                <input type="text" class="form-control text-center"
                                                    placeholder="00.00" aria-label="" aria-describedby=""
                                                    wire:key="payment_price_{{ $type }}-{{ $index }}"
                                                    wire:model.defer="servicePayment.{{ $type }}.{{ $index }}.price" />
                                            </div>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="" name=""
                                                        type="checkbox" tabindex=""
                                                        wire:key="providers_{{ $type }}-{{ $index }}"
                                                        wire:model.defer="servicePayment.{{ $type }}.{{ $index }}.multiply_providers" />
                                                    <label class="form-check-label" for="">X
                                                        by
                                                        No. of Providers <i class="fa fa-question-circle"
                                                            aria-hidden="true" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""></i></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="" name=""
                                                        type="checkbox" tabindex=""
                                                        wire:key="service_payment-customer{{ $type }}{{ $index }}"
                                                        wire:model.defer="servicePayment.{{ $type }}.{{ $index }}.charge_customer" />
                                                    <label class="form-check-label" for="">
                                                        Charge to Customer</label>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                    <div class="text-end">
                                        <a href="#" class="fw-bold"
                                            wire:click.prevent="addPayment({{ $type }})">
                                            <small>
                                                Add Additional Service Payment

                                                <svg aria-label="Add Additional Service Charges" class="me-1"
                                                    width="20" height="21" viewBox="0 0 20 21">
                                                    <use xlink:href="/css/common-icons.svg#add-new">
                                                    </use>
                                                </svg>

                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Additional Payment Additional Service Charges -->
                        </div>
                </div>
                @if ($loop->index == 1)
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
@if ($emergencyCharge)
    <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: true }">
    @else
        <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
@endif
<div class="d-lg-flex align-items-center mb-4 gap-3">
    <div class="form-check form-switch form-switch-column mb-lg-0">
        <input class="form-check-input" type="checkbox" role="switch" id="ExpeditedServices" @click="open = !open"
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
                @foreach ($serviceTypes as $type => $parameters)
                    @if (!is_null($service->service_type) && in_array($type, $service->service_type))
                        <div class="col-lg-6 pe-lg-5">
                        @else
                            <div class="col-lg-6 pe-lg-5 d-none">
                    @endif
                    <div class="text-primary fw-bold">
                        {{ $parameters['title'] }}
                    </div>
                    <div class="d-flex flex-column gap-5">
                        <!-- In-Person Additional Service Charges -->
                        <div>
                            @foreach ($emergencyHour[$type] as $index => $data)
                                <div class="d-flex flex-column gap-3 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                            Parameter {{ $loop->index + 1 }} <small>(Hour)</small>
                                        </span>
                                        <input type="text" class="form-control text-center" placeholder="00 Hour"
                                            aria-label="" aria-describedby=""
                                            wire:key="hour_service_emergency-{{ $type }}-{{ $index }}"
                                            wire:model.defer="emergencyHour.{{ $type }}.{{ $index }}.hour" />
                                        <div class="col-lg-2">
                                            <select class="form-select rounded-0"
                                                wire:model.defer="emergencyHour.{{ $type }}.{{ $index }}.price_type">
                                                <option value="$">$</option>
                                                <option value="%">%</option>
                                            </select>
                                        </div>
                                        <input type="text" class="form-control text-center" placeholder="00.00"
                                            aria-label="" aria-describedby=""
                                            wire:model.defer="emergencyHour.{{ $type }}.{{ $index }}.price" />
                                    </div>
                                    <div class="d-grid grid-cols-2 gap-1">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="" name=""
                                                type="checkbox" tabindex=""
                                                wire:model.defer="emergencyHour.{{ $type }}.{{ $index }}.multiply_duration" />
                                            <label class="form-check-label" for="">X by
                                                Duration</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="" name=""
                                                type="checkbox" tabindex=""
                                                wire:model.defer="emergencyHour.{{ $type }}.{{ $index }}.multiply_providers" />
                                            <label class="form-check-label" for=""> X by
                                                No.
                                                of Providers</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="" name=""
                                                type="checkbox" tabindex=""
                                                wire:model.defer="emergencyHour.{{ $type }}.{{ $index }}.exclude_holidays" />
                                            <label class="form-check-label" for="">Exclude
                                                After-hours</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="" name=""
                                                type="checkbox" tabindex=""
                                                wire:model.defer="emergencyHour.{{ $type }}.{{ $index }}.exclude_after_hours" />
                                            <label class="form-check-label" for="">
                                                Exclude
                                                Closed-hours</label>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                            <div class="text-end">
                                <a href="#" class="fw-bold"
                                    wire:click.prevent="addEmergency({{ $type }})">
                                    <small>
                                        Add Additional Parameter

                                        <svg aria-label="Add Additional Service Charges" class="me-1"
                                            width="20" height="21" viewBox="0 0 20 21">
                                            <use xlink:href="/css/common-icons.svg#add-new">
                                            </use>
                                        </svg>

                                    </small>
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
@if ($cancelCharge)
    <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: true }">
    @else
        <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
@endif
<div class="d-lg-flex align-items-center mb-4 gap-3">
    <div class="form-check form-switch form-switch-column mb-lg-0">
        <input class="form-check-input" type="checkbox" role="switch"
            id="CancellationsModifications&Rescheduling" @click="open = !open"
            x-text="open==true  ? 'hide' : 'show'" wire:model="cancelCharge">
        <label class="form-check-label" for="CancellationsModifications&Rescheduling">Disable</label>
        <label class="form-check-label" for="CancellationsModifications&Rescheduling">Enable</label>
    </div>
    <h2 class="mb-lg-0">Cancellations, Modifications & Rescheduling</h2>
</div>
<div class="row switch-toggle-content" x-show="open">
    <div class="col-lg-12">
        <div class="border p-3">
            <div class="row">
                @foreach ($serviceTypes as $type => $parameters)
                    @if (!is_null($service->service_type) && in_array($type, $service->service_type))
                        <div class="col-lg-6 pe-lg-5">
                        @else
                            <div class="col-lg-6 pe-lg-5 d-none">
                    @endif
                    <div class="text-primary fw-bold">
                        {{ $parameters['title'] }}
                    </div>
                    <div class="d-flex flex-column gap-5">
                        <!-- In-Person Additional Service Charges -->
                        <div>
                            @foreach ($cancelCharges[$type] as $index => $data)
                                <div class="d-flex flex-column gap-3 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
                                            Parameter {{ $loop->index + 1 }} <small>(Hour)</small>
                                        </span>
                                        <input type="text" class="form-control text-center"
                                            placeholder="00 Hour" aria-label="" aria-describedby=""
                                            wire:model.defer="cancelCharges.{{ $type }}.{{ $index }}.hour" />
                                        <div class="col-lg-2">
                                            <select class="form-select rounded-0"
                                                wire:model.defer="cancelCharges.{{ $type }}.{{ $index }}.price_type">
                                                <option value="$">$</option>
                                                <option value="%">%</option>
                                            </select>
                                        </div>
                                        <input type="text" class="form-control text-center" placeholder="00.00"
                                            aria-label="" aria-describedby=""
                                            wire:model.defer="cancelCharges.{{ $type }}.{{ $index }}.price" />
                                    </div>
                                    <div>
                                        <label class="form-label">
                                            Apply to
                                        </label>
                                        <div class="d-grid grid-cols-2 gap-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="x-by-duration" name=""
                                                    type="checkbox" tabindex=""
                                                    wire:model.defer="cancelCharges.{{ $type }}.{{ $index }}.multiply_duration" />
                                                <label class="form-check-label" for="x-by-duration">X by
                                                    Duration</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="x-by-providers" name=""
                                                    type="checkbox" tabindex=""
                                                    wire:model.defer="cancelCharges.{{ $type }}.{{ $index }}.multiply_providers" />
                                                <label class="form-check-label" for="x-by-providers">X by No. of
                                                    Providers</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="" name=""
                                                    type="checkbox" tabindex=""
                                                    wire:model.defer="cancelCharges.{{ $type }}.{{ $index }}.cancellation" />
                                                <label class="form-check-label" for="">Cancellations</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="" name=""
                                                    type="checkbox" tabindex=""
                                                    wire:model.defer="cancelCharges.{{ $type }}.{{ $index }}.exclude_after_hours" />
                                                <label class="form-check-label" for="">Exclude
                                                    After-hours</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="" name=""
                                                    type="checkbox" tabindex=""
                                                    wire:model.defer="cancelCharges.{{ $type }}.{{ $index }}.modifications" />
                                                <label class="form-check-label" for="">Modifications</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="" name=""
                                                    type="checkbox" tabindex=""
                                                    wire:model.defer="cancelCharges.{{ $type }}.{{ $index }}.exclude_holidays" />
                                                <label class="form-check-label" for="">Exclude
                                                    Closed-hours</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="" name=""
                                                    type="checkbox" tabindex=""
                                                    wire:model.defer="cancelCharges.{{ $type }}.{{ $index }}.rescheduling" />
                                                <label class="form-check-label" for="">Rescheduling</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="" name=""
                                                    type="checkbox" tabindex=""
                                                    wire:model.defer="cancelCharges.{{ $type }}.{{ $index }}.service_min" />
                                                <label class="form-check-label" for="">Bill
                                                    Service Minimums</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="text-end">
                                <a href="#" class="fw-bold"
                                    wire:click.prevent="addCancelCharge({{ $type }})">
                                    <small>
                                        Add Additional Parameter

                                        <svg aria-label="Add Additional Service Charges" class="me-1"
                                            width="20" height="21" viewBox="0 0 20 21">
                                            <use xlink:href="/css/common-icons.svg#add-new">
                                            </use>
                                        </svg>

                                    </small>
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
@if ($showSpecialization)
    <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: true }">
    @else
        <div class="col-lg-12 between-section-segment-spacing" x-data="{ open: false }">
@endif

<div class="d-lg-flex align-items-center mb-3 gap-3">
    <div class="form-check form-switch form-switch-column mb-lg-0">
        <input class="form-check-input" type="checkbox" role="switch" id="SpecializationRates"
            @click="open = !open" x-text="open==true  ? 'hide' : 'show'" wire:model="showSpecialization">
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
            @foreach ($serviceSpecialization as $index => $speclization)
                <div class="d-flex flex-column gap-3 mb-3">
                    <div class="d-lg-flex gap-4">
                        <div class="align-self-end col-lg-5">
                            <div class="input-group">
                                <select class="form-select  w-75"
                                    wire:model.defer="serviceSpecialization.{{ $index }}.specialization_id">
                                    <option value="0">Select Specialization</option>
                                    @foreach ($specializations as $specialization)
                                        <option value="{{ $specialization->id }}">{{ $specialization->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <select class="form-select"
                                    wire:model.defer="serviceSpecialization.{{ $index }}.common.price_type">
                                    <option value="$">$</option>
                                    <option value="%">%</option>

                                </select>
                            </div>
                        </div>
                        @foreach ($serviceTypes as $type => $parameters)
                            @if (!is_null($service->service_type) && in_array($type, $service->service_type))
                                <div class="align-self-end">
                                @else
                                    <div class="align-self-end d-none">
                            @endif

                            <div class="text-primary fw-bold">{{ $parameters['title'] }}</div>
                            <input type="text" class="form-control text-center" placeholder="00.00"
                                aria-label="" aria-describedby=""
                                wire:model.defer="serviceSpecialization.{{ $index }}.{{ $type }}.price" />
                    </div>
            @endforeach
        </div>
        <div class="">
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="" name="" type="checkbox" tabindex=""
                    wire:model.defer="serviceSpecialization.{{ $index }}.common.hide_from_customers" />
                <label class="form-check-label" for="">Hide from
                    Customers</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="" name="" type="checkbox" tabindex=""
                    wire:model.defer="serviceSpecialization.{{ $index }}.common.multiply_provider" />
                <label class="form-check-label" for="">X by No. of
                    Providers</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="" name="" type="checkbox" tabindex=""
                    wire:model.defer="serviceSpecialization.{{ $index }}.common.hide_from_providers" />
                <label class="form-check-label" for="">Hide from
                    Providers</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="" name="" type="checkbox" tabindex=""
                    wire:model.defer="serviceSpecialization.{{ $index }}.common.multiply_service_duration" />
                <label class="form-check-label" for="">X by Duration</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="" name="" type="checkbox" tabindex=""
                    wire:model.defer="serviceSpecialization.{{ $index }}.common.disable" />
                <label class="form-check-label" for="">Disable</label>
            </div>
        </div>

    </div>
    @endforeach
    <div class="text-end">
        <a href="#" class="fw-bold" wire:click.prevent="addSpecialization">
            <small>
                Add Additional Specialization

                <svg aria-label="Add Additional Specialization" class="me-1" width="20" height="21"
                    viewBox="0 0 20 21">
                    <use xlink:href="/css/common-icons.svg#add-new">
                    </use>
                </svg>

            </small>
        </a>
    </div>
</div>
</div>
</div>
</div><!-- /Specialization Rates -->
<div class="col-12 form-actions ">
    <button type="button" class="btn btn-outline-dark rounded" wire:click.prevent="back"
        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('basic-service-setup')"
        wire:click.prevent="back">Back</button>
    <button type="submit" class="btn btn-primary rounded" wire:click.prevent="save(1,2)"
        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">Save & Exit</button>
    <button type="button" class="btn btn-primary rounded" wire:click.prevent="save(0,2)"
        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('service-forms')">Next</button>

</div>
</form>
</div>
</div>
@elseif($step == 3)
<div class="tab-pane fade" :class="{ 'active show': tab === 'service-forms' }" id="service-forms" role="tabpanel"
    aria-labelledby="service-forms-tab" tabindex="0" x-show="tab === 'service-forms'">
    <form class="form">

        @csrf


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
                        {!! $setupValues['customerForms']['rendered'] !!}
                    </div>
                    <div class="text-end">
                        <a href="#" class="fw-bold">
                            <small>
                                Add New Form

                                <svg aria-label=" Add New Form" class="me-1" width="20" height="21"
                                    viewBox="0 0 20 21">
                                    <use xlink:href="/css/common-icons.svg#add-new">
                                    </use>
                                </svg>

                            </small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="inner-section-segment-spacing border p-3">
                    <h3>
                        Default Timesheet Template (Coming Soon)
                    </h3>
                    <div class="mb-2">
                        <select class="form-select" aria-label="Default Timesheet Template" disabled="disabled">
                            <option>Select Timesheet Form</option>
                        </select>
                    </div>
                    <div class="text-end">
                        <a href="#" class="fw-bold">
                            <small>
                                Add New Template Form

                                <svg aria-label=" Add New Template Form" class="me-1" width="20"
                                    height="21" viewBox="0 0 20 21">
                                    <use xlink:href="/css/common-icons.svg#add-new">
                                    </use>
                                </svg>

                            </small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-5">
                <div class="inner-section-segment-spacing border p-3">
                    <h3>
                        Default Invoice Line Item Template (Coming Soon)
                    </h3>
                    <div class="mb-2">
                        <select class="form-select" aria-label="Select Default Invoice Line Item Template"
                            disabled="disabled">
                            <option>Select Timesheet Form</option>
                        </select>
                    </div>
                    <div class="text-end">
                        <a href="#" class="fw-bold">
                            <small>
                                Add New Template Form

                                <svg aria-label=" Add New Template Form" class="me-1" width="20"
                                    height="21" viewBox="0 0 20 21">
                                    <use xlink:href="/css/common-icons.svg#add-new">
                                    </use>
                                </svg>

                            </small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="inner-section-segment-spacing border p-3">
                    <h3>
                        Default Quotes Line Item Template (Coming Soon)
                    </h3>
                    <div class="mb-2">
                        <select class="form-select" aria-label="Select Default Quotes Line Item Template"
                            disabled="disabled">
                            <option>Select Timesheet Form</option>
                        </select>
                    </div>
                    <div class="text-end">
                        <a href="#" class="fw-bold">
                            <small>
                                Add New Template Form

                                <svg aria-label=" Add New Template Form" class="me-1" width="20"
                                    height="21" viewBox="0 0 20 21">
                                    <use xlink:href="/css/common-icons.svg#add-new">
                                    </use>
                                </svg>

                            </small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-5">
                <div class="inner-section-segment-spacing border p-3">
                    <h3>
                        Default Remittance Line Item Template (Coming Soon)
                    </h3>
                    <div class="mb-2">
                        <select class="form-select" aria-label="Select Default Remittance Line Item Template"
                            disabled="disabled">
                            <option>Select Timesheet Form</option>
                        </select>
                    </div>
                    <div class="text-end">
                        <a href="#" class="fw-bold">
                            <small>
                                Add new Template Form

                                <svg aria-label=" Add New Template Form" class="me-1" width="20"
                                    height="21" viewBox="0 0 20 21">
                                    <use xlink:href="/css/common-icons.svg#add-new">
                                    </use>
                                </svg>

                            </small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-actions">
                <button type="button" class="btn btn-outline-dark rounded"
                    x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('advanced-service-rate')"
                    wire:click.prevent="back">Back</button>
                <button type="submit" class="btn btn-primary rounded" wire:click.prevent="save(1,3)"
                    x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">Save & Exit</button>
                <button type="button" class="btn btn-primary rounded" wire:click.prevent="save(0,3)"
                    x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('service-configuration')">Next</button>

            </div>
        </div>
    </form>
</div>
@elseif($step == 4)
<div class="tab-pane fade" :class="{ 'active show': tab === 'service-configuration' }" id="service-configuration"
    role="tabpanel" aria-labelledby="service-configuration-tab" tabindex="0"
    x-show="tab === 'service-configuration'">
    <form class="form">

        @csrf

        <div class="d-lg-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-lg-0">Service Configuration</h2>
        </div>
        <div class="row mb-4">
            <div class="col-lg-6 pe-lg-5">
                <div class="inner-section-segment-spacing border p-3">
                    <h3>
                        Request a Start Time for Services?
                        <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip"
                            data-bs-placement="top" title=""></i>
                    </h3>
                    <div class="">
                        <div class="form-check">
                            <input class="form-check-input" id="request_start_time" name="request_start_time"
                                type="radio" tabindex="" value="1"
                                wire:model.defer="service.request_start_time" />
                            <label class="form-check-label" for="RequestStartTimeforServicesYes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="request_start_time" name="request_start_time"
                                type="radio" tabindex="" value="0"
                                wire:model.defer="service.request_start_time" type="radio" tabindex=""
                                aria-label="No" />
                            <label class="form-check-label" for="RequestStartTimeforServicesNo">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="inner-section-segment-spacing border p-3">
                    <h3>
                        Request an End Time for Services? <i class="fa fa-question-circle text-muted"
                            aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                            title=""></i>
                    </h3>
                    <div class="">
                        <div class="form-check">
                            <input class="form-check-input" id="request_end_time" name="request_end_time"
                                type="radio" tabindex="" value="1"
                                wire:model.defer="service.request_end_time" type="radio" tabindex="" />
                            <label class="form-check-label" for="RequestStartTimeforServices-Yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="request_end_time" name="request_end_time"
                                type="radio" value="0" wire:model.defer="service.request_end_time"
                                type="radio" tabindex="" aria-label="No" />
                            <label class="form-check-label" for="RequestStartTimeforServicesNo">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-5">
                <div class="inner-section-segment-spacing border p-3">
                    <h3>
                        Request an Address for End of In-person Services? <i class="fa fa-question-circle text-muted"
                            aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                            title=""></i>
                    </h3>
                    <div class="">
                        <div class="form-check">
                            <input class="form-check-input" id="request_end_address" name="request_end_address"
                                type="radio" value="1" wire:model.defer="service.request_end_address"
                                type="radio" tabindex="" />
                            <label class="form-check-label" for="RequestAddressForEnd">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="request_end_address" name="request_end_address"
                                type="radio" value="0" wire:model.defer="service.request_end_address"
                                type="radio" tabindex="" aria-label="No" />
                            <label class="form-check-label" for="RequestAddressForEndNo">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="inner-section-segment-spacing border p-3">
                    <h3>
                        Request Number of Providers? <i class="fa fa-question-circle text-muted" aria-hidden="true"
                            data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                    </h3>
                    <div class="">
                        <div class="form-check">
                            <input class="form-check-input" id="request_no_of_providers"
                                name="request_no_of_providers" type="radio" value="1"
                                wire:model.defer="service.request_no_of_providers" type="radio"
                                tabindex="" />
                            <label class="form-check-label" for="RequestNumberOfProvidersYes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="request_no_of_providers"
                                name="request_no_of_providers" type="radio" value="0"
                                wire:model.defer="service.request_no_of_providers" type="radio" tabindex=""
                                aria-label="No" />
                            <label class="form-check-label" for="RequestStartTimeforServicesNo">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-5">
                <div class="inner-section-segment-spacing border p-3">
                    <h3>
                        Request Service Consumers? <i class="fa fa-question-circle text-muted" aria-hidden="true"
                            data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                    </h3>
                    <div class="">
                        <div class="form-check">
                            <input class="form-check-input" id="request_service_consumer"
                                name="request_service_consumer" type="radio" value="1"
                                wire:model.defer="service.request_service_consumer" type="radio"
                                tabindex="" />
                            <label class="form-check-label" for="RequestServiceConsumeryes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="request_service_consumer"
                                name="request_service_consumer" type="radio" value="0"
                                wire:model.defer="service.request_service_consumer" tabindex=""
                                id="RequestServiceConsumerNo" />
                            <label class="form-check-label" for="RequestServiceConsumerNo">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="inner-section-segment-spacing border p-3">
                    <h3>
                        Request Participants? <i class="fa fa-question-circle text-muted" aria-hidden="true"
                            data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                    </h3>
                    <div class="">
                        <div class="form-check">
                            <input class="form-check-input" id="request_participants" name="request_participants"
                                value="1" wire:model.defer="service.request_participants" type="radio"
                                tabindex="" />
                            <label class="form-check-label" for="RequestParticipantyes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="request_participants" name="request_participants"
                                value="0" wire:model.defer="service.request_participants" type="radio"
                                tabindex="" />
                            <label class="form-check-label" for="RequestParticipantNo">No</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-actions">
                <button type="button" class="btn btn-outline-dark rounded"
                    x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('service-forms')"
                    wire:click.prevent="back">Back</button>
                <a href="/admin/accommodation/all-services" type="submit" class="btn btn-primary rounded"
                    wire:click.prevent="save(1,4)"
                    x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">Save & Exit</a>
                <button type="button" class="btn btn-primary rounded"
                    x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('advance-options')"
                    wire:click.prevent="save(0,4)">Next</button>

            </div>
        </div>

    </form>
</div>
@elseif($step == 5)
<div class="tab-pane fade" :class="{ 'active show': tab === 'advance-options' }" id="advance-options"
    role="tabpanel" aria-labelledby="advance-options-tab" tabindex="0" x-show="tab === 'advance-options'">
    <form class="form">

        @csrf


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
                            <input class="form-check-input" id="billing_companies" name="billing_companies"
                                value="1" wire:model.defer="service.billing_companies" type="radio"
                                tabindex="">
                            <label class="form-check-label" for="Admin-Business-Hours">Admin Business
                                Hours</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="billing_companies" name="billing_companies"
                                value="2" wire:model.defer="service.billing_companies" type="radio"
                                tabindex="">
                            <label class="form-check-label" for="Customer-Business-Hours">Customer's
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
                            <input class="form-check-input" id="payment_providers" name="payment_providers"
                                value="1" wire:model.defer="service.payment_providers" type="radio"
                                tabindex="">
                            <label class="form-check-label" for="AdminBusinessHours">Admin Business
                                Hours</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="payment_providers" name="payment_providers"
                                value="2" wire:model.defer="service.payment_providers" type="radio"
                                tabindex="">
                            <label class="form-check-label" for="CustomerBusinessHours">Customer's
                                Business Hours</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-5">
                <div class="inner-section-segment-spacing border p-3">
                    <h3>
                        Billing Time Zone <i class="fa fa-question-circle text-muted" aria-hidden="true"
                            data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                    </h3>
                    <div class="d-flex flex-column gap-1">
                        @foreach ($serviceTypes as $type => $parameters)
                            @if (!is_null($service->service_type) && in_array($type, $service->service_type))
                                <div class="row mb-5 {{ $parameters['class'] }}">
                                @else
                                    <div class="row d-none {{ $parameters['class'] }}">
                            @endif

                            <div class="col-lg-4">
                                <label class="col-form-label" for="in-person">{{ $parameters['title'] }}</label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-select" id="in-person{{ $parameters['postfix'] }}"
                                    wire:model.defer="service.billing_timezone{{ $parameters['postfix'] }}">
                                    <option value="1">Admin Time Zone</option>
                                    <option value="2">Provider Time Zone</option>
                                </select>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-6 ps-lg-5">
            <div class="inner-section-segment-spacing border p-3">
                <h3>
                    Payment Time Zone <i class="fa fa-question-circle text-muted" aria-hidden="true"
                        data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                </h3>
                <div class="d-flex flex-column gap-1">
                    @foreach ($serviceTypes as $type => $parameters)
                        @if (!is_null($service->service_type) && in_array($type, $service->service_type))
                            <div class="row mb-5 {{ $parameters['class'] }}">
                            @else
                                <div class="row d-none {{ $parameters['class'] }}">
                        @endif

                        <div class="col-lg-4">
                            <label class="col-form-label" for="in-person">{{ $parameters['title'] }}</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-select" id="payment_timezone{{ $parameters['postfix'] }}"
                                wire:model.defer="service.payment_timezone{{ $parameters['postfix'] }}">
                                <option value="1">Admin Time Zone</option>
                                <option value="2">Provider Time Zone</option>
                            </select>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
</div>
<div class="row">
    <div class="col-lg-6 pe-lg-5">
        @foreach ($serviceTypes as $type => $parameters)
            @if (!is_null($service->service_type) && in_array($type, $service->service_type))
                <div class=" {{ $parameters['class'] }}">
                @else
                    <div class=" d-none {{ $parameters['class'] }}">
            @endif

            <div class="inner-section-segment-spacing border p-3">
                <h3>
                    {{ $parameters['title'] }} Billing <i class="fa fa-question-circle text-muted"
                        aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                </h3>
                <div class="">
                    <div class="form-check">
                        <input class="form-check-input" id="billing_rule{{ $parameters['postfix'] }}"
                            name="billing_rule{{ $parameters['postfix'] }}"
                            wire:model.defer="service.billing_rule{{ $parameters['postfix'] }}" value="1"
                            type="radio" tabindex="">
                        <label class="form-check-label" for="ScheduledDuration">Scheduled
                            Duration</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"id="billing_rule{{ $parameters['postfix'] }}"
                            name="billing_rule{{ $parameters['postfix'] }}"
                            wire:model.defer="service.billing_rule{{ $parameters['postfix'] }}" value="2"
                            type="radio" tabindex="">
                        <label class="form-check-label" for="ActualDuration">Actual
                            Duration</label>
                    </div>
                </div>
            </div>
    </div>
    @endforeach
</div>
<div class="col-lg-6  ps-lg-5">
    @foreach ($serviceTypes as $type => $parameters)
        @if (!is_null($service->service_type) && in_array($type, $service->service_type))
            <div class=" {{ $parameters['class'] }}">
            @else
                <div class="d-none {{ $parameters['class'] }}">
        @endif

        <div class="inner-section-segment-spacing border p-3">
            <h3>
                {{ $parameters['title'] }} Payments <i class="fa fa-question-circle text-muted" aria-hidden="true"
                    data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
            </h3>
            <div class="">
                <div class="form-check">
                    <input class="form-check-input" id="payment_rule{{ $parameters['postfix'] }}"
                        name="payment_rule{{ $parameters['postfix'] }}"
                        wire:model.defer="service.payment_rule{{ $parameters['postfix'] }}" value="1"
                        type="radio" tabindex="">
                    <label class="form-check-label" for="Scheduled-durations">Scheduled
                        Duration</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input"id="payment_rule{{ $parameters['postfix'] }}"
                        name="payment_rule{{ $parameters['postfix'] }}"
                        wire:model.defer="service.payment_rule{{ $parameters['postfix'] }}" value="2"
                        type="radio" tabindex="">
                    <label class="form-check-label" for="actualDuration">Actual
                        Duration</label>
                </div>
            </div>
        </div>
</div>
@endforeach
</div>
</div>

<div class="col-lg-6 pe-lg-5">
    <div class="inner-section-segment-spacing border p-3">
        <h3>
            Minimum Payment Duration <i class="fa fa-question-circle text-muted" aria-hidden="true"
                data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
        </h3>
        @if ($errors->has('service.min_payment_duration'))
            <div class="d-inline-block invalid-feedback mt-2">Numeric values acceptable in min.payment duration fields
            </div>
        @endif
        <div class="d-flex flex-column gap-2">

            @foreach ($serviceTypes as $type => $parameters)
                @if (!is_null($service->service_type) && in_array($type, $service->service_type))
                    <div class="row">
                    @else
                        <div class="d-none {{ $parameters['class'] }}">
                @endif

                <div class="col-lg-3 align-self-center">
                    <div class=" mb-0">

                        <label class="form-check-label" for="InPerson">{{ $parameters['title'] }}</label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control form-control-sm text-center" placeholder="00:00"
                        wire:model.defer="service.min_payment_duration{{ $parameters['postfix'] }}" aria-label=""
                        aria-describedby="" maxlength="5">
                </div>
        </div>
        @endforeach

    </div>
</div>
</div>
</div>
<div class="row mb-4">
    <div class="col-lg-6 pe-lg-5">
        <div class="w-100">
            <div class="inner-section-segment-spacing border p-3 pb-lg-5">
                <h2>
                    Check-In Procedure <i class="fa fa-question-circle text-muted" aria-hidden="true"
                        data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                </h2>
                <div class="d-flex flex-column gap-3">
                    <div class="form-check">
                        <input class="form-check-input" id="EnableCheckinButton"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="checkIn.enable_button" value="true">
                        <label class="form-check-label" for="EnableCheckinButton">Enable
                            “Check-in” Button</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="RequireCheckinforProvidertoInvoice"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="checkIn.require_provider_invoice" value="true">
                        <label class="form-check-label" for="RequireCheckinforProvidertoInvoice">Require "Check-in"
                            for
                            Provider to Invoice</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="RequireCustomer-Signature"
                            name="RequireCustomer-Signature" type="checkbox" tabindex=""
                            wire:model.defer="checkIn.enable_digital_signature" value="true">
                        <label class="form-check-label" for="RequireCustomer-Signature">Require
                            Customer Signature</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="AddCustomizedCheckinForm">Add
                            Customized Check-in Form</label>
                        <input class="form-check-input show-hidden-content" id="AddCustomizedCheckinForm"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="checkIn.customize_form" value="true">
                        <div class="hidden-content">
                            <label class="form-label-sm">Select Form</label>
                            <select class="form-select" wire:model.defer="checkIn.customize_form_id">
                                @foreach ($checkin_customForms as $form)
                                    <option value="{{ $form['id'] }}">{{ $form['request_form_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="NotifyCustomerof-Checkin"value="true">Notify
                            Customer of Check-in</label>
                        <input class="form-check-input show-hidden-content" id="NotifyCustomerof-Checkin"
                            name="NotifyCustomerof-Checkin" type="checkbox" tabindex=""
                            wire:model.defer="checkIn.notify_customers" value="true">
                        <div class="hidden-content">
                            <label class="form-label-sm">Select Customer-Users</label>
                            <select multiple class="select2 form-select select2-hidden-accessible" id="checkin_customers" wire:model.defer="checkIn.customers">
                                <option > Select Customer-Users</option>
                                @foreach($companyUsers as $role)
                                <option value="{{$role['id']}}">{{$role['name']}}</option>
                                @endforeach
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
                    Authorize & Close-Out Procedure <i class="fa fa-question-circle text-muted" aria-hidden="true"
                        data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                </h2>
                <div class="d-flex flex-column gap-3">
                    <div class="form-check">
                        <input class="form-check-input" id="EnableAuthorizeandCloseButtonforProviders"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="checkOut.enable_button_provider" value="true">
                        <label class="form-check-label" for="EnableAuthorizeandCloseButtonforProviders">Enable
                            “Authorize
                            and Close” Button for Providers</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="EnableAuthorizeandCloseButtonforCustomers">Enable
                            “Authorize
                            and Close” Button for Customers <small>(coming soon)</small></label>
                        <input disabled class="form-check-input show-hidden-content"
                            id="EnableAuthorizeandCloseButtonforCustomers" name="RequestStartTimeforServices"
                            type="checkbox" tabindex="" wire:model.defer="checkOut.enable_button_customer"
                            value="true">
                        <div class="hidden-content">
                            <label class="form-label-sm">Select Customer-Users</label>
                            <select disabled  multiple class="select2 form-select select2-hidden-accessible" id="checkout_customers" wire:model.defer="checkOut.customers">
                                <option>Select Customer-Users</option>
                                @foreach($companyUsers as $role)
                                <option value="{{$role['id']}}">{{$role['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="RequireAuthorizeCloseOutforProviderPayment">Require
                            "Authorize
                            & Close-out" for Provider Payment</label>
                        <input class="form-check-input" id="RequireAuthorizeCloseOutforProviderPayment"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="checkOut.provider_payment" value="true">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="RequireAuthorizeCloseOutforCustomerInvoicing">Require
                            "Authorize & Close-out" for Customer Invoicing</label>
                        <input class="form-check-input" id="RequireAuthorizeCloseOutforCustomerInvoicing"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="checkOut.customer_invoice" value="true">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="RequireCustomerSignature">Require
                            Customer Signature</label>
                        <input class="form-check-input" id="RequireCustomerSignature"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="checkOut.enable_digital_signature" value="true">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="AddCustomizedCloseOutForm">Add
                            Customized “Close-Out” Form</label>
                        <input  class="form-check-input show-hidden-content" id="AddCustomizedCloseOutForm"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="checkOut.customize_form" value="true">
                        <div class="hidden-content">
                            <label class="form-label-sm">Select Form</label>
                            <select class="form-select" wire:model.defer="checkOut.customize_form_id">
                                @foreach ($checkout_customForms as $form)
                                    <option value="{{ $form['id'] }}">{{ $form['request_form_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="AutoApproveTimeExtensions">Auto-Approve Time
                            Extensions</label>
                        <input class="form-check-input" id="AutoApproveTimeExtensions"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="checkOut.time_extension" value="true">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="EnableCloseOutStatuses">Enable
                            Close-out Statuses</label>
                        <input class="form-check-input show-hidden-content" id="EnableCloseOutStatuses"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="checkOut.statuses" value="true">
                        <div class="hidden-content">
                            <div class="d-flex flex-column gap-3 mt-3">
                                <div class="form-check">
                                    <label class="form-check-label"
                                        for="EnableCloseOutStatusesCompleted">Completed</label>
                                    <input class="form-check-input" id="EnableCloseOutStatusesCompleted"
                                        name="RequestStartTimeforServices" type="checkbox" tabindex=""
                                        wire:model.defer="checkOut.status_types.completed" value="true">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="EnableCloseOutStatusesNoShow">No
                                        Show</label>
                                    <input class="form-check-input show-hidden-content"
                                        id="EnableCloseOutStatusesNoShow" name="RequestStartTimeforServices"
                                        type="checkbox" tabindex=""
                                        wire:model.defer="checkOut.status_types.noshow" value="true">
                                    <div class="hidden-content">
                                        <div class="d-flex flex-column gap-3 my-3">
                                            <label class="form-label-sm mb-0">Billing:</label>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="ProcessAsNormalNoShowBilling">Process
                                                    as Normal</label>
                                                <input class="form-check-input" id="ProcessAsNormalNoShowBilling"
                                                    name="noshow_billing" value="1"
                                                    wire:model.defer="checkOut.noshow_billing" type="radio"
                                                    tabindex="">
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="BillServiceMinimumNoShowBilling">Bill
                                                    Service Minimum</label>
                                                <input class="form-check-input" id="BillServiceMinimumNoShowBilling"
                                                    name="noshow_billing" value="2"
                                                    wire:model.defer="checkOut.noshow_billing" type="radio"
                                                    tabindex="">
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="CancelBookingWithChargeNoShowBilling">Cancel
                                                    Booking with Charge</label>
                                                <input class="form-check-input"
                                                    id="CancelBookingWithChargeNoShowBilling" name="noshow_billing"
                                                    value="3" wire:model.defer="checkOut.noshow_billing"
                                                    type="radio" tabindex="">
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="CancelBookingWithoutChargeNoShowBilling">Cancel
                                                    Booking without Charge</label>
                                                <input class="form-check-input"
                                                    id="CancelBookingWithoutChargeNoShowBilling"
                                                    name="noshow_billing" value="4"
                                                    wire:model.defer="checkOut.noshow_billing" type="radio"
                                                    tabindex="">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column gap-3 my-3">
                                            <label class="form-label-sm mb-0">Payment:</label>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="ProcessAsNormalNoShowPayment">Process
                                                    as Normal</label>
                                                <input class="form-check-input" id="ProcessAsNormalNoShowPayment"
                                                    name="noshow_payment" value="1"
                                                    wire:model.defer="checkOut.noshow_payment" type="radio"
                                                    tabindex="">
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="BillServiceMinimumNoShowPayment">Pay
                                                    Service Minimum</label>
                                                <input class="form-check-input" id="BillServiceMinimumNoShowPayment"
                                                    name="noshow_payment" value="2"
                                                    wire:model.defer="checkOut.noshow_payment" type="radio"
                                                    tabindex="">
                                            </div>


                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="CancelBookingWithChargeNoShowPayment">Cancel Booking
                                                    with Payment</label>
                                                <input class="form-check-input"
                                                    id="CancelBookingWithChargeNoShowPayment" name="noshow_payment"
                                                    type="radio" tabindex="" name="noshow_payment"
                                                    value="3" wire:model.defer="checkOut.noshow_payment">
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="CancelBookingWithoutChargeNoShowPayment">Cancel
                                                    Booking without Payment</label>
                                                <input class="form-check-input"
                                                    id="CancelBookingWithoutChargeNoShowPayment"
                                                    name="noshow_payment" name="noshow_payment" value="4"
                                                    wire:model.defer="checkOut.noshow_payment" type="radio"
                                                    tabindex="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label"
                                        for="EnableCloseOutStatusesCancelled">Cancelled</label>
                                    <input class="form-check-input show-hidden-content"
                                        id="EnableCloseOutStatusesCancelled" name="RequestStartTimeforServices"
                                        type="checkbox" tabindex=""
                                        wire:model.defer="checkOut.status_types.cancelled" value="true">
                                    <div class="hidden-content">
                                        <div class="d-flex flex-column gap-3 my-3">
                                            <label class="form-label-sm mb-0">Billing:</label>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="ProcessAsNormalCancelledBilling">Process
                                                    as Normal</label>
                                                <input class="form-check-input" id="ProcessAsNormalCancelledBilling"
                                                    name="cancelled_billing" value="1"
                                                    wire:model.defer="checkOut.cancelled_billing" type="radio"
                                                    tabindex="">
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="BillServiceMinimumCancelledBilling">Bill
                                                    Service Minimum</label>
                                                <input class="form-check-input"
                                                    id="BillServiceMinimumCancelledBilling" name="cancelled_billing"
                                                    value="2" wire:model.defer="checkOut.cancelled_billing"
                                                    type="radio" tabindex="">
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="CancelBookingWithChargeCancelledBilling">Cancel
                                                    Booking with Charge</label>
                                                <input class="form-check-input"
                                                    id="CancelBookingWithChargeCancelledBilling"
                                                    name="cancelled_billing" value="3"
                                                    wire:model.defer="checkOut.cancelled_billing" type="radio"
                                                    tabindex="">
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="CancelBookingWithoutChargeCancelledBilling">Cancel
                                                    Booking without Charge</label>
                                                <input class="form-check-input"
                                                    id="CancelBookingWithoutChargeCancelledBilling"
                                                    name="cancelled_billing" value="4"
                                                    wire:model.defer="checkOut.cancelled_billing" type="radio"
                                                    tabindex="">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column gap-3 my-3">
                                            <label class="form-label-sm mb-0">Payment:</label>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="ProcessAsNormalCancelledPayment">Process
                                                    as Normal</label>
                                                <input class="form-check-input" id="ProcessAsNormalCancelledPayment"
                                                    name="cancelled_payment" value="1"
                                                    wire:model.defer="checkOut.cancelled_payment" type="radio"
                                                    tabindex="">
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="BillServiceMinimumCancelledPayment">Pay
                                                    Service Minimum</label>
                                                <input class="form-check-input"
                                                    id="BillServiceMinimumCancelledPayment" name="cancelled_payment"
                                                    value="2" wire:model.defer="checkOut.cancelled_payment"
                                                    type="radio" tabindex="">
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="CancelBookingWithChargeCancelledPayment">Cancel
                                                    Booking with Payment</label>
                                                <input class="form-check-input"
                                                    id="CancelBookingWithChargeCancelledPayment"
                                                    name="cancelled_payment" value="3"
                                                    wire:model.defer="checkOut.cancelled_payment" type="radio"
                                                    tabindex="">
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="CancelBookingWithoutChargeCancelledPayment">Cancel
                                                    Booking without Payment</label>
                                                <input class="form-check-input"
                                                    id="CancelBookingWithoutChargeCancelledBilling"
                                                    name="cancelled_payment" value="4"
                                                    wire:model.defer="checkOut.cancelled_payment" type="radio"
                                                    tabindex="">
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
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="runningLate.enable_button" value="true">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="NotifyCustomer">Notify
                            Customer</label>
                        <input class="form-check-input show-hidden-content" id="NotifyCustomer"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="runningLate.notify_customer" value="true">
                        <div class="hidden-content">
                            <label class="form-label-sm">Select Customer</label>
                            <select  multiple class="select2 form-select select2-hidden-accessible" id="runninglate_customers" wire:model.defer="runningLate.customers">
                                <option>Select Customer</option>
                                @foreach($companyUsers as $role)
                                <option value="{{$role['id']}}">{{$role['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="NotifyTeamProviders">Notify
                            Team
                            Providers</label>
                        <input class="form-check-input" id="NotifyTeamProviders"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="runningLate.notify_team_provider" value="true">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="AddCustomizedRunningLateForm">Add
                            Customized “Running Late” Form <small>(coming soon)</small> </label>
                        <input disabled class="form-check-input show-hidden-content" id="AddCustomizedRunningLateForm"
                            name="RequestStartTimeforServices" type="checkbox" tabindex=""
                            wire:model.defer="runningLate.customize_form" value="true">
                        <div class="hidden-content">
                            <label class="form-label-sm">Select
                                Form</label>
                            <select disabled class="form-select"  wire:model.defer="runningLate.customize_form_id">
                                @foreach ($customForms as $form)
                                    <option value="{{ $form['id'] }}">{{ $form['request_form_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- /Running Late Procedure -->
    </div>
    <div class="col-lg-6 pe-lg-5">
        <div class="w-100">
            <div class="inner-section-segment-spacing border p-3 pb-lg-5">
                <h2>
                    Display to providers prior to being assigned
                </h2>
                <div class="d-flex flex-column gap-3">
                    <div class="form-check">
                        <label class="form-check-label" for="CompanyName">Company
                            Name</label>
                        <input class="form-check-input" id="CompanyName" name="RequestStartTimeforServices"
                            type="checkbox" tabindex="" wire:model.defer="providerSettings.company_name"
                            value="true">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="FullServiceAddress">Full
                            Service
                            Address</label>
                        <input class="form-check-input" id="FullServiceAddress" name="RequestStartTimeforServices"
                            type="checkbox" tabindex=""
                            wire:model.defer="providerSettings.full_service_address" value="true">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="requester" name="RequestStartTimeforServices"
                            type="checkbox" tabindex="" wire:model.defer="providerSettings.requester"
                            value="true">
                        <label class="form-check-label" for="requester">Requester</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="ServiceConsumer">Service
                            Consumer(s)</label>
                        <input class="form-check-input" id="ServiceConsumer" name="RequestStartTimeforServices"
                            type="checkbox" tabindex="" wire:model.defer="providerSettings.consumer"
                            value="true">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="Participants">Participants</label>
                        <input class="form-check-input" id="Participants" name="RequestStartTimeforServices"
                            type="checkbox" wire:model.defer="providerSettings.participants" value="true"
                            tabindex="">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="Step2Details">Step 2
                            Details</label>
                        <input class="form-check-input" id="Step2Details" name="RequestStartTimeforServices"
                            type="checkbox" tabindex="" wire:model.defer="providerSettings.step2"
                            value="true">
                    </div>
                </div>
            </div>
        </div><!-- /Display to providers prior to being assigned -->
    </div>
</div>
<div class="row">
    <div class="col-12 form-actions">
        <button type="button" class="btn btn-outline-dark rounded"
            x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('service-configuration')"
            wire:click.prevent="back">Back</button>
        <a href="/admin/accommodation/all-services" type="submit" class="btn btn-primary rounded"
            wire:click.prevent="save(1,5)" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">Save &
            Exit</a>
        <button type="button" class="btn btn-primary rounded"
            x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('notification-setting')"
            wire:click.prevent="save(0,5)">Next</button>
    </div>
</div>
</form>
</div>
@elseif($step == 6)
<div class="tab-pane fade" :class="{ 'active show': tab === 'notification-setting' }" id="notification-setting"
    role="tabpanel" aria-labelledby="notification-setting-tab" tabindex="0"
    x-show="tab === 'notification-setting'">
    <form class="form">

        @csrf


        <div class="between-section-segment-spacing">
            <div class="d-lg-flex justify-content-between align-items-center">
                <h2>Default Notification Settings</h2>
            </div>
            @foreach ($serviceTypes as $type => $parameters)
                <div class="row inner-section-segment-spacing">
                    <div class="col-lg-8">
                        <h3 class="text-primary">{{ $parameters['title'] }} Services</h3>
                        <div class="row">
                            <div class="col-lg-5 mb-4">
                                <div class="d-flex gap-3">
                                    <label class="form-label-sm">
                                        Broadcast
                                    </label>
                                    <div class="form-check form-switch form-switch-column">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            name="AutoNotifyBroadcast-{{ $type }}"
                                            aria-label="Broadcast toggle"
                                            wire:model.defer="notificationSettings.{{ $type }}.broadcast">
                                        <label class="form-check-label"
                                            for="AutoNotifyBroadcast-{{ $type }}">Auto-notify</label>
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
                                            <input class="form-check-input js-auto-notify  show-hidden-content"
                                                type="checkbox" role="switch" aria-label="Auto Notify Toggle"
                                                onclick="showNotifications($(this),'auto-assign-settings{{ $type }}')"
                                                wire:model.defer="notificationSettings.{{ $type }}.auto_assign"
                                                value="true">
                                            <label class="form-check-label" for="AutoNotifyAssign"></label>
                                            <label class="form-check-label"
                                                for="AutoNotifyAssign">Auto-assign</label>
                                        </div>
                                    </div>
                                    @if ($notificationSettings[$type]['auto_assign'])
                                        <div class="js-auto-notify-content"
                                            id="auto-assign-settings{{ $type }}">
                                        @else
                                            <div class="js-auto-notify-content hidden"
                                                id="auto-assign-settings{{ $type }}">
                                    @endif
                                    <div class="d-flex flex-column gap-3">
                                        <div class="form-check">
                                            <label class="form-check-label"
                                                for="FirstAvailableAssign-{{ $type }}">First
                                                Available</label>
                                            <input class="form-check-input"
                                                id="FirstAvailableAssign-{{ $type }}"
                                                name="auto_assign_type{{ $type }}" value="1"
                                                wire:model.defer="notificationSettings.{{ $type }}.auto_assign_type"
                                                type="radio" tabindex="">
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label"
                                                for="PriorityAssign-{{ $type }}">Priority</label>
                                            <input class="form-check-input"
                                                id="PriorityAssign-{{ $type }}"
                                                name="auto_assign_type{{ $type }}" value="2"
                                                wire:model.defer="notificationSettings.{{ $type }}.auto_assign_type"
                                                type="radio" tabindex="">
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label"
                                                for="PriorityPreferredProvidersAssign-{{ $type }}">Priority
                                                &
                                                Preferred
                                                Providers</label>
                                            <input class="form-check-input"
                                                id="PriorityPreferredProvidersAssign-{{ $type }}"
                                                name="auto_assign_type{{ $type }}" value="3"
                                                wire:model.defer="notificationSettings.{{ $type }}.auto_assign_type"
                                                type="radio" tabindex="">
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label"
                                                for="ClosestProviderAssign-{{ $type }}">Closest
                                                Provider</label>
                                            <input class="form-check-input"
                                                id="ClosestProviderAssign-{{ $type }}"
                                                name="auto_assign_type{{ $type }}" value="4"
                                                wire:model.defer="notificationSettings.{{ $type }}.auto_assign_type"
                                                type="radio" tabindex="">
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
                                        for="emailBroadcast-via-{{ $type }}">Email</label>
                                    <input class="form-check-input" id="emailBroadcast-via-{{ $type }}"
                                        name="emailBroadcast-via" type="checkbox"
                                        wire:model.defer="notificationSettings.{{ $type }}.broadcast_via_email"
                                        value="true" tabindex="">
                                </div>
                                <div class="form-check mb-lg-0">
                                    <label class="form-check-label"
                                        for="smsBroadcast-via-{{ $type }}">SMS</label>
                                    <input class="form-check-input" id="smsBroadcast-via-{{ $type }}"
                                        name="smsBroadcast-via" type="checkbox"
                                        wire:model.defer="notificationSettings.{{ $type }}.broadcast_via_sms"
                                        value="true" tabindex="">
                                </div>
                                <div class="form-check mb-lg-0">
                                    <label class="form-check-label"
                                        for="pushNotificationBroadcast-via-{{ $type }}">Push
                                        Notification</label>
                                    <input class="form-check-input"
                                        id="pushNotificationBroadcast-via-{{ $type }}"
                                        name="pushNotificationBroadcast-via"
                                        wire:model.defer="notificationSettings.{{ $type }}.broadcast_via_push"
                                        value="true" type="checkbox" tabindex="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="d-lg-flex align-items-center gap-5">
                                <label class="form-label mb-lg-0">Variable</label>
                                <div class="form-check mb-lg-0">
                                    <label class="form-check-label"
                                        for="Provider-Priority-{{ $type }}">Provider
                                        Priority</label>
                                    <input class="form-check-input" id="Provider-Priority-{{ $type }}"
                                        name="Provider-Priority" type="checkbox" tabindex=""
                                        wire:model.defer="notificationSettings.{{ $type }}.provider_priority"
                                        value="true">
                                </div>
                                @if ($type == 1)
                                    <div class="form-check mb-lg-0">
                                        <label class="form-check-label"
                                            for="ProximitytoService-Address-{{ $type }}">Proximity to
                                            Service
                                            Address</label>
                                        <input class="form-check-input"
                                            id="ProximitytoService-Address-{{ $type }}"
                                            name="ProximitytoService-Address" type="checkbox" tabindex=""
                                            wire:model.defer="notificationSettings.{{ $type }}.service_address"
                                            value="true">
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if ($type == 1)
                            <div class="col-lg-12 mb-4">
                                <div class="d-lg-flex align-items-center gap-5">
                                    <div>
                                        <label class="form-label-sm" for="max-radius">Max. Radius</label>
                                        <div class="input-group">
                                            <input type="" name=""
                                                class="form-control form-control-sm w-50" placeholder="00"
                                                aria-label="00"
                                                wire:model.defer="notificationSettings.{{ $type }}.radius">
                                            <select class="form-select form-select-sm" id="max-radius"
                                                wire:model.defer="notificationSettings.{{ $type }}.unit">
                                                <option value="miles">Miles</option>
                                                <option value="km">KM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="form-label-sm"
                                            for="provider-count-{{ $type }}">Provider Count</label>
                                        <div class="input-group">
                                            <input type="" name="provider-count-{{ $type }}"
                                                class="form-control form-control-sm" placeholder="00"
                                                id="provider-count"
                                                wire:model.defer="notificationSettings.{{ $type }}.count">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="form-label-sm" for="interval">Interval</label>
                                        <div class="input-group">
                                            <input type="" name=""
                                                class="form-control form-control-sm w-50" placeholder="00"
                                                aria-label="00"
                                                wire:model.defer="notificationSettings.{{ $type }}.interval">
                                            <select class="form-select form-select-sm" id="interval"
                                                wire:model.defer="notificationSettings.{{ $type }}.interval_unit">
                                                <option value="min">Min</option>
                                                <option value="hour">Hour</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
        </div>
        @endforeach

</div>
<div class="row">
    <div class="col-12 form-actions">
        <button type="button" class="btn btn-outline-dark rounded"
            x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('advance-options')"
            wire:click.prevent="back">Back</button>
        <a href="/admin/accommodation/all-services" type="submit"class="btn btn-primary rounded"
            x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });" wire:click.prevent="save(1,6)">
            Save & Exit</a>
    </div>
</div>
</form>
</div>
@endif

</div>
<!-- END: Steps -->
</div>
</div>
</div>
</div>
</div>

<!-- End: Content-->
@push('scripts')
@endpush
