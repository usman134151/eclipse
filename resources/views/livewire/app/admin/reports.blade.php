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
						<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z" fill="#0A1E46"/>
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
								  <form class="form">
									  <div class="row">
										  <div class="col-md-12 mb-md-2 p-5">
											  <!-- Begin Section One  -->
											  <div class="row mb-4">
												  <div class="col-2">
													  <div class="btn-primary text-center">
													  <svg width="46" height="51" viewBox="0 0 46 51" fill="none" xmlns="http://www.w3.org/2000/svg">
	  <path d="M10 23H15.2V28H10V23ZM10 33H15.2V38H10V33ZM20.4 23H25.6V28H20.4V23ZM20.4 33H25.6V38H20.4V33ZM30.8 23H36V28H30.8V23ZM30.8 33H36V38H30.8V33Z" fill="white"/>
	  <path d="M5.11111 51H40.8889C43.7077 51 46 48.7127 46 45.9V10.2C46 7.38735 43.7077 5.1 40.8889 5.1H35.7778V0H30.6667V5.1H15.3333V0H10.2222V5.1H5.11111C2.29233 5.1 0 7.38735 0 10.2V45.9C0 48.7127 2.29233 51 5.11111 51ZM40.8889 15.3L40.8914 45.9H5.11111V15.3H40.8889Z" fill="white"/>
	  </svg>
	  <p>
	  Custom<br>
	  Range
	  </p>
													  </div>
												  </div>
												  <div class="col-3">
													  <div class="d-flex align-items-center">
														  <div>
															  <p>From:</p>
															  <p>To:</p>
														  </div>
														  <div class="mx-2">
															  <p><b> 01 Aug, 2022</b></p>
															  <p><b> 10 Aug, 2022</b></p>
														  </div>
													  </div>
												  </div>
												  <div class="col-2">
													  <button class="btn btn-primary mb-2">
														  Last 7 Days
													  </button>
													  <button class="btn btn-primary">
														 Last Month
													  </button>
												  </div>
												  <div class="col-2">
												  <button class="btn btn-primary mb-2">
														  Last 30 Days
													  </button>
													  <button class="btn btn-primary">
														 This Year
													  </button>
												  </div>
												  <div class="col-2">
												  <button class="btn btn-primary mb-2">
														  This Month
													  </button>
													  <button class="btn btn-primary">
														 Last Year
													  </button>
												  </div>
												  <div class="col-12">
													  <div class="d-inline-flex align-items-center">
														  <select class="form-select rounded" aria-label="Advance Filter" id="show_status">
															  <option>Advance Filter</option>
														  </select>
													  </div>
												  </div>                                            
											  </div>
											  <!-- End Section One  -->
	  
											  <!-- Begin SEction Two -->
											  <div class="12 text-center">
											  <img src="/html-prototype/images/temp/img-placeholder-revenue.png" class="img-fluid" alt="Revenue Chart"/>
											  </div>
											  <!-- End SEction Two -->
										  </div>
									  </div>
								  </form>
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
										  <img src="/html-prototype/images/temp/img-placeholder-graph.png" class="img-fluid" alt="Revenue Chart"/>
										  </div>
									 </div>
								  </div>
							  </div>
						  </div>
					  </div>
	  
	  
					  <div class="row">
						  <div class="col-12">
							  <div class="row mb-2">
							  <div class="col-4">
							  <img src="/html-prototype/images/temp/img-placeholder-table.png" class="img-fluid" alt="Revenue Chart"/>
							  </div>
							  <div class="col-4">
							  <img src="/html-prototype/images/temp/img-placeholder-table(2).png" class="img-fluid" alt="Revenue Chart"/>
							  </div>
							  <div class="col-4">
							  <img src="/html-prototype/images/temp/img-placeholder-table(3).png" class="img-fluid" alt="Revenue Chart"/>
							  </div>
							  </div>
							  <div class="row mb-2">
							  <div class="col-4">
							  <img src="/html-prototype/images/temp/img-placeholder-table(4).png" class="img-fluid" alt="Revenue Chart"/>
							  </div>
							  <div class="col-4">
							  <img src="/html-prototype/images/temp/img-placeholder-table(5).png" class="img-fluid" alt="Revenue Chart"/>
							  </div>
							  <div class="col-4">
							  <img src="/html-prototype/images/temp/img-placeholder-table(6).png" class="img-fluid" alt="Revenue Chart"/>
							  </div>
							  </div>
							  <div class="row mb-2">
							  <div class="col-4">
							  <img src="/html-prototype/images/temp/img-placeholder-table(7).png" class="img-fluid" alt="Revenue Chart"/>
							  </div>
							  <div class="col-4">
							  <img src="/html-prototype/images/temp/img-placeholder-table(8).png" class="img-fluid" alt="Revenue Chart"/>
							  </div>
							  <div class="col-4">
							  <img src="/html-prototype/images/temp/img-placeholder-table(9).png" class="img-fluid" alt="Revenue Chart"/>
							  </div>
							  </div>
						  </div>
	  
					  </div>
	  </section>
	  
</div>
