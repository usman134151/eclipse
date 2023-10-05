<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>INVOICE#{{ $orderData['invoice']->invoice_number }} - Print Version</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="swiper.min.css">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"> --}}
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
        }
    </style>
</head>

<body>
    <section class="invoice max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-20">
        <div class="flex justify-between gap-10">
            <div></div>
            <div class="">
                <p class="align-right">Invoice</p>
                <div class="flex justify-between border-b border-black pb-3">
                    <p class="pr-16">Invoice# {{ $orderData['invoice']->invoice_number }} </p>
                    <p class="border-l border-black pl-4 text-right">INVOICE
                        DATE:{{ date('d/M/Y', strtotime($orderData['invoice']->invoice_date)) }}</p>

                </div>

            </div>
        </div>
        <hr class="mt-6 border-black">
        <table width=100%>
            <tr>
                <td>
                        <div class="border-2 border-black p-6"> 
                          @if($orderData['invoice']->billing_manager)
                                                    <p class=" text-black font-semibold mt-1">
                                Billing Manager : {{ $orderData['invoice']->billing_manager->name }}</p>
                          @endif
                            <p class=" text-lg text-black font-semibold mt-2">Billing Address</p>
                    @if ($orderData['invoice']->billingAddress)

                            <p class=" text-black font-semibold mt-1">{{ $orderData['invoice']->billingAddress['address_line1'].', '. $orderData['invoice']->billingAddress['address_line2'].', '.$orderData['invoice']->billingAddress['city'] }}</p>
                            <p class=" text-black font-semibold mt-1">{{  $orderData['invoice']->billingAddress['state'] .', '. $orderData['invoice']->billingAddress['country'] .', '. $orderData['invoice']->billingAddress['zip'] }}</p>
                    @endif
                       
                        </div>
                </td>
                {{-- <td>
                    <div class="border-2 border-black p-6">
                        <p class="font-3 text-lg text-black font-semibold mt-2">Shipping Address</p> --}}
                        {{-- <p class="font-5 text-black font-semibold mt-1">{{ $orderData['invoice']->customerinfo->customer_name }}
                        </p>
                        <p class="font-5 text-black font-semibold mt-1">{{ $orderData['invoice']->shipping_address }}</p>
                        <p class="font-5 text-black font-semibold mt-1">{{ $orderData['invoice']->shipping_address2 }}</p> --}}
                    {{-- </div> --}}
            </tr>
        </table>
        <div class="w-full mt-10">
            <table class="w-full ">
                <thead class=" bg-grayy border-b">
                    <tr class="golden font-5 font-bold tablehead-text h-16 ">
                        <th class="border-2 border-white text-left pl-3">Booking ID</th>
                        <th class="text-left border-2 border-white pl-3">Accommodation</th>
                        <th class="text-left border-2 border-white pl-3">No. of Providers</th>
                        <th class="text-left border-2 border-white pl-3">Total Additional Charges</th>
                        <th class="text-left border-2 border-white pl-3">Total Service</th>
                        <th class="text-left border-2 border-white pl-3">Booking Total</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderData['bookings'] as $booking)
                        <tr class="text-center color-gray-text font-4 text-sm  h-24">
                            <td class="border-b-2 border-gray-500 m-10 table-border">
                                <div class="flex ">

                                    <div class="">{{ $booking->booking_number }}</div>
                                    <div>
                                        {{ $booking->booking_start_at ? date_format(date_create($booking->booking_start_at), 'd/m/Y') : '' }}
                                        <div>
                                            {{ $booking->booking_start_at ? date_format(date_create($booking->booking_start_at), 'h:i A ') : '' }}
                                            to
                                            {{ $booking->booking_start_at ? date_format(date_create($booking->booking_end_at), 'h:i A') : '' }}
                                        </div>
                                    </div>
                                </div>

                            </td>

                            <td class="border-b-2 border-gray-500 m-10 table-border">
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
                            <td class="border-b-2 border-gray-500 m-10 table-border">
                                {{ $booking->booking_provider ? $booking->booking_provider->count() : 'N/A' }}

                            </td>
                            <td class="border-b-2 border-gray-500 m-10 table-border">
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
                            <td class="border-b-2 border-gray-500 m-10 table-border">
                                <div class="mb-2">Duration: {{ $booking->duration_hours }} Hours
                                    {{ $booking->duration_minute }} mins</div>
                                {{-- <div class="mb-2">Avg Rate: $10.00</div>
                                    <div class="mb-2">Total Rate: $100.00</div> --}}
                                @if ($booking->payment && $booking->payment->discounted_amount && $booking->payment->discounted_amount > 0)
                                    <div class="text-primary mb-2">Discount:
                                        {{ numberFormat($booking->payment->discounted_amount) }} </div>
                                @endif
                                <div class="mb-2">Grand Total: {{ numberFormat($booking->getInvoicePrice()) }}</div>

                            </td>
                            <td class="border-b-2 border-gray-500 m-10 table-border">
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
            <hr class="invoice-border">
            <p class="font-3 text-2xl text-color font-semibold mt-6 text-right">Grand Total: 
                {{ numberFormat($orderData['invoice']->total_price) }}</p>
        </div>
        <hr class="mt-10">
    </section>
</body>

</html>
