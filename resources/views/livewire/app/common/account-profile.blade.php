<div>
    <div>
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">Profile</h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        <svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23">
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
                                    <span class="text-secondary">Account Profile</span>
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
                    <!-- Tab panes -->
                    <form class="form">
                        {{-- updated by shanila to add csrf--}}
                        @csrf
                        {{-- update ended by shanila --}}
                        <div class="row between-section-segment-spacing">
                            <div class="col-12 text-center">
                                <div class="d-inline-block position-relative">
                                    <img src="/tenant/images/portrait/small/avatar-s-9.jpg"
                                        class="img-fluid rounded-circle"
                                        alt="Profile Image of Admin User" />
                                    <!-- <div>
                                            <input class="position-absolute form-control" type="file" />
                                        </div> -->
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
                        <div class="row between-section-segment-spacing">
                            <div class="col-lg-12">
                                <div class="d-lg-flex justify-content-between mb-4">
                                    <h2 class="mb-lg-0">My Profile</h2>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="userProfile" checked aria-label="User Profile Toggle">
                                        <label class="form-check-label" for="userProfile">Active</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="first_name">
                                        First Name <span class="mandatory" aria-hidden="true">*</span>
                                    </label>
                                    <input type="text" id="first_name" class="form-control" name="first_name"
                                        placeholder="Enter First Name" required aria-required="true"  wire:model="user.first_name"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="last_name">
                                        Last Name <span class="mandatory" aria-hidden="true">*</span>
                                    </label>
                                    <input type="text" id="last_name" class="form-control" name="last_name"
                                        placeholder="Enter Last Name" required aria-required="true"  wire:model="user.last_name"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="pronouns">Pronouns</label>
                                    <input type="text" id="pronouns" class="form-control"
                                        placeholder="Enter Pronouns" name="pronouns" />
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
                            <div class="row inner-section-segment-spacing">
                                <div class="col-md-6 col-12">
                                    <div>
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
                                <div class="col-md-6 col-12">
                                    <div>
                                        <label class="form-label" for="position">Position</label>
                                        <input type="text" id="position" class="form-control"
                                            placeholder="Enter Position" name="position" />
                                    </div>
                                </div>
                            </div>
                            {{-- updated by shanila to replace checkboxes with multidropdowns --}}
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                            <label class="form-label">Roles and Permissions</label>
                                            {!! App\Helpers\SetupHelper::createDropDown('SystemRole', 'system_role_id',
                                                    'system_role_name', 'status', 1, 'system_role_name', true, 'roles',
                                             '','roles') !!}
                                </div>
                              </div>
                              {{-- updated completed by shanila --}}
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="email">Email<span class="mandatory"
                                            aria-hidden="true">*</span></label>
                                    <input type="text" id="email" class="form-control" placeholder="Enter Email"
                                        name="email"  wire:model="user.email"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="phone_number">
                                        Phone Number
                                    </label>
                                    <input type="text" id="phone_number" class="form-control"
                                        name="phone_number" placeholder="Enter Phone Number" required
                                        aria-required="true" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="work_address_line_1">
                                        Work Address Line 1
                                    </label>
                                    <input type="text" id="work_address_line_1" class="form-control"
                                        name="work_address_line_1" placeholder="Enter Address 1" required
                                        aria-required="true" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="work_address_line_2">
                                        Work Address Line 2
                                    </label>
                                    <input type="text" id="work_address_line_2" class="form-control"
                                        name="work_address_line_2" placeholder="Enter Address 2" required
                                        aria-required="true" />
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
                                    <select class="form-select" id="state">
                                        <option value="Al">Select State/Province</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="city-column">City</label>
                                    <select class="form-select" id="city-column">
                                        <option>Select City</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="zip_code_postal_code">Zip Code / Postal Code</label>
                                    <input type="text" id="zip_code_postal_code" class="form-control"
                                        name="zip_code_postal_code" placeholder="Enter Zip Code / Postal Code"
                                        required aria-required="true" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="set_time_zone">Set Time Zone</label>
                                    {!! $setupValues['timezones']['rendered'] !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="tags">
                                        Tags
                                    </label>
                                    <textarea class="form-control" placeholder="" name="tags"
                                        id="tags"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 justify-content-center form-actions d-flex">
                            <button type="button" class="btn btn-outline-dark rounded mx-2"
                                wire:click.prevent="showList">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary rounded mx-2">Save & Exit</button>
                            <button type="submit" class="btn btn-primary rounded">Next</button>
                        </div>
                    </form>
                </div>
                {{-- Card Body --}}
                {{-- END: Steps --}}
            </div>
        </div>
    </div>
   
    
</div>