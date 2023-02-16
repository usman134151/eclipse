<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
		<!-- Basic multiple Column Form section start -->
		<section id="multiple-column-form">
		<div class="row">
			<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
					<div class="col-md-12 mb-md-2">
						<p>Here you can review your scheduled payroll based on the assignments, reimbursements, and referrals you've completed during the pay period.</p>
					</div>
					</div>
					<div class="d-flex justify-content-start mb-4">
						<div class="d-inline-flex align-items-center gap-4">
							<!-- Begin : it will be replaced with livewire module-->
							<input type="" class="form-control w-auto js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
							<!-- End : it will be replaced with livewire module -->
						</div>
						<div class="d-inline-flex align-items-center gap-4 mx-4">
							<label for="show_status" class="form-label">Status</label>
							<select class="form-select" id="show_status">
								<option>Pending</option>
							</select>
						</div>
						</div>
					
					<div class="d-flex justify-content-between mb-2">
						<div class="d-inline-flex align-items-center gap-4">
						<label for="show_records_number" class="form-label">Show</label>
						<select class="form-select" id="show_records_number">
							<option>10</option>
							<option>15</option>
							<option>20</option>
							<option>25</option>
						</select>
						</div>
						<div class="d-inline-flex align-items-center gap-4">
						<label for="search" class="form-label fw-semibold">Search</label>
						<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
						</div>
					</div>
					<div class="table-responsive">
						<table id="remittances" class="table table-hover" aria-label="Remittance">
							<thead>
								<tr role="row">
									<th scope="col">
									<div class="form-check">
										<input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="checkbox">
										</div>
									</th>
									<th scope="col">REMITTANCE
									NUMBER</th>
									<th scope="col">TOTAL PAY</th>   
									<th scope="col">ISSUED AT</th>
									<th scope="col">SCHEDULED PAYMENT DATE</th>
									<th scope="col">PAID AT</th>   
									<th scope="col">PAYMENT METHOD</th>
									<th scope="col">PAYMENT STATUS</th>
									<th scope="col">ACTION</th>

							</tr>
							</thead>
							<tbody>
							<tbody>
								<tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
									</div>
								</td>
								<td><a @click="remittanceDetails = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td> 
									<div class="d-flex actions">
									<a href="javascript:void(0)" title="View Assignment" aria-label="View Assignment" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="viewAssignment">
										<x-icon name="view"/>
									</a>
								</div>
							</td>
								</tr>
								<tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
									</div>
								</td>
								<td><a @click="remittanceDetails = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><div class="d-flex actions">
									<a href="javascript:void(0)" title="View Assignment" aria-label="View Assignment" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="viewAssignment">
										<x-icon name="view"/>
									</a>
								</div>
									</td>
								</tr>
								<tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
									</div>
								</td>
								<td><a @click="remittanceDetails = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><div class="d-flex actions">
									<a href="javascript:void(0)" title="View Assignment" aria-label="View Assignment" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="viewAssignment">
										<x-icon name="view"/>
									</a>
								</div>
									</td>
								</tr>
								<tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
									</div>
								</td>
								<td><a @click="remittanceDetails = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><div class="d-flex actions">
									<a href="javascript:void(0)" title="View Assignment" aria-label="View Assignment" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="viewAssignment">
										<x-icon name="view"/>
									</a>
								</div>
									</td>
								</tr>
								<tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
									</div>
								</td>
								<td><a @click="remittanceDetails = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><div class="d-flex actions">
									<a href="javascript:void(0)" title="View Assignment" aria-label="View Assignment" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="viewAssignment">
										<x-icon name="view"/>
									</a>
								</div>
									</td>
								</tr>
								<tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
									</div>
								</td>
								<td><a @click="remittanceDetails = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><div class="d-flex actions">
									<a href="javascript:void(0)" title="View Assignment" aria-label="View Assignment" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="viewAssignment">
										<x-icon name="view"/>
									</a>
								</div>
									</td>
								</tr>
								<tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
									</div>
								</td>
								<td><a @click="remittanceDetails = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><div class="d-flex actions">
									<a href="javascript:void(0)" title="View Assignment" aria-label="View Assignment" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="viewAssignment">
										<x-icon name="view"/>
									</a>
								</div>
									</td>
								</tr>
								
							</tbody>
							</table>                         
					</div>                      
					<div class="d-flex justify-content-between">
					<div>
						<p class="fw-semibold">Showing 1 to 5 of 30 entries</p>
					</div>
					<nav aria-label="Page Navigation">
						<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">Previous
							<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item Specific schedule added by Alex Wonderland"><a class="page-link" href="#">4</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">Next
							<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
						</ul>
					</nav>
					</div>
				</div>
			
			</div>
			</div>
		</div>
		</section>
		<!-- Basic Floating Label Form section end -->
	</div>
	</div>
</div>
<!-- End: Content-->
</div> 
