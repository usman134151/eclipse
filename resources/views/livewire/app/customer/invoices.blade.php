<div x-data="{ invoiceDetailsPanel:false}">
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
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    <svg aria-label="Home" width="22" height="23"viewBox="0 0 22 23" fill="currentColor" stroke="currentColor""
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#home"></use>
                                </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000">
                                    Billing
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Invoices
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
                            <div class="row between-section-segment-spacing  rounded p-4 mb-1 bg-muted">
                                {{-- <small>(coming soon)</small> --}}
                                <x-advancefilters type="invoice-filters" :bmanagers="$bmanagers" />
                            </div>
                            @livewire('app.common.lists.customer-invoices', ['company_id'=>Auth::user()->company_name, 'invoice_status'=>'pending', 'filter_bmanager' => $filter_bmanager, 'filter_select_Date' => $filter_select_Date, 'filter_end_Date' => $filter_end_Date, 'filterRadio' => $filterRadio])

                            {{-- icon bar start--}}
                            <div class="d-flex actions gap-3 justify-content-end mb-2">
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#" title="View Invoice" aria-label="View Invoice"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        {{-- updated Sana to change x-icon to svg --}}
                                        <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20"><use xlink:href="/css/common-icons.svg#view"></use></svg>
                                        {{-- end updated by Sana --}}
                                    </a>
                                    <span class="text-sm">
                                        View Invoice
                                    </span>
                                </div>

                            </div>
                            {{-- icon bar start end--}}
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Floating Label Form section end -->
    </div>
    @include('panels.common.invoice-details')
</div>

@push('scripts')
    <script>
        function updateVal(attrName, val) {
            Livewire.emit('updateVal', attrName, val);
        }
    </script>
@endpush