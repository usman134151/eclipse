<div x-data="{addDocument: false , addNew: false}">
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
                    <h1 class="content-header-title float-start mb-0">Add Provider</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- End of update by Shanila --}} </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">
                                    Providers
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Add Provider
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
                    <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'profile' }"
                                @click.prevent="tab = 'profile'" id="user-profile-tab" role="tab"
                                aria-controls="user-profile" aria-selected="true"><span class="number">1</span> Provider
                                info</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'provider-service' }"
                                @click.prevent="tab = 'provider-service'" id="provider-service-tab" role="tab"
                                aria-controls="provider-service" aria-selected="false"><span
                                    class="number">2</span>Provider Service Profile</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'upload-document' }"
                                @click.prevent="tab = 'upload-document'" id="upload-document-tab" role="tab"
                                aria-controls="upload-document" aria-selected="false"><span class="number">3</span>
                                Upload Document</a>
                        </li>
                    </ul>
                    {{-- Tab panes --}}
                    <div class="tab-content">
                        {{-- BEGIN: Profile --}}
                        <div class="tab-pane fade" :class="{ 'active show': tab === 'profile' }" id="user-profile"
                            role="tabpanel" aria-labelledby="user-profile-tab" tabindex="0" x-show="tab === 'profile'">
                            {{-- Tab Panes --}}
                            {{-- updated by shanila to add csrf and add form tag --}}
                            <form class="form">
                                @csrf
                                <div class="row mt-2 mb-5">
                                    {{-- BEGIN: Profile --}}
                                    <div class="col-12 text-center">
                                        <div class="d-inline-block position-relative">
                                            <img src="/tenant/images/portrait/small/avatar-s-9.jpg"
                                                class="img-fluid rounded-circle" alt="Provider Profile Image" />
                                            {{-- <div>
                                                <input class="position-absolute form-control" type="file" />
                                            </div> --}}
                                            <div
                                                class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
                                                <svg aria-label="Upload Picture" width="57" height="57"
                                                    viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/provider.svg#camera"></use>
                                                </svg>
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
                                                placeholder="Enter First Name" required aria-required="true" wire:model.defer="user.first_name"/>
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
                                                placeholder="Enter Last Name" required aria-required="true" wire:model.defer="user.last_name"/>
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
                                                placeholder="Enter Pronouns" name="pronouns" wire:model.defer="userdetail.title"/>
                                        </div>
                                        <div class="col-lg-6 ps-lg-5 mb-4">
                                            <label class="form-label" for="">
                                                Date of Birth
                                            </label>
                                            <div class="d-flex align-items-center w-100">
                                                <div class="position-relative flex-grow-1">
                                                    <input type="text" class="form-control js-single-date"
                                                        placeholder="Select Date of Birth" aria-label=""
                                                        aria-describedby="" wire:model.defer="user.user_dob" name="user_dob" id="user_dob">
                                                    <!-- Begin : it will be replaced with livewire module-->
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="Date" class="icon-date" width="20" height="21"
                                                        viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                </div>
                                                <button type="button" class="btn px-2">
                                                    <!-- Begin : it will be replaced with livewire module-->
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="show" width="24" height="17" viewBox="0 0 24 17">
                                                        <use xlink:href="/css/common-icons.svg#eye-icon">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                </button>
                                            </div>
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
                                            <input type="email" id="providerID-column" class="form-control"
                                                name="providerID-column" placeholder="Enter Provider ID" wire:model.defer="userdetail.user_number" />
                                        </div>
                                        <div class="col-lg-6 mb-4 ps-lg-5">
                                            <label class="form-label mb-3" for="assign-provider-teams">
                                                Assign Provider Teams
                                            </label>
                                            <button type="button"
                                                class="btn btn-has-icon px-0 btn-multiselect-popup d-flex align-items-center gap-1"
                                                data-bs-toggle="modal" data-bs-target="#AssignproviderTeamModal">
                                                <div>
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label=" Add Provider Teams" width="25" height="18"
                                                        viewBox="0 0 25 18">
                                                        <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                </div>
                                                <div class="text-primary fw-semibold">
                                                    Add Provider Teams
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="email">
                                                Email
                                                <span class="mandatory" aria-hidden="true">
                                                    *
                                                </span>
                                            </label>
                                            <input type="text" id="email" class="form-control" name="email"
                                                placeholder="Enter Email" required aria-required="true" wire:model.defer="user.email"/>
                                                @error('user.email')
												<span class="d-inline-block invalid-feedback mt-2">
													{{ $message }}
												</span>
												@enderror    
                                        </div>
                                        <div class="col-lg-6 mb-4 ps-lg-5">
                                            <label class="form-label" for="phone">Phone Number</label>
                                            <input type="text" id="phone" class="form-control" name="phone"
                                                placeholder="Enter Phone Number" wire:model.defer="userdetail.phone"/>
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="country">
                                                Country
                                            </label>
                                            {!! $setupValues['countries']['rendered'] !!}
                                        </div>
                                        <div class="col-lg-6 mb-4 ps-lg-5">
                                            <div class="mb-4">
                                                <label class="form-label" for="state">State / Province</label>
                                                <input type="text" id="state" class="form-control"
                                                    name="state" placeholder="Enter State Name"
                                                    required aria-required="true" wire:model.defer="userdetail.state"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <div class="mb-4">
                                                <label class="form-label" for="city">City</label>
                                                <input type="text" id="city" class="form-control"
                                                    name="city" placeholder="Enter City Name"
                                                    required aria-required="true" wire:model.defer="userdetail.city"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4 ps-lg-5">
                                            <label class="form-label" for="zip-code">
                                                Zip Code
                                            </label>
                                            <input type="text" id="zip-code" class="form-control" name="zipCode"
                                                placeholder="Enter Zip Code" wire:model.defer="userdetail.zip"/>
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="address-line-1">
                                                Address Line 1
                                            </label>
                                            <input type="text" id="address-line-1" class="form-control"
                                                name="address-line-1" placeholder="Enter Address Line 1" wire:model.defer="userdetail.address_line1"/>
                                        </div>
                                        <div class="col-lg-6 mb-4 ps-lg-5">
                                            <label class="form-label" for="address-line-2">
                                                Address Line 2
                                            </label>
                                            <input type="text" id="address-line-2" class="form-control"
                                                name="addressLine2" placeholder="Enter Address Line 2" wire:model.defer="userdetail.address_line2"/>
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="start-date-column">
                                                Start Date
                                            </label>
                                            <div class="d-flex align-items-center w-100">
                                                <div class="position-relative flex-grow-1">
                                                    <input type="text" class="form-control js-single-date"
                                                        placeholder="Select Date" aria-label=""
                                                        aria-describedby="" id="start-date-column">
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="Date" class="icon-date" width="20" height="21"
                                                        viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4 ps-lg-5">
                                            <label class="form-label" for="end-date">
                                                End Date
                                            </label>
                                            <div class="d-flex align-items-center w-100">
                                                <div class="position-relative flex-grow-1">
                                                    <input type="text" class="form-control js-single-date"
                                                        placeholder="Select Date" aria-label="End Date"
                                                        aria-describedby="" id="end-date-">
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="Date" class="icon-date" width="20" height="21"
                                                        viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="form-label" for="education">
                                                    Education
                                                </label>
                                                <a @click="addDocument = true" href="#" class="fw-bold">
                                                    <small>
                                                        <svg aria-label="Upload Supporting Documents" class="me-1" width="21" height="16" viewBox="0 0 21 16"
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
                                                name="education-column" placeholder="Enter Education" wire:model.defer="userdetail.education" />
                                        </div>
                                        <div class="col-lg-6 mb-4 ps-lg-5">
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
                                                    <a @click="addDocument = true" href="#" class="fw-bold">
                                                        <small>
                                                            <svg aria-label="Upload Supporting Documents" class="me-1" width="21" height="16" viewBox="0 0 21 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                {{--ended updated--}}
                                            </div>
                                            <div class="mt-2">
                                                <input class="form-check-input" type="checkbox" value="display-provider"
                                                    id="display-provider">
                                                <label class="form-check-label" for="display-provider">
                                                    Display Provider as Certified
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="form-label" for="experience">
                                                    Experience
                                                </label>
                                                <a @click="addDocument = true" href="#" class="fw-bold">
                                                    <small>
                                                        <svg aria-label="Upload Supporting Documents" class="me-1" width="21" height="16" viewBox="0 0 21 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z"
                                                                fill="#0A1E46" />
                                                        </svg>
                                                        Upload Supporting Documents
                                                    </small>
                                                </a>
                                            </div>
                                            <textarea class="form-control" rows="3" cols="3" placeholder=""
                                                name="experienceColumn" id="experience" wire:model.defer="userdetail.user_experience"></textarea>
                                        </div>
                                        <div class="col-lg-6 ps-lg-5">
                                            <label class="form-label" for="notes_column">
                                                Notes
                                            </label>
                                            <textarea class="form-control" rows="3" placeholder="" name="notesColumn"
                                                id="notes_column" wire:model.defer="userdetail.note"></textarea>
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="preferred-language-column">
                                                Preferred Language
                                            </label>
                                            {!! $setupValues['languages']['rendered'] !!}
                                        </div>
                                        <div class="col-lg-6 ps-lg-5">
                                            <label class="form-label" for="set-time-zone-column">
                                                Set Time Zone
                                            </label>
                                            {!! $setupValues['timezones']['rendered'] !!}
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="preferred-colleagues-column">
                                                Preferred Colleagues
                                            </label>
                                            {{-- {!! $setupValues['favored_users']['rendered'] !!} --}}
                                            <select name="favored_users" id="favored_users" class=" select2 form-select " wire:model.defer="userdetail.favored_users" tabindex="6"multiple  aria-label="Select favored users">
                                                <option >Select an option</option>
                                                @foreach($providers as $provider)
                                                 <option value="{{$provider->id}}" >{{$provider->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 ps-lg-5">
                                            <label class="form-label" for="disfavored-colleagues-column">
                                                Disfavored Colleagues
                                            </label>
                                              <select name="unfavored_users" id="unfavored_users" class=" select2 form-select " wire:model.defer="userdetail.unfavored_users" tabindex="7" multiple  aria-label="Select disfavored users">
                                                <option>Select an option</option>
                                                @foreach($providers as $provider)
                                                 <option value="{{$provider->id}}" >{{$provider->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="provider-introduction">
                                                Provider Introduction
                                            </label>
                                            <textarea class="form-control" rows="3" cols="3" placeholder=""
                                                name="provider- introduction" id="provider-introduction" wire:model.defer="userdetail.user_introduction"></textarea>
                                        </div>
                                        <div class="col-lg-6 ps-lg-5">
                                            <label class="form-label" for="provider-introduction-media">
                                                Provider Introduction Media
                                            </label>
                                            <input type="file" id="provider-introduction-media" class="form-control"
                                                name="companeyAdmins" placeholder="Add Admins" />
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="payment-settings">
                                                Payment Settings
                                            </label>
                                            <select class="select2 form-select" id="payment-settings">
                                                <option value="Al">
                                                    Select Payment Settings
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 ps-lg-5">
                                            <label class="form-label" for="default-remittance-temp">
                                                Select Default Remittance Template
                                            </label>
                                            <select class="select2 form-select" id="default-remittance-temp">
                                                <option value="Al">
                                                    Select Default Remittance Template
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-4 pe-lg-5">
                                            <label class="form-label" for="tags">
                                                Tags
                                            </label>
                                            <select data-placeholder="tags" multiple class="form-select  select2 form-select select2-hidden-accessible" id="tags">
                                                <option selected>Customer</option>
                                                <option selected>Companies</option>
                                                <option selected>Teams</option>
                                            </select>
                                        </div>
                                        {{-- Input Fields End --}}
                                    </div>
                                </div>
                                {{-- Action Buttons - Start --}}
                                <div class="col-12 form-actions">
                                    <button type="button" class="btn btn-outline-dark rounded"
                                        wire:click.prevent="showList">
                                        Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary rounded"  wire:click.prevent="save" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                        Save & Exit
                                    </button>
                                    <button type="button" class="btn btn-primary rounded"
                                    x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('provider-service')">
                                        Next
                                    </button>
                                </div>
                            </form>
                            {{-- ended update by shanila --}}

                        </div>
                        {{-- END: Profile --}}

                        {{-- BEGIN: Provider Service --}}
                        <div class="tab-pane fade" :class="{ 'active show': tab === 'provider-service' }"
                            id="provider-service" role="tabpanel" aria-labelledby="provider-service-tab" tabindex="0"
                            x-show="tab === 'provider-service'">
                            <section id="multiple-column-form">
                                <div class="row">
                                    <div class="col-12">
                                        <form class="form">
                                            {{-- updated by shanila to add csrf--}}
                                            @csrf
                                            {{-- update ended by shanila --}}
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
                                                                                            checked>
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
                                                                                <div>
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-primary px-3 py-1 rounded-lg btn-has-icon px-0 btn-multiselect-popup"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#contractProviderAvailiblityModal">
                                                                                        Availability Schedule
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                            <div class="form-check ">
                                                                                <label class="form-check-label" for="addnewserviceconsumer">Staff Provider</label>
                                                                                <input class="form-check-input show-hidden-content"
                                                                                    id="addnewserviceconsumer" name="ProviderType"
                                                                                    type="radio" tabindex="">

                                                                                <div class="hidden-content mt-3">
                                                                                    <h4 class="mb-2">
                                                                                        Would you like to set a rate for when this provider
                                                                                        works outside their set schedule?
                                                                                    </h4>
                                                                                    <div class="d-flex">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="radio"
                                                                                                name="exampleRadios"
                                                                                                id="provider-rate-schedule-radio-btn"
                                                                                                value="option2" checked>
                                                                                            <label class="form-check-label"
                                                                                                for="provider-rate-schedule-radio-btn">
                                                                                                Yes
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check ms-4">
                                                                                            <input class="form-check-input" type="radio"
                                                                                                name="exampleRadios"
                                                                                                id="provider-rate-schedule-radio-button"
                                                                                                value="option2">
                                                                                            <label class="form-check-label"
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
                                                                                        <label class="form-label-sm"
                                                                                            for="rate-per-mile-to-reimburse">
                                                                                            Rate per mile to reimburse
                                                                                            providers
                                                                                        </label>
                                                                                    </div>
                                                                                    <div>
                                                                                        KM
                                                                                        {{-- Updated by Shanila to Add
                                                                                        svg icon--}}
                                                                                        <svg aria-label="Edit"
                                                                                            width="20" height="20"
                                                                                            viewBox="0 0 20 20">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#pencil">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- End of update by Shanila
                                                                                        --}}
                                                                                    </div>
                                                                                </div>
                                                                                <input type="text"
                                                                                    id="rate-per-mile-to-reimburse"
                                                                                    class="form-control"
                                                                                    name="rate-per-mile-to-reimburse"
                                                                                    placeholder="$00:00" />
                                                                            </div>
                                                                            <div class="col-12 mb-2">
                                                                                <label class="form-label-sm"
                                                                                    for="rate-to-reimburse-compensated-travel-time">
                                                                                    Rate to Reimburse Compensated Travel
                                                                                    Time
                                                                                    {{-- Updated by Shanila to Add svg
                                                                                    icon--}}
                                                                                    <svg aria-label=" Rate to Reimburse Compensated Travel
                                                                                        Time" width="15" height="16"
                                                                                        viewBox="0 0 15 16">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#fill-question">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
                                                                                </label>
                                                                                <div class="col-lg-8">
                                                                                    <div
                                                                                        class="d-flex align-items-center gap-2">
                                                                                        <div>
                                                                                            <input type="text"
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
                                                                                        type="checkbox"
                                                                                        value="service-rate"
                                                                                        id="service-rate">
                                                                                    <label class="form-check-label"
                                                                                        for="service-rate">
                                                                                        Same as Service Rate
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4 ms-auto mb-3">
                                                                        <label class="form-label-sm mb-2 d-block"
                                                                            for="copy_provider">
                                                                            Copy from Other Provider
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
                                                        <div class="row between-section-segment-spacing">
                                                            <div class="col-lg-5">
                                                                <label class="form-label" for="ApplyTo">
                                                                    Accommodation
                                                                </label>
                                                                {!!
                                                                App\Helpers\SetupHelper::createDropDown('Accommodation',
                                                                'id',
                                                                'name', 'status', 1, 'name', true, '',
                                                                '','accommodation_filter') !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row inner-section-segment-spacing">
                                                        <div class="col-md-12 col-12">
                                                            <div
                                                                class="col-lg-12 d-flex col-12 gap-2 align-items-center mb-4 mt-1">
                                                                <h3 class="mb-lg-0">Service</h3>
                                                                {{-- Updated by Shanila to Add svg
                                                                icon--}}
                                                                <svg aria-label=" Service" width="20" height="20"
                                                                    viewBox="0 0 20 20" fill="none">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#fill-question">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12 ">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="check-service-duration"
                                                                    id="first-check-service-duration" checked>
                                                                <label class="form-check-label"
                                                                    for="first-check-service-duration">
                                                                    Check service duration
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12 md-2 mb-5">
                                                        <div class="row">
                                                            <div class="col-md-7 col-12 mb-3">
                                                                Service Types
                                                            </div>
                                                        </div>
                                                        <div>
                                                            {!! App\Helpers\SetupHelper::createCheckboxes('SetupValue',
                                                            'id',
                                                            'setup_value_label', 'setup_id', '5', 'id',[],1,'form-check
                                                            form-check-inline') !!}

                                                        </div>
                                                    </div>

                                                    <div class="row between-section-segment-spacing">
                                                        <div class="col-lg-12">
                                                            <div class="d-lg-flex align-items-center gap-3">
                                                                <h2>Standard Provider Rates</h2>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 pe-lg-5">
                                                                    <div class="d-flex flex-column gap-5">
                                                                        <!-- In-Person Billing Increment -->
                                                                        <div>
                                                                            <label class="form-label text-primary">
                                                                                In-Person Rates
                                                                            </label>
                                                                            <div class="d-flex flex-column gap-3">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                        id="">
                                                                                        Business Hours
                                                                                    </span>
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="$" aria-label=""
                                                                                        aria-describedby="">
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="00.00"
                                                                                        aria-label=""
                                                                                        aria-describedby="">
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                        id="">
                                                                                        After-Hours
                                                                                    </span>
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="$" aria-label=""
                                                                                        aria-describedby="">
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="00.00"
                                                                                        aria-label=""
                                                                                        aria-describedby="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /In-Person Billing Increment -->
                                                                        <!-- Phone Billing Increment -->
                                                                        <div>
                                                                            <label class="form-label text-primary">
                                                                                Phone Rates
                                                                            </label>
                                                                            <div class="d-flex flex-column gap-3">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                        id="">
                                                                                        Business Hours
                                                                                    </span>
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="$" aria-label=""
                                                                                        aria-describedby="">
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="00.00"
                                                                                        aria-label=""
                                                                                        aria-describedby="">
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                        id="">
                                                                                        After-Hours
                                                                                    </span>
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="$" aria-label=""
                                                                                        aria-describedby="">
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="00.00"
                                                                                        aria-label=""
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
                                                                            <label class="form-label text-primary">
                                                                                Virtual Rates
                                                                            </label>
                                                                            <div class="d-flex flex-column gap-3">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                        id="">
                                                                                        Business Hours
                                                                                    </span>
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="$" aria-label=""
                                                                                        aria-describedby="">
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="00.00"
                                                                                        aria-label=""
                                                                                        aria-describedby="">
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                        id="">
                                                                                        After-Hours
                                                                                    </span>
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="$" aria-label=""
                                                                                        aria-describedby="">
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="00.00"
                                                                                        aria-label=""
                                                                                        aria-describedby="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /Virtual Billing Increment -->
                                                                        <!-- Teleconference Billing Increment -->
                                                                        <div>
                                                                            <label class="form-label text-primary">
                                                                                Teleconference Rates
                                                                            </label>
                                                                            <div class="d-flex flex-column gap-3">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                        id="">
                                                                                        Business Hours
                                                                                    </span>
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="$" aria-label=""
                                                                                        aria-describedby="">
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="00.00"
                                                                                        aria-label=""
                                                                                        aria-describedby="">
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                        id="">
                                                                                        After-Hours
                                                                                    </span>
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="$" aria-label=""
                                                                                        aria-describedby="">
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0 text-center"
                                                                                        placeholder="00.00"
                                                                                        aria-label=""
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
                                                    <!-- section two end -->
                                                    <div class="row between-section-segment-spacing">
                                                        <div class="col-lg-12 pt-5">
                                                            <div class="d-lg-flex align-items-center gap-3">
                                                                <h2>
                                                                    Expedited Service Differentials
                                                                </h2>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                 {{--updated by shanila to add duplicate box for In Person --}}
                                                                        <div class="col-lg-6 pe-lg-5 mb-4">
                                                                            {{-- start loop --}}
                                                                            @foreach($inpersons as $index=>$inperson)
                                                                            <div class="border-dashed p-2 rounded mb-2">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <label class="form-label text-primary">
                                                                                    In-Person {{ $loop->index + 1 }}
                                                                                    </label>
                                                                                    <div class="align-items-center gap-2">
                                                                                        <a wire:click.prevent="removeInPerson({{$index}})" href="#" title="Delete" aria-label="Delete"
                                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                            <svg class="delete-icon" width="20" height="20"
                                                                                                viewBox="0 0 20 20" fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                                            </svg>
                                                                                        </a>
                                                                                    </div>
                                                                                 </div>
                                                                                <div class="d-flex flex-column gap-5">
                                                                                    <!-- In-Person Additional Service Charges -->
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex flex-column gap-3">
                                                                                            <div class="input-group">
                                                                                                <span
                                                                                                    class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                                    id="">
                                                                                                    Parameter 1
                                                                                                    <small>
                                                                                                        (Hour)
                                                                                                    </small>
                                                                                                </span>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="0"
                                                                                                    aria-label="Hour"
                                                                                                    aria-describedby="" wire:key="hour_inpersons-{{ $index }}" wire:model.lazy="inpersons.{{$index}}.hours">
                                                                                                <div
                                                                                                    class="col-lg-2 d-flex">
                                                                                                    <select
                                                                                                        class="form-select rounded-0"
                                                                                                        aria-label="$">
                                                                                                        <option>$
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00.00"
                                                                                                    aria-label="Enter charges"
                                                                                                    aria-describedby="" wire:key="charge_inpersons-{{ $index }}" wire:model.lazy="inpersons.{{$index}}.charges">
                                                                                            </div>
                                                                                            <div class="d-flex">
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="x-By-duration"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="durations_inpersons-{{ $index }}" wire:model.lazy="inpersons.{{$index}}.duration"/>
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="x-By-duration">
                                                                                                        X by Duration
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="exclude-after-hours-1"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="after_hour_inpersons-{{ $index }}" wire:model.lazy="inpersons.{{$index}}.exclude_after_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="exclude-after-hours-1">
                                                                                                        Exclude
                                                                                                        After-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="exclude-closed-hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="excluded_hour_inpersons-{{ $index }}" wire:model.lazy="inpersons.{{$index}}.exclude_closed_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="exclude-closed-hours">
                                                                                                        Exclude
                                                                                                        Closed-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /In-Person Additional Service Charges -->
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            {{-- end loop --}}
                                                                            <div class="text-end">
                                                                                <a href="#" class="fw-bold" wire:click.prevent="addInPerson">
                                                                                    <small>
                                                                                        Add Additional Parameter

                                                                                        {{-- Updated by Shanila to Add
                                                                                        svg icon--}}
                                                                                        <svg aria-label="Add Additional Parameter"
                                                                                            class="me-1" width="20"
                                                                                            height="21"
                                                                                            viewBox="0 0 20 21">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#add-new">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- End of update by Shanila
                                                                                        --}}
                                                                                    </small>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                         {{-- ended update by shanila for In person box --}}
                                                                         {{--updated by shanila to add duplicate box for In virual --}}
                                                                        <div class="col-lg-6 ps-lg-5 mb-4">
                                                                            {{-- start loop --}}
                                                                            @foreach($invirtuals as $index=>$invirtual)
                                                                            <div class="border-dashed p-2 rounded mb-2">
                                                                                <div class="d-flex justify-content-between">
                                                                                <label class="form-label text-primary">
                                                                                    Virtual {{ $loop->index + 1 }}
                                                                                </label>
                                                                                <div class="align-items-center gap-2">
                                                                                    <a wire:click.prevent="removeInVirtual({{$index}})" href="#" title="Delete" aria-label="Delete"
                                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                        <svg class="delete-icon" width="20" height="20"
                                                                                            viewBox="0 0 20 20" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                                        </svg>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                                <div class="d-flex flex-column gap-5">
                                                                                    <!-- Virtual Additional Service Charges -->
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex flex-column gap-3">
                                                                                            <div class="input-group">
                                                                                                <span
                                                                                                    class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                                    id="">
                                                                                                    Parameter 1
                                                                                                    <small>
                                                                                                        (Hour)
                                                                                                    </small>
                                                                                                </span>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="0"
                                                                                                    aria-label="Hour"
                                                                                                    aria-describedby="" wire:key="hour_invirtuals-{{ $index }}" wire:model.lazy="invirtuals.{{$index}}.hours">
                                                                                                <div
                                                                                                    class="col-lg-2 d-flex">
                                                                                                    <select
                                                                                                        class="form-select rounded-0"
                                                                                                        aria-label="$">
                                                                                                        <option>$
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00.00"
                                                                                                    aria-label="Enter Charges"
                                                                                                    aria-describedby="" wire:key="charge_invirtuals-{{ $index }}" wire:model.lazy="invirtuals.{{$index}}.charges">
                                                                                            </div>
                                                                                            <div class="d-flex">
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="x_by_duration"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="durations_invirtuals-{{ $index }}" wire:model.lazy="invirtuals.{{$index}}.duration"/>
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="x_by_duration" >
                                                                                                        X by Duration
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="exclude_after_hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="after_hour_invirtuals-{{ $index }}" wire:model.lazy="invirtuals.{{$index}}.exclude_after_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="exclude_after_hours">
                                                                                                        Exclude
                                                                                                        After-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="exclude_closed_hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="excluded_hour_invirtuals-{{ $index }}" wire:model.lazy="invirtuals.{{$index}}.exclude_closed_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="exclude_closed_hours">
                                                                                                        Exclude
                                                                                                        Closed-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /Virtual Additional Service Charges -->
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            {{-- end loop --}}
                                                                            <div class="text-end">
                                                                                <a href="#" class="fw-bold" wire:click.prevent="addInVirtual">
                                                                                    <small>
                                                                                        Add Additional Parameter
                                                                                        {{-- Updated by Shanila to Add
                                                                                        svg icon--}}
                                                                                        <svg aria-label="Add Additional Parameter"
                                                                                            class="me-1" width="20"
                                                                                            height="21"
                                                                                            viewBox="0 0 20 21">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#add-new">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- End of update by Shanila
                                                                                        --}}
                                                                                    </small>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        {{-- end updated by shanila for duplicating virual box --}}
                                                                    </div>
                                                                    <div class="row">
                                                                         {{--updated by shanila to add duplicate box for Phone --}}
                                                                        <div class="col-lg-6 pe-lg-5">
                                                                            {{-- start loop --}}
                                                                            @foreach($phones as $index=>$phone)
                                                                            <div class="border-dashed p-2 rounded mb-2">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <label class="form-label text-primary">
                                                                                    Phone {{ $loop->index + 1 }}
                                                                                    </label>
                                                                                    <div class="align-items-center gap-2">
                                                                                        <a wire:click.prevent="removePhone({{$index}})" href="#" title="Delete" aria-label="Delete"
                                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                            <svg class="delete-icon" width="20" height="20"
                                                                                                viewBox="0 0 20 20" fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                                            </svg>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex flex-column gap-5">
                                                                                    <!-- Phone Additional Service Charges -->
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex flex-column gap-3">
                                                                                            <div class="input-group">
                                                                                                <span
                                                                                                    class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                                    id="">
                                                                                                    Parameter 1
                                                                                                    <small>
                                                                                                        (Hour)
                                                                                                    </small>
                                                                                                </span>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="0"
                                                                                                    aria-label="Hours"
                                                                                                    aria-describedby="" wire:key="hour_phones-{{ $index }}" wire:model.lazy="phones.{{$index}}.hours">
                                                                                                <div
                                                                                                    class="col-lg-2 d-flex">
                                                                                                    <select
                                                                                                        class="form-select rounded-0"
                                                                                                        aria-label="$">
                                                                                                        <option>$
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00.00"
                                                                                                    aria-label="Enter Charges"
                                                                                                    aria-describedby="" wire:key="charge_phones-{{ $index }}" wire:model.lazy="phones.{{$index}}.charges">
                                                                                            </div>
                                                                                            <div class="d-flex">
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="x-by-duration-2"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="durations_phones-{{ $index }}" wire:model.lazy="phones.{{$index}}.duration"/>
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="x-by-duration-2">
                                                                                                        X by Duration
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="exclude-after-hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="after_hour_phones-{{ $index }}" wire:model.lazy="phones.{{$index}}.exclude_after_hours" />
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="exclude-after-hours">
                                                                                                        Exclude
                                                                                                        After-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="excludeclosedhours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="excluded_hour_phones-{{ $index }}" wire:model.lazy="phones.{{$index}}.exclude_closed_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="excludeclosedhours">
                                                                                                        Exclude
                                                                                                        Closed-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /Phone Additional Service Charges -->
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            {{-- ended loops --}}
                                                                            <div class="text-end">
                                                                                <a href="#" class="fw-bold" wire:click.prevent="addPhone">
                                                                                    <small>
                                                                                        Add Additional Parameter
                                                                                        {{-- Updated by Shanila to Add
                                                                                        svg icon--}}
                                                                                        <svg aria-label="Add Additional Parameter"
                                                                                            class="me-1" width="20"
                                                                                            height="21"
                                                                                            viewBox="0 0 20 21">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#add-new">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- End of update by Shanila
                                                                                        --}}
                                                                                    </small>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        {{-- ended by shanila for duplicating box for phones --}}
                                                                        {{-- updated by shanila to add duplicate box for Teleconference  --}}
                                                                        <div class="col-lg-6 ps-lg-5">
                                                                            {{-- loop start --}}
                                                                            @foreach($teleconfrences as $index=>$teleconfrence)
                                                                            <div class="border-dashed p-2 rounded mb-2">
                                                                                <div class="d-flex justify-content-between">
                                                                                     <label class="form-label text-primary">
                                                                                      Teleconference {{ $loop->index + 1 }}
                                                                                    </label>
                                                                                    <div class="align-items-center gap-2">
                                                                                        <a wire:click.prevent="removeteleConference({{$index}})" href="#" title="Delete" aria-label="Delete"
                                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                            <svg class="delete-icon" width="20" height="20"
                                                                                                viewBox="0 0 20 20" fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                                            </svg>
                                                                                        </a>
                                                                                    </div>
                                                                                  </div>
                                                                                <div class="d-flex flex-column gap-5">
                                                                                    <!-- Teleconference Additional Service Charges -->
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex flex-column gap-3">
                                                                                            <div class="input-group">
                                                                                                <span
                                                                                                    class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                                    id="">
                                                                                                    Parameter 1
                                                                                                    <small>
                                                                                                        (Hour)
                                                                                                    </small>
                                                                                                </span>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="0"
                                                                                                    aria-label="Hours"
                                                                                                    aria-describedby="" wire:key="hour_teleconfrences-{{ $index }}" wire:model.lazy="teleconfrences.{{$index}}.hours">
                                                                                                <div
                                                                                                    class="col-lg-2 d-flex">
                                                                                                    <select
                                                                                                        class="form-select rounded-0"
                                                                                                        aria-label="$">
                                                                                                        <option>$
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00.00"
                                                                                                    aria-label="Enter Charges"
                                                                                                    aria-describedby="" wire:key="charge_teleconfrences-{{ $index }}" wire:model.lazy="teleconfrences.{{$index}}.charges">
                                                                                            </div>
                                                                                            <div class="d-flex">
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="x-By-Duration"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="durations_teleconfrences-{{ $index }}" wire:model.lazy="teleconfrences.{{$index}}.duration"/>
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="x-By-Duration">
                                                                                                        X by Duration
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="exclude-After-Hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="after_hour_teleconfrences-{{ $index }}" wire:model.lazy="teleconfrences.{{$index}}.exclude_after_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="exclude-After-Hours">
                                                                                                        Exclude
                                                                                                        After-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="exclude-Closed-Hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="excluded_hour_teleconfrences-{{ $index }}" wire:model.lazy="teleconfrences.{{$index}}.exclude_closed_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label text-sm"
                                                                                                        for="exclude-Closed-Hours">
                                                                                                        Exclude
                                                                                                        Closed-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /Teleconference Additional Service Charges -->
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            {{-- end loop --}}
                                                                            <div class="text-end">
                                                                                <a href="#" class="fw-bold" wire:click.prevent="addTeleconference">
                                                                                    <small>
                                                                                        Add Additional Parameter
                                                                                        {{-- Updated by Shanila to Add
                                                                                        svg icon--}}
                                                                                        <svg aria-label="Add Additional Parameter"
                                                                                            class="me-1" width="20"
                                                                                            height="21"
                                                                                            viewBox="0 0 20 21">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#add-new">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- End of update by Shanila
                                                                                        --}}
                                                                                    </small>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        {{--ended update by shanila to add duplicate box for Teleconference  --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Expedited Services -->
                                                    <!-- Cancellations/Modifications/Rescheduling -->
                                                    <div class="row between-section-segment-spacing">
                                                        <div class="col-lg-12 pt-5">
                                                            <div class="d-lg-flex align-items-center gap-3">
                                                                <h2>
                                                                    Cancellations/Modifications/Rescheduling
                                                                </h2>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                         {{-- update by shanila to add duplicate box for inperson  --}}
                                                                        <div class="col-lg-6 pe-lg-5 mb-4">
                                                                            {{-- start loop --}}
                                                                            @foreach ($scheduled_inpersons as $index=>$scheduled_inperson)
                                                                            <div class="border-dashed p-2 rounded mb-2">
                                                                                <div class="d-flex justify-content-between">
                                                                                 <label class="form-label text-primary">
                                                                                    In-Person {{ $loop->index + 1 }}
                                                                                 </label>
                                                                                 <div class="align-items-center gap-2">
                                                                                    <a wire:click.prevent="removescheduledInPerson({{$index}})" href="#" title="Delete" aria-label="Delete"
                                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                        <svg class="delete-icon" width="20" height="20"
                                                                                            viewBox="0 0 20 20" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                                        </svg>
                                                                                    </a>
                                                                                 </div>
                                                                                </div>
                                                                                <div class="d-flex flex-column gap-5">
                                                                                    <!-- In-Person Additional Service Charges -->
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex flex-column gap-3">
                                                                                            <div class="input-group">
                                                                                                <span
                                                                                                    class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                                    id="">
                                                                                                    Parameter 1
                                                                                                </span>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00 Hour"
                                                                                                    aria-label="Hour"
                                                                                                    aria-describedby=""  wire:key="hour_scheduled_inpersons-{{ $index }}" wire:model.lazy="scheduled_inpersons.{{$index}}.hours">
                                                                                                <div
                                                                                                    class="col-lg-2 d-flex">
                                                                                                    <select
                                                                                                        class="form-select rounded-0"
                                                                                                        aria-label="$">
                                                                                                        <option>$
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00.00"
                                                                                                    aria-label="Enter Charges"
                                                                                                    aria-describedby="" wire:key="charge_scheduled_inpersons-{{ $index }}" wire:model.lazy="scheduled_inpersons.{{$index}}.charges">
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-grid grid-cols-2 gap-1">
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="cancellations"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="cancel_scheduled_inpersons-{{ $index }}" wire:model.lazy="scheduled_inpersons.{{$index}}.cancellations"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="cancellations">
                                                                                                        Cancellations
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="excludeAfterHours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="after_hour_scheduled_inpersons-{{ $index }}" wire:model.lazy="scheduled_inpersons.{{$index}}.exclude_after_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="excludeAfterHours">
                                                                                                        Exclude
                                                                                                        After-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="modification_column"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="modifications_scheduled_inpersons-{{ $index }}" wire:model.lazy="scheduled_inpersons.{{$index}}.modification"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="modification_column">
                                                                                                        Modifications
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="exclude_closed_Hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="excluded_hour_scheduled_inpersons-{{ $index }}" wire:model.lazy="scheduled_inpersons.{{$index}}.exclude_closed_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="exclude_closed_Hours">
                                                                                                        Exclude
                                                                                                        Closed-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="rescheduling_column"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="reschedulings_scheduled_inpersons-{{ $index }}" wire:model.lazy="scheduled_inpersons.{{$index}}.rescheduling"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="rescheduling_column">
                                                                                                        Rescheduling
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="bill-service-minimum"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="bill-service-minimum_scheduled_inpersons-{{ $index }}" wire:model.lazy="scheduled_inpersons.{{$index}}.bill_service_minimum"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="bill-service-minimum">
                                                                                                        Bill Service
                                                                                                        Minimum
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="1-x-by-duration"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="durations_scheduled_inpersons-{{ $index }}" wire:model.lazy="scheduled_inpersons.{{$index}}.duration"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="1-x-by-duration">
                                                                                                        X by Duration
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /In-Person Additional Service Charges -->
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            {{-- end loop --}}
                                                                            <div class="text-end">
                                                                                <a href="#" class="fw-bold" wire:click.prevent="addscheduledInPerson">
                                                                                    <small>
                                                                                        Add Additional Parameter
                                                                                        {{-- Updated by Shanila to Add
                                                                                        svg icon--}}
                                                                                        <svg aria-label="Add Additional Parameter"
                                                                                            class="me-1" width="20"
                                                                                            height="21"
                                                                                            viewBox="0 0 20 21">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#add-new">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- End of update by Shanila
                                                                                        --}}
                                                                                    </small>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                         {{--ended update by shanila to add duplicate box for inperson  --}}
                                                                         {{-- update by shanila to add duplicate box for virual  --}}
                                                                        <div class="col-lg-6 ps-lg-5 mb-4">
                                                                            @foreach ($scheduled_virtules as $index=>$scheduled_virtul)
                                                                            <div class="border-dashed p-2 rounded mb-2">
                                                                                <div class="d-flex justify-content-between">
                                                                                  <label class="form-label text-primary">
                                                                                    Virtual {{ $loop->index + 1 }}
                                                                                  </label>
                                                                                  <div class="align-items-center gap-2">
                                                                                    <a wire:click.prevent="removescheduledVirvual({{$index}})" href="#" title="Delete" aria-label="Delete"
                                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                        <svg class="delete-icon" width="20" height="20"
                                                                                            viewBox="0 0 20 20" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                                        </svg>
                                                                                    </a>
                                                                                 </div>
                                                                               </div>
                                                                                <div class="d-flex flex-column gap-5">
                                                                                    <!-- Virtual Additional Service Charges -->
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex flex-column gap-3">
                                                                                            <div class="input-group">
                                                                                                <span
                                                                                                    class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                                    id="">
                                                                                                    Parameter 1
                                                                                                </span>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00 Hour"
                                                                                                    aria-label="Hour"
                                                                                                    aria-describedby="" wire:key="hour_scheduled_virtules-{{ $index }}" wire:model.lazy="scheduled_virtules.{{$index}}.hours">
                                                                                                <div
                                                                                                    class="col-lg-2 d-flex">
                                                                                                    <select
                                                                                                        class="form-select rounded-0"
                                                                                                        aria-label="$">
                                                                                                        <option>$
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00.00"
                                                                                                    aria-label="Enter charges"
                                                                                                    aria-describedby="" wire:key="charge_scheduled_virtules-{{ $index }}" wire:model.lazy="scheduled_virtules.{{$index}}.charges">
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-grid grid-cols-2 gap-1">
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="cancellations-column"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="cancel_scheduled_virtules-{{ $index }}" wire:model.lazy="scheduled_virtules.{{$index}}.cancellations"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="cancellations-column">
                                                                                                        Cancellations
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="2-multiply-by-duration"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="after_hour_scheduled_virtules-{{ $index }}" wire:model.lazy="scheduled_virtules.{{$index}}.exclude_after_hours" />
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="2-multiply-by-duration">
                                                                                                        Exclude
                                                                                                        After-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="2-exclude-after-hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="modifications_scheduled_virtules-{{ $index }}" wire:model.lazy="scheduled_virtules.{{$index}}.modification"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="2-exclude-after-hours">
                                                                                                        Modifications
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="2-pay-service-minimum"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="excluded_hour_scheduled_virtules-{{ $index }}" wire:model.lazy="scheduled_virtules.{{$index}}.exclude_closed_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="2-pay-service-minimum">
                                                                                                        Exclude
                                                                                                        Closed-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="rescheduling"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="reschedulings_scheduled_virtules-{{ $index }}" wire:model.lazy="scheduled_virtules.{{$index}}.rescheduling"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="rescheduling">
                                                                                                        Rescheduling
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="bill-service"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="bill-service-minimum_scheduled_virtules-{{ $index }}" wire:model.lazy="scheduled_virtules.{{$index}}.bill_service_minimum"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="bill-service">
                                                                                                        Bill Service
                                                                                                        Minimum
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="5-exclude-after-hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="durations_scheduled_virtules-{{ $index }}" wire:model.lazy="scheduled_virtules.{{$index}}.duration"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="5-exclude-after-hours">
                                                                                                        X by Duration
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /Virtual Additional Service Charges -->
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            <div class="text-end">
                                                                                <a href="#" class="fw-bold" wire:click.prevent="addscheduledVirtual">
                                                                                    <small>
                                                                                        Add Additional Parameter
                                                                                        {{-- Updated by Shanila to Add
                                                                                        svg icon--}}
                                                                                        <svg aria-label="Add Additional Parameter"
                                                                                            class="me-1" width="20"
                                                                                            height="21" viewBox="0 0 20 21">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#add-new">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- End of update by Shanila
                                                                                        --}}
                                                                                    </small>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        {{-- end update by shanila to add duplicate box for virtual --}}
                                                                    </div>
                                                                    <div class="row">
                                                                        {{-- update by shanila to add duplicate box for phone--}}
                                                                        <div class="col-lg-6 pe-lg-5">
                                                                            {{-- start loop --}}
                                                                            @foreach ($scheduled_phones as $index=>$scheduled_phone)
                                                                            <div class="border-dashed p-2 rounded mb-2">
                                                                             <div class="d-flex justify-content-between">
                                                                                 <label class="form-label text-primary">
                                                                                    Phone {{ $loop->index + 1 }}
                                                                                 </label>
                                                                                 <div class="align-items-center gap-2">
                                                                                    <a wire:click.prevent="removescheduledPhone({{$index}})" href="#" title="Delete" aria-label="Delete"
                                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                        <svg class="delete-icon" width="20" height="20"
                                                                                            viewBox="0 0 20 20" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                                        </svg>
                                                                                    </a>
                                                                                 </div>
                                                                              </div>
                                                                                <div class="d-flex flex-column gap-5">
                                                                                    <!-- Phone Additional Service Charges -->
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex flex-column gap-3">
                                                                                            <div class="input-group">
                                                                                                <span
                                                                                                    class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                                    id="">
                                                                                                    Parameter 1
                                                                                                </span>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00 Hour"
                                                                                                    aria-label=""
                                                                                                    aria-describedby=""  wire:key="hour_scheduled_phones-{{ $index }}" wire:model.lazy="scheduled_phones.{{$index}}.hours">
                                                                                                <div
                                                                                                    class="col-lg-2 d-flex">
                                                                                                    <select
                                                                                                        class="form-select rounded-0"
                                                                                                        aria-label="$">
                                                                                                        <option>$
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00.00"
                                                                                                    aria-label=""
                                                                                                    aria-describedby="" wire:key="charge_scheduled_phones-{{ $index }}" wire:model.lazy="scheduled_phones.{{$index}}.charges">
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-grid grid-cols-2 gap-1">
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="cancellations-checkbox"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="cancel_scheduled_phones-{{ $index }}" wire:model.lazy="scheduled_phones.{{$index}}.cancellations"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="cancellations-checkbox" >
                                                                                                        Cancellations
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="multiplybyduration"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="after_hour_scheduled_phones-{{ $index }}" wire:model.lazy="scheduled_phones.{{$index}}.exclude_after_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="multiplybyduration">
                                                                                                        Exclude
                                                                                                        After-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="1_exclude_after_hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="modifications_scheduled_phones-{{ $index }}" wire:model.lazy="scheduled_phones.{{$index}}.modification"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="1_exclude_after_hours" >
                                                                                                        Modifications
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="Pay-Service-Minimum"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="excluded_hour_scheduled_phones-{{ $index }}" wire:model.lazy="scheduled_phones.{{$index}}.exclude_closed_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="Pay-Service-Minimum">
                                                                                                        Exclude
                                                                                                        Closed-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="Exclude-After-Hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="reschedulings_scheduled_phones-{{ $index }}" wire:model.lazy="scheduled_phones.{{$index}}.rescheduling"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="Exclude-After-Hours">
                                                                                                        Rescheduling
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="billServiceMinimum"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="bill-service-minimum_scheduled_phones-{{ $index }}" wire:model.lazy="scheduled_phones.{{$index}}.bill_service_minimum"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="billServiceMinimum">
                                                                                                        Bill Service
                                                                                                        Minimum
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="1exclude-after-hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="_scheduled_phones-{{ $index }}" wire:model.lazy="scheduled_phones.{{$index}}.duration"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="1exclude-after-hours" >
                                                                                                        X by Duration
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /Phone Additional Service Charges -->
                                                                                </div>
                                                                            </div>
                                                                            {{-- end loop --}}
                                                                            @endforeach
                                                                            <div class="text-end">
                                                                                <a href="#" class="fw-bold" wire:click.prevent="addscheduledPhone">
                                                                                    <small>
                                                                                        Add Additional Parameter
                                                                                        {{-- Updated by Shanila to Add
                                                                                        svg icon--}}
                                                                                        <svg aria-label="Add Additional Parameter"
                                                                                            class="me-1" width="20"
                                                                                            height="21"
                                                                                            viewBox="0 0 20 21">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#add-new">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- End of update by Shanila
                                                                                        --}}
                                                                                    </small>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                         {{-- end update by shanila to add duplicate box for phone --}}
                                                                         {{-- update by shanila to add duplicate box for Teleconference--}}
                                                                        <div class="col-lg-6 ps-lg-5">
                                                                            {{-- loop start --}}
                                                                            @foreach ($scheduled_teleconfrences as $index=>$scheduled_teleconfrence)
                                                                            <div class="border-dashed p-2 rounded mb-1">
                                                                                <div class="d-flex justify-content-between">
                                                                                <label class="form-label text-primary">
                                                                                    Teleconference {{ $loop->index + 1 }}
                                                                                </label>
                                                                                <div class="align-items-center gap-2">
                                                                                    <a wire:click.prevent="removescheduledTeleconference({{$index}})" href="#" title="Delete" aria-label="Delete"
                                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                        <svg class="delete-icon" width="20" height="20"
                                                                                            viewBox="0 0 20 20" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                                        </svg>
                                                                                    </a>
                                                                                 </div>
                                                                                </div>
                                                                                <div class="d-flex flex-column gap-5">
                                                                                    <!-- Teleconference Additional Service Charges -->
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex flex-column gap-3">
                                                                                            <div class="input-group">
                                                                                                <span
                                                                                                    class="input-group-text gap-2 bg-secondary col-lg-5"
                                                                                                    id="">
                                                                                                    Parameter 1
                                                                                                </span>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00 Hour"
                                                                                                    aria-label=""
                                                                                                    aria-describedby="" wire:key="hour_scheduled_teleconfrences-{{ $index }}" wire:model.lazy="scheduled_teleconfrences.{{$index}}.hours">
                                                                                                <div
                                                                                                    class="col-lg-2 d-flex">
                                                                                                    <select
                                                                                                        class="form-select rounded-0"
                                                                                                        aria-label="$">
                                                                                                        <option>$
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <input type="text"
                                                                                                    class="form-control text-center"
                                                                                                    placeholder="00.00"
                                                                                                    aria-label=""
                                                                                                    aria-describedby="" wire:key="charge_scheduled_teleconfrences-{{ $index }}" wire:model.lazy="scheduled_teleconfrences.{{$index}}.charges"/>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-grid grid-cols-2 gap-1">
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="1-exclude-closedHhours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="cancel_scheduled_teleconfrences-{{ $index }}" wire:model.lazy="scheduled_teleconfrences.{{$index}}.cancellations"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="1-exclude-closedHhours">
                                                                                                        Cancellations
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="1-multiply-by-duration"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex=""  wire:key="after_hour_scheduled_teleconfrences-{{ $index }}" wire:model.lazy="scheduled_teleconfrences.{{$index}}.exclude_after_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="1-multiply-by-duration">
                                                                                                        Exclude
                                                                                                        After-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="1-excludeAfter-hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="modifications_scheduled_teleconfrences-{{ $index }}" wire:model.lazy="scheduled_teleconfrences.{{$index}}.modification"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="1-excludeAfter-hours">
                                                                                                        Modifications
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="1-pay-service-minimum"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="excluded_hour_scheduled_teleconfrences-{{ $index }}" wire:model.lazy="scheduled_teleconfrences.{{$index}}.exclude_closed_hours"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="1-pay-service-minimum">
                                                                                                        Exclude
                                                                                                        Closed-hours
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="1-exclude-After-hours"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="reschedulings_scheduled_teleconfrences-{{ $index }}" wire:model.lazy="scheduled_teleconfrences.{{$index}}.rescheduling"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="1-exclude-After-hours">
                                                                                                        Rescheduling
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="1-bill-service-minimum"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="bill-service-minimum_scheduled_teleconfrences-{{ $index }}" wire:model.lazy="scheduled_teleconfrences.{{$index}}.bill_service_minimum"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="1-bill-service-minimum">
                                                                                                        Bill Service
                                                                                                        Minimum
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-check form-check-inline">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        id="x-by-duration-column"
                                                                                                        name=""
                                                                                                        type="checkbox"
                                                                                                        tabindex="" wire:key="durations_scheduled_teleconfrences-{{ $index }}" wire:model.lazy="scheduled_teleconfrences.{{$index}}.duration"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="x-by-duration-column">
                                                                                                        X by Duration
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /Teleconference Additional Service Charges -->
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            {{-- loop end --}}
                                                                            <div class="text-end">
                                                                                <a href="#" class="fw-bold" wire:click.prevent="addscheduledTeleconference">
                                                                                    <small>
                                                                                        Add Additional Parameter
                                                                                        {{-- Updated by Shanila to Add
                                                                                        svg icon--}}
                                                                                        <svg aria-label="Add Additional Parameter"
                                                                                            class="me-1" width="20"
                                                                                            height="21"
                                                                                            viewBox="0 0 20 21">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#add-new">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- End of update by Shanila
                                                                                        --}}
                                                                                    </small>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                         {{-- end update by shanila to add duplicate box for Teleconference --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /End: Cancellations/Modifications/Rescheduling -->
                                                      {{-- update by shanila to add duplicate box for speclization --}}
                                                    <div class="col-lg-12 mb-5 pt-5">
                                                        @foreach ($speclizations as $index=>$speclization)
                                                        <div class="d-flex justify-content-between">
                                                            <h2>Specializations {{ $loop->index + 1 }}</h2>
                                                            <div class="align-items-center gap-2">
                                                                <a wire:click.prevent="removeSpeclization({{$index}})" href="#" title="Delete" aria-label="Delete"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    <svg class="delete-icon" width="20" height="20"
                                                                        viewBox="0 0 20 20" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                    </svg>
                                                                </a>
                                                             </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                {{-- start loop --}}

                                                                <div class="border-dashed rounded p-3 mb-2">
                                                                    <div class="d-flex flex-column gap-3">
                                                                        <div class="d-lg-flex gap-4">
                                                                            <div
                                                                                class="align-self-end d-flex align-items-center gap-2 col-lg-5">

                                                                                <div class="input-group ">
                                                                                    <select
                                                                                        class="form-select bg-secondary w-75"
                                                                                        aria-label="Medical Interpreting">
                                                                                        <option>Medical Interpreting
                                                                                        </option>
                                                                                    </select>
                                                                                    <select class="form-select"
                                                                                        aria-label="$">
                                                                                        <option>$</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="align-self-end">
                                                                                <label class="form-label text-primary">
                                                                                    In-Person
                                                                                </label>
                                                                                <input type="text"
                                                                                    class="form-control text-center"
                                                                                    placeholder="00.00" aria-label="In-Person"
                                                                                    aria-describedby="" wire:key="person_speclizations-{{ $index }}" wire:model.lazy="speclizations.{{$index}}.in_person">
                                                                            </div>
                                                                            <div class="align-self-end">
                                                                                <label class="form-label text-primary">
                                                                                    Virtual
                                                                                </label>
                                                                                <input type="text"
                                                                                    class="form-control text-center"
                                                                                    placeholder="00.00" aria-label="Virtual"
                                                                                    aria-describedby="" wire:key="virt_speclizations-{{ $index }}" wire:model.lazy="speclizations.{{$index}}.virual">
                                                                            </div>
                                                                            <div class="align-self-end">
                                                                                <label class="form-label text-primary">
                                                                                    Phone
                                                                                </label>
                                                                                <input type="text"
                                                                                    class="form-control text-center"
                                                                                    placeholder="00.00" aria-label="Phone"
                                                                                    aria-describedby="" wire:key="phone_speclizations-{{ $index }}" wire:model.lazy="speclizations.{{$index}}.phone">
                                                                            </div>
                                                                            <div class="align-self-end">
                                                                                <label class="form-label text-primary">
                                                                                    Teleconference
                                                                                </label>
                                                                                <input type="text"
                                                                                    class="form-control text-center"
                                                                                    placeholder="00.00" aria-label="Teleconference"
                                                                                    aria-describedby="" wire:key="teleconference_speclizations-{{ $index }}" wire:model.lazy="speclizations.{{$index}}.teleconference">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mx-5">
                                                                            <div class="d-flex">
                                                                                <div
                                                                                    class="form-check form-check-inline">
                                                                                    <input class="form-check-input"
                                                                                        id="hide-from-customers" name=""
                                                                                        type="checkbox" tabindex="" wire:key="hidecustomer_speclizations-{{ $index }}" wire:model.lazy="speclizations.{{$index}}.hide_from_customers"/>
                                                                                    <label class="form-check-label"
                                                                                        for="hide-from-customers">
                                                                                        <small>
                                                                                            Hide from Customers
                                                                                        </small>
                                                                                    </label>
                                                                                </div>
                                                                                <div
                                                                                    class="form-check form-check-inline">
                                                                                    <input class="form-check-input"
                                                                                        id="hide-from-providers" name=""
                                                                                        type="checkbox" tabindex="" wire:key="hidefromproviders_speclizations-{{ $index }}" wire:model.lazy="speclizations.{{$index}}.hide_from_providers"/>
                                                                                    <label class="form-check-label"
                                                                                        for="hide-from-providers">
                                                                                        <small>
                                                                                            Hide from Providers
                                                                                        </small>
                                                                                    </label>
                                                                                </div>
                                                                                <div
                                                                                    class="form-check form-check-inline">
                                                                                    <input class="form-check-input"
                                                                                        id="x-by-duration" name=""
                                                                                        type="checkbox" tabindex="" wire:key="duration_speclizations-{{ $index }}" wire:model.lazy="speclizations.{{$index}}.duration"/>
                                                                                    <label class="form-check-label"
                                                                                        for="x-by-duration">
                                                                                        <small>
                                                                                            X by Duration
                                                                                        </small>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- end loop --}}
                                                                @endforeach
                                                                <div class="text-end">
                                                                    <a href="#" class="fw-bold" wire:click.prevent="addSpeclizations">
                                                                        <small>
                                                                            Add Additional Specialization
                                                                            {{-- Updated by Shanila to Add
                                                                            svg icon--}}
                                                                            <svg aria-label="Add Additional Specialization"
                                                                                class="me-1" width="20" height="21"
                                                                                viewBox="0 0 20 21">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#add-new">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila
                                                                            --}}
                                                                        </small>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- end update by shanila to add duplicate box for speclization --}}
                                                    <!-- /End : Cancellations/Modifications/Rescheduling -->
                                                    <div class="col-md-12 col-12 mb-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="copy-of-check-service-duration"
                                                                id="copy-of-check-service-duration">
                                                            <label class="form-check-label"
                                                                for="copy-of-check-service-duration">
                                                                Copy of Check service duration
                                                            </label>
                                                        </div>
                                                        <div class="mb-5">
                                                            <hr>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                aria-label="Check Service Duration"
                                                                value="check-service-duration"
                                                                id="1-check-service-duration">
                                                            <label class="form-check-label"
                                                                for="1-check-service-duration">
                                                                Hide from customer service
                                                            </label>
                                                        </div>
                                                        <div class="mb-5">
                                                            <hr>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="check-service-duration"
                                                                id="language-interpreting">
                                                            <label class="form-check-label" for="language-interpreting">
                                                                New service capacity and capabilities
                                                            </label>
                                                        </div>
                                                        <div class="mb-5">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- cancel/next (buttons) -->
                                                <div class="col-12 form-actions">
                                                    <button type="button" class="btn btn-outline-dark rounded"
                                                    x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('profile')">
                                                        Back
                                                    </button>
                                                    <button type="submit" class="btn btn-primary rounded">
                                                        Save & Exit
                                                    </button>
                                                    <button type="button" class="btn btn-primary rounded"
                                                     x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('upload-document')">
                                                        Next
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                        {{-- END: Provider Service --}}

                        {{-- BEGIN: Upload Document --}}

                        <div class="tab-pane fade" :class="{ 'active show': tab === 'upload-document' }"
                            id="upload-document" role="tabpanel" aria-labelledby="upload-document-tab" tabindex="0"
                            x-show="tab === 'upload-document'">
                            <!-- Basic multiple Column Form section start -->
                            <section id="multiple-column-form">
                                <div class="row">
                                    <div class="col-12">
                                        <form class="form">
                                            {{-- updated by shanila to add csrf--}}
                                            @csrf
                                            {{-- update ended by shanila --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h2>Attach Document</h2>
                                                </div>
                                            </div>
                                            <div class="row between-section-segment-spacing">
                                                <div class="col-lg-12 mb-4 mt-5">
                                                    <div class="row">
                                                        <div class="col-lg-5 mb-4 ">
                                                            <h3 class="mb-0 text-primary">Driving License<span
                                                                    class="text-danger">*</span></h3>
                                                        </div>
                                                        <div class="col-lg-7 d-lg-flex justify-content-end gap-3 mb-4">
                                                            <a href="#" class="btn btn-primary btn-has-icon rounded">
                                                                {{-- Updated by Shanila to Add
                                                                svg icon--}}
                                                                <svg aria-label="Add Manually" width="24" height="19"
                                                                    viewBox="0 0 24 19" fill="none">
                                                                    <use xlink:href="/css/common-icons.svg#check-add">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila
                                                                --}}
                                                                Add Manually
                                                            </a>
                                                            <a href="#" class="btn btn-primary rounded">
                                                                Request from User
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="form-label" for="ApplyTo">
                                                                Document Title
                                                            </label>
                                                            <div>Driving License</div>
                                                        </div>
                                                        <div class="col-lg-4 col-12">
                                                            <label class="form-label" for="document-type">
                                                                Document Type
                                                            </label>
                                                            <div>Upload only</div>
                                                        </div>
                                                        <div class="col-lg-4 col-12">
                                                            <label
                                                                class="form-label-sm mb-2 d-flex align-items-center gap-2">
                                                                {{-- Updated by Shanila to Add
                                                                svg icon--}}
                                                                <svg aria-label="File Name.pdf" width="20" height="27"
                                                                    viewBox="0 0 20 27" fill="none">
                                                                    <use xlink:href="/css/common-icons.svg#pdf-file">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila
                                                                --}}

                                                                <span class="fw-semibold text-sm">File Name.pdf</span>
                                                            </label>
                                                            <div>
                                                                <a href="#"
                                                                    class="btn btn-primary btn-sm rounded col-lg-4">Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="no-expiration" id="no-expiration-column">
                                                        <label class="form-check-label" for="no-expiration-column">
                                                            No Expiration
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 pe-lg-5 mb-4">
                                                    <label class="form-label" for="end-date-column">Expiration
                                                        Date</label>
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="position-relative flex-grow-1">
                                                            <input type="text" class="form-control js-single-date"
                                                                placeholder="Select Expiration Date" aria-label="Expiration Date"
                                                                aria-describedby="" id="end-date-column">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Date" class="icon-date" width="20"
                                                                height="21" viewBox="0 0 20 21">
                                                                <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 ps-lg-5 mb-4">
                                                    <label for="formFile" class="form-label">
                                                        Upload File
                                                    </label>
                                                    <input class="form-control mb-1" type="file" id="formFile">
                                                    <div class="text-primary text-sm">License.PDf</div>
                                                </div>
                                                <div class="col-lg-6 pe-lg-5 mb-4">
                                                    <label class="form-label" for="notes">
                                                        Note
                                                    </label>
                                                    <textarea class="form-control" rows="4" placeholder=""
                                                        name="notesColumn" id="notes"></textarea>
                                                </div>
                                                <div class="col-lg-6 ps-lg-5 mb-4">
                                                    <label class="form-label" for="tags">Tags</label>
                                                    <select data-placeholder="" multiple
                                                        class="form-select  select2 form-select select2-hidden-accessible" tabindex=""  aria-label="Tags">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 gap-2">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="send-invitation-email-to-provider"
                                                                id="send-invitation-email-to-provider">
                                                            <label class="form-check-label"
                                                                for="send-invitation-email-to-provider">
                                                                Send Invitation Email to Provider
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 form-actions">
                                                <button type="button" class="btn btn-outline-dark rounded"
                                                x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('provider-service')">
                                                    Back
                                                </button>
                                                <button type="submit" class="btn btn-primary rounded">
                                                    Submit
                                                </button>
                                                {{-- <button type="submit" class="btn btn-primary rounded">
                                                    Next
                                                </button> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>

                        {{-- END: Upload Document --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateVal(attrName,val){
          
            Livewire.emit('updateVal', attrName, val);

        }

    </script>
</div>
