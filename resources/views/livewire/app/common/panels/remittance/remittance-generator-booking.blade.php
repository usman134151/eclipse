<div class="" id="remittance_generator">
    {{-- <div class="bg-muted rounded p-4 mb-3">
        (Coming Soon)
        <div class="d-lg-flex gap-5 align-items-center mb-4">
            <div class="mb-4 mb-lg-0">
                <label class="form-label-sm">Search</label>
                <div class="d-flex gap-2 align-items-center">
                    <div class="position-relative">
                        <input type="text" class="form-control form-control-md is-search" id="search"
                            aria-describedby="search" placeholder="Provider Name or Email">

                        <svg aria-label="Cancel" class="icon-search position-absolute" width="1024" height="1024"
                            viewBox="0 0 1024 1024">
                            <use xlink:href="/css/common-icons.svg#cancel"></use>
                        </svg>
                    </div>
                    <button class="btn btn-secondary rounded btn-sm btn-hs-icon">
                        <svg aria-label="Search" width="22" height="20" viewBox="0 0 22 20">
                            <use xlink:href="/css/common-icons.svg#search"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mb-4 mb-lg-0">
                <label class="form-label-sm">Date Range</label>
                <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
                    <svg aria-label="Input-calender" class="icon-date md left cursor-pointer" width="20"
                        height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#input-calender"></use>
                    </svg>
                    <input type="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY"
                        name="selectDate" aria-label="Select Date">
                </div>
            </div>
            <div class="mb-4 mb-lg-0">
                <label class="form-label-sm">scheduled payment</label>
                <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
                    <svg aria-label="Input-calender" class="icon-date md left cursor-pointer" width="20"
                        height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#input-calender"></use>
                    </svg>
                    <input type="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY"
                        aria-label="scheduled payment">
                </div>
            </div>
            <div class="d-md-flex gap-3 align-items-center">
                <div class="mb-4 mb-lg-0">
                    <select class="form-select form-select-sm bg-secondary text-white rounded"
                        aria-label="Advance Filter" id="show_status">
                        <option>Advance Filter</option>
                    </select>
                </div>
                <div class="mb-4 mb-lg-0">
                    <button type="button" class="btn btn-xs bg-white btn-outline-dark rounded">Clear all</button>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row mb-3">
        <h3>Provider Info</h3>
    </div>
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
            {{-- <small>(coming soon)</small> --}}

            {{-- <div class="d-grid grid-cols-2 gap-2">
                <div class="fw-semibold text-sm">Total Invoiced:</div>
                <div class="text-sm">{{formatpayment($this->providerData['total_invoiced'])}}</div>
                <div class="fw-semibold text-sm">Total Pending:</div>
                <div class="text-sm">{{formatpayment($this->providerData['total_pending'])}}</div>
                <div class="fw-semibold text-sm">Next Payment Date:</div>
                <div class="text-sm">{{formatDate($this->providerData['payment_date'])}}</div>
            </div> --}}
        </div>
    </div>
    <!-- Hoverable rows start -->
    <div class="row" id="table-hover-row">
<!--        <div class="col-6 mb-5">
            <label class="form-label" for="filter_booking_id">BookingID</label>
            <input type="text" class="form-control" name="filter_booking_id" id="filter_booking_id"
                   placeholder="Enter Booking ID" wire:model.defer="bookingID"/>
        </div>
        <div class="col-6 mb-5">
            <label class="form-label" for="filter_type">Type</label>
            <select class="form-control" name="filter_type" id="filter_type" wire:model.defer="type">
                <option value="">Select Type</option>
                <option value="booking">Booking</option>
                <option value="reimbursement">Reimbursement</option>
                <option value="invoice">Invoice</option>
                <option value="payment">Payment</option>
            </select>
        </div>
        <div class="col-md-12">
            <div class="col-lg-4 d-flex mb-5  mt-1">
                <div class="text-start my-1 mb-lg-0 me-1 ">
                    <button wire:click="applyFilters" type="button" class="btn btn-xs btn-outline-dark rounded">
                        Apply Filters
                    </button>
                </div>
                <div class="text-start my-1 mb-lg-0 ">
                    <button wire:click="resetFilters" type="button" class="btn btn-xs btn-outline-dark rounded">
                        Clear all
                    </button>
                </div>
            </div>
        </div>-->
        <div class="col-12">
            <div class="table-responsive border mb-4">
                <table id="" class="table table-fs-md table-hover" aria-label="">
                    <thead>
                        <tr role="row">
                            <th scope="col" class="text-center align-middle">
                                <input id="check-all" class="form-check-input" type="checkbox" value=""
                                    aria-label="Select All Teams">
                            </th>
                            <th scope="col" width="25%" class="align-middle">ID</th>
                            <th scope="col" class="text-center">Type</th>
                            <th scope="col" class="text-center align-middle">Reimbbursement(s)</th>
                            <th scope="col" class="text-center align-middle">Total Pay</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($bookings['bookingData'] as $row)
                            <tr role="row" class="odd ivp">
                                <td class="text-center align-middle">
                                    <input class="form-check-input booking-checkbox" value="{{ $loop->index }}"
                                        wire:key='{{ $loop->index }}' wire:model.defer="selectedBookings"
                                        data-price="{{ $row['amount'] }}" type="checkbox" aria-label="Select Team">
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:void(0)">
                                        @if (isset($row['payment_id']))
                                            {{ $row['number'] }}
                                        @elseif(isset($row['invoice_id']))
                                            {{ $row['invoice_number'] }}
                                        @else
                                            {{ isset($row['reimbursement_id']) ? $row['reimbursement_number'] : $row['booking']['booking_number'] }}
                                        @endif
                                    </a>

                                </td>
                                <td class="text-center align-middle">
                                    @if (isset($row['payment_id']))
                                        Payment
                                    @elseif(isset($row['invoice_id']))
                                        Provider Invoice Request
                                    @else
                                        {{ isset($row['reimbursement_id']) ? 'Reimbursment' : 'Booking' }}
                                    @endif
                                </td>
                                <td class="text-center align-middle">
                                    @if (!isset($row['payment_id']) && !isset($row['invoice_id']))
                                        {{ !isset($row['reimbursement_id']) ? count($row['reimbursements']) : '' }}
                                    @endif
                                </td>
                                <td class="text-center align-middle">
                                    {{ numberFormat($row['amount']) }}
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex actions justify-content-center">
                                        @if (isset($row['reimbursements']))
                                            @if (count($row['reimbursements']) > 0)
                                                <a href="#" title="View" aria-label="View"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#bookingReimbursementsModal"
                                                    wire:click='$emit("showReimbursemetDetails","{{ $row['booking_id'] }}","{{ $provider['id'] }}")'
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                @else
                                                    <a href="#" title="No Reimbursements Associated"
                                                        aria-label="No Reimbursements Associated"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            @endif
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.2857 17.1423C15.0747 17.1423 15.7143 16.5027 15.7143 15.7137C15.7143 14.9247 15.0747 14.2852 14.2857 14.2852C13.4968 14.2852 12.8572 14.9247 12.8572 15.7137C12.8572 16.5027 13.4968 17.1423 14.2857 17.1423Z"
                                                    fill="black" />
                                                <path
                                                    d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7748 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z"
                                                    fill="black" />
                                                <path
                                                    d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z"
                                                    fill="black" />
                                            </svg>
                                            </a>
                                        @endif

                                        {{-- @if (isset($row['invoice_id']))
                                            <a href="#" title="View Invoice Details"
                                                aria-label="View Invoice Details" data-bs-toggle="modal"
                                                data-bs-target="#bookingReimbursementsModal"
                                                wire:click='$emit("viewProviderInvoice","{{ $row['invoice_id'] }}")'
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.2857 17.1423C15.0747 17.1423 15.7143 16.5027 15.7143 15.7137C15.7143 14.9247 15.0747 14.2852 14.2857 14.2852C13.4968 14.2852 12.8572 14.9247 12.8572 15.7137C12.8572 16.5027 13.4968 17.1423 14.2857 17.1423Z"
                                                        fill="black" />
                                                    <path
                                                        d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7748 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z"
                                                        fill="black" />
                                                    <path
                                                        d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        @endif --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Render the pagination navigations links -->
            {{ $bookings['bookingData']->links('livewire.app.common.bookings.booking-nav') }}
            <!-- /Render the pagination navigations links  -->
        </div>
    </div>
    <!-- Hoverable rows end -->
    <!-- Icon Help -->
    <div class="d-flex actions gap-3 justify-content-end mb-2">
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.2857 17.1423C15.0747 17.1423 15.7143 16.5027 15.7143 15.7137C15.7143 14.9247 15.0747 14.2852 14.2857 14.2852C13.4968 14.2852 12.8572 14.9247 12.8572 15.7137C12.8572 16.5027 13.4968 17.1423 14.2857 17.1423Z"
                        fill="black" />
                    <path
                        d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7748 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z"
                        fill="black" />
                    <path
                        d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z"
                        fill="black" />
                </svg>
            </a>
            <span class="text-sm">
                View Details
            </span>
        </div>

    </div>
    <!-- /Icon Help -->
    {{-- <div class="d-flex justify-content-between">
        <div>
            <p class="fw-semibold mb-lg-0 text-sm font-family-secondary">Showing 1 to 5 of 100 entries</p>
        </div>
        <nav aria-label="Page Navigation">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item active"><a class="page-link" href="#">4</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div> --}}
    <div class="text-center">

        @if ($showError)
            <div style="position: fixed;bottom: 48px;right: 44px;text-align: center;z-index:-10000">

                <span class="d-inline-block invalid-feedback my-1">No bookings or reimbursements are selected.</span>
            </div>
        @endif
    </div>

</div>
<script>
    $(document).ready(function() {
        let totalPrice = 0;
        updateTotalPrice();

        $('.booking-checkbox').change(function() {
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
        }

        $('#check-all').change(function() {
            const isChecked = $(this).is(':checked');
            $('.booking-checkbox').prop('checked', isChecked);

            calculateTotalPrice();
        });

        function calculateTotalPrice() {
            totalPrice = 0.00;

            $('.booking-checkbox:checked').each(function() {
                const price = parseFloat($(this).data('price'));
                totalPrice += price;
            });
            updateTotalPrice();
        }
    });
</script>
