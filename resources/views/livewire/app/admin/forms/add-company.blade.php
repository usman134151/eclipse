<div x-data="{customers: false,associateCompanies:false, associateCustomer:false, associateDepartment:false,associateservice:false}">
<div id="loader-section" class="loader-section" wire:loading>
          <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
          </div>
    </div>
    <div class="content-header row">
        <div class="content-header-left col-12 mb-5">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        {{$label}} Company
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Home">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
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
                                {{$label}} Company
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
                            <a href="javascript:void(0)" class="nav-link {{$companyActive}}" :class="{ 'active': tab === 'company-info' }"
                                @click.prevent="tab = 'company-info'" id="company-info-tab" role="tab"
                                aria-controls="company-info" aria-selected="true"  wire:click.prevent="setStep(1,'companyActive','company-info');">
                                <span class="number">1</span>
                                Company Info
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            @if($company->name)
                            <a href="javascript:void(0)" class="nav-link {{$scheduleActive}}" :class="{ 'active': tab === 'schedule' }"
                                @click.prevent="tab = 'schedule'" id="schedule-tab" role="tab"
                                wire:click.prevent="save(0)"
                                aria-controls="schedule" aria-selected="true" >

                                <span class="number">2</span>
                                Company Schedule
                            </a>
                            @else
                            <div class="nav-link" title="Please fill step 1 to proceed">

                                <span class="number">2</span>
                                Company Schedule
                            </div>
                            @endif
                        </li>
                        <li class="nav-item" role="presentation">
                        @if($company->name)
                            <a href="#" class="nav-link {{$serviceActive}}"
                                @click.prevent="tab = 'service-catalog'" id="service-catalog-tab" role="tab"
                                aria-controls="service-catalog" aria-selected="false" wire:click.prevent="setStep(3,'serviceActive','service-catalog')">
                                <span class="number">3</span>
                                Service Catalog
                            </a>
                        @else
                            <div class="nav-link" title="Please fill step 1 to proceed">

                            <span class="number">3</span>
                            Service Catalog
                            </div>
                        @endif
                        </li>
                        <li class="nav-item" role="presentation">
                            @if($company->name)
                            <a href="#" class="nav-link {{$driveActive}}"
                                @click.prevent="tab = 'drive-documents'" id="drive-documents-tab" role="tab"
                                aria-controls="drive-documents" aria-selected="false" wire:click.prevent="setStep(4,'driveActive','drive-documents');" >
                                <span class="number">4</span>
                                Drive Documents
                            </a>
                            @else
                            <div class="nav-link" title="Please fill step 1 to proceed">

                            <span class="number">4</span>
                            Drive Documents
                            </div>
                        @endif

                        </li>
                    </ul>

                    {{-- Tab Panes --}}

                    <div class="tab-content">
                        @if($step==1)
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
                                                <div class="provider_image_panel">
                                                    <div class="provider_image">
                                                        @if ($image!=null)
                                                            <img class="user_img cropfile" src="{{ '/tenant'.tenant('id').'/app/livewire-tmp/'.$image->getFilename() }}">
                                                        @else
                                                            <img class="user_img cropfile" aria-label="Upload Company Profile Image" src="{{$company->company_logo == null ? '/tenant-resources/images/img-placeholder-document.jpg' : url($company->company_logo) }}">
                                                        @endif
                                                        <div class="input--file">
                                                            <span>
                                                                <img src="https://production-qa.eclipsescheduling.com/images/camera_icon.png" alt="">
                                                            </span>
                                                            <label for="cropfile" class="form-label visually-hidden">Input File</label>
                                                            <input wire:model="image" class="form-control inputFile" accept="image/*" id="cropfile" name="image" type="file" aria-invalid="false" >
                                                        </div>
                                                        @error('image')
                                                        <span class="d-inline-block invalid-feedback mt-2">
                                                            {{ $message }}
                                                        </span>
                                                        @enderror
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
                                                            required aria-required="true"
                                                            wire:model.defer="company.name"
												/>
												@error('company.name')
												<span class="d-inline-block invalid-feedback mt-2">
													{{ $message }}
												</span>
												@enderror
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
                                                    {!! $setupValues['industries']['rendered'] !!}
                                                    @error('company.industry_id')
												    <span class="d-inline-block invalid-feedback mt-2">
													{{ $message }}
												    </span>
												@enderror
                                                    {{-- End of update by Shanila --}}
                                                </div>
                                            </div>
                                            <div class="row">
                                                {{-- Department Website --}}

                                                    <div class="col-lg-6 pe-lg-5 col-12">
                                                        <label class="form-label" for="company-website">
                                                            Company Website
                                                        </label>
                                                        <input type="text" id="company-website" class="form-control"
                                                            name="company-website" placeholder="Enter Website URL"
                                                            required aria-required="false" wire:model.defer="company.company_website" />
                                                            @error('company.company_website')
												            <span class="d-inline-block invalid-feedback mt-2">
													        {{ $message }}
												            </span>
												            @enderror
                                                    </div>
                                                    <div class="col-lg-6 ps-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="preferred-language">
                                                            Preferred Language
                                                        </label>
                                                        {!! $setupValues['languages']['rendered'] !!}
                                                    </div>
                                                </div>




                                                {{-- Preferred Language --}}

                                                {{-- Service Start Date --}}
                                                <div class="col-lg-6 mb-4 pe-lg-5">
                                                    <label class="form-label" for="company_service_start_date">
                                                        Service Start Date
                                                    </label>
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="position-relative flex-grow-1">
                                                            <input type="text" class="form-control js-single-date"
                                                                placeholder="MM/DD/YYYY"
                                                                aria-describedby="" id="company_service_start_date" wire:model="company.company_service_start_date">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Service Start Date" class="icon-date" width="20"
                                                                height="21" viewBox="0 0 20 21" fill="currentColor">
                                                                <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            @error('company.company_service_start_date')
												            <span class="d-inline-block invalid-feedback mt-2">
													        {{ $message }}
												            </span>
												            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Service End Date --}}
                                                <div class="col-lg-6 mb-4 ps-lg-5">
                                                    <label class="form-label" for="company_service_end_date">
                                                        Service End Date
                                                    </label>
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="position-relative flex-grow-1">
                                                            <input type="text" class="form-control js-single-date"
                                                                placeholder="MM/DD/YYYY"
                                                                aria-describedby="" id="company_service_end_date"  wire:model="company.company_service_end_date">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Service End Date" class="icon-date" width="20"
                                                                height="21" viewBox="0 0 20 21" fill="currentColor">
                                                                <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                                </use>
                                                            </svg>
                                                            @error('company.company_service_end_date')
												            <span class="d-inline-block invalid-feedback mt-2">
													        {{ $message }}
												            </span>
												            @enderror
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
                                                        <select data-placeholder="" multiple
                                                            class="form-select  select2 form-select select2-hidden-accessible" tabindex="" id="admins"
                                                            aria-label="Select Company Admin" wire:model.defer="admins">
                                                            {{-- <option value=""></option> --}}
                                                            {{-- @if(count($companyUser)>0 ) --}}
                                                                @foreach($companyUsers as $user)
                                                                    <option value='{{$user['id']}}' >{{$user['name']}}</option>
                                                                @endforeach
                                                        </select>

                                                        {{-- <input type="text" id="company-admin" class="form-control"
                                                            name="company-admin" placeholder="Add Company Admin(s)" /> --}}
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 ps-lg-5 col-12">
                                                                <label class="form-label" for="tags">Tags</label>
                                                                <select data-placeholder="" multiple
                                                                    class="form-select  select2 form-select select2-hidden-accessible" tabindex="" id="tags-select" aria-label="Select Tags">
                                                                    @foreach($allTags as $tag)
                                                                        <option {{in_array($tag,$tags) ? 'selected' : ''}} value="{{$tag}}">{{$tag}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <input type="hidden" name="tags-holder" id="tags-holder" wire:model.defer="tags">

                                                </div>

                                                {{-- Preferred Providers --}}
                                                <div class="col-lg-6 pe-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="preferred-providers">
                                                            Preferred Providers
                                                        </label>
                                                        <select data-placeholder="" multiple
                                                            class="form-select  select2 form-select select2-hidden-accessible" tabindex="" id="favored_providers"
                                                            aria-label="Select Preferred Providers" wire:model.defer="fv_providers">
                                                            {{-- <option value="">Select Preferred Providers</option> --}}
                                                                @foreach($providers as $p)
                                                                    <option value='{{$p['id']}}' >{{$p['name']}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Disfavored Providers --}}
                                                <div class="col-lg-6 ps-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="disfavored-providers">
                                                            Disfavored Providers
                                                        </label>
                                                         <select data-placeholder="" multiple
                                                            class="form-select  select2 form-select select2-hidden-accessible" tabindex="" id="unfavored_providers"
                                                            aria-label="Select Disfavored Providers" wire:model.defer="unfv_providers">
                                                            {{-- <option value=""></option> --}}
                                                                @foreach($providers as $p)
                                                                    <option value='{{$p['id']}}' >{{$p['name']}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Default Invoice Template --}}
                                                <div class="col-lg-6  pe-lg-5 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="select-default-invoice-template">
                                                            Select Default Invoice Template <small>(coming soon)</small>
                                                        </label>
                                                        <select disabled class="select2 form-select"
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
                                                            Select Default Quote Template <small>(coming soon)</small>
                                                        </label>
                                                        <select disabled class="select2 form-select"
                                                            id="select-default-quote-template">
                                                            <option>
                                                                Select Default Quote Template <small>(coming soon)</small>
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Select Default Timesheet --}}
                                                <div class="col-lg-12">
                                                    <div class="row between-section-segment-spacing">
                                                        <div class="col-lg-6 pe-lg-5 col-12">
                                                            <label class="form-label" for="select-default-timesheet">
                                                                Select Default Timesheet <small>(coming soon)</small>
                                                            </label>
                                                            <select  disabled class="select2 form-select"
                                                                id="select-default-timesheet">
                                                                <option>
                                                                    Select Default Timesheet
                                                                </option>
                                                            </select>
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
                                                                                placeholder="Enter Title" wire:key="title-{{ $index }}" wire:model.defer="phoneNumbers.{{$index}}.phone_title"/>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-4 mb-4 mb-md-0">
                                                                            <label class="form-label" for="phone-number">
                                                                                Phone Number
                                                                            </label>
                                                                            <input type="text" id="phone-number"
                                                                                class="form-control" name=""
                                                                                placeholder="Enter Phone Number" wire:key="phone-{{ $index }}" wire:model.defer="phoneNumbers.{{$index}}.phone_number"/>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-4">
                                                                        <a href="#"  title="Delete" aria-label="Delete" wire:click.prevent="removePhone({{$index}})" class="btn btn-sm btn-secondary rounded btn-hs-icon" name="deleteIcon">
                                                                <svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                </svg>
                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        @endforeach
                                                        <div id="formRow">
                                                            <div class="row" id="elementRow" style="display:none">
                                                                <div class="col-lg-8 mb-2">
                                                                    <div class="border p-3">
                                                                        <div class="row">
                                                                            <div class="col-lg-5 col-md-4 mb-4 mb-md-0">
                                                                                <label class="form-label" for="title">
                                                                                    Title
                                                                                </label>
                                                                                <input type="text" name="title"
                                                                                    class="form-control"
                                                                                    placeholder="Enter Title" />
                                                                            </div>
                                                                            <div class="col-lg-5 col-md-4 mb-4 mb-md-0">
                                                                                <label class="form-label" for="phone-number">
                                                                                    Phone Number
                                                                                </label>
                                                                                <input type="text" name="phone-number"
                                                                                    class="form-control"
                                                                                    placeholder="Enter Phone Number"/>
                                                                            </div>
                                                                            <div class="col-lg-2 col-md-4">
                                                                            <a href="#" name="deleteIcon" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    <svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                    </svg>
                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 d-flex justify-content-end md-2 mt-4">
                                                                <button type="button" onclick="newElement($('#formRow'), $('#elementRow'),{{count($phoneNumbers)}})"
                                                                    class="d-inline-flex align-items-center btn btn-secondary btn-custom rounded px-3 py-2 gap-1">
                                                                    <svg aria-label="Add Phone Number" width="15"
                                                                        height="15" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                                                        <use xlink:href="/css/common-icons.svg#blueplus">
                                                                        </use>
                                                                    </svg>
                                                                    <span class="btn-text">Add Phone Number</span>
                                                                </button>
                                                            </div>
                                                        </div>

                                                </div>
                                                {{-- Default Billing Address --}}
                                                <div class="col-lg-12">
                                                    <div class="row between-section-segment-spacing">
                                                    @include('components.default-address', ['type' => 1, 'userAddresses' => $userAddresses,'title'=>'Default'])

                                                    @include('components.default-address', ['type' => 2, 'userAddresses' => $userAddresses,'title'=>'Default'])

                                                    </div>
                                                </div>

                                                <div
                                                    class="col-12 form-actions">
                                                    <button type="button" class="btn btn-outline-dark rounded px-4 py-2"
                                                        wire:click.prevent="showList">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary rounded px-4 py-2" wire:click.prevent="save" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                        Save & Exit
                                                    </button>
                                                    <button type="button" class="btn btn-primary rounded px-4 py-2"
                                                        wire:click.prevent="save(0)"
                                                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('schedule')">
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
                        @elseif($step==2)
                        <div class="tab-pane fade" :class="{ 'active show': tab === 'schedule' }"
                            id="schedule" role="tabpanel" aria-labelledby="schedule-tab" tabindex="0"
                            x-show="tab === 'schedule'">
                            <section id="multiple-column-form">

                              @livewire('app.common.setup.business-hours-setup', ['model_id' => $company->id, 'model_type' => '2'])
                              <div
                                                    class="col-12 form-actions">
                                                    <button type="button" class="btn btn-outline-dark rounded px-4 py-2"
                                                        wire:click.prevent="setStep(1,'companyActive','company-info');">
                                                        Back
                                                    </button>
                                                    <button type="submit" class="btn btn-primary rounded px-4 py-2" wire:click.prevent="saveSchedule" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                        Save & Exit
                                                    </button>
                                                    <button type="button" class="btn btn-primary rounded px-4 py-2"
                                                        wire:click.prevent="saveSchedule(0)"
                                                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('service-catalog')">
                                                        Next
                                                    </button>
                                </div>
                            </section>
                        </div>
                        {{-- BEGIN: Service Catalog --}}
                        @endif

                        <div class="tab-pane fade" :class="{ 'active show': tab === 'service-catalog' }"
                            id="service-catalog" role="tabpanel" aria-labelledby="service-catalog-tab" tabindex="0"
                            x-show="tab === 'service-catalog'">
                            <section id="multiple-column-form">
                            <a href="javascript:void(0)" style="display:none" id="departmentIco" @click="associateDepartment = true;" title="View Departments" aria-label="View Departments" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <x-icon name="building"/>
                        </a>
                        <a href="javascript:void(0)" style="display:none" @click="associateservice = true" id="serviceIco" title="Add Service Rates" aria-label="Add Service Rates" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <x-icon name="dollar-icon"/>
                        </a>
                        <a href="javascript:void(0)"  style="display:none" id="CustomerIco" @click="associateCustomer = true;"
                                                                                                        title="Customers (coming soon)"
                                                                                                        aria-label="Customers (coming soon)"
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
                             @if($step==3)
                                @livewire('app.admin.customer.service-catelog',['showButtons'=>false,'modelId'=>$company->id,'modelType'=>'company'])
                             @endif
                             <div class="col-12 form-actions">
                             <button type="button" class="btn btn-outline-dark rounded px-4 py-2"
                                                        wire:click.prevent="setStep(2,'scheduleActive','schedule')" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('service-catalog')">
                                                        Back
                                                    </button>
                                                    <button type="submit" class="btn btn-primary rounded px-4 py-2" wire:click.prevent="serviceCatelog" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                        Save & Exit
                                                    </button>
                                                    <button type="button" class="btn btn-primary rounded px-4 py-2"
                                                        wire:click.prevent="serviceCatelog(0)"
                                                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('drive-documents')">
                                                        Next
                                                    </button>
                                </div>
                            </section>

                        </div>

                        {{-- End: Service Catalog --}}


                        {{-- BEGIN: Drive Documents Pane --}}
                        <div class="tab-pane fade"  :class="{ 'active show': tab === 'drive-documents' }">
                            <div>@livewire('app.common.forms.drive-uploads',['showForm'=>true,'showSearch'=>false,'record_id'=> $company->id ,'record_type'=>1], key($company->id))</div>
                            <section id="multiple-column-form">

                                <div class="col-12 form-actions">
                                                    <button type="button" class="btn btn-outline-dark rounded px-4 py-2"
                                                        wire:click.prevent="setStep(3,'serviceActive','service-catalog')" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('service-catalog')">
                                                        Back
                                                    </button>
                                                    <button type="submit" class="btn btn-primary rounded px-4 py-2" wire:click.prevent="save" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                        Save & Exit
                                                    </button>
                                </div>

                            </section>
                        </div>

                        {{-- BEGIN: Drive Documents Pane --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('modals.common.add-address')
    @include('panels.services.associate-customers')
    @include('panels.services.associate-department')
    @include('panels.services.associated-service')

</div>


