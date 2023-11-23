<div x-data="{customers: false,associateCustomer:false, associateservice:false}">
<div id="loader-section" class="loader-section" wire:loading>
          <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
          </div>
    </div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-5">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">{{$label}} Department</h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard"
                                        aria-label="Go to Dashboard">
                                        <svg width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor""
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
                                    {{$label}} Department
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
                                <a href="#" class="nav-link {{$departmentActive}}" :class="{ 'active': tab === 'department-info' }"
                                    @click.prevent="tab = 'department-info'" id="department-info-tab" role="tab"
                                    aria-controls="department-info" aria-selected="true" wire:click.prevent="setStep(1,'departmentActive','department-info');"><span
                                        class="number">1</span>Department Info</a>
                            </li>
                             <li class="nav-item" role="presentation">
                                @if($department->name)

                                <a href="#" class="nav-link {{$scheduleActive}}" :class="{ 'active': tab === 'schedule' }"
                                    @click.prevent="tab = 'schedule'" id="schedule-tab" role="tab" wire:click.prevent="save(0)" 
                                    aria-controls="schedule" aria-selected="false"><span class="number">2</span>
                                    Department Schedule</a>
                                @else
                                <div class="nav-link" title="Please fill step 1 to proceed">
                            
                                    <span class="number">2</span>
                                    Department Schedule
                                </div>                            
                                @endif
                            </li>
                            <li class="nav-item" role="presentation">
                                @if($department->name)

                                <a href="#" class="nav-link {{$serviceActive}}" :class="{ 'active': tab === 'service-catalog' }"
                                    @click.prevent="tab = 'service-catalog'" id="service-catalog-tab" role="tab"
                                     wire:click.prevent="setStep(3,'serviceActive','service-catalog')"
                                    aria-controls="service-catalog" aria-selected="false"><span class="number">3</span>
                                    Service Catalog</a>
                                @else
                                <div class="nav-link" title="Please fill step 1 to proceed">
                            
                                    <span class="number">3</span>
                                    Service Catalog
                                </div>                            
                                @endif
                            </li>
                            <li class="nav-item" role="presentation">
                                @if($department->name)

                                <a href="#" class="nav-link {{$driveActive}}" :class="{ 'active': tab === 'drive-documents' }"
                                    @click.prevent="tab = 'drive-documents'" id="drive-documents-tab" role="tab"
                                    wire:click.prevent="setStep(4,'driveActive','drive-documents');"
                                    aria-controls="drive-documents" aria-selected="false"><span class="number">4</span>
                                    Drive Documents</a>
                                @else
                                <div class="nav-link" title="Please fill step 1 to proceed">
                            
                                    <span class="number">2</span>
                                    Drive Documents
                                </div>                            
                                @endif
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- BEGIN: Customer Info -->
                            @if($step==1)
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'department-info' }"
                                     id="department-info" role="tabpanel"
                                aria-labelledby="department-info-tab" tabindex="0" x-show="tab === 'department-info'">

                                <!-- Basic multiple Column Form section start -->
                                <section id="multiple-column-form">
                                    <div class="row">

                                            <div class="col-12">

                                                <div class="row mt-2 mb-5">
                                                    <div class="provider_image_panel">
                                                        <div class="provider_image">
                                                            @if ($image!=null)
                                                                <img class="user_img cropfile" src="{{ '/tenant'.tenant('id').'/app/livewire-tmp/'.$image->getFilename() }}">
                                                            @else
                                                                <img class="user_img cropfile" src="{{$department->department_logo == null ? '/tenant-resources/images/img-placeholder-document.jpg' : url($department->department_logo) }}">
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
                                                <div class="col-md-6  mb-4">
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
                                                {{-- department website --}}
                                                <div class="col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="department-website">
                                                            Department Website
                                                        </label>
                                                        <input type="text" id="department-website"
                                                                    class="form-control" name="department-website"
                                                                    placeholder="Enter Website URL" required
                                                                    aria-required="true" wire:model.defer="department.department_website"/>
                                                                    @error('department.department_website')
                                                                <span class="d-inline-block invalid-feedback mt-2">
                                                                    {{ $message }}
                                                                </span>
                                                                @enderror
                                                    </div>
                                                </div>

                                                {{-- industry --}}
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

                                                    
                                                <!-- Department Manager(s) -->
                                                <div class="col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="department-manager">Department
                                                            Supervisors(s)</label>
                                                        <div class="mb-1 d-flex gap-5">
                                                            <button type="button" wire:click="setData()"
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
                                                                Add Department Supervisor(s)
                                                            </button>
                                                            <div class="uploaded-data d-flex align-items-center">
                                                            @if(count($supervisorNames)>0)
                                                                

                                                                @for ($i = 0; $i <= $sv_limit; $i++)
                                                                <img style="width:50px;height:50px;top:1rem" src="{{$supervisorNames[$i]['userdetail']['profile_pic'] !=null ? $supervisorNames[$i]['userdetail']['profile_pic'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg'}}" class="" title="{{$supervisorNames[$i]['name']}}"
                                                                    alt="Profile Image">
                                                                @endfor
                                                                @if(count($supervisorNames)>4)
                                                                <div class="more">    
                                                                    <span class="value">{{count($supervisorNames)-4}}</span> more
                                                                </div>
                                                                
                                                                @endif

                                                            @endif
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Service End Date -->
                                                <div class="col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="service-start-date">
                                                            Service Start Date
                                                        </label>
                                                        <div class="position-relative">
                                                            <input type="" class="form-control js-single-date" name="department_service_start_date" id="department_service_start_date"
                                                                  wire:model.defer="department.department_service_start_date" placeholder="MM/DD/YYYY">
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
                                                            <input type="" class="form-control js-single-date" name="department_service_end_date" id="department_service_end_date"
                                                             wire:model.defer="department.department_service_end_date" placeholder="MM/DD/YYYY">
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

                                                <!-- Preferred Providers -->
                                                <div class="col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="preferred-providers">Preferred
                                                            Providers</label>
                                                            <select multiple class="select2 form-select" wire:model.defer="fv"
                                                            id="favored_providers" name="favored_providers">
                                                            @foreach($providers as $provider)
                                                                <option value="{{$provider['id']}}"> {{$provider['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Disfavored Providers -->
                                                <div class="col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="disfavored-providers">Disfavored
                                                            Providers</label>
                                                            <select multiple class="select2 form-select" wire:model.defer="unfv"
                                                            id="unfavored_providers" name="unfavored_providers">
                                                                @foreach($providers as $provider)
                                                                <option value="{{$provider['id']}}"> {{$provider['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Default Invoice Template -->
                                                <div class="col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="select-default-invoice-template">Select Default
                                                            Invoice
                                                            Template <small>(coming soon)</small></label>
                                                            <select disabled class="select2 form-select"
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
                                                                Template <small>(coming soon)</small></label>
                                                            <select class="select2 form-select" disabled
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
                                                                Default Timesheet <small>(coming soon)</small></label>
                                                            <select disabled class="select2 form-select"
                                                                id="select-default-timesheet">
                                                                <option>Select Default Timesheet</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Select Tags -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-4">
                                                           <label class="form-label" for="tags">Tags</label>
                                                                <select data-placeholder="" multiple 
                                                                    class="form-select  select2 form-select select2-hidden-accessible" tabindex="" id="tags-select" aria-label="Select Tags">
                                                                    @foreach($allTags as $tag)
                                                                        <option {{in_array($tag,$tags) ? 'selected' : ''}} value="{{$tag}}">{{$tag}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <input type="hidden" name="tags-holder" id="tags-holder" wire:model.defer="tags">
                                      
                                                        </div>
                                                    </div>


                                                    <!-- Company Phone Number -->
                                                    @if(count($companyPhones))
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h2>Department Phone Number</h2>
                                                            <div class="col-lg-6">
                                                                <div class="mb-4">
                                                                    <label class="form-label" for="service-name">
                                                                        Company Phone Number
                                                                    </label>
                                                                    @foreach($companyPhones as $index=> $phone)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" wire:key='{{$phone['id']}}' wire:model.defer="department.company_phones.{{$index}}"
                                                                            id="{{$phone['id']}}"  value="{{$phone['id']}}"
                                                                            type="checkbox"
                                                                            tabindex="" />
                                                                        <label class="form-check-label"
                                                                            for="phone-number-ceo">{{$phone['phone_title']}}:
                                                                            {{$phone['phone_number']}}</label>
                                                                    </div>
                                                                    @endforeach
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif

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
                                                     {{-- Default Billing Address --}}
                                                    <div class="col-lg-12">
                                                        <div class="row between-section-segment-spacing">
                                                        @include('components.default-address', ['type' => 1, 'userAddresses' => $userAddresses,'title'=>'Default'])

                                                        @include('components.default-address', ['type' => 2, 'userAddresses' => $userAddresses,'title'=>'Default'])

                                                        </div>
                                                    </div>

                                                    <!-- Check-boxes -->
                                                    <div class="col-md-12 col-12 mt-5 mb-4">
                                                        <div class="col-md-12 col-12 mb-4">
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                wire:model.defer="department.hide_details"
                                                                id="hide-user-details-providers">
                                                            <label class="form-check-label"
                                                                for="hide-user-details-providers">
                                                                Hide All Comapny Users' Details from Providers
                                                            </label>
                                                            </div>
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
                                                        <button type="submit" class="btn btn-primary rounded px-4 py-2" wire:click.prevent="save(0)"
                                                        x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('schedule')">Next</button>

                                                    </div>
                                                </div>
                                            </div>
                                     

                                    </div>
                                </section>
                            </div><!-- end Customer Info  -->
                            @elseif($step==2)

                                <!-- BEGIN: Schedule -->

                                <div class="tab-pane fade" :class="{ 'active show': tab === 'schedule' }"
                                    id="schedule" role="tabpanel" aria-labelledby="schedule-tab" tabindex="0"
                                    x-show="tab === 'schedule'">
                                        <section id="multiple-column-form">

                                            @livewire('app.common.setup.business-hours-setup', ['model_id' => $department->id, 'model_type' => '4'])
                                            <div class="col-12 form-actions">
                                                        <button type="button" class="btn btn-outline-dark rounded px-4 py-2"
                                                            wire:click.prevent="setStep(1,'departmentActive','department-info');">
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
                                <!-- END: Schedule -->
                                @endif
                            <!--BEGIN: Service Catalog-->
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'service-catalog' }"
                                id="service-catalog" role="tabpanel" aria-labelledby="service-catalog-tab" tabindex="0"
                                x-show="tab === 'service-catalog'">
                                    <section id="multiple-column-form">
                                    <a href="javascript:void(0)" style="display:none" @click="associateservice = true" id="serviceIco" title="Add Service Rates" aria-label="Add Service Rates" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <x-icon name="dollar-icon"/>
                        </a>
                        <a href="javascript:void(0)" style="display:none"   id="CustomerIco" @click="associateCustomer = true;"
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
                                                @livewire('app.admin.customer.service-catelog',['showButtons'=>false,'modelId'=>$department->id,'modelType'=>'department'])
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
                            <!--End: Service Catalog-->

                          

                            <!--BEGIN: Drive Documents Pane-->
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'drive-documents' }"
                            id="drive-documents" role="tabpanel"
                            aria-labelledby="drive-documents-tab" tabindex="0" x-show="tab === 'drive-documents'">
                             <div>@livewire('app.common.forms.drive-uploads',['showForm'=>true,'showSearch'=>false,'record_id'=> $department->id ,'record_type'=>4], key($department->id))</div>
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
                            <!--End: Drive Documents Pane-->
                       
                    </div><!-- Basic Floating Label Form section end -->
                </div><!-- ...card-body... -->
                <!-- END: Steps -->
            </div>
        </div>
    </div>
    @if($label=='Edit')
    <script>
    document.getElementById("company_id").disabled = true;
    </script>
    @endif
    @include('panels.services.associate-customers')
   
    @include('panels.services.associated-service') 
    
</div>



