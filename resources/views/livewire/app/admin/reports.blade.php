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
						<svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23">
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
	                                            <svg width="46" height="51" viewBox="0 0 46 51" fill="none" xmlns="http://www.w3.org/2000/svg">
	                                                <path d="M10 23H15.2V28H10V23ZM10 33H15.2V38H10V33ZM20.4 23H25.6V28H20.4V23ZM20.4 33H25.6V38H20.4V33ZM30.8 23H36V28H30.8V23ZM30.8 33H36V38H30.8V33Z" fill="white"/>
	                                                <path d="M5.11111 51H40.8889C43.7077 51 46 48.7127 46 45.9V10.2C46 7.38735 43.7077 5.1 40.8889 5.1H35.7778V0H30.6667V5.1H15.3333V0H10.2222V5.1H5.11111C2.29233 5.1 0 7.38735 0 10.2V45.9C0 48.7127 2.29233 51 5.11111 51ZM40.8889 15.3L40.8914 45.9H5.11111V15.3H40.8889Z" fill="white"/>
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
	                                        <button class="btn btn-primary w-100">
	                                        Last 7 Days
	                                        </button>
	                                        <button class="btn btn-primary w-100">
	                                        Last Month
	                                        </button>
	                                    </div>
	                                    <div class="col-2 d-flex flex-column gap-4 align-self-center mb-4">
	                                        <button class="btn btn-primary w-100">
	                                        Last 30 Days
	                                        </button>
	                                        <button class="btn btn-primary w-100">
	                                        This Year
	                                        </button>
	                                    </div>
	                                    <div class="col-2 d-flex flex-column gap-4 align-self-center mb-4">
	                                        <button class="btn btn-primary w-100">
	                                        This Month
	                                        </button>
	                                        <button class="btn btn-primary w-100">
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
	                                                <path d="M14.534 1.36L13.309 0H3.662C2.966 0 2.697 0.516 2.697 0.919V4.549H4.05V1.653C4.05 1.499 4.18 1.369 4.33 1.369H11.233C11.385 1.369 11.461 1.396 11.461 1.521V6.341H16.374C16.567 6.341 16.642 6.441 16.642 6.587V18.357C16.642 18.603 16.542 18.64 16.392 18.64H4.33C4.25562 18.6382 4.18485 18.6076 4.13261 18.5546C4.08037 18.5016 4.05076 18.4304 4.05 18.356V17.28H2.706V18.975C2.688 19.575 3.008 20 3.662 20H17.06C17.76 20 17.999 19.493 17.999 19.031V5.187L17.649 4.807L14.533 1.361L14.534 1.36ZM12.836 1.52L13.223 1.954L15.819 4.807L15.962 4.98H13.309C13.109 4.98 12.982 4.947 12.929 4.88C12.876 4.815 12.845 4.71 12.836 4.567V1.52ZM11.746 10.667H16.323V12.001H11.745V10.667H11.746ZM11.746 8.001H16.323V9.334H11.745V8L11.746 8.001ZM11.746 13.334H16.323V14.668H11.745V13.334H11.746ZM0 5.626V16.293H10.465V5.626H0ZM5.233 11.83L4.593 12.808H5.233V14H2.016L4.35 10.49L2.282 7.334H4.01L5.234 9.17L6.457 7.334H8.184L6.112 10.49L8.449 14H6.656L5.233 11.83Z" fill="white"/>
	                                            </svg>
	                                        </a>
	                                        <a href="" class="btn btn-warning btn-has-icon mb-4">
	                                            Export
	                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
	                                                <path d="M18 17.5V5.625L11.25 0H3C2.20435 0 1.44129 0.263392 0.87868 0.732233C0.31607 1.20107 0 1.83696 0 2.5V17.5C0 18.163 0.31607 18.7989 0.87868 19.2678C1.44129 19.7366 2.20435 20 3 20H15C15.7956 20 16.5587 19.7366 17.1213 19.2678C17.6839 18.7989 18 18.163 18 17.5ZM11.25 3.75C11.25 4.24728 11.4871 4.72419 11.909 5.07583C12.331 5.42746 12.9033 5.625 13.5 5.625H16.5V17.5C16.5 17.8315 16.342 18.1495 16.0607 18.3839C15.7794 18.6183 15.3978 18.75 15 18.75H3C2.60218 18.75 2.22064 18.6183 1.93934 18.3839C1.65804 18.1495 1.5 17.8315 1.5 17.5V2.5C1.5 2.16848 1.65804 1.85054 1.93934 1.61612C2.22064 1.3817 2.60218 1.25 3 1.25H11.25V3.75Z" fill="white"/>
	                                                <path d="M3.90426 17.6066C3.6119 17.5092 3.37635 17.321 3.24726 17.0816C2.95476 16.5966 3.05226 16.1116 3.36726 15.7041C3.66426 15.3204 4.15626 14.9941 4.71276 14.7204C5.41767 14.3872 6.16279 14.117 6.93576 13.9141C7.53605 13.0149 8.06809 12.0851 8.52876 11.1304C8.25333 10.6088 8.03738 10.0669 7.88376 9.51162C7.75476 9.01162 7.70526 8.51662 7.81476 8.09162C7.92726 7.64912 8.22576 7.25162 8.78976 7.06287C9.07776 6.96662 9.38976 6.91287 9.69276 6.96662C9.84517 6.99366 9.98846 7.04863 10.1122 7.12755C10.236 7.20646 10.3371 7.30734 10.4083 7.42287C10.5403 7.62787 10.5883 7.86787 10.5988 8.09537C10.6093 8.33037 10.5808 8.59037 10.5283 8.86287C10.4023 9.50037 10.1233 10.2804 9.74826 11.1054C10.1621 11.8429 10.654 12.5482 11.2183 13.2129C11.8859 13.1689 12.5574 13.1899 13.2193 13.2754C13.7653 13.3579 14.3203 13.5191 14.6593 13.8566C14.8393 14.0366 14.9488 14.2566 14.9593 14.5041C14.9698 14.7441 14.8888 14.9816 14.7523 15.2079C14.634 15.4175 14.4507 15.5971 14.2213 15.7279C13.9945 15.8512 13.7267 15.9115 13.4563 15.9004C12.9598 15.8829 12.4753 15.6554 12.0568 15.3791C11.5479 15.0285 11.0893 14.63 10.6903 14.1916C9.67589 14.2876 8.67356 14.4574 7.69476 14.6991C7.24653 15.3616 6.73487 15.9928 6.16476 16.5866C5.72676 17.0241 5.25126 17.4066 4.77426 17.5704C4.50019 17.6737 4.18933 17.6866 3.90426 17.6066ZM5.97276 15.2304C5.72376 15.3254 5.49276 15.4254 5.28426 15.5279C4.79226 15.7704 4.47276 16.0066 4.31376 16.2116C4.17276 16.3929 4.16976 16.5241 4.25376 16.6629C4.26876 16.6904 4.28376 16.7079 4.29276 16.7179C4.31066 16.7139 4.3282 16.7089 4.34526 16.7029C4.55076 16.6329 4.87776 16.4091 5.29776 15.9879C5.53663 15.7442 5.76187 15.4914 5.97276 15.2304ZM8.43276 13.5679C8.93365 13.4705 9.43906 13.39 9.94776 13.3266C9.67464 12.9783 9.4194 12.6205 9.18276 12.2541C8.94749 12.6974 8.69739 13.135 8.43276 13.5666V13.5679ZM12.1018 14.1304C12.3268 14.3341 12.5458 14.5054 12.7543 14.6429C13.1143 14.8804 13.3648 14.9591 13.5013 14.9629C13.5378 14.9669 13.5749 14.9602 13.6063 14.9441C13.6687 14.9031 13.7172 14.8492 13.7473 14.7879C13.8006 14.7117 13.831 14.6259 13.8358 14.5379C13.8349 14.5085 13.821 14.4804 13.7968 14.4591C13.7188 14.3816 13.4968 14.2691 13.0198 14.1979C12.7163 14.1556 12.4094 14.1334 12.1018 14.1316V14.1304ZM9.11676 9.74787C9.243 9.40852 9.3432 9.06282 9.41676 8.71287C9.46326 8.47787 9.48126 8.28412 9.47376 8.13162C9.47417 8.04748 9.45796 7.96387 9.42576 7.88412C9.35072 7.89186 9.27745 7.90871 9.20826 7.93412C9.07776 7.97787 8.97126 8.06662 8.91426 8.28787C8.85426 8.52787 8.86926 8.87412 8.98326 9.31537C9.01926 9.45412 9.06426 9.59912 9.11826 9.74787H9.11676Z" fill="white"/>
	                                            </svg>
	                                        </a>
	                                    </div>
	                                </div>
	                                <div class="col-lg-6 mb-4 text-center">
	                                    <div class="text-center">
	                                        <label class="form-label">Revenue by Company</label>
	                                        <div class="text-muted text-sm mb-2">$29,488.01</div>
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
	            </div>
	        </div>
	    </div>
	</section>
	  
</div>


<script src="/tenant/js/Chart.js"></script>
<script src="/tenant/js/Chart-init.js"></script>