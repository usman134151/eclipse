<div x-data="{associateservice: false}">
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        Add Customer
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- End of update by Shanila --}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Customers
                            </li>
                            <li class="breadcrumb-item">
                                Add Customer
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
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'customer-info' }"
                                @click.prevent="tab = 'customer-info'" id="customer-info-tab" role="tab"
                                aria-controls="customer-info" aria-selected="true" tabindex="0">
                                <span class="number">1</span>
                                Customer Info
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'permission-configurations' }"
                                @click.prevent="tab = 'permission-configurations'" id="permission-configurations-tab"
                                role="tab" aria-controls="permission-configurations" aria-selected="false" tabindex="0">
                                <span class="number">2</span>
                                Permission Configurations
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'service-catalog' }"
                                @click.prevent="tab = 'service-catalog'" id="service-catalog-tab" role="tab"
                                aria-controls="service-catalog" aria-selected="false" tabindex="0">
                                <span class="number">3</span>
                                Service Catalog
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'drive-documents' }"
                                @click.prevent="tab = 'drive-documents'" id="drive-documents-tab" role="tab"
                                aria-controls="drive-documents" aria-selected="false" tabindex="0">
                                <span class="number">4</span>
                                Drive Documents
                            </a>
                        </li>
                    </ul>

                    {{-- Tab panes --}}
                    <div class="tab-content">
                        
                        @if($step==1)
                            {{-- BEGIN: Customer Info --}}
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'customer-info' }"
                                id="customer-info" role="tabpanel" aria-labelledby="customer-info-tab" tabindex="0"
                                x-show="tab === 'customer-info'">
                            
                                <section id="multiple-column-form">
                                    <div class="row">
                                        <div class="col-12">
                                            {{-- updated by shanila to add csrf and add form tag --}}
                                            <form  class="form">
                                                @csrf
                                                <div class="row between-section-segment-spacing">
                                                    <div class="col-12 text-center">
                                                        <div class="d-inline-block position-relative">
                                                            <img src="/tenant/images/portrait/small/avatar-s-9.jpg"
                                                                class="img-fluid rounded-circle"
                                                                alt="Profile Image of Customer" />
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
                                                <div class="row between-section-segment-spacing">
                                                    <div class="col-lg-12">
                                                        <h2>Customer Information</h2>
                                                    </div>
                                                    <div class="col-lg-6 pe-lg-5 mb-4">
                                                        <label class="form-label" for="company-column">
                                                            Company
                                                            <span class="mandatory" aria-hidden="true">
                                                                *
                                                            </span>
                                                        </label>
                                                        
                                                        {!! $setupValues['companies']['rendered'] !!}
                                                        @error('user.company_name')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                    </div>

                                                    <div class="col-lg-6 ps-lg-5 mb-4">
                                                        <label class="form-label" for="industry-column">
                                                            Industry
                                                            <span class="mandatory" aria-hidden="true">
                                                                *
                                                            </span>
                                                        </label>
                                                        <div>
                                                            <button type="button"
                                                                class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                                data-bs-toggle="modal" data-bs-target="#industryModal">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Select Industry" width="25" height="18"
                                                                    viewBox="0 0 25 18">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#right-color-arrow">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                                Select Industry
                                                            </button>
                                                        </div>
                                                        <div>
                                                            @if(count($industryNames)>0)
                                                                Selected Industries : 
                                                                @foreach($industryNames as $key=> $ind)
                                                                {{$ind }}
                                                                @if($key != count($industryNames)-1) , @endif
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 pe-lg-5 mb-4">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <label for="department-column"
                                                                class="form-label">Department</label>
                                                           <!-- <a href="#" class="fw-bold">
                                                                <small>
                                                                    <svg aria-label="Add Department" width="16" height="16" viewBox="0 0 16 16"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z"
                                                                            fill="#0A1E46" />
                                                                    </svg>
                                                                    Add Department
                                                                </small>
                                                            </a> -->
                                                        </div>
                                                        <div class="mb-1">
                                                            <button type="button"
                                                                class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                                data-bs-toggle="modal" data-bs-target="#departmentModal">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Select Department" width="25" height="18"
                                                                    viewBox="0 0 25 18">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#right-color-arrow">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                                Select Department
                                                            </button>
                                                        </div>
                                                    
                                                       <!-- <div class="mb-4">
                                                            Assign as Department Supervisor
                                                        </div> -->
                                                        <div>
                                                            @if(count($departmentNames)>0)
                                                                Selected Department(s) : 
                                                                @foreach($departmentNames as $key=> $dept)
                                                                {{$dept }}
                                                                @if($key != count($departmentNames)-1) , @endif
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                        {{-- <input class="form-check-input" type="checkbox" value=""
                                                            id="assign-as-department-supervisor"> --}}
                                                    </div>

                                                    <div class="col-lg-6 ps-lg-5 mb-4">
                                                        <label class="form-label" for="position-column">
                                                            Position
                                                        </label>
                                                        <input type="text" id="position-column" class="form-control"
                                                            name="positionColumn" placeholder="Enter Position"  wire:model.defer="userdetail.user_position" />
                                                    </div>

                                                    <div class="col-lg-6 pe-lg-5 mb-4">
                                                        <label class="form-label" for="f-name">
                                                            First Name
                                                            <span class="mandatory" aria-hidden="true">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input type="text" id="f-name" class="form-control" name="f-name"
                                                            placeholder="Enter First Name" required aria-required="true"   wire:model.defer="user.first_name"/>
                                                    @error('user.first_name')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror     
                                                    </div>

                                                    <div class="col-lg-6 ps-lg-5 mb-4">
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

                                                    <div class="col-lg-6 pe-lg-5 mb-4">
                                                        <label class="form-label" for="pronouns-column">
                                                            Pronouns
                                                        </label>
                                                        <input type="text" id="pronouns-column" class="form-control"
                                                            placeholder="Enter Pronouns" name="pronouns" wire:model.defer="userdetail.title" />
                                                    </div>

                                                    <div class="col-lg-6 ps-lg-5 mb-4">
                                                        <label class="form-label" for="">
                                                            Date of Birth
                                                        </label>
                                                        <div class="d-flex align-items-center w-100">
                                                            <div class="position-relative flex-grow-1">
                                                                <input type="text" class="form-control js-single-date"
                                                                    placeholder="Select Date of Birth" aria-label=""
                                                                    aria-describedby="" wire:model="user.user_dob" name="user_dob" id="user_dob">
                                                                <svg aria-label="Select Date" class="icon-date" width="20" height="21"
                                                                    viewBox="0 0 20 21" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </div>
                                                            <button type="button" class="btn px-2">
                                                                <svg aria-label="View" width="24" height="17" viewBox="0 0 24 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 0C6.54545 0 1.88727 3.52467 0 8.5C1.88727 13.4753 6.54545 17 12 17C17.4545 17 22.1127 13.4753 24 8.5C22.1127 3.52467 17.4545 0 12 0ZM12 14.1667C8.98909 14.1667 6.54545 11.628 6.54545 8.5C6.54545 5.372 8.98909 2.83333 12 2.83333C15.0109 2.83333 17.4545 5.372 17.4545 8.5C17.4545 11.628 15.0109 14.1667 12 14.1667ZM12 5.1C10.1891 5.1 8.72727 6.61867 8.72727 8.5C8.72727 10.3813 10.1891 11.9 12 11.9C13.8109 11.9 15.2727 10.3813 15.2727 8.5C15.2727 6.61867 13.8109 5.1 12 5.1Z"
                                                                        fill="black" />
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
                                                            <a href="#" class="fw-bold">
                                                                <small>
                                                                    {{-- Updated by Shanila to Add svg icon
                                                                    <svg aria-label="Add New" class="me-1" width="20"
                                                                        height="21" viewBox="0 0 20 21">
                                                                        <use xlink:href="/css/common-icons.svg#add-new">
                                                                        </use>
                                                                    </svg>
                                                                

                                                                    Add New --}}
                                                                </small>
                                                            </a>
                                                        </div>
                                                        {!! $setupValues['gender']['rendered'] !!}
                                                    </div>

                                                    <div class="col-lg-6 ps-lg-5 mb-4">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <label class="form-label" for="ethnicity-column">
                                                                Ethnicity
                                                            </label>
                                                            <!-- 
                                                            <a href="#" class="fw-bold">
                                                                <small>
                                                                    <svg aria-label="Add New" width="16" height="16" viewBox="0 0 16 16"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z"
                                                                            fill="#0A1E46" />
                                                                    </svg>
                                                                    Add New
                                                                </small>
                                                            </a> -->
                                                        </div>
                                                        {!! $setupValues['ethnicities']['rendered'] !!}
                                                    </div>

                                                    <div class="col-lg-6 pe-lg-5 mb-4">
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

                                                    <div class="col-lg-6 ps-lg-5 mb-4">
                                                        <label class="form-label" for="phone-number">
                                                            Phone Number
                                                        </label>
                                                        <input type="text" id="phone-number" class="form-control" name="phone"
                                                            placeholder="Enter Phone Number" wire:model="userdetail.phone" />
                                                    </div>

                                                    <div class="col-lg-6 pe-lg-5 mb-4">
                                                        <label class="form-label" for="preferred-language">
                                                            Preferred Language
                                                        </label>
                                                        {!! $setupValues['languages']['rendered'] !!}
                                                    </div>

                                                    <div class="col-lg-6 ps-lg-5 mb-4">
                                                        <label class="form-label" for="time-zone">
                                                            Time Zone
                                                        </label>
                                                        {!! $setupValues['timezones']['rendered'] !!}
                                                    </div>


                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-6 pe-lg-5">
                                                                <label class="form-label" for="tags">Tags</label>
                                                                <select data-placeholder="" multiple
                                                                    class="form-select  select2 form-select select2-hidden-accessible" tabindex="" id="tags" aria-label="Select Tags">
                                                                    <option value=""></option>
                                                                    <option selected>Admin staff</option>
                                                                    <option selected>Customers</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row inner-section-segment-spacing">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-6 pe-lg-5 mb-4">
                                                                <h2>Default Billing Address</h2>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-has-icon rounded mb-4"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#addAddressModal">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Add Address" width="20" height="20"
                                                                        viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#plus"></use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
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

                                                            <div class="col-lg-6 ps-lg-5 mb-4">
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
                                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                                        <svg aria-label="Add Address" width="20" height="20"
                                                                            viewBox="0 0 20 20">
                                                                            <use xlink:href="/css/common-icons.svg#plus">
                                                                            </use>
                                                                        </svg>
                                                                        {{-- End of update by Shanila --}}
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
                                                </div>



                                                <div
                                                    class="col-lg-12 d-lg-flex gap-5 justify-content-center between-section-segment-spacing">
                                                    <div class="form-check mb-lg-0">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="HideUsersDetailsfromProvider">
                                                        <label class="form-check-label" for="HideUsersDetailsfromProvider">
                                                            Hide User's Details from Providers
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-lg-0">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            id="email_invitation" wire:model.defer="email_invitation">
                                                        <label class="form-check-label"
                                                            for="SendInvitationEmailtotheCustomer">
                                                            Send Invitation Email to the Customer
                                                        </label>
                                                    </div>
                                                </div>
                                                {{-- Action Buttons Start --}}
                                                <div
                                                    class="col-12 form-actions">
                                                    <button type="button" class="btn btn-outline-dark rounded px-4 py-2"
                                                            wire:click.prevent="showList">
                                                            Cancel
                                                        </button>
                                                        <button type="submit" class="btn btn-primary rounded px-4 py-2" wire:click.prevent="save" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                            Save & Exit
                                                        </button>
                                                        <button type="button" class="btn btn-primary rounded px-4 py-2" wire:click.prevent="save(0)" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('permission-configurations')">
                                                            Next
                                                        </button>
                                                </div>
                                                {{-- Action Buttons End --}}

                                            </form>
                                            {{-- ended update by shanila --}}

                                        </div>
                                    </div>
                                </section>
                                
                            </div>
                            {{-- END Customer Info --}}
                        @elseif($step==2)
                            {{-- BEGIN: Permission Configurations --}}
                        
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'permission-configurations' }"
                                id="permission-configurations" role="tabpanel"
                                aria-labelledby="permission-configurations-tab" tabindex="0"
                                x-show="tab === 'permission-configurations'">
                                <section id="multiple-column-form">
                                    <div class="">
                                        {{-- updated by shanila to add csrf and add form tag --}}
                                        <form class="form">
                                            @csrf
                                            <div class="col-lg-12 inner-section-segment-spacing">
                                                <div class="d-lg-flex align-items-center justify-content-between mb-3">
                                                    <h2 class="mb-lg-0">Permission Configurations</h2>
                                                    <div
                                                        class="d-flex flex-column justify-content-center align-items-center gap-1">
                                                        <label class="form-label-sm">
                                                            Copy permissions from another user
                                                        </label>
                                                        <a href="#" class="btn btn-primary w-75" data-bs-toggle="modal"
                                                            data-bs-target="#addModal">
                                                            Select User
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label">
                                                            Roles & Relationships
                                                        </label>
                                                        <p>
                                                            Select which roles this user will play in the company. If the
                                                            user is not a Supervisor and or Billing Manager then you can
                                                            select other users as Supervisor of this user and or Billing
                                                            Manager of the user.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 inner-section-segment-spacing">
                                                <label class="form-label">
                                                    Assigned Supervisor(s)
                                                </label>
                                                <div>
                                                    <button type="button"
                                                        class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                        data-bs-toggle="modal" data-bs-target="#assignedSupervisorModal">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Assigned Supervisor(s)" width="25" height="18"
                                                            viewBox="0 0 25 18">
                                                            <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                        Assigned Supervisor(s)
                                                    </button>
                                                    <div class="form-check mb-lg-0">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="AssignSame_User">
                                                        <label class="form-check-label" for="AssignSame_User" >
                                                            Assign Same User
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 inner-section-segment-spacing">
                                                <label class="form-label text-primary">
                                                    Select Role
                                                </label>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="CompanyAdmin">
                                                    <label class="form-check-label" for="CompanyAdmin">
                                                        Company Admin
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 d-md-flex gap-5 align-items-center mb-4">
                                                <div class="form-check mb-md-0">
                                                    <input class="form-check-input" type="checkbox" value="" id="Supervisor"
                                                        checked>
                                                    <label class="form-check-label" for="Supervisor">
                                                        Supervisor
                                                    </label>
                                                </div>
                                                <button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                    data-bs-toggle="modal" data-bs-target="#supervisingModal">
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="Supervising" width="25" height="18"
                                                        viewBox="0 0 25 18">
                                                        <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    Supervising
                                                </button>
                                                <div class="uploaded-data d-flex align-items-center">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class=""
                                                        alt="Profile Image">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class=""
                                                        alt="Profile Image">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class=""
                                                        alt="Profile Image">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class=""
                                                        alt="Profile Image">
                                                    <div class="more">
                                                        <span class="value">8</span> more
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-md-flex gap-5 mb-4">
                                                <div class="form-check mb-md-0">
                                                    <input class="form-check-input" type="checkbox" value="" id="Requester"
                                                        checked>
                                                    <label class="form-check-label" for="Requester">
                                                        Requester
                                                    </label>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#assignedBillingManagerModal">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Supervising" width="25" height="18"
                                                            viewBox="0 0 25 18">
                                                            <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                        Assigned Billing Manager
                                                    </button>
                                                    <div class="form-check mb-lg-0">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Assign-Same-User">
                                                        <label class="form-check-label" for="Assign-Same-User">
                                                            Assign Same User
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="Service-Consumer" wire:model='serviceConsumer'>
                                                    <label class="form-check-label" for="Service-Consumer">
                                                        Service Consumer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row"  @if(!$serviceConsumer) style="display:none" @endif>
                                            <div class="col-lg-6 mb-4">
                                                        <label class="form-label"
                                                            for="service-consumer-introduction-column">
                                                            Service Consumer Introduction
                                                        </label>
                                                        <textarea class="form-control" rows="3" cols="3" placeholder=""
                                                            name="service-consumer-introduction-column"
                                                            id="service-consumer-introduction-column" wire:model.defer='userdetail.user_introduction'></textarea>
                                                    </div>

                                                    <div class="col-lg-6  mb-4">
                                                        <label for="file" class="form-label">
                                                            Service Consumer Introduction Media
                                                        </label>
                                                        <input class="form-control" type="file" id="file">
                                                    </div>
                                            </div>        
                                            <div class="col-lg-12 mb-4">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="participant">
                                                    <label class="form-check-label" for="participant">
                                                        Participant
                                                    </label>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 d-md-flex gap-5 align-items-center between-section-segment-spacing">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="BillingManager" checked>
                                                    <label class="form-check-label" for="BillingManager">
                                                        Billing Manager
                                                    </label>
                                                </div>
                                                <button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                    data-bs-toggle="modal" data-bs-target="#billManagingModal">
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="Billing Manager" width="25" height="18"
                                                        viewBox="0 0 25 18">
                                                        <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    Billing Manager
                                                </button>
                                            </div>

                                            <div class="row between-section-segment-spacing">
                                                <div class="col-lg-6 mb-4 pe-lg-5">
                                                    <label class="form-label" for="preffered-providers">
                                                        Preferred Providers
                                                    </label>
                                                    <select class="form-select" id="preffered-providers">
                                                        <option>Select Preferred Providers</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-4 ps-lg-5">
                                                    <label class="form-label">
                                                        Disfavored Providers
                                                    </label>
                                                    <select class="form-select" aria-label="Disfavored Providers">
                                                        <option>Select Disfavored Providers</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 mb-4 pe-lg-5">
                                                    <label class="form-label">
                                                        Grant Access to User(s)' Schedules?
                                                    </label>
                                                    <div class="d-flex gap-3">
                                                        <div class="form-check mb-lg-0">
                                                            <input class="form-check-input" type="radio"
                                                                name="GrantAccesstoUserSchedules" value=""
                                                                id="GrantAccesstoUserSchedulesYes" checked>
                                                            <label class="form-check-label"
                                                                for="GrantAccesstoUserSchedulesYes">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-lg-0">
                                                            <input class="form-check-input" type="radio"
                                                                name="GrantAccesstoUserSchedules" value=""
                                                                id="GrantAccesstoUserSchedulesNo">
                                                            <label class="form-check-label"
                                                                for="GrantAccesstoUserSchedulesNo">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 mb-4 ps-lg-5">
                                                    <label class="form-label" for="user-schedule">
                                                        Grant Access to User(s)' Schedules
                                                    </label>
                                                    <select class="form-select" id="user-schedule">
                                                        <option>Select</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 mb-4 pe-lg-5">
                                                    <label class="form-label">
                                                        Require Service Request Approval from Assigned Supervisor
                                                        <i class="fa fa-question-circle text-muted" aria-hidden="true"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title=""></i>
                                                    </label>
                                                    <div class="d-flex gap-3">
                                                        <div class="form-check mb-lg-0">
                                                            <input class="form-check-input" type="radio"
                                                                name="RequireServiceRequestApprovalfromAssignedSupervisor"
                                                                value=""
                                                                id="RequireServiceRequestApprovalfromAssignedSupervisorYes"
                                                                checked>
                                                            <label class="form-check-label"
                                                                for="RequireServiceRequestApprovalfromAssignedSupervisorYes">
                                                                Yes
                                                            </label>
                                                        </div>

                                                        <div class="form-check mb-lg-0">
                                                            <input class="form-check-input" type="radio"
                                                                name="RequireServiceRequestApprovalfromAssignedSupervisor"
                                                                value=""
                                                                id="RequireServiceRequestApprovalfromAssignedSupervisorNo">
                                                            <label class="form-check-label"
                                                                for="RequireServiceRequestApprovalfromAssignedSupervisorNo">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 mb-4 ps-lg-5">
                                                    <label class="form-label">
                                                        Hide Billing Information from User
                                                    </label>
                                                    <div class="d-flex gap-3">
                                                        <div class="form-check mb-lg-0">
                                                            <input class="form-check-input" type="radio"
                                                                name="HideBillingInformationfromUser" value=""
                                                                id="HideBillingInformationfromUserYes" checked>
                                                            <label class="form-check-label"
                                                                for="HideBillingInformationfromUserYes">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-lg-0">
                                                            <input class="form-check-input" type="radio"
                                                                name="HideBillingInformationfromUser" value=""
                                                                id="HideBillingInformationfromUserNo">
                                                            <label class="form-check-label"
                                                                for="HideBillingInformationfromUserNo">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 between-section-segment-spacing">
                                                <label class="form-label" for="industry-column">
                                                    Assigned Admin-Staff
                                                </label>
                                                <div>
                                                    <button type="button"
                                                        class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                        data-bs-toggle="modal" data-bs-target="#adminStaffModal">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Assigned Admin-Staff" width="25" height="18"
                                                            viewBox="0 0 25 18">
                                                            <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                        Assigned Admin-Staff
                                                    </button>
                                                </div>
                                            </div>
                                            {{-- Action Buttons Start --}}
                                            <div
                                                class="col-12 form-actions">
                                                <button type="button" class="btn btn-outline-dark rounded"
                                                x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('customer-info')">
                                                    Back
                                                </button>
                                                <a href="/admin/customer">
                                                    <button type="submit" class="btn btn-primary rounded w-100">
                                                        Save & Exit
                                                    </button>
                                                </a>
                                                <button type="button" class="btn btn-primary rounded"
                                                x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('service-catalog')" wire:click="permissionConfiguration()">
                                                    Next
                                                </button>
                                            </div>
                                            {{-- Action Buttons End --}}
                                        </form>
                                        {{-- ended update by shanila --}}

                                    </div>
                                </section>
                            </div>
                            {{-- END: Permission Configurations --}}
                        @elseif($step==3)
                            {{-- BEGIN: Service Catalog --}}
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'service-catalog' }"
                                id="service-catalog" role="tabpanel" aria-labelledby="service-catalog-tab" tabindex="0"
                                x-show="tab === 'service-catalog'">
                                <section id="multiple-column-form">
                                    <div class="row">
                                        {{-- updated by shanila to add csrf and add form tag --}}
                                        <form class="form" >
                                            @csrf
                                            <div class="card-body">
                                                <div class="col-lg-8">
                                                    <h2>Service Catalog</h2>
                                                </div>

                                                <div class="col-md-12 mb-md-2">
                                                    <div class="row">
                                                        <div class="col-lg-5 mb-3">
                                                            <p class="fs-5">Filter By Accommodation</p>
                                                            <div class="content-body">
                                                                <div class="card">
                                                                    <div class="card-body shadow-sm">
                                                                        <input type="search" class="form-control"
                                                                            id="search" name="search" placeholder="Search"
                                                                            autocomplete="on" />
                                                                        <div class="overflow-y-auto max-h-30rem">
                                                                            <table id="unassigned_data"
                                                                                class="table table-hover"
                                                                                aria-label="Admin Staff Teams Table">
                                                                                <tbody>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>Shelby Sign Language</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>Language Translation Services
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>Real Time Captioning Services
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>Real Time Captioning Services
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>Real Time Captioning Services
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>Real Time Captioning Services
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p> Sign Language Interpreting
                                                                                                Services</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p> Spoken Language Interpreting
                                                                                                Services</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p> Spoken Language Interpreting
                                                                                                Services</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p> Spoken Language Interpreting
                                                                                                Services</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p> Spoken Language Interpreting
                                                                                                Services</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p> Spoken Language Interpreting
                                                                                                Services</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-7 ps-lg-5">
                                                            <div class="mb-3">
                                                                <p class="fs-5">Select Service</p>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body shadow-sm">
                                                                    <input type="search" class="form-control" id="search"
                                                                        name="search" placeholder="Search"
                                                                        autocomplete="on" />
                                                                    <div class="overflow-y-auto max-h-30rem">
                                                                        <table id="" class="table table-hover"
                                                                            aria-label="Select Service Table">
                                                                            <tbody>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>Language Interpreting</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-switch mb-0">
                                                                                            <input class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                id="Languageinterpreting"
                                                                                                aria-label="Toggle active">
                                                                                            <label
                                                                                                class="form-check-label text-nowrap"
                                                                                                for="Languageinterpreting">
                                                                                                In-Active
                                                                                            </label>
                                                                                            <label
                                                                                                class="form-check-label text-nowrap"
                                                                                                for="Languageinterpreting">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td width="5%">
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="associateservice = true"
                                                                                                href="#" title=""
                                                                                                aria-label="associate service"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                {{-- Updated by Shanila to
                                                                                                Add
                                                                                                svg icon--}}
                                                                                                <svg aria-label="associate service"
                                                                                                    width="22" height="20"
                                                                                                    viewBox="0 0 22 20">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#dollar-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                {{-- End of update by
                                                                                                Shanila
                                                                                                --}}
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>New service capacity and
                                                                                            capabilities
                                                                                        </p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check form-switch">
                                                                                            <input class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle active"
                                                                                                checked>
                                                                                            <label class="form-check-label">
                                                                                                In-Active
                                                                                            </label>
                                                                                            <label class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td width="5%">
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="associateservice = true"
                                                                                                href="#" title=""
                                                                                                aria-label="associate service"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                {{-- Updated by Shanila to
                                                                                                Add
                                                                                                svg icon--}}
                                                                                                <svg aria-label="associate service"
                                                                                                    width="22" height="20"
                                                                                                    viewBox="0 0 22 20">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#dollar-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                {{-- End of update by
                                                                                                Shanila
                                                                                                --}}
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>Shelby test two service</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check form-switch">
                                                                                            <input class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle active"
                                                                                                checked>
                                                                                            <label class="form-check-label">
                                                                                                In-Active
                                                                                            </label>
                                                                                            <label class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td width="5%">
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="associateservice = true"
                                                                                                href="#" title=""
                                                                                                aria-label="associate service"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                {{-- Updated by Shanila to
                                                                                                Add
                                                                                                svg icon--}}
                                                                                                <svg aria-label="associate service"
                                                                                                    width="22" height="20"
                                                                                                    viewBox="0 0 22 20">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#dollar-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                {{-- End of update by
                                                                                                Shanila
                                                                                                --}}
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>CART Captioning</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check form-switch">
                                                                                            <input class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle active"
                                                                                                checked>
                                                                                            <label class="form-check-label">
                                                                                                In-Active
                                                                                            </label>
                                                                                            <label class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td width="5%">
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="associateservice = true"
                                                                                                href="#" title=""
                                                                                                aria-label="associate service"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                {{-- Updated by Shanila to
                                                                                                Add
                                                                                                svg icon--}}
                                                                                                <svg aria-label="associate service"
                                                                                                    width="22" height="20"
                                                                                                    viewBox="0 0 22 20">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#dollar-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                {{-- End of update by
                                                                                                Shanila
                                                                                                --}}
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>Transcript Services</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check form-switch">
                                                                                            <input class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle active"
                                                                                                checked>
                                                                                            <label class="form-check-label">
                                                                                                In-Active
                                                                                            </label>
                                                                                            <label class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td width="5%">
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="associateservice = true"
                                                                                                href="#" title=""
                                                                                                aria-label="associate service"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                {{-- Updated by Shanila to
                                                                                                Add
                                                                                                svg icon--}}
                                                                                                <svg aria-label="associate service"
                                                                                                    width="22" height="20"
                                                                                                    viewBox="0 0 22 20">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#dollar-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                {{-- End of update by
                                                                                                Shanila
                                                                                                --}}
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>Transcript Services</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check form-switch">
                                                                                            <input class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle active"
                                                                                                checked>
                                                                                            <label class="form-check-label">
                                                                                                In-Active
                                                                                            </label>
                                                                                            <label class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td width="5%">
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="associateservice = true"
                                                                                                href="#" title=""
                                                                                                aria-label="associate service"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                {{-- Updated by Shanila to
                                                                                                Add
                                                                                                svg icon--}}
                                                                                                <svg aria-label="associate service"
                                                                                                    width="22" height="20"
                                                                                                    viewBox="0 0 22 20">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#dollar-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                {{-- End of update by
                                                                                                Shanila
                                                                                                --}}
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>Transcript Services</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check form-switch">
                                                                                            <input class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle active"
                                                                                                checked>
                                                                                            <label class="form-check-label">
                                                                                                In-Active
                                                                                            </label>
                                                                                            <label class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td width="5%">
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="associateservice = true"
                                                                                                href="#" title=""
                                                                                                aria-label="associate service"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                {{-- Updated by Shanila to
                                                                                                Add
                                                                                                svg icon--}}
                                                                                                <svg aria-label="associate service"
                                                                                                    width="22" height="20"
                                                                                                    viewBox="0 0 22 20">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#dollar-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                {{-- End of update by
                                                                                                Shanila
                                                                                                --}}
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>Transcript Services</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check form-switch">
                                                                                            <input class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle active"
                                                                                                checked>
                                                                                            <label class="form-check-label">
                                                                                                In-Active
                                                                                            </label>
                                                                                            <label class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td width="5%">
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="associateservice = true"
                                                                                                href="#" title=""
                                                                                                aria-label="associate service"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                {{-- Updated by Shanila to
                                                                                                Add
                                                                                                svg icon--}}
                                                                                                <svg aria-label="associate service"
                                                                                                    width="22" height="20"
                                                                                                    viewBox="0 0 22 20">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#dollar-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                {{-- End of update by
                                                                                                Shanila
                                                                                                --}}
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>Transcript Services</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check form-switch">
                                                                                            <input class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle active"
                                                                                                checked>
                                                                                            <label class="form-check-label">
                                                                                                In-Active
                                                                                            </label>
                                                                                            <label class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td width="5%">
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="associateservice = true"
                                                                                                href="#" title=""
                                                                                                aria-label="associate service"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                {{-- Updated by Shanila to
                                                                                                Add
                                                                                                svg icon--}}
                                                                                                <svg aria-label="associate service"
                                                                                                    width="22" height="20"
                                                                                                    viewBox="0 0 22 20">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#dollar-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                {{-- End of update by
                                                                                                Shanila
                                                                                                --}}
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Action Buttons Start --}}
                                            <div
                                                class="col-12 form-actions">
                                                <button type="button" class="btn btn-outline-dark rounded"
                                                x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('permission-configurations')">
                                                    Back
                                                </button>
                                                <a href="/admin/customer">
                                                    <button type="submit" class="btn btn-primary rounded w-100">
                                                        Save & Exit
                                                    </button>
                                                </a>
                                                <button type="button" class="btn btn-primary rounded"
                                                x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('drive-documents')">
                                                    Next
                                                </button>
                                            </div>
                                            {{-- Action Buttons End --}}
                                        </form>
                                        {{-- ended update by shanila --}}

                                    </div>
                                </section>
                            </div>
                            {{-- END: Service Catalog --}}
                        @elseif($step==4)
                            {{-- BEGIN: Drive Documents Pane --}}
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'drive-documents' }"
                                id="drive-documents" role="tabpanel" aria-labelledby="drive-documents-tab" tabindex="0"
                                x-show="tab === 'drive-documents'">
                                <section id="multiple-column-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <form class="form">
                                                {{-- updated by shanila to add csrf --}}
                                                @csrf
                                                {{-- updated end by shanila --}}
                                                <div class="col-md-8 mb-md-2">
                                                    <h2>Drive Documents</h2>
                                                </div>
                                                <div class="col-md-12 mb-md-2">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-md-2">
                                                            <div class="row justify-content-center">
                                                                <div class="col-md-8">
                                                                    <div
                                                                        class="d-flex flex-column align-items-md-center justify-content-md-center mb-3">
                                                                        <label for="formFile" class="form-label">
                                                                            Upload Document
                                                                        </label>
                                                                        <input class="form-control" type="file"
                                                                            id="formFile">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-4">
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
                                                        {{-- Action Buttons Start --}}
                                                        <div
                                                            class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                                            <button type="button" class="btn btn-outline-dark rounded"
                                                            x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('service-catalog')">
                                                                Back
                                                            </button>
                                                            <a href="/admin/customer">
                                                                <button type="button" class="btn btn-primary rounded w-100">
                                                                    Submit
                                                                </button>
                                                            </a>
                                                            {{-- <button type="submit" class="btn btn-primary rounded">
                                                                Next
                                                            </button> --}}
                                                        </div>
                                                        {{-- Action Buttons End --}}
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            {{-- END: Drive Documents Pane --}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modals.common.add-industry')
    @include('modals.common.add-department')
    @include('modals.common.add-address')
    @include('modals.assign-billing-manager')
    @include('modals.assign-supervisor')
    @include('modals.supervising')
    @include('modals.bill-managing')
    @include('modals.admin-staff')
    <!-- have to remove associate services panel as it was throwing errors --> 
    @include('modals.add-user')
</div>
</div>

@push('scripts')

<script>
        function updateVal(attrName,val){
          
          Livewire.emit('updateVal', attrName, val);

      }

</script>
@endpush
