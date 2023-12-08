<div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress">
    <div class="row">
        <div class="row">

            <div class="col-lg-12 d-flex gap-2">

                <div class="col-md-8 col-12">
                    <div class="mb-4">
                        <label class="form-label" for="first-name-column">
                            Document Title</label>
                        <input wire:model.defer="document.document_title" type="text" id="first-name-column"
                            class="form-control" placeholder="Document Title" name="document-column" />
                        @error('document.document_title')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                </div>
                {{-- Upload File --}}
                <div class="col-md-6 col-12 ps-lg-2">
                    <div class="row d-flex">
                        <div class="col-lg-12 d-flex text-center">
                            <label class="form-label" for="first-name-column">
                                Upload File</label>
                            {{-- <p class="mt-5 fw-medium">
                            Upload File
                            </p> --}}
                        </div>
                        {{-- <div class="col-lg-3 d-flex text-center">
                        <a href="#" class="btn btn-outline-primary d-block px-2 pb-0">
                            <svg class="mb-2" width="40" height="36" viewBox="0 0 40 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.35 23.4921L9.702 35.2381H33.35L40 23.4921H16.35ZM11.73 2.54302L0 23.3237L6.744 35.2342L18.476 14.4535L11.73 2.54302ZM38.89 21.5344L26.698 0H13.208L25.384 21.5344H38.89Z"
                                    fill="url(#paint0_linear_2957_105057)" />
                                <defs>
                                    <linearGradient id="paint0_linear_2957_105057" x1="20" y1="0"
                                        x2="36.0479" y2="0" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#213969" />
                                        <stop offset="1" stop-color="#204387" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <p class="text-primary mb-0 fw-medium">
                                Attach from Company Drive
                            </p>
                        </a>
                    </div>
                    <div class="text-center col-lg-3 d-flex">
                        <a href="#" class="btn btn-outline-primary d-block px-2 pb-0">
                            <svg class="mb-2" width="40" height="36" viewBox="0 0 40 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.35 23.4921L9.702 35.2381H33.35L40 23.4921H16.35ZM11.73 2.54302L0 23.3237L6.744 35.2342L18.476 14.4535L11.73 2.54302ZM38.89 21.5344L26.698 0H13.208L25.384 21.5344H38.89Z"
                                    fill="url(#paint0_linear_2957_105057)" />
                                <defs>
                                    <linearGradient id="paint0_linear_2957_105057" x1="20" y1="0"
                                        x2="36.0479" y2="0" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#213969" />
                                        <stop offset="1" stop-color="#204387" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <p class="text-primary mb-0 fw-medium">
                                Attach from Google Drive
                            </p>
                        </a>
                    </div> --}}
                        <div class="text-center col-lg-3 d-flex ">

                            <div class="btn btn-outline-primary d-block px-2 pb-0">
                                <label for="file">
                                    <svg class="mb-2" width="35" height="35" viewBox="0 0 35 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M32.0833 1.1498e-06H25.5208C25.3274 1.1498e-06 25.142 0.076824 25.0052 0.213569C24.8685 0.350315 24.7917 0.535781 24.7917 0.729168V8.75C24.7917 9.13678 24.638 9.50771 24.3645 9.7812C24.091 10.0547 23.7201 10.2083 23.3333 10.2083H11.7214C11.3429 10.2143 10.9763 10.0765 10.6955 9.82281C10.4147 9.56906 10.2406 9.21824 10.2083 8.84115C10.1959 8.64211 10.2244 8.44263 10.292 8.25504C10.3597 8.06745 10.4652 7.89573 10.6019 7.75051C10.7385 7.60528 10.9036 7.48964 11.0867 7.41072C11.2699 7.3318 11.4672 7.29128 11.6667 7.29167H21.875V0.729168C21.875 0.535781 21.7982 0.350315 21.6614 0.213569C21.5247 0.076824 21.3392 1.1498e-06 21.1458 1.1498e-06H10.8099C10.427 -0.000339916 10.0478 0.0752001 9.69421 0.222257C9.34065 0.369313 9.01973 0.584972 8.75 0.856772L0.856772 8.75C0.584972 9.01973 0.369313 9.34065 0.222257 9.69421C0.0752001 10.0478 -0.000339916 10.427 1.1498e-06 10.8099V32.0833C1.1498e-06 32.8569 0.307292 33.5987 0.854273 34.1457C1.40125 34.6927 2.14312 35 2.91667 35H32.0833C32.8569 35 33.5987 34.6927 34.1457 34.1457C34.6927 33.5987 35 32.8569 35 32.0833V2.91667C35 2.14312 34.6927 1.40125 34.1457 0.854273C33.5987 0.307292 32.8569 1.1498e-06 32.0833 1.1498e-06ZM17.5 26.25C16.4905 26.25 15.5037 25.9506 14.6643 25.3898C13.8249 24.8289 13.1707 24.0318 12.7844 23.0991C12.398 22.1665 12.297 21.1402 12.4939 20.1501C12.6909 19.16 13.177 18.2505 13.8908 17.5366C14.6046 16.8228 15.5141 16.3367 16.5042 16.1397C17.4943 15.9428 18.5206 16.0439 19.4533 16.4302C20.3859 16.8165 21.1831 17.4707 21.744 18.3101C22.3048 19.1495 22.6042 20.1363 22.6042 21.1458C22.5994 22.4981 22.0601 23.7935 21.1039 24.7497C20.1477 25.7059 18.8522 26.2452 17.5 26.25Z"
                                            fill="url(#paint0_linear_2957_105064)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_2957_105064" x1="17.5" y1="0"
                                                x2="31.5419" y2="0" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#213969" />
                                                <stop offset="1" stop-color="#204387" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <p class="text-primary mb-0 fw-medium"> Attach from Device </p>
                                </label>
                                <input style=" opacity: 0; z-index: -1; position: absolute;" id="file"
                                    class="" wire:model="file" type="file">



                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div x-show="isUploading">
                                <progress max="100" x-bind:value="progress"></progress>
                            </div>
                            <div class="">
                                @if ($file)
                                    {{ $this->file->getClientOriginalName() }}
                                @endif
                            </div>
                        </div>
                        @error('file')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>
                </div>


            </div>
            <div class="{{ $isProviderPanel ? 'hidden' : '' }}">
                <div class="col-lg-8 gap-2 d-flex form-check">

                    <input wire:model.defer="document.permissions.attach_to_provider_confirmation" disabled
                        class="form-check-input" type="checkbox">
                    <p>Attach to Provider Confirmation <small>(coming soon)</small> </p>

                </div>
                <div class="col-lg-8 gap-2 d-flex form-check">

                    <input class="form-check-input" type="checkbox" disabled
                        wire:model.defer="document.permissions.attach_to_customer_confirmation">
                    <p>Attach to Customer Confirmation <small>(coming soon)</small></p>

                </div>
                <div class="col-lg-8 d-flex">

                    <h3>Permissions </h3>
                    <p>(who can see that uploaded documents)</p>

                </div>
                <div class="row px-5">

                    <div class="col-lg-3 gap-2 d-flex form-check">

                        <input wire:click="selectAllUsers" class="form-check-input" type="checkbox"
                            wire:model.defer="selectAll">

                        <p>All Users</p>

                    </div>
                    <div class="col-lg-3 gap-2 d-flex form-check">

                        <input class="form-check-input" type="checkbox" wire:model.defer="permissions" value="2">

                        <p>Service Providers</p>

                    </div>
                    <div class="col-lg-3 gap-2 d-flex form-check">
                        <input class="form-check-input" type="checkbox" wire:click="selectAllCustomers" wire:model.defer="permissions" value="4">

                        <p>Customers</p>
                    </div>
                    <div class="col-lg-3 gap-2 d-flex px-4 form-check">
                        <input class="form-check-input" type="checkbox" wire:model.defer="permissions" value="6">

                        <p>Requester</p>
                    </div>
                    <div class="col-lg-3 gap-2 d-flex px-4 form-check">
                        <input class="form-check-input" type="checkbox" wire:model.defer="permissions" value="5">

                        <p>Supervisor</p>
                    </div>
                    <div class="col-lg-3 gap-2 d-flex px-4 form-check">
                        <input class="form-check-input" type="checkbox" wire:model.defer="permissions" value="9">

                        <p>Billing Manager</p>
                    </div>
                    <div class="col-lg-3 gap-2 d-flex px-4 form-check">
                        <input class="form-check-input" type="checkbox" wire:model.defer="permissions" value="7">

                        <p>Service Consumers</p>
                    </div>
                    <div class="col-lg-3 gap-2 d-flex px-4 form-check">
                        <input class="form-check-input" type="checkbox" wire:model.defer="permissions"
                            value="8">

                        <p>Participants</p>
                    </div>
                </div>
                <div class="col-lg-8 gap-2 d-flex form-check">


                    <input class="form-check-input" wire:model.defe="request_from_user" type="checkbox">
                    <label class="form-label">
                        <h3>Request from User</h3>
                    </label>
                </div>

                <div class="col-md-8 col-12  {{ $request_from_user ? '' : 'hidden' }}">

                    <div class="row">
                        <div class="col-lg-12 mb-3 ">

                            <label class="form-label">Who would you like to request this information from?</label>
                            <div class="col-lg-8">
                                <select class="form-select">
                                    <option>Select</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <label class="form-label">When should they first be notified?</label>
                            <div class="col-lg-8 d-flex">
                                <div class="col-lg-2 d-flex gap-1">
                                    <a href="">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </a>
                                    <p>Now</p>
                                </div>
                                <div class="col-lg-2 d-flex gap-1">
                                    <a href="">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </a>
                                    <p>Later</p>
                                </div>

                            </div>
                            <p>Notify before the service start-time</p>
                            <div class="col-lg-2 d-flex gap-1 mb-5 ">
                                <input class="form-control text-center" type="text" placeholder="2">
                                <p class="mt-3">Day(s)</p>
                            </div>
                        </div>
                        <div class="d-md-flex align-items-center mb-4 gap-3 gap-md-0">
                            <div class="form-check form-switch form-switch-column mb-lg-0">
                                <input class="form-check-input" wire:model="notification.repeat_notification"
                                    type="checkbox" role="switch" id="">
                            </div>
                            <h6 class="mb-lg-0">Repeat Notification</h6>
                        </div>
                        <div class="{{ $notification['repeat_notification'] ? '' : 'hidden' }}">
                            <div class="col-lg-12">
                                <label class="form-label">When should they first be notified?</label>
                                <div class="col-lg-8 d-flex gap-4">
                                    <div class="col-lg-2 d-flex gap-2">
                                        <a href="">
                                            <input class="form-check-input" type="radio" value="">
                                        </a>
                                        <p>Time(s)</p>
                                    </div>
                                    <div class="col-lg-2 d-flex gap-2">
                                        <a href="">
                                            <input class="form-check-input" type="radio" value="">
                                        </a>
                                        <p>Day(s)</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-2 gap-1 mb-4">
                                <input class="form-control text-center" type="text" id="before-service-start-time"
                                    placeholder="10">
                                <label class="form-label form-label-sm text-sm" for="before-service-start-time">Before
                                    the
                                    service
                                    start-time</label>
                            </div>
                        </div>
                        <div class="col-lg-12 gap-1">
                            <label class="form-label" for="message-to-requestee">Message to Requestee</label>
                            <textarea class="form-control" cols="30" rows="5" id="message-to-requestee"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- notes --}}
        <div class="col-md-10 col-12">
            <div class="mb-4">
                <label class="form-label" for="first-name-column">Notes</label>
                <textarea wire:model.defer="document.description" class="form-control" name="" id="" cols="35"
                    rows="3"></textarea>
                @error('document.description')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 form-actions mb-2">
            <div class="col-md-1 col-12">
                <button type="button" wire:click="initFields" class="btn rounded w-100 btn-outline-dark"
                    x-on:click="addDocuments = !addDocuments">Cancel</button>
            </div>
            <div class="col-md-1 col-12">
                <button wire:click.prevent="save" type="button" wire:loading.attr="disabled" wire:target="file"
                    x-on:close-add-documents.window="addDocuments = !addDocuments"class="btn rounded w-100 btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
