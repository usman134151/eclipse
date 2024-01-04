<div class="">
    <form wire:submit.prevent="submitInvoice">
        @csrf
        <div class="row mb-4 mt-3">
            <div class="col-md-5">
                <div><span class="fw-semibold">Invoice ID:</span><span class="mx-1">{{ $data['invoice_number'] }}</span>
                </div>
                <div class="d-inline-flex">
                    <div><label class="form-label form-label-sm" for="provider-inovice-id">Provider Invoice Id: </label>
                    </div>
                    <div class="mx-2"><input type="text" id="provider-inovice-id"
                            wire:model="data.provider_invoice_number"
                            class="form-control form-control-sm w-50 rounded-0" name="" placeholder="PRO-123" />
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div><span class="fw-semibold"> Submission Date:</span> {{ formatDate(now()) }}</div>
                <div class="ms-5"><span class="fw-semibold ms-3">Due Date:</span><span
                        class="mx-1">{{ formatDate($data['invoice_due_date']) }} </span>
                </div>
            </div>
            <div class="col-md-3">
                <span class="fw-semibold"> Invoice Total:</span> {{ numberFormat($data['total']) }}
            </div>
        </div>
        <div class="table-responsive">
            <table id="remittances" class="table table-hover" aria-label="Remittances">
                <thead>
                    <tr role="row">
                        <th scope="col">Booking ID</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Service</th>
                        <th scope="col">Service type</th>
                        <th scope="col">Total PAY</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr role="row" class="odd">
                            <td x-on:click="assignmentDetails = true">
                                <div>{{ $booking->booking_number }}</div>
                            </td>
                            <td>
                                <div wire:ignore>{{ formatDate($booking->booking_start_at) }}</div>
                                <div wire:ignore class="text-sm">
                                    {{ date_format(date_create($booking->booking_start_at), 'h:i A') }}
                                    To
                                    {{ date_format(date_create($booking->booking_end_at), 'h:i A') }}</div>
                            </td>
                            <td wire:ignore>
                                {{ $booking->service_name }}
                            </td>
                            <td>
                                <span wire:ignore>
                                    {{ key_exists($booking->service_types, $serviceTypes) ? $serviceTypes[$booking->service_types]['title'] : '' }}
                                </span>
                            </td>
                            <td>
                                <div class="text-sm" wire:ignore>{{ numberFormat($booking->total) }}</div>
                                @if ($booking->additional_payments && !is_null($booking->additional_payments['additional_label_provider']))
                                    <div class="text-primary text-sm">Additional Charges</div>
                                    <div class="text-sm">
                                        {{ $booking->additional_payments['additional_label_provider'] }}:
                                        {{ numberFormat($booking->additional_payments['additional_charge_provider']) }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="View" aria-label="View"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="View" class="fill" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/provider.svg#view"></use>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Total -->
        <div class="row bg-muted py-2 mb-4">
            <div class="col-md-7"></div>
            <div class="col-md-3 d-flex justify-content-end">
                <div class="fw-bold text-sm mx-5">Total <span class="mx-5">{{ numberFormat($data['total']) }}</span>
                </div>
            </div>
        </div>
        <!-- /Total -->
        <div class="justify-content-center d-flex mb-2">
            <div class="form-check mx-auto">
                <input class="form-check-input" type="checkbox" value="" id="provider-invoice-generator-checkbox"
                    name="provider-invoice-generator-checkbox" required>
                <label class="form-check-label" for="provider-invoice-generator-checkbox">
                    All bookings are complete to the best of my knowledge and request to issue the remittance or payment
                </label>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-primary rounded"
                x-on:close-invoice-details.window="invoicesDetails = !invoicesDetails">Submit
                Invoice</button>
        </div>
    </form>
</div>
