<div class="" x-data="{issueRemittance: false}">
    <div class="bg-muted rounded p-4 mb-3">
        <div class="d-lg-flex gap-5 align-items-center mb-4">
            <div class="mb-4 mb-lg-0">
                <label class="form-label-sm">Search</label>
                <div class="d-flex gap-2 align-items-center">
                    <div class="position-relative">
                        <input type="text" class="form-control form-control-md is-search" id="search"
                            aria-describedby="search" placeholder="Provider Name or Email">

                        {{-- updated Sana to change x-icon to svg --}}
                        <svg aria-label="Cancel" class="icon-search position-absolute" width="1024" height="1024"
                            viewBox="0 0 1024 1024">
                            <use xlink:href="/css/common-icons.svg#cancel"></use>
                        </svg>
                        {{-- end updated by Sana --}}
                    </div>
                    <button class="btn btn-secondary rounded btn-sm btn-hs-icon">
                        {{-- updated Sana to change x-icon to svg --}}
                        <svg aria-label="Search" width="22" height="20" viewBox="0 0 22 20">
                            <use xlink:href="/css/common-icons.svg#search"></use>
                        </svg>
                        {{-- end updated by Sana --}}
                    </button>
                </div>
            </div>
            <div class="mb-4 mb-lg-0">
                <label class="form-label-sm">Date Range</label>
                <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
                    {{-- updated Sana to change x-icon to svg --}}
                    <svg aria-label="Input-calender" class="icon-date md left cursor-pointer" width="20"
                        height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#input-calender"></use>
                    </svg>
                    {{-- end updated by Sana --}}
                    <input type="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY"
                        name="selectDate" aria-label="Select Date">
                </div>
            </div>
            <div class="mb-4 mb-lg-0">
                <label class="form-label-sm">scheduled payment</label>
                <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
                    {{-- updated Sana to change x-icon to svg --}}
                    <svg aria-label="Input-calender" class="icon-date md left cursor-pointer" width="20"
                        height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#input-calender"></use>
                    </svg>
                    {{-- end updated by Sana --}}
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
    </div>
    <div class="row mb-3">
        <h3>Provider Info</h3>
    </div>
    <div class="row mb-lg-4 mb-4">
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="{{ $provider['userdetail']['profile_pic'] ? $provider['userdetail']['profile_pic'] :  '/tenant-resources/images/portrait/small/avatar-s-9.jpg'}}" class="img-fluid rounded-circle"
                        alt="Provider Image">
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
    <!-- Hoverable rows start -->
    <div class="row" id="table-hover-row">
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
                            {{-- <th scope="col" class="text-center align-middle">Due Date</th> --}}
                            <th scope="col" class="text-center align-middle">Total Pay</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr role="row" class="">
                            <tr role="row" class="odd ivp">
                                <td class="text-center align-middle">
                                    <input class="form-check-input booking-checkbox" value="{{ $loop->index }}" wire:key='{{ $loop->index }}' 
                                    wire:model.defer="selectedBookings" data-price="{{ $row['amount'] }}"
                                             type="checkbox"      aria-label="Select Team">
                                </td>
                                <td class="align-middle">
                                    <a
                                        href="javascript:void(0)">{{ isset($row['reimbursement_id']) ? $row['reimbursement_number'] : $row['booking']['booking_number'] }}</a>
                                </td>
                                <td class="text-center align-middle">
                                    {{ isset($row['reimbursement_id']) ? 'Reimbursment' : 'Booking' }}
                                </td>
                                {{-- <td class="text-center align-middle">
                                    11/23/2022
                                </td> --}}
                                <td class="text-center align-middle">
                                    {{ numberFormat($row['amount']) }}
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex actions justify-content-center">
                                        @if (!isset($row['reimbursement_id']))
                                            <a href="#" title="View" aria-label="View"
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
                                        @else
                                            <a href="#" title="Accept" aria-label="Accept"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                data-bs-toggle="modal" data-bs-target="#acceptModal">
                                                <svg width="22" height="20" viewBox="0 0 22 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.07178 9.34781C4.09446 9.08389 4.20428 8.85022 4.36594 8.63743C4.93482 7.88744 6.20976 7.54359 7.10197 8.09699C7.62729 8.42284 8.04855 8.84229 8.39924 9.33845C8.69052 9.7507 8.95371 10.1835 9.23708 10.6188C9.43474 10.3372 9.63421 10.0477 9.83872 9.76187C11.5961 7.30704 13.5253 5.00235 15.763 2.97094C17.1359 1.7248 18.7111 0.799105 20.4059 0.0671207C20.6986 -0.0596174 20.9431 -0.0102903 21.1944 0.244266C21.0792 0.351921 20.9647 0.458497 20.8513 0.566152C19.3711 1.96855 17.923 3.40336 16.6084 4.96346C15.8559 5.85603 15.1585 6.79504 14.4409 7.71677C12.9957 9.57248 11.9141 11.6604 10.6859 13.6547C10.2117 14.4249 9.74223 15.1979 9.26732 15.9674C9.07865 16.2734 8.83022 16.2691 8.64083 15.9566C8.02658 14.9419 7.54231 13.8639 7.08469 12.7715C6.70231 11.8599 6.27313 10.9702 5.72765 10.1417C5.45798 9.73198 5.14005 9.39461 4.61762 9.34997C4.44155 9.33521 4.26188 9.34781 4.07178 9.34781Z"
                                                        fill="black" />
                                                    <path
                                                        d="M17.3628 6.17614L15.9229 7.62067C16.3388 8.54168 16.5696 9.56459 16.5696 10.6415C16.5696 14.6975 13.2931 17.9851 9.2508 17.9851C5.2085 17.9851 1.93204 14.6975 1.93204 10.6415C1.93204 6.58552 5.2085 3.29789 9.2508 3.29789C10.2615 3.29789 11.2235 3.50384 12.0984 3.87505L13.5487 2.41973C12.2648 1.74247 10.8019 1.35938 9.2508 1.35938C4.14167 1.35938 0 5.51509 0 10.6415C0 15.7679 4.14167 19.9233 9.2508 19.9233C14.3599 19.9233 18.5016 15.7676 18.5016 10.6411C18.5016 9.02307 18.0886 7.50077 17.3628 6.17614Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" title="Objection" aria-label="Objection"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                data-bs-toggle="modal" data-bs-target="#objectionModal">
                                                <svg class="fill-stroke" width="22" height="22"
                                                    viewBox="0 0 22 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.0201 1.12891C5.52343 1.12891 1.07983 5.58648 1.07983 11.1003C1.07983 16.6135 5.52343 21.0711 11.0201 21.0711C16.5168 21.0711 20.9611 16.6135 20.9611 11.1003C20.9611 5.58648 16.5168 1.12891 11.0201 1.12891ZM11.0201 19.898C6.19607 19.898 2.24917 15.939 2.24917 11.1003C2.24917 9.25264 2.83352 7.52245 3.79897 6.1143L17.5109 16.9946C15.9033 18.7839 13.5932 19.898 11.0201 19.898ZM18.2419 16.0857L4.5294 5.20538C6.13763 3.41676 8.44772 2.30205 11.0201 2.30205C15.8442 2.30205 19.7917 6.26102 19.7917 11.1003C19.7917 12.948 19.2067 14.6782 18.2419 16.0857Z" />
                                                    </g>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
                View Booking Detail
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Accept" aria-label="Accept"
                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                data-bs-target="#acceptModal">
                <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.07178 9.34781C4.09446 9.08389 4.20428 8.85022 4.36594 8.63743C4.93482 7.88744 6.20976 7.54359 7.10197 8.09699C7.62729 8.42284 8.04855 8.84229 8.39924 9.33845C8.69052 9.7507 8.95371 10.1835 9.23708 10.6188C9.43474 10.3372 9.63421 10.0477 9.83872 9.76187C11.5961 7.30704 13.5253 5.00235 15.763 2.97094C17.1359 1.7248 18.7111 0.799105 20.4059 0.0671207C20.6986 -0.0596174 20.9431 -0.0102903 21.1944 0.244266C21.0792 0.351921 20.9647 0.458497 20.8513 0.566152C19.3711 1.96855 17.923 3.40336 16.6084 4.96346C15.8559 5.85603 15.1585 6.79504 14.4409 7.71677C12.9957 9.57248 11.9141 11.6604 10.6859 13.6547C10.2117 14.4249 9.74223 15.1979 9.26732 15.9674C9.07865 16.2734 8.83022 16.2691 8.64083 15.9566C8.02658 14.9419 7.54231 13.8639 7.08469 12.7715C6.70231 11.8599 6.27313 10.9702 5.72765 10.1417C5.45798 9.73198 5.14005 9.39461 4.61762 9.34997C4.44155 9.33521 4.26188 9.34781 4.07178 9.34781Z"
                        fill="black" />
                    <path
                        d="M17.3628 6.17614L15.9229 7.62067C16.3388 8.54168 16.5696 9.56459 16.5696 10.6415C16.5696 14.6975 13.2931 17.9851 9.2508 17.9851C5.2085 17.9851 1.93204 14.6975 1.93204 10.6415C1.93204 6.58552 5.2085 3.29789 9.2508 3.29789C10.2615 3.29789 11.2235 3.50384 12.0984 3.87505L13.5487 2.41973C12.2648 1.74247 10.8019 1.35938 9.2508 1.35938C4.14167 1.35938 0 5.51509 0 10.6415C0 15.7679 4.14167 19.9233 9.2508 19.9233C14.3599 19.9233 18.5016 15.7676 18.5016 10.6411C18.5016 9.02307 18.0886 7.50077 17.3628 6.17614Z"
                        fill="black" />
                </svg>
            </a>
            <span class="text-sm">
                Accept
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Objection" aria-label="Objection"
                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                data-bs-target="#objectionModal">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.0201 1.12891C5.52343 1.12891 1.07983 5.58648 1.07983 11.1003C1.07983 16.6135 5.52343 21.0711 11.0201 21.0711C16.5168 21.0711 20.9611 16.6135 20.9611 11.1003C20.9611 5.58648 16.5168 1.12891 11.0201 1.12891ZM11.0201 19.898C6.19607 19.898 2.24917 15.939 2.24917 11.1003C2.24917 9.25264 2.83352 7.52245 3.79897 6.1143L17.5109 16.9946C15.9033 18.7839 13.5932 19.898 11.0201 19.898ZM18.2419 16.0857L4.5294 5.20538C6.13763 3.41676 8.44772 2.30205 11.0201 2.30205C15.8442 2.30205 19.7917 6.26102 19.7917 11.1003C19.7917 12.948 19.2067 14.6782 18.2419 16.0857Z"
                        fill="black" stroke="black" />
                    </g>
                </svg>
            </a>
            <span class="text-sm">
                Objection
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
    <!-- Total -->
    <div class="bg-muted py-2 mb-4">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="d-flex justify-content-between">
                    <div class="fw-bold text-sm">Booking Total</div>
                    <div  class="fw-bold text-sm text-lg-end"> $<span id="total-price"></span></div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Total -->
    <div class="row justify-content-center mb-2">
        <div class="col-lg-3">
            <a @click="issueRemittance = true" href="#" class="btn btn-primary rounded w-100">Add to
                Remittance</a>
        </div>
    </div>
    <div class="justify-content-center d-flex mb-4">
        <div class="form-check mx-auto">
            <input class="form-check-input" type="checkbox" value="" id="ExcludeNotification">
            <label class="form-check-label" for="ExcludeNotification">
                Exclude Notification
            </label>
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

</div>
