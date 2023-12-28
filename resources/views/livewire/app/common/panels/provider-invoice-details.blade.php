<div>
    <div class="row">
        <div class="col-12">
            @foreach ($invoice['provider_bookings'] as $providerDetails)
                <div class="row">
                    <div class="col-6">
                        <div class="">
                            <strong>
                                {{ $providerDetails['booking']['booking_number'] }}
                            </strong>
                        </div>
                        <div class="text-sm">
                            {{ $providerDetails['booking']['company'] ? $providerDetails['booking']['company']['name'] : 'N/A' }}
                        </div>
                        <div class="text-sm">
                            Requester:
                            {{ $providerDetails['booking']['customer'] ? $providerDetails['booking']['customer']['name'] : 'N/A' }}
                        </div>
                        <div class="text-sm">
                            Supervisor:
                            {{ $providerDetails['booking']['booking_supervisor'] ? $providerDetails['booking']['booking_supervisor']['name'] : 'N/A' }}
                        </div>
                        <div class="text-sm">
                            Billing Manager:
                            {{ $providerDetails['booking']['billing_manager'] ? $providerDetails['booking']['billing_manager']['name'] : 'N/A' }}
                        </div>
                        <div class="text-sm">
                            Service Consumer(s):
                        </div>

                    </div>
                    <div class="col-6">

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
                                    <div class="">
                                        {{ isset($spCharges['label']) ? $spCharges['label'] : '' }}:
                                    </div>
                                    <div class="text-sm">
                                        {{ numberFormat($spCharges['provider_charges']) }}
                                    </div>

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
                            <div class="text-sm "
                                data-price="{{ $providerDetails['is_override_price'] == 1 ? $providerDetails['override_price'] : $providerDetails['total_amount'] }}">
                                {{ $providerDetails['is_override_price'] == 1 ? numberFormat($providerDetails['override_price']) : numberFormat($providerDetails['total_amount']) }}
                            </div>
                            {{-- @php
                                                        $total = $total + ($providerDetails['is_override_price'] == 1 ? $providerDetails['override_price'] : $providerDetails['total_amount']);
                                                    @endphp --}}
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>
