<div x-data="{customers: false}">
    <div class="content-header row">
        <div class="content-header-left col-12 mb-5">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        Add Company
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Home">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- End of update by Shanila --}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">
                                    Customers
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                All Companies
                            </li>
                            <li class="breadcrumb-item">
                                Add Company
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
                    {{-- NavTabs --}}
                    <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="nav-link" :class="{ 'active': tab === 'company-info' }"
                                @click.prevent="tab = 'company-info'" id="company-info-tab" role="tab"
                                aria-controls="company-info" aria-selected="true">
                                <span class="number">1</span>
                                Company Info
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'service-catalog' }"
                                @click.prevent="tab = 'service-catalog'" id="service-catalog-tab" role="tab"
                                aria-controls="service-catalog" aria-selected="false">
                                <span class="number">2</span>
                                Service Catalog
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'drive-documents' }"
                                @click.prevent="tab = 'drive-documents'" id="drive-documents-tab" role="tab"
                                aria-controls="drive-documents" aria-selected="false">
                                <span class="number">3</span>
                                Drive Documents
                            </a>
                        </li>
                    </ul>

                    {{-- Tab Panes --}}
                    <div class="tab-content">
                        {{-- BEGIN: Customer Info --}}
                        <div class="tab-pane fade" :class="{ 'active show': tab === 'company-info' }" id="company-info"
                            role="tabpanel" aria-labelledby="company-info-tab" tabindex="0"
                            x-show="tab === 'company-info'">
                            <section id="multiple-column-form">
                                <div class="row">
                                    <div class="col-12">
                                        <form class="form">
                                            {{-- updated by shanila to add csrf--}}
                                            @csrf
                                            {{-- update ended by shanila --}}
                                            <div class="row between-section-segment-spacing">
                                                <div class="col-12 text-center">
                                                    <div class="d-inline-block position-relative">
                                                        <img src="/tenant/images/portrait/small/testing.png" width="150"
                                                            height="130" class="img-fluid rounded-circle"
                                                            alt="Company Image" />
                                                        <div
                                                            class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
                                                            <svg aria-label="Upload Picture" width="57" height="57"
                                                                viewBox="0 0 57 57" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/provider.svg#camera"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-12 mb-md-2">
                                                    <h2>Company Info</h2>
                                                </div>

                                                {{-- Company --}}
                                                <div class="col-lg-6 pe-lg-5 col-12">
                                                    <div class="mb-2">
                                                        <label class="form-label" for="company-name">
                                                            Company Name
                                                            <span class="mandatory" aria-hidden="true">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input type="text" id="company-name" class="form-control"
                                                            name="company-name" placeholder="Enter Company Name"
                                                            required aria-required="true" />
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="hide-user-details-providers"
                                                            id="hide-user-details-providers">
                                                        <label class="form-check-label"
                                                            for="hide-user-details-providers">
                                                            Hide All Comapny Users' Details from Providers
                                                        </label>
                                                    </div>
                                                </div>

                                                {{-- Industry --}}
                                                <div class="col-lg-6 ps-lg-5 col-12">
                                                    <label class="form-label" for="industry-column">
                                                        Industry
                                                        <span class="mandatory" aria-hidden="true">
                                                            *
                                                        </span>
                                                    </label>
                                                    {{-- Updated by Shanila to add dropdown--}}
                                                    {!! App\Helpers\SetupHelper::createDropDown('Industry', 'id',
                                                    'name', '', '', 'name', false, 'industry',
                                                    '','industry') !!}
                                                    {{-- End of update by Shanila --}}
                                                </div>
                                            </div>
                                            <div class="row">
                                                {{-- Department Website --}}
                                                <div class="row mb-4">
                                                    <div class="col-lg-6 pe-lg-5 col-12">
                                                        <label class="form-label" for="company-website">
                                                            Company Website
                                                        </label>
                                                        <input type="text" id="company-website" class="form-control"
                                                            name="company-website" placeholder="Enter Website URL"
                                                            required aria-required="true" />
                                                    </div>
                                                </div>

                                                {{-- Department Business Hours --}}
                                                <div class="col-lg-6 pe-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="department-business-hours">Manage
                                                            Company Business Hours</label>
                                                        <div class="mb-1">
                                                            <button type="button"
                                                                class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#companybusinesshoursModel">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label=" Select Department" width="25"
                                                                    height="18" viewBox="0 0 25 18">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#right-color-arrow">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                                Add Schedule
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Preferred Language --}}
                                                <div class="col-lg-6 ps-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="preferred-language">
                                                            Preferred Language
                                                        </label>
                                                        {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id',
                                                        'setup_value_label', 'setup_id', 1, 'setup_value_label', false,
                                                        'languages',
                                                        '','languages') !!}
                                                    </div>
                                                </div>
                                                {{-- Service Start Date --}}
                                                <div class="col-lg-6 mb-4 pe-lg-5">
                                                    <label class="form-label" for="service-start-date-column">
                                                        Service Start Date
                                                    </label>
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="position-relative flex-grow-1">
                                                            <input type="text" class="form-control js-single-date"
                                                                placeholder="MM/DD/YYYY" aria-label=""
                                                                aria-describedby="" id="service-start-date-column">
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


                                                {{-- Service End Date --}}
                                                <div class="col-lg-6 mb-4 ps-lg-5">
                                                    <label class="form-label" for="service-end-date-column">
                                                        Service End Date
                                                    </label>
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="position-relative flex-grow-1">
                                                            <input type="text" class="form-control js-single-date"
                                                                placeholder="MM/DD/YYYY" aria-label=""
                                                                aria-describedby="" id="service-end-date-column">
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



                                                {{-- Company Admin(s) --}}
                                                <div class="col-lg-6 pe-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="company-manager">
                                                            Company Admin(s)
                                                        </label>
                                                        <input type="text" id="company-admin" class="form-control"
                                                            name="company-admin" placeholder="Add Company Admin(s)" />
                                                    </div>
                                                </div>

                                                {{-- Associated Tags --}}
                                                <div class="col-lg-6 ps-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="associated-tags">
                                                            Associated Tags
                                                        </label>
                                                        <input type="text" id="associated-tags" class="form-control"
                                                            name="associated-tags"
                                                            placeholder="Enter Associated Tags" />
                                                    </div>
                                                </div>

                                                {{-- Preferred Providers --}}
                                                <div class="col-lg-6 pe-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="preferred-providers">
                                                            Preferred Providers
                                                        </label>
                                                        <select class="select2 form-select" id="preferred-providers">
                                                            <option>
                                                                Select Preferred Providers
                                                            </option>
                                                            <option>
                                                                Wade Dave
                                                            </option>
                                                            <option>
                                                                Dori Griffiths
                                                            </option>
                                                            <option>
                                                                Gilbert Dan
                                                            </option>
                                                            <option>
                                                                Ramon Miles
                                                            </option>
                                                            <option>
                                                                Alexis Griffiths
                                                            </option>
                                                            <option>
                                                                Tessa Leo
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Disfavored Providers --}}
                                                <div class="col-lg-6 ps-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="disfavored-providers">
                                                            Disfavored Providers
                                                        </label>
                                                        <select class="select2 form-select" id="disfavored-providers">
                                                            <option>
                                                                Select Disfavored Providers
                                                            </option>
                                                            <option>
                                                                Wade Dave
                                                            </option>
                                                            <option>
                                                                Dori Griffiths
                                                            </option>
                                                            <option>
                                                                Gilbert Dan
                                                            </option>
                                                            <option>
                                                                Ramon Miles
                                                            </option>
                                                            <option>
                                                                Alexis Griffiths
                                                            </option>
                                                            <option>
                                                                Tessa Leo
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Default Invoice Template --}}
                                                <div class="col-lg-6  pe-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="select-default-invoice-template">
                                                            Select Default Invoice Template
                                                        </label>
                                                        <select class="select2 form-select"
                                                            id="select-default-invoice-template">
                                                            <option>
                                                                Select Default Invoice Template
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Select Default Quote Template --}}
                                                <div class="col-lg-6 ps-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="select-default-quote-template">
                                                            Select Default Quote Template
                                                        </label>
                                                        <select class="select2 form-select"
                                                            id="select-default-quote-template">
                                                            <option>
                                                                Select Default Quote Template
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Select Default Timesheet --}}
                                                <div class="col-lg-12">
                                                    <div class="row between-section-segment-spacing">
                                                        <div class="col-lg-6 pe-lg-5 col-12">
                                                            <label class="form-label" for="select-default-timesheet">
                                                                Select Default Timesheet
                                                            </label>
                                                            <select class="select2 form-select"
                                                                id="select-default-timesheet">
                                                                <option>
                                                                    Select Default Timesheet
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 ps-lg-5 col-12">
                                                            <div class="mx-2">
                                                                <label class="form-label" for="tags-column">
                                                                    Tags
                                                                </label>
                                                                <textarea class="form-control" rows="2" placeholder=""
                                                                    name="tags" id="tags-column"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Department Phone Number --}}
                                                <div class="row between-section-segment-spacing">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h2>Phone Number</h2>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <div class="border p-3">
                                                                    <div class="row">
                                                                        <div class="col-lg-5 col-md-4 mb-4 mb-md-0">
                                                                            <label class="form-label" for="title">
                                                                                Title
                                                                            </label>
                                                                            <input type="text" id="title"
                                                                                class="form-control" name=""
                                                                                placeholder="Enter Title" />
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-4 mb-4 mb-md-0">
                                                                            <label class="form-label" for="phone">
                                                                                Phone Number
                                                                            </label>
                                                                            <input type="text" id="phone"
                                                                                class="form-control" name=""
                                                                                placeholder="Enter Phone Number" />
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-4 align-self-end">
                                                                            <button class="btn btn-primary rounded">
                                                                                Add
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-8 d-flex justify-content-end md-2 mt-4">
                                                                <button type="button"
                                                                    class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                                                                    <svg aria-label="Add Phone Number" width="20"
                                                                        height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#plus">
                                                                        </use>
                                                                    </svg>
                                                                    <span>Add Phone Number</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Default Billing Address --}}
                                                <div class="col-lg-12">
                                                    <div class="row between-section-segment-spacing">
                                                        <div class="col-lg-6 pe-lg-5">
                                                            <h2>Default Billing Address</h2>
                                                            <button type="button"
                                                                class="btn btn-primary btn-has-icon rounded mb-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#addAddressModal">
                                                                <svg aria-label="Add Address" width="20" height="20"
                                                                    viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#plus">
                                                                    </use>
                                                                </svg>
                                                                <span>Add Address</span>
                                                            </button>
                                                            <table class="table table-hover border">
                                                                <thead>
                                                                    <th>#</th>
                                                                    <th>Address</th>
                                                                    <th></th>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd js-selected-row">
                                                                        <td>1</td>
                                                                        <td>
                                                                            <p>
                                                                                Mrs Smith 98 Shirley Street PIMPAMA QLD
                                                                                4209 AUSTRALIA
                                                                            </p>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <svg class="d-none js-tick" width="24"
                                                                                height="19" viewBox="0 0 24 19"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                                    stroke="white" stroke-width="3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even js-selected-row">
                                                                        <td>2</td>
                                                                        <td>
                                                                            <p>
                                                                                Mrs Smith 98 Shirley Street PIMPAMA QLD
                                                                                4209 AUSTRALIA
                                                                            </p>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <svg class="d-none js-tick" width="24"
                                                                                height="19" viewBox="0 0 24 19"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                                    stroke="white" stroke-width="3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd js-selected-row">
                                                                        <td>3</td>
                                                                        <td>
                                                                            <p>
                                                                                Mrs Smith 98 Shirley Street PIMPAMA QLD
                                                                                4209 AUSTRALIA
                                                                            </p>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <svg class="d-none js-tick" width="24"
                                                                                height="19" viewBox="0 0 24 19"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                                    stroke="white" stroke-width="3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="col-lg-6 ps-lg-5">
                                                            <h2>Default Service Address</h2>
                                                            <div
                                                                class="d-lg-flex justify-content-between align-items-center">
                                                                <div class="form-check mb-4">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="same-as-billing-address-checkbox">
                                                                    <label class="form-check-label"
                                                                        for="same-as-billing-address-checkbox">
                                                                        Same as Billing Address
                                                                    </label>
                                                                </div>

                                                                <button type="button"
                                                                    class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2 mb-4"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#addAddressModal">
                                                                    <svg aria-label="Add Address" width="20" height="20"
                                                                        viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#plus">
                                                                        </use>
                                                                    </svg>
                                                                    <span>Add Address</span>
                                                                </button>
                                                            </div>
                                                            <table class="table table-hover border">
                                                                <thead>
                                                                    <th>#</th>
                                                                    <th>Address</th>
                                                                    <th></th>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd js-selected-row">
                                                                        <td>1</td>
                                                                        <td>
                                                                            <p>
                                                                                Mrs Smith 98 Shirley Street PIMPAMA QLD
                                                                                4209 AUSTRALIA
                                                                            </p>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <svg class="d-none js-tick" width="24"
                                                                                height="19" viewBox="0 0 24 19"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                                    stroke="white" stroke-width="3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even js-selected-row">
                                                                        <td>2</td>
                                                                        <td>
                                                                            <p>
                                                                                Mrs Smith 98 Shirley Street PIMPAMA QLD
                                                                                4209 AUSTRALIA
                                                                            </p>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <svg class="d-none js-tick" width="24"
                                                                                height="19" viewBox="0 0 24 19"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                                    stroke="white" stroke-width="3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd js-selected-row">
                                                                        <td>3</td>
                                                                        <td>
                                                                            <p>
                                                                                Mrs Smith 98 Shirley Street PIMPAMA QLD
                                                                                4209 AUSTRALIA
                                                                            </p>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <svg class="d-none js-tick" width="24"
                                                                                height="19" viewBox="0 0 24 19"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                                    stroke="white" stroke-width="3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                                    <button type="button" class="btn btn-outline-dark rounded px-4 py-2"
                                                        wire:click.prevent="showList">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary rounded px-4 py-2">
                                                        Save & Exit
                                                    </button>
                                                    <button type="button" class="btn btn-primary rounded px-4 py-2"
                                                        x-on:click="$wire.switch('service-catalog')">
                                                        Next
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                        {{-- End Customer Info --}}

                        {{-- BEGIN: Service Catalog --}}
                        <div class="tab-pane fade" :class="{ 'active show': tab === 'service-catalog' }"
                            id="service-catalog" role="tabpanel" aria-labelledby="service-catalog-tab" tabindex="0"
                            x-show="tab === 'service-catalog'">
                            <section id="multiple-column-form">
                                <div class="row">
                                    <div class="card-body">
                                        <form class="form">
                                            {{-- updated by shanila to add csrf--}}
                                            @csrf
                                            {{-- update ended by shanila --}}
                                            <div class="col-md-10">
                                                <h2>Service Catalog</h2>
                                            </div>
                                            <div class="col-md-12 between-section-segment-spacing">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="mb-3">
                                                            <p class="fs-5">
                                                                Filter By Accommodation
                                                            </p>
                                                        </div>
                                                        <div class="content-body">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <form class="form">
                                                                        <div class="overflow-y-auto">
                                                                            <table id="unassigned_data"
                                                                                class="table table-hover"
                                                                                aria-label="Admin Staff Teams Table">
                                                                                <tbody>
                                                                                    <input type="search"
                                                                                        class="form-control"
                                                                                        id="search-record" name="search"
                                                                                        placeholder="Search"
                                                                                        autocomplete="on"
                                                                                        aria-label="Search" />
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>
                                                                                                Shelby Sign Language
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>
                                                                                                Language Translation
                                                                                                Services
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @for ($i = 0; $i < 4; $i++) <tr
                                                                                        role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>
                                                                                                Real Time Captioning
                                                                                                Services
                                                                                            </p>
                                                                                        </td>
                                                                                        </tr>
                                                                                        @endfor
                                                                                        <tr role="row" class="odd">
                                                                                            <td class="text-start">
                                                                                                <p>
                                                                                                    Sign Language
                                                                                                    Interpreting
                                                                                                    Services
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>
                                                                                        @for ($i = 0; $i < 5; $i++) <tr
                                                                                            role="row" class="odd">
                                                                                            <td class="text-start">
                                                                                                <p>
                                                                                                    Spoken Language
                                                                                                    Interpreting
                                                                                                    Services
                                                                                                </p>
                                                                                            </td>
                                                                                            </tr>
                                                                                            @endfor
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-7">
                                                        <div class="mb-3">
                                                            <p class="fs-5">
                                                                Select Service
                                                            </p>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form class="form">
                                                                    <div class="overflow-y-auto">
                                                                        <table id="unassigned_data"
                                                                            class="table table-hover"
                                                                            aria-label="Admin Staff Teams Table">
                                                                            <tbody>
                                                                                <input type="search"
                                                                                    class="form-control" name="search"
                                                                                    placeholder="Search"
                                                                                    autocomplete="on"
                                                                                    aria-label="Search" />
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>Language interpreting</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-switch">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle Team Status">
                                                                                            <label
                                                                                                class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="customers = true"
                                                                                                href="#"
                                                                                                title="Customers"
                                                                                                aria-label="Customers"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Customers"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#user-group">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                            <a href="#"
                                                                                                title="Department"
                                                                                                aria-label="Department"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Department"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#building">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>
                                                                                            New service capacity and
                                                                                            capabilities
                                                                                        </p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-switch">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle Team Status">
                                                                                            <label
                                                                                                class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="customers = true"
                                                                                                href="#"
                                                                                                title="Customers"
                                                                                                aria-label="Customers"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Customers"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#user-group">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                            <a href="#"
                                                                                                title="Department"
                                                                                                aria-label="Department"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Department"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#building">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>
                                                                                            Shelby test two service
                                                                                        </p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-switch">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle Team Status">
                                                                                            <label
                                                                                                class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="customers = true"
                                                                                                href="#"
                                                                                                title="Customers"
                                                                                                aria-label="Customers"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Customers"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#user-group">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                            <a href="#"
                                                                                                title="Department"
                                                                                                aria-label="Department"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Department"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#building">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>CART Captioning</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-switch">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle Team Status">
                                                                                            <label
                                                                                                class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="customers = true"
                                                                                                href="#"
                                                                                                title="Customers"
                                                                                                aria-label="Customers"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Customers"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#user-group">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                            <a href="#"
                                                                                                title="Department"
                                                                                                aria-label="Department"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Department"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#building">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                @for ($i = 0; $i < 5; $i++) <tr
                                                                                    role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>Transcript Services</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-switch">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle Team Status">
                                                                                            <label
                                                                                                class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="customers = true"
                                                                                                href="#"
                                                                                                title="Customers"
                                                                                                aria-label="Customers"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Customers"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#user-group">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                            <a href="#"
                                                                                                title="Department"
                                                                                                aria-label="Department"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Department"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#building">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                    </tr>
                                                                                    @endfor
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                                <button type="button" class="btn btn-outline-dark rounded px-4 py-2"
                                                    x-on:click="$wire.switch('company-info')">
                                                    Back
                                                </button>
                                                <button type="submit" class="btn btn-primary rounded px-4 py-2">
                                                    Save & Exit
                                                </button>
                                                <button type="submit" class="btn btn-primary rounded px-4 py-2"
                                                    x-on:click="$wire.switch('drive-documents')">
                                                    Next
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </section>
                        </div>
                        {{-- End: Service Catalog --}}

                        {{-- BEGIN: Drive Documents Pane --}}
                        <div class="tab-pane fade" :class="{ 'active show': tab === 'drive-documents' }"
                            @click.prevent="tab = 'drive-documents'" id="drive-documents" role="tabpanel"
                            aria-labelledby="drive-documents-tab" tabindex="0" x-show="tab === 'drive-documents'">
                            <section id="multiple-column-form">
                                <div class="row">
                                    <div class="col-12">
                                        <form class="form">
                                            {{-- updated by shanila to add csrf--}}
                                            @csrf
                                            {{-- update ended by shanila --}}
                                            <div class="col-md-8 mb-md-2">
                                                <h2>Drive Documents</h2>
                                            </div>
                                            <div class="col-md-12 mb-md-2">
                                                <div class="row">
                                                    <div class="col-md-12 mb-md-2">
                                                        <div class="d-flex justify-content-md-center">
                                                            <div>
                                                                <h3 class="text-md-center">
                                                                    Upload Document
                                                                </h3>
                                                                <input class="form-control form-control-sm" type="file"
                                                                    aria-label="Upload File">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-md-flex justify-content-center gap-3 mt-5">
                                                    <div>
                                                        <img src="/tenant/images/img-placeholder-document.jpg"
                                                            alt="Preview File" />
                                                        <p>File Name</p>
                                                    </div>
                                                    <div>
                                                        <img src="/tenant/images/img-placeholder-document.jpg"
                                                            alt="Preview File" />
                                                        <p>File Name</p>
                                                    </div>
                                                    <div>
                                                        <img src="/tenant/images/img-placeholder-document.jpg"
                                                            alt="Preview File" />
                                                        <p>File Name</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                                <button type="button"
                                                    class="btn btn-outline-dark rounded px-4 py-2 mx-2"
                                                    x-on:click="$wire.switch('service-catalog')">
                                                    Back
                                                </button>
                                                <button type="submit" class="btn btn-primary rounded px-4 py-2">
                                                    Submit
                                                </button>
                                                {{-- <button type="button" class="btn btn-primary rounded px-4 py-2">
                                                    Next
                                                </button> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                        {{-- BEGIN: Drive Documents Pane --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('panels.common.customers')
    @include('modals.company-business-hours')
    @include('modals.common.add-address')
</div>
