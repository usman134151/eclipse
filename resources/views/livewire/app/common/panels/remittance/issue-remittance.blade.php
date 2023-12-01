<div class="" id="issue_remittance">
    <div class="row mb-lg-4 mb-4">
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="{{ $provider['userdetail']['profile_pic'] ? $provider['userdetail']['profile_pic'] : '/tenant-resources/images/portrait/small/avatar-s-9.jpg' }}"
                        class="img-fluid rounded-circle" alt="Provider Image">
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="mb-2">
                        <label class="form-label mb-0">Provider Name:</label>
                        <div class="text-xs"><small>{{ $provider['name'] }}</small></div>
                    </div>
                    <div>
                        <label class="form-label mb-0">Email:</label>
                        <div><a class="text-xs text-dark"><small>{{ $provider['email'] }}</small></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 align-self-center">
            <div class="mb-2">
                <label class="form-label mb-0">Phone Number:</label>
                <div class="text-xs">
                    <small>{{ $provider['userdetail']['phone'] ? $provider['userdetail']['phone'] : 'N/A' }}</small>
                </div>
            </div>
            <div>
                <label class="form-label mb-0">Address:</label>
                <div><a
                        class="text-xs text-dark"><small>{{ $provider['userdetail']['address_line1'] . ', ' . $provider['userdetail']['address_line2'] . ', ' . $provider['userdetail']['city'] . ', ' . $provider['userdetail']['state'] . ', ' . $provider['userdetail']['country'] }}</small></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 align-self-center">
            <small>(coming soon)</small>

            <div class="d-grid grid-cols-2 gap-2">
                <div class="fw-semibold text-sm">Total Invoiced:</div>
                <div class="text-sm">$3000</div>
                <div class="fw-semibold text-sm">Total Pending:</div>
                <div class="text-sm">$1500</div>
                <div class="fw-semibold text-sm">Next Payment Date:</div>
                <div class="text-sm">$500</div>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-6">
            <button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span>
                    <svg width="23" height="26" viewBox="0 0 23 26" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.001 0.5V8.625C10.001 9.12228 10.1985 9.5992 10.5501 9.95083C10.9018 10.3025 11.3787 10.5 11.876 10.5H20.001V17.6963L18.3847 16.08C18.2686 15.9639 18.1307 15.8719 17.979 15.8091C17.8273 15.7463 17.6647 15.7141 17.5005 15.7141C17.3363 15.7142 17.1738 15.7466 17.0221 15.8095C16.8705 15.8723 16.7327 15.9645 16.6166 16.0806C16.5005 16.1968 16.4085 16.3346 16.3457 16.4863C16.2829 16.638 16.2507 16.8006 16.2507 16.9648C16.2508 17.129 16.2832 17.2916 16.3461 17.4432C16.4089 17.5949 16.5011 17.7327 16.6172 17.8488L18.0185 19.25H12.501C12.1695 19.25 11.8515 19.3817 11.6171 19.6161C11.3827 19.8505 11.251 20.1685 11.251 20.5C11.251 20.8315 11.3827 21.1495 11.6171 21.3839C11.8515 21.6183 12.1695 21.75 12.501 21.75H18.0185L16.6172 23.1513C16.3827 23.3856 16.2508 23.7036 16.2507 24.0352C16.2506 24.3668 16.3822 24.6848 16.6166 24.9194C16.851 25.1539 17.1689 25.2858 17.5005 25.2859C17.8321 25.286 18.1502 25.1544 18.3847 24.92L19.9797 23.3238C19.9011 23.9256 19.6063 24.4783 19.1502 24.8787C18.6941 25.2791 18.1079 25.5 17.501 25.5H2.50098C1.83794 25.5 1.20205 25.2366 0.733209 24.7678C0.264369 24.2989 0.000976563 23.663 0.000976562 23V3C0.000976562 2.33696 0.264369 1.70107 0.733209 1.23223C1.20205 0.763392 1.83794 0.5 2.50098 0.5H10.001ZM20.001 17.6963L21.9197 19.6163C22.1541 19.8507 22.2857 20.1685 22.2857 20.5C22.2857 20.8315 22.1541 21.1493 21.9197 21.3838L20.001 23.3038V17.6963ZM12.501 0.55375C12.9746 0.654194 13.4088 0.889989 13.751 1.2325L19.2685 6.75C19.611 7.09216 19.8468 7.5264 19.9472 8H12.501V0.55375Z">
                        </path>
                    </svg>
                </span>
            </button>
        </div>
        <div class="col-lg-6">
            <div class="d-flex gap-2 justify-content-end">
                <a @click="addNewPayment = true" class="btn btn-sm btn-primary btn-has-icon rounded px-4">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                            fill="white"></path>
                    </svg>
                    Add Payment
                </a>
                <a @click="addReimbursement = true" class="btn btn-sm btn-primary btn-has-icon rounded px-4">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                            fill="white"></path>
                    </svg>
                    Add Reimbursement
                </a>
            </div>
        </div>
    </div>
    <!-- Hoverable rows start -->
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="table-responsive border mb-4">
                <table id="" class="table table-fs-md table-hover" aria-label="">
                    <thead>
                        <tr role="row">
                            <th scope="col" class="text-center">
                                <input class="form-check-input" type="checkbox"  id="check-all-bookings"
                                    aria-label="Select All">
                            </th>
                            <th scope="col" width="25%" class="">Booking ID</th>
                            <th scope="col">Company</th>
                            <th scope="col">Payment Info</th>
                            <th scope="col" class="">Total pay
                                {{-- <br> Total pending</th> --}}
                                {{-- <th scope="col">Status</th> --}}
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- updated by shanila to reduce extra duplicate rows --}}
                        @foreach ($list as $key => $row)
                            <tr role="row" class="even">
                                @if (key_exists('reimbursement_number', $row[0]))
                                    <td class="text-center">
                                        <input class="form-check-input booking-checkbox" wire:model.defer="selectedRMB"
                                            type="checkbox" data-id="{{ $row[0]['id'] }}"
                                            data-price="{{ $row[0]['amount'] }}" value="{{ $row[0]['id'] }}"
                                            aria-label="Select Reimbursement">
                                    </td>
                                    <td>
                                        <div class="fw-semibold">{{ $row[0]['reimbursement_number'] }}</div>

                                    </td>
                                    <td colSpan=2>
                                        <div class="fw-semibold">Reason:</div>
                                        <div class="">{{ $row[0]['reason'] }}</div>

                                    </td>
                                    </td>
                                    <td>
                                        <div class="fw-semibold"> $<span
                                                id="booking-total-{{ $row[0]['id'] }}">{{ $row[0]['amount'] }}</span>
                                        </div>

                                    </td>
                                    <td> </td>
                                @else
                                    <td class="text-center">
                                        <input class="form-check-input booking-checkbox"
                                            data-id="{{ $row[0]['booking']['id'] }}" wire:model.defer="selectedBookings"
                                            type="checkbox" value="{{ $row[0]['booking']['id'] }}"
                                            aria-label="Select Booking">
                                    </td>
                                    <td>
                                        <div class="fw-semibold">{{ $row[0]['booking']['booking_number'] }}</div>
                                        {{-- display separate time for each service --}}
                                        <div>
                                            <div>{{ formatDate($row[0]['booking']['booking_start_at']) }}</div>
                                            <div class="d-inline-flex" data-bs-toggle="tooltip" data-bs-html="true"
                                                data-bs-title="<div><b>Payment Notes</b></div> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet</p>">
                                                {{ formatTime($row[0]['booking']['booking_start_at']) }} to
                                                {{ formatTime($row[0]['booking']['booking_end_at']) }}</div>
                                        </div>
                                        @if ($row[0]['reimbursements'] && count($row[0]['reimbursements']))
                                            <div class="my-1">
                                                <strong>
                                                    Booking Reimbursements </strong>
                                            </div>
                                            <div class=" mt-2 ">
                                                <div class="">
                                                    <table id="" class="table table-sm text-sm"
                                                        aria-label="">

                                                        <tbody>
                                                            @foreach ($row[0]['reimbursements'] as $rmb)
                                                                <tr role="row" class="odd">
                                                                    <td class="text-center align-middle">

                                                                        <input
                                                                            class="form-check-input booking-rmb-checkbox"
                                                                            data-id="{{ $rmb['booking_id'] }}"
                                                                            type="checkbox" wire:model.defer="selectedRMB"
                                                                            data-price="{{ $rmb['amount'] }}"
                                                                            {{-- wire:click="updateSelectedRMB('{{$rmb['id']}}')" --}}
                                                                            value="{{ $rmb['id'] }}"
                                                                            aria-label="Select Team">
                                                                    </td>
                                                                    <td class="text-center align-middle">
                                                                        {{ $rmb['reimbursement_number'] }}
                                                                    </td>
                                                                    <td class="text-center align-middle">
                                                                        {{ $rmb['reason'] }}
                                                                    </td>
                                                                    <td class="align-middle text-center ">
                                                                        {{ numberFormat($rmb['amount']) }}
                                                                    </td>
                                                                    {{-- <td class="align-middle text-center">
                                                                    <svg width="13" height="12"
                                                                        viewBox="0 0 13 12" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="6.5" cy="6" r="6"
                                                                            fill="#F4D115" />
                                                                    </svg>
                                                                    @if ($rmb['status'] == 0)
                                                                        Pending
                                                                    @elseif($rmb['status'] == 1)
                                                                        Approved
                                                                    @else
                                                                        Declined
                                                                    @endif
                                                                </td> --}}
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="text-sm">
                                            {{ $row[0]['booking']['company'] ? $row[0]['booking']['company']['name'] : 'N/A' }}
                                        </div>
                                        <div class="text-sm">
                                            Requester:
                                            {{ $row[0]['booking']['customer'] ? $row[0]['booking']['customer']['name'] : 'N/A' }}
                                        </div>
                                        <div class="text-sm">
                                            Supervisor:
                                            {{ $row[0]['booking']['booking_supervisor'] ? $row[0]['booking']['booking_supervisor']['name'] : 'N/A' }}
                                        </div>
                                        <div class="text-sm">
                                            Billing Manager:
                                            {{ $row[0]['booking']['billing_manager'] ? $row[0]['booking']['billing_manager']['name'] : 'N/A' }}
                                        </div>
                                        <div class="text-sm">
                                            Service Consumer(s):
                                        </div>
                                    </td>
                                    <td class="position-relative">
                                        @php
                                        $total = 0; @endphp
                                        @foreach ($row as $providerDetails)
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <strong>
                                                        {{ $providerDetails['booking_service']['service']['name'] }}
                                                    </strong>
                                                </div>


                                            </div>
                                            <div class="d-flex gap-2 align-items-center mb-1">

                                                <div>Duration:</div>
                                                <div class="text-sm">
                                                    {{ $providerDetails['admin_approved_payment_detail'] ? $providerDetails['admin_approved_payment_detail']['actual_duration_hour'] . ' hour(s), ' : '' }}

                                                    {{ $providerDetails['admin_approved_payment_detail'] ? $providerDetails['admin_approved_payment_detail']['actual_duration_min'] . ' min(s) ' : '' }}
                                                </div>
                                            </div>
                                            @if (isset($providerDetails['service_payment_details']['fixed_rate']) &&
                                                    $providerDetails['service_payment_details']['fixed_rate'] == true)
                                                <div class="d-flex gap-2 align-items-center mb-1">

                                                    <div> Fixed Rate:
                                                    </div>
                                                    <div class="text-sm">
                                                        {{ numberFormat($providerDetails['service_payment_details']['rate']) }}

                                                    </div>
                                                </div>
                                            @elseif(isset($providerDetails['service_payment_details']['day_rate']) &&
                                                    $providerDetails['service_payment_details']['day_rate'] == true)
                                                <div class="d-flex gap-2 align-items-center mb-1">

                                                    <div> Day Rate:
                                                    </div>
                                                    <div class="text-sm">
                                                        {{ numberFormat($providerDetails['service_payment_details']['rate']) }}
                                                    </div>
                                                </div>
                                            @else
                                                <div class="d-flex gap-2 align-items-center mb-1">
                                                    <div>
                                                        Business Hour(s):</div>
                                                    <div class="text-sm">
                                                        {{ isset($providerDetails['service_payment_details']['b_hours_duration']) ? $providerDetails['service_payment_details']['b_hours_duration'] : 'N/A' }}
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center mb-1">
                                                    <div>
                                                        Business Hour Rate:</div>
                                                    <div class="text-sm">
                                                        {{ isset($providerDetails['service_payment_details']['b_hours_rate']) ? numberFormat($providerDetails['service_payment_details']['b_hours_rate']) : 'N/A' }}
                                                    </div>
                                                </div>

                                                <div class="d-flex gap-2 align-items-center mb-1">
                                                    <div>
                                                        After Business Hour(s):</div>
                                                    <div class="text-sm">
                                                        {{ isset($providerDetails['service_payment_details']['a_hours_duration']) ? $providerDetails['service_payment_details']['a_hours_duration'] : 'N/A' }}
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center mb-1">

                                                    <div>
                                                        After-Business Hour Rate:</div>
                                                    <div class="text-sm">
                                                        {{ isset($providerDetails['service_payment_details']['a_hours_rate']) ? numberFormat($providerDetails['service_payment_details']['a_hours_rate']) : 'N/A' }}
                                                    </div>
                                                </div>
                                            @endif
                                            @if (isset($providerDetails['service_payment_details']['expedited_rate']) &&
                                                    $providerDetails['service_payment_details']['expedited_rate'] > 0)
                                                <div class="d-flex gap-2 align-items-center mb-1">

                                                    <div>Expedition Charges:</div>
                                                    <div class="text-sm">
                                                        {{ numberFormat($providerDetails['service_payment_details']['expedited_rate']) }}

                                                    </div>
                                                </div>
                                            @endif
                                            @if (isset($providerDetails['service_payment_details']['specialization_charges']) &&
                                                    count($providerDetails['service_payment_details']['specialization_charges']))
                                                <div class="text-primary">
                                                    Specialization Charges

                                                </div>
                                                @foreach ($providerDetails['service_payment_details']['specialization_charges'] as $spCharges)
                                                    <div class="d-flex gap-2 align-items-center mb-1">
                                                        <div class="">{{ isset($spCharges['label']) ? $spCharges['label'] :'' }}: </div>
                                                        <div class="text-sm">
                                                            {{ numberFormat($spCharges['provider_charges']) }}</div>

                                                    </div>
                                                @endforeach
                                            @endif
                                            @if (isset($providerDetails['additional_payments']['additional_label_provider']) &&
                                                    !is_null($providerDetails['additional_payments']['additional_label_provider']))
                                                <div class="text-primary">
                                                    Additional Charges

                                                </div>
                                                <div class="d-flex gap-2 align-items-center mb-1">
                                                    <div class="">
                                                        {{ $providerDetails['additional_payments']['additional_label_provider'] }}:
                                                    </div>
                                                    <div class="text-sm">
                                                        {{ numberFormat($providerDetails['additional_payments']['additional_charge_provider']) }}
                                                    </div>

                                                </div>
                                            @endif
                                            <div class="d-flex gap-2 align-items-center mb-1">
                                                <div class="">
                                                    {{ $providerDetails['is_override_price'] == 1 ? '(Override)' : '' }}
                                                    Service Charges</div>
                                                <div class="text-sm service-charges-{{ $row[0]['booking_id'] }}"
                                                    data-price="{{ $providerDetails['is_override_price'] == 1 ? $providerDetails['override_price'] : $providerDetails['total_amount'] }}">
                                                    {{ $providerDetails['is_override_price'] == 1 ? numberFormat($providerDetails['override_price']) : numberFormat($providerDetails['total_amount']) }}
                                                </div>
                                                @php
                                                    $total = $total + ($providerDetails['is_override_price'] == 1 ? $providerDetails['override_price'] : $providerDetails['total_amount']);
                                                @endphp
                                            </div>

                                            <hr>
                                        @endforeach

                                    </td>
                                    <td class="">
                                        <div>$ <span wire:ignore data-price={{ $row[0]['sum'] }}
                                                id="booking-total-{{ $row[0]['booking']['id'] }}">{{ $row[0]['sum'] }}
                                            </span></div>
                                    </td>
                                    {{-- <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <svg class="fill-danger" xmlns="http://www.w3.org/2000/svg" width="12"
                                            height="12" viewBox="0 0 512 512">
                                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z">
                                            </path>
                                        </svg>
                                        Pending
                                    </div>
                                </td> --}}
                                    <td>
                                        <div class="d-flex actions justify-content-center">
                                            <a href="#" title="View" aria-label="View"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg class="fill-stroke" width="17" height="18"
                                                    viewBox="0 0 17 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125"
                                                        stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            {{-- <a href="#" title="Accept" aria-label="Accept"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 0V18.5714H11.6923V17.1429H1.46154V1.42857H8.76923V5.71429H13.1538V7.14286H14.6154V4.71429L14.3962 4.5L10.0115 0.214286L9.79231 0H0ZM10.2308 2.42857L12.1308 4.28571H10.2308V2.42857ZM2.92308 7.14286V8.57143H11.6923V7.14286H2.92308ZM15.3462 8.57143V10C14.1038 10.2143 13.1538 11.2143 13.1538 12.5C13.1538 13.9286 14.25 15 15.7115 15H16.4423C17.0269 15 17.5385 15.5 17.5385 16.0714C17.5385 16.6429 17.0269 17.1429 16.4423 17.1429H13.8846V18.5714H15.3462V20H16.8077V18.5714C18.05 18.3571 19 17.3571 19 16.0714C19 14.6429 17.9038 13.5714 16.4423 13.5714H15.7115C15.1269 13.5714 14.6154 13.0714 14.6154 12.5C14.6154 11.9286 15.1269 11.4286 15.7115 11.4286H18.2692V10H16.8077V8.57143H15.3462ZM2.92308 10.7143V12.1429H8.03846V10.7143H2.92308ZM9.5 10.7143V12.1429H11.6923V10.7143H9.5ZM2.92308 13.5714V15H8.03846V13.5714H2.92308ZM9.5 13.5714V15H11.6923V13.5714H9.5Z" />
                                        </svg>
                                    </a> --}}
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        {{-- START : rows for future implementation --}}
                        {{-- <tr role="row" class="even">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                                </td>
                                <td>
                                    <div class="fw-semibold">100995-6</div>
                                    <div>
                                        <div>08/24/2022</div>
                                        <div class="d-inline-flex" data-bs-toggle="tooltip" data-bs-html="true"
                                            data-bs-title="<div><b>Payment Notes</b></div> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet</p>">
                                            9:59 AM to 4:22 PM</div>
                                    </div>
                                    <div class="mb-2">
                                        <div>08/24/2022</div>
                                        <div>9:59 AM to 4:22 PM</div>
                                    </div>
                                    <div class="badge text-dark bg-muted rounded-lg p-2">
                                        Invoice: INP-89-23-001
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm">
                                        Microsoft
                                    </div>
                                    <div class="text-sm">
                                        Requester: John Cris
                                    </div>
                                    <div class="text-sm">
                                        Supervisor: Danny Lis
                                    </div>
                                    <div class="text-sm">
                                        Billing Manager: Tessa Leo
                                    </div>
                                    <div class="text-sm">
                                        Service Consumer(s): Tessa
                                    </div>
                                </td>
                                <td class="position-relative">
                                    <a href="#" title="Edit" aria-label="Edit"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon icon-edit">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                                                fill="black"></path>
                                        </svg>
                                    </a>
                                    <div class="">Billable Hours: 10</div>
                                    <div class="">Hourly Rate: $10</div>
                                    <div>Total Service Rate: $100</div>
                                    <div class="text-primary"><small>Additional Charges:</small></div>
                                    <div>Fuel Charges: $20 <i class="fa fa-check-circle" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title=""></i></div>
                                    <div>Fuel Charges: $15</div>
                                    <div class="text-primary"><small class="text-xxs">Charged To Customer</small></div>
                                </td>
                                <td class="">
                                    <div>$135</div>
                                    <div>$15 (Pending)</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <svg class="fill-danger" xmlns="http://www.w3.org/2000/svg" width="12"
                                            height="12" viewBox="0 0 512 512">
                                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z">
                                            </path>
                                        </svg>
                                        Pending
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex actions justify-content-center">
                                        <a href="#" title="View" aria-label="View"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg class="fill-stroke" width="17" height="18" viewBox="0 0 17 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <a href="#" title="Accept" aria-label="Accept"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 0V18.5714H11.6923V17.1429H1.46154V1.42857H8.76923V5.71429H13.1538V7.14286H14.6154V4.71429L14.3962 4.5L10.0115 0.214286L9.79231 0H0ZM10.2308 2.42857L12.1308 4.28571H10.2308V2.42857ZM2.92308 7.14286V8.57143H11.6923V7.14286H2.92308ZM15.3462 8.57143V10C14.1038 10.2143 13.1538 11.2143 13.1538 12.5C13.1538 13.9286 14.25 15 15.7115 15H16.4423C17.0269 15 17.5385 15.5 17.5385 16.0714C17.5385 16.6429 17.0269 17.1429 16.4423 17.1429H13.8846V18.5714H15.3462V20H16.8077V18.5714C18.05 18.3571 19 17.3571 19 16.0714C19 14.6429 17.9038 13.5714 16.4423 13.5714H15.7115C15.1269 13.5714 14.6154 13.0714 14.6154 12.5C14.6154 11.9286 15.1269 11.4286 15.7115 11.4286H18.2692V10H16.8077V8.57143H15.3462ZM2.92308 10.7143V12.1429H8.03846V10.7143H2.92308ZM9.5 10.7143V12.1429H11.6923V10.7143H9.5ZM2.92308 13.5714V15H8.03846V13.5714H2.92308ZM9.5 13.5714V15H11.6923V13.5714H9.5Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" value=""
                                        aria-label="Select Team">
                                </td>
                                <td>
                                    <div class="fw-semibold">100995-6</div>
                                    <div>
                                        <div>08/24/2022</div>
                                        <div class="d-inline-flex" data-bs-toggle="tooltip" data-bs-html="true"
                                            data-bs-title="<div><b>Payment Notes</b></div> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet</p>">
                                            9:59 AM to 4:22 PM</div>
                                    </div>
                                    <div class="mb-2">
                                        <div>08/24/2022</div>
                                        <div>9:59 AM to 4:22 PM</div>
                                    </div>
                                    <div class="badge text-dark bg-muted rounded-lg p-2">
                                        Invoice: INP-89-23-001
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm">
                                        Microsoft
                                    </div>
                                    <div class="text-sm">
                                        Requester: John Cris
                                    </div>
                                    <div class="text-sm">
                                        Supervisor: Danny Lis
                                    </div>
                                    <div class="text-sm">
                                        Billing Manager: Tessa Leo
                                    </div>
                                    <div class="text-sm">
                                        Service Consumer(s): Tessa
                                    </div>
                                </td>
                                <td class="position-relative">
                                    <div class="d-flex gap-2 align-items-center mb-1">
                                        <div>Billable Duration:</div>
                                        <div class="text-sm">5 Hours, 10 Mints</div>
                                        <div class="position-relative">
                                            <a href="" title="Edit" aria-label="Edit"
                                                class="btn btn-xs btn-secondary rounded btn-hs-icon icon-edit">
                                                <svg width="10" height="10" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                                                        fill="black"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center mb-1">
                                        <div>
                                            Override Duration:
                                        </div>
                                        <div class="text-sm">
                                            2 Hours, 10 Mints
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex gap-2 align-items-center mb-1">
                                        <div>English To French Translation:</div>
                                        <div class="text-sm">$100</div>
                                        <div class="position-relative">
                                            <a href="" title="Edit" aria-label="Edit"
                                                class="btn btn-xs btn-secondary rounded btn-hs-icon icon-edit">
                                                <svg width="10" height="10" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                                                        fill="black"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        Override Service Charges:
                                    </div>
                                    <div class="text-primary">
                                        Additional Charges:
                                        <svg class="icon-arrow ms-3" width="17" height="8" viewBox="0 0 17 8"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.50728 7.69408C0.74087 7.88996 1.05764 8 1.38794 8C1.71823 8 2.03501 7.88996 2.26859 7.69408L8.43444 2.52205L14.6003 7.69408C14.8352 7.88441 15.1499 7.98973 15.4765 7.98734C15.8031 7.98496 16.1155 7.87508 16.3464 7.68135C16.5774 7.48763 16.7084 7.22557 16.7112 6.95161C16.7141 6.67765 16.5885 6.41372 16.3616 6.21666L9.3151 0.305918C9.08151 0.110038 8.76474 -1.1216e-07 8.43444 -1.07863e-07C8.10415 -1.03567e-07 7.78737 0.110038 7.55378 0.305918L0.50728 6.21666C0.273762 6.4126 0.142578 6.67831 0.142578 6.95537C0.142578 7.23243 0.273762 7.49814 0.50728 7.69408Z"
                                                fill="#023DB0" />
                                        </svg>
                                    </div>
                                    <hr>
                                    <div class="d-flex gap-2 align-items-center mb-1">
                                        <div>Spoken Language Interpreting:</div>
                                        <div class="text-sm">$100</div>
                                        <div class="position-relative">
                                            <a href="" title="Edit" aria-label="Edit"
                                                class="btn btn-xs btn-secondary rounded btn-hs-icon icon-edit">
                                                <svg width="10" height="10" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                                                        fill="black"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        Override Service Charges:
                                    </div>
                                    <div class="text-primary">
                                        Additional Charges:
                                        <svg class="icon-arrow ms-3" width="17" height="8" viewBox="0 0 17 8"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.50728 7.69408C0.74087 7.88996 1.05764 8 1.38794 8C1.71823 8 2.03501 7.88996 2.26859 7.69408L8.43444 2.52205L14.6003 7.69408C14.8352 7.88441 15.1499 7.98973 15.4765 7.98734C15.8031 7.98496 16.1155 7.87508 16.3464 7.68135C16.5774 7.48763 16.7084 7.22557 16.7112 6.95161C16.7141 6.67765 16.5885 6.41372 16.3616 6.21666L9.3151 0.305918C9.08151 0.110038 8.76474 -1.1216e-07 8.43444 -1.07863e-07C8.10415 -1.03567e-07 7.78737 0.110038 7.55378 0.305918L0.50728 6.21666C0.273762 6.4126 0.142578 6.67831 0.142578 6.95537C0.142578 7.23243 0.273762 7.49814 0.50728 7.69408Z"
                                                fill="#023DB0" />
                                        </svg>
                                    </div>
                                    <hr>
                                    <div class="d-flex gap-2 align-items-center mb-1">
                                        <div class="fw-medium">Total Service Rate:</div>
                                        <div class="fw-medium">$100</div>
                                        <div class="position-relative">
                                            <a href="" title="Edit" aria-label="Edit"
                                                class="btn btn-xs btn-secondary rounded btn-hs-icon icon-edit">
                                                <svg width="10" height="10" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                                                        fill="black"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div>$135</div>
                                    <div>$15 (Pending)</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <svg class="fill-danger" xmlns="http://www.w3.org/2000/svg" width="12"
                                            height="12" viewBox="0 0 512 512">
                                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z">
                                            </path>
                                        </svg>
                                        Pending
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex actions justify-content-center">
                                        <a href="#" title="View" aria-label="View"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg class="fill-stroke" width="17" height="18" viewBox="0 0 17 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <a href="#" title="Accept" aria-label="Accept"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 0V18.5714H11.6923V17.1429H1.46154V1.42857H8.76923V5.71429H13.1538V7.14286H14.6154V4.71429L14.3962 4.5L10.0115 0.214286L9.79231 0H0ZM10.2308 2.42857L12.1308 4.28571H10.2308V2.42857ZM2.92308 7.14286V8.57143H11.6923V7.14286H2.92308ZM15.3462 8.57143V10C14.1038 10.2143 13.1538 11.2143 13.1538 12.5C13.1538 13.9286 14.25 15 15.7115 15H16.4423C17.0269 15 17.5385 15.5 17.5385 16.0714C17.5385 16.6429 17.0269 17.1429 16.4423 17.1429H13.8846V18.5714H15.3462V20H16.8077V18.5714C18.05 18.3571 19 17.3571 19 16.0714C19 14.6429 17.9038 13.5714 16.4423 13.5714H15.7115C15.1269 13.5714 14.6154 13.0714 14.6154 12.5C14.6154 11.9286 15.1269 11.4286 15.7115 11.4286H18.2692V10H16.8077V8.57143H15.3462ZM2.92308 10.7143V12.1429H8.03846V10.7143H2.92308ZM9.5 10.7143V12.1429H11.6923V10.7143H9.5ZM2.92308 13.5714V15H8.03846V13.5714H2.92308ZM9.5 13.5714V15H11.6923V13.5714H9.5Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" value=""
                                        aria-label="Select Team">
                                </td>
                                <td>
                                    <div class="fw-semibold">100995-6</div>
                                    <div>
                                        <div>08/24/2022</div>
                                        <div class="d-inline-flex" data-bs-toggle="tooltip" data-bs-html="true"
                                            data-bs-title="<div><b>Payment Notes</b></div> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet</p>">
                                            9:59 AM to 4:22 PM</div>
                                    </div>
                                    <div class="mb-2">
                                        <div>08/24/2022</div>
                                        <div>9:59 AM to 4:22 PM</div>
                                    </div>
                                    <div class="badge text-dark bg-muted rounded-lg p-2">
                                        Invoice: INP-89-23-001
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm">
                                        Microsoft
                                    </div>
                                    <div class="text-sm">
                                        Requester: John Cris
                                    </div>
                                    <div class="text-sm">
                                        Supervisor: Danny Lis
                                    </div>
                                    <div class="text-sm">
                                        Billing Manager: Tessa Leo
                                    </div>
                                    <div class="text-sm">
                                        Service Consumer(s): Tessa
                                    </div>
                                </td>
                                <td class="position-relative">
                                    <div class="d-flex gap-2 align-items-center mb-2">
                                        <div>Billable Duration:</div>
                                        <div class="text-sm">5 Hours, 10 Mints</div>
                                        <div class="position-relative">
                                            <a href="" title="Save" aria-label="Save"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon icon-save">
                                                <svg width="18" height="18" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.6026 3.85262L13.1474 0.397375C12.988 0.238 12.7925 0.121125 12.58 0.0573749V0H0.68C0.303875 0 0 0.303875 0 0.68V16.32C0 16.6961 0.303875 17 0.68 17H16.32C16.6961 17 17 16.6961 17 16.32V4.81313C17 4.45188 16.8576 4.10763 16.6026 3.85262ZM5.78 1.53H11.22V3.74H5.78V1.53ZM15.47 15.47H1.53V1.53H4.42V4.42C4.42 4.79612 4.72388 5.1 5.1 5.1H11.9C12.2761 5.1 12.58 4.79612 12.58 4.42V1.99325L15.47 4.88325V15.47ZM8.5 7.0125C6.81063 7.0125 5.44 8.38313 5.44 10.0725C5.44 11.7619 6.81063 13.1325 8.5 13.1325C10.1894 13.1325 11.56 11.7619 11.56 10.0725C11.56 8.38313 10.1894 7.0125 8.5 7.0125ZM8.5 11.7725C7.56075 11.7725 6.8 11.0118 6.8 10.0725C6.8 9.13325 7.56075 8.3725 8.5 8.3725C9.43925 8.3725 10.2 9.13325 10.2 10.0725C10.2 11.0118 9.43925 11.7725 8.5 11.7725Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center mb-1">
                                        <div class="align-self-end">
                                            Override Duration:
                                        </div>
                                        <div class="d-flex gap-2">
                                            <div>
                                                <div class="text-center">
                                                    Hours
                                                </div>
                                                <input type="" name=""
                                                    class="form-control text-center form-control-xs form-control-max-w-xs">
                                            </div>
                                            <div>
                                                <div class="text-center">
                                                    Mints
                                                </div>
                                                <input type="" name=""
                                                    class="form-control text-center form-control-xs form-control-max-w-xs">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <div class="mb-2 d-flex align-items-center gap-1">
                                            <div>Hourly Rate:</div>
                                            <div class="text-xs">$10</div>
                                        </div>
                                        <div class="mb-2 d-flex align-items-center gap-2">
                                            <div>Override Hourly Rate:</div>
                                            <div class="">
                                                <input type="" name=""
                                                    class="form-control form-control-xs form-control-max-w-xs text-center"
                                                    value="05">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex gap-2 align-items-center mb-1">
                                        <div>English To French Translation:</div>
                                        <div class="text-sm">$100</div>
                                    </div>
                                    <div class="mb-1">
                                        Override Service Charges:
                                    </div>
                                    <div>
                                        <div class="text-primary mb-3">
                                            Additional Charges:
                                            <svg class="icon-arrow ms-3" width="17" height="8"
                                                viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            </svg>
                                            <svg width="17" height="8" viewBox="0 0 17 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.2603 0.305919C16.0267 0.110039 15.7099 -3.44874e-08 15.3796 -4.69357e-08C15.0493 -5.9384e-08 14.7326 0.110039 14.499 0.305919L8.33314 5.47795L2.16729 0.305919C1.93236 0.11559 1.61771 0.0102742 1.29112 0.0126548C0.964517 0.0150354 0.652099 0.124922 0.42115 0.318646C0.190201 0.512371 0.0591983 0.774433 0.0563602 1.04839C0.053522 1.32235 0.179075 1.58628 0.405977 1.78334L7.45248 7.69408C7.68607 7.88996 8.00284 8 8.33314 8C8.66343 8 8.9802 7.88996 9.21379 7.69408L16.2603 1.78334C16.4938 1.5874 16.625 1.32169 16.625 1.04463C16.625 0.767573 16.4938 0.501858 16.2603 0.305919Z"
                                                    fill="#023DB0" />
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column gap-1">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col-lg-3">Fuel Charges:</div>
                                                <div class="col-lg-2">
                                                    <input type="" name=""
                                                        class="form-control form-control-xs text-center" value="20">
                                                </div>
                                                <div>
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                                            fill="#888575" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="" checked>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="BillToCustomer" checked>
                                                    <label class="form-check-label" for="BillToCustomer">
                                                        <small>Bill To Customer</small>
                                                    </label>
                                                </div>
                                            </div>
                                            <hr class="my-1">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col-lg-3">Food:</div>
                                                <div class="col-lg-2">
                                                    <input type="" name=""
                                                        class="form-control form-control-xs text-center" value="15">
                                                </div>
                                                <div>
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                                            fill="#888575" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="BillToCustomer" checked>
                                                    <label class="form-check-label" for="BillToCustomer">
                                                        <small>Bill To Customer</small>
                                                    </label>
                                                </div>
                                            </div>
                                            <hr class="my-1">
                                            <div>
                                                <a href="#" class="btn btn-primary btn-xxs rounded btn-has-icon">
                                                    <svg width="14" height="14" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                            fill="white"></path>
                                                    </svg>
                                                    Add New
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex gap-2 align-items-center mb-1">
                                        <div>Spoken Language Interpreting:</div>
                                        <div class="text-sm">$100</div>
                                        <div class="position-relative">
                                            <a href="" title="Edit" aria-label="Edit"
                                                class="btn btn-xs btn-secondary rounded btn-hs-icon icon-edit">
                                                <svg width="10" height="10" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                                                        fill="black"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        Override Service Charges:
                                    </div>
                                    <div class="text-primary">
                                        Additional Charges:
                                        <svg class="icon-arrow ms-3" width="17" height="8" viewBox="0 0 17 8"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.50728 7.69408C0.74087 7.88996 1.05764 8 1.38794 8C1.71823 8 2.03501 7.88996 2.26859 7.69408L8.43444 2.52205L14.6003 7.69408C14.8352 7.88441 15.1499 7.98973 15.4765 7.98734C15.8031 7.98496 16.1155 7.87508 16.3464 7.68135C16.5774 7.48763 16.7084 7.22557 16.7112 6.95161C16.7141 6.67765 16.5885 6.41372 16.3616 6.21666L9.3151 0.305918C9.08151 0.110038 8.76474 -1.1216e-07 8.43444 -1.07863e-07C8.10415 -1.03567e-07 7.78737 0.110038 7.55378 0.305918L0.50728 6.21666C0.273762 6.4126 0.142578 6.67831 0.142578 6.95537C0.142578 7.23243 0.273762 7.49814 0.50728 7.69408Z"
                                                fill="#023DB0" />
                                        </svg>
                                    </div>
                                    <hr>
                                    <div class="d-flex gap-2 align-items-center mb-1">
                                        <div class="fw-medium">Total Service Rate:</div>
                                        <div class="fw-medium">$100</div>
                                        <div class="position-relative">
                                            <a href="" title="Edit" aria-label="Edit"
                                                class="btn btn-xs btn-secondary rounded btn-hs-icon icon-edit">
                                                <svg width="10" height="10" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                                                        fill="black"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div>$135</div>
                                    <div>$15 (Pending)</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <svg class="fill-danger" xmlns="http://www.w3.org/2000/svg" width="12"
                                            height="12" viewBox="0 0 512 512">
                                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z">
                                            </path>
                                        </svg>
                                        Pending
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex actions justify-content-center">
                                        <a href="#" title="View" aria-label="View"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg class="fill-stroke" width="17" height="18" viewBox="0 0 17 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <a href="#" title="Accept" aria-label="Accept"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 0V18.5714H11.6923V17.1429H1.46154V1.42857H8.76923V5.71429H13.1538V7.14286H14.6154V4.71429L14.3962 4.5L10.0115 0.214286L9.79231 0H0ZM10.2308 2.42857L12.1308 4.28571H10.2308V2.42857ZM2.92308 7.14286V8.57143H11.6923V7.14286H2.92308ZM15.3462 8.57143V10C14.1038 10.2143 13.1538 11.2143 13.1538 12.5C13.1538 13.9286 14.25 15 15.7115 15H16.4423C17.0269 15 17.5385 15.5 17.5385 16.0714C17.5385 16.6429 17.0269 17.1429 16.4423 17.1429H13.8846V18.5714H15.3462V20H16.8077V18.5714C18.05 18.3571 19 17.3571 19 16.0714C19 14.6429 17.9038 13.5714 16.4423 13.5714H15.7115C15.1269 13.5714 14.6154 13.0714 14.6154 12.5C14.6154 11.9286 15.1269 11.4286 15.7115 11.4286H18.2692V10H16.8077V8.57143H15.3462ZM2.92308 10.7143V12.1429H8.03846V10.7143H2.92308ZM9.5 10.7143V12.1429H11.6923V10.7143H9.5ZM2.92308 13.5714V15H8.03846V13.5714H2.92308ZM9.5 13.5714V15H11.6923V13.5714H9.5Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr> --}}
                        {{-- END : rows for future implementation --}}

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
                    <div class="fw-bold text-sm">Booking Total</div>
                    <div class="fw-bold text-sm text-lg-end">$
                        <span id="grand-total" wire:ignore></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Total -->
    <div class="justify-content-center d-flex mb-2">
        <div class="form-check mx-auto">
            <input class="form-check-input" type="checkbox" value="" id="ExcludeNotification">
            <label class="form-check-label" for="ExcludeNotification">
                Exclude Notification
            </label>
        </div>
    </div>
    <div class="justify-content-center d-flex mb-4">
        <a href="#"
            x-on:issued-remittance.window="issueRemittance = !issueRemittance;remittanceGeneratorBooking=!remittanceGeneratorBooking"
            wire:click="createRemittance" class="btn btn-primary rounded">Issue Remittance</a>
    </div>
</div>

<script>
    $(document).ready(function() {
        let grandTotalPrice = 0;
        calculateRowsTotal();
        calculateGrandTotal();

        $('.booking-rmb-checkbox').change(function() {
            const id = parseFloat($(this).data('id'));
            const price = parseFloat($(this).data('price'));
            let bookingtotalPrice = parseFloat($('#booking-total-' + id).text());

            if ($(this).is(':checked')) {
                bookingtotalPrice += price;
            } else {
                bookingtotalPrice -= price;
            }
            updateBookingPrice(id, bookingtotalPrice);
            calculateGrandTotal();
        });

        $('.booking-checkbox').change(function() {
            const id = parseFloat($(this).data('id'));
            if (!isNaN(id)) {

                const price = parseFloat($('#booking-total-' + id).text());

                if ($(this).is(':checked')) {
                    grandTotalPrice += price;
                } else {
                    grandTotalPrice -= price;
                }
                updateGrandTotalPrice();
            }
        });

         $('#check-all-bookings').change(function() {
            const isChecked = $(this).is(':checked');
            $('.booking-checkbox').prop('checked', isChecked);

            calculateRowsTotal();
            calculateGrandTotal();
        });




        function calculateRowsTotal() {
            $('.booking-rmb-checkbox:checked').each(function() {
                const id = parseFloat($(this).data('id'));
                const price = parseFloat($(this).data('price'));
                var bookingtotalPrice = parseFloat($('#booking-total-' + id).text());
                bookingtotalPrice += price;
                updateBookingPrice(id, bookingtotalPrice);

            });
        }

        function calculateGrandTotal() {
             grandTotalPrice=0;
            $('.booking-checkbox:checked').each(function() {
                const id = parseFloat($(this).data('id'));
                if (!isNaN(id)) {
                    const price = parseFloat($('#booking-total-' + id).text());

                    grandTotalPrice += price;
                }
            });
            updateGrandTotalPrice();

        }

        function updateBookingPrice(id, price) {
            $('#booking-total-' + id).text(price.toFixed(2)); // Format to two decimal places
        }

        function updateGrandTotalPrice() {
            $('#grand-total').text(grandTotalPrice.toFixed(2)); // Format to two decimal places
            @this.set('totalAmount', grandTotalPrice);

        }


       
    });
</script>
