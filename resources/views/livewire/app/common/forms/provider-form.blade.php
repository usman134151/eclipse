<div x-data="{ addDocument: false, addNew: false, associateservice: false, pendingCredentials: false }">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    {{-- BEGIN: Content --}}
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        @if ($isProvider)
                            My Profile
                        @else
                            {{ $label }} Provider
                        @endif
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">

                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">
                                    @if ($isProvider)
                                        Settings
                                    @else
                                        Providers
                                    @endif
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                @if ($isProvider)
                                    Edit Profile
                                @else
                                    {{ $label }} Provider
                                @endif
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
                {{-- BEGIN: Steps --}}
                <div x-data="{ tab: @entangle('component') }" id="tab_wrapper">
                    {{-- Nav tabs --}}
                    {{-- START : Nav Hidden in Provider Panel --}}
                    @if (!$isProvider)
                        <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link {{ $profileActive }}"
                                    :class="{ 'active': tab === 'profile' }" @click.prevent="tab = 'profile'"
                                    id="user-profile-tab" role="tab"
                                    wire:click.prevent="setStep(1,'profileActive','profile');
                                aria-controls="user-profile"
                                    aria-selected="true"><span class="number">1</span> Provider
                                    info</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                @if ($user->name)
                                    <a href="#" class="nav-link {{ $serviceActive }}"
                                        :class="{ 'active': tab === 'provider-service' }"
                                        @click.prevent="tab = 'provider-service'" id="provider-service-tab"
                                        role="tab" wire:click.prevent="save(0)" aria-controls="provider-service"
                                        aria-selected="false"><span class="number">2</span>Provider Service Profile</a>
                                @else
                                    <div class="nav-link" title="Please fill step 1 to proceed">

                                        <span class="number">2</span>
                                        Provider Service Profile
                                    </div>
                                @endif
                            </li>
                            <li class="nav-item" role="presentation">
                                @if ($user->name)
                                    <a href="#" class="nav-link {{ $documentActive }}"
                                        :class="{ 'active': tab === 'upload-document' }"
                                        @click.prevent="tab = 'upload-document'" id="upload-document-tab" role="tab"
                                        wire:click.prevent="setStep(3,'documentActive','upload-document');
                                aria-controls="upload-document"
                                        aria-selected="false"><span class="number">3</span>
                                        Upload Document</a>
                                @else
                                    <div class="nav-link" title="Please fill step 1 to proceed">

                                        <span class="number">3</span>
                                        Upload Document
                                    </div>
                                @endif
                            </li>
                            @if ($userdetail['provider_type'] == 'staff_provider')
                                <li class="nav-item" role="presentation">
                                    <a href="javascript:void(0)" class="nav-link {{ $scheduleActive }}"
                                        :class="{ 'active': tab === 'schedule' }" @click.prevent="tab = 'schedule'"
                                        id="schedule-tab" role="tab"
                                        wire:click.prevent="setStep(4,'scheduleActive','schedule');

                                aria-controls="schedule"
                                        aria-selected="true">

                                        <span class="number">4</span>
                                        Provider Schedule
                                    </a>
                                </li>
                            @endif


                        </ul>
                    @endif
                    {{-- END : Nav Hidden in Provider Panel --}}

                    {{-- Tab panes --}}
                    <div class="tab-content {{ $isProvider ? 'mt-5' : '' }}">
                        {{-- BEGIN: Profile --}}
                        @if ($step == 1)

                            <div class="tab-pane fade" :class="{ 'active show': tab === 'profile' }" id="user-profile"
                                role="tabpanel" aria-labelledby="user-profile-tab" tabindex="0"
                                x-show="tab === 'profile'">
                                {{-- Tab Panes --}}
                                {{-- updated by shanila to add csrf and add form tag --}}

                                <div class="row mt-2 mb-5">
                                    {{-- BEGIN: Profile --}}
                                    <div class="col-12 text-center">
                                        <div class="provider_image_panel">
                                            <div class="provider_image">
                                                @if ($image != null)
                                                    <img class="user_img cropfile"
                                                        src="{{ '/tenant' . tenant('id') . '/app/livewire-tmp/' . $image->getFilename() }}">
                                                @else
                                                    <img class="user_img cropfile" aria-label="Upload Profile Picture"
                                                        src="{{ $userdetail['profile_pic'] == null ? '/tenant-resources/images/img-placeholder-document.jpg' : url($userdetail['profile_pic']) }}">
                                                @endif
                                                <div class="input--file">
                                                    <span>
                                                        <img src="https://production-qa.eclipsescheduling.com/images/camera_icon.png"
                                                            alt="">
                                                    </span>
                                                    <label for="cropfile" class="form-label visually-hidden">
                                                        Upload Profile Picture</label>
                                                    <input wire:model="image" class="form-control inputFile"
                                                        accept="image/*" id="cropfile" name="image"
                                                        type="file" aria-invalid="false">
                                                </div>
                                                @error('image')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <h2>Provider Information</h2>
                                    </div>
                                    <div class="row between-section-segment-spacing">
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="f-name">
                                                First Name
                                                <span class="mandatory" aria-hidden="true">
                                                    *
                                                </span>
                                            </label>
                                            <input type="text" id="f-name" class="form-control" name="f-name"
                                                placeholder="Enter First Name" required aria-required="true"
                                                wire:model.defer="user.first_name" />
                                            @error('user.first_name')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-4 ps-lg-5">
                                            <label class="form-label" for="l-name">
                                                Last Name
                                                <span class="mandatory" aria-hidden="true">
                                                    *
                                                </span>
                                            </label>
                                            <input type="text" id="l-name" class="form-control" name="l-name"
                                                placeholder="Enter Last Name" required aria-required="true"
                                                wire:model.defer="user.last_name" />
                                            @error('user.last_name')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="pronouns-column">
                                                Pronouns
                                            </label>
                                            <input type="text" id="pronouns-column" class="form-control"
                                                placeholder="Enter Pronouns" name="pronouns"
                                                wire:model.defer="userdetail.title" />
                                            @error('userdetail.title')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 ps-lg-5 mb-4">
                                            <label class="form-label" for="">
                                                Date of Birth
                                            </label>
                                            <div class="d-flex align-items-center w-100">
                                                <div class="position-relative flex-grow-1">
                                                    <input type="text" class="form-control js-single-date"
                                                        placeholder="Select Date of Birth" aria-label=""
                                                        aria-describedby="" wire:model.defer="user.user_dob"
                                                        name="user_dob" id="user_dob">
                                                    <!-- Begin : it will be replaced with livewire module-->
                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                    <svg aria-label="Date of Birth" class="icon-date" width="20"
                                                        height="21" viewBox="0 0 20 21" fill="currentColor">
                                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                        </use>
                                                    </svg>


                                                </div>

                                                <button type="button" class="btn px-2">
                                                    <svg aria-label="show" width="24" height="17"
                                                        viewBox="0 0 24 17" fill="currentColor">
                                                        <use xlink:href="/css/common-icons.svg#eye-icon">
                                                        </use>
                                                    </svg>

                                                </button>


                                            </div>
                                            @error('user.user_dob')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <label class="form-label mb-lg-0" for="gender-column">
                                                    Gender
                                                </label>
                                                <a @click="addNew = true" href="#" class="fw-bold">
                                                    <small>
                                                        {{-- Updated by Shanila to Add svg icon
                                                                <svg aria-label="Add New" class="me-1" width="20" height="21"
                                                                    viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#add-new"></use>
                                                                </svg>
                                                                End of update by Shanila

                                                                Add New  --}}
                                                    </small>
                                                </a>
                                            </div>
                                            {!! $setupValues['gender']['rendered'] !!}
                                        </div>
                                        <div class="col-lg-6 mb-4 ps-lg-5">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <label class="form-label" for="ethnicity-column">
                                                    Ethnicity
                                                </label>
                                                <a @click="addNew = true" href="#" class="fw-bold">
                                                    <small>
                                                        {{--
                                                                <svg aria-label="Add New" class="me-1" width="20" height="21"
                                                                    viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#add-new"></use>
                                                                </svg>

                                                                Add New --}}
                                                    </small>
                                                </a>
                                            </div>
                                            {!! $setupValues['ethnicities']['rendered'] !!}
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="providerID-column">
                                                Provider ID
                                            </label>
                                            <input type="text" id="providerID-column" class="form-control"
                                                {{ $isProvider ? 'disabled' : '' }} name="providerID-column"
                                                placeholder="Enter Provider ID"
                                                wire:model.defer="userdetail.user_number" />
                                        </div>
                                        @if (!$isProvider)

                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                {{-- hide in provider panel --}}

                                                <label class="form-label mb-3" for="assign-provider-teams">
                                                    Assign Provider Teams
                                                </label>
                                                <button type="button" wire:click="updateData"
                                                    class="btn btn-has-icon px-0 btn-multiselect-popup d-flex align-items-center gap-1"
                                                    data-bs-toggle="modal" data-bs-target="#AssignproviderTeamModal">
                                                    <div>
                                                        {{-- Updated by Shanila to Add svg icon --}}
                                                        <svg aria-label=" Add Provider Teams" width="25"
                                                            height="18" viewBox="0 0 25 18" fill="currentColor" stroke="currentColor">
                                                            <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                            </use>
                                                        </svg>

                                                    </div>
                                                    <div class="text-primary fw-semibold">
                                                        Add Provider Teams
                                                    </div>
                                                </button>
                                                <div>
                                                    @if (count($teamNames) > 0)
                                                        <b>Selected Team(s) : </b>
                                                        @foreach ($teamNames as $key => $team)
                                                            {{ $team }}
                                                            @if ($key != count($teamNames) - 1)
                                                                ,
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </div>


                                            </div>
                                        @endif


                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'ps' : 'pe' }}-lg-5">
                                            <label class="form-label" for="email">
                                                Email
                                                <span class="mandatory" aria-hidden="true">
                                                    *
                                                </span>
                                            </label>
                                            <input type="text" id="email" class="form-control" name="email"
                                                placeholder="Enter Email" required aria-required="true"
                                                wire:model.defer="user.email" />
                                            @error('user.email')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'pe' : 'ps' }}-lg-5">
                                            <label class="form-label" for="phone">Phone Number</label>
                                            <input type="text" id="phone" class="form-control" name="phone"
                                                placeholder="Enter Phone Number"
                                                wire:model.defer="userdetail.phone" />
                                            @error('userdetail.phone')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'ps' : 'pe' }}-lg-5">
                                            <label class="form-label" for="country">
                                                Country
                                            </label>
                                            {!! $setupValues['countries']['rendered'] !!}
                                        </div>
                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'pe' : 'ps' }}-lg-5">
                                            <div class="mb-4">
                                                <label class="form-label" for="state">State / Province</label>
                                                <input type="text" id="state" class="form-control"
                                                    name="state" placeholder="Enter State Name" required
                                                    aria-required="true" wire:model.defer="userdetail.state" />
                                                @error('userdetail.state')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>

                                        </div>
                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'ps' : 'pe' }}-lg-5">
                                            <div class="mb-4">
                                                <label class="form-label" for="city">City</label>
                                                <input type="text" id="city" class="form-control"
                                                    name="city" placeholder="Enter City Name" required
                                                    aria-required="true" wire:model.defer="userdetail.city" />
                                                @error('userdetail.city')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'pe' : 'ps' }}-lg-5">
                                            <label class="form-label" for="zip-code">
                                                Zip Code
                                            </label>
                                            <input type="text" id="zip-code" class="form-control" name="zipCode"
                                                placeholder="Enter Zip Code" wire:model.defer="userdetail.zip" />
                                            @error('userdetail.zip')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'ps' : 'pe' }}-lg-5">

                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="form-label" for="address-line-1">
                                                    Address Line 1
                                                </label>

                                                <a class="fw-bold {{ trim($userdetail['address_line1']) == null ? 'hidden' : '' }}"
                                                    target="_blank"
                                                    href="https://www.google.com/maps/search/?api=1&query={{ str_replace(' ', '+', $userdetail['address_line1'] . ' ' . $userdetail['address_line2'] . ' ' . $userdetail['city'] . ' ' . $userdetail['state'] . ' ' . $userdetail['country']) }}">
                                                    <small>
                                                        Open in Maps
                                                    </small>
                                                </a>
                                            </div>

                                            <input type="text" id="billing_address_form" class="form-control"
                                                name="address-line-1" placeholder="Enter Address Line 1"
                                                wire:model.defer="userdetail.address_line1" />
                                            <div class="">
                                                @error('userdetail.address_line1')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                @enderror


                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'pe' : 'ps' }}-lg-5">
                                            <label class="form-label" for="address-line-2">
                                                Address Line 2
                                            </label>
                                            <input type="text" id="address-line-2" class="form-control"
                                                name="addressLine2" placeholder="Enter Address Line 2"
                                                wire:model.defer="userdetail.address_line2" />
                                            @error('userdetail.address_line2')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'ps' : 'pe' }}-lg-5">
                                            <label class="form-label" for="start-date-column">
                                                Start Date
                                            </label>
                                            <div class="d-flex align-items-center w-100">
                                                <div class="position-relative flex-grow-1">
                                                    <input type="text" class="form-control js-single-date"
                                                        {{ $isProvider ? 'disabled' : '' }} placeholder="Select Date"
                                                        aria-label="Start Date" aria-describedby="" id="start_date">
                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                    <svg aria-label="Start Date" class="icon-date" width="20"
                                                        height="21" viewBox="0 0 20 21" fill="currentColor">
                                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                        </use>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'pe' : 'ps' }}-lg-5">
                                            <label class="form-label" for="end-date">
                                                End Date
                                            </label>
                                            <div class="d-flex align-items-center w-100">
                                                <div class="position-relative flex-grow-1">
                                                    <input type="text" class="form-control js-single-date"
                                                        {{ $isProvider ? 'disabled' : '' }} placeholder="Select Date"
                                                        aria-label="End Date" aria-describedby="" id="end-date-">
                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                    <svg aria-label="End Date" class="icon-date" width="20"
                                                        height="21" viewBox="0 0 20 21" fill="currentColor">
                                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                        </use>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'ps' : 'pe' }}-lg-5">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="form-label" for="education">
                                                    Education
                                                </label>
                                                <a @click="addDocument = true" href="#"
                                                    class="fw-bold {{ $isProvider ? 'hidden' : '' }}">
                                                    <small>
                                                        <svg aria-label="Upload Supporting Documents" class="me-1"
                                                            width="21" height="16" viewBox="0 0 21 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z"
                                                                fill="#0A1E46" />
                                                        </svg>
                                                        Upload Supporting Documents
                                                    </small>
                                                </a>
                                            </div>
                                            <input type="text" id="education" class="form-control"
                                                {{ $isProvider ? 'disabled' : '' }} name="education-column"
                                                placeholder="Enter Education"
                                                wire:model.defer="userdetail.education" />
                                            @error('userdetail.education')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="col-lg-6 mb-4 {{ $isProvider ? 'pe' : 'ps' }}-lg-5">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <label class="form-label mb-lg-0" for="certification">
                                                    Certification(s)
                                                </label>
                                                <div class="d-flex align-items-center gap-3">
                                                    <a @click="addNew = true" href="#" class="fw-bold">
                                                        <small>
                                                            {{--
                                                                    <svg aria-label="Add New" class="me-1" width="20"
                                                                        height="21" viewBox="0 0 20 21">
                                                                        <use xlink:href="/css/common-icons.svg#add-new"></use>
                                                                    </svg>

                                                                    Add New  --}}
                                                        </small>
                                                    </a>
                                                    <a @click="addDocument = true" href="#"
                                                        class="fw-bold {{ $isProvider ? 'hidden' : '' }}">
                                                        <small>
                                                            <svg aria-label="Upload Supporting Documents"
                                                                class="me-1" width="21" height="16"
                                                                viewBox="0 0 21 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z"
                                                                    fill="#0A1E46" />
                                                            </svg>
                                                            Upload Supporting Documents
                                                        </small>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                {{-- updated by maarooshaa to add multiselectdropdown --}}
                                                {!! $setupValues['certifications']['rendered'] !!}
                                                {{-- ended updated --}}
                                            </div>

                                            @if (!$isProvider)
                                                {{-- hide in provider panel --}}

                                                <div class="mt-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input"
                                                            wire:model.defer="provider_details.show_as_certified"
                                                            type="checkbox" id="show_as_certified">
                                                        <label class="form-check-label" for="show_as_certified">
                                                            Display Provider as Certified
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        @if (!$isProvider)
                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="form-label" for="user_experience">
                                                        Experience
                                                    </label>
                                                    <a @click="addDocument = true" href="#" class="fw-bold">
                                                        <small>
                                                            <svg aria-label="Upload Supporting Documents"
                                                                class="me-1" width="21" height="16"
                                                                viewBox="0 0 21 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z"
                                                                    fill="#0A1E46" />
                                                            </svg>
                                                            Upload Supporting Documents
                                                        </small>
                                                    </a>
                                                </div>
                                                <textarea class="form-control" rows="3" cols="3" placeholder="" name="user_experience"
                                                    id="user_experience" wire:model.defer="userdetail.user_experience"></textarea>
                                                @error('userdetail.user_experience')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        @endif
                                        <div class="col-lg-6 mb-4 ps-lg-5">
                                            <label class="form-label" for="provider-introduction">
                                                Provider Introduction
                                            </label>
                                            <textarea class="form-control" rows="3" cols="3" placeholder="" name="provider-introduction"
                                                id="provider-introduction" wire:model.defer="userdetail.user_introduction"></textarea>
                                            @error('userdetail.user_introduction')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="preferred-language-column">
                                                Preferred Language
                                            </label>
                                            {!! $setupValues['languages']['rendered'] !!}
                                        </div>
                                        <div class="col-lg-6 ps-lg-5">
                                            <label class="form-label" for="provider-introduction-media">
                                                Provider Introduction Media
                                            </label>
                                            <input type="file" id="provider-introduction-media"
                                                class="form-control" wire:model.defer="media_file"
                                                name="provider_introduction_media" placeholder="Add Media Document" />
                                            @error('media_file')
                                                <span
                                                    class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                                            @enderror

                                            {{-- displays existing document name --}}
                                            @if ($userdetail['user_introduction_file'] != null)
                                                <p class="mt-2"> <b>Uploaded Document </b><br>
                                                    <a href="{{ $userdetail['user_introduction_file'] }}"
                                                        target="_blank" aria-label="file">
                                                        {{ basename($userdetail['user_introduction_file']) }}
                                                    </a>
                                                </p>
                                            @endif
                                        </div>
                                        @if (!$isProvider)

                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                <label class="form-label" for="preferred-colleagues-column">
                                                    Preferred Colleagues
                                                </label>
                                                {{-- {!! $setupValues['favored_users']['rendered'] !!} --}}
                                                <select name="favored_users" id="favored_users"
                                                    class=" select2 form-select "
                                                    wire:model.defer="userdetail.favored_users" tabindex="6"multiple
                                                    aria-label="Select favored users">
                                                    <option>Select an option</option>
                                                    @foreach ($providers as $provider)
                                                        <option value="{{ $provider->id }}">{{ $provider->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6 ps-lg-5">
                                                <label class="form-label" for="disfavored-colleagues-column">
                                                    Disfavored Colleagues
                                                </label>
                                                <select name="unfavored_users" id="unfavored_users"
                                                    class=" select2 form-select "
                                                    wire:model.defer="userdetail.unfavored_users" tabindex="7"
                                                    multiple aria-label="Select disfavored users">
                                                    <option>Select an option</option>
                                                    @foreach ($providers as $provider)
                                                        <option value="{{ $provider->id }}">{{ $provider->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endif

                                        <div class="col-lg-6 pe-lg-5">
                                            <label class="form-label" for="set-time-zone-column">
                                                Set Time Zone
                                            </label>
                                            {!! $setupValues['timezones']['rendered'] !!}
                                        </div>
                                        @if (!$isProvider)
                                            {{-- hide in provider panel --}}

                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                <label class="form-label" for="payment-settings">
                                                    Payment Settings
                                                </label>
                                                <select class="select2 form-select" id="payment_settings"
                                                    wire:model.defer="userdetail.payment_settings">
                                                    <option>Select your option </option>

                                                    <option value="require_invoices">Require Invoices (Contractors)
                                                    </option>
                                                    <option value="allow_invoices">Allow Invoices </option>
                                                    <option value="no_invoices">No Invoices (Employee)</option>

                                                </select>
                                            </div>
                                            <div class="col-lg-6 pe-lg-5">
                                                <label class="form-label" for="default-remittance-temp">
                                                    Select Default Remittance Template <small>(coming soon)</small>
                                                </label>
                                                <select class="select2 form-select" disabled
                                                    id="default-remittance-temp">
                                                    <option value="Al">
                                                        Select Default Remittance Template
                                                    </option>
                                                </select>
                                            </div>
                                        @endif
                                        @if (!$isProvider)
                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                <label class="form-label" for="tags">Tags</label>
                                                <select data-placeholder="" multiple
                                                    class="form-select  select2 form-select select2-hidden-accessible"
                                                    tabindex="" id="tags-select" aria-label="Select Tags">
                                                    @foreach ($allTags as $tag)
                                                        <option {{ in_array($tag, $tags) ? 'selected' : '' }}
                                                            value="{{ $tag }}">{{ $tag }}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" name="tags-holder" id="tags-holder"
                                                    wire:model.defer="tags">

                                            </div>
                                        @endif
                                        {{-- Input Fields End --}}
                                    </div>
                                    <div class="col-lg-12 d-lg-flex gap-5 justify-content-center between-section-segment-spacing">
                                        <div class="form-check mb-lg-0">
                                            <input class="form-check-input" type="checkbox" value="1" id="email_invitation"
                                                wire:model.defer="email_invitation">
                                            <label class="form-check-label" for="email_invitation">
                                                Send Invitation Email to the Customer
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- Action Buttons - Start --}}
                                <div class="col-12 form-actions">
                                    @if (!$isProvider)
                                        {{-- hide in provider panel --}}
                                        <button type="button" class="btn btn-outline-dark rounded"
                                            wire:click.prevent="showList">
                                            Cancel
                                        </button>
                                    @endif
                                    <button type="submit" class="btn btn-primary rounded" wire:click.prevent="save"
                                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                        Save & Exit
                                    </button>
                                    @if (!$isProvider)
                                        {{-- hide in provider panel --}}
                                        <button type="button" class="btn btn-primary rounded"
                                            wire:click.prevent="save(0)"
                                            x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('provider-service')">
                                            Next
                                        </button>
                                    @endif
                                </div>



                            </div>

                            {{-- END: Profile --}}
                            {{-- BEGIN: Schedule --}}
                        @endif


                        {{-- START : Hidden in Provider Panel --}}
                        @if (!$isProvider)

                            {{-- BEGIN: Provider Service --}}
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'provider-service' }"
                                id="provider-service" role="tabpanel" aria-labelledby="provider-service-tab"
                                tabindex="0" x-show="tab === 'provider-service'">
                                <section id="multiple-column-form">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="row">
                                                <div class="col-md-12 mb-md-2">
                                                    <div class="col-md-12 col-12 mb-md-2">
                                                        <div class="row between-section-segment-spacing">
                                                            <div class="col-lg-12 mb-4">
                                                                <h3>Provider Type</h3>
                                                                <div class="row">
                                                                    <div class="col-12 mb-4">
                                                                        <div class="mb-2">
                                                                            <div
                                                                                class="d-flex align-items-center gap-4">
                                                                                <div>
                                                                                    <div class="form-check mb-0">
                                                                                        <input class="form-check-input"
                                                                                            type="radio"
                                                                                            name="ProviderType"
                                                                                            id="ContractProviderType"
                                                                                            value="contract_provider"
                                                                                            wire:model="userdetail.provider_type"
                                                                                            wire:click="setRate">
                                                                                        <label class="form-check-label"
                                                                                            for="ContractProviderType">
                                                                                            Contract Provider
                                                                                        </label>
                                                                                        {{-- Updated by Shanila to Add
                                                                                        svg
                                                                                        icon
                                                                                        <svg aria-label=" Contract Provider"
                                                                                            width="15" height="16"
                                                                                            viewBox="0 0 15 16">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#fill-question">
                                                                                            </use>
                                                                                        </svg>
                                                                                         End of update by Shanila
                                                                                        --}}
                                                                                    </div>
                                                                                </div>
                                                                                {{-- enabled using steps --}}
                                                                                {{-- <div>
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary px-3 py-1 rounded-lg btn-has-icon px-0 btn-multiselect-popup"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#contractProviderAvailiblityModal">
                                                                                        Availability Schedule
                                                                                    </button>
                                                                                </div> --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-check ">
                                                                            <label class="form-check-label"
                                                                                for="addnewserviceconsumer">Staff
                                                                                Provider</label>
                                                                            <input
                                                                                class="form-check-input show-hidden-content"
                                                                                value="staff_provider"
                                                                                wire:model.defer="userdetail.provider_type"
                                                                                id="addnewserviceconsumer"
                                                                                name="ProviderType" type="radio"
                                                                                tabindex="">

                                                                            <div class="hidden-content mt-3">
                                                                                <div class=" row mt-4  ">
                                                                                    <h4 class="mb-2">
                                                                                        Payout Details
                                                                                    </h4>
                                                                                    <div class="col-8 mb-3">
                                                                                        <div
                                                                                            class="d-flex justify-content-between">
                                                                                            <div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-2">
                                                                                                <input type="number"
                                                                                                    id="staff_provider_rate"
                                                                                                    class="form-control"
                                                                                                    name="staff_provider_rate"
                                                                                                    placeholder="$00:00"
                                                                                                    wire:model.defer="provider_details.staff_provider_rate" />

                                                                                            </div>

                                                                                            <div class="col-3">
                                                                                                <select
                                                                                                    id="staff_provider_rate_type"
                                                                                                    aria-label="Payout Details"
                                                                                                    class="form-select"
                                                                                                    wire:model.defer="provider_details.staff_provider_rate_type">
                                                                                                    <option
                                                                                                        value="per_hour_rate">
                                                                                                        Per Hour Rate
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="salary">
                                                                                                        Salary</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h4 class="mb-2">
                                                                                        Would you like to set a rate for
                                                                                        when this provider
                                                                                        works outside their set
                                                                                        schedule?
                                                                                    </h4>
                                                                                    <div class="d-flex">
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="yes"
                                                                                                wire:model="provider_details.set_rate"
                                                                                                type="radio"
                                                                                                name="set_rate"
                                                                                                id="set_rate"
                                                                                                value="yes"
                                                                                                wire:click="setRate">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="provider-rate-schedule-radio-btn">
                                                                                                Yes
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check ms-4">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="no"
                                                                                                type="radio"
                                                                                                name="set_rate"
                                                                                                wire:model="provider_details.set_rate"
                                                                                                id="set_rate"
                                                                                                value="no"
                                                                                                wire:click="setRate">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="provider-rate-schedule-radio-button">
                                                                                                No
                                                                                            </label>
                                                                                        </div>

                                                                                    </div>




                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row between-section-segment-spacing">
                                                                <div class="col-md-12 col-12 md-2 mt-4">
                                                                    <div class="row">
                                                                        <div class="col-6 mb-4">
                                                                            <h2>Provider Service Profile</h2>
                                                                            <div class="bg-muted rounded p-4">
                                                                                <h5 class="text-primary">
                                                                                    Travel Profile
                                                                                </h5>
                                                                                <div class="col-12 mb-3">
                                                                                    <div
                                                                                        class="d-flex justify-content-between">
                                                                                        <div>
                                                                                            <label
                                                                                                class="form-label-sm"
                                                                                                for="rate-per-mile-to-reimburse">
                                                                                                Rate per unit to
                                                                                                reimburse
                                                                                                provider
                                                                                            </label>
                                                                                        </div>
                                                                                        {{-- <div>
                                                                                        KM
                                                                                        <svg aria-label="Edit"
                                                                                            width="20" height="20"
                                                                                            viewBox="0 0 20 20">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#pencil">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </div> --}}
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-8">
                                                                                            <input type="number"
                                                                                                id="travel_rate_per_unit"
                                                                                                class="form-control"
                                                                                                name="rate-per-mile-to-reimburse"
                                                                                                placeholder="$00:00"
                                                                                                wire:model.defer="provider_details.travel_rate_per_unit" />
                                                                                        </div>
                                                                                        <div class="col-4">
                                                                                            <select
                                                                                                aria-label="Select Distance Unit"
                                                                                                id="travel_rate_unit"
                                                                                                class="form-select"
                                                                                                wire:model.defer="provider_details.travel_rate_unit">
                                                                                                <option value="km">
                                                                                                    KM
                                                                                                </option>
                                                                                                <option value="m">
                                                                                                    Miles</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 mb-2">
                                                                                    <label class="form-label-sm"
                                                                                        for="rate-to-reimburse-compensated-travel-time">
                                                                                        Rate to Reimburse Compensated
                                                                                        Travel
                                                                                        Time
                                                                                        {{-- Updated by Shanila to Add svg
                                                                                    icon --}}
                                                                                        <svg aria-label=" Rate to Reimburse Compensated Travel
                                                                                        Time"
                                                                                            width="15"
                                                                                            height="16"
                                                                                            viewBox="0 0 15 16">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#fill-question">
                                                                                            </use>
                                                                                        </svg>

                                                                                    </label>
                                                                                    <div class="col-lg-8">
                                                                                        <div
                                                                                            class="d-flex align-items-center gap-2">
                                                                                            <div>
                                                                                                <input type="number"
                                                                                                    wire:model.defer="provider_details.rate_for_travel_time"
                                                                                                    id="rate-to-reimburse-compensated-travel-time"
                                                                                                    class="form-control"
                                                                                                    name="rate-to-reimburse-compensated-travel-time"
                                                                                                    placeholder="$00:00" />
                                                                                            </div>
                                                                                            <div>Per hour</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            wire:model.defer="provider_details.same_as_service_rate"
                                                                                            type="checkbox"
                                                                                            id="same_as_service_rate">
                                                                                        <label class="form-check-label"
                                                                                            for="same_as_service_rate">
                                                                                            Same as Service Rate
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 ms-auto mb-3">
                                                                            <label class="form-label-sm mb-2 d-block"
                                                                                for="copy_provider">
                                                                                Copy from Other Provider (coming soon)
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-lg-7">
                                                                                    <select
                                                                                        class="form-select form-select-md rounded"
                                                                                        id="copy_provider">
                                                                                        <option>
                                                                                            Select Provider
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-lg-5">
                                                                                    <a href="#"
                                                                                        class="btn btn-primary btn-sm rounded w-100">
                                                                                        Apply
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <a href="javascript:void(0)" style="display:none"
                                                            @click="associateservice = true" id="serviceIco"
                                                            title="Add Service Rates" aria-label="Add Service Rates"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            <x-icon name="dollar-icon" />
                                                        </a>
                                                        @if ($step == 2)
                                                            @livewire('app.admin.customer.service-catelog', ['showButtons' => false, 'modelId' => $user->id, 'modelType' => 'provider', 'showRates' => $provider_details['set_rate']])
                                                        @endif


                                                    </div>
                                                    <!-- cancel/next (buttons) -->
                                                    <div class="col-12 form-actions">
                                                        <button type="button" class="btn btn-outline-dark rounded"
                                                            wire:click.prevent="setStep(1,'profileActive','profile')"
                                                            x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('profile')">
                                                            Back
                                                        </button>
                                                        <button type="submit" class="btn btn-primary rounded"
                                                            wire:click.prevent="ProviderService"
                                                            x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                            Save & Exit
                                                        </button>
                                                        <button type="button" class="btn btn-primary rounded"
                                                            wire:click.prevent="ProviderService(0)"
                                                            x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('upload-document')">
                                                            Next
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                </section>
                            </div>
                            {{-- END: Provider Service --}}

                            {{-- BEGIN: Upload Document --}}

                            <div class="tab-pane fade" :class="{ 'active show': tab === 'upload-document' }"
                                id="upload-document" role="tabpanel" aria-labelledby="upload-document-tab"
                                tabindex="0" x-show="tab === 'upload-document'">
                                <!-- Basic multiple Column Form section start -->
                                <section id="multiple-column-form">
                                    <div class="row">
                                        <div class="col-12">
                                            @if ($step == 3)
                                                @livewire('app.common.forms.provider-credentials-drive', ['showForm' => true, 'provider_id' => $user->id])
                                            @endif

                                            <div class="col-12 form-actions">
                                                <button type="button" class="btn btn-outline-dark rounded"
                                                    x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('provider-service')"
                                                    wire:click.prevent="setStep(2,'serviceActive','provider-service')">

                                                    Back
                                                </button>
                                                @if ($userdetail['provider_type'] == 'staff_provider')
                                                    <button type="submit" class="btn btn-primary rounded"
                                                        wire:click.prevent="uploadDocument"
                                                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                        Save & Exit
                                                    </button>
                                                    <button type="submit" class="btn btn-primary rounded"
                                                        wire:click.prevent="uploadDocument(0)"
                                                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                        Next
                                                    </button>
                                                @else
                                                    <button type="submit" class="btn btn-primary rounded"
                                                        wire:click.prevent="uploadDocument"
                                                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                        Submit
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            {{-- END: Upload Document --}}

                            {{-- BEGIN: Provider Schedule --}}

                            @if ($userdetail['provider_type'] == 'staff_provider')
                                <div class="tab-pane fade" :class="{ 'active show': tab === 'schedule' }"
                                    id="schedule" role="tabpanel" aria-labelledby="schedule-tab" tabindex="0"
                                    x-show="tab === 'schedule'">
                                    <section id="multiple-column-form">
                                        @livewire('app.common.setup.business-hours-setup', ['model_id' => $user->id, 'model_type' => '3'])
                                        <div class="col-12 form-actions">
                                            <button type="button" class="btn btn-outline-dark rounded px-4 py-2"
                                                wire:click.prevent="setStep(3,'documentActive','upload-document')">
                                                Back
                                            </button>
                                            <button type="submit" class="btn btn-primary rounded px-4 py-2"
                                                wire:click.prevent="saveSchedule"
                                                x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                Save & Exit
                                            </button>

                                        </div>
                                    </section>
                                </div>
                            @endif
                            {{-- END: Provider Schedule --}}

                        @endif
                        {{-- END : Hidden in Provider Panel --}}

                    </div>

                </div>
            </div>
        </div>

    </div>

    @include('panels.services.associated-service')
    @include('panels.common.pending-credentials')


</div>
@push('scripts')
    <script>
        @if ($isProvider)
            $('#certification').attr('disabled', true);
        @endif
        document.addEventListener('hideFields', () => {
            $('#certification').attr('disabled', true);
        });
    </script>
@endpush
