<div x-data="{customers: false}">
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-5">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">Add Department</h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard"
                                        aria-label="Go to Dashboard">
                                        <svg width="22" height="23" viewBox="0 0 22 23" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#home"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000">
                                        Departments
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    All Departments
                                </li>
                                <li class="breadcrumb-item">
                                    Add Department
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
                    <div x-data="{ tab: @entangle('component') }" id="tab_wrapper">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link" :class="{ 'active': tab === 'department-info' }"
                                    @click.prevent="tab = 'department-info'" id="department-info-tab" role="tab"
                                    aria-controls="department-info" aria-selected="true"><span
                                        class="number">1</span>Department Info</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link" :class="{ 'active': tab === 'service-catalog' }"
                                    @click.prevent="tab = 'service-catalog'" id="service-catalog-tab" role="tab"
                                    aria-controls="service-catalog" aria-selected="false"><span class="number">2</span>
                                    Service Catalog</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link" :class="{ 'active': tab === 'drive-documents' }"
                                    @click.prevent="tab = 'drive-documents'" id="drive-documents-tab" role="tab"
                                    aria-controls="drive-documents" aria-selected="false"><span class="number">3</span>
                                    Drive Documents</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- BEGIN: Customer Info -->
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'department-info' }"
                                @click.prevent="tab = 'department-info'" id="department-info" role="tabpanel"
                                aria-labelledby="department-info-tab" tabindex="0" x-show="tab === 'department-info'">

                                <!-- Basic multiple Column Form section start -->
                                <section id="multiple-column-form">
                                    <div class="row">
                                        <form class="form">
                                            {{-- updated by shanila to add csrf--}}
                                            @csrf
                                            {{-- update ended by shanila --}}
                                            <div class="col-12">

                                                <div class="row mt-2 mb-5">
                                                    <div class="col-12 text-center">
                                                        <div class="d-inline-block position-relative">
                                                            <img src="/tenant/images/portrait/small/testing.png"
                                                                width="150" height="130"
                                                                class="img-fluid rounded-circle"
                                                                alt="Department Profile Image" />
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
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 mb-md-2">
                                                    <h2>Department Info</h2>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <button type="submit" class="btn btn-primary rounded">Add Data From
                                                        Company</button>
                                                </div>

                                                <!-- Department -->
                                                <div class="col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="department-name">
                                                            Department Name <span class="mandatory"
                                                                aria-hidden="true">*</span>
                                                        </label>
                                                        <input type="text" id="department-name" class="form-control"
                                                            name="department-name" placeholder="Enter department name"
                                                            required aria-required="true" wire:model.defer="department.name" />
                                                            @error('department.name')
												<span class="d-inline-block invalid-feedback mt-2">
													{{ $message }}
												</span>
												@enderror
                                                    </div>
                                                </div>
                                                {{-- company dropdown --}}
                                                <div class="col-lg-6 pe-lg-5 mb-4">
                                                    <label class="form-label" for="company-column">
                                                        Company
                                                        <span class="mandatory" aria-hidden="true">
                                                            *
                                                        </span>
                                                    </label>

                                                    {!! $setupValues['companies']['rendered'] !!}
                                                    @error('department.company_id')
												<span class="d-inline-block invalid-feedback mt-2">
													{{ $message }}
												</span>
												@enderror
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="department-website">
                                                            Department Website
                                                        </label>
                                                        <input type="text" id="department-website"
                                                                    class="form-control" name="department-website"
                                                                    placeholder="Enter Website URL" required
                                                                    aria-required="true" wire:model.defer="department.department_website"/>
                                                    </div>
                                                    </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="industry-column">Industry<span
                                                                        class="mandatory" aria-hidden="true">*</span></label>
                                                                 {{-- Updated by Shanila to add dropdown--}}
                                                                      {!! $setupValues['industries']['rendered'] !!}
                                                                        {{-- End of update by Shanila --}}
                                                                        @error('department.industry_id')
                                                                        <span class="d-inline-block invalid-feedback mt-2">
                                                                            {{ $message }}
                                                                        </span>
                                                                        @enderror
                                                            </div>
                                                        </div>
                                                    <!-- Department Business Hours -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label"
                                                                for="department-business-hours">Department Business
                                                                Hours</label>
                                                            <div class="mb-1">
                                                                <button type="button"
                                                                    class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#companybusinesshoursModel">
                                                                    <svg class="fill" width="25" height="18"
                                                                        viewBox="0 0 25 18" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <use
                                                                            xlink:href="/css/sprite.svg#right-color-arrow">
                                                                        </use>
                                                                    </svg>
                                                                    Add Schedule
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Preferred Language -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="preferred-language">Preferred
                                                                Language</label>
                                                            {{-- Updated by Shanila to add dropdown--}}
                                                            {!! $setupValues['languages']['rendered'] !!}
                                                            {{-- End of update by Shanila --}}
                                                        </div>
                                                    </div>

                                                    <!-- Service End Date -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="service-start-date">
                                                                Service Start Date
                                                            </label>
                                                            <div class="position-relative">
                                                                <input type="" name="" class="form-control"
                                                                    placeholder="17/01//2023" id="service-start-date" wire:model="department.department_service_start_date">
                                                                <svg class="icon-date" width="20" height="20"
                                                                    viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#date-field">
                                                                    </use>
                                                                </svg>
                                                                @error('department.department_service_start_date')
                                                                <span class="d-inline-block invalid-feedback mt-2">
                                                                {{ $message }}
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Service End Date -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="service-end-date">
                                                                Service End Date
                                                            </label>
                                                            <div class="position-relative">
                                                                <input type="" name="" class="form-control"
                                                                    placeholder="17/01//2023" id="service-end-date" wire:model="department.department_service_end_date">
                                                                <svg class="icon-date" width="20" height="20"
                                                                    viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#date-field">
                                                                    </use>
                                                                </svg>
                                                                @error('department.department_service_end_date')
												            <span class="d-inline-block invalid-feedback mt-2">
													        {{ $message }}
												            </span>
												            @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Department Manager(s) -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label"
                                                                for="department-manager">Department
                                                                Manager(s)</label>
                                                            <div class="mb-1">
                                                                <button type="button"
                                                                    class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#departmentManagerModal"
                                                                    aria-label="Department Manager(s)">
                                                                    <svg class="fill" width="25" height="18"
                                                                        viewBox="0 0 25 18" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <use
                                                                            xlink:href="/css/sprite.svg#right-color-arrow">
                                                                        </use>
                                                                    </svg>
                                                                    Add Department Manger(s)
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Associated Tags -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="associated-tags">Associated
                                                                Tags</label>
                                                            <input type="text" id="associated-tags" class="form-control"
                                                                name="associated-tags"
                                                                placeholder="Enter Associated Tags" />
                                                        </div>
                                                    </div>
                                                    <!-- Preferred Providers -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label"
                                                                for="preferred-providers">Preferred
                                                                Providers</label>
                                                            <select class="select2 form-select"
                                                                id="preferred-providers">
                                                                <option>Select Preferred Providers</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Disfavored Providers -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label"
                                                                for="disfavored-providers">Disfavored
                                                                Providers</label>
                                                            <select class="select2 form-select"
                                                                id="disfavored-providers">
                                                                <option>Select Disfavored Providers</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Default Invoice Template -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label"
                                                                for="select-default-invoice-template">Select Default
                                                                Invoice
                                                                Template</label>
                                                            <select class="select2 form-select"
                                                                id="select-default-invoice-template">
                                                                <option>Select Default Invoice Template</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Select Default Quote Template -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label"
                                                                for="select-default-quote-template">Select Default Quote
                                                                Template</label>
                                                            <select class="select2 form-select"
                                                                id="select-default-quote-template">
                                                                <option>Select Default Quote Template</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Select Default Timesheet -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label"
                                                                for="select-default-timesheet">Select
                                                                Default Timesheet</label>
                                                            <select class="select2 form-select"
                                                                id="select-default-timesheet">
                                                                <option>Select Default Timesheet</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Select Tags -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="tags-column">
                                                                Tags
                                                            </label>
                                                            <select data-placeholder="" multiple
                                                                    class="form-select  select2 form-select select2-hidden-accessible" tabindex="" id="tags-select" aria-label="Select Tags" wire:model.defer="tags">
                                                                    <option value=""></option>
                                                                    <option selected>Admin staff</option>
                                                                    <option selected>Customers</option>
                                                                </select>
                                                        </div>
                                                    </div>


                                                    <!-- Department Phone Number -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h2>Department Phone Number</h2>
                                                            <div class="col-lg-6">
                                                                <div class="mb-4">
                                                                    <label class="form-label" for="service-name">
                                                                        Company Phone Number
                                                                    </label>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            id="phone-number-ceo"
                                                                            name="phone-number-ceo" type="checkbox"
                                                                            tabindex="" />
                                                                        <label class="form-check-label"
                                                                            for="phone-number-ceo">CEO:
                                                                            442342311</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            id="phone-number-sales"
                                                                            name="phone-number-ceo" type="checkbox"
                                                                            tabindex="" />
                                                                        <label class="form-check-label"
                                                                            for="phone-number-sales"> Sales:
                                                                            01232312</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            id="phone-number-supports" name="Weekly"
                                                                            type="checkbox" tabindex="" />
                                                                        <label class="form-check-label"
                                                                            for="phone-number-supports"> Supports:
                                                                            442342311</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row between-section-segment-spacing">
                                                        <div class="col-lg-12">
                                                            @foreach($phoneNumbers as $index=>$phoneNumber)
                                                            <div class="row">
                                                                <div class="col-lg-8 mb-2">
                                                                    <div class="border p-3">
                                                                        <div class="row">
                                                                            <div class="col-lg-5 col-md-4 mb-4 mb-md-0">
                                                                                <label class="form-label" for="title">
                                                                                    Title
                                                                                </label>
                                                                                <input type="text" id="title"
                                                                                    class="form-control" name=""
                                                                                    placeholder="Enter Title" wire:key="title-{{ $index }}" wire:model.lazy="phoneNumbers.{{$index}}.phone_title"/>
                                                                            </div>
                                                                            <div class="col-lg-5 col-md-4 mb-4 mb-md-0">
                                                                                <label class="form-label" for="phone-number">
                                                                                    Phone Number
                                                                                </label>
                                                                                <input type="text" id="phone-number"
                                                                                    class="form-control" name=""
                                                                                    placeholder="Enter Phone Number" wire:key="phone-{{ $index }}" wire:model.lazy="phoneNumbers.{{$index}}.phone_number"/>
                                                                            </div>
                                                                            <div class="col-lg-2 col-md-4">
                                                                            <a href="#" wire:click.prevent="removePhone({{$index}})" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    <svg class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                    </svg>
                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            @endforeach
                                                            <div class="col-lg-8 d-flex justify-content-end md-2 mt-4">
                                                                    <button type="button" wire:click.prevent="addPhone"
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
                                                    <!-- Default Billing Address -->
                                                    <div class="col-md-6 col-12 mt-4">
                                                        <div class="mb-4">
                                                            <div>
                                                                <h2>Default Billing Address</h2>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12 mt-4">
                                                        <div class="mb-4">
                                                            <div>
                                                                <h2>Default Service Address</h2>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                            <button type="button"
                                                                class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#addAddressModal">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/sprite.svg#plus"></use>
                                                                </svg>
                                                                <span>Add Address</span>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 col-12">
                                                        <div class="mb-4">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="same-as-billing-address-checkbox">
                                                            <label class="form-check-label"
                                                                for="same-as-billing-address-checkbox">
                                                                Same as Billing Address
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 col-12 text-end">
                                                        <div class="mb-4">
                                                            <button type="button"
                                                                class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#addAddressModal">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/sprite.svg#plus"></use>
                                                                </svg>
                                                                <span>Add Address</span>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- #Address Tables-->
                                                    <div class="col-md-12 d-flex col-12 mb-4 gap-4">
                                                        <!-- #Address left  Table-->
                                                        <div class="col-md-6 col-12 mb-4 border">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <th>#</th>
                                                                    <th>Address</th>
                                                                    <th></th>


                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            <p>Mrs Smith 98 Shirley Street PIMPAMA QLD
                                                                                4209
                                                                                AUSTRALIA</p>
                                                                        </td>

                                                                        <!-- for active class row integrated with JS  -->
                                                                        <td class="allign-middle">
                                                                            <svg width="24" height="19"
                                                                                viewBox="0 0 24 19" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#white-tick">
                                                                                </use>
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td>
                                                                            2
                                                                        </td>
                                                                        <td>
                                                                            <p>Mrs Smith 98 Shirley Street Appartment
                                                                                No. 45
                                                                                PIMPAMA QLD 4209 AUSTRALIA</p>
                                                                        </td>

                                                                        <!-- for active class row integrated with JS  -->
                                                                        <td class="allign-middle">
                                                                            <svg width="24" height="19"
                                                                                viewBox="0 0 24 19" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#white-tick">
                                                                                </use>
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            3
                                                                        </td>
                                                                        <td>
                                                                            <p>Mrs Smith 98 Shirley Street PIMPAMA QLD
                                                                                4209
                                                                                AUSTRALIA</p>
                                                                        </td>
                                                                        <!-- for active class row integrated with JS  -->
                                                                        <td class="allign-middle">
                                                                            <svg width="24" height="19"
                                                                                viewBox="0 0 24 19" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#white-tick">
                                                                                </use>
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <!-- #Address Tables left-->
                                                        <div class="col-md-6 col-12 mb-4 border">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <th>#</th>
                                                                    <th>Address</th>
                                                                    <th></th>

                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            <p>Mrs Smith 98 Shirley Street PIMPAMA QLD
                                                                                4209
                                                                                AUSTRALIA</p>
                                                                        </td>

                                                                        <!-- for active class row integrated with JS  -->
                                                                        <td class="allign-middle">
                                                                            <svg width="24" height="19"
                                                                                viewBox="0 0 24 19" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#white-tick">
                                                                                </use>
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td>
                                                                            2
                                                                        </td>
                                                                        <td>
                                                                            <p>Mrs Smith 98 Shirley Street Appartment
                                                                                No. 45
                                                                                PIMPAMA QLD 4209 AUSTRALIA</p>
                                                                        </td>

                                                                        <!-- for active class row integrated with JS  -->
                                                                        <td class="allign-middle">
                                                                            <svg width="24" height="19"
                                                                                viewBox="0 0 24 19" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#white-tick">
                                                                                </use>
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            3
                                                                        </td>
                                                                        <td>
                                                                            <p>Mrs Smith 98 Shirley Street PIMPAMA QLD
                                                                                4209
                                                                                AUSTRALIA</p>
                                                                        </td>

                                                                        <!-- for active class row integrated with JS  -->
                                                                        <td class="allign-middle">
                                                                            <svg width="24" height="19"
                                                                                viewBox="0 0 24 19" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#white-tick">
                                                                                </use>
                                                                            </svg>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div><!-- Address Tables end-div -->

                                                    <!-- Check-boxes -->
                                                    <div class="col-md-12 col-12 mt-5 mb-4">
                                                        <div class="col-md-12 col-12 mb-4">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="hide-user-details-providers"
                                                                id="hide-user-details-providers">
                                                            <label class="form-check-label"
                                                                for="hide-user-details-providers">
                                                                Hide All Comapny Users' Details from Providers
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- ....cancel/next (buttons)... -->
                                                    <div
                                                        class="col-12 justify-content-center form-actions d-flex gap-2">
                                                        <button type="button"
                                                            class="btn btn-outline-dark rounded px-4 py-2"
                                                            wire:click.prevent="showList">Cancel</button>
                                                        <button type="submit"
                                                            class="btn btn-primary rounded px-4 py-2" wire:click.prevent="save" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">Save
                                                            & Exit</button>
                                                        <button type="submit" class="btn btn-primary rounded px-4 py-2"
                                                        x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('service-catalog')">Next</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </section>
                            </div><!-- end Customer Info  -->


                            <!--BEGIN: Service Catalog-->
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'service-catalog' }"
                            id="service-catalog" role="tabpanel" aria-labelledby="service-catalog-tab" tabindex="0"
                            x-show="tab === 'service-catalog'">
                            <section id="multiple-column-form">
                             @livewire('app.admin.customer.service-catelog')

                            </section>
                          </div>
                          @include('panels.common.customers')
                            <!--End: Service Catalog-->
                            <!--BEGIN: Drive Documents Pane-->
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'drive-documents' }"
                            @click.prevent="tab = 'drive-documents'" id="drive-documents" role="tabpanel"
                            aria-labelledby="drive-documents-tab" tabindex="0" x-show="tab === 'drive-documents'">
                            <section id="multiple-column-form">
                                @livewire('app.admin.customer.drive')
                            </section>
                        </div>
                            <!--End: Drive Documents Pane-->
                        </div><!-- tab-content-end    -->
                    </div><!-- Basic Floating Label Form section end -->
                </div><!-- ...card-body... -->
                <!-- END: Steps -->
            </div>
        </div>
    </div>
</div>
