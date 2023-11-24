<div>
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">Business Setup</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">
                                    Settings
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Business Setup
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
                        <button class="nav-link {{ $component == 'configuration-setting' ? 'active' : '' }}"
                            @click.prevent="$wire.switch('configuration-setting')" id="configuration-setting-tab"
                            data-bs-toggle="tab" data-bs-target="#configuration-setting" type="button" role="tab"
                            aria-controls="configuration-setting" aria-selected="true"><span class="number">1</span>
                            Configuration Setting</button>
                    </li>
                    @if ($configuration['portal_url'] != '')
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $component == 'business-hours' ? 'active' : '' }}"
                                @click.prevent="$wire.switch('business-hours')"
                                wire:click.prevent="getBusinessSchedule()" id="business-hours-tab" data-bs-toggle="tab"
                                data-bs-target="#business-hours" type="button" role="tab"
                                aria-controls="business-hours" aria-selected="false"><span class="number">2</span>
                                Business Hours</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $component == 'payments' ? 'active' : '' }}" id="payments-tab"
                                @click.prevent="$wire.switch('payments')" data-bs-toggle="tab"
                                data-bs-target="#payments" type="button" role="tab" aria-controls="payments"
                                aria-selected="false"><span class="number">3</span>
                                Payments</button>
                        </li>
                    @else
                        <li class="nav-item" role="presentation">

                            <div class="nav-link" title="Fill in first step to proceed">
                                <span class="number">2</span>
                                Business Hours
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">

                            <div class="nav-link" title="Fill in first step to proceed">
                                <span class="number">3</span>
                                Payments
                            </div>
                        </li>
                    @endif

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade {{ $component == 'configuration-setting' ? 'active show' : '' }}"
                        id="configuration-setting" role="tabpanel" aria-labelledby="configuration-setting-tab"
                        tabindex="0">
                        @if ($component == 'configuration-setting')
                            <form class="form">
                                {{-- updated by shanila to add csrf --}}
                                @csrf
                                <div class="row between-section-segment-spacing">

                                    {{-- update ended by shanila --}}
                                    <div class="col-lg-12">
                                        <h2 class="mb-4">Configuration Setting</h2>
                                        <div class="row inner-section-segment-spacing">
                                            <div class="row inner-section-segment-spacing">
                                                <div class="col-lg-6">
                                                    <div class="col-lg-12">
                                                        <label class="form-label" for="add-company-logo"> Company Name</label>
                                                            <input aria-label="Company Name" type=""
                                                            name="" wire:model.defer="configuration.business_name"
                                                            class="form-control" placeholder="Name">
                                                        @error('business_name')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Choose Portal Light Theme Colours</h3>
                                                <div class="row gap-0 row-gap-3">
                                                    <div class="choose-portal-colors">
                                                        <div class="row">
                                                            <div class="col-12 col-md-3 col-lg-5 col-xl-4 mb-1 mb-md-0">
                                                                <label class="form-label-sm">Default Colour</label>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center col-12 col-md-8 col-lg-7 col-xl-8">
                                                                <div class="choosen-color">
                                                                    <input type="color"
                                                                        wire:model.defer="configuration.default_colour"
                                                                        class="form-control form-control-color border-0 p-0 w-100 h-100"
                                                                        id="PortalDefaultColour" value=""
                                                                        title="Choose your color">
                                                                </div>
                                                                <label class="form-label-sm">Choose Colour</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="choose-portal-colors">
                                                        <div class="row">
                                                            <div
                                                                class="col-12 col-md-3 col-lg-5 col-xl-4 mb-1 mb-md-0">
                                                                <label class="form-label-sm">Foreground Color</label>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center col-12 col-md-8 col-lg-7 col-xl-8">
                                                                <div class="choosen-color">
                                                                    <input type="color"
                                                                        wire:model.defer="configuration.foreground_colour"
                                                                        class="form-control form-control-color border-0 p-0 w-100 h-100"
                                                                        id="PortalForegroundColour" value=""
                                                                        title="Choose your color">
                                                                </div>
                                                                <label class="form-label-sm">Choose Colour</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Choose Portal Dark Theme Colours</h3>
                                                <div class="row gap-0 row-gap-3">
                                                    <div class="choose-portal-colors">
                                                        <div class="row">
                                                            <div class="col-12 col-md-3 col-lg-5 col-xl-4 mb-1 mb-md-0">
                                                                <label class="form-label-sm">Default Colour</label>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center col-12 col-md-8 col-lg-7 col-xl-8">
                                                                <div class="choosen-color">
                                                                    <input type="color"
                                                                        wire:model.defer="configuration.dark_default_colour"
                                                                        class="form-control form-control-color border-0 p-0 w-100 h-100"
                                                                        id="PortalDefaultColour" value=""
                                                                        title="Choose your color">
                                                                </div>
                                                                <label class="form-label-sm">Choose Colour</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="choose-portal-colors">
                                                        <div class="row">
                                                            <div
                                                                class="col-12 col-md-3 col-lg-5 col-xl-4 mb-1 mb-md-0">
                                                                <label class="form-label-sm">Foreground Color</label>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center col-12 col-md-8 col-lg-7 col-xl-8">
                                                                <div class="choosen-color">
                                                                    <input type="color"
                                                                        wire:model.defer="configuration.dark_foreground_colour"
                                                                        class="form-control form-control-color border-0 p-0 w-100 h-100"
                                                                        id="PortalForegroundColour" value=""
                                                                        title="Choose your color">
                                                                </div>
                                                                <label class="form-label-sm">Choose Colour</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row inner-section-segment-spacing">
                                            <div class="col-lg-6">
                                                 <h3>Choose URL for Users to Access the Portal {{--<span class="mandatory"
                                                        aria-hidden="true">
                                                        *
                                                    </span>--}}</h3> 
                                                <div
                                                    class="d-flex flex-column flex-md-row gap-3 align-items-md-center">
                                                    <input aria-label="Sub Domain Name for URL" type=""
                                                        name="" wire:model.defer="configuration.portal_url"
                                                        class="form-control" placeholder="Name">

                                                    <label>.eclipsescheduling.com</label>
                                                    <div class="option">
                                                        <div class="d-flex">
                                                            <svg class="mx-2" aria-label="Availabe" width="24"
                                                                height="19" viewBox="0 0 24 19">
                                                                <use xlink:href="/css/common-icons.svg#green-tick">
                                                                </use>
                                                            </svg>
                                                            Available
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('configuration.portal_url')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row inner-section-segment-spacing">
                                            <div class="col-md-7 col-lg-5">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h3 class="mb-3">Company Logo</h3>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="form-label" for="add-company-logo"> Add Company
                                                            Logo</label>
                                                        <input aria-label="Company Logo" type="file"
                                                            name="" accept="image/*"
                                                            wire:model.defer="company_logo" class="form-control"
                                                            placeholder="Name">
                                                        @error('company_logo')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-md-3 col-lg-6 mb-4 align-self-end ps-lg-5 position-relative">
                                                @if ($company_logo != null)
                                                    <img class="user_img w-50"
                                                        src="{{ '/tenant' . tenant('id') . '/app/livewire-tmp/' . $company_logo->getFilename() }}">
                                                    <div class="position-absolute top-0">
                                                        <a wire:click.prevent="deleteFile('company_logo')"
                                                            href="#" title="Delete" aria-label="Delete"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon mx-0">
                                                            <svg aria-label="Delete" class="delete-icon"
                                                                width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/sprite.svg#delete-icon">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @elseif($configuration->company_logo != null && $configuration->company_logo != '')
                                                    <img class="user_img w-50"
                                                        src="{{ $configuration->company_logo == null ? '' : url($configuration->company_logo) }}">
                                                    <div class="position-absolute top-0">
                                                        <a wire:click.prevent="deleteFile('company_logo')"
                                                            href="#" title="Delete" aria-label="Delete"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon mx-0">
                                                            <svg aria-label="Delete" class="delete-icon"
                                                                width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/sprite.svg#delete-icon">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="row inner-section-segment-spacing">
                                            <div class="col-md-7 col-lg-5">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label" for="add-dark-company-logo"> Add Company
                                                            Dark Theme Logo</label>
                                                        <input aria-label="Dark Company Logo" type="file"
                                                            name="" accept="image/*"
                                                            wire:model.defer="dark_company_logo" class="form-control"
                                                            placeholder="Name">
                                                        @error('dark_company_logo')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-md-3 col-lg-6 mb-4 align-self-end ps-lg-5 position-relative">
                                                @if ($dark_company_logo != null)
                                                    <img class="user_img w-50"
                                                        src="{{ '/tenant' . tenant('id') . '/app/livewire-tmp/' . $dark_company_logo->getFilename() }}">
                                                    <div class="position-absolute top-0">
                                                        <a wire:click.prevent="deleteFile('dark_company_logo')"
                                                            href="#" title="Delete" aria-label="Delete"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon mx-0">
                                                            <svg aria-label="Delete" class="delete-icon"
                                                                width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/sprite.svg#delete-icon">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @elseif($configuration->dark_company_logo != null && $configuration->dark_company_logo != '')
                                                    <img class="user_img w-50"
                                                        src="{{ $configuration->dark_company_logo == null ? '' : url($configuration->dark_company_logo) }}">
                                                    <div class="position-absolute top-0">
                                                        <a wire:click.prevent="deleteFile('dark_company_logo')"
                                                            href="#" title="Delete" aria-label="Delete"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon mx-0">
                                                            <svg aria-label="Delete" class="delete-icon"
                                                                width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/sprite.svg#delete-icon">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="row inner-section-segment-spacing">
                                            <div class="col-md-7 col-lg-5">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h3 class="mb-3">Login Screen Image</h3>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="form-label"
                                                            for="upload-login-screen-image">Upload
                                                            Login Screen Image</label>
                                                        <input aria-label="Upload Login Screen Image" type="file"
                                                            accept="image/*" name=""
                                                            wire:model.defer="login_screen" class="form-control"
                                                            placeholder="Name">
                                                        @error('login_screen')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-md-3 col-lg-6 mb-4 align-self-end ps-lg-5 position-relative ">
                                                @if ($login_screen != null)
                                                    <img class="user_img w-50"
                                                        src="{{ '/tenant' . tenant('id') . '/app/livewire-tmp/' . $login_screen->getFilename() }}">
                                                    <div class="position-absolute top-0">
                                                        <a wire:click.prevent="deleteFile('login_screen')"
                                                            href="#" title="Delete" aria-label="Delete"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon mx-0">
                                                            <svg aria-label="Delete" class="delete-icon"
                                                                width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/sprite.svg#delete-icon">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @elseif($configuration->login_screen != null && $configuration->login_screen != '')
                                                    <img class="user_img w-50"
                                                        src="{{ $configuration->login_screen == null ? '' : url($configuration->login_screen) }}">
                                                    <div class="position-absolute top-0">
                                                        <a wire:click.prevent="deleteFile('login_screen')"
                                                            href="#" title="Delete" aria-label="Delete"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon mx-0">
                                                            <svg aria-label="Delete" class="delete-icon"
                                                                width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/sprite.svg#delete-icon">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @endif

                                                {{-- <img src="/html-prototype/images/company/help-desk.png" class="img-fluid"
                                                    alt="help-desk" /> --}}
                                            </div>
                                        </div>
                                        <div class="row inner-section-segment-spacing">
                                            <div class="col-lg-6">
                                                <h3>Login Screen Welcome Text</h3>
                                                <label class="form-label" for="updated-welcome-text">Updated Welcome
                                                    Text</label>
                                                <textarea class="form-control" rows="3" cols="3" placeholder="Enter Text"
                                                    wire:model.defer="configuration.welcome_text" id="updated-welcome-text"></textarea>
                                            </div>
                                        </div>
                                        <div class="row inner-section-segment-spacing">
                                            <div class="col-lg-6">
                                                <h3>Assign Email to Send Notifications</h3>
                                                <label class="form-label" for="EmailAddressSendNotifications">Email
                                                    Address</label>
                                                <input type="text" id="EmailAddressSendNotifications"
                                                    class="form-control"
                                                    wire:model.defer="configuration.notification_email"
                                                    name="EmailAddressSendNotifications" placeholder="Enter Email" />
                                                @error('configuration.notification_email')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row inner-section-segment-spacing">
                                            <div class="col-lg-6">
                                                <h3>Assign Email to Receive Customer Responses</h3>
                                                <label class="form-label" for="EmailAddressCustomerResponses">Email
                                                    Address</label>
                                                <input type="text" id="EmailAddressCustomerResponses"
                                                    class="form-control"
                                                    wire:model.defer="configuration.response_email"
                                                    name="EmailAddressCustomerResponses" placeholder="Enter Email" />
                                                @error('configuration.response_email')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-3 mt-4">
                                                <h3>Announcements & Communications</h3>
                                            </div>
                                        </div>

                                        @foreach ($messages as $index => $message)
                                            <div class="border-dashed col-lg-6 p-4 rounded mb-3">
                                                <div class="row">
                                                    <div class="col-lg-12 mb-4">
                                                        <div class="d-flex justify-content-between">
                                                            <label class="form-label"
                                                                for="AnnouncementsCommunications">Message
                                                                {{ $loop->index + 1 }}</label>
                                                            <div class="align-items-center gap-2">
                                                                <a wire:click.prevent="removeMessage({{ $index }})"
                                                                    href="#" title="Delete" aria-label="Delete"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    <svg aria-label="Delete" class="delete-icon"
                                                                        width="20" height="20"
                                                                        viewBox="0 0 20 20" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <use xlink:href="/css/sprite.svg#delete-icon">
                                                                        </use>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <textarea class="form-control" rows="4" cols="3" placeholder="Enter Message"
                                                            id="AnnouncementsCommunications" wire:key="text-{{ $index }}"
                                                            wire:model.defer="messages.{{ $index }}.message"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 mb-4 d-lg-flex gap-3">
                                                        <div class="col-xl-6">
                                                            <h3>Display:</h3>
                                                            <div class="form-check">
                                                                <input class="form-check-input"
                                                                    id="DisplayOnLoginScreen-{{ $index }}"
                                                                    wire:model.defer="messages.{{ $index }}.on_log_in_screen"
                                                                    name="DisplayOnLoginScreen-{{ $index }}"
                                                                    type="checkbox" tabindex="" />
                                                                <label class="form-check-label"
                                                                    for="DisplayOnLoginScreen-{{ $index }}">
                                                                    Display On Log-in Screen</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input"
                                                                    id="DisplayOnDashboard-{{ $index }}"
                                                                    wire:model.defer="messages.{{ $index }}.on_dashboard"
                                                                    name="DisplayOnDashboard-{{ $index }}"
                                                                    type="checkbox" tabindex="" />
                                                                <label class="form-check-label"
                                                                    for="DisplayOnDashboard-{{ $index }}">
                                                                    Display On Dashboard</label>
                                                            </div>
                                                            <div class="row mb-4 mt-4">
                                                                <div class="col-lg-8">
                                                                    <h3>Duration:</h3>
                                                                    <label class="form-label-sm" for="Days">
                                                                        Expiry Date</label>
                                                                    <input
                                                                        class="form-control js-single-date-picker text-center days-event"
                                                                        id="Days"
                                                                        data-index="{{ $index }}"
                                                                        name="DisplayToProviders" placeholder=""
                                                                        type="" tabindex=""
                                                                        wire:key="duration-{{ $index }}"
                                                                        wire:model.defer="messages.{{ $index }}.days" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6">
                                                            <h3>Audience:</h3>
                                                            <div class="form-check">
                                                                <input class="form-check-input"
                                                                    id="DisplayToProviders-{{ $index }}"
                                                                    wire:model.defer="messages.{{ $index }}.display_to_providers"
                                                                    name="DisplayToProviders-{{ $index }}"
                                                                    type="checkbox" tabindex="" />
                                                                <label class="form-check-label"
                                                                    for="DisplayToProviders-{{ $index }}">
                                                                    Display to Providers</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input"
                                                                    id="DisplayToCustomers-{{ $index }}"
                                                                    wire:model.defer="messages.{{ $index }}.display_to_providers"
                                                                    name="DisplayToCustomers-{{ $index }}"
                                                                    type="checkbox" tabindex="" />
                                                                <label class="form-check-label"
                                                                    for="DisplayToCustomers-{{ $index }}">
                                                                    Display to Customers</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input"
                                                                    id="DisplayToAdminUsers-{{ $index }}"
                                                                    wire:model.defer="messages.{{ $index }}.display_to_admin"
                                                                    name="DisplayToAdminUsers-{{ $index }}"
                                                                    type="checkbox" tabindex="" />
                                                                <label class="form-check-label"
                                                                    for="DisplayToAdminUsers-{{ $index }}">
                                                                    Display to Admin-users</label>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="col-lg-8 mt-3">
                                            <a class="btn btn-secondary btn-custom btn-sm rounded" wire:click.prevent="addMessage">
                                                <svg class="me-1" aria-label="Add Message" width="15"
                                                    height="15" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                                    <use xlink:href="/css/common-icons.svg#blueplus">
                                                    </use>
                                                </svg>
                                                <span class="btn-text">Add Message</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                    <button type="submit" class="btn btn-primary rounded"
                                        x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });"
                                        wire:click.prevent="save(1)">Save Changes</button>
                                    <button type="submit" class="btn btn-primary rounded"
                                        x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('business-hours')"
                                        wire:click.prevent="save(0)">Next</button>
                                </div>
                            </form>
                        @endif

                    </div>

                    <div class="tab-pane fade {{ $component == 'business-hours' ? 'active show' : '' }}"
                        id="business-hours" role="tabpanel" aria-labelledby="business-hours-tab" tabindex="0">
                        @if ($component == 'business-hours')
                            @livewire('app.common.setup.business-hours-setup', ['model_id' => 1, 'model_type' => '1'])
                            <!-- Form Actions -->
                            <div
                                class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                <button type="button" class="btn btn-outline-dark rounded mx-2"
                                    x-on:click="$wire.switch('configuration-setting')"
                                    wire:click.prevent="saveSchedule">Back</button>
                                 <button type="button" class="btn btn-primary rounded"
                                    wire:click.prevent="saveSchedule(1)">Save Changes</button>
                                <button type="button" class="btn btn-primary rounded"
                                    x-on:click="$wire.switch('payments')"
                                    wire:click.prevent="saveSchedule">Next</button>
                            </div><!-- /Form Actions -->
                        @endif
                    </div>
                    <div class="tab-pane fade {{ $component == 'payments' ? 'active show' : '' }}" id="payments"
                        role="tabpanel" aria-labelledby="payments-tab" tabindex="0">
                        @if ($component == 'payments')
                            <form class="form">
                                {{-- updated by shanila to add csrf --}}
                                @csrf
                                {{-- update ended by shanila --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Payments</h2>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-5">
                                                    <h3>Provider Payments & Preferences</h3>
                                                    <div class="row between-section-segment-spacing">
                                                        <div class="col-lg-12 mb-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check form-switch mb-0">
                                                                    <input class="form-check-input"
                                                                        wire:model.defer="configuration.payment_payroll"
                                                                        aria-label="Toggle Provider Payroll"
                                                                        type="checkbox"
                                                                        onclick="toggleItems('provider-payments')"
                                                                        role="switch" id="providerPayroll">
                                                                    {{-- <input class="form-check-input"
                                                                        aria-label="Toggle Provider Payroll" type="checkbox"
                                                                        role="switch"> --}}
                                                                </div>
                                                                <label class="form-label mb-0">Provider Payroll</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 ">

                                                            <div class="row provider-payments"
                                                                @if (!$configuration['payment_payroll']) style="display:none" @endif>
                                                                <div class="col-lg-12 mb-2">
                                                                    <label class="form-label"
                                                                        for="directDepositFormUpload">
                                                                        Direct Deposit Form Upload
                                                                    </label>
                                                                    <input class="form-control" type="file"
                                                                        wire:model.defer="configuration.deposit_form_file"
                                                                        id="directDepositFormUpload">
                                                                </div>
                                                                <div class="col-lg-12 mb-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            id="enrollDirectDepositProvider"
                                                                            wire:model.defer="configuration.require_provider_approval"
                                                                            name="enrollDirectDeposit" type="checkbox"
                                                                            tabindex="" />
                                                                        <label class="form-check-label"
                                                                            for="enrollDirectDepositProvider">Require
                                                                            Provider
                                                                            to
                                                                            Acknowledge to Enroll in Direct
                                                                            Deposit</label>
                                                                    </div>
                                                                </div>
                                                                <div class="between-section-segment-spacing">
                                                                    <div class="col-lg-12 mb-4">
                                                                        <div
                                                                            class="d-lg-flex justify-content-between mb-2 mb-lg-0">
                                                                            <label class="form-label"
                                                                                for="reimburseProviders">
                                                                                Rate per unit to reimburse provider
                                                                            </label>
                                                                            {{-- <a href="#">
                                                                                KM <svg aria-label="Edit" width="20"
                                                                                    height="20" viewBox="0 0 20 20">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#pencil">
                                                                                    </use>
                                                                                </svg>
                                                                            </a> --}}
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-8 d-inline-flex">
                                                                                <input class="form-control"
                                                                                    type=""
                                                                                    id="reimburseProviders"
                                                                                    placeholder="$00:00"
                                                                                    wire:model.defer="configuration.rate_for_providers">

                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <select id="measurement_type"
                                                                                    aria-label="Select Unit"
                                                                                    class="form-select"
                                                                                    wire:model.defer="configuration.measurement_providers">
                                                                                    <option value="km">KM</option>
                                                                                    <option value="m">Miles
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        @error('configuration.rate_for_providers')
                                                                            <span
                                                                                class="d-inline-block invalid-feedback mt-2">
                                                                                {{ $message }}
                                                                            </span>
                                                                        @enderror

                                                                    </div>
                                                                    <div class="col-lg-12 mb-4">
                                                                        <div class="d-lg-flex ">
                                                                            <label class="form-label"
                                                                                for="compensatedTravelTime">
                                                                                Rate To Reimburse Compensated Travel
                                                                                Time
                                                                                <svg aria-label="Information"
                                                                                    width="15" height="16"
                                                                                    viewBox="0 0 15 16">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#fill-question">
                                                                                    </use>
                                                                                </svg>
                                                                            </label>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-8 d-inline-flex">
                                                                                <input class="form-control"
                                                                                    type="number"
                                                                                    wire:model.defer="configuration.rate_for_travel_time"
                                                                                    id="compensatedTravelTime"
                                                                                    placeholder="$00:00">
                                                                                <div
                                                                                    class="text-nowrap col-lg-4 ms-2 mt-3">
                                                                                    <span>Per hour</span>
                                                                                </div>
                                                                                @error('configuration.rate_for_travel_time')
                                                                                    <span
                                                                                        class="d-inline-block invalid-feedback mt-2">
                                                                                        {{ $message }}
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="row ms-1 mt-2">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    id="SameAsServiceRate"
                                                                                    name="SameAsServiceRate"
                                                                                    type="checkbox" tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="SameAsServiceRate">Same as
                                                                                    Service
                                                                                    Rate</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-4">
                                                                        <label class="form-label"
                                                                            for="select-currency">
                                                                            Select Currency
                                                                        </label>
                                                                        <select id="select-currency"
                                                                            class="form-select"
                                                                            wire:model.defer="configuration.currency">
                                                                            <option value="usd">USD</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        {{-- Begin: Staff Providers --}}
                                                        <div class="col-lg-6">
                                                            <div class=" provider-payments"
                                                                @if (!$configuration['payment_payroll']) style="display:none" @endif">
                                                                <label class="form-label" for="payment-schedule ">
                                                                    Payment Schedule
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-2">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    id="staffProvider"
                                                                                    name="enrollDirectDeposit"
                                                                                    type="checkbox"
                                                                                    onclick="toggleItems('staff-provider')"
                                                                                    tabindex=""
                                                                                    wire:model.defer="configuration.enable_staff_providers" />
                                                                                <label class="form-check-label"
                                                                                    for="staffProvider">Staff
                                                                                    Providers</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mx-4 mb-4 staff-provider"
                                                                            @if (!$configuration['enable_staff_providers']) style="display:none" @endif>
                                                                            <div class="mb-2  ">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        wire:model.defer="staffProviders.payment_frequency"
                                                                                        type="radio"
                                                                                        name="staff-providers-radio"
                                                                                        value="every-week"
                                                                                        onclick="showSelectedItems('every-week','sp-radio')"
                                                                                        id="everyweekstarting">
                                                                                    <label class="form-check-label"
                                                                                        for="everyweekstarting">
                                                                                        Every week starting
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mx-4 every-week sp-radio"
                                                                                @if ($staffProviders['payment_frequency'] != 'every-week') style="display:none" @endif>
                                                                                <div class="mb-2">
                                                                                    <label class="form-label text-sm"
                                                                                        for="invoice-submission-day1">
                                                                                        Invoice Submission Day
                                                                                    </label>
                                                                                    <select
                                                                                        id="invoice-submission-day1"
                                                                                        wire:model.defer="staffProviders.every-week.submission_day"
                                                                                        class="form-select">

                                                                                        <option selected
                                                                                            value="monday">Monday
                                                                                        </option>
                                                                                        <option value="tuesday">Tuesday
                                                                                        </option>
                                                                                        <option value="wednesday">
                                                                                            Wednesday</option>
                                                                                        <option value="thursday">
                                                                                            Thursday</option>
                                                                                        <option value="friday">Friday
                                                                                        </option>
                                                                                        <option value="saturday">
                                                                                            Saturday</option>
                                                                                        <option value="sunday">Sunday
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="mb-2">
                                                                                    <label
                                                                                        class="form-label input-sm text-sm"
                                                                                        for="remittanceRelease">
                                                                                        Remittance Release
                                                                                    </label>
                                                                                    <select id="remittanceRelease"
                                                                                        wire:model.defer='staffProviders.every-week.remittance_release'
                                                                                        class="form-select">
                                                                                        @for ($i = 1; $i < 8; $i++)
                                                                                            <option
                                                                                                value={{ $i }}>
                                                                                                {{ $i }}
                                                                                                Days</option>
                                                                                        @endfor
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mx-4 mb-4 staff-provider"
                                                                            @if (!$configuration['enable_staff_providers']) style="display:none" @endif>
                                                                            <div class="mb-2">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        name="staff-providers-radio"
                                                                                        value="two-weeks"
                                                                                        wire:model.defer="staffProviders.payment_frequency"
                                                                                        onclick="showSelectedItems('two-weeks','sp-radio')"
                                                                                        aria-label="Every two-weeks starting"
                                                                                        checked>
                                                                                    <label class="form-check-label"
                                                                                        for="">
                                                                                        Every two-weeks starting
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mx-4 two-weeks sp-radio"
                                                                                @if ($staffProviders['payment_frequency'] != 'two-weeks') style="display:none" @endif>
                                                                                <div class="mb-2">
                                                                                    <label class="form-label text-sm"
                                                                                        for="invoice-submission-day2">
                                                                                        Invoice Submission Day
                                                                                    </label>
                                                                                    <select
                                                                                        id="invoice-submission-day2"
                                                                                        wire:model.defer='staffProviders.two-weeks.submission_day'
                                                                                        class="form-select">

                                                                                        <option selected
                                                                                            value="monday">Monday
                                                                                        </option>
                                                                                        <option value="tuesday">Tuesday
                                                                                        </option>
                                                                                        <option value="wednesday">
                                                                                            Wednesday</option>
                                                                                        <option value="thursday">
                                                                                            Thursday</option>
                                                                                        <option value="friday">Friday
                                                                                        </option>
                                                                                        <option value="saturday">
                                                                                            Saturday</option>
                                                                                        <option value="sunday">Sunday
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="mb-2">
                                                                                    <label
                                                                                        class="form-label input-sm text-sm"
                                                                                        for="remittance-release1">
                                                                                        Remittance Release
                                                                                    </label>
                                                                                    <select id="remittance-release1"
                                                                                        wire:model.defer='staffProviders.two-weeks.remittance_release'
                                                                                        class="form-select">
                                                                                        @for ($i = 1; $i < 15; $i++)
                                                                                            <option
                                                                                                value={{ $i }}>
                                                                                                {{ $i }}
                                                                                                Days</option>
                                                                                        @endfor
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mx-4 mb-4 staff-provider"
                                                                            @if (!$configuration['enable_staff_providers']) style="display:none" @endif>
                                                                            <div class="mb-2">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        value="every-month"
                                                                                        onclick="showSelectedItems('every-month','sp-radio')"
                                                                                        name="staff-providers-radio"
                                                                                        id="EveryMonthStarting"
                                                                                        wire:model.defer="staffProviders.payment_frequency">
                                                                                    <label class="form-check-label"
                                                                                        for="EveryMonthStarting">
                                                                                        Every month starting
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mx-4 every-month sp-radio"
                                                                                @if ($staffProviders['payment_frequency'] != 'every-month') style="display:none" @endif>
                                                                                <div class="mb-2">
                                                                                    <label class="form-label text-sm"
                                                                                        for="invoice-submission-day3">
                                                                                        Invoice Submission Day
                                                                                    </label>
                                                                                    <select
                                                                                        id="invoice-submission-day3"
                                                                                        wire:model.defer='staffProviders.every-month.submission_day'
                                                                                        class="form-select">
                                                                                        <option value=1>1st</option>
                                                                                        <option value=2>2nd</option>
                                                                                        <option value=3>3rd</option>
                                                                                        @for ($i = 4; $i < 31; $i++)
                                                                                            <option
                                                                                                value={{ $i }}>
                                                                                                {{ $i }}th
                                                                                            </option>
                                                                                        @endfor
                                                                                    </select>
                                                                                </div>
                                                                                <div class="mb-2">
                                                                                    <label
                                                                                        class="form-label input-sm text-sm"
                                                                                        for="remittance-release2">
                                                                                        Remittance Release
                                                                                    </label>
                                                                                    <select id="remittance-release2"
                                                                                        wire:model.defer='staffProviders.every-month.remittance_release'
                                                                                        class="form-select">
                                                                                        @for ($i = 1; $i < 31; $i++)
                                                                                            <option
                                                                                                value={{ $i }}>
                                                                                                {{ $i }}
                                                                                                Days</option>
                                                                                        @endfor
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mx-4 staff-provider"
                                                                            @if (!$configuration['enable_staff_providers']) style="display:none" @endif>
                                                                            <div class="mb-2">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        wire:model.defer="staffProviders.payment_frequency"
                                                                                        name="staff-providers-radio"
                                                                                        id="on-select-days-of-month"
                                                                                        value="select-days"
                                                                                        onclick="showSelectedItems('select-days','sp-radio')">
                                                                                    <label class="form-check-label"
                                                                                        for="on-select-days-of-month">
                                                                                        On select days of the month
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mx-4 select-days sp-radio"
                                                                                @if ($staffProviders['payment_frequency'] != 'select-days') style="display:none" @endif>
                                                                                @foreach ($staffProviders['select-days']['submission_day'] as $index => $sp_days)
                                                                                    <div class="mb-2">
                                                                                        <label
                                                                                            class="form-label text-sm"
                                                                                            for="invoice-submission-day4">
                                                                                            Invoice Submission Day
                                                                                        </label>
                                                                                        <div
                                                                                            class="d-flex gap-1 align-items-center">
                                                                                            <select
                                                                                                id="invoice-submission-day4"
                                                                                                wire:key='submission-days-{{ $index }}'
                                                                                                wire:model.defer='staffProviders.select-days.submission_day.{{ $index }}'
                                                                                                class="form-select">
                                                                                                <option value=1>1st
                                                                                                </option>
                                                                                                <option value=2>2nd
                                                                                                </option>
                                                                                                <option value=3>3rd
                                                                                                </option>
                                                                                                @for ($i = 4; $i < 31; $i++)
                                                                                                    <option
                                                                                                        value={{ $i }}>
                                                                                                        {{ $i }}th
                                                                                                    </option>
                                                                                                @endfor
                                                                                            </select>
                                                                                            @if ($index > 0)
                                                                                                <svg aria-label="Add"
                                                                                                    width="20"
                                                                                                    height="20"
                                                                                                    wire:click="addSPDays"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#blue-plus">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                <svg aria-label="Delete"
                                                                                                    width="20"
                                                                                                    height="20"
                                                                                                    wire:click="removeSPDays({{ $loop->index }})"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#blue-delete-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                                {{-- <div class="mb-2">
                                                                                    <label class="form-label input-sm text-sm"
                                                                                        for="remittance-release4">
                                                                                        Invoice Submission Day
                                                                                    </label>
                                                                                    <div
                                                                                        class="d-flex gap-1 align-items-center">
                                                                                        <select id="remittance-release4" '
                                                                                            class="form-select">
                                                                                            <option>14th</option>
                                                                                        </select>
                                                                                        <svg aria-label="Add" width="20" height="20"
                                                                                            viewBox="0 0 20 20" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#blue-plus">
                                                                                            </use>
                                                                                        </svg>
                                                                                        <svg aria-label="Delete" width="20" height="20"
                                                                                            viewBox="0 0 20 20" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#blue-delete-icon">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div> --}}
                                                                                <div class="mb-2">
                                                                                    <label
                                                                                        class="form-label input-sm text-sm"
                                                                                        for="remittance-release5">
                                                                                        Remittance Release
                                                                                    </label>
                                                                                    <select id="remittance-release5"
                                                                                        wire:model.defer='staffProviders.select-days.remittance_release'
                                                                                        class="form-select">
                                                                                        @for ($i = 1; $i < 31; $i++)
                                                                                            <option
                                                                                                value={{ $i }}>
                                                                                                {{ $i }}
                                                                                                Days</option>
                                                                                        @endfor
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- End: Staff Providers --}}
                                                                    {{-- Begin: Contract Providers --}}
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-2">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    id="contract-providers"
                                                                                    wire:model.defer="configuration.enable_contract_providers"
                                                                                    onclick="toggleItems('contract-provider')"
                                                                                    name="contract-providers"
                                                                                    type="checkbox" tabindex="" />
                                                                                <label class="form-check-label"
                                                                                    for="contract-providers">Contract
                                                                                    Providers</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mx-4 mb-4 contract-provider"
                                                                            @if (!$configuration['enable_contract_providers']) style="display:none" @endif>
                                                                            <div class="mb-2">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        onclick="showSelectedItems('every-week','cp-radio')"
                                                                                        name="contract-providers-radio"
                                                                                        id="every-week-starting"
                                                                                        wire:model.defer="contractProviders.payment_frequency"
                                                                                        value="every-week">
                                                                                    <label class="form-check-label"
                                                                                        for="every-week-starting">
                                                                                        Every week starting
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mx-4 every-week cp-radio"
                                                                                @if ($contractProviders['payment_frequency'] != 'every-week') style="display:none" @endif>
                                                                                <div class="mb-2">
                                                                                    <label class="form-label text-sm"
                                                                                        for="invoiceSubmissionDay">
                                                                                        Invoice Submission Day
                                                                                    </label>
                                                                                    <select id="invoiceSubmissionDay"
                                                                                        wire:model.defer="contractProviders.every-week.submission_day"
                                                                                        class="form-select">
                                                                                        <option value="monday">Monday
                                                                                        </option>
                                                                                        <option selected
                                                                                            value="monday">Monday
                                                                                        </option>
                                                                                        <option value="tuesday">Tuesday
                                                                                        </option>
                                                                                        <option value="wednesday">
                                                                                            Wednesday</option>
                                                                                        <option value="thursday">
                                                                                            Thursday</option>
                                                                                        <option value="friday">Friday
                                                                                        </option>
                                                                                        <option value="saturday">
                                                                                            Saturday</option>
                                                                                        <option value="sunday">Sunday
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="mb-2">
                                                                                    <label
                                                                                        class="form-label input-sm text-sm"
                                                                                        for="Remittance-Release">
                                                                                        Remittance Release
                                                                                    </label>
                                                                                    <select id="RemittanceRelease"
                                                                                        wire:model.defer='contractProviders.every-week.remittance_release'
                                                                                        class="form-select">
                                                                                        @for ($i = 1; $i < 8; $i++)
                                                                                            <option
                                                                                                value={{ $i }}>
                                                                                                {{ $i }}
                                                                                                Days</option>
                                                                                        @endfor
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mx-4 mb-4 contract-provider"
                                                                            @if (!$configuration['enable_contract_providers']) style="display:none" @endif>
                                                                            <div class="mb-2">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        onclick="showSelectedItems('two-weeks','cp-radio')"
                                                                                        wire:model.defer="contractProviders.payment_frequency"
                                                                                        value="two-weeks"
                                                                                        name="contract-providers-radio"
                                                                                        id="EveryTwoWeeksStarting">
                                                                                    <label class="form-check-label"
                                                                                        for="EveryTwoWeeksStarting">
                                                                                        Every two-weeks starting
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mx-4 two-weeks cp-radio"
                                                                                @if ($contractProviders['payment_frequency'] != 'two-weeks') style="display:none" @endif>
                                                                                <div class="mb-2">
                                                                                    <label class="form-label text-sm"
                                                                                        for="">
                                                                                        Invoice Submission Day
                                                                                    </label>
                                                                                    <select class="form-select"
                                                                                        wire:model.defer='contractProviders.two-weeks.submission_day'
                                                                                        aria-label="Invoice Submission Day">
                                                                                        <option value="monday">Monday
                                                                                        </option>
                                                                                        <option selected
                                                                                            value="monday">Monday
                                                                                        </option>
                                                                                        <option value="tuesday">Tuesday
                                                                                        </option>
                                                                                        <option value="wednesday">
                                                                                            Wednesday</option>
                                                                                        <option value="thursday">
                                                                                            Thursday</option>
                                                                                        <option value="friday">Friday
                                                                                        </option>
                                                                                        <option value="saturday">
                                                                                            Saturday</option>
                                                                                        <option value="sunday">Sunday
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="mb-2">
                                                                                    <label
                                                                                        class="form-label input-sm text-sm"
                                                                                        for="remittance-release">
                                                                                        Remittance Release
                                                                                    </label>
                                                                                    <select class="form-select"
                                                                                        wire:model.defer='contractProviders.two-weeks.remittance_release'
                                                                                        class="form-select">
                                                                                        @for ($i = 1; $i < 8; $i++)
                                                                                            <option
                                                                                                value={{ $i }}>
                                                                                                {{ $i }}
                                                                                                Days</option>
                                                                                        @endfor
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mx-4 mb-4 contract-provider"
                                                                            @if (!$configuration['enable_contract_providers']) style="display:none" @endif>
                                                                            <div class="mb-2">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        onclick="showSelectedItems('every-month','cp-radio')"
                                                                                        wire:model.defer="contractProviders.payment_frequency"
                                                                                        value="every-month"
                                                                                        name="contract-providers-radio"
                                                                                        id="every-month-starting">
                                                                                    <label class="form-check-label"
                                                                                        for="every-month-starting">
                                                                                        Every month starting
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mx-4 every-month cp-radio"
                                                                                @if ($contractProviders['payment_frequency'] != 'every-month') style="display:none" @endif>
                                                                                <div class="mb-2">
                                                                                    <label class="form-label text-sm"
                                                                                        for="Invoice-Submissio-nDay">
                                                                                        Invoice Submission Day
                                                                                    </label>
                                                                                    <select id="Invoice-Submissio-nDay"
                                                                                        wire:model.defer='contractProviders.every-month.submission_day'
                                                                                        class="form-select">
                                                                                        <option value=1>1st</option>
                                                                                        <option value=2>2nd</option>
                                                                                        <option value=3>3rd</option>
                                                                                        @for ($i = 4; $i < 31; $i++)
                                                                                            <option
                                                                                                value={{ $i }}>
                                                                                                {{ $i }}th
                                                                                            </option>
                                                                                        @endfor
                                                                                    </select>
                                                                                </div>
                                                                                <div class="mb-2">
                                                                                    <label
                                                                                        class="form-label input-sm text-sm"
                                                                                        for="remittance_release">
                                                                                        Remittance Release
                                                                                    </label>
                                                                                    <select id="remittance_release"
                                                                                        wire:model.defer='contractProviders.every-month.remittance_release'
                                                                                        class="form-select">
                                                                                        @for ($i = 1; $i < 31; $i++)
                                                                                            <option
                                                                                                value={{ $i }}>
                                                                                                {{ $i }}
                                                                                                Days</option>
                                                                                        @endfor
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mx-4 contract-provider"
                                                                            @if (!$configuration['enable_contract_providers']) style="display:none" @endif>
                                                                            <div class="mb-2">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        onclick="showSelectedItems('select-days','cp-radio')"
                                                                                        wire:model.defer="contractProviders.payment_frequency"
                                                                                        value="select-days"
                                                                                        name="contract-providers-radio"
                                                                                        id="on-select-day-of-month">
                                                                                    <label class="form-check-label"
                                                                                        for="on-select-day-of-month">
                                                                                        On select days of the month
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mx-4 select-days cp-radio"
                                                                                @if ($contractProviders['payment_frequency'] != 'select-days') style="display:none" @endif>
                                                                                @foreach ($contractProviders['select-days']['submission_day'] as $index => $cp_days)
                                                                                    <div class="mb-2">
                                                                                        <label
                                                                                            class="form-label text-sm"
                                                                                            for="invoice-submissionday">
                                                                                            Invoice Submission Day
                                                                                        </label>
                                                                                        <div
                                                                                            class="d-flex gap-1 align-items-center">
                                                                                            <select
                                                                                                id="invoice-submissionday"
                                                                                                wire:key='cp-submission-days-{{ $index }}'
                                                                                                wire:model.defer='contractProviders.select-days.submission_day.{{ $index }}'
                                                                                                class="form-select">
                                                                                                <option value=1>1st
                                                                                                </option>
                                                                                                <option value=2>2nd
                                                                                                </option>
                                                                                                <option value=3>3rd
                                                                                                </option>
                                                                                                @for ($i = 4; $i < 31; $i++)
                                                                                                    <option
                                                                                                        value={{ $i }}>
                                                                                                        {{ $i }}th
                                                                                                    </option>
                                                                                                @endfor

                                                                                            </select>
                                                                                            @if ($index > 0)
                                                                                                <svg aria-label="Add"
                                                                                                    width="20"
                                                                                                    height="20"
                                                                                                    wire:click="addCPDays"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#blue-plus">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                <svg aria-label="Delete"
                                                                                                    width="20"
                                                                                                    height="20"
                                                                                                    wire:click="removeCPDays({{ $index }})"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#blue-delete-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                                {{-- <div class="mb-2">
                                                                                    <label class="form-label input-sm text-sm"
                                                                                        for="invoice-submissionDay">
                                                                                        Invoice Submission Day
                                                                                    </label>
                                                                                    <div
                                                                                        class="d-flex gap-1 align-items-center">
                                                                                        <select id="invoice-submissionDay"
                                                                                            class="form-select">
                                                                                            <option>14th</option>
                                                                                        </select>
                                                                                        <svg aria-label="Add" width="20" height="20"
                                                                                            viewBox="0 0 20 20" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#blue-plus">
                                                                                            </use>
                                                                                        </svg>
                                                                                        <svg aria-label="Delete" width="20" height="20"
                                                                                            viewBox="0 0 20 20" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#blue-delete-icon">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div> --}}
                                                                                <div class="mb-2">
                                                                                    <label
                                                                                        class="form-label input-sm text-sm"
                                                                                        for="remittance-release-days">
                                                                                        Remittance Release
                                                                                    </label>
                                                                                    <select
                                                                                        id="remittance-release-days"
                                                                                        wire:model.defer='contractProviders.select-days.remittance_release'
                                                                                        class="form-select">
                                                                                        @for ($i = 1; $i < 31; $i++)
                                                                                            <option
                                                                                                value={{ $i }}>
                                                                                                {{ $i }}
                                                                                                Days</option>
                                                                                        @endfor

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- End: Contract Providers --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- End: Right Column --}}
                                                    </div>
                                                    <div class="between-section-segment-spacing">
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-4 d-flex align-items-center">
                                                                <div class="form-check form-switch mb-0">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        onclick="toggleItems('customer-billing')"
                                                                        role="switch"
                                                                        wire:model.defer="configuration.customer_billing"
                                                                        aria-label="Toggle Customer Billing"
                                                                        id="customerBilling">

                                                                </div>

                                                                <label class="form-label mb-0 ">Customer
                                                                    Billing</label>
                                                            </div>
                                                            <div class="col-lg-12 mb-4 customer-billing"
                                                                @if (!$configuration['customer_billing']) style="display:none" @endif>
                                                                <label class="form-label" for="billingSchedule">
                                                                    Billing Schedule (Days After Invoice) <br>Net
                                                                </label>
                                                                <div class="col-3 d-flex gap-2 align-items-center">
                                                                    <input class="form-control" type="number"
                                                                        wire:model.defer="configuration.billing_days"
                                                                        id="billingSchedule" placeholder="10">
                                                                    <span>Days</span>
                                                                    @error('configuration.billing_days')
                                                                        <span class="d-inline-block invalid-feedback mt-2">
                                                                            {{ $message }}
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="between-section-segment-spacing">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h3>Service Agreements / Terms of Service</h3>
                                                                <div class="row">
                                                                    <div class="col-lg-6 mb-4">
                                                                        <label class="form-label"
                                                                            for="serviceAgreementsUpload">
                                                                            Upload File
                                                                        </label>
                                                                        <input class="form-control" type="file"
                                                                            wire:model.defer="configuration.service_agreements_file"
                                                                            id="serviceAgreementsUpload">
                                                                    </div>
                                                                    <div class="col-lg-6 mb-4">
                                                                        <label class="form-label"
                                                                            for="serviceAgreementsURL">
                                                                            URL Link
                                                                        </label>
                                                                        <input type="url" name=""
                                                                            class="form-control"
                                                                            wire:model.defer="configuration.service_url_link"
                                                                            placeholder="Enter URL link"
                                                                            id="serviceAgreementsURL">
                                                                        @error('configuration.service_url_link')
                                                                            <span
                                                                                class="d-inline-block invalid-feedback mt-2">
                                                                                {{ $message }}
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-lg-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        id="attachSendQuotes" name="attachSendQuotes"
                                                                        type="checkbox"
                                                                        wire:model.defer="configuration.send_qoutes"
                                                                        tabindex="" />
                                                                    <label class="form-check-label"
                                                                        for="attachSendQuotes">Attach
                                                                        and Send with Quotes</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        id="acknowledgeInitialLogin"
                                                                        wire:model.defer="configuration.customer_approve_on_login"
                                                                        name="acknowledgeInitialLogin" type="checkbox"
                                                                        tabindex="" />
                                                                    <label class="form-check-label"
                                                                        for="acknowledgeInitialLogin">Require Customer
                                                                        to
                                                                        Acknowledge on Initial Login</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="between-section-segment-spacing">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h3>Privacy Policy</h3>
                                                                <div class="row">
                                                                    <div class="col-lg-6 mb-4">
                                                                        <label class="form-label">
                                                                            Upload File
                                                                        </label>
                                                                        <input class="form-control" type="file"
                                                                            wire:model.defer="configuration.policy_file"
                                                                            aria-label="Upload File">
                                                                    </div>
                                                                    <div class="col-lg-6 mb-4">
                                                                        <label class="form-label">
                                                                            URL Link
                                                                        </label>
                                                                        <input type="url" name=""
                                                                            class="form-control"
                                                                            wire:model.defer="configuration.policy_link"
                                                                            placeholder="Enter URL link"
                                                                            aria-label="Enter URL Link">
                                                                        @error('configuration.policy_link')
                                                                            <span
                                                                                class="d-inline-block invalid-feedback mt-2">
                                                                                {{ $message }}
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-lg-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        id="add-to-customer-drive"
                                                                        name="customerDrive"
                                                                        wire:model.defer="configuration.customer_drive"
                                                                        type="checkbox" tabindex=""
                                                                        onclick="toggleItems('privacy-policy-cd')" />
                                                                    <label class="form-check-label"
                                                                        for="add-to-customer-drive">Add
                                                                        to Customer Drive</label>
                                                                </div>
                                                                <div class="form-check mx-4 privacy-policy-cd"
                                                                    @if ($configuration['customer_drive'] == false) style="display:none" @endif>
                                                                    <input class="form-check-input"
                                                                        wire:model.defer="configuration.cd_show_policy_customer"
                                                                        id="acknowledge-Initial-Logincustomer-Drive"
                                                                        name="acknowledgeInitialLogincustomerDrive"
                                                                        type="checkbox" tabindex="" />
                                                                    <label class="form-check-label"
                                                                        for="acknowledge-Initial-Logincustomer-Drive">Require
                                                                        Customer to Acknowledge on Initial Login</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        id="provider-Drive"
                                                                        wire:model.defer="configuration.provider_drive"
                                                                        name="providerDrive" type="checkbox"
                                                                        tabindex=""
                                                                        onclick="toggleItems('privacy-policy-pd')" />
                                                                    <label class="form-check-label"
                                                                        for="provider-Drive">Add
                                                                        to
                                                                        Provider Drive</label>
                                                                </div>
                                                                <div class="form-check mx-4 privacy-policy-pd"
                                                                    @if ($configuration['provider_drive'] == false) style="display:none" @endif>
                                                                    <input class="form-check-input"
                                                                        id="acknowledge-Initial-Loginprovider-Drive"
                                                                        wire:model.defer="configuration.pd_show_policy_customer"
                                                                        name="acknowledgeInitialLoginproviderDrive"
                                                                        type="checkbox" tabindex="" />
                                                                    <label class="form-check-label"
                                                                        for="acknowledge-Initial-Loginprovider-Drive">Require
                                                                        Customer to Acknowledge on Initial Login</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Duplicate Block -->

                                                    <div class="row between-section-segment-spacing">
                                                        <div class="col-lg-12 mb-4">
                                                            <h3>Additional Policies</h3>
                                                            @foreach ($policies as $index => $policy)
                                                                <div class="duplicate-block mb-3">
                                                                    <div class="d-flex justify-content-between">
                                                                        <h3 class="text-primary">Policy
                                                                            {{ $loop->index + 1 }}</h3>
                                                                        <div class="align-items-center gap-2">
                                                                            <a wire:click.prevent="removePolicy({{ $index }})"
                                                                                href="#" title="Delete"
                                                                                aria-label="Delete"
                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                <svg aria-label="Delete"
                                                                                    class="delete-icon" width="20"
                                                                                    height="20" viewBox="0 0 20 20"
                                                                                    fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <use
                                                                                        xlink:href="/css/sprite.svg#delete-icon">
                                                                                    </use>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 mb-4">
                                                                            <label class="form-label"
                                                                                for="privacyPolicyTitle">
                                                                                Policy Title
                                                                            </label>
                                                                            <input type="" name=""
                                                                                class="form-control"
                                                                                placeholder="Enter Title"
                                                                                id="privacyPolicyTitle"
                                                                                wire:key="title-{{ $index }}"
                                                                                wire:model.defer="policies.{{ $index }}.title">
                                                                            @error('policies.' . $index . '.title')
                                                                                <span
                                                                                    class="d-inline-block invalid-feedback mt-2">
                                                                                    {{ $message }}

                                                                                </span>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="col-lg-6 mb-4">
                                                                            <label class="form-label"
                                                                                for="privacyPolicyUpload">
                                                                                Upload File
                                                                            </label>
                                                                            <input class="form-control" type="file"
                                                                                id="privacyPolicyUpload"
                                                                                wire:key="upload-{{ $index }}"
                                                                                wire:model.defer="policies.{{ $index }}.file">

                                                                        </div>
                                                                        <div class="col-lg-6 mb-4">
                                                                            <label class="form-label" for="URL-Link">
                                                                                URL Link
                                                                            </label>
                                                                            <input type="url" name=""
                                                                                class="form-control"
                                                                                placeholder="Enter URL link"
                                                                                id="URL-Link"
                                                                                wire:key="url-{{ $index }}"
                                                                                wire:model.defer="policies.{{ $index }}.url">
                                                                            @error('policies.' . $index . '.url')
                                                                                <span
                                                                                    class="d-inline-block invalid-feedback mt-2">
                                                                                    The policie url must be a valid URL.

                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                id="customerDrive"
                                                                                name="customerDrive"
                                                                                onclick="toggleItems('policies-cd-{{ $index }}')"
                                                                                type="checkbox" tabindex=""
                                                                                wire:key="drive_customer-{{ $index }}"
                                                                                wire:model.defer="policies.{{ $index }}.customer_drive" />
                                                                            <label class="form-check-label"
                                                                                for="customerDrive">Add
                                                                                to Customer Drive</label>
                                                                        </div>
                                                                        <div class="form-check mx-4  policies-cd-{{ $index }}"
                                                                            @if ($policies[$index]['customer_drive'] == false) style="display:none" @endif>
                                                                            <input class="form-check-input"
                                                                                id="acknowledgeInitialLogincustomerDrive"
                                                                                name="acknowledgeInitialLogincustomerDrive"
                                                                                type="checkbox" tabindex=""
                                                                                wire:key="intiallogincustomer-{{ $index }}"
                                                                                wire:model.defer="policies.{{ $index }}.cd_show_policy_customer" />
                                                                            <label class="form-check-label"
                                                                                for="acknowledgeInitialLogincustomerDrive">Require
                                                                                Customer to Acknowledge on Initial
                                                                                Login</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                id="providerDrive"
                                                                                name="providerDrive"
                                                                                onclick="toggleItems('policies-pd-{{ $index }}')"
                                                                                type="checkbox" tabindex=""
                                                                                wire:key="providerdrive-{{ $index }}"
                                                                                wire:model.defer="policies.{{ $index }}.provider_drive" />
                                                                            <label class="form-check-label"
                                                                                for="providerDrive">Add
                                                                                to Provider Drive</label>
                                                                        </div>
                                                                        <div class="form-check mx-4 policies-pd-{{ $index }}"
                                                                            @if ($policies[$index]['provider_drive'] == false) style="display:none" @endif>
                                                                            <input class="form-check-input "
                                                                                id="acknowledgeInitialLoginproviderDrive"
                                                                                name="acknowledgeInitialLoginproviderDrive"
                                                                                type="checkbox" tabindex=""
                                                                                wire:key="intialloginprovider-{{ $index }}"
                                                                                wire:model.defer="policies.{{ $index }}.pd_show_policy_customer" />
                                                                            <label class="form-check-label"
                                                                                for="acknowledgeInitialLoginproviderDrive">Require
                                                                                Customer to Acknowledge on Initial
                                                                                Login</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                            <div class="row between-section-segment-spacing">
                                                                <div class="col-lg-12 text-lg-end mt-2">
                                                                    <button type="button" id="payments"
                                                                        class="btn btn-secondary btn-custom rounded"
                                                                        wire:click.prevent="addPolicy">
                                                                        <svg class="me-1" aria-hidden="true" aria-label="Add Policy" width="15"
                                                    height="15" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                                    <use xlink:href="/css/common-icons.svg#blueplus">
                                                    </use>
                                                </svg>
                                                                     <span class="btn-text">

                                                                         Add Policy
                                                                     </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <h3>Request Feedback</h3>
                                                                <div class="col-lg-12">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            wire:model.defer="feedback.provider_about_consumer"
                                                                            id="customer-Drive" name="customerDrive"
                                                                            type="checkbox" tabindex="" />
                                                                        <label class="form-check-label"
                                                                            for="customer-Drive">Provider about
                                                                            consumer</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            id="acknowledge-Initial-Login-customer-Drive"
                                                                            wire:model.defer="feedback.provider_about_team_providers"
                                                                            name="acknowledgeInitialLogincustomerDrive"
                                                                            type="checkbox" tabindex="" />
                                                                        <label class="form-check-label"
                                                                            for="acknowledge-Initial-Login-customer-Drive">Provider
                                                                            about team providers</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            id="consumerDrive" name="providerDrive"
                                                                            wire:model.defer="feedback.consumer_about_provider"
                                                                            type="checkbox" tabindex="" />
                                                                        <label class="form-check-label"
                                                                            for="consumerDrive">Consumer about
                                                                            provider</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            id="Requesteraboutprovider"
                                                                            name=""
                                                                            wire:model.defer="feedback.requester_about_provider"
                                                                            type="checkbox" tabindex="" />
                                                                        <label class="form-check-label"
                                                                            for="Requesteraboutprovider">Requester
                                                                            about
                                                                            provider</label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Duplicate Block -->
                                                    <!-- Form Actions -->
                                                    <div
                                                        class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                                        <button type="button"
                                                            class="btn btn-outline-dark rounded mx-2"
                                                            x-on:click="$wire.switch('business-hours')"
                                                            wire:click.prevent="getBusinessSchedule()">Back</button>
                                                        <button type="submit"
                                                            x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });"
                                                            wire:click.prevent="save(1)"
                                                            class="btn btn-primary rounded">Submit</button>
                                                    </div><!-- /Form Actions -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        @endif
                    </div>
                    <!-- END: Steps -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@push('scripts')
    <script>
        function toggleItems(classname) {
            var x = document.getElementsByClassName(classname);
            for (var i = 0; i < x.length; i++) {

                if (x[i].style.display === "none") {
                    x[i].style.display = "block";
                } else {
                    x[i].style.display = "none";

                }

            }
        }

        function showSelectedItems(classname, parentClass) {
            var x = document.getElementsByClassName(parentClass);
            for (var i = 0; i < x.length; i++) {
                if (x[i].classList.contains(classname))
                    x[i].style.display = "block";
                else
                    x[i].style.display = "none";
            }

        }
        // Function to dispatch the event on each datepicker element
        function triggerEventOnDatepicker(element) {
            const inputEvent = new Event('input', {
                bubbles: true,
                cancelable: true,
            });
            // Dispatch the event on the element
            element.dispatchEvent(inputEvent);
        }


        function updateVal(attrName, val) {
            if (attrName == 'Days') {
                let datepickers = document.getElementsByClassName("js-single-date-picker");
                // Loop through the datepickers and trigger the event on each of them
                for (let i = 0; i < datepickers.length; i++) {
                    triggerEventOnDatepicker(datepickers[i]);
                }
            }
            if (attrName == 'select-days')
                Livewire.emit('updateDay', val);
            if (attrName != 'address.country')
                Livewire.emit('updateVal', attrName, val);
        }

        $('.js-single-date-picker').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoApply: true
        });
        $('.js-single-date-picker').attr("placeholder", "MM/DD/YYYY");

        $('.js-single-date-picker').on('apply.daterangepicker', function(ev, picker) {
            console.log($(this).val());
            updateVal($(this).attr('id'), $(this).val());
        });
        document.addEventListener('refreshDatePickers', function(event) {

            $('.js-single-date-picker').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                autoApply: true
            });
            $('.js-single-date-picker').attr("placeholder", "MM/DD/YYYY");
            $('.js-single-date-picker').on('apply.daterangepicker', function(ev, picker) {
                console.log($(this).val());
                updateVal($(this).attr('id'), $(this).val());
            });

        });
    </script>
@endpush
