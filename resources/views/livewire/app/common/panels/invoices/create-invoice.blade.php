<div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress">
    <div class="row between-section-segment-spacing">
        <div class="row mt-4">
            <h3>Billing Manager</h3>
        </div>
        <div class="col-lg-12 ">
            @if ($managers->count())

                <table class="table table-hover border">
                    <thead>
                        <th>#</th>
                        <th>Billing Manager</th>
                        <th>Billing Address</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($managers as $index => $manager)
                            <tr class="odd {{ $manager->id == $invoice['billing_manager_id'] ? 'selected' : '' }}"
                                wire:click="$set('invoice.billing_manager_id',{{ $manager->id }})">
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="{{ $manager->userdetail->profile_pic ? $manager->userdetail->profile_pic : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                                class="img-fluid rounded-circle" alt="{{ $manager->name }}">
                                        </div>
                                        <div class="col-md-10">
                                            <p class="fw-semibold">
                                                {{ $manager->name }}
                                            </p>
                                            <small class="text-secondary">
                                                {{ $manager->email }}
                                            </small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if (count($manager->billing_addresses))
                                        @foreach ($manager->billing_addresses as $address)
                                            <p class="my-2">
                                                {{ $address['address_name'] }}:
                                                {{ $address['address_line1'] . ', ' . $address['address_line2'] . ',' . $address['city'] . ', ' . $address['state'] . ', ' . $address['country'] }}
                                            </p>
                                        @endforeach
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <svg class="{{ $manager->id == $invoice['billing_manager_id'] ? '' : 'd-none' }}"
                                        width="24" height="19" viewBox="0 0 24 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            @else
                <small>No Billing Managers assigned for the selected bookings</small>
            @endif
            
                @error('invoice.billing_manager_id')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                @enderror
        </div>
    </div>
    <div class="col-lg-12 mb-4">
        <div class="row">
            <div class="d-lg-flex justify-content-between align-items-center ">
                <div>
                    <h3>Address</h3>
                </div>
                {{-- <div class="mb-2">
                        <button type="button" class="btn btn-primary rounded gap-2" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                            <svg  width="20" height="21" viewBox="0 0 20 21">
                                <use xlink:href="/css/common-icons.svg#plus"></use>
                            </svg>
                            <span>Add New Address</span>
                        </button>
                    </div> --}}
            </div>
            <div class="col-lg-12 mb-4">
                @if (count($addresses))

                    <table class="table table-hover border">
                        <thead>
                            <th>#</th>
                            <th>Address</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($addresses as $index => $address)
                                <tr class="odd {{ $address['id'] == $invoice['billing_address_id'] ? 'selected' : '' }}"
                                    wire:click="$set('invoice.billing_address_id',{{ $address['id'] }})">
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <p>
                                            {{ $address['address_name'] }}:
                                            {{ $address['address_line1'] . ', ' . $address['address_line2'] . ',' . $address['city'] . ', ' . $address['state'] . ', ' . $address['country'] }}
                                        </p>
                                    </td>
                                    <td class="align-middle">
                                        <svg class="{{ $address['id'] == $invoice['billing_address_id'] ? '' : 'd-none' }}"
                                            width="24" height="19" viewBox="0 0 24 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white"
                                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr class="even selected">
                                <td>2</td>
                                <td>
                                    <p>
                                        Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
                                    </p>
                                </td>
                                <td class="align-middle">
                                    <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td>3</td>
                                <td>
                                    <p>
                                        Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
                                    </p>
                                </td>
                                <td class="align-middle">
                                    <svg class="d-none" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                @else
                    <small>No billing address available for this company.</small>
                @endif
                
                @error('invoice.billing_address_id')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-12">
            <label class="form-label" for="invoice-number">
                Invoice Number
            </label>
            <input type="text" id="invoice-number" wire:model.defer="invoice.invoice_number" class="form-control"
                name="invoice-number" placeholder="DOR22-003" />
                
                @error('invoice.invoice_number')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                @enderror
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-12">
            <label class="form-label" for="po-number">
                PO Number
            </label>
            <input type="text" id="po-number" class="form-control" name="po-number"
                wire:model.defer="invoice.po_number" placeholder="Enter PO Number" />
            <div class="mt-2">
                <input class="form-check-input" disabled type="checkbox" value="apply-to-future-invoices"
                    id="apply-to-future-invoices">
                <label class="form-check-label" for="apply-to-future-invoices">
                    Apply to Future Invoices
                    <small>(coming soon)</small>

                </label>
            </div>
            
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-12">
            <label class="form-label" for="due-date">
                Due Date
            </label>
            <div class="d-flex align-items-center w-100 mb-2">
                <div class="position-relative flex-grow-1">
                    <input type="text" id="invoice_due_date" class="form-control js-single-date"
                        wire:model.defer="invoice.invoice_due_date" placeholder="MM/DD/YYYY" aria-describedby="">
                    <svg aria-label="date" class="icon-date" width="20" height="21" viewBox="0 0 20 21"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z"
                            fill="black" />
                    </svg>
                    @error('invoice.invoice_due_date')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                @enderror
                </div>
                
            </div>

            <div class="col-12 d-flex flex-column flex-md-row gap-2">

                <button type="btn" wire:click="incDate(15)" class="btn btn-sm {{$days == 15 ? 'btn-primary' :''}} btn-outline-primary mx-2">
                    Net 15
                </button>
                <button type="btn" wire:click="incDate(30)" class="btn btn-sm {{$days == 30 ? 'btn-primary' :''}} btn-outline-primary mx-2">
                    Net 30
                </button>
                <button type="btn" wire:click="incDate(45)" class="btn btn-sm btn-outline-primary mx-2 {{$days == 45 ? 'btn-primary' :''}}">
                    Net 45
                </button>
                <button type="btn" wire:click="incDate(60)" class="btn btn-sm btn-outline-primary mx-2 {{$days == 60 ? 'btn-primary' :''}}">
                    Net 60
                </button>
            </div>
        </div>
    </div>


    {{-- Upload File --}}
    <div class="col-md-6 col-12 ps-lg-2">
        <div class="row d-flex">
            <div class="col-lg-12 d-flex text-center">
                <label class="form-label" for="first-name-column">
                    Upload File</label>
            </div>
            <div class="text-center col-lg-3 d-flex ">
    
                <div class="btn btn-outline-primary d-block px-2 pb-0">
                    <label for="file">
                        <svg class="mb-2" width="35" height="35" viewBox="0 0 35 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32.0833 1.1498e-06H25.5208C25.3274 1.1498e-06 25.142 0.076824 25.0052 0.213569C24.8685 0.350315 24.7917 0.535781 24.7917 0.729168V8.75C24.7917 9.13678 24.638 9.50771 24.3645 9.7812C24.091 10.0547 23.7201 10.2083 23.3333 10.2083H11.7214C11.3429 10.2143 10.9763 10.0765 10.6955 9.82281C10.4147 9.56906 10.2406 9.21824 10.2083 8.84115C10.1959 8.64211 10.2244 8.44263 10.292 8.25504C10.3597 8.06745 10.4652 7.89573 10.6019 7.75051C10.7385 7.60528 10.9036 7.48964 11.0867 7.41072C11.2699 7.3318 11.4672 7.29128 11.6667 7.29167H21.875V0.729168C21.875 0.535781 21.7982 0.350315 21.6614 0.213569C21.5247 0.076824 21.3392 1.1498e-06 21.1458 1.1498e-06H10.8099C10.427 -0.000339916 10.0478 0.0752001 9.69421 0.222257C9.34065 0.369313 9.01973 0.584972 8.75 0.856772L0.856772 8.75C0.584972 9.01973 0.369313 9.34065 0.222257 9.69421C0.0752001 10.0478 -0.000339916 10.427 1.1498e-06 10.8099V32.0833C1.1498e-06 32.8569 0.307292 33.5987 0.854273 34.1457C1.40125 34.6927 2.14312 35 2.91667 35H32.0833C32.8569 35 33.5987 34.6927 34.1457 34.1457C34.6927 33.5987 35 32.8569 35 32.0833V2.91667C35 2.14312 34.6927 1.40125 34.1457 0.854273C33.5987 0.307292 32.8569 1.1498e-06 32.0833 1.1498e-06ZM17.5 26.25C16.4905 26.25 15.5037 25.9506 14.6643 25.3898C13.8249 24.8289 13.1707 24.0318 12.7844 23.0991C12.398 22.1665 12.297 21.1402 12.4939 20.1501C12.6909 19.16 13.177 18.2505 13.8908 17.5366C14.6046 16.8228 15.5141 16.3367 16.5042 16.1397C17.4943 15.9428 18.5206 16.0439 19.4533 16.4302C20.3859 16.8165 21.1831 17.4707 21.744 18.3101C22.3048 19.1495 22.6042 20.1363 22.6042 21.1458C22.5994 22.4981 22.0601 23.7935 21.1039 24.7497C20.1477 25.7059 18.8522 26.2452 17.5 26.25Z"
                                fill="url(#paint0_linear_2957_105064)" />
                            <defs>
                                <linearGradient id="paint0_linear_2957_105064" x1="17.5" y1="0" x2="31.5419" y2="0"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#213969" />
                                    <stop offset="1" stop-color="#204387" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <p class="text-primary mb-0 fw-medium"> Attach from Device </p>
                    </label>
                    <input style=" opacity: 0; z-index: -1; position: absolute;" id="file" class="" wire:model="file" type="file">  
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


    {{-- <div class="row mb-3">
        <small>(coming soon)</small>

        <div class="col-md-3">

            <label class="form-label" for="upload-file">
                Attach Document
            </label>
            <input disabled class="form-control" type="file" id="upload-file">
        </div>
    </div>
    <div class="col-12 d-flex flex-column flex-md-row gap-2 mb-4">
        <div>
            <button class="btn btn-outline-primary mx-2">Attachment 1</button>
        </div>
        <div>
            <button class="btn btn-outline-primary mx-2">Attachment 2</button>
        </div>
        <div>
            <button class="btn btn-outline-primary mx-2">Attachment 3</button>
        </div>
    </div> --}}
    <div>
        <div class="row between-section-segment-spacing">
            <div class="mt-2">
                <input wire:model="selected_Record_type" class="form-check-input" type="radio" value="1" name="record-type" 
                    id="reimbursement-records">
                <label class="form-check-label form-label" for="reimbursement-records">
                    Reimbursement Records
                    {{-- <small>(coming soon)</small> --}}

                </label>
            </div>
            <div class="mt-2">
                <input wire:model="selected_Record_type" class="form-check-input" type="radio" value="2" name="record-type" 
                    id="provider-timesheet">
                <label class="form-check-label form-label" for="provider-timesheet">
                    Provider Timesheet(s)
                    {{-- <small>(coming soon)</small> --}}

                </label>
            </div>
        </div>
        <div class="justify-content-center d-flex mb-2">
            <div class="form-check mx-auto">
                <input class="form-check-input" type="checkbox" wire:model.defer="exclude_notif"
                    id="Exclude-Notification">
                <label class="form-check-label" for="Exclude-Notification">
                    Exclude Notification
                </label>
            </div>
        </div>
        <div class="col-12 form-actions">
            <button type="button"  x-on:click="createInvoices = !createInvoices" class="btn btn-outline-primary rounded">
                Cancel
            </button>
            <button type="submit" class="btn btn-primary rounded">
                Preview Invoices
            </button>
            <button type="submit"  x-on:close-create-invoice.window="createInvoices = !createInvoices;invoiceGeneratorbookings=!invoiceGeneratorbookings" class="btn btn-primary rounded" wire:click='createInvoice'>
                Create
            </button>
        </div>
    </div>
    {{-- implement in  phase 2
    @include('modals.common.add-address') --}}
</div>
