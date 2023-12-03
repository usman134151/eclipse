<div class="">
    <div class="d-flex justify-content-between mb-2">
        <div class="flex-grow-1">
            <div class="row mb-lg-4">
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

                <div class="col-lg-4 mb-4 mb-lg-0 align-self-center d-flex gap-5">
                    <div class="mb-2">
                        <div class="form-label-sm">Total Paid:
                            <small>(coming soon)</small>
                        </div>
                        <div class="form-label-sm">Total Pending:
                            <small>(coming soon)</small>
                        </div>
                        <div class="form-label-sm">Total Overdue:
                            <small>(coming soon)</small>
                        </div>
                    </div>
                    <div>
                        <div class="">$3000</div>
                        <div class="">$1500</div>
                        <div class="">$500</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-inline-flex align-items-center align-self-end gap-4 mb-2">
        <div class="dropdown">

            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <svg aria-label="Export" width="23" height="26" viewBox="0 0 23 26" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z"
                        fill="#023DB0" />
                </svg>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
    <!-- Hoverable rows start -->
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <table id="" class="table table-sm table-hover" aria-label="">
                <thead>
                    <tr role="row">
                        <th scope="col" class="text-center align-middle">
                            <input id="check-all-remittances" class="form-check-input" type="checkbox"
                                wire:model="isSelectAll" wire:click="selectAll" aria-label="Select Remittances">
                        </th>
                        <th scope="col" width="25%" class="align-middle">Remittance. NO</th>
                        <th scope="col" class="text-center">Total Pay</th>
                        <th scope="col" class="text-center align-middle">Scheduled Payment Date</th>
                        <th scope="col" class="text-center align-middle">Paid At</th>
                        <th scope="col" class="text-center align-middle">Payment Method</th>
                        <th scope="col" class="text-center align-middle">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($remittances as $remittance)
                        <tr role="row" class="odd">
                            <td class="text-center align-middle">
                                <input class="form-check-input remittances-checkbox"
                                    data-price="{{ $remittance['amount'] }}" type="checkbox"
                                    value="{{ $remittance['id'] }}" wire:model='selectedRemittance'
                                    aria-label="Select Remittance">
                            </td>
                            <td class="align-middle">
                                <a href="javascript:void(0)">{{ $remittance['number'] }} <br>
                                    {{ formatDate($remittance['issued_at']) }} <br>
                                    {{ formatTime($remittance['issued_at']) }}</a>
                            </td>
                            <td class="text-center align-middle">
                                {{ numberFormat($remittance['amount']) }}
                            </td>
                            <td class="text-center align-middle">
                                {{ $remittance['payment_scheduled_at'] ? formatDate($remittance['payment_scheduled_at']) : 'N/A' }}
                            </td>
                            <td class="text-center align-middle">
                                @if ($remittance['paid_at'])
                                    {{ formatDate($remittance['paid_at']) }} <br>
                                    {{ formatTime($remittance['paid_at']) }}
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="text-center align-middle">
                                @if ($remittance['payment_method'] == null)
                                    N/A
                                @elseif($remittance['payment_method'] == 2)
                                    Mail a Cheque
                                @else
                                    Direct Deposit
                                @endif
                            </td>
                            <td class="text-center align-middle">
                                <div class="d-flex align-items-center gap-2"><svg width="12" height="12"
                                        viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="{{ $status[$remittance['payment_status']]['code'] }}"></use>
                                    </svg>
                                    <p>{{ $status[$remittance['payment_status']]['title'] }}</p>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                    <a href="javascript:void(0)" title="View" aria-label="View"
                                        wire:click="$emit('openRemittanceDetails','{{ $remittance['id'] }}')"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                                        data-bs-target="#remittanceDetailModal">
                                        <svg aria-label="View Company" width="20" height="20"
                                            viewBox="0 0 20 20">
                                            <use xlink:href="/css/common-icons.svg#view">
                                            </use>
                                        </svg>
                                    </a>
                                    <a href="#" title="Record Payment" aria-label="Record Payment"
                                        data-bs-toggle="modal" data-bs-target="#markAsPaidModal"
                                        wire:click="$emit('makeIndvidualPayment','{{ $remittance['id'] }}')"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Record Payment" width="19" height="20"
                                            viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#dollar-assignment"></use>
                                        </svg>
                                    </a>
                                    @if($remittance['payment_status']==2)
                                    <a href="javascript:void(0)" title="Return" aria-label="Return"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                                        data-bs-target="#revertBackModal" wire:click="$emit('revertRemittance','{{$remittance['id']}}')">
                                        <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                            viewBox="0 0 22 20">
                                            <use xlink:href="/css/common-icons.svg#round-arrow">
                                            </use>
                                        </svg>
                                    </a>
                                    @endif
                                    <a href="javascript:void(0)" title="Download File" aria-label="Download File"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Download PDF" width="16" height="20"
                                            viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/provider.svg#download-file"></use>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex actions gap-3 justify-content-end mb-2">
                <div class="d-flex gap-2 align-items-center">
                    <a href="#" title="Revert" aria-label="Revert"
                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                        <svg aria-label="View Company" width="20" height="20" viewBox="0 0 20 20">
                            <use xlink:href="/css/common-icons.svg#view">
                            </use>
                        </svg>
                    </a>
                    <span class="text-sm">
                        View
                    </span>
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <a href="#" title="Revert" aria-label="Revert" 
                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                        <svg aria-label="back" class="fill-stroke" width="22" height="20"
                            viewBox="0 0 22 20">
                            <use xlink:href="/css/common-icons.svg#round-arrow">
                            </use>
                        </svg>
                    </a>
                    <span class="text-sm">
                        Revert
                    </span>
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <a href="#" title="Download PDF" aria-label="Download PDF"
                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                        <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/provider.svg#download-file"></use>
                        </svg>
                    </a>
                    <span class="text-sm">
                        Download PDF
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Hoverable rows end -->
    <!-- Total -->
    <div class="bg-muted py-2 mb-4">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="d-flex justify-content-between">
                    <div class="fw-bold text-sm">Total</div>
                    <div class="fw-bold text-sm text-lg-end">$ <span wire:ignore id="total-price"></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Total -->
    <div class="justify-content-center d-flex mb-2">
        <div class="form-check mx-auto">
            <input class="form-check-input" type="checkbox" value="" id="Exclude-Notification">
            <label class="form-check-label" for="Exclude-Notification">
                Exclude Notification
            </label>
        </div>
    </div>
    <div class="col-12 form-actions mb-4">
        <a href="#" wire:click="revertAll" class="btn btn-primary rounded " data-bs-toggle="modal" data-bs-target="#revertBackModal">Revert Selected Remittances</a>
        <a href="#" wire:click="markAsPaidAll" class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
            Mark Selected Remittances as Paid
        </a>
    </div>
</div>
<script>
    $(document).ready(function() {
        let totalPrice = 0;
        updateTotalPrice();

        $('.remittances-checkbox').change(function() {
            const price = parseFloat($(this).data('price'));

            if ($(this).is(':checked')) {
                totalPrice += price;
            } else {
                totalPrice -= price;
            }
            updateTotalPrice();
        });

        function updateTotalPrice() {
            $('#total-price').text(totalPrice.toFixed(2)); // Format to two decimal places
            @this.set('total', totalPrice);

        }

        $('#check-all-remittances').change(function() {
            const isChecked = $(this).is(':checked');
            $('.remittances-checkbox').prop('checked', isChecked);

            calculateTotalPrice();
        });

        function calculateTotalPrice() {
            totalPrice = 0.00;

            $('.remittances-checkbox:checked').each(function() {
                const price = parseFloat($(this).data('price'));
                totalPrice += price;
            });
            updateTotalPrice();

        }

    });
</script>
