<div class="">
    <div class="row mb-lg-4">
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img wire:ignore
                        src="{{ $invoice->company->company_logo ? $invoice->company->company_logo : '/tenant-resources/images/portrait/small/image.png' }}"
                        width="130" height="130" class="rounded-circle" alt="Company Image">
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="mb-2">
                        <label class="form-label mb-0">Company Name:</label>
                        <div class="text-xs" wire:ignore><small>{{ $invoice->company->name }}</small></div>
                    </div>
                    {{-- <div>
                        <label class="form-label mb-0">Email:</label>
                        <div><a class="text-xs text-dark"><small>examplecompany@gmail.com</small></a></div>
                    </div> --}}
                    <div class="mt-2">
                        <label class="form-label mb-0">Billing Manager:</label>
                        <div><a class="text-xs text-dark"
                                wire:ignore><small>{{ $invoice->billing_manager ? $invoice->billing_manager->name : 'N/A' }}</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 align-self-center">
            <div class="mb-2">
                <label class="form-label mb-0">Phone Number:</label>
                <div class="text-xs" wire:ignore>
                    <small>{{ $invoice->company->phones->count() ? $invoice->company->phones->first()->phone_number : 'N/A' }}</small>
                </div>
            </div>
            <div>
                <label class="form-label mb-0">Address:</label>
                <div wire:ignore><a class="text-xs text-dark"><small>
                            @if (isset($invoice->billingAddress))
                                {{ $invoice->billingAddress['address_line1'] . ', ' . $invoice->billingAddress['address_line2'] . ',' . $invoice->billingAddress['city'] . ', ' . $invoice->billingAddress['state'] . ', ' . $invoice->billingAddress['country'] }}
                            @else
                                N/A
                            @endif
                        </small></a></div>
            </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 align-self-center">
            <div class="d-grid grid-cols-2 gap-2">
                <div class="fw-semibold text-sm">Total Paid:</div>
                <div class="text-sm">{{ numberFormat($invoice->totalPaid()) }}</div>
                <div class="fw-semibold text-sm">Pending Payment:</div>
                <div class="text-sm">{{ numberFormat($invoice->outstanding_amount) }}</div>
                <div class="fw-semibold text-sm">Overdue Payment: <small>(coming soon)</small></div>
                <div class="text-sm">$500</div>
                <div class="fw-semibold text-sm">Payment Status:</div>

                <div class="text-sm {{ $status[$invoice->invoice_status]['class'] }}">
                    {{ $status[$invoice->invoice_status]['title'] }}
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button class="btn btn-primary rounded">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                    fill="white" />
            </svg>
            <span class="mx-2">Edit Invoice
       
            
            </span>
             <small>(coming soon)</small>
            </button>

    </div>
    <!-- Hoverable rows start -->
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="table-responsive border mb-4">
                <table id="" class="table table-fs-md table-hover" aria-label="">
                    <thead>
                        <th scope="col" width="25%" class="">Booking ID</th>
                        <th scope="col">Accommodation</th>
                        <th>No. of Providers</th>
                        <th scope="col">Total Additional Charges</th>
                        <th scope="col" class="">Total Service<br>Rate <small>(coming soon)</small></th>
                        <th scope="col">Booking Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice->bookings as $booking)
                            <tr role="row" class="odd">
                                <td>
                                    <div class="fw-semibold">{{ $booking->booking_number }}</div>
                                    <div>
                                        {{ $booking->booking_start_at ? date_format(date_create($booking->booking_start_at), 'd/m/Y') : '' }}
                                        <div>
                                            {{ $booking->booking_start_at ? date_format(date_create($booking->booking_start_at), 'h:i A ') : '' }}
                                            to
                                            {{ $booking->booking_start_at ? date_format(date_create($booking->booking_end_at), 'h:i A') : '' }}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm">
                                        {{ $booking->services->count() ? $booking->services->first()->accommodation->name ?? '' : '' }}
                                    </div>
                                    <div class="text-sm">
                                        Service:
                                        {{ $booking->services->count() ? $booking->services->first()->name : 'N/A' }}
                                    </div>
                                    <div class="text-sm">
                                        Specialization: Closed-Captioning
                                    </div>
                                </td>
                                <td> {{ $booking->booking_providers ? $booking->booking_providers->count() : 'N/A' }}
                                </td>
                                <td>
                                    @if ($booking->payment && ($booking->payment->additional_label_provider || $booking->payment->additional_label))
                                        <div class="mb-2">
                                            {{ numberFormat($booking->payment->additional_charge + $booking->payment->additional_charge_provider) }}
                                        </div>
                                        <div class="text-primary mb-2"><small>Additional Charges: </small></div>
                                        @if ($booking->payment->additional_label)
                                            <div class="mb-2">{{ $booking->payment->additional_label }}:
                                                {{ numberFormat($booking->payment->additional_charge) }} </div>
                                        @endif
                                        @if ($booking->payment->additional_label_provider)
                                            <div class="mb-2">{{ $booking->payment->additional_label_provider }}:
                                                {{ numberFormat($booking->payment->additional_charge_provider) }}
                                            </div>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>
                                    <div class="mb-2">Duration: 5 Hours 5 mins</div>
                                    {{-- <div class="mb-2">Avg Rate: $10.00</div>
                                    <div class="mb-2">Total Rate: $100.00</div> --}}
                                    @if ($booking->payment && $booking->payment->discounted_amount && $booking->payment->discounted_amount > 0)
                                        <div class="text-primary mb-2">Discount:  {{ numberFormat($booking->payment->discounted_amount) }} </div>
                                    @endif
                                    <div class="mb-2">Grand Total:  {{ numberFormat($booking->getInvoicePrice()) }}</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        {{ numberFormat($booking->getInvoicePrice()) }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Total -->
    <div class="bg-muted py-2 mb-4">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="d-flex justify-content-between">
                    <div class="fw-bold text-sm">Total</div>
                    <div class="fw-bold text-sm text-lg-end">{{ numberFormat($invoice->total_price) }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 form-actions">
        <button class="btn btn-primary rounded">Resend Invoice</button>
        <button class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#payInvoice"
            wire:click="$emit('payInvoiceId',{{ $invoice->id }})">Record
            Payment</button>
        <button class="btn btn-primary rounded" wire:click="$emit('revertInvoice',{{ $invoice->id }})"
            x-on:close-invoice-details.window="invoiceDetailsPanel = false" data-bs-toggle="modal"
            data-bs-target="#revertBackModal">Revert
            Invoice</button>
    </div>
</div>
