<div x-data="{ invoiceDetailsPanel: false }">
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
                    <h1 class="content-header-title float-start mb-0">Invoice Manager</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    <svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000">
                                    Customers
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Customer Invoices
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row  mb-4 mt-3">
                                <div class="col-md-12 mb-md-2">
                                    <div class="row">
                                        <p>Here you can view and manage invoices issued to customers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row between-section-segment-spacing">
                                <div class="col-lg-8">
                                    <div class="border border-primary p-3">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="Customer-invoices-summary">
                                                Customer invoices summary
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <h2>{{numberFormat($overDueAmount)}}</h2>
                                                    <p>Overdue</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <h2>{{numberFormat($comingAmount)}}</h2>
                                                    <p>Coming in the Next 30 Days</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <h2>{{$avgPaymentDays}} Days</h2>
                                                    <p>Average Payment Timeline</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row between-section-segment-spacing  rounded p-4 mb-1 bg-muted">
                                {{-- <small>(coming soon)</small> --}}
                                <x-advancefilters type="invoice-filters" :bmanagers="$bmanagers" :setupValues="$setupValues"/>
                            </div>
                            @if (!$showForm)
                                @livewire('app.common.lists.customer-invoices', ['filter_companies' => $filter_companies,'filter_bmanager' => $filter_bmanager, 'filter_payment_status' => $filter_payment_status, 'filter_select_Date' => $filter_select_Date, 'filter_end_Date' => $filter_end_Date, 'filterRadio' => $filterRadio ])
                            @endif

                            {{-- icon bar start --}}
                            <div class="d-flex actions gap-3 justify-content-end mb-2 flex-wrap">
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#" title="back" aria-label="back"
                                       class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                                       data-bs-target="#revertBackModal">
                                        <svg aria-label="Revert" class="fill-stroke" width="22" height="20"
                                             viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/provider.svg#revert"></use>
                                        </svg>
                                    </a>
                                    <span class="text-sm">
                                        Revert
                                    </span>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#" title="Invoice Details" aria-label="Invoice Details"
                                       class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Invoice Details" width="19" height="20"
                                             viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#dollar-assignment"></use>
                                        </svg>
                                    </a>
                                    <span class="text-sm">
                                        Invoice Details
                                    </span>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF"
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


                            <div class="justify-content-center d-flex flex-md-row">
                                <div id="messageAlert" class="text-danger">
                                </div>
                            </div>
                            <div class="justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                <button disabled class="btn btn-primary rounded">Resend Invoice</button>
                                <button class="btn btn-primary rounded" onclick="payInvoices()">Record Payment</button>
                                <button class="btn btn-primary rounded" onclick="revertInvoices()">Revert
                                    Invoice
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Floating Label Form section end -->
    </div>
    @include('modals.common.pay-invoice')
    @include('modals.common.revert-back')
    @include('panels.common.invoice-details')
</div>
@push('scripts')
    <script>
        function updateVal(attrName, val) {

            Livewire.emit('updateVal', attrName, val);

        }

        function payInvoices() {
            let selectedValues = [];
            $('tbody .form-check-input:checked').each(function () {
                selectedValues.push($(this).val());
            });

            if (selectedValues.length > 0) {

                Livewire.emit('initMultipleInvoices', selectedValues);
                $('#payInvoice').modal('show');
            } else {
                $('#messageAlert').html('Please select at least one invoice.');
                setTimeout(function () {
                    $('#messageAlert').html('');
                }, 2000);
            }
        }

        function revertInvoices() {
            let selectedValues = [];
            $('tbody .form-check-input:checked').each(function () {
                selectedValues.push($(this).val());
            });

            if (selectedValues.length > 0) {
                Livewire.emit('revertMultipleInvoice', selectedValues);
                $('#revertBackModal').modal('show');
            } else {
                $('#messageAlert').html('Please select at least one invoice.');
                setTimeout(function () {
                    $('#messageAlert').html('');
                }, 2000);
            }
        }

        Livewire.on('revertModalDismissed', () => {
            $('#revertBackModal').modal('hide');

        });
        Livewire.on('payInvoiceModalDismissed', () => {
            $('#payInvoice').modal('hide');

        });
    </script>
@endpush
