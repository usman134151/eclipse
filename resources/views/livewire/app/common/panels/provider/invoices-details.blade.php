<div class="">
    <div class="row mb-4 mt-3">
        <div class="col-md-5">
            <div><span class="fw-semibold">Invoice ID:</span><span class="mx-1">INP-73-23-0001</span></div>
            <div class="d-inline-flex">
                <div><label class="form-label form-label-sm" for="provider-inovice-id">Provider Invoice Id: </label></div>
                <div class="mx-2"><input type="text" id="provider-inovice-id"
                        class="form-control form-control-sm w-50 rounded-0" name="" placeholder="" /></div>
            </div>

        </div>
        <div class="col-md-4">
            <div><span class="fw-semibold"> Submission Date:</span> 22/02/2023</div>
            <div class="ms-5"><span class="fw-semibold ms-3">Due Date:</span><span class="mx-1">22/03/2023</span>
            </div>
        </div>
        <div class="col-md-3">
            <span class="fw-semibold"> Invoice Total:</span> 440 USD
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
                            <div>{{ formatDate($booking->booking_start_at) }}</div>
                            <div class="text-sm">{{ date_format(date_create($booking->booking_start_at), 'h:i A') }} To
                                {{ date_format(date_create($booking->booking_end_at), 'h:i A') }}</div>
                        </td>
                        <td>
                            {{ $booking->service_name }}
                        </td>
                        <td>
                            In-Person
                        </td>
                        <td>
                            <div class="text-sm">$100.00</div>
                            <div class="text-primary text-sm">Additional Charges</div>
                            <div class="text-sm">Fuel: $10.00</div>
                            <div class="text-sm">Fuel: $10.00</div>
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
                {{-- <tr role="row" class="even">
                    <td x-on:click="assignmentDetails = true">
                        <div>100995-6</div>
                    </td>
                    <td>
                        <div>11/23/2022</div>
                        <div class="text-sm">09:00 PM To 4:18 PM</div>
                    </td>
                    <td>
                        American Sign Language Interpreting
                    </td>
                    <td>
                        In-Person
                    </td>
                    <td>
                        <div class="text-sm">$100.00</div>
                        <div class="text-primary text-sm">Additional Charges</div>
                        <div class="text-sm">Fuel: $10.00</div>
                        <div class="text-sm">Fuel: $10.00</div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="#" title="View" aria-label="View"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/provider.svg#view"></use>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr role="row" class="odd">
                    <td x-on:click="assignmentDetails = true">
                        <div>100995-6</div>
                    </td>
                    <td>
                        <div>11/23/2022</div>
                        <div class="text-sm">09:00 PM To 4:18 PM</div>
                    </td>
                    <td>
                        American Sign Language Interpreting
                    </td>
                    <td>
                        In-Person
                    </td>
                    <td>
                        <div class="text-sm">$100.00</div>
                        <div class="text-primary text-sm">Additional Charges</div>
                        <div class="text-sm">Fuel: $10.00</div>
                        <div class="text-sm">Fuel: $10.00</div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="#" title="View" aria-label="View"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/provider.svg#view"></use>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr role="row" class="even">
                    <td x-on:click="assignmentDetails = true">
                        <div>100995-6</div>
                    </td>
                    <td>
                        <div>11/23/2022</div>
                        <div class="text-sm">09:00 PM To 4:18 PM</div>
                    </td>
                    <td>
                        American Sign Language Interpreting
                    </td>
                    <td>
                        In-Person
                    </td>
                    <td>
                        <div class="text-sm">$100.00</div>
                        <div class="text-primary text-sm">Additional Charges</div>
                        <div class="text-sm">Fuel: $10.00</div>
                        <div class="text-sm">Fuel: $10.00</div>
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
                <tr role="row" class="odd">
                    <td x-on:click="assignmentDetails = true">
                        <div>100995-6</div>
                    </td>
                    <td>
                        <div>11/23/2022</div>
                        <div class="text-sm">09:00 PM To 4:18 PM</div>
                    </td>
                    <td>
                        American Sign Language Interpreting
                    </td>
                    <td>
                        In-Person
                    </td>
                    <td>
                        <div class="text-sm">$100.00</div>
                        <div class="text-primary text-sm">Additional Charges</div>
                        <div class="text-sm">Fuel: $10.00</div>
                        <div class="text-sm">Fuel: $10.00</div>
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
                <tr role="row" class="even">
                    <td x-on:click="assignmentDetails = true">
                        <div>100995-6</div>
                    </td>
                    <td>
                        <div>11/23/2022</div>
                        <div class="text-sm">09:00 PM To 4:18 PM</div>
                    </td>
                    <td>
                        American Sign Language Interpreting
                    </td>
                    <td>
                        In-Person
                    </td>
                    <td>
                        <div class="text-sm">$100.00</div>
                        <div class="text-primary text-sm">Additional Charges</div>
                        <div class="text-sm">Fuel: $10.00</div>
                        <div class="text-sm">Fuel: $10.00</div>
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
                <tr role="row" class="odd">
                    <td x-on:click="assignmentDetails = true">
                        <div>100995-6</div>
                    </td>
                    <td>
                        <div>11/23/2022</div>
                        <div class="text-sm">09:00 PM To 4:18 PM</div>
                    </td>
                    <td>
                        American Sign Language Interpreting
                    </td>
                    <td>
                        In-Person
                    </td>
                    <td>
                        <div class="text-sm">$100.00</div>
                        <div class="text-primary text-sm">Additional Charges</div>
                        <div class="text-sm">Fuel: $10.00</div>
                        <div class="text-sm">Fuel: $10.00</div>
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
                <tr role="row" class="even">
                    <td x-on:click="assignmentDetails = true">
                        <div>100995-6</div>
                    </td>
                    <td>
                        <div>11/23/2022</div>
                        <div class="text-sm">09:00 PM To 4:18 PM</div>
                    </td>
                    <td>
                        American Sign Language Interpreting
                    </td>
                    <td>
                        In-Person
                    </td>
                    <td>
                        <div class="text-sm">$100.00</div>
                        <div class="text-primary text-sm">Additional Charges</div>
                        <div class="text-sm">Fuel: $10.00</div>
                        <div class="text-sm">Fuel: $10.00</div>
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
                </tr> --}}
            </tbody>
        </table>
    </div>
    <!-- Total -->
    <div class="row bg-muted py-2 mb-4">
        <div class="col-md-7"></div>
        <div class="col-md-3 d-flex justify-content-end">
            <div class="fw-bold text-sm mx-5">Total <span class="mx-5">$675</span></div>
        </div>
    </div>
    <!-- /Total -->
    <div class="justify-content-center d-flex mb-2">
        <div class="form-check mx-auto">
            <input class="form-check-input" type="checkbox" value="" id="remittance-generator-checkbox">
            <label class="form-check-label" for="remittance-generator-checkbox">
                All bookings are complete to the best of my knowledge and request to issue the remittance or payment
            </label>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <button class="btn btn-primary rounded" x-on:click="invoicesDetails = !invoicesDetails">Submit
            Invoice</button>
    </div>
</div>
