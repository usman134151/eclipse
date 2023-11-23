@php
    $videoUrl = 'https://www.youtube.com/embed/MLdkcJ5Cb5s?si=jHEX4ax2vVYkfJnZ';
@endphp
<div x-data="{accommodationServicesAccess: false , companiesCustomers: false , teamsProviderAccess: false}">
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">{{$label}} Admin Staff</h1>
                    <div class="float-lg-end float-md-end float-sm-start mb-0">
                            @include('layouts.video-guide')					
                         </div>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
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
                                <span class="text-secondary">Admin Staff</span>
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
                <div x-data="{ tab: @entangle('component')}" id="tab_wrapper">
                    <!-- Nav tabs
                    <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="nav-link" :class="{ 'active': tab === 'profile' }"
                                @click.prevent="tab = 'profile'" id="user-profile-tab" role="tab"
                                aria-controls="user-profile" aria-selected="true"><span class="number">1</span>
                                Profile
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'system-permissions' }"
                                @click.prevent="tab = 'system-permissions'" id="system-permissions-tab" role="tab"
                                aria-controls="system-permissions" aria-selected="false"><span class="number">2</span>
                                System Permissions
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" :class="{ 'active': tab === 'user-access' }"
                                @click.prevent="tab = 'user-access'" id="user-access-tab" role="tab"
                                aria-controls="user-access" aria-selected="false"><span class="number">3</span>
                                User Access
                            </a>
                        </li>
                    </ul>  -->

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- BEGIN: Profile -->
                        <div class="tab-pane fade" :class="{ 'active show': tab === 'profile' }" id="user-profile"
                            role="tabpanel" aria-labelledby="user-profile-tab" tabindex="0" x-show="tab === 'profile'">

                            <form class="form">
                                {{-- updated by shanila to add csrf--}}
                                @csrf
                                {{-- update ended by shanila --}}
                             <div class="row mt-2 between-section-segment-spacing">
                                <div class="provider_image_panel">
                                    <div class="provider_image">
                                        @if ($image!=null)
                                            <img class="user_img cropfile" src="{{ '/tenant'.tenant('id').'/app/livewire-tmp/'.$image->getFilename() }}">
                                        @else
                                            <img class="user_img cropfile" src="{{$userdetail['profile_pic'] == null ? '/tenant-resources/images/img-placeholder-document.jpg' : url($userdetail['profile_pic']) }}">
                                        @endif
                                        <div class="input--file">
                                            <span>
                                                <img src="https://production-qa.eclipsescheduling.com/images/camera_icon.png" alt="">
                                            </span>
                                            <label for="cropfile" class="form-label visually-hidden">Input File</label>
                                            <input wire:model="image" class="form-control inputFile" accept="image/*" id="cropfile" name="image" type="file" aria-invalid="false" >
                                        </div>
                                        @error('team.team_image')
                                        <span class="d-inline-block invalid-feedback mt-2">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                                <div class="row between-section-segment-spacing">
                                    {{-- <div class="col-lg-12">
                                        <div class="d-lg-flex justify-content-between mb-4">
                                            <h2 class="mb-lg-0">User Profile</h2>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="userProfile" checked aria-label="User Profile Toggle">
                                                <label class="form-check-label" for="userProfile">Active</label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="first_name">
                                                First Name <span class="mandatory" aria-hidden="true">*</span>
                                            </label>
                                            <input type="text" id="first_name" class="form-control" name="first_name"
                                                placeholder="Enter First Name" required aria-required="true"  wire:model.defer="user.first_name"/>
                                                @error('user.first_name')
												<span class="d-inline-block invalid-feedback mt-2">
													{{ $message }}
												</span>
												@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="last_name">
                                                Last Name <span class="mandatory" aria-hidden="true">*</span>
                                            </label>
                                            <input type="text" id="last_name" class="form-control" name="last_name"
                                                placeholder="Enter Last Name" required aria-required="true"  wire:model.defer="user.last_name"/>
                                                @error('user.last_name')
												<span class="d-inline-block invalid-feedback mt-2">
													{{ $message }}
												</span>
												@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="pronouns">Pronouns</label>
                                            <input type="text" id="pronouns" class="form-control"
                                                placeholder="Enter Pronouns" name="pronouns"  wire:model.defer="userdetail.title" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="form-label" for="gender">Gender</label>
                                                <a href="#" class="fw-bold">
                                                    <small>
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z"
                                                                fill="#0A1E46"></path>
                                                        </svg>
                                                        Add New
                                                    </small>
                                                </a>
                                            </div>
                                            {!! $setupValues['gender']['rendered'] !!}
                                        </div>
                                    </div>
                                    {{-- <div class="row inner-section-segment-spacing"> --}}
                                        <div class="col-md-6 col-12">
                                            <div class="mb-4">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="form-label" for="ethnicity">
                                                        Ethnicity
                                                    </label>
                                                    <a href="#" class="fw-bold">
                                                        <small>
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z"
                                                                    fill="#0A1E46"></path>
                                                            </svg>
                                                            Add New
                                                        </small>
                                                    </a>
                                                </div>
                                                {!! $setupValues['ethnicities']['rendered'] !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 ">
                                            <div class="mb-4">
                                                <label class="form-label" for="position">Position</label>
                                                <input type="text" id="position" class="form-control"
                                                    placeholder="Enter Position" name="position" wire:model.defer="userdetail.user_position" />
                                            </div>
                                        </div>
                                    {{-- </div> --}}
                                    {{-- updated by shanila to replace checkboxes with multidropdowns --}}
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                                    <label class="form-label">Roles and Permissions</label>
                                                    {!! $setupValues['roles']['rendered'] !!}
                                                  
                                        </div>
                                      </div>
                                      {{-- updated completed by shanila --}}
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="email">Email<span class="mandatory"
                                                    aria-hidden="true">*</span></label>
                                            <input type="text" id="email" class="form-control" placeholder="Enter Email"
                                                name="email"  wire:model.defer="user.email"/>
                                                @error('user.email')
												<span class="d-inline-block invalid-feedback mt-2">
													{{ $message }}
												</span>
												@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="phone_number">
                                                Phone Number
                                            </label>
                                            <input type="text" id="phone_number" class="form-control"
                                                name="phone_number" placeholder="Enter Phone Number" required
                                                aria-required="true" wire:model.defer="userdetail.phone"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="form-label" for="address-line-1">
                                                  Work  Address Line 1
                                                </label>
                                                
                                                <a class="fw-bold {{trim($userdetail['address_line1'])==null ? 'hidden' : '' }}"  target="_blank" href="https://www.google.com/maps/search/?api=1&query={{ str_replace(" ","+",$userdetail['address_line1'].' '.$userdetail['address_line2'].' '.$userdetail['city'].' '.$userdetail['state'].' '.$userdetail['country']) }}" >
                                                    <small>
                                                        Open in Maps
                                                    </small>
                                                </a>
                                            </div>
                                            <input type="text" id="billing_address_form" class="form-control"
                                                name="work_address_line_1" placeholder="Enter Address 1" required
                                                aria-required="true" wire:model.defer="userdetail.address_line1"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="work_address_line_2">
                                                Work Address Line 2
                                            </label>
                                            <input type="text" id="work_address_line_2" class="form-control"
                                                name="work_address_line_2" placeholder="Enter Address 2" required
                                                aria-required="true" wire:model.defer="userdetail.address_line2"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="country">Country</label>
                                            {{-- updated by shanila to add dropdown --}}
                                            {!! $setupValues['countries']['rendered'] !!}
                                            {{-- ended update --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="state">State / Province</label>
                                            <input type="text" id="state" class="form-control"
                                                name="state" placeholder="Enter State Name"
                                                required aria-required="true" wire:model.defer="userdetail.state"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="city">City</label>
                                            <input type="text" id="city" class="form-control"
                                                name="city" placeholder="Enter City Name"
                                                required aria-required="true" wire:model.defer="userdetail.city"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="zip_code_postal_code">Zip Code / Postal Code</label>
                                            <input type="text" id="zip_code_postal_code" class="form-control"
                                                name="zip_code_postal_code" placeholder="Enter Zip Code / Postal Code"
                                                required aria-required="true" wire:model.defer="userdetail.zip"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="set_time_zone">Set Time Zone</label>
                                            {!! $setupValues['timezones']['rendered'] !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 justify-content-center form-actions d-flex">
                                    <button type="button" class="btn btn-outline-dark rounded mx-2"
                                        wire:click.prevent="showList">
                                        Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary rounded mx-2" wire:click.prevent="save" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">Save Record</button>
                                    <!-- <button type="submit" class="btn btn-primary rounded">Next</button> -->
                                </div>
                            </form>
                        </div><!-- END: Profile -->

                        <!-- BEGIN: System Permissions -->
                        <div class="tab-pane fade" :class="{ 'active show': tab === 'system-permissions' }"
                            id="system-permissions" role="tabpanel" aria-labelledby="system-permissions-tab"
                            tabindex="0" x-show="tab === 'system-permissions'">
                            <form class="form">
                                {{-- updated by shanila to add csrf--}}
                                @csrf
                                {{-- update ended by shanila --}}

                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <h2>Manage User Permissions</h2>
                                        <p>Choose from predefined set of permissions for the user. You can customize
                                            permissions
                                            as well.</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12 gap-3 d-lg-flex">
                                        @foreach($roles as $roles)
                                        <a href="#" class="btn btn-outline-dark rounded">{{$roles->system_role_name}}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12 mb-4">
                                        <p class="mb-0">Copy permissions from another user</p>
                                    </div>
                                    <div class="col-lg-12 d-lg-flex gap-3 mb-3">
                                        <select class="form-select w-auto">
                                            <option>Select User</option>
                                        </select>
                                        <a href="#" class="btn btn-primary rounded">Apply</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table id="" class="table table-hover">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="w-25">Section</th>
                                                        <th>
                                                            <div
                                                                class="form-check mb-0 d-lg-flex align-items-center gap-2">
                                                                <input class="form-check-input" id="th_view"
                                                                    name="th_view" type="checkbox" tabindex="" />
                                                                <label class="form-check-label" for="th_view">
                                                                    View</label>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <div
                                                                class="form-check mb-0 d-lg-flex align-items-center gap-2">
                                                                <input class="form-check-input" id="th_add"
                                                                    name="th_add" type="checkbox" tabindex="" />
                                                                <label class="form-check-label" for="th_add">
                                                                    Add</label>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <div
                                                                class="form-check mb-0 d-lg-flex align-items-center gap-2">
                                                                <input class="form-check-input" id="th_edit"
                                                                    name="th_edit" type="checkbox" tabindex="" />
                                                                <label class="form-check-label" for="th_edit">
                                                                    Edit</label>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <div
                                                                class="form-check mb-0 d-lg-flex align-items-center gap-2">
                                                                <input class="form-check-input" id="th_delete"
                                                                    name="th_delete" type="checkbox" tabindex="" />
                                                                <label class="form-check-label" for="th_delete">
                                                                    Delete</label>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <div
                                                                class="form-check mb-0 d-lg-flex align-items-center gap-2">
                                                                <input class="form-check-input" id="th_all"
                                                                    name="th_all" type="checkbox" tabindex="" />
                                                                <label class="form-check-label" for="th_all">
                                                                    All</label>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td>
                                                            <div class="d-flex justify-content-between"
                                                                data-bs-toggle="collapse" href="#collapseDashboard"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseDashboard">
                                                                Dashboard
                                                                <svg xmlns='http://www.w3.org/2000/svg'
                                                                    viewBox='0 0 24 24' fill='none' stroke='#000000'
                                                                    stroke-width='2' stroke-linecap='round'
                                                                    stroke-linejoin='round'
                                                                    class='feather feather-chevron-right icon-arrow-right'>
                                                                    <polyline points='9 18 15 12 9 6'></polyline>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody class="collapse" id="collapseDashboard">
                                                    <tr>
                                                        <td class="ps-4">Dashboard</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr role="row" class="even">
                                                        <td>
                                                            <div class="d-flex justify-content-between">
                                                                Chat
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td>
                                                            <div class="d-flex justify-content-between"
                                                                data-bs-toggle="collapse" href="#collapseAssignments"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseAssignments">
                                                                Assignments
                                                                <svg xmlns='http://www.w3.org/2000/svg'
                                                                    viewBox='0 0 24 24' fill='none' stroke='#000000'
                                                                    stroke-width='2' stroke-linecap='round'
                                                                    stroke-linejoin='round'
                                                                    class='feather feather-chevron-right icon-arrow-right'>
                                                                    <polyline points='9 18 15 12 9 6'></polyline>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody class="collapse" id="collapseAssignments">
                                                    <tr>
                                                        <td class="ps-4">Assignments</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr role="row" class="even">
                                                        <td>
                                                            <div class="d-flex justify-content-between"
                                                                data-bs-toggle="collapse" href="#collapseCustomers"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseCustomers">
                                                                Customers
                                                                <svg xmlns='http://www.w3.org/2000/svg'
                                                                    viewBox='0 0 24 24' fill='none' stroke='#000000'
                                                                    stroke-width='2' stroke-linecap='round'
                                                                    stroke-linejoin='round'
                                                                    class='feather feather-chevron-right icon-arrow-right'>
                                                                    <polyline points='9 18 15 12 9 6'></polyline>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody class="collapse" id="collapseCustomers">
                                                    <tr class="odd">
                                                        <td class="first-col">Add Customer</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="first-col">All Customers</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="first-col">All Companies</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="first-col">Deactivated Customers</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="first-col">Invoice Generator</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="first-col">Customer Invoices</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td>
                                                            <div class="d-flex justify-content-between"
                                                                data-bs-toggle="collapse" href="#collapseProviders"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseProviders">
                                                                Providers
                                                                <svg xmlns='http://www.w3.org/2000/svg'
                                                                    viewBox='0 0 24 24' fill='none' stroke='#000000'
                                                                    stroke-width='2' stroke-linecap='round'
                                                                    stroke-linejoin='round'
                                                                    class='feather feather-chevron-right icon-arrow-right'>
                                                                    <polyline points='9 18 15 12 9 6'></polyline>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody class="collapse" id="collapseProviders">
                                                    <tr>
                                                        <td class="ps-4">Add Provider</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr role="row" class="even">
                                                        <td>
                                                            <div class="d-flex justify-content-between">
                                                                Reports
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td>
                                                            <div class="d-flex justify-content-between">
                                                                System Logs
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr role="row" class="even">
                                                        <td>
                                                            <div class="d-flex justify-content-between"
                                                                data-bs-toggle="collapse" href="#collapseSettings"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseSettings">
                                                                Settings
                                                                <svg xmlns='http://www.w3.org/2000/svg'
                                                                    viewBox='0 0 24 24' fill='none' stroke='#000000'
                                                                    stroke-width='2' stroke-linecap='round'
                                                                    stroke-linejoin='round'
                                                                    class='feather feather-chevron-right icon-arrow-right'>
                                                                    <polyline points='9 18 15 12 9 6'></polyline>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody class="collapse" id="collapseSettings">
                                                    <tr>
                                                        <td class="ps-4">Business Profile & Settings</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                </div>
                                <!-- Form Actions -->
                                <div class="col-12 justify-content-center form-actions d-flex">
                                    <button type="button" class="btn btn-outline-dark rounded mx-2">Back</button>
                                    <button type="submit" class="btn btn-primary rounded">Next</button>
                                </div><!-- /Form Actions -->

                            </form>
                        </div><!-- END: System Permissions -->

                        <!-- BEGIN: User Access -->
                        <div class="tab-pane fade" :class="{ 'active show': tab === 'user-access' }" id="user-access"
                            role="tabpanel" aria-labelledby="user-access-tab" tabindex="0"
                            x-show="tab === 'user-access'">
                            <form class="form">
                                {{-- updated by shanila to add csrf--}}
                                @csrf
                                {{-- update ended by shanila --}}
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <h2>Manage User Access</h2>
                                        <p>Copy Access of Customers & Providers from another user</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12 d-lg-flex gap-3 mb-4">
                                        <select class="form-select w-auto">
                                            <option>Select User</option>
                                        </select>
                                        <a href="#" class="btn btn-primary rounded">Apply</a>
                                    </div>
                                    <div class="col-12">
                                        <div class="accordion" id="accordionManageUserAccess">
                                            <div class="accordion-item">
                                                <div id="headingCompaniesCustomerAccess">
                                                    <div class="accordion-button justify-content-between"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseCompaniesCustomerAccess"
                                                        aria-expanded="true"
                                                        aria-controls="collapseCompaniesCustomerAccess">
                                                        <div>Companies & Customer Access</div>
                                                        <a href="#" class="btn btn-primary rounded me-5">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                                    fill="white" />
                                                            </svg>
                                                            <span class="ms-2">Add Customer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div id="collapseCompaniesCustomerAccess"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne"
                                                    data-bs-parent="#accordionManageUserAccess">
                                                    <div class="accordion-body p-0">
                                                        <div class="d-flex justify-content-between my-2">
                                                            <div class="d-inline-flex align-items-center gap-4">
                                                                <label for="show_records_number"
                                                                    class="form-label mb-0">Show</label>
                                                                <select class="form-select" id="show_records_number">
                                                                    <option>10</option>
                                                                    <option>15</option>
                                                                    <option>20</option>
                                                                    <option>25</option>
                                                                </select>
                                                            </div>
                                                            <div class="d-inline-flex align-items-center gap-4">
                                                                <label for="search"
                                                                    class="form-label fw-semibold mb-0">Search</label>
                                                                <input type="search" class="form-control" id="search"
                                                                    name="search" placeholder="Search here"
                                                                    autocomplete="on" />
                                                            </div>
                                                        </div>
                                                        <table class="table table-hover mb-3">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        Company
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Customers
                                                                    </th>
                                                                    <th>
                                                                        Permission
                                                                    </th>
                                                                    <th class="text-center">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a @click="companiesCustomers = true" href="#"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage1" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage1">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="companiesCustomers = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage2" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage2">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="companiesCustomers = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <a>Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage3" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage3">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="companiesCustomers = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage4">
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage4">Visible</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="companiesCustomers = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage5" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage5">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="companiesCustomers = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center px-3 mb-3">
                                                            <div>
                                                                <p class="fw-semibold mb-0">Showing 1 to 5 of 100
                                                                    entries
                                                                </p>
                                                            </div>
                                                            <nav aria-label="Page Navigation">
                                                                <ul class="pagination mb-0">
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"
                                                                            aria-label="Previous">
                                                                            <span aria-hidden="true">&laquo;</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">1</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">2</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">3</a>
                                                                    </li>
                                                                    <li class="page-item active"><a class="page-link"
                                                                            href="#">4</a></li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#" aria-label="Next">
                                                                            <span aria-hidden="true">&raquo;</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="headingTeamsProvidersAccess">
                                                    <div class="accordion-button justify-content-between"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTeamsProvidersAccess"
                                                        aria-expanded="true"
                                                        aria-controls="collapseTeamsProvidersAccess">
                                                        <div>Teams & Providers Access</div>
                                                        <a href="#" class="btn btn-primary rounded me-5">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                                    fill="white" />
                                                            </svg>
                                                            <span class="ms-2">Add Provider</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div id="collapseTeamsProvidersAccess"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne"
                                                    data-bs-parent="#accordionManageUserAccess">
                                                    <div class="accordion-body p-0">
                                                        <div class="d-flex justify-content-between my-2">
                                                            <div class="d-inline-flex align-items-center gap-4">
                                                                <label for="show_records_number"
                                                                    class="form-label mb-0">Show</label>
                                                                <select class="form-select" id="show_records_number">
                                                                    <option>10</option>
                                                                    <option>15</option>
                                                                    <option>20</option>
                                                                    <option>25</option>
                                                                </select>
                                                            </div>
                                                            <div class="d-inline-flex align-items-center gap-4">
                                                                <label for="search"
                                                                    class="form-label fw-semibold mb-0">Search</label>
                                                                <input type="search" class="form-control" id="search"
                                                                    name="search" placeholder="Search here"
                                                                    autocomplete="on" />
                                                            </div>
                                                        </div>
                                                        <table class="table table-hover mb-3">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        Teams
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Providers
                                                                    </th>
                                                                    <th>
                                                                        Permission
                                                                    </th>
                                                                    <th class="text-center">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="teamsProviderAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage1" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage1">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="teamsProviderAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage2" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage2">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="teamsProviderAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage3" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage3">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="teamsProviderAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a>Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage4">
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage4">Visible</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="teamsProviderAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        3
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage5" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage5">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="teamsProviderAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center px-3 mb-3">
                                                            <div>
                                                                <p class="fw-semibold mb-0">Showing 1 to 5 of 100
                                                                    entries
                                                                </p>
                                                            </div>
                                                            <nav aria-label="Page Navigation">
                                                                <ul class="pagination mb-0">
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"
                                                                            aria-label="Previous">
                                                                            <span aria-hidden="true">&laquo;</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">1</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">2</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">3</a>
                                                                    </li>
                                                                    <li class="page-item active"><a class="page-link"
                                                                            href="#">4</a></li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#" aria-label="Next">
                                                                            <span aria-hidden="true">&raquo;</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="headingAccommodationServiceAccess">
                                                    <div class="accordion-button justify-content-between"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseAccommodationServiceAccess"
                                                        aria-expanded="true"
                                                        aria-controls="collapseAccommodationServiceAccess">
                                                        <div>Accommodation & Service Access</div>
                                                        <a href="#" class="btn btn-primary rounded me-5">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                                    fill="white" />
                                                            </svg>
                                                            <span class="ms-2">Add Service</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div id="collapseAccommodationServiceAccess"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne"
                                                    data-bs-parent="#accordionManageUserAccess">
                                                    <div class="accordion-body p-0">
                                                        <div class="d-flex justify-content-between my-2">
                                                            <div class="d-inline-flex align-items-center gap-4">
                                                                <label for="show_records_number"
                                                                    class="form-label mb-0">Show</label>
                                                                <select class="form-select" id="show_records_number">
                                                                    <option>10</option>
                                                                    <option>15</option>
                                                                    <option>20</option>
                                                                    <option>25</option>
                                                                </select>
                                                            </div>
                                                            <div class="d-inline-flex align-items-center gap-4">
                                                                <label for="search"
                                                                    class="form-label fw-semibold mb-0">Search</label>
                                                                <input type="search" class="form-control" id="search"
                                                                    name="search" placeholder="Search here"
                                                                    autocomplete="on" />
                                                            </div>
                                                        </div>
                                                        <table class="table table-hover mb-3">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        Accommodation
                                                                    </th>
                                                                    <th>
                                                                        Permission
                                                                    </th>
                                                                    <th class="text-center">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a>Example
                                                                            Company</a>
                                                                    </td>


                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="accommodationServicesAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a>Example
                                                                            Company</a>
                                                                    </td>


                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage1" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage1">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="accommodationServicesAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>


                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage2" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage2">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="accommodationServicesAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a>Example
                                                                            Company</a>
                                                                    </td>


                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage3" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage3">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="accommodationServicesAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>


                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage4">
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage4">Visible</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="accommodationServicesAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a >Example
                                                                            Company</a>
                                                                    </td>


                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage5" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage5">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#" @click="accommodationServicesAccess = true"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center px-3 mb-3">
                                                            <div>
                                                                <p class="fw-semibold mb-0">Showing 1 to 5 of 100
                                                                    entries
                                                                </p>
                                                            </div>
                                                            <nav aria-label="Page Navigation">
                                                                <ul class="pagination mb-0">
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"
                                                                            aria-label="Previous">
                                                                            <span aria-hidden="true">&laquo;</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">1</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">2</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">3</a>
                                                                    </li>
                                                                    <li class="page-item active"><a class="page-link"
                                                                            href="#">4</a></li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#" aria-label="Next">
                                                                            <span aria-hidden="true">&raquo;</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="headingIndustryAccess">
                                                    <div class="accordion-button justify-content-between"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseIndustryAccess" aria-expanded="true"
                                                        aria-controls="collapseIndustryAccess">
                                                        <div>Industry Access</div>
                                                        <a href="#" class="btn btn-primary rounded me-5">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                                    fill="white" />
                                                            </svg>
                                                            <span class="ms-2">Add Industry</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div id="collapseIndustryAccess"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne"
                                                    data-bs-parent="#accordionManageUserAccess">
                                                    <div class="accordion-body p-0">
                                                        <div class="d-flex justify-content-between my-2">
                                                            <div class="d-inline-flex align-items-center gap-4">
                                                                <label for="show_records_number"
                                                                    class="form-label mb-0">Show</label>
                                                                <select class="form-select" id="show_records_number">
                                                                    <option>10</option>
                                                                    <option>15</option>
                                                                    <option>20</option>
                                                                    <option>25</option>
                                                                </select>
                                                            </div>
                                                            <div class="d-inline-flex align-items-center gap-4">
                                                                <label for="search"
                                                                    class="form-label fw-semibold mb-0">Search</label>
                                                                <input type="search" class="form-control" id="search"
                                                                    name="search" placeholder="Search here"
                                                                    autocomplete="on" />
                                                            </div>
                                                        </div>
                                                        <table class="table table-hover mb-3">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        Industry
                                                                    </th>
                                                                    <th>
                                                                        Permission
                                                                    </th>
                                                                    <th class="text-center">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a @click="offcanvasOpen = true">Example
                                                                            Company</a>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a @click="offcanvasOpen = true">Example
                                                                            Company</a>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage1" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage1">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a @click="offcanvasOpen = true">Example
                                                                            Company</a>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage2" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage2">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a @click="offcanvasOpen = true">Example
                                                                            Company</a>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage3" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage3">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a @click="offcanvasOpen = true">Example
                                                                            Company</a>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage4">
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage4">Visible</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" id=""
                                                                                name="" type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a @click="offcanvasOpen = true">Example
                                                                            Company</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                id="CustomerAccessManage5" checked>
                                                                            <label class="form-check-label"
                                                                                for="CustomerAccessManage5">Manage</label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
                                                                                    stroke="black" stroke-width="2" />
                                                                                <path
                                                                                    d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
                                                                                    stroke="black" stroke-width="2"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center px-3 mb-3">
                                                            <div>
                                                                <p class="fw-semibold mb-0">Showing 1 to 5 of 100
                                                                    entries
                                                                </p>
                                                            </div>
                                                            <nav aria-label="Page Navigation">
                                                                <ul class="pagination mb-0">
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"
                                                                            aria-label="Previous">
                                                                            <span aria-hidden="true">&laquo;</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">1</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">2</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">3</a>
                                                                    </li>
                                                                    <li class="page-item active"><a class="page-link"
                                                                            href="#">4</a></li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#" aria-label="Next">
                                                                            <span aria-hidden="true">&raquo;</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 justify-content-center form-actions d-flex">
                                    <button type="button" class="btn btn-outline-dark rounded mx-2">Back</button>
                                    <button type="submit" class="btn btn-primary rounded mx-2">Save & Exit</button>
                                    {{-- <button type="submit" class="btn btn-primary rounded">Next</button> --}}
                                </div>
                            </form>
                        </div>
                        {{-- END: User Access --}}
                    </div>
                    {{-- END: Tab Access --}}
                </div>
            </div>
            {{-- Card Body --}}
            {{-- END: Steps --}}
        </div>
    </div>
    @include('panels.user-access.accommodation-service-access')
    @include('panels.user-access.companies-customer-acess')
    @include('panels.user-access.teams-provider-access')
</div>

@push('scripts')

<script>

    Livewire.on('updateVal', (attrName, val) => {

        // Call the updateVal function with the attribute name and value
       
        @this.call('updateVal', attrName, val);
    });

</script>
<script src="/tenant-resources/js/form-functions.js"></script>
@endpush
