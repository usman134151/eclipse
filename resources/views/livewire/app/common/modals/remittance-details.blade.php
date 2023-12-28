<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="remittanceDetailModalLabel">
            REMITTANCE DETAILS
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="table-responsive border">
            <table id="" class="table table-sm table-hover text-sm" aria-label="">
                <thead>
                    <tr role="row">
                        <th scope="col" class="text-center align-middle">Booking ID</th>
                        <th scope="col" class="text-center align-middle">Type</th>
                        <th scope="col" class="text-center align-middle">Customer</th>
                        <th scope="col" class="text-center align-middle">Total Pay</th>
                        <th class="text-center align-middle">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($list))
                        @foreach ($list as $row)
                            <tr role="row" class="odd">
                            @if (isset($row['payment_id']))
                                    <td class="text-center align-middle">

                                        {{ $row['number'] }}
                                    </td>

                                    <td class="text-center align-middle">
                                        Payment
                                    </td>
                                    <td></td>
                                    <td class=" align-middle">
                                        {{ numberFormat($row['amount']) }}

                                    </td>

                                    <td class="align-middle">
                                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="6.5" cy="6" r="6" fill="#F4D115" />
                                        </svg>
                                        Issued
                                    </td>
                                @elseif (isset($row['invoice_id']))
                                    <td class="text-center align-middle">
                                        {{ $row['invoice_number'] }}
                                    </td>

                                    <td class="text-center align-middle">
                                            Provider Invoice
                                    </td>
                                    <td></td>
                                    <td class=" align-middle">
                                        {{ numberFormat($row['amount']) }}

                                    </td>

                                    <td class="align-middle">
                                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="6.5" cy="6" r="6" fill="#F4D115" />
                                        </svg>
                                        Issued
                                    </td>
                              
                                @elseif (isset($row['number']))
                                    <td class="text-center align-middle">
                                            {{$row['booking'] ? $row['booking']['booking_number'] : ''}}<br>
                                        {{ $row['number'] }}
                                    </td>

                                    <td class="text-center align-middle">
                                            {{$row['booking'] ? 'Booking' : ''}}

                                        Reimbursement
                                    </td>
                                    <td></td>
                                    <td class=" align-middle">
                                        {{ numberFormat($row['amount']) }}

                                    </td>

                                    <td class="align-middle">
                                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="6.5" cy="6" r="6" fill="#F4D115" />
                                        </svg>
                                        Issued
                                    </td>
                                @else
                                    <td class="text-center align-middle" x-on:click="assignmentDetails = true">

                                       {{$row['booking']['booking_number']}} <br> {{formatDateTime($row['booking']['booking_start_at'])}} <br> {{formatDateTime($row['booking']['booking_end_at'])}}
                                    </td>
                                    <td class="text-center align-middle">
                                        Booking<br>
                                       <span class="text-primary"> Service: {{$row['booking_service']['service'] ? $row['booking_service']['service']['name'] :''}} </span>
                                    </td>
                                    <td class="text-center align-middle">
                                        {{$row['booking']['customer'] ? $row['booking']['customer']['name']:'N/A'}}
                                    </td>
                                    <td class="align-middle">
                                        {{$row['is_override_price']==1 ? numberFormat($row['override_price']) : numberFormat($row['total_amount'])}}
                                    </td>

                                    <td class="align-middle">
                                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="6.5" cy="6" r="6" fill="#F4D115" />
                                        </svg>
                                        Issued
                                    </td>
                                @endif

                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="bg-muted py-2 mb-4">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="d-flex justify-content-between">
                        <div class="fw-bold text-sm">Total</div>
                        <div class="fw-bold text-sm text-lg-end">{{numberFormat($total)}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
