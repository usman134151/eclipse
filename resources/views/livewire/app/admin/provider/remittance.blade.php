<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
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
							  <option>pending</option>
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
								<td><a @click="offcanvasOpen = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
									<path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
									<path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
									<path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
									<defs>
									<linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0150376" stop-color="#C4C4C4"/>
									<stop offset="1" stop-color="white" stop-opacity="0.01"/>
									</linearGradient>
									<linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
									<stop offset="1" stop-opacity="0.01"/>
									</linearGradient>
									</defs>
									</svg>
									</td>
							  </tr>
							  <tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
								  </div>
								</td>
								<td><a @click="offcanvasOpen = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
									<path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
									<path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
									<path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
									<defs>
									<linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0150376" stop-color="#C4C4C4"/>
									<stop offset="1" stop-color="white" stop-opacity="0.01"/>
									</linearGradient>
									<linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
									<stop offset="1" stop-opacity="0.01"/>
									</linearGradient>
									</defs>
									</svg>
									</td>
							  </tr>
							  <tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
								  </div>
								</td>
								<td><a @click="offcanvasOpen = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
									<path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
									<path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
									<path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
									<defs>
									<linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0150376" stop-color="#C4C4C4"/>
									<stop offset="1" stop-color="white" stop-opacity="0.01"/>
									</linearGradient>
									<linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
									<stop offset="1" stop-opacity="0.01"/>
									</linearGradient>
									</defs>
									</svg>
									</td>
							  </tr>
							  <tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
								  </div>
								</td>
								<td><a @click="offcanvasOpen = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
									<path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
									<path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
									<path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
									<defs>
									<linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0150376" stop-color="#C4C4C4"/>
									<stop offset="1" stop-color="white" stop-opacity="0.01"/>
									</linearGradient>
									<linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
									<stop offset="1" stop-opacity="0.01"/>
									</linearGradient>
									</defs>
									</svg>
									</td>
							  </tr>
							  <tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
								  </div>
								</td>
								<td><a @click="offcanvasOpen = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
									<path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
									<path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
									<path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
									<defs>
									<linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0150376" stop-color="#C4C4C4"/>
									<stop offset="1" stop-color="white" stop-opacity="0.01"/>
									</linearGradient>
									<linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
									<stop offset="1" stop-opacity="0.01"/>
									</linearGradient>
									</defs>
									</svg>
									</td>
							  </tr>
							  <tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
								  </div>
								</td>
								<td><a @click="offcanvasOpen = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
									<path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
									<path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
									<path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
									<defs>
									<linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0150376" stop-color="#C4C4C4"/>
									<stop offset="1" stop-color="white" stop-opacity="0.01"/>
									</linearGradient>
									<linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
									<stop offset="1" stop-opacity="0.01"/>
									</linearGradient>
									</defs>
									</svg>
									</td>
							  </tr>
							  <tr role="row" class="odd">
								<td>
									<div class="form-check">
									<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
								  </div>
								</td>
								<td><a @click="offcanvasOpen = true">100995-6</a></td>
								<td>$8,241.67</td>
								<td>11/23/2022 4:18 AM</td>
								<td>12/01/2022</td>
								<td>11/23/2022 4:18 AM</td>
								<td>Mail a Check</td>
								<td>Paid</td>
								<td><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
									<circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
									<path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
									<path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
									<path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
									<defs>
									<linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0150376" stop-color="#C4C4C4"/>
									<stop offset="1" stop-color="white" stop-opacity="0.01"/>
									</linearGradient>
									<linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
									<stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
									<stop offset="1" stop-opacity="0.01"/>
									</linearGradient>
									</defs>
									</svg>
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
</div>