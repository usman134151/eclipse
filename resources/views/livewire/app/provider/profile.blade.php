<div>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">My Profile</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                      </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">
                                    My Profile
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            {{-- BEGIN: Steps --}}
            <div x-data="{ tab: @entangle('component') }" id="tab_wrapper">
                {{-- Nav tabs --}}
                <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link" :class="{ 'active': tab === 'profile' }"
                            @click.prevent="tab = 'profile'" id="user-profile-tab" role="tab"
                            aria-controls="user-profile" aria-selected="true"><span class="number">1</span>Profile</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link" :class="{ 'active': tab === 'service-catalog' }"
                            @click.prevent="tab = 'service-catalog'" id="service-catalog-tab" role="tab"
                            aria-controls="service-catalog" aria-selected="false"><span class="number">2</span>Service
                            Catalog & Rates</a>
                    </li>
                </ul>
                {{-- Tab panes --}}
                <div class="tab-content">
                    {{-- BEGIN: Profile --}}
                    <div class="tab-pane fade" :class="{ 'active show': tab === 'profile' }" id="user-profile"
                        role="tabpanel" aria-labelledby="user-profile-tab" tabindex="0" x-show="tab === 'profile'">
                        {{-- Tab Panes --}}
                        <div class="row mb-4">
                            <p>
                                Here you can view, update, and manage your personal information, service catalog, and
                                rates.
                            </p>
                        </div>
                        <div class="row mt-2 mb-5">
                            {{-- BEGIN: Profile --}}
                            <div class="col-12 text-center">
                                <div class="d-inline-block position-relative mb-3">
                                    <img src="/tenant/images/portrait/small/avatar-s-9.jpg"
                                        class="img-fluid rounded-circle" alt="Profile Image of Provider" />
                                    {{--
                                    <div>
                                        <input class="position-absolute form-control" type="file" />
                                    </div>
                                    --}}
                                    <div
                                        class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
                                        <svg aria-label="Upload Picture" width="57" height="57" viewBox="0 0 57 57"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/provider.svg#camera"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3>Referral Code: KYTALB</h3>
                                </div>
                                <div>
                                    <svg aria-label="Certified" width="20" height="28" viewBox="0 0 20 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="/css/provider.svg#green-badge"></use>
                                    </svg>
                                    <span><strong>Certified</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <h2>Profile</h2>
                            </div>
                            <div class="col-lg-6 mb-4 pe-lg-5">
                                <label class="form-label" for="f-name">
                                    First Name
                                    <span class="mandatory" aria-hidden="true">
                                        *
                                    </span>
                                </label>
                                <input type="text" id="f-name" class="form-control" name="f-name"
                                    placeholder="Enter First Name" required aria-required="true" />
                            </div>
                            <div class="col-lg-6 mb-4 ps-lg-5">
                                <label class="form-label" for="l-name">
                                    Last Name
                                    <span class="mandatory" aria-hidden="true">
                                        *
                                    </span>
                                </label>
                                <input type="text" id="l-name" class="form-control" name="l-name"
                                    placeholder="Enter Last Name" required aria-required="true" />
                            </div>
                            <div class="col-lg-6 mb-4 pe-lg-5">
                                <label class="form-label" for="pronouns-column">
                                    Pronouns
                                </label>
                                <input type="text" id="pronouns-column" class="form-control"
                                    placeholder="Enter Pronouns" name="pronouns" />
                            </div>
                            <div class="col-lg-6 ps-lg-5 mb-4">
                                <label class="form-label" for="">
                                    Date of Birth
                                </label>
                                <div class="d-flex align-items-center w-100">
                                    <div class="position-relative flex-grow-1">
                                        <input type="text" class="form-control js-single-date"
                                            placeholder="Select Date of Birth" aria-label="" aria-describedby="">
                                            <svg aria-label="Select Date" class="icon-date right cursor-pointer" width="20" height="20" viewBox="0 0 20 20"fill="none"
                                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#input-calender"></use>
                                              </svg>
                                    </div>
                                    <button aria-label="View" type="button" class="btn px-2">
                                        <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20"fill="none"
                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#black-eye"></use>
                                      </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4 pe-lg-5">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <label class="form-label mb-lg-0" for="gender-column">
                                        Gender
                                    </label>
                                    <a href="#" class="fw-bold">
                                        <small>
                                            <svg  width="19" height="19" viewBox="0 0 19 19"fill="none"
                                               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#blue-plus"></use>
                                            </svg>
                                            Add New
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
                                    <a href="#" class="fw-bold">
                                        <small>
                                            <svg  width="19" height="19" viewBox="0 0 19 19"fill="none"
                                               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#blue-plus"></use>
                                            </svg>
                                            Add New
                                        </small>
                                    </a>
                                </div>
                                {!! $setupValues['ethnicities']['rendered'] !!}
                            </div>
                            <div class="col-lg-6 mb-4 pe-lg-5">
                                <label class="form-label" for="providerID-column">
                                    Provider ID
                                </label>
                                <input type="email" id="providerID-column" class="form-control" name="providerID-column"
                                    placeholder="Enter Provider ID" />
                            </div>
                            <div class="col-lg-6 mb-4 ps-lg-5">
                            </div>
                            <div class="col-lg-6 mb-4 pe-lg-5">
                                <label class="form-label" for="email">
                                    Email
                                    <span class="mandatory" aria-hidden="true">
                                        *
                                    </span>
                                </label>
                                <input type="text" id="email" class="form-control" name="email"
                                    placeholder="Enter Email" required aria-required="true" />
                            </div>
                            <div class="col-lg-6 mb-4 ps-lg-5">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="text" id="phone" class="form-control" name="phone"
                                    placeholder="Enter Phone Number" />
                            </div>
                            <div class="col-lg-6 mb-4 pe-lg-5">
                                <label class="form-label" for="country">
                                    Country
                                </label>
                                {!! $setupValues['countries']['rendered'] !!}
                            </div>
                            <div class="col-lg-6 mb-4 ps-lg-5">
                                <label class="form-label" for="state">
                                    State / Province
                                </label>
                                <select class="select2 form-select" id="state">
                                    <option value="Al">
                                        Select State / Province
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-4 pe-lg-5">
                                <label class="form-label" for="city">
                                    City
                                </label>
                                <select class="select2 form-select" id="city">
                                    <option value="">Select City</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-4 ps-lg-5">
                                <label class="form-label" for="zip-code">
                                    Zip Code
                                </label>
                                <input type="text" id="zip-code" class="form-control" name="zipCode"
                                    placeholder="Enter Zip Code" />
                            </div>
                            <div class="col-lg-6 mb-4 pe-lg-5">
                                <label class="form-label" for="address-line-1">
                                    Address Line 1
                                </label>
                                <input type="text" id="address-line-1" class="form-control" name="address-line-1"
                                    placeholder="Enter Address Line 1" />
                            </div>
                            <div class="col-lg-6 mb-4 ps-lg-5">
                                <label class="form-label" for="address-line-2">
                                    Address Line 2
                                </label>
                                <input type="text" id="address-line-2" class="form-control" name="addressLine2"
                                    placeholder="Enter Address Line 2" />
                            </div>
                            <div class="col-lg-6 mb-4 pe-lg-5">
                                <label class="form-label" for="start-date-column">
                                    Start Date
                                </label>
                                <div class="d-flex align-items-center w-100">
                                    <div class="position-relative flex-grow-1">
                                        <input type="text" class="form-control js-single-date"
                                            placeholder="Select Date of Birth" aria-label="" aria-describedby=""
                                            id="start-date-column">
                                            <svg aria-label="Select Date" class="icon-date right cursor-pointer" width="20" height="20" viewBox="0 0 20 20"fill="none"
                                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#input-calender"></use>
                                              </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4 ps-lg-5">
                                <label class="form-label" for="end-date-column">
                                    End Date
                                </label>
                                <div class="d-flex align-items-center w-100">
                                    <div class="position-relative flex-grow-1">
                                        <input type="text" class="form-control js-single-date"
                                            placeholder="Select Date of Birth" aria-label="" aria-describedby=""
                                            id="end-date-column">
                                            <svg aria-label="Select Date" class="icon-date right cursor-pointer" width="20" height="20" viewBox="0 0 20 20"fill="none"
                                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#input-calender"></use>
                                              </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4 pe-lg-5">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="form-label" for="education">
                                        Education
                                    </label>
                                    <a href="#" class="fw-bold">
                                        <small>
                                            <svg  class="me-1" width="21" height="16" viewBox="0 0 21 16"fill="none"
                                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#upload-doc"></use>
                                              </svg>
                                            Upload Supporting Documents
                                        </small>
                                    </a>
                                </div>
                                <input type="text" id="education" class="form-control" name="education-column"
                                    placeholder="Enter Education" />
                            </div>
                            <div class="col-lg-6 mb-4 ps-lg-5">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <label class="form-label mb-lg-0" for="certification-column">
                                        Certification(s)
                                    </label>
                                    <div class="d-flex align-items-center gap-3">
                                        <a href="#" class="fw-bold">
                                            <small>
                                                <svg  width="19" height="19" viewBox="0 0 19 19"fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#blue-plus"></use>
                                             </svg>
                                                Add New
                                            </small>
                                        </a>
                                        <a href="#" class="fw-bold">
                                            <small>
                                                <svg  class="me-1" width="21" height="16" viewBox="0 0 21 16"fill="none"
                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#upload-doc"></use>
                                              </svg>
                                                Upload Supporting Documents
                                            </small>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                   {{-- updated by shanila to add multiselectdropdown --}}
                                   {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id', 'setup_value_label', 'setup_id', 8, 'setup_value_label', true, '','','form-check') !!}
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
                                    <label class="form-label" for="experience-column">
                                        Experience
                                    </label>
                                    <a href="#" class="fw-bold">
                                        <small>
                                            <svg  class="me-1" width="21" height="16" viewBox="0 0 21 16"fill="none"
                                               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#upload-doc"></use>
                                            </svg>
                                            Upload Supporting Documents
                                        </small>
                                    </a>
                                </div>
                                <textarea class="form-control" rows="3" cols="3" placeholder="" name="experienceColumn"
                                    id="experience-column"></textarea>
                            </div>
                            <div class="col-lg-6 ps-lg-5">
                                <label class="form-label" for="notes-column">
                                    Notes
                                </label>
                                <textarea class="form-control" rows="3" placeholder="" name="notesColumn"
                                    id="notes-column"></textarea>
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
                                <select class="select2 form-select" id="preferred-colleagues-column">
                                    <option value="preferred-colleagues-column">
                                        Select Preferred Colleagues
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-6 ps-lg-5">
                                <label class="form-label" for="disfavored-colleagues-column">
                                    Disfavored Colleagues
                                </label>
                                <select class="select2 form-select" id="disfavored-colleagues-column">
                                    <option value="disfavored-colleagues-column">
                                        Select Disfavored Colleagues
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-4 pe-lg-5">
                                <label class="form-label" for="provider-introduction">
                                    Provider Introduction
                                </label>
                                <textarea class="form-control" rows="3" cols="3" placeholder=""
                                    name="provider- introduction" id="provider-introduction"></textarea>
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
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <h2>Provider Schedule Configuration</h2>
                                    <div class="row mt-5">
                                        <h3>Provider Type</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <div class="mb-2">
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="mb-0">
                                                        <label class="form-check-label" for="ContractProviderType">
                                                            Contract Provider
                                                        </label>
                                                        <svg  width="19" height="19" viewBox="0 0 19 19"fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#fill-question"></use>
                                                     </svg>
                                                    </div>
                                                    <div>
                                                        <button type="button"
                                                            class="btn btn-outline-primary px-3 py-1 rounded-lg btn-has-icon px-0 btn-multiselect-popup">
                                                            Availability Schedule
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4 class="mb-2">
                                    Would you like to set a rate for when this provider works outside their set
                                    schedule?
                                </h4>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <label class="form-check-label" for="provider-rate-schedule-radio-btn">
                                            Yes
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- Input Fields End --}}
                        </div>
                        {{-- Action Buttons - Start --}}
                        <div class="col-12 justify-content-center form-actions d-flex gap-3">
                            <button type="button" class="btn btn-outline-dark rounded">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary rounded"
                                x-on:click="$wire.switch('service-catalog')">
                                Next
                            </button>
                        </div>
                    </div>
                    {{-- END: Profile --}}
                    {{-- BEGIN:Service Catalog --}}
                    <div class="tab-pane fade" :class="{ 'active show': tab === 'service-catalog' }"
                        id="service-catalog" role="tabpanel" aria-labelledby="service-catalog-tab" tabindex="0"
                        x-show="tab === 'service-catalog'">
                        <section id="multiple-column-form">
                            <!-- END: Sign Language Interpreting Services -->
                            <div class="mb-4">
                                <div class="mb-3 fw-semibold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accomodation" aria-expanded="true" aria-controls="accomodation">
                                    Sign Language Interpreting Services
                                    <svg class="icon-arrow-bottom ms-5" width="32" height="15" viewBox="0 0 32 15"fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#grey-upper-arrow"></use>
                                    </svg>
                                </div>
                                {{--
                                <div class="row collapse show mb-3" id="accomodation">
                                    <div class="mb-2 fw-semibold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#accomodation-category-one" aria-expanded="false"
                                        aria-controls="accomodation-category">
                                        <svg class="mb-1" width="32" height="16" viewBox="0 0 32 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.897074 15.2467C1.33505 15.614 1.929 15.8203 2.54831 15.8203C3.16761 15.8203 3.76156 15.614 4.19954 15.2467L15.7605 5.54916L27.3215 15.2467C27.762 15.6036 28.3519 15.801 28.9643 15.7966C29.5767 15.7921 30.1625 15.5861 30.5955 15.2228C31.0285 14.8596 31.2741 14.3682 31.2795 13.8546C31.2848 13.3409 31.0494 12.846 30.6239 12.4765L17.4117 1.39391C16.9738 1.02663 16.3798 0.820312 15.7605 0.820312C15.1412 0.820312 14.5473 1.02663 14.1093 1.39391L0.897074 12.4765C0.459226 12.8439 0.213257 13.3421 0.213257 13.8616C0.213257 14.3811 0.459226 14.8793 0.897074 15.2467Z"
                                                fill="#575656" />
                                        </svg>
                                        Construction
                                    </div>
                                    <div class="collapse" id="accomodation-category-one">
                                        <!-- accommodation-category body here -->
                                    </div>
                                </div>
                                --}}
                                <div class="collapse show" id="accomodation">
                                    <div class="mb-3 fw-semibold" data-bs-toggle="collapse" type="button"
                                        data-bs-target="#accomodation-category" aria-expanded="true"
                                        aria-controls="accomodation">
                                        <svg class="icon-arrow-bottom me-1" width="25" height="13" viewBox="0 0 25 13"fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#grey-upper-arrow"></use>
                                       </svg>
                                        Film Production
                                    </div>
                                    <div class="collapse show" id="accomodation-category">
                                        <div class="row">
                                            <div class="d-inline-flex mb-4">
                                                <h2>Standard Rates</h2>
                                                <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16"fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#fill-question"></use>
                                                </svg>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-4">
                                                    <div class="d-inline-flex">
                                                        <div>
                                                            <svg aria-label="In-Person" width="25" height="24"
                                                                viewBox="0 0 25 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#in-person"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-3 fw-semibold">Day Rate In-person:</div>
                                                        <div class="mx-3">$101.00</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="d-inline-flex">
                                                        <div>
                                                            <svg aria-label="Virtual" width="25" height="25"
                                                                viewBox="0 0 25 25" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#virtual-service">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-3 fw-semibold">Day Rate Virtual:</div>
                                                        <div class="mx-3">$101.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-4">
                                                    <div class="d-inline-flex">
                                                        <div>
                                                            <svg aria-label="Phone" width="30" height="24"
                                                                viewBox="0 0 30 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#phone"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-3 fw-semibold">Day Rate Phone:</div>
                                                        <div class="mx-3">$101.00</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="d-inline-flex">
                                                        <div>
                                                            <svg aria-label="Teleconference" width="30" height="26"
                                                                viewBox="0 0 30 26" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#teleconference">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-3 fw-semibold">Day Rate Teleconference:</div>
                                                        <div class="mx-3">$101.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        {{-- Standandard Rates -End --}}
                                        {{-- InPerson Expedited Service -Start --}}
                                        <div class="row">
                                            <div class="d-inline-flex mb-4">
                                                <h2>Expedited Hours </h2>
                                                <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16"fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#fill-question"></use>
                                                </svg>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="d-inline-flex">
                                                    <div class="d-inline-flex col-3">
                                                        <div>
                                                            <svg aria-label="In-Person" width="25" height="24"
                                                                viewBox="0 0 25 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#in-person"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-2 d-inline-flex">
                                                            <div class="text-primary fw-semibold">In-person</div>
                                                            <div class="mx-2 ">
                                                                <svg aria-label="" width="15" height="16"
                                                                    viewBox="0 0 15 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#fill-question">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-flex col-3">
                                                        <div class="bg-muted rounded">
                                                            <span class="fw-semibold">Parameter 1</span>
                                                        </div>
                                                        <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
                                                            </span><span class="mx-1">5</span></div>
                                                    </div>
                                                    <div class="mx-2 d-inline-flex">
                                                        <div class="d-inline-flex">
                                                            <span class="fw-semibold">Rate: </span><span
                                                                class="mx-1">$100.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="mx-4">
                                                        Multiply by service duration
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- InPerson Expedited Service -End --}}
                                            <div class="row mb-3">
                                                <div class="d-inline-flex">
                                                    <div class="d-inline-flex col-3">
                                                        <div>
                                                            <svg aria-label="Virtual" width="25" height="25"
                                                                viewBox="0 0 25 25" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#virtual-service">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-2 d-inline-flex">
                                                            <div class="text-primary fw-semibold">Virtual</div>
                                                            <div class="mx-2 ">
                                                                <svg aria-label="" width="15" height="16"
                                                                    viewBox="0 0 15 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#fill-question">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-flex col-3">
                                                        <div class="bg-muted rounded">
                                                            <span class="fw-semibold">Parameter 1</span>
                                                        </div>
                                                        <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
                                                            </span><span class="mx-1">5</span></div>
                                                    </div>
                                                    <div class="mx-2 d-inline-flex">
                                                        <div class="d-inline-flex">
                                                            <span class="fw-semibold">Rate: </span><span
                                                                class="mx-1">$100.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="mx-4">
                                                        Multiply by service duration
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Virtual Expedited service End --}}
                                            <div class="row mb-3">
                                                <div class="d-inline-flex">
                                                    <div class="d-inline-flex col-3">
                                                        <div>
                                                            <svg aria-label="Phone" width="30" height="24"
                                                                viewBox="0 0 30 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#phone"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-2 d-inline-flex">
                                                            <div class="text-primary fw-semibold">Phone</div>
                                                            <div class="mx-2 ">
                                                                <svg aria-label="" width="15" height="16"
                                                                    viewBox="0 0 15 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#fill-question">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-flex col-3">
                                                        <div class="bg-muted rounded">
                                                            <span class="fw-semibold">Parameter 1</span>
                                                        </div>
                                                        <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
                                                            </span><span class="mx-1">5</span></div>
                                                    </div>
                                                    <div class="mx-2 d-inline-flex">
                                                        <div class="d-inline-flex">
                                                            <span class="fw-semibold">Rate: </span><span
                                                                class="mx-1">$100.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="mx-4">
                                                        Multiply by service duration
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Phone Expedited Service -End --}}
                                            <div class="row mb-4">
                                                <div class="d-inline-flex">
                                                    <div class="d-inline-flex col-3">
                                                        <div>
                                                            <svg aria-label="Teleconference" width="30" height="26"
                                                                viewBox="0 0 30 26" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#teleconference">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-2 d-inline-flex">
                                                            <div class="text-primary fw-semibold">Teleconference</div>
                                                            <div class="mx-2 ">
                                                                <svg aria-label="" width="15" height="16"
                                                                    viewBox="0 0 15 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#fill-question">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-flex col-3">
                                                        <div class="bg-muted rounded">
                                                            <span class="fw-semibold">Parameter 1</span>
                                                        </div>
                                                        <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
                                                            </span><span class="mx-1">5</span></div>
                                                    </div>
                                                    <div class="mx-2 d-inline-flex">
                                                        <div class="d-inline-flex">
                                                            <span class="fw-semibold">Rate: </span><span
                                                                class="mx-1">$100.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="mx-4">
                                                        Multiply by service duration
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Teleconference Expedited Service End --}}
                                            <div class="row">
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <div class="d-inline-flex mb-3">
                                                    <h2>Specialization Rates</h2>
                                                    <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16"fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#fill-question"></use>
                                                </svg>
                                                </div>
                                                <div class="bg-muted p-1 col-1 mx-3 mb-2">Medical</div>
                                                <div class="d-inline-flex">
                                                    <div class="mx-2">
                                                        <div class="d-inline-flex">
                                                            <div>
                                                                <span class="fw-semibold">Rate Type:</span>
                                                                <span>%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3">
                                                        <div class="d-inline-flex">
                                                            <div>
                                                                <svg aria-label="In-Person" width="25" height="24"
                                                                    viewBox="0 0 25 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#in-person"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1 mt-1"><span class="fw-semibold">In-Person:
                                                                </span><span class="mx-1">$100.00</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3">
                                                        <div class="d-inline-flex">
                                                            <div>
                                                                <svg aria-label="Virtual" width="25" height="25"
                                                                    viewBox="0 0 25 25" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#virtual-service">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1 mt-1"><span
                                                                    class="fw-semibold">Virtual:</span><span
                                                                    class="mx-1">$100.00</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3">
                                                        <div class="d-inline-flex">
                                                            <div>
                                                                <svg aria-label="Phone" width="30" height="24"
                                                                    viewBox="0 0 30 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#phone"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1 mt-1"><span
                                                                    class="fw-semibold">Phone:</span><span
                                                                    class="mx-1">$100.00</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3">
                                                        <div class="d-inline-flex">
                                                            <div>
                                                                <svg aria-label="Teleconference" width="30" height="26"
                                                                    viewBox="0 0 30 26" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#teleconference">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1 mt-1"><span
                                                                    class="fw-semibold">Teleconferencing:</span><span
                                                                    class="mx-1">$100.00</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4 mb-3">
                                                    <div class="col-3 mb-2 mx-1">
                                                        <span class="bg-muted p-1 mb-3"> Projector & Screen
                                                            Rental</span>
                                                    </div>
                                                    <div class="d-inline-flex mt-2">
                                                        <div class="mx-2">
                                                            <div class="d-inline-flex">
                                                                <div>
                                                                    <span class="fw-semibold"> Rate
                                                                        Type:</span><span>%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mx-3">
                                                            <div class="d-inline-flex">
                                                                <div>
                                                                    <svg aria-label="In-Person" width="25" height="24"
                                                                        viewBox="0 0 25 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <use xlink:href="/css/provider.svg#in-person">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                                <div class="mx-1 mt-1"><span
                                                                        class="fw-semibold">In-Person: </span><span
                                                                        class="mx-1">$100.00</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="mx-3">
                                                            <div class="d-inline-flex">
                                                                <div>
                                                                    <svg aria-label="Virtual" width="25" height="25"
                                                                        viewBox="0 0 25 25" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <use
                                                                            xlink:href="/css/provider.svg#virtual-service">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                                <div class="mx-1 mt-1"><span
                                                                        class="fw-semibold">Virtual:</span><span
                                                                        class="mx-1">$100.00</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="mx-3">
                                                            <div class="d-inline-flex">
                                                                <div>
                                                                    <svg aria-label="Phone" width="30" height="24"
                                                                        viewBox="0 0 30 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <use xlink:href="/css/provider.svg#phone"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="mx-1 mt-1"><span
                                                                        class="fw-semibold">Phone:</span><span
                                                                        class="mx-1">$100.00</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="mx-3">
                                                            <div class="d-inline-flex">
                                                                <div>
                                                                    <svg aria-label="Teleconference" width="30"
                                                                        height="26" viewBox="0 0 30 26" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <use
                                                                            xlink:href="/css/provider.svg#teleconference">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                                <div class="mx-1 mt-1"><span
                                                                        class="fw-semibold">Teleconferencing:</span><span
                                                                        class="mx-1">$100.00</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            {{-- Specialization Rates -End --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Sign Language Interpreting Services -->
                            {{-- First accommodation -End --}}
                            <div class="row">
                                <div class="mb-3 fw-semibold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accomodation-four" aria-expanded="false"
                                    aria-controls="accomodation-four">
                                    Spoken Language Interpreting Services
                                    <svg class="icon-arrow-bottom ms-5" width="32" height="15" viewBox="0 0 32 15"fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#grey-down-arrow"></use>
                                    </svg>
                                </div>
                                <div class="collapse" id="accomodation-four">
                                    <div class="row">
                                        <div class="d-inline-flex mb-4">
                                            <h2>Standard Rates</h2>
                                            <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16"fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#fill-question"></use>
                                                </svg>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-4">
                                                <div class="d-inline-flex">
                                                    <div>
                                                        <svg aria-label="In-Person" width="25" height="24"
                                                            viewBox="0 0 25 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#in-person"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="mx-3 fw-semibold">Day Rate In-person:</div>
                                                    <div class="mx-3">$101.00</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-inline-flex">
                                                    <div>
                                                        <svg aria-label="Virtual" width="25" height="25"
                                                            viewBox="0 0 25 25" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#virtual-service"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="mx-3 fw-semibold">Day Rate Virtual:</div>
                                                    <div class="mx-3">$101.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-4">
                                                <div class="d-inline-flex">
                                                    <div>
                                                        <svg aria-label="Phone" width="30" height="24"
                                                            viewBox="0 0 30 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#phone"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="mx-3 fw-semibold">Day Rate Phone:</div>
                                                    <div class="mx-3">$101.00</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-inline-flex">
                                                    <div>
                                                        <svg aria-label="Teleconference" width="30" height="26"
                                                            viewBox="0 0 30 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#teleconference"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="mx-3 fw-semibold">Day Rate Teleconference:</div>
                                                    <div class="mx-3">$101.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    {{-- Standandard Rates -End --}}
                                    {{-- InPerson Expedited Service -Start --}}
                                    <div class="row">
                                        <div class="d-inline-flex mb-4">
                                            <h2>Expedited Hours </h2>
                                            <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16"fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#fill-question"></use>
                                                </svg>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="d-inline-flex">
                                                <div class="d-inline-flex col-3">
                                                    <div>
                                                        <svg aria-label="In-Person" width="25" height="24"
                                                            viewBox="0 0 25 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#in-person"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="mx-2 d-inline-flex">
                                                        <div class="text-primary fw-semibold">In-person</div>
                                                        <div class="mx-2 ">
                                                            <svg aria-label="" width="15" height="16"
                                                                viewBox="0 0 15 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#fill-question"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-inline-flex col-3">
                                                    <div class="bg-muted rounded">
                                                        <span class="fw-semibold">Parameter 1</span>
                                                    </div>
                                                    <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
                                                        </span><span class="mx-1">5</span></div>
                                                </div>
                                                <div class="mx-2 d-inline-flex">
                                                    <div class="d-inline-flex">
                                                        <span class="fw-semibold">Rate: </span><span
                                                            class="mx-1">$100.00</span>
                                                    </div>
                                                </div>
                                                <div class="mx-4">
                                                    Multiply by service duration
                                                </div>
                                            </div>
                                        </div>
                                        {{-- InPerson Expedited Service -End --}}
                                        <div class="row mb-3">
                                            <div class="d-inline-flex">
                                                <div class="d-inline-flex col-3">
                                                    <div>
                                                        <svg aria-label="Virtual" width="25" height="25"
                                                            viewBox="0 0 25 25" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#virtual-service"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="mx-2 d-inline-flex">
                                                        <div class="text-primary fw-semibold">Virtual</div>
                                                        <div class="mx-2 ">
                                                            <svg aria-label="" width="15" height="16"
                                                                viewBox="0 0 15 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#fill-question"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-inline-flex col-3">
                                                    <div class="bg-muted rounded">
                                                        <span class="fw-semibold">Parameter 1</span>
                                                    </div>
                                                    <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
                                                        </span><span class="mx-1">5</span></div>
                                                </div>
                                                <div class="mx-2 d-inline-flex">
                                                    <div class="d-inline-flex">
                                                        <span class="fw-semibold">Rate: </span><span
                                                            class="mx-1">$100.00</span>
                                                    </div>
                                                </div>
                                                <div class="mx-4">
                                                    Multiply by service duration
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Virtual Expedited service End --}}
                                        <div class="row mb-3">
                                            <div class="d-inline-flex">
                                                <div class="d-inline-flex col-3">
                                                    <div>
                                                        <svg aria-label="Phone" width="30" height="24"
                                                            viewBox="0 0 30 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#phone"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="mx-2 d-inline-flex">
                                                        <div class="text-primary fw-bold">Phone</div>
                                                        <div class="mx-2 ">
                                                            <svg aria-label="" width="15" height="16"
                                                                viewBox="0 0 15 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#fill-question"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-inline-flex col-3">
                                                    <div class="bg-muted rounded">
                                                        <span class="fw-semibold">Parameter 1</span>
                                                    </div>
                                                    <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
                                                        </span><span class="mx-1">5</span></div>
                                                </div>
                                                <div class="mx-2 d-inline-flex">
                                                    <div class="d-inline-flex">
                                                        <span class="fw-semibold">Rate: </span><span
                                                            class="mx-1">$100.00</span>
                                                    </div>
                                                </div>
                                                <div class="mx-4">
                                                    Multiply by service duration
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Phone Expedited Service -End --}}
                                        <div class="row mb-4">
                                            <div class="d-inline-flex">
                                                <div class="d-inline-flex col-3">
                                                    <div>
                                                        <svg aria-label="Teleconference" width="30" height="26"
                                                            viewBox="0 0 30 26" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#teleconference"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="mx-2 d-inline-flex">
                                                        <div class="text-primary fw-bold">Teleconference</div>
                                                        <div class="mx-2 ">
                                                            <svg aria-label="" width="15" height="16"
                                                                viewBox="0 0 15 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#fill-question"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-inline-flex col-3">
                                                    <div class="bg-muted rounded">
                                                        <span class="fw-semibold">Parameter 1</span>
                                                    </div>
                                                    <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
                                                        </span><span class="mx-1">5</span></div>
                                                </div>
                                                <div class="mx-2 d-inline-flex">
                                                    <div class="d-inline-flex">
                                                        <span class="fw-semibold">Rate: </span><span
                                                            class="mx-1">$100.00</span>
                                                    </div>
                                                </div>
                                                <div class="mx-4">
                                                    Multiply by service duration
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Teleconference Expedited Service End --}}
                                        <div class="row">
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="d-inline-flex mb-3">
                                                <h2>Specialization Rates</h2>
                                                <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16"fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#fill-question"></use>
                                                </svg>
                                            </div>
                                            <div class="bg-muted p-1 col-1 mx-3 mb-2">Medical</div>
                                            <div class="d-inline-flex">
                                                <div class="mx-2">
                                                    <div class="d-inline-flex">
                                                        <div>
                                                            <span class="fw-semibold">Rate Type:</span> <span>%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mx-3">
                                                    <div class="d-inline-flex">
                                                        <div>
                                                            <svg aria-label="In-Person" width="25" height="24"
                                                                viewBox="0 0 25 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#in-person"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-1 mt-1"><span class="fw-semibold">In-Person:
                                                            </span><span class="mx-1">$100.00</span></div>
                                                    </div>
                                                </div>
                                                <div class="mx-3">
                                                    <div class="d-inline-flex">
                                                        <div>
                                                            <svg aria-label="Virtual" width="25" height="25"
                                                                viewBox="0 0 25 25" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#virtual-service">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-1 mt-1"><span
                                                                class="fw-semibold">Virtual:</span><span
                                                                class="mx-1">$100.00</span></div>
                                                    </div>
                                                </div>
                                                <div class="mx-3">
                                                    <div class="d-inline-flex">
                                                        <div>
                                                            <svg aria-label="Phone" width="30" height="24"
                                                                viewBox="0 0 30 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#phone"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-1 mt-1"><span
                                                                class="fw-semibold">Phone:</span><span
                                                                class="mx-1">$100.00</span></div>
                                                    </div>
                                                </div>
                                                <div class="mx-3">
                                                    <div class="d-inline-flex">
                                                        <div>
                                                            <svg aria-label="Teleconference" width="30" height="26"
                                                                viewBox="0 0 30 26" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#teleconference">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                        <div class="mx-1 mt-1"><span
                                                                class="fw-semibold">Teleconferencing:</span><span
                                                                class="mx-1">$100.00</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4 mb-3">
                                                <div class="col-3 mb-2 mx-1">
                                                    <span class="bg-muted p-1 mb-3"> Projector & Screen Rental</span>
                                                </div>
                                                <div class="d-inline-flex mt-2">
                                                    <div class="mx-2">
                                                        <div class="d-inline-flex">
                                                            <div>
                                                                <span class="fw-semibold"> Rate
                                                                    Type:</span><span>%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3">
                                                        <div class="d-inline-flex">
                                                            <div>
                                                                <svg aria-label="In-Person" width="25" height="24"
                                                                    viewBox="0 0 25 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#in-person"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1 mt-1"><span class="fw-semibold">In-Person:
                                                                </span><span class="mx-1">$100.00</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3">
                                                        <div class="d-inline-flex">
                                                            <div>
                                                                <svg aria-label="Virtual" width="25" height="25"
                                                                    viewBox="0 0 25 25" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#virtual-service">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1 mt-1"><span
                                                                    class="fw-semibold">Virtual:</span><span
                                                                    class="mx-1">$100.00</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3">
                                                        <div class="d-inline-flex">
                                                            <div>
                                                                <svg aria-label="Phone" width="30" height="24"
                                                                    viewBox="0 0 30 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#phone"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1 mt-1"><span
                                                                    class="fw-semibold">Phone:</span><span
                                                                    class="mx-1">$100.00</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3">
                                                        <div class="d-inline-flex">
                                                            <div>
                                                                <svg aria-label="Teleconference" width="30" height="26"
                                                                    viewBox="0 0 30 26" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#teleconference">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1 mt-1"><span
                                                                    class="fw-semibold">Teleconferencing:</span><span
                                                                    class="mx-1">$100.00</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        {{-- Specialization Rates -End --}}
                                    </div>
                                </div>
                            </div>
                            {{-- Accommodation two -End --}}
                            <div class="col-12 justify-content-center form-actions d-flex gap-3">
                                <button type="button" class="btn btn-outline-dark rounded"
                                    x-on:click="$wire.switch('profile')">
                                    Cancel
                                </button>
                                <button type="button" class="btn btn-primary rounded"
                                    x-on:click="$wire.switch('profile')">
                                    Save
                                </button>
                            </div>
                        </section>
                    </div>
                    {{-- END: Service Catalog--}}
                </div>
            </div>
        </div>
    </div>
</div>
