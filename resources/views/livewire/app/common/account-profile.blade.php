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
                                            <label for="cropfile" class="form-label visually-hidden">Upload Profile Picture</label>
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
                                        placeholder="Enter First Name" required aria-required="true"  wire:model.defer="user.first_name"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="last_name">
                                        Last Name <span class="mandatory" aria-hidden="true">*</span>
                                    </label>
                                    <input type="text" id="last_name" class="form-control" name="last_name"
                                        placeholder="Enter Last Name" required aria-required="true"   wire:model.defer="user.last_name"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-4">
                                    <label class="form-label" for="pronouns">Pronouns</label>
                                    <input type="text" id="pronouns" class="form-control"
                                        placeholder="Enter Pronouns" name="pronouns"  wire:model.defer="userdetail.title"/>
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
                                            placeholder="Enter Position" name="position" wire:model.defer="userdetail.user_position"/>
                                    </div>
                                </div>
                            </div>
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
                                        name="email"   wire:model.defer="user.email"/>
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
                                            Work Address Line 1
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
                                        aria-required="true"  wire:model.defer="userdetail.address_line2"/>
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
                            <button type="submit" class="btn btn-primary rounded mx-2" wire:click.prevent="save" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">Save Profile</button>

                        </div>
                    </form>
                </div>
                {{-- Card Body --}}
                {{-- END: Steps --}}
            </div>
        </div>
    </div>


</div>
@push('scripts')
<script>
    function updateVal(attrName,val){
    console.log(attrName+'called for'+val);
    if(val!=''){
        Livewire.emit('updateVal', attrName, val);
    }


    }
</script>
<script>

    Livewire.on('updateVal', (attrName, val) => {

        // Call the updateVal function with the attribute name and value

        @this.call('updateVal', attrName, val);
    });

</script>

@endpush
