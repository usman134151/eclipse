<div>
    <div x-data="{ addInvoice: false }">
        <div id="loader-section" class="loader-section" wire:loading>
            <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                <div class="spinner-border" role="status" aria-live="polite">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">Invoices</h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard"
                                        aria-label="Go to Dashboard">
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23"
                                            fill="currentColor" stroke="currentColor">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                        Provider
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                        Invoices
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mb-md-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Here you can manage your providers' request invoices for each
                                                    assignment they work. Once approved, invoices will appear in
                                                    the provider's payroll in "Remittances."</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive mb-2">
                                    <table id="remittances" class="table table-hover" aria-label="Remittance">
                                        <thead>
                                            <tr role="row">
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="" name=""
                                                            type="checkbox" tabindex="" aria-label="checkbox">
                                                    </div>
                                                </th>
                                                <th scope="col">INVOICE</th>
                                                <th scope="col">Provider</th>
                                                <th scope="col">AMOUNT</th>
                                                <th scope="col">Review Status</th>
                                                <th scope="col">DATE</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $index => $invoice)
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox"
                                                                tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p>{{ $invoice['invoice_number'] }}</p>

                                                    </td>
                                                    <td>
                                                        <div class="row g-2">
                                                            <div class="col-md-3">

                                                                @if ($invoice['user']['userdetail']['profile_pic'] != null)
                                                                    <img width="50" height="50"
                                                                        src={{ $invoice['user']['userdetail']['profile_pic'] }}
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Provider Profile Image">
                                                                @else
                                                                    <img width="50" height="50"
                                                                        src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Provider Profile Image">
                                                                @endif
                                                            </div>
                                                            <div class="col-md-9">
                                                                <h6 class="fw-semibold">
                                                                    {{ $invoice['user']['name'] }}</h6>
                                                                <p>{{ $invoice['user']['email'] }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ formatPayment($invoice['total_amount']) }}</td>
                                                    <td>{{ $status[$invoice['invoice_status']] }}</td>
                                                    <td>{{ $invoice['invoice_date'] ? date_format(date_create($invoice['issued_at']), 'm/d/Y') : 'N/A' }}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
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
                                                            @if ($invoice['invoice_status'] == 0)
                                                                <a href="#" title="Accept" aria-label="Accept"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    data-bs-toggle="modal" wire:click="$emit('acceptInvoice',{{$invoice['id']}})"
                                                                    data-bs-target="#acceptModal">
                                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                                    <svg aria-label="Check" width="22"
                                                                        height="20" viewBox="0 0 22 20">
                                                                        <use xlink:href="/css/common-icons.svg#check">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="Objection"
                                                                    aria-label="Objection" wire:click="$emit('rejectInvoice',{{$invoice['id']}})"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#objectionModal">
                                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                                    <svg aria-label="cancel" width="20"
                                                                        height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#cross">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex flex-column flex-md-row justify-content-between">

                                    <div class="col-auto overflow-auto my-sm-2 my-md-0 ms-sm-0">
                                        <div class="d-flex flex-lg-row align-items-center">
                                            <label class="w-auto">
                                                <select wire:model="limit" class="form-select form-select-sm"
                                                    id="limit">
                                                    <option>10</option>
                                                    <option>25</option>
                                                    <option>50</option>
                                                    <option>100</option>
                                                </select>
                                            </label>
                                            <small class="ms-2 text-muted">
                                                Records per page
                                            </small>
                                        </div>
                                    </div>
                                    {{ $data->links('livewire.app.common.bookings.booking-nav') }}

                                </div>
                                {{-- icon legend bar start --}}
                                <div class="d-flex actions gap-3 justify-content-md-end mb-2">
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="#" title="View" aria-label="View"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
                                            View Detail
                                        </span>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="#" title="approve" aria-label="approve"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            {{-- Updated by Shanila to Add svg icon --}}
                                            <svg aria-label="approve" width="22" height="20"
                                                viewBox="0 0 22 20">
                                                <use xlink:href="/css/common-icons.svg#check">
                                                </use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                        </a>
                                        <span class="text-sm">
                                            Approve </span>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="#" title="cross" aria-label="cross "
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            {{-- Updated by Shanila to Add svg icon --}}
                                            <svg aria-label=" Deny " width="20" height="20"
                                                viewBox="0 0 20 20">
                                                <use xlink:href="/css/common-icons.svg#cross">
                                                </use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                        </a>
                                        <span class="text-sm">
                                            Deny </span>
                                    </div>
                                </div>
                                {{-- icon legend bar end --}}

                                <div class="row mt-4 mb-4">

                                    <div
                                        class="d-flex form-actions flex-lg-row flex-column justify-content-center gap-2">
                                        <a href="#" class="btn btn-primary rounded" data-bs-toggle="modal"
                                            data-bs-target="#invoiceReview">Approve Invoices</a>
                                        <button type="button" class="btn btn-primary rounded" data-bs-toggle="modal"
                                            data-bs-target="#denyInvoice">Decline Invoices</button>
                                    </div>
                                </div>
                            </div><!-- END: Card Body -->
                        </div>
                    </div>
                </div>
            </section>
            {{-- @include('panels.common.add-invoice') --}}
        </div>
        <!-- Basic Floating Label Form section end -->
        @include('modals.accept-remittance')
        @include('modals.objection-remittance')
    </div>
</div>
@push('scripts')
    <script>
        Livewire.on('close-accept-modal', () => {
            $('#invoiceReview').modal('hide');

        });
        Livewire.on('close-deny-modal', () => {
            $('#denyInvoice').modal('hide');

        });

        function updateVal(attrName, val) {
            Livewire.emit('updateVal', attrName, val);
        }
        document.addEventListener('refreshSelects2', function(event) {
            $('.select2').select2();
            $('.select2').off('change').on('change', function(e) {
                let attrName = $(this).attr('id');
                updateVal(attrName, $(this).select2("val"));
            });
        });

        function refreshSelectsEvent() {
            $('.select2').select2();
            $('.select2').off('change').on('change', function(e) {
                let attrName = $(this).attr('id');
                updateVal(attrName, $(this).select2("val"));
            });
        }
    </script>
@endpush
