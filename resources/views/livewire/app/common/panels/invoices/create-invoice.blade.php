<div>
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

    <div class="row mb-3">
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
    </div>
    <div>
        <div class="row between-section-segment-spacing">
            <div class="mt-2">
                <input disabled class="form-check-input" type="checkbox" value="reimbursement-records"
                    id="reimbursement-records">
                <label class="form-check-label form-label" for="reimbursement-records">
                    Reimbursement Records
                    <small>(coming soon)</small>

                </label>
            </div>
            <div class="mt-2">
                <input disabled class="form-check-input" type="checkbox" value="provider-timesheet"
                    id="provider-timesheet">
                <label class="form-check-label form-label" for="provider-timesheet">
                    Provider Timesheet(s)
                    <small>(coming soon)</small>

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
