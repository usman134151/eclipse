<div>
	<div>
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
				<h1 class="content-header-title float-start mb-0">Reports</h1>
				<div class="breadcrumb-wrapper">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item">
					  <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
						<svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
							<use xlink:href="/css/common-icons.svg#home"></use>
						</svg>
					  </a>
					</li>
					<li class="breadcrumb-item">
					  <a href="javascript:void(0)">
					  Reports
					  </a>
					</li>
				  </ol>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  <!-- Begin: Content  -->
	  <section id="multiple-column-form">
	    <div class="row">
	        <div class="col-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="row">
	                        <div class="col-md-12">
	                            <!-- Begin Section One  -->
	                            <div class="rounded border-primary p-5 mb-4">
	                                <div class="row">
	                                    <div class="col-lg-2 col-md-6 mb-4">
	                                        <div class="btn btn-primary w-100 flex-column gap-1">
	                                            <svg aria-label="Upload Picture" width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#custom-range"></use>
                                                </svg>
	                                            Custom Range
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-4 col-md-6 align-self-center mb-4">
	                                        <div class="d-flex gap-2">
	                                            <div class="d-flex flex-column gap-3">
	                                                <div class="text-lg fw-light">From:</div>
	                                                <div class="text-lg fw-light">To:</div>
	                                            </div>
	                                            <div class="d-flex flex-column gap-3">
	                                                <div class="text-lg fw-semibold">01 Aug, 2022</div>
	                                                <div class="text-lg fw-semibold">10 Aug, 2022</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-2 d-flex flex-column gap-4 align-self-center mb-4">
	                                        <button class="btn btn-primary w-100" style="font-size:15px;">
	                                        Last 7 Days
	                                        </button>
	                                        <button class="btn btn-primary w-100" style="font-size:15px;">
	                                        Last Month
	                                        </button>
	                                    </div>
	                                    <div class="col-2 d-flex flex-column gap-4 align-self-center mb-4">
	                                        <button class="btn btn-primary w-100" style="font-size:15px;">
	                                        Last 30 Days
	                                        </button>
	                                        <button class="btn btn-primary w-100" style="font-size:15px;">
	                                        This Year
	                                        </button>
	                                    </div>
	                                    <div class="col-2 d-flex flex-column gap-4 align-self-center mb-4" >
	                                        <button class="btn btn-primary w-100" style="font-size:15px;">
	                                        This Month
	                                        </button>
	                                        <button class="btn btn-primary w-100" style="font-size:15px;">
	                                        Last Year
	                                        </button>
	                                    </div>
	                                    <div class="col-12">
	                                        <div class="row">
	                                            <div class="col-lg-3 col-md-6">
	                                                <select class="form-select border-primary w-100" aria-label="Advance Filter" id="show_status">
	                                                    <option>Advance Filter</option>
	                                                </select>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End Section One  -->
	                            <!-- Begin SEction Two -->
	                            <div class="row">
	                                <div class="col-lg-11">
	                                    <div class="d-md-flex align-items-center gap-3 justify-content-end">
	                                        <a href="" class="btn btn-success btn-has-icon mb-4">
	                                            Export
	                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#export-green"></use>
                                                </svg>
	                                        </a>
	                                        <a href="" class="btn btn-warning btn-has-icon mb-4">
	                                            Export
	                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#export-danger"></use>
                                                </svg>
	                                        </a>
	                                    </div>
	                                </div>
	                                <div class="col-lg-6 mb-4 text-center">
	                                    <div class="text-center">
	                                        <label class="form-label">Revenue by Company</label>
	                                        <div class="text-muted text-sm mb-2">{{formatPayment($totalInvoiceRevenue)}}</div>
	                                    </div>
	                                    <div class="mb-4">
	                                        <canvas id="RevenueByCompanyChart" style="width:100%;max-width:700px"></canvas>
	                                    </div>
	                                    <div class="row justify-content-center">
	                                        <div class="col-lg-5">
	                                            <a href="" class="btn btn-primary w-100">View Detail</a>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-lg-6 mb-4 text-center">
	                                    <div class="text-center">
	                                        <label class="form-label">Revenue by Services</label>
	                                        <div class="text-muted text-sm mb-2">$29,488.01</div>
	                                    </div>
	                                    <div class="mb-4">
	                                        <canvas id="RevenueByServices" style="width:100%;max-width:700px"></canvas>
	                                    </div>
	                                    <div class="row justify-content-center">
	                                        <div class="col-lg-5">
	                                            <a href="" class="btn btn-primary w-100">View Detail</a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End SEction Two -->
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="row">
	                        <div class="col-md-12 mb-md-2">
	                            <h2>Revenue vs Payment</h2>
	                        </div>
	                        <div class="col-12 text-center">
	                            <canvas id="RevenueVsPayment" style="width:100%;"></canvas>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-12">
	            <div class="row mb-2">
	                <div class="col-md-6 col-lg-4 mb-4">
	                    <div class="card">
	                        <div class="card-body">
	                            <h3>Revenue</h3>
	                            <div class="mb-4">
	                                <canvas id="jsChartRevenue" style="width:100%;"></canvas>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Revenue</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">$696,531.25</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Payments</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">-$45,224.46</div>
	                                </div>
	                            </div>
	                            <a href="" class="btn btn-primary w-100">View Detail</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-6 col-lg-4 mb-4">
	                    <div class="card">
	                        <div class="card-body">
	                            <h3>Services</h3>
	                            <div class="mb-4">
	                                <canvas id="jsChartServices" style="width:100%;"></canvas>
	                            </div>
	                            <div class="overflow-y-auto px-3 max-h-17rem">
	                                <div class="row">
										<div class="col-md-6 mb-2">
											<div class="fw-semibold text-sm">Services</div>
										</div>
										<div class="col-md-6 mb-2">
											<div class="fw-semibold text-sm text-lg-end">No. of Bookings</div>
										</div>
	                                   @forelse ($topServices as $topService)
									   		<div class="col-md-6 mb-2">
												<div class="text-sm">{{$topService['name']}}</div>
											</div>
											<div class="col-md-6 mb-2">
												<div class="text-sm text-lg-end">{{$topService['booking_count']}}</div>
											</div>
											<div class="col-lg-12">
												<hr class="mt-0 mb-2">
											</div>
									   @empty
										No Record Available
									   @endforelse
	                                </div>
	                            </div>
	                            <a href="" class="btn btn-primary w-100">View Detail</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-6 col-lg-4 mb-4">
	                    <div class="card">
	                        <div class="card-body">
	                            <h3>Assignment</h3>
	                            <div class="mb-4">
	                                <canvas id="jsChartAssignment" style="width:100%;"></canvas>
	                            </div>
	                            <div class="overflow-y-auto px-3 max-h-17rem">
	                                <div class="row">
	                                    <div class="col-md-6 mb-2">
	                                        <div class="fw-semibold text-sm">Total Revenue</div>
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="fw-semibold text-sm text-lg-end">$696,531.25</div>
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm">Total Services Rate</div>
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm text-lg-end">$695,571.29</div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <hr class="mt-0 mb-2">
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm">Total Services Rate</div>
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm text-lg-end">$695,571.29</div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <hr class="mt-0 mb-2">
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm">Total Services Rate</div>
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm text-lg-end">$695,571.29</div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <hr class="mt-0 mb-2">
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm">Total Services Rate</div>
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm text-lg-end">$695,571.29</div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <hr class="mt-0 mb-2">
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm">Total Services Rate</div>
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm text-lg-end">$695,571.29</div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <hr class="mt-0 mb-2">
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm">Total Services Rate</div>
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm text-lg-end">$695,571.29</div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <hr class="mt-0 mb-2">
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm">Total Services Rate</div>
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm text-lg-end">$695,571.29</div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <hr class="mt-0 mb-2">
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm">Total Services Rate</div>
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="text-sm text-lg-end">$695,571.29</div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <hr class="mt-0 mb-2">
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="fw-semibold text-sm">Total Payments</div>
	                                    </div>
	                                    <div class="col-md-6 mb-2">
	                                        <div class="fw-semibold text-sm text-lg-end">-$45,224.46</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <a href="" class="btn btn-primary w-100">View Detail</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-6 col-lg-4 mb-4">
	                    <div class="card">
	                        <div class="card-body">
	                            <h3>Invoice</h3>
	                            <div class="mb-4">
	                                <canvas id="jsChartInvoice" style="width:100%;"></canvas>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Companies</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">Revenue</div>
	                                </div>
									@forelse ($topInvoices as $topInvoice)
										<div class="col-md-6 mb-2">
	                                	    <div class="text-sm">{{$topInvoice['name']}}</div>
	                                	</div>
	                                	<div class="col-md-6 mb-2">
	                                	    <div class="text-sm text-lg-end">{{formatPayment($topInvoice['invoices_total'])}}</div>
	                                	</div>
	                                	<div class="col-lg-12">
	                                	    <hr class="mt-0 mb-2">
	                                	</div>
									@empty
										No Record Available
									@endforelse
	                                
									<div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Revenue</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">{{formatPayment($totalInvoiceRevenue)}}</div>
	                                </div>
	                            </div>
	                            <a href="" class="btn btn-primary w-100">View Detail</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-6 col-lg-4 mb-4">
	                    <div class="card">
	                        <div class="card-body">
	                            <h3>Payments</h3>
	                            <div class="mb-4">
	                                <canvas id="jsChartPayments" style="width:100%;"></canvas>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Revenue</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">$696,531.25</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Payments</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">-$45,224.46</div>
	                                </div>
	                            </div>
	                            <a href="" class="btn btn-primary w-100">View Detail</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-6 col-lg-4 mb-4">
	                    <div class="card">
	                        <div class="card-body">
	                            <h3>Referrals</h3>
	                            <div class="mb-4">
	                                <canvas id="jsChartReferrals" style="width:100%;"></canvas>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Revenue</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">$696,531.25</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Payments</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">-$45,224.46</div>
	                                </div>
	                            </div>
	                            <a href="" class="btn btn-primary w-100">View Detail</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-6 col-lg-4 mb-4">
	                    <div class="card">
	                        <div class="card-body">
	                            <h3>Ratings (Pending)</h3>
	                            <div class="mb-4">
	                                <canvas id="jsChartRatingsPending" style="width:100%;"></canvas>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Revenue</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">$696,531.25</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Payments</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">-$45,224.46</div>
	                                </div>
	                            </div>
	                            <a href="" class="btn btn-primary w-100">View Detail</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-6 col-lg-4 mb-4">
	                    <div class="card">
	                        <div class="card-body">
	                            <h3>Cancellations</h3>
	                            <div class="mb-4">
	                                <canvas id="jsChartCancellations" style="width:100%;"></canvas>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Revenue</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">$696,531.25</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm">Total Services Rate</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="text-sm text-lg-end">$695,571.29</div>
	                                </div>
	                                <div class="col-lg-12">
	                                    <hr class="mt-0 mb-2">
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Payments</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">-$45,224.46</div>
	                                </div>
	                            </div>
	                            <a href="" class="btn btn-primary w-100">View Detail</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-6 col-lg-4 mb-4">
	                    <div class="card">
	                        <div class="card-body">
	                            <h3>Top Providers</h3>
	                            <div class="mb-4">
	                                <canvas id="jsChartTopProviders" style="width:100%;"></canvas>
	                            </div>
	                            <div class="row">
									@if($topProviders != null)
									@forelse ($topProviders as $topProvider)
										<div class="col-md-6 mb-2">
	                                	    <div class="text-sm">{{$topProvider}}</div>

	                                	</div>
	                                	<div class="col-md-6 mb-2">
	                                	    <div class="text-sm text-lg-end">$695,571.29</div>
	                                	</div>
	                                	<div class="col-lg-12">
	                                	    <hr class="mt-0 mb-2">
	                                	</div>
									@empty
										No Data Available
									@endforelse
									@endif
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm">Total Payments</div>
	                                </div>
	                                <div class="col-md-6 mb-2">
	                                    <div class="fw-semibold text-sm text-lg-end">-$45,224.46</div>
	                                </div>
	                            </div>
	                            <a href="" class="btn btn-primary w-100">View Detail</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	  
</div>


<script src="/tenant-resources/js/Chart.js"></script>
<script src="/tenant-resources/js/Chart-init.js"></script>
@push('scripts')
<script>
	function updateCharts() {
		updateCompanyChart();
	}
	// Function to update chart data and labels
	function updateCompanyChart() {
    // New data and labels
    const newLabels = @json($companyLabeldata);  
    const newData = @json($companydata);
  
    // Update chart data and labels
    RevenueByCompanyChart.data.labels = newLabels;
    RevenueByCompanyChart.data.datasets[0].data = newData;
  
    // Finally, update the chart
    RevenueByCompanyChart.update();
  }

  // Call the updateCharts function to update the chart data and labels
  updateCharts();
</script>
@endpush
	
