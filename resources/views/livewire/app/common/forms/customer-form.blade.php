<div>
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div x-data="{ associateservice: false }">

        <div class="content-header row">
            <div class="content-header-left col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">
                            @if (!$isCustomer)
                                {{ $label }} Customer
                            @elseif ($isCustomer && $selfProfile)
                                My Profile
                            @else
                                {{ $label }} Team Member
                            @endif
                        </h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Go to Dashboard" width="22" height="23"
                                            viewBox="0 0 22 23">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    @if (!$isCustomer)
                                        Customers
                                    @elseif ($isCustomer && $selfProfile)
                                        Settings
                                    @else
                                        Profile
                                    @endif
                                </li>
                                <li class="breadcrumb-item">
                                    @if (!$isCustomer)
                                        {{ $label }} Customer
                                    @elseif ($isCustomer && $selfProfile)
                                        Edit Profile
                                    @else
                                        {{ $label }} Team Members
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
                        @if (!$isCustomer || ($isCustomer && !$selfProfile))
                            {{-- Nav tabs --}}
                            <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link {{ $customerActive }}"
                                        :class="{ 'active': tab === 'customer-info' }"
                                        @click.prevent="tab = 'customer-info'" id="customer-info-tab" role="tab"
                                        aria-controls="customer-info" aria-selected="true" tabindex="0"
                                        wire:click.prevent="setStep(1,'customerActive','customer-info');">
                                        <span class="number">1</span>
                                        Customer Info
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    @if ($user->email)
                                        <a href="#" class="nav-link {{ $permissionActive }} "
                                            :class="{ 'active': tab === 'permission-configurations' }"
                                            @click.prevent="tab = 'permission-configurations'"
                                            id="permission-configurations-tab" role="tab"
                                            aria-controls="permission-configurations" aria-selected="false"
                                            tabindex="0"
                                            wire:click.prevent="setStep(2, 'permissionActive', 'permission-configurations')">
                                            <span class="number">2</span>
                                            Permission Configurations
                                        </a>
                                    @else
                                        <div class="nav-link" title="Fill in first step to proceed">
                                            <span class="number">2</span>
                                            Permission Configurations
                                        </div>
                                    @endif
                                </li>
                                <li class="nav-item" role="presentation">
                                    @if ($user->email)
                                        <a href="#" class="nav-link {{ $serviceActive }}"
                                            :class="{ 'active': tab === 'service-catalog' }"
                                            @click.prevent="tab = 'service-catalog'" id="service-catalog-tab"
                                            role="tab" aria-controls="service-catalog" aria-selected="false"
                                            tabindex="0"
                                            wire:click.prevent="setStep(3,'serviceActive','service-catalog')">
                                            <span class="number">3</span>
                                            Service Catalog
                                        </a>
                                    @else
                                        <div class="nav-link" title="Fill in first step to proceed">
                                            <span class="number">3</span>
                                            Service Catalog
                                        </div>
                                    @endif
                                </li>
                                <li class="nav-item" role="presentation">
                                    @if ($user->email)
                                        <a href="#" class="nav-link {{ $driveActive }}"
                                            :class="{ 'active': tab === 'drive-documents' }"
                                            @click.prevent="tab = 'drive-documents'" id="drive-documents-tab"
                                            role="tab" aria-controls="drive-documents" aria-selected="false"
                                            tabindex="0"
                                            wire:click.prevent="setStep(4,'driveActive','drive-documents');">
                                            <span class="number">4</span>
                                            Drive Documents
                                        </a>
                                    @else
                                        <div class="nav-link" title="Fill in first step to proceed">
                                            <span class="number">4</span>
                                            Drive Document
                                        </div>
                                    @endif
                                </li>
                            </ul>
                        @endif
                        {{-- Tab panes --}}
                        <div class="tab-content  {{ $selfProfile ? 'mt-5' : '' }}">

                            @if ($step == 1)
                                {{-- BEGIN: Customer Info --}}
                                <div class="tab-pane fade" :class="{ 'active show': tab === 'customer-info' }"
                                    id="customer-info" role="tabpanel" aria-labelledby="customer-info-tab"
                                    tabindex="0" x-show="tab === 'customer-info'">

                                    <section id="multiple-column-form">
                                        <div class="row">
                                            <div class="col-12">
                                                {{-- updated by shanila to add csrf and add form tag --}}
                                                {{-- <form class="form">
                                                    @csrf --}}
                                                <div class="row between-section-segment-spacing">
                                                    <div class="provider_image_panel">
                                                        <div class="provider_image">
                                                            @if ($image != null)
                                                                <img class="user_img cropfile"
                                                                    src="{{ '/tenant' . tenant('id') . '/app/livewire-tmp/' . $image->getFilename() }}">
                                                            @else
                                                                <img class="user_img cropfile"
                                                                    aria-label="Upload Profile Picture"
                                                                    src="{{ $userdetail['profile_pic'] == null ? '/tenant-resources/images/img-placeholder-document.jpg' : url($userdetail['profile_pic']) }}">
                                                            @endif
                                                            <div class="input--file">
                                                                <span>
                                                                    <img src="https://production-qa.eclipsescheduling.com/images/camera_icon.png"
                                                                        alt="">
                                                                </span>
                                                                <label for="cropfile"
                                                                    class="form-label visually-hidden">Input
                                                                    File</label>
                                                                <input wire:model="image"
                                                                    class="form-control inputFile" accept="image/*"
                                                                    id="cropfile" name="image" type="file"
                                                                    aria-invalid="false">
                                                            </div>
                                                            @error('image')
                                                                <span class="d-inline-block invalid-feedback mt-2">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row between-section-segment-spacing">
                                                    @if (!$isCustomer)
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
                                                    @endif

                                                    <div
                                                        class="col-lg-6 {{ $isCustomer ? 'hidden' : '' }} ps-lg-5 mb-4">
                                                        <label class="form-label" for="industry-column">
                                                            Industry
                                                            <span class="mandatory" aria-hidden="true">
                                                                *
                                                            </span>
                                                        </label>
                                                        <div>
                                                            <button type="button"
                                                                class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#industryModal">
                                                                {{-- Updated by Shanila to Add svg icon --}}
                                                                <svg aria-label="Select Industry" width="25"
                                                                    height="18" viewBox="0 0 25 18">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#right-color-arrow">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                                Select Industry
                                                            </button>
                                                            @error('selectedIndustries')
                                                                <span class="d-inline-block invalid-feedback mt-2">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div>
                                                            @if (count($industryNames) > 0)
                                                                Selected Industries :
                                                                @foreach ($industryNames as $key => $ind)
                                                                    {{ $ind }}
                                                                    @if ($key != count($industryNames) - 1)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>

                                                    @if (!$isCustomer || ($isCustomer && !$selfProfile))
                                                        <div class="col-lg-6 pe-lg-5 mb-4">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
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
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#departmentModal">
                                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                                    <svg aria-label="Select Department" width="25"
                                                                        height="18" viewBox="0 0 25 18">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#right-color-arrow">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                    Select Department
                                                                </button>
                                                            </div>

                                                            <div>
                                                                @if (count($departmentNames) > 0)
                                                                    Selected Department(s) :
                                                                    @foreach ($departmentNames as $key => $dept)
                                                                        {{ $dept }}
                                                                        @if ($key != count($departmentNames) - 1)
                                                                            ,
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <div class="col-lg-6 {{ $isCustomer ? 'pe' : 'ps' }}-lg-5 mb-4">
                                                        <label class="form-label" for="position-column">
                                                            Position
                                                        </label>

                                                        <input
                                                            {{ $isCustomer ? (in_array(10, session()->get('customerRoles')) || in_array(5, session()->get('customerRoles')) ? '' : 'disabled') : '' }}
                                                            type="text" id="position-column" class="form-control"
                                                            name="positionColumn" placeholder="Enter Position"
                                                            wire:model.defer="userdetail.user_position" />
                                                    </div>

                                                    <div class="col-lg-6 pe-lg-5 mb-4">
                                                        <label class="form-label" for="f-name">
                                                            First Name
                                                            <span class="mandatory" aria-hidden="true">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input type="text" id="f-name" class="form-control"
                                                            name="f-name" placeholder="Enter First Name" required
                                                            aria-required="true" wire:model.defer="user.first_name" />
                                                        @error('user.first_name')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-6 {{ $isCustomer ? 'pe' : 'ps' }}-lg-5 mb-4">
                                                        <label class="form-label" for="l-name">
                                                            Last Name
                                                            <span class="mandatory" aria-hidden="true">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input type="text" id="l-name" class="form-control"
                                                            name="l-name" placeholder="Enter Last Name" required
                                                            aria-required="true" wire:model.defer="user.last_name" />
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
                                                        <input type="text" id="pronouns-column"
                                                            class="form-control" placeholder="Enter Pronouns"
                                                            name="pronouns" wire:model.defer="userdetail.title" />
                                                    </div>

                                                    <div class="col-lg-6 {{ $isCustomer ? 'pe' : 'ps' }}-lg-5 mb-4">
                                                        <label class="form-label" for="">
                                                            Date of Birth
                                                        </label>
                                                        <div class="d-flex align-items-center w-100">
                                                            <div class="position-relative flex-grow-1">
                                                                <input type="text"
                                                                    class="form-control js-single-date"
                                                                    placeholder="Select Date of Birth"
                                                                    aria-label="Date of Birth" aria-describedby=""
                                                                    wire:model.defer="user.user_dob" name="user_dob"
                                                                    id="user_dob">
                                                                <svg aria-label="Select Date of Birth"
                                                                    class="icon-date" width="20" height="21"
                                                                    viewBox="0 0 20 21" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </div>
                                                            <button type="button" class="btn px-2">
                                                                <svg aria-label="View" width="24" height="17"
                                                                    viewBox="0 0 24 17" fill="none"
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
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
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

                                                    <div class="col-lg-6 {{ $isCustomer ? 'pe' : 'ps' }}-lg-5 mb-4">
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
                                                        <input type="text" id="email" class="form-control"
                                                            name="email" placeholder="Enter Email" required
                                                            aria-required="true" wire:model.defer="user.email" />
                                                        @error('user.email')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-6 {{ $isCustomer ? 'pe' : 'ps' }}-lg-5 mb-4">
                                                        <label class="form-label" for="phone-number">
                                                            Phone Number
                                                        </label>
                                                        <input type="text" id="phone-number" class="form-control"
                                                            name="phone" placeholder="Enter Phone Number"
                                                            wire:model.defer="userdetail.phone" />
                                                        @error('userdetail.phone')
                                                            <span
                                                                class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                                                        @enderror

                                                    </div>
                                                    {{-- <div class="col-lg-6 mb-4 pe-lg-5">
                                                        <label class="form-label" for="country">
                                                            Country
                                                        </label>
                                                        {!! $setupValues['countries']['rendered'] !!}
                                                    </div> --}}
                                                    {{-- <div class="col-lg-6 mb-4 {{ $isCustomer ? 'pe' : 'ps' }}-lg-5">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="state">State /
                                                                Province</label>
                                                            <input type="text" id="state" class="form-control"
                                                                name="state" placeholder="Enter State Name" required
                                                                aria-required="true"
                                                                wire:model.defer="userdetail.state" />
                                                            @error('userdetail.state')
                                                                <span
                                                                    class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                                                            @enderror

                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-lg-6 mb-4 pe-lg-5">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="city">City</label>
                                                            <input type="text" id="city" class="form-control"
                                                                name="city" placeholder="Enter City Name" required
                                                                aria-required="true"
                                                                wire:model.defer="userdetail.city" />
                                                            @error('userdetail.city')
                                                                <span
                                                                    class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                                                            @enderror

                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-lg-6 mb-4 {{ $isCustomer ? 'pe' : 'ps' }}-lg-5">
                                                        <label class="form-label" for="zip-code">
                                                            Zip Code
                                                        </label>
                                                        <input type="text" id="zip-code" class="form-control"
                                                            name="zipCode" placeholder="Enter Zip Code"
                                                            wire:model.defer="userdetail.zip" />
                                                        @error('userdetail.zip')
                                                            <span
                                                                class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                                                        @enderror

                                                    </div> --}}
                                                    {{-- <div class="col-lg-6 mb-4 pe-lg-5">

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
                                                        <input type="text" id="billing_address_form"
                                                            class="form-control" name="address-line-1"
                                                            placeholder="Enter Address Line 1"
                                                            wire:model.defer="userdetail.address_line1" />
                                                    </div>
                                                    <div class="col-lg-6 mb-4 {{ $isCustomer ? 'pe' : 'ps' }}-lg-5">
                                                        <label class="form-label" for="address-line-2">
                                                            Address Line 2
                                                        </label>
                                                        <input type="text" id="address-line-2"
                                                            class="form-control" name="addressLine2"
                                                            placeholder="Enter Address Line 2"
                                                            wire:model.defer="userdetail.address_line2" />
                                                    </div> --}}
                                                    <div class="col-lg-6 pe-lg-5 mb-4">
                                                        <label class="form-label" for="preferred-language">
                                                            Preferred Language
                                                        </label>
                                                        {!! $setupValues['languages']['rendered'] !!}
                                                    </div>

                                                    <div class="col-lg-6 {{ $isCustomer ? 'pe' : 'ps' }}-lg-5 mb-4">
                                                        <label class="form-label" for="time-zone">
                                                            Time Zone
                                                        </label>
                                                        {!! $setupValues['timezones']['rendered'] !!}
                                                    </div>

                                                    @if (!$isCustomer)
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-6 pe-lg-5">
                                                                    <label class="form-label"
                                                                        for="tags">Tags</label>
                                                                    <select data-placeholder="" multiple
                                                                        class="form-select  select2 form-select select2-hidden-accessible"
                                                                        tabindex="" id="tags-select"
                                                                        aria-label="Select Tags">
                                                                        @foreach ($allTags as $tag)
                                                                            <option
                                                                                {{ in_array($tag, $tags) ? 'selected' : '' }}
                                                                                value="{{ $tag }}">
                                                                                {{ $tag }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <input type="hidden" name="tags-holder"
                                                                        id="tags-holder" wire:model.defer="tags">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>


                                                <div class="row inner-section-segment-spacing">
                                                    {{-- Default Billing Address --}}
                                                    <div class="col-lg-12">
                                                        <div class="row between-section-segment-spacing">
                                                            @include('components.default-address', [
                                                                'type' => 1,
                                                                'userAddresses' => $userAddresses,
                                                                'title' => 'Additional',
                                                            ])

                                                            @include('components.default-address', [
                                                                'type' => 2,
                                                                'userAddresses' => $userAddresses,
                                                                'title' => 'Additional',
                                                            ])

                                                        </div>
                                                    </div>
                                                    {{-- </div> --}}


                                                    @if (!$isCustomer || ($isCustomer && !$selfProfile))
                                                        <div
                                                            class="col-lg-12 d-lg-flex gap-5 justify-content-center between-section-segment-spacing">
                                                            <div class="form-check mb-lg-0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    wire:model.defer="user_configuration.hide_from_providers"
                                                                    id="HideUsersDetailsfromProvider" value="true">
                                                                <label class="form-check-label"
                                                                    for="HideUsersDetailsfromProvider">
                                                                    Hide User's Details from Providers
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-lg-0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" id="email_invitation"
                                                                    wire:model.defer="email_invitation">
                                                                <label class="form-check-label"
                                                                    for="email_invitation">
                                                                    Send Invitation Email to the Customer
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    {{-- Action Buttons Start --}}
                                                    <div class="col-12 form-actions">
                                                        @if (!$isCustomer || ($isCustomer && !$selfProfile))
                                                            <button type="button"
                                                                class="btn btn-outline-dark rounded px-4 py-2"
                                                                wire:click.prevent="showList">
                                                                Cancel
                                                            </button>
                                                        @endif
                                                        <button type="submit"
                                                            class="btn btn-primary rounded px-4 py-2"
                                                            wire:click.prevent="save"
                                                            x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                            Save & Exit
                                                        </button>
                                                        @if (!$isCustomer || ($isCustomer && !$selfProfile))
                                                            <button type="submit"
                                                                class="btn btn-primary rounded px-4 py-2"
                                                                wire:click.prevent="save(0)"
                                                                x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('permission-configurations')">
                                                                Next
                                                            </button>
                                                        @endif
                                                    </div>
                                                    {{-- Action Buttons End --}}

                                                    {{-- </form> --}}
                                                    {{-- ended update by shanila --}}

                                                </div>
                                            </div>
                                    </section>

                                </div>
                                {{-- END Customer Info --}}
                            @elseif($step == 2)
                                {{-- BEGIN: Permission Configurations --}}

                                <div class="tab-pane fade"
                                    :class="{ 'active show': tab === 'permission-configurations' }"
                                    id="permission-configurations" role="tabpanel"
                                    aria-labelledby="permission-configurations-tab" tabindex="0"
                                    x-show="tab === 'permission-configurations'">
                                    <section id="multiple-column-form">
                                        <div class="">
                                            {{-- updated by shanila to add csrf and add form tag --}}
                                            {{-- <form class="form">
                                                @csrf --}}
                                            <div class="col-lg-12 inner-section-segment-spacing">


                                                <div class="d-lg-flex align-items-center justify-content-between mb-3">

                                                    <h2 class="mb-lg-0">Permission Configurations</h2>
                                                    <div
                                                        class="d-flex flex-column justify-content-center align-items-center gap-1">
                                                        <span>(coming soon)</span>

                                                        <label class="form-label-sm">
                                                            Copy permissions from another user

                                                        </label>

                                                        <a href="#" class="btn btn-primary w-75"
                                                            {{-- data-bs-toggle="modal"
                                                            data-bs-target="#addModal" --}}>
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
                                                            Select which roles this user will play in the company.
                                                            If the
                                                            user is not a Supervisor and or Billing Manager then you
                                                            can
                                                            select other users as Supervisor of this user and or
                                                            Billing
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
                                                    <div class="d-flex gap-5">
                                                        <button type="button"
                                                            class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#assignedSupervisorModal">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Assigned Supervisor(s)" width="25"
                                                                height="18" viewBox="0 0 25 18">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#right-color-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            Assigned Supervisor(s)
                                                        </button>
                                                        <div class="uploaded-data d-flex align-items-center">
                                                            @if (count($supervisorNames) > 0)


                                                                @for ($i = 0; $i <= $sv_limit; $i++)
                                                                    <img style="width:50px;height:50px;top:1rem"
                                                                        src="{{ $supervisorNames[$i]['userdetail']['profile_pic'] != null ? $supervisorNames[$i]['userdetail']['profile_pic'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                                                        class=""
                                                                        title="{{ $supervisorNames[$i]['name'] }}"
                                                                        alt="Profile Image">
                                                                @endfor
                                                                @if (count($supervisorNames) > 4)
                                                                    <div class="more">
                                                                        <span
                                                                            class="value">{{ count($supervisorNames) - 4 }}</span>
                                                                        more
                                                                    </div>
                                                                @endif

                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-lg-0">
                                                        <input disabled class="form-check-input" type="checkbox"
                                                            wire:model.defer="same_sv"
                                                            wire:click="selectSameSupervisor" id="AssignSame_User">
                                                        <label class="form-check-label" for="AssignSame_User">
                                                            Assign Same User <small>(coming soon)</small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 inner-section-segment-spacing">
                                                <label class="form-label text-primary">
                                                    Select Role
                                                </label>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="Yes"
                                                        id="CompanyAdmin" wire:model.defer="rolesArr.10">
                                                    <label class="form-check-label" for="CompanyAdmin">
                                                        Company Admin
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 d-md-flex gap-5 align-items-center mb-4">
                                                <div class="form-check mb-md-0">
                                                    <input class="form-check-input" type="checkbox" value="Yes"
                                                        wire:model.defer="rolesArr.5" id="Supervisor" checked>
                                                    <label class="form-check-label" for="Supervisor">
                                                        Supervisor
                                                    </label>
                                                </div>
                                                <button type="button"
                                                    class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                    data-bs-toggle="modal" data-bs-target="#supervisingModal">
                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                    <svg aria-label="Supervising" width="25" height="18"
                                                        viewBox="0 0 25 18">
                                                        <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    Supervising
                                                </button>
                                                <div class="uploaded-data d-flex align-items-center">
                                                    @if (count($supervisingNames) > 0)


                                                        @for ($i = 0; $i <= $limit; $i++)
                                                            <img style="width:50px;height:50px;top:1rem"
                                                                src="{{ $supervisingNames[$i]['userdetail']['profile_pic'] != null ? $supervisingNames[$i]['userdetail']['profile_pic'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                                                class=""
                                                                title="{{ $supervisingNames[$i]['name'] }}"
                                                                alt="Profile Image">
                                                        @endfor
                                                        @if (count($supervisingNames) > 4)
                                                            <div class="more">
                                                                <span
                                                                    class="value">{{ count($supervisingNames) - 4 }}</span>
                                                                more
                                                            </div>
                                                        @endif

                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-md-flex gap-5 mb-4">
                                                <div class="form-check mb-md-0">
                                                    <input class="form-check-input" type="checkbox" value="Yes"
                                                        wire:model.defer="rolesArr.6" id="Requester" checked>
                                                    <label class="form-check-label" for="Requester">
                                                        Requester
                                                    </label>
                                                </div>
                                                <div>
                                                    <div class="d-flex gap-5">
                                                        <button type="button"
                                                            class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#assignedBillingManagerModal">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Assigned Billing Manager" width="25"
                                                                height="18" viewBox="0 0 25 18">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#right-color-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            Assigned Billing Manager
                                                        </button>
                                                        <div class="uploaded-data d-flex align-items-center">
                                                            @if (count($bManagerNames) > 0)


                                                                @for ($i = 0; $i <= $bm_limit; $i++)
                                                                    <img style="width:50px;height:50px;top:1rem"
                                                                        src="{{ $bManagerNames[$i]['userdetail']['profile_pic'] != null ? $bManagerNames[$i]['userdetail']['profile_pic'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                                                        class=""
                                                                        title="{{ $bManagerNames[$i]['name'] }}"
                                                                        alt="Profile Image">
                                                                @endfor
                                                                @if (count($bManagerNames) > 4)
                                                                    <div class="more">
                                                                        <span
                                                                            class="value">{{ count($bManagerNames) - 4 }}</span>
                                                                        more
                                                                    </div>
                                                                @endif

                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-lg-0">
                                                        <input disabled class="form-check-input" type="checkbox"
                                                            wire:model.defer="same_bm" wire:click="selectSameBManager"
                                                            id="Assign-Same-User">
                                                        <label class="form-check-label" for="Assign-Same-User">
                                                            Assign Same User <small>(coming soon)</small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="Yes"
                                                        id="Service-Consumer" name="Service-Consumer"
                                                        wire:click="setServiceConsumer()"
                                                        wire:model.defer="rolesArr.7">
                                                    <label class="form-check-label" for="Service-Consumer">
                                                        Service Consumer
                                                    </label>
                                                </div>
                                            </div>
                                            @if ($serviceConsumer)
                                                <div class="row ">
                                                    <div class="col-lg-6 mb-4">
                                                        <label class="form-label"
                                                            for="service-consumer-introduction-column">
                                                            Service Consumer Introduction
                                                        </label>
                                                        <textarea class="form-control" rows="3" cols="3" placeholder=""
                                                            name="service-consumer-introduction-column" id="service-consumer-introduction-column"
                                                            wire:model.defer='userdetail.user_introduction'></textarea>
                                                    </div>

                                                    <div class="col-lg-6  mb-4">
                                                        <label for="file" class="form-label">
                                                            Service Consumer Introduction Media
                                                        </label>
                                                        <input class="form-control" wire:model="file" type="file"
                                                            id="file">
                                                        @error('file')
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
                                                </div>
                                            @endif
                                            <div class="col-lg-12 mb-4">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="Yes"
                                                        wire:model.defer="rolesArr.8" id="participant">
                                                    <label class="form-check-label" for="participant">
                                                        Participant
                                                    </label>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 d-md-flex gap-5 align-items-center between-section-segment-spacing">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="Yes"
                                                        wire:model.defer="rolesArr.9" id="BillingManager" checked>
                                                    <label class="form-check-label" for="BillingManager">
                                                        Billing Manager
                                                    </label>
                                                </div>
                                                <div class="d-flex gap-5">
                                                    <button type="button"
                                                        class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                        data-bs-toggle="modal" data-bs-target="#billManagingModal">
                                                        {{-- Updated by Shanila to Add svg icon --}}
                                                        <svg aria-label="Billing Manager" width="25"
                                                            height="18" viewBox="0 0 25 18">
                                                            <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                        Billing Manager
                                                    </button>
                                                    <div class="uploaded-data d-flex align-items-center">
                                                        @if (count($managerNames) > 0)


                                                            @for ($i = 0; $i <= $m_limit; $i++)
                                                                <img style="width:50px;height:50px;top:1rem"
                                                                    src="{{ $managerNames[$i]['userdetail']['profile_pic'] != null ? $managerNames[$i]['userdetail']['profile_pic'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                                                    class=""
                                                                    title="{{ $managerNames[$i]['name'] }}"
                                                                    alt="Profile Image">
                                                            @endfor
                                                            @if (count($managerNames) > 4)
                                                                <div class="more">
                                                                    <span
                                                                        class="value">{{ count($managerNames) - 4 }}</span>
                                                                    more
                                                                </div>
                                                            @endif

                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row between-section-segment-spacing">
                                                <div class="col-lg-6 mb-4 pe-lg-5">
                                                    <label class="form-label" for="preffered-providers">
                                                        Preferred Providers
                                                    </label>
                                                    <select name="favored_providers" id="favored_providers"
                                                        class=" select2 form-select "
                                                        wire:model.defer="favored_providers" tabindex="1" multiple
                                                        aria-label="Select Providers">
                                                        @foreach ($providers as $p)
                                                            <option value="{{ $p->id }}">
                                                                {{ $p->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-4 ps-lg-5">
                                                    <label class="form-label">
                                                        Disfavored Providers
                                                    </label>
                                                    <select name="unfavored_providers" id="unfavored_providers"
                                                        class=" select2 form-select "
                                                        wire:model.defer="unfavored_providers" tabindex="2" multiple
                                                        aria-label="Select Providers">
                                                        @foreach ($providers as $p)
                                                            <option value="{{ $p->id }}">
                                                                {{ $p->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 mb-4 pe-lg-5">
                                                    <label class="form-label">
                                                        Grant Access to User(s)' Schedules?
                                                    </label>
                                                    <div class="d-flex gap-3">
                                                        <div class="form-check mb-lg-0">
                                                            <input class="form-check-input" type="radio"
                                                                name="GrantAccesstoUserSchedules" value=true
                                                                id="GrantAccesstoUserSchedulesYes"
                                                                wire:model="user_configuration.grant_access_to_schedule">
                                                            <label class="form-check-label"
                                                                for="GrantAccesstoUserSchedulesYes">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-lg-0">
                                                            <input class="form-check-input" type="radio"
                                                                name="GrantAccesstoUserSchedules" value=false
                                                                wire:model="user_configuration.grant_access_to_schedule"
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
                                                    <select name="have_access_to" id="have_access_to"
                                                        class=" select2 form-select "
                                                        wire:model.defer="user_configuration.have_access_to"
                                                        tabindex="3" multiple aria-label="Select Users">
                                                        @foreach ($allUserSchedules as $user)
                                                            <option value="{{ $user->id }}">
                                                                {{ $user->name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>

                                                <div class="col-lg-6 mb-4 pe-lg-5">
                                                    <label class="form-label">
                                                        Require Service Request Approval from Assigned Supervisor
                                                        <i class="fa fa-question-circle text-muted" aria-hidden="true"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title=""></i>
                                                    </label>
                                                    <div class="d-flex gap-3">
                                                        <div class="form-check mb-lg-0">
                                                            <input class="form-check-input" type="radio"
                                                                name="RequireServiceRequestApprovalfromAssignedSupervisor"
                                                                value=true
                                                                wire:model="user_configuration.require_approval"
                                                                id="RequireServiceRequestApprovalfromAssignedSupervisorYes">
                                                            <label class="form-check-label"
                                                                for="RequireServiceRequestApprovalfromAssignedSupervisorYes">
                                                                Yes
                                                            </label>
                                                        </div>

                                                        <div class="form-check mb-lg-0">
                                                            <input class="form-check-input" type="radio"
                                                                name="RequireServiceRequestApprovalfromAssignedSupervisor"
                                                                value=false
                                                                wire:model="user_configuration.require_approval"
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
                                                                name="HideBillingInformationfromUser" value=true
                                                                wire:model="user_configuration.hide_billing"
                                                                id="HideBillingInformationfromUserYes">
                                                            <label class="form-check-label"
                                                                for="HideBillingInformationfromUserYes">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-lg-0">
                                                            <input class="form-check-input" type="radio"
                                                                name="HideBillingInformationfromUser" value=false
                                                                wire:model="user_configuration.hide_billing"
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
                                                    <div class="d-flex gap-5">
                                                        <button type="button"
                                                            class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                            data-bs-toggle="modal" data-bs-target="#adminStaffModal">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Assigned Admin-Staff" width="25"
                                                                height="18" viewBox="0 0 25 18">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#right-color-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            Assigned Admin-Staff
                                                        </button>
                                                        <div class="uploaded-data d-flex align-items-center">
                                                            @if (count($adminStaffNames) > 0)


                                                                @for ($i = 0; $i <= $s_limit; $i++)
                                                                    <img style="width:50px;height:50px;top:1rem"
                                                                        src="{{ $adminStaffNames[$i]['userdetail']['profile_pic'] != null ? $adminStaffNames[$i]['userdetail']['profile_pic'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                                                        class=""
                                                                        title="{{ $adminStaffNames[$i]['name'] }}"
                                                                        alt="Profile Image">
                                                                @endfor
                                                                @if (count($adminStaffNames) > 4)
                                                                    <div class="more">
                                                                        <span
                                                                            class="value">{{ count($adminStaffNames) - 4 }}</span>
                                                                        more
                                                                    </div>
                                                                @endif

                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Action Buttons Start --}}
                                            <div class="col-12 form-actions">
                                                <button type="button" class="btn btn-outline-dark rounded"
                                                    onclick=" window.scrollTo({ top: 0, behavior: 'smooth' })"
                                                    wire:click.prevent="setStep(1,'customerActive','customer-info');">
                                                    Back
                                                </button>
                                                <button type="submit" class="btn btn-primary rounded px-4 py-2"
                                                    wire:click.prevent="permissionConfiguration"
                                                    x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                                                    Save & Exit
                                                </button>
                                                <button type="button" class="btn btn-primary rounded"
                                                    onclick="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('service-catalog')"
                                                    wire:click.prevent="permissionConfiguration(0)">
                                                    Next
                                                </button>
                                            </div>
                                            {{-- Action Buttons End --}}
                                            {{-- </form> --}}
                                            {{-- ended update by shanila --}}

                                        </div>
                                    </section>
                                </div>
                                {{-- END: Permission Configurations --}}
                            @endif

                            @if (!$isCustomer || ($isCustomer && !$selfProfile))

                                {{-- BEGIN: Service Catalog --}}
                                <div class="tab-pane fade" :class="{ 'active show': tab === 'service-catalog' }"
                                    id="service-catalog" role="tabpanel" aria-labelledby="service-catalog-tab"
                                    tabindex="0" x-show="tab === 'service-catalog'">
                                    <section id="multiple-column-form">
                                        <a href="javascript:void(0)" style="display:none"
                                            @click="associateservice = true" id="serviceIco"
                                            title="Add Service Rates" aria-label="Add Service Rates"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="dollar-icon" />
                                        </a>
                                        @if ($step == 3)
                                            @livewire('app.admin.customer.service-catelog', ['showButtons' => false, 'modelId' => $user->id, 'modelType' => 'customer', 'parentId' => $user->company_name, 'parentType' => 'company'])
                                        @endif
                                        <div class="col-12 form-actions">
                                            <button type="button" class="btn btn-outline-dark rounded px-4 py-2"
                                                wire:click.prevent="setStep(2,'permissionActive','permission-configurations')"
                                                x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('permission-configurations')">
                                                Back
                                            </button>
                                            <button type="submit" class="btn btn-primary rounded px-4 py-2"
                                                wire:click.prevent="serviceCatelog"
                                                x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
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

                                {{-- END: Service Catalog --}}


                                {{-- BEGIN: Drive Documents Pane --}}
                                <div class="tab-pane fade" :class="{ 'active show': tab === 'drive-documents' }"
                                    id="drive-documents" role="tabpanel" aria-labelledby="drive-documents-tab"
                                    tabindex="0" x-show="tab === 'drive-documents'">

                                    <section id="multiple-column-form">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="col-md-8 mb-md-2">
                                                    <h2>Drive Documents</h2>
                                                </div>
                                                <div>
                                                    @livewire('app.common.forms.drive-uploads', ['showForm' => true, 'showSearch' => false, 'record_id' => $user->id, 'record_type' => 3], key($user->id))
                                                </div>

                                                <div class="col-md-12 mb-md-2">
                                                    <div class="row">

                                                        {{-- Action Buttons Start --}}
                                                        <div
                                                            class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                                            <button type="button"
                                                                class="btn btn-outline-dark rounded"
                                                                onclick=" window.scrollTo({ top: 0, behavior: 'smooth' })"
                                                                wire:click.prevent="setStep(3,'serviceActive','service-catalog')">
                                                                Back
                                                            </button>
                                                            <a href="/admin/customer">
                                                                <button type="button" wire:click.prevent="save"
                                                                    x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });"
                                                                    class="btn btn-primary rounded w-100">
                                                                    Submit
                                                                </button>
                                                            </a>

                                                        </div>
                                                        {{-- Action Buttons End --}}
                                                    </div>
                                                </div>
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
        @include('panels.services.associated-service')

    </div>
</div>
</div>

@push('scripts')
    <script>
        function updateVal(attrName, val) {

            Livewire.emit('updateVal', attrName, val);

        }
    </script>
    <script src="/tenant-resources/js/form-functions.js"></script>
@endpush
