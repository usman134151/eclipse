<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>INVOICE#{{ $orderData['invoice']->invoice_number }} - Print Version</title>
    <link rel="stylesheet" href="pdf_file.css">

    <style>
        .invoice-border {
            border: 2px solid;
            border-width: 1px;
            width: 330px;
            border-color: #856631;
            float: right !important;
            font-family: Arial, Helvetica, sans-serif;
        }

        .tablehead-text {
            font-size: 1.2vw;
            font-family: Arial, Helvetica, sans-serif;
        }

        .table-text {
            font-size: 1vw;
            font-family: Arial, Helvetica, sans-serif;
        }

        body,
        div,
        table,
        tr,
        td,
        p {
            font-family: Arial, Helvetica, sans-serif;
            font-size: .75rem;

        }

        thead {
            background-color: #0A1E46;
            color: white;
        }

        table td {
            border-bottom: thin solid;
        }

        .bg-muted {
            background: #E8E8E8;
        }

        .rounded {
            border-radius: 0.25rem;
        }
    </style>
</head>

<body>
    <section class="invoice max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-20">

        <div class="">
            <table width=100%>
                <tr>
                    <td>
                        <div class="flex justify-between gap-10">
                            <div></div>
                            <div class="items-end">
                                <img src="{{ $orderData['company_logo'] }}" alt="Company Logo" width="80"
                                    height="80">
                                <h3 class="">Invoice</h3>
                                <div class="flex justify-between border-b border-black pb-3">
                                    <p class="pr-16">Invoice# {{ $orderData['invoice']->invoice_number }} </p>
                                    <p class="pr-16">PO# {{ $orderData['invoice']->po_number }} </p>

                                    <p class="pl-4 my-1">
                                        Issue Date:{{ date('m/d/Y', strtotime($orderData['invoice']->invoice_date)) }}
                                    </p>
                                    <p>
                                        Due Date:{{ date('m/d/Y', strtotime($orderData['invoice']->invoice_due_date)) }}
                                    </p>

                                </div>

                            </div>
                    </td>

                    <td>
                        <div class="m-10"></div>
                        <div class="border-2 border-black p-6">
                            @if ($orderData['invoice']->billing_manager)
                                <p class="mt-1">
                                    Billing Manager : {{ $orderData['invoice']->billing_manager->name }}</p>
                            @endif
                            <p class=" text-lgmt-2">Billing Address</p>
                            @if ($orderData['invoice']->billingAddress)
                                <p class="mt-1">
                                    {{ $orderData['invoice']->billingAddress['address_line1'] . ', ' . $orderData['invoice']->billingAddress['address_line2'] . ', ' . $orderData['invoice']->billingAddress['city'] }}
                                </p>
                                <p class="mt-1">
                                    {{ $orderData['invoice']->billingAddress['state'] . ', ' . $orderData['invoice']->billingAddress['country'] . ', ' . $orderData['invoice']->billingAddress['zip'] }}
                                </p>
                            @else
                                <p class="mt-1">N/A</p>
                            @endif

                        </div>
                    </td>
                </tr>
            </table>
        </div>


        <table width=100%>
            <thead class="">
                <th width=30%>Comapany Name</th>
                <th width=30%>Billing Manager</th>
                {{-- <th>Billing Address</th> --}}
                <th width=30%>Pending Amount</th>
            </thead>
            <tbody>
                <tr>
                    <td width=30%> <small>{{ $orderData['invoice']->company->name }} </small></td>
                    <td width=30%>
                        <small>{{ $orderData['invoice']->billing_manager ? $orderData['invoice']->billing_manager->name : 'N/A' }}</small>
                    </td>
                    <td width=30%>{{ numberFormat($orderData['invoice']->outstanding_amount) }}
                    </td>
                </tr>
            </tbody>
        </table>
        <hr class="mt-6 border-black">

        <div class="w-full mt-10">
            <table width=100%>
                <thead class=" bg-grayy border-b">
                    <tr class="golden font-5 font-bold tablehead-text h-16 ">
                        <th class="border-2 border-white text-left pl-3">Booking ID</th>
                        <th class=" pl-3">Accommodation</th>
                        <th class=" pl-3">No. of Providers</th>
                        <th class=" pl-3">Total Additional Charges</th>
                        <th class=" pl-3">Total Duration</th>
                        <th class=" pl-3">Booking Total</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderData['bookings'] as $booking)
                        <tr class="text-center ">
                            <td class="  m-10  ">
                                <div class="flex ">

                                    <div class="">{{ $booking->booking_number }}</div><br>
                                    <div>
                                        {{ $booking->booking_start_at ? date_format(date_create($booking->booking_start_at), 'm/d/Y') : '' }}
                                        <div>
                                            {{ $booking->booking_start_at ? date_format(date_create($booking->booking_start_at), 'h:i A ') : '' }}
                                            to
                                            {{ $booking->booking_start_at ? date_format(date_create($booking->booking_end_at), 'h:i A') : '' }}
                                        </div>
                                    </div>
                                </div>

                            </td>

                            <td class="  m-10 ">
                                <div class="text-sm">
                                    {{ $booking->services->count() ? $booking->services->first()->accommodation->name ?? '' : '' }}
                                </div>
                                <div class="text-sm">
                                    Service:
                                    {{ $booking->services->count() ? $booking->services->first()->name : 'N/A' }}
                                </div>
                                <div class="text-sm">
                                    @if (count($booking->booking_services->first()->specializationsArray()))
                                        Specialization :
                                        @foreach ($booking->booking_services->first()->specializationsArray() as $key => $sp)
                                            {{ $sp['name'] }},
                                        @endforeach
                                    @endif
                                </div>
                            </td>
                            <td class="  m-10 ">
                                {{ $booking->booking_provider ? $booking->booking_provider->count() : 'N/A' }}

                            </td>
                            <td class="  m-10 ">
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
                            <td class="  m-10 ">
                                <div class="mb-2">Hours: {{ $booking->duration_hours }} </div>
                                <div class="mb-2">Mins: {{ $booking->duration_minute }}</div>
                                {{-- <div class="mb-2">Avg Rate: $10.00</div>
                                    <div class="mb-2">Total Rate: $100.00</div> --}}
                                @if ($booking->payment && $booking->payment->discounted_amount && $booking->payment->discounted_amount > 0)
                                    <div class="text-primary mb-2">Discount:
                                        {{ numberFormat($booking->payment->discounted_amount) }} </div>
                                @endif
                                <div class="mb-2">Service Total: {{ numberFormat($booking->getInvoicePrice()) }}
                                </div>

                            </td>
                            <td class="  m-10 ">
                                <div class="d-flex align-items-center gap-1">
                                    {{ numberFormat($booking->getInvoicePrice()) }}
                                </div>
                            </td>

                        </tr>
                    @endforeach






                </tbody>
            </table>
        </div>
        <hr class="mt-10">
        <div class="justify-end">
            {{-- <hr class="invoice-border"> --}}
            <p class="mt-6 ">Grand Total:
                {{ numberFormat($orderData['invoice']->total_price) }}</p>
        </div>
        <hr class="mt-10">
    </section>
</body>

</html>
