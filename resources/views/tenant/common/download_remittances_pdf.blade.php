<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{$fileTitle}} - Print Version</title>
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
        .header-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .company-logo {
            max-width: 150px; /* Adjust the width as needed */
            height: auto;
            /* display: block; */
        }

        .company-name {
            align-items: center;
            text-transform: uppercase;
            text-align: center;
            flex-grow: 1;
        }

        body {
            position: relative;
            min-height: 100vh; /* Set minimum height of the body to 100% of viewport height */
            /* margin-bottom: 50px; Adjust the margin bottom to accommodate the footer height */
        }

         footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 50px; /* Set the height of your footer */
            text-align: center;
            line-height: 50px; /* Vertically center content */
        }
    </style>
</head>

<body>
    <section class="invoice max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-20">
        {!! $header !!}
        <div class="">
            <table width=100%>
                <tr>
                    <td>
                        <div class="flex justify-between gap-10">
                            <div></div>
                            <div class="items-end">
                                <h3 class="">Remittance</h3>
                                <div class="flex justify-between border-b border-black pb-3">
                                    <p class="pr-16">Remittance# {{ $data['remittance']['number'] }} </p>

                                    {{-- <p class="pl-4 my-1">
                                        Company: {{ $company->name }}
                                    </p> --}}
                                    <p class="pl-4 my-1">
                                        Provider: {{ $data['provider']->name }}
                                    </p>
                                    <p class="pl-4 my-1">
                                        Issue Date:{{ date('m/d/Y', strtotime($data['remittance']['issued_at'])) }}
                                    </p>
                                    {{-- <p>
                                        Due Date:{{ date('m/d/Y', strtotime($data['invoice']->invoice_due_date)) }}
                                    </p> --}}

                                </div>

                            </div>
                    </td>

                    {{-- <td>
                        <div class="m-10"></div>
                        <div class="border-2 border-black p-6">
                            @if ($data['invoice']->billing_manager)
                                <p class="mt-1">
                                    Billing Manager : {{ $data['invoice']->billing_manager->name }}</p>
                            @endif
                            <p class=" text-lgmt-2">Billing Address</p>
                            @if ($data['invoice']->billingAddress)
                                <p class="mt-1">
                                    {{ $data['invoice']->billingAddress['address_line1'] . ', ' . $data['invoice']->billingAddress['address_line2'] . ', ' . $data['invoice']->billingAddress['city'] }}
                                </p>
                                <p class="mt-1">
                                    {{ $data['invoice']->billingAddress['state'] . ', ' . $data['invoice']->billingAddress['country'] . ', ' . $data['invoice']->billingAddress['zip'] }}
                                </p>
                            @else
                                <p class="mt-1">N/A</p>
                            @endif

                        </div>
                    </td> --}}
                </tr>
            </table>
        </div>


        {{-- <table width=100%>
            <thead class="">
                <th width=30%>Comapany Name</th>
                <th width=30%>Billing Manager</th>
                <th width=30%>Pending Amount</th>
            </thead>
            <tbody>
                <tr>
                    <td width=30%> <small>{{ $data['invoice']->company->name }} </small></td>
                    <td width=30%>
                        <small>{{ $data['invoice']->billing_manager ? $data['invoice']->billing_manager->name : 'N/A' }}</small>
                    </td>
                    <td width=30%>{{ numberFormat($data['invoice']->outstanding_amount) }}
                    </td>
                </tr>
            </tbody>
        </table>
        <hr class="mt-6 border-black"> --}}

        <div class="w-full mt-10">
            <table width=100%>
                <thead class=" bg-grayy border-b">
                    <tr class="golden font-5 font-bold tablehead-text h-16 ">
                        {{-- <th class="border-2 border-white text-left pl-3">Booking ID</th> --}}
                        <th class=" pl-3">ID</th>
                        <th class=" pl-3">Type</th>
                        <th class=" pl-3">Customer</th>
                        <th class=" pl-3">Total Pay</th>
                        {{-- <th class=" pl-3">Booking Total</th> --}}

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['payments'] as $payment)
                    @if(isset($payment['payment_id']))    
                        <tr class="text-center ">
                            <td class="  m-10  ">
                                {{ $payment['number'] }}
                            </td>
                            <td class="  m-10 ">
                                Payment
                            </td>
                            <td></td>
                            <td class="  m-10 ">
                                {{ numberFormat($payment['amount']) }}
                            </td>
                        </tr>
                        @elseif(isset($payment['number']))
                        <tr>
                            <td class="  m-10  ">
                                {{$payment['booking'] ? $payment['booking']['booking_number'] : ''}}<br>
                                        {{ $payment['number'] }}
                            </td>
                            <td class="  m-10 ">
                                {{$payment['booking'] ? 'Booking' : ''}}
                                Reimbursement
                            </td>
                            <td></td>
                            <td class="  m-10 ">
                                {{ numberFormat($payment['amount']) }}
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td class="  m-10  ">
                                {{$payment['booking']['booking_number']}} <br> {{formatDateTime($payment['booking']['booking_start_at'])}} <br> {{formatDateTime($payment['booking']['booking_end_at'])}}
                            </td>
                            <td class="  m-10 ">
                                Booking<br>
                                       <span class="text-primary"> Service: {{$payment['booking_service']['service'] ? $payment['booking_service']['service']['name'] :''}} </span>
                            </td>
                            <td>
                                {{$payment['booking']['customer'] ? $payment['booking']['customer']['name']:'N/A'}}
                            </td>
                            <td class="  m-10 ">
                                {{$payment['is_override_price']==1 ? numberFormat($payment['override_price']) : numberFormat($payment['total_amount'])}}
                            </td>
                        </tr>
                        @endif
                    @endforeach






                </tbody>
            </table>
        </div>
        <hr class="mt-10">
        <div class="justify-end">
            {{-- <hr class="invoice-border"> --}}
            <p class="mt-6 ">Grand Total:
                {{ numberFormat($data['remittance']['amount']) }}</p>
        </div>
        <hr class="mt-10">
    </section>
    <footer>
        {!! $footer !!}
    </footer>
</body>

</html>
