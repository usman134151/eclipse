<div x-data="{addDocuments: false, assignProvider: false}">
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">Assignment Details</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="#">
									<x-icon name="home"/>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="javascript:void(0)">
									Assignments
								</a>
							</li>
							<li class="breadcrumb-item">
								Assignment Details
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-body">
		<div class="card">
			<div class="card-body">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="booking-details-tab" data-bs-toggle="tab" data-bs-target="#booking-details" type="button" role="tab" aria-controls="booking-details" aria-selected="true">
							<x-icon name="tablet"/>
							<span>Booking Details</span>
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="assigned-providers-tab" data-bs-toggle="tab" data-bs-target="#assigned-providers" type="button" role="tab" aria-controls="assigned-providers" aria-selected="false">
							<x-icon name="gray-user"/>
							<span>Assigned Providers</span>
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="attachments-tab" data-bs-toggle="tab" data-bs-target="#attachments" type="button" role="tab" aria-controls="attachments" aria-selected="false">
							<x-icon name="gray-drive"/>
							<span>Attachments</span>
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="payment-details-tab" data-bs-toggle="tab" data-bs-target="#payment-details" type="button" role="tab" aria-controls="payment-details" aria-selected="false">
							<x-icon name="gray-payment"/>
							<span>Payment Details</span>
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="assignment-log-tab" data-bs-toggle="tab" data-bs-target="#assignment-log" type="button" role="tab" aria-controls="assignment-log" aria-selected="false">
							<x-icon name="gray-journal"/>
							<span>Assignment Log</span>
						</button>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="booking-details" role="tabpanel" aria-labelledby="booking-details-tab" tabindex="0">
						<div class="p-4 border border-dark rounded bg-lighter mb-4">
							<div class="row">
								<div class="col-lg col-12 mb-4">
									<div class="mb-4">
										<label class="form-label text-primary">Booking Title</label>
										<div class="font-family-tertiary value">
											Language Interpreter
										</div>
									</div>
									<div>
										<label class="form-label text-primary">Days Pending</label>
										<div class="font-family-tertiary value">05 Days</div>
									</div>
								</div>
								<div class="col-lg col-12 mb-4">
									<div class="mb-4">
										<label class="form-label text-primary">Days Until Service</label>
										<div class="font-family-tertiary value">10 Days</div>
									</div>
									<div class="d-flex gap-3 align-items-center">
										<label class="col-form-label text-primary mb-lg-0">
											Status:
										</label>
										<div>
											<select class="form-select form-select-sm">
												<option>Pending</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg col-12 mb-4">
									<div class="mb-4">
										<label class="form-label text-primary">Providers</label>
										<div class="d-flex flex-column gap-1">
											<div class="font-family-tertiary value">
												Total Assigned: 03
											</div>
											<div class="font-family-tertiary value">
												Total Requested: 07
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg col-12 mb-4">
									<div class="mb-4">
										<label class="form-label text-primary">Pending Details</label>
										<div class="d-flex flex-column gap-1">
											<div class="font-family-tertiary value">
												Requests from Users
											</div>
											<div class="font-family-tertiary value">
												Attachments Missing
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg col-12 mb-4">
									<div class="row mb-3">
										<div class="col-lg-5">
											<label class="form-label-sm">
												Broadcast
											</label>
										</div>
										<div class="col-lg-7">
											<div class="form-check form-switch js-form-switch-toggle form-switch-column">
												<input class="form-check-input" type="checkbox" role="switch" id="AutoNotifyBroadcast">
												<label class="form-check-label js-hidden-switch-toggle-content d-none" for="AutoNotifyBroadcast">
													Auto-notify
												</label>
												<label class="form-check-label js-hidden-switch-toggle-content" for="AutoNotifyBroadcast">
													Manual-assign
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5">
											<label class="form-label-sm">
												Assign
											</label>
										</div>
										<div class="col-lg-7">
											<div class="form-check form-switch js-form-switch-toggle form-switch-column">
												<input class="form-check-input" type="checkbox" role="switch" id="AutoNotifyAssign" checked>
												<label class="form-check-label js-hidden-switch-toggle-content d-none" for="AutoNotifyAssign">
													Auto-notify
												</label>
												<label class="form-check-label js-hidden-switch-toggle-content" for="AutoNotifyAssign">
													Manual-assign
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="d-lg-flex gap-3 justify-content-center">
										<a href="#" class="btn btn-has-icon btn-primary rounded" data-bs-toggle="modal" data-bs-target="#ProviderMessageModal">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M2.66699 13.5V16.6383L3.92949 15.8808L7.89783 13.5H11.8337C12.7528 13.5 13.5003 12.7525 13.5003 11.8333V5.16667C13.5003 4.2475 12.7528 3.5 11.8337 3.5H1.83366C0.914492 3.5 0.166992 4.2475 0.166992 5.16667V11.8333C0.166992 12.7525 0.914492 13.5 1.83366 13.5H2.66699ZM1.83366 5.16667H11.8337V11.8333H7.43616L4.33366 13.695V11.8333H1.83366V5.16667Z" fill="white"/>
												<path d="M15.1667 0.164062H5.16667C4.2475 0.164062 3.5 0.911562 3.5 1.83073H13.5C14.4192 1.83073 15.1667 2.57823 15.1667 3.4974V10.1641C16.0858 10.1641 16.8333 9.41656 16.8333 8.4974V1.83073C16.8333 0.911562 16.0858 0.164062 15.1667 0.164062Z" fill="white"/>
											</svg>
											Message Providers
										</a>
										<a href="#" class="btn btn-has-icon btn-primary rounded">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10.3431 12.0072C9.26471 12.0072 8.3415 11.6232 7.57353 10.8552C6.80556 10.0873 6.42157 9.16406 6.42157 8.08563C6.42157 7.0072 6.80556 6.084 7.57353 5.31602C8.3415 4.54805 9.26471 4.16406 10.3431 4.16406C11.4216 4.16406 12.3448 4.54805 13.1127 5.31602C13.8807 6.084 14.2647 7.0072 14.2647 8.08563C14.2647 9.16406 13.8807 10.0873 13.1127 10.8552C12.3448 11.6232 11.4216 12.0072 10.3431 12.0072ZM2.5 19.8503V17.1052C2.5 16.566 2.63889 16.0595 2.91667 15.5856C3.19444 15.1118 3.57843 14.7523 4.06863 14.5072C4.90196 14.0824 5.8415 13.7229 6.88725 13.4288C7.93301 13.1347 9.08497 12.9876 10.3431 12.9876H10.6863C10.7843 12.9876 10.8824 13.0039 10.9804 13.0366C10.8497 13.3307 10.7392 13.6373 10.649 13.9562C10.5595 14.2745 10.4902 14.6052 10.4412 14.9484H10.3431C9.18301 14.9484 8.14118 15.0954 7.21765 15.3896C6.29477 15.6837 5.53922 15.9778 4.95098 16.2719C4.80392 16.3536 4.68562 16.468 4.59608 16.615C4.50588 16.7621 4.46078 16.9255 4.46078 17.1052V17.8896H10.6373C10.7353 18.2327 10.866 18.5719 11.0294 18.9072C11.1928 19.2418 11.3725 19.5562 11.5686 19.8503H2.5ZM16.2255 20.8307L15.9314 19.3601C15.7353 19.2784 15.5513 19.1928 15.3794 19.1033C15.2082 19.0131 15.0327 18.9026 14.8529 18.7719L13.4314 19.2131L12.451 17.5464L13.5784 16.566C13.5458 16.3373 13.5294 16.1248 13.5294 15.9288C13.5294 15.7327 13.5458 15.5203 13.5784 15.2915L12.451 14.3111L13.4314 12.6445L14.8529 13.0856C15.0327 12.9549 15.2082 12.8445 15.3794 12.7543C15.5513 12.6647 15.7353 12.5791 15.9314 12.4974L16.2255 11.0268H18.1863L18.4804 12.4974C18.6765 12.5791 18.8605 12.669 19.0324 12.767C19.2036 12.865 19.3791 12.9876 19.5588 13.1347L20.9804 12.6445L21.9608 14.3601L20.8333 15.3405C20.866 15.5366 20.8824 15.7409 20.8824 15.9533C20.8824 16.1657 20.866 16.3699 20.8333 16.566L21.9608 17.5464L20.9804 19.2131L19.5588 18.7719C19.3791 18.9026 19.2036 19.0131 19.0324 19.1033C18.8605 19.1928 18.6765 19.2784 18.4804 19.3601L18.1863 20.8307H16.2255ZM17.2059 17.8896C17.7451 17.8896 18.2069 17.6977 18.5912 17.3141C18.9748 16.9297 19.1667 16.468 19.1667 15.9288C19.1667 15.3896 18.9748 14.9278 18.5912 14.5435C18.2069 14.1598 17.7451 13.968 17.2059 13.968C16.6667 13.968 16.2052 14.1598 15.8216 14.5435C15.4373 14.9278 15.2451 15.3896 15.2451 15.9288C15.2451 16.468 15.4373 16.9297 15.8216 17.3141C16.2052 17.6977 16.6667 17.8896 17.2059 17.8896ZM10.3431 10.0464C10.8824 10.0464 11.3441 9.85426 11.7284 9.46994C12.1121 9.08628 12.3039 8.62485 12.3039 8.08563C12.3039 7.54642 12.1121 7.08498 11.7284 6.70132C11.3441 6.317 10.8824 6.12485 10.3431 6.12485C9.80392 6.12485 9.34248 6.317 8.95882 6.70132C8.57451 7.08498 8.38235 7.54642 8.38235 8.08563C8.38235 8.62485 8.57451 9.08628 8.95882 9.46994C9.34248 9.85426 9.80392 10.0464 10.3431 10.0464Z" fill="white"/>
											</svg>
											Manage Providers
										</a>
										<a href="#" class="btn btn-has-icon btn-primary rounded">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8.93739 10.2322C11.394 10.2322 13.3855 8.24071 13.3855 5.78407C13.3855 3.32744 11.394 1.33594 8.93739 1.33594C6.48076 1.33594 4.48926 3.32744 4.48926 5.78407C4.48926 8.24071 6.48076 10.2322 8.93739 10.2322Z" stroke="white" stroke-width="2"/>
												<path d="M13.3855 19.1316H2.94663C2.69432 19.1317 2.44488 19.0781 2.21487 18.9744C1.98486 18.8707 1.77953 18.7192 1.61253 18.5301C1.44552 18.3409 1.32065 18.1185 1.2462 17.8774C1.17176 17.6363 1.14944 17.3821 1.18072 17.1318L1.52768 14.3526C1.60836 13.7069 1.92215 13.1129 2.41004 12.6824C2.89793 12.2519 3.5263 12.0144 4.17699 12.0146H4.48925M15.1648 11.125V16.4628M12.4959 13.7939H17.8337" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
											Invite Providers
										</a>
										<a href="#" class="btn btn-has-icon btn-primary rounded">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8.93739 10.2322C11.394 10.2322 13.3855 8.24071 13.3855 5.78407C13.3855 3.32744 11.394 1.33594 8.93739 1.33594C6.48076 1.33594 4.48926 3.32744 4.48926 5.78407C4.48926 8.24071 6.48076 10.2322 8.93739 10.2322Z" stroke="white" stroke-width="2"/>
												<path d="M13.3855 19.1316H2.94663C2.69432 19.1317 2.44488 19.0781 2.21487 18.9744C1.98486 18.8707 1.77953 18.7192 1.61253 18.5301C1.44552 18.3409 1.32065 18.1185 1.2462 17.8774C1.17176 17.6363 1.14944 17.3821 1.18072 17.1318L1.52768 14.3526C1.60836 13.7069 1.92215 13.1129 2.41004 12.6824C2.89793 12.2519 3.5263 12.0144 4.17699 12.0146H4.48925M15.1648 11.125V16.4628M12.4959 13.7939H17.8337" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
											View Assigned Admin-staff
										</a>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="row mb-4">
								<div class="col-lg-12">
									<div class="d-lg-flex gap-3 justify-content-center">
										<a href="#" class="btn btn-has-icon btn-primary rounded">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M2.66699 13.5V16.6383L3.92949 15.8808L7.89783 13.5H11.8337C12.7528 13.5 13.5003 12.7525 13.5003 11.8333V5.16667C13.5003 4.2475 12.7528 3.5 11.8337 3.5H1.83366C0.914492 3.5 0.166992 4.2475 0.166992 5.16667V11.8333C0.166992 12.7525 0.914492 13.5 1.83366 13.5H2.66699ZM1.83366 5.16667H11.8337V11.8333H7.43616L4.33366 13.695V11.8333H1.83366V5.16667Z" fill="white"/>
												<path d="M15.1667 0.164062H5.16667C4.2475 0.164062 3.5 0.911562 3.5 1.83073H13.5C14.4192 1.83073 15.1667 2.57823 15.1667 3.4974V10.1641C16.0858 10.1641 16.8333 9.41656 16.8333 8.4974V1.83073C16.8333 0.911562 16.0858 0.164062 15.1667 0.164062Z" fill="white"/>
											</svg>
											Message Requester
										</a>
										<a href="#" class="btn btn-has-icon btn-outline-dark rounded">
											<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1.9 18.9969H13.3C14.3479 18.9969 15.2 18.1447 15.2 17.0969V5.69688C15.2 4.64903 14.3479 3.79688 13.3 3.79688H1.9C0.85215 3.79688 0 4.64903 0 5.69688V17.0969C0 18.1447 0.85215 18.9969 1.9 18.9969ZM1.9 5.69688H13.3L13.3019 17.0969H1.9V5.69688Z" fill="url(#paint0_linear_8523_15770)"/>
												<path d="M17.1002 0H5.7002V1.9H17.1002V13.3H19.0002V1.9C19.0002 0.85215 18.148 0 17.1002 0Z" fill="url(#paint1_linear_8523_15770)"/>
												<defs>
													<linearGradient id="paint0_linear_8523_15770" x1="7.6" y1="3.79687" x2="13.6982" y2="3.79687" gradientUnits="userSpaceOnUse">
														<stop stop-color="#213969"/>
														<stop offset="1" stop-color="#204387"/>
													</linearGradient>
													<linearGradient id="paint1_linear_8523_15770" x1="12.3502" y1="0" x2="17.6861" y2="0" gradientUnits="userSpaceOnUse">
														<stop stop-color="#213969"/>
														<stop offset="1" stop-color="#204387"/>
													</linearGradient>
												</defs>
											</svg>
											Duplicate
										</a>
										<a href="#" class="btn btn-has-icon btn-primary rounded">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="white"/>
											</svg>
											Reschedule
										</a>
										<a href="#" class="btn btn-has-icon btn-primary rounded" data-bs-toggle="modal" data-bs-target="#UnassignModal">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18.9767 1.02282C18.3217 0.367918 17.4334 0 16.5071 0C15.5809 0 14.6925 0.367918 14.0376 1.02282L1.68403 13.3774C1.32366 13.7376 1.07508 14.1943 0.968237 14.6924L0.0159878 19.1354C-0.00912444 19.2521 -0.00459501 19.3732 0.0291622 19.4877C0.0629195 19.6022 0.124828 19.7064 0.209233 19.7908C0.293637 19.8752 0.397846 19.9371 0.512339 19.9708C0.626832 20.0046 0.747959 20.0091 0.864654 19.984L5.30801 19.0318C5.80596 18.9249 6.26241 18.6763 6.62244 18.3161L18.9774 5.96223C19.6322 5.30722 20 4.419 20 3.49288C20 2.56676 19.6322 1.67854 18.9774 1.02353L18.9767 1.02282ZM15.0477 2.03284C15.4377 1.66036 15.958 1.45529 16.4973 1.46148C17.0366 1.46767 17.5521 1.68464 17.9334 2.06597C18.3148 2.44731 18.5318 2.96273 18.538 3.50198C18.5442 4.04123 18.3391 4.5615 17.9666 4.95149L17.3236 5.59508L14.4047 2.67643L15.0477 2.03284ZM13.3946 3.68717L16.3135 6.6051L5.61304 17.3061C5.44747 17.4716 5.2376 17.5857 5.00869 17.6347L1.64331 18.3561L2.36482 14.9917C2.41382 14.7629 2.52793 14.553 2.69343 14.3874L13.3932 3.68717H13.3946Z" fill="white"/>
											</svg>
											Edit
										</a>
										<a href="#" class="btn btn-has-icon btn-primary rounded">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10 0C4.48615 0 0 4.48615 0 10C0 15.5138 4.48615 20 10 20C15.5138 20 20 15.5138 20 10C20 4.48615 15.5138 0 10 0ZM10 1.53846C14.6823 1.53846 18.4615 5.31769 18.4615 10C18.4615 14.6823 14.6823 18.4615 10 18.4615C5.31769 18.4615 1.53846 14.6823 1.53846 10C1.53846 5.31769 5.31769 1.53846 10 1.53846ZM7.09231 5.98462L5.98462 7.09231L8.89538 10L5.98615 12.9077L7.09385 14.0154L10 11.1054L12.9077 14.0131L14.0154 12.9077L11.1054 10L14.0131 7.09231L12.9077 5.98462L10 8.89538L7.09231 5.98615V5.98462Z" fill="white"/>
											</svg>
											Cancel
										</a>
										<a href="#" class="btn btn-has-icon btn-primary rounded">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18 0H2C0.9 0 0.00999999 0.9 0.00999999 2L0 20L4 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM18 14H3.17L2.58 14.59L2 15.17V2H18V14ZM9 10H11V12H9V10ZM9 4H11V8H9V4Z" fill="white"/>
											</svg>
											Review Feedback
										</a>
									</div>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-12">
									<div class="d-lg-flex justify-content-between align-items-center mb-5">
										<h2 class="mb-lg-0">Requester Detail </h2>
										<div class="d-flex gap-3">
											<div>
												<button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
													<span>
														<svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M10.001 0.5V8.625C10.001 9.12228 10.1985 9.5992 10.5501 9.95083C10.9018 10.3025 11.3787 10.5 11.876 10.5H20.001V17.6963L18.3847 16.08C18.2686 15.9639 18.1307 15.8719 17.979 15.8091C17.8273 15.7463 17.6647 15.7141 17.5005 15.7141C17.3363 15.7142 17.1738 15.7466 17.0221 15.8095C16.8705 15.8723 16.7327 15.9645 16.6166 16.0806C16.5005 16.1968 16.4085 16.3346 16.3457 16.4863C16.2829 16.638 16.2507 16.8006 16.2507 16.9648C16.2508 17.129 16.2832 17.2916 16.3461 17.4432C16.4089 17.5949 16.5011 17.7327 16.6172 17.8488L18.0185 19.25H12.501C12.1695 19.25 11.8515 19.3817 11.6171 19.6161C11.3827 19.8505 11.251 20.1685 11.251 20.5C11.251 20.8315 11.3827 21.1495 11.6171 21.3839C11.8515 21.6183 12.1695 21.75 12.501 21.75H18.0185L16.6172 23.1513C16.3827 23.3856 16.2508 23.7036 16.2507 24.0352C16.2506 24.3668 16.3822 24.6848 16.6166 24.9194C16.851 25.1539 17.1689 25.2858 17.5005 25.2859C17.8321 25.286 18.1502 25.1544 18.3847 24.92L19.9797 23.3238C19.9011 23.9256 19.6063 24.4783 19.1502 24.8787C18.6941 25.2791 18.1079 25.5 17.501 25.5H2.50098C1.83794 25.5 1.20205 25.2366 0.733209 24.7678C0.264369 24.2989 0.000976563 23.663 0.000976562 23V3C0.000976562 2.33696 0.264369 1.70107 0.733209 1.23223C1.20205 0.763392 1.83794 0.5 2.50098 0.5H10.001ZM20.001 17.6963L21.9197 19.6163C22.1541 19.8507 22.2857 20.1685 22.2857 20.5C22.2857 20.8315 22.1541 21.1493 21.9197 21.3838L20.001 23.3038V17.6963ZM12.501 0.55375C12.9746 0.654194 13.4088 0.889989 13.751 1.2325L19.2685 6.75C19.611 7.09216 19.8468 7.5264 19.9472 8H12.501V0.55375Z"></path>
														</svg>
													</span>
												</button>
											</div>
											<div class="d-flex gap-2 align-items-center">
												<input type="" name="" class="form-control" placeholder="Enter Email">
												<button class="btn btn-primary px-4 rounded">
													Send
												</button>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Assignment No:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">101929</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Booking Title:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														Language Interpreter
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Start Time:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														10/25/2022 4:20 PM
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">End Time:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														10/25/2022 8:20 PM
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Duration:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														4 Hours 0 Minutes
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Frequency:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">One Time</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Industry:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														Information Technology
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Company:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														Software Agency
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Requester:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														<a href="#">Mr. Ali Ahmed</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Supervisor:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														<a href="#">Mr. Ali Ahmed</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">
														Billing Manager:
													</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														<a href="#">Mr. Ali Ahmed</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">
														Point of contact:
													</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														Mr. Ali Ahmed
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Phone Number:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														(923) 023-9683
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Requester Detail -->
							<!-- Service 1 -->
							<div class="row">
								<div class="col-lg-12">
									<div class="d-lg-flex justify-content-between align-items-center mb-5">
										<h2 class="mb-lg-0">Service 1</h2>
									</div>
									<div class="row">
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Accommodation:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														Spoken Language Interpreting Services
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Service:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														English to French Interpreting
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Specialization:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">Legal</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Service Type:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">Virtual</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">
														Number of Providers:
													</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">10</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">
														Service Consumer:
													</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														<a href="#">Thomas Charles</a> , <a href="#">Richard Payne</a> , <a href="#">Jennifer Summers</a> , <a href="#">Lori Wells</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">
														Participants:
													</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														<a href="#">Thomas Charles</a> , <a href="#">Richard Payne</a> , <a href="#">Jennifer Summers</a> , <a href="#">Lori Wells</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Service 1 -->
							<!-- Service 1 Meeting Detail -->
							<div class="row mb-4">
								<div class="col-lg-12">
									<div class="d-lg-flex justify-content-between align-items-center mb-5">
										<h2 class="mb-lg-0">Service 1 Meeting Detail</h2>
									</div>
									<div class="row">
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Meeting Name:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="d-flex align-items-center gap-2">
														<div class="font-family-tertiary">
															Spoken Language Interpreting Services
														</div>
														<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#MeetingLinksModal">
															<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
															</svg>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Meeting Link:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="d-flex align-items-center gap-2">
														<div class="font-family-tertiary text-primary">https://meet.google.com/xxxxxxxx</div>
														<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
															<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
															</svg>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">
														Meeting Phone Number:
													</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														(923) 023-9683
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">
														Meeting Passcode:
													</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">********</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Status:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">Active</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">Created:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">
														10/15/2022 12:20 PM
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Service 1 Meeting Detail -->
							<!-- Service 2 Meeting Detail -->
							<div class="row mb-4 has-map">
								<div class="col-lg-12">
									<div class="d-lg-flex justify-content-between align-items-center mb-5">
										<h2 class="mb-lg-0">Service 2 Meeting Detail</h2>
									</div>
									<div class="row">
										<div class="col-lg-10 mb-3">
											<div class="row">
												<div class="col-lg-4">
													<label class="col-form-label">Location:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="d-flex gap-2">
														<div class="font-family-tertiary">
															Mrs Smith 98 Shirley Street Appartment No. 45 PIMPAMA QLD 4209 AUSTRALIA
														</div>
														<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
															<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
															</svg>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-10 mb-3">
											<div class="row">
												<div class="col-lg-4">
													<label class="col-form-label">City:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">City Name</div>
												</div>
											</div>
										</div>
										<div class="col-lg-10 mb-3">
											<div class="row">
												<div class="col-lg-4">
													<label class="col-form-label">State:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">State Name</div>
												</div>
											</div>
										</div>
										<div class="col-lg-10 mb-3">
											<div class="row">
												<div class="col-lg-4">
													<label class="col-form-label">Zip Code:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">129839</div>
												</div>
											</div>
										</div>
										<div class="col-lg-10 mb-3">
											<div class="row">
												<div class="col-lg-4">
													<label class="col-form-label">Arrival Notes::</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="font-family-tertiary">Active</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Map -->
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d96779.59535015929!2d-74.00126600000002!3d40.710039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1676478925644!5m2!1sen!2sus" width="304" height="228" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
									<!-- /Map -->
								</div>
							</div>
							<!-- /Service 2 Meeting Detail -->
							<!-- Service Form Detail -->
							<div class="row mb-4">
								<div class="col-lg-12">
									<div class="d-lg-flex justify-content-between align-items-center mb-5">
										<h2 class="mb-lg-0">Service Form Detail</h2>
									</div>
									<div class="row">
										<div class="col-lg-8 mb-3">
											<div class="row">
												<div class="col-lg-5">
													<label class="col-form-label">First Name:</label>
												</div>
												<div class="col-lg-7 align-self-center">
													<div class="d-flex align-items-center gap-2">
														<div class="font-family-tertiary">Thomas</div>
														<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
															<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
															</svg>
														</a>
													</div>
												</div>
											</div>
										</div>
						<div class="col-lg-8 mb-3">
						  <div class="row">
							<div class="col-lg-5">
							  <label class="col-form-label">Last Name:</label>
							</div>
							<div class="col-lg-7 align-self-center">
								<div class="d-flex align-items-center gap-2">
								<div class="font-family-tertiary">Charles</div>
								<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
								  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
								  </svg>
								</a>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-lg-8 mb-3">
						  <div class="row">
							<div class="col-lg-5">
							  <label class="col-form-label">Phone Number:</label>
							</div>
							<div class="col-lg-7 align-self-center">
								<div class="d-flex align-items-center gap-2">
								<div class="font-family-tertiary">(923) 023-9683</div>
								<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
								  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
								  </svg>
								</a>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-lg-8 mb-3">
						  <div class="row">
							<div class="col-lg-5">
							  <label class="col-form-label">Severity:</label>
							</div>
							<div class="col-lg-7 align-self-center">
							  <div class="font-family-tertiary">Active</div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div><!-- /Service Form Detail -->
				  <!-- Industry Form Detail -->
				  <div class="row mb-4">
					<div class="col-lg-12">
					  <div class="d-lg-flex justify-content-between align-items-center mb-5">
						<h2 class="mb-lg-0">Industry Form Detail</h2>
					  </div>
					  <div class="row">
						<div class="col-lg-8 mb-3">
						  <div class="row">
							<div class="col-lg-12">
							  <div class="row">
								<div class="col-lg-3">
								  <label class="col-form-label">Req_info:</label>
								</div>
								<div class="col-lg-9">
								  <a href="#">View Uploaded Document</a>
								</div>
								<div class="col-lg-3">
								  <img src="/tenant/images/img-placeholder-document.jpg" alt="img-placeholder-document" class="w-100">
								  <p class="font-family-secondary"><small>File Name</small></p>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div><!-- /Industry Form Detail -->
				  <!-- Notes -->
				  <div class="row mb-4">
					<div class="col-lg-12">
					  <h2 class="mb-lg-4">Notes</h2>
					  <div class="row mb-4">
						<div class="col-lg-6 mb-4">
						  <!-- Provider Notes -->
						  <div class="">
							<label class="form-label">
							  Provider Notes
							</label>
							<textarea class="form-control" rows="4" cols="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</textarea>
						  </div>
						  <!-- /Provider Notes -->
						</div>
						<div class="col-lg-6 mb-4">
						  <!-- Customer Notes -->
						  <div class="">
							<label class="form-label">
							  Customer Notes
							</label>
							<textarea class="form-control" rows="4" cols="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</textarea>
						  </div>
						  <!-- /Customer Notes -->
						</div>
						<div class="col-lg-6 mb-4">
						  <!-- Private Notes -->
						  <div class="">
							<label class="form-label">
							  Private Notes
							</label>
							<textarea class="form-control" rows="4" cols="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</textarea>
						  </div>
						  <!-- /Private Notes -->
						</div>
						<div class="col-lg-6 mb-4">
						  <!-- Tags -->
						  <div class="">
							<label class="form-label">
							  Tags
							</label>
							<select x-cloak="" id="select">
							  <option value="1">Option 1</option>
							  <option value="2">Option 2</option>
							  <option value="3">Option 3</option>
							  <option value="4">Option 4</option>
							  <option value="5">Option 5</option>
							</select>

							<div x-data="dropdown()" x-init="loadOptions()" class="form-control multi-select-dropdown mb-2">
							  <input name="values" type="hidden" x-bind:value="selectedValues()" value="">
							  <div class="inline-block position-relative w-100">
								<div class="d-flex flex-column align-items-center position-relative">
								  <div x-on:click="open" class="w-100">
									<div class="d-flex justify-content-between">
									  <div class="d-flex flex-auto flex-wrap gap-2">
										<template x-for="(option,index) in selected" :key="options[option].value">
										  <div class="d-flex justify-content-center align-items-center py-1 px-1 bg-white rounded border">
											<div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option]="" x-text="options[option].text"></div>
											<div class="d-flex flex-auto flex-row-reverse">
											  <div class="btn btn-hs-icon p-0" x-on:click.stop="remove(index,option)">
												<svg class="fill-current h-4 w-4 " role="button" viewBox="0 0 20 20">
												  <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0 c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183 l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15 C14.817,13.62,14.817,14.38,14.348,14.849z"></path>
												</svg>
											  </div>
											</div>
										  </div>
										</template>
										<div x-show="selected.length == 0" class="flex-1">
										  <input placeholder="Select a option" class="form-control border-0 p-0" x-bind:value="selectedValues()">
										</div>
									  </div>
									  <div class="svelte-1l8159u d-flex align-items-center">

										<button type="button" x-show="isOpen() === true" x-on:click="open" class="btn btn-hs-icon p-0" style="display: none;">
										  <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
											<path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83 c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z "></path>
										  </svg>

										</button>
										<button type="button" x-show="isOpen() === false" @click="close" class="btn btn-hs-icon p-0">
										  <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
											<path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83 c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25 L17.418,6.109z"></path>
										  </svg>

										</button>
									  </div>
									</div>
								  </div>
								  <div class="w-100 px-0">
									<div x-show.transition.origin.top="isOpen()" class="position-absolute shadow top-100 bg-white z-40 w-100 left-0 rounded max-h-select" x-on:click.away="close" style="display: none;">
									  <div class="d-flex flex-column w-100 overflow-y-auto options-container">
										<template x-for="(option,index) in options" :key="option" class="overflow-auto">
										  <div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
											<div class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
											  <div class="w-100 d-flex justify-content-between align-items-center">
												<div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
												<div x-show="option.selected">
												  <svg class="svg-icon" viewBox="0 0 20 20">
													<path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
												  </svg>
												</div>
											  </div>
											</div>
										  </div>
										</template><div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
											<div class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
											  <div class="w-100 d-flex justify-content-between align-items-center">
												<div class="mx-2 leading-6" x-model="option" x-text="option.text">Option 1</div>
												<div x-show="option.selected" style="display: none;">
												  <svg class="svg-icon" viewBox="0 0 20 20">
													<path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
												  </svg>
												</div>
											  </div>
											</div>
										  </div><div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
											<div class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
											  <div class="w-100 d-flex justify-content-between align-items-center">
												<div class="mx-2 leading-6" x-model="option" x-text="option.text">Option 2</div>
												<div x-show="option.selected" style="display: none;">
												  <svg class="svg-icon" viewBox="0 0 20 20">
													<path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
												  </svg>
												</div>
											  </div>
											</div>
										  </div><div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
											<div class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
											  <div class="w-100 d-flex justify-content-between align-items-center">
												<div class="mx-2 leading-6" x-model="option" x-text="option.text">Option 3</div>
												<div x-show="option.selected" style="display: none;">
												  <svg class="svg-icon" viewBox="0 0 20 20">
													<path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
												  </svg>
												</div>
											  </div>
											</div>
										  </div><div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
											<div class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
											  <div class="w-100 d-flex justify-content-between align-items-center">
												<div class="mx-2 leading-6" x-model="option" x-text="option.text">Option 4</div>
												<div x-show="option.selected" style="display: none;">
												  <svg class="svg-icon" viewBox="0 0 20 20">
													<path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
												  </svg>
												</div>
											  </div>
											</div>
										  </div><div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
											<div class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
											  <div class="w-100 d-flex justify-content-between align-items-center">
												<div class="mx-2 leading-6" x-model="option" x-text="option.text">Option 5</div>
												<div x-show="option.selected" style="display: none;">
												  <svg class="svg-icon" viewBox="0 0 20 20">
													<path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
												  </svg>
												</div>
											  </div>
											</div>
										  </div>
									  </div>
									</div>
								  </div>
								</div>
							  </div>
							</div>
							<div class="d-lg-flex flex-wrap gap-3 mb-3">
							  <div class="tag">@admin_company</div>
							  <div class="tag">@booking_start_at</div>
							  <div class="tag">@consumer</div>
							  <div class="tag">@booking_end_at</div>
							  <div class="tag">@booking_duration</div>
							</div>
							<div>
							  <div class="form-check form-check-inline">
								<input class="form-check-input" id="Requester" name="" type="checkbox" tabindex="">
								<label class="form-check-label" for="Requester">Requester</label>
							  </div>
							  <div class="form-check form-check-inline">
								<input class="form-check-input" id="ServiceConsumers" name="" type="checkbox" tabindex="">
								<label class="form-check-label" for="ServiceConsumers">Service Consumer(s)</label>
							  </div>
							  <div class="form-check form-check-inline">
								<input class="form-check-input" id="Participants" name="" type="checkbox" tabindex="">
								<label class="form-check-label" for="Participants">Participant(s)</label>
							  </div>
							</div>
						  </div>
						  <!-- /Tags -->
						</div>
						<div class="col-lg-12">
						  <a href="#" class="btn btn-primary rounded">Save Notes</a>
						</div>
					  </div>
					</div>
				  </div><!-- /Notes -->
				</div>
				<div class="col-12 justify-content-center form-actions d-flex gap-3">
				  <button type="" class="btn btn-outline-dark rounded">Cancel</button>
				  <button type="" class="btn btn-primary rounded">Next</button>
				</div>
			  </div><!-- END: booking-details-tab -->
			  <div class="tab-pane fade" id="assigned-providers" role="tabpanel" aria-labelledby="assigned-providers-tab" tabindex="0">
				<!-- Service 1 Assigned Providers -->
				<div class="mb-5">
				  <div class="d-lg-flex align-items-center justify-content-between mb-4">
				  <h2 class="mb-lg-0">Service 1 Assigned Providers</h2>
				  <div class="d-flex gap-3">
					<a class="btn btn-has-icon btn-outline-dark rounded" @click="assignProvider = true">
					  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.99995 9.64514C10.8594 9.64629 11.7 9.39247 12.4152 8.9158C13.1304 8.43913 13.6881 7.76102 14.0178 6.96728C14.3476 6.17354 14.4344 5.29983 14.2674 4.45671C14.1005 3.61359 13.6872 2.83894 13.0798 2.23077C12.4725 1.62261 11.6984 1.20826 10.8555 1.04016C10.0126 0.872052 9.13876 0.957746 8.34457 1.28639C7.55039 1.61504 6.87154 2.17188 6.39391 2.88644C5.91627 3.60101 5.66133 4.44119 5.66133 5.30069C5.66133 6.4519 6.11824 7.55605 6.93173 8.37062C7.74521 9.18519 8.84874 9.64359 9.99995 9.64514ZM10.0006 2.4618C10.5614 2.46078 11.1099 2.62621 11.5766 2.93714C12.0434 3.24808 12.4073 3.69053 12.6224 4.20847C12.8375 4.7264 12.8941 5.29652 12.7849 5.84662C12.6758 6.39671 12.4058 6.90204 12.0092 7.2986C11.6127 7.69516 11.1073 7.96512 10.5573 8.07428C10.0072 8.18343 9.43704 8.12689 8.9191 7.9118C8.40117 7.69671 7.95871 7.33275 7.64778 6.86601C7.33684 6.39928 7.17141 5.85077 7.17244 5.28995C7.17381 4.5403 7.47222 3.82175 8.0023 3.29166C8.53238 2.76158 9.25093 2.46318 10.0006 2.4618Z" fill="url(#paint0_linear_8558_41723)" stroke="url(#paint1_linear_8558_41723)" stroke-width="0.4"/>
						<path d="M15.6953 11.8235C13.9915 10.7504 12.0149 10.1901 10.0014 10.2094C8.52715 10.1724 7.06288 10.4608 5.71279 11.0541C4.36161 11.6478 3.15807 12.5324 2.18797 13.6446L2.18772 13.6444L2.18071 13.6535C2.07992 13.7833 2.02422 13.9424 2.02205 14.1068L2.02203 14.1068V14.1094V17.7126C2.01395 18.0672 2.14632 18.4107 2.39036 18.6681L2.53552 18.5306L2.39036 18.6681C2.635 18.9262 2.97192 19.0769 3.32738 19.0871L3.32737 19.0872H3.33314H10.2165H10.6823L10.3615 18.7495L9.30592 17.6384L9.24763 17.577L9.16301 17.5761L3.53314 17.5171V14.3955C4.36079 13.5426 5.35356 12.8667 6.45116 12.4094C7.57328 11.9418 8.78042 11.7129 9.99581 11.7372L9.99581 11.7373L10.0025 11.7372C11.6671 11.7148 13.3055 12.1531 14.7365 13.0036L14.8781 13.0877L14.9878 12.965L15.7378 12.1261L15.8955 11.9497L15.6953 11.8235Z" fill="url(#paint2_linear_8558_41723)" stroke="url(#paint3_linear_8558_41723)" stroke-width="0.4"/>
						<path d="M16.667 18.2769H16.9961C16.897 18.3444 16.7802 18.3833 16.6587 18.388H15.0397L15.1397 18.2769H16.667ZM17.2781 17.7407C17.2788 17.8717 17.2396 17.9988 17.167 18.1058V17.7769V17.7158V15.9849L17.2781 15.8611V17.738H17.2781L17.2781 17.7407Z" fill="black" stroke="url(#paint4_linear_8558_41723)"/>
						<path d="M19.4479 10.1973L19.4479 10.1973L19.4445 10.1943C19.2951 10.0613 19.0991 9.99301 18.8994 10.0043C18.6997 10.0157 18.5126 10.1057 18.3792 10.2548L18.3791 10.2549L12.0697 17.3136L9.33285 14.3714C9.26891 14.2976 9.19124 14.2368 9.10414 14.1925C9.0157 14.1475 8.91926 14.1203 8.82033 14.1126C8.72141 14.1049 8.62193 14.1168 8.52758 14.1475C8.43323 14.1782 8.34586 14.2272 8.27045 14.2917L8.27039 14.2917L8.26587 14.2958C8.192 14.363 8.13219 14.4441 8.08989 14.5346C8.04759 14.6251 8.02364 14.723 8.01942 14.8228C8.01521 14.9225 8.03081 15.0221 8.06533 15.1158C8.09985 15.2095 8.1526 15.2955 8.22053 15.3687L8.2206 15.3687L11.9373 19.3687L12.0865 19.5294L12.2328 19.366L19.505 11.2438L19.5051 11.2438L19.5083 11.24C19.6344 11.0919 19.6985 10.9008 19.6872 10.7066C19.676 10.5123 19.5902 10.3299 19.4479 10.1973Z" fill="url(#paint5_linear_8558_41723)" stroke="url(#paint6_linear_8558_41723)" stroke-width="0.4"/>
						<defs>
						<linearGradient id="paint0_linear_8558_41723" x1="10.0058" y1="1.15625" x2="13.3313" y2="1.15625" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint1_linear_8558_41723" x1="10.0058" y1="1.15625" x2="13.3313" y2="1.15625" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint2_linear_8558_41723" x1="8.90519" y1="10.4062" x2="14.268" y2="10.4062" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint3_linear_8558_41723" x1="8.90519" y1="10.4062" x2="14.268" y2="10.4062" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint4_linear_8558_41723" x1="15.8476" y1="14.5547" x2="17.3966" y2="14.5547" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint5_linear_8558_41723" x1="13.8536" y1="10.2031" x2="18.375" y2="10.2031" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint6_linear_8558_41723" x1="13.8536" y1="10.2031" x2="18.375" y2="10.2031" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						</defs>
					  </svg>
					  Assign Providers
					</a>
					<a href="#" class="btn btn-has-icon btn-primary rounded">
					  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="white"/>
						<path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="white"/>
					  </svg>
					  Team Chat
					</a>
				  </div>
				  </div>
				  <div class="mb-4">
					<button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					  <span>
						<svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.001 0.5V8.625C10.001 9.12228 10.1985 9.5992 10.5501 9.95083C10.9018 10.3025 11.3787 10.5 11.876 10.5H20.001V17.6963L18.3847 16.08C18.2686 15.9639 18.1307 15.8719 17.979 15.8091C17.8273 15.7463 17.6647 15.7141 17.5005 15.7141C17.3363 15.7142 17.1738 15.7466 17.0221 15.8095C16.8705 15.8723 16.7327 15.9645 16.6166 16.0806C16.5005 16.1968 16.4085 16.3346 16.3457 16.4863C16.2829 16.638 16.2507 16.8006 16.2507 16.9648C16.2508 17.129 16.2832 17.2916 16.3461 17.4432C16.4089 17.5949 16.5011 17.7327 16.6172 17.8488L18.0185 19.25H12.501C12.1695 19.25 11.8515 19.3817 11.6171 19.6161C11.3827 19.8505 11.251 20.1685 11.251 20.5C11.251 20.8315 11.3827 21.1495 11.6171 21.3839C11.8515 21.6183 12.1695 21.75 12.501 21.75H18.0185L16.6172 23.1513C16.3827 23.3856 16.2508 23.7036 16.2507 24.0352C16.2506 24.3668 16.3822 24.6848 16.6166 24.9194C16.851 25.1539 17.1689 25.2858 17.5005 25.2859C17.8321 25.286 18.1502 25.1544 18.3847 24.92L19.9797 23.3238C19.9011 23.9256 19.6063 24.4783 19.1502 24.8787C18.6941 25.2791 18.1079 25.5 17.501 25.5H2.50098C1.83794 25.5 1.20205 25.2366 0.733209 24.7678C0.264369 24.2989 0.000976563 23.663 0.000976562 23V3C0.000976562 2.33696 0.264369 1.70107 0.733209 1.23223C1.20205 0.763392 1.83794 0.5 2.50098 0.5H10.001ZM20.001 17.6963L21.9197 19.6163C22.1541 19.8507 22.2857 20.1685 22.2857 20.5C22.2857 20.8315 22.1541 21.1493 21.9197 21.3838L20.001 23.3038V17.6963ZM12.501 0.55375C12.9746 0.654194 13.4088 0.889989 13.751 1.2325L19.2685 6.75C19.611 7.09216 19.8468 7.5264 19.9472 8H12.501V0.55375Z"></path>
						</svg>
					  </span>
					</button>
				  </div>
				  <div class="d-flex justify-content-between mb-2">
					<div class="d-inline-flex align-items-center gap-4">
					  <div class="d-inline-flex align-items-center gap-4">
						<label for="show_records_number" class="form-label-sm mb-0">Show</label>
						<select class="form-select form-select-sm" id="show_records_number">
						  <option>10</option>
						  <option>15</option>
						  <option>20</option>
						  <option>25</option>
						</select>
					  </div>
					  <div class="d-flex gap-4 align-items-center">
						<div class="form-check form-switch mb-lg-0">
						  <input class="form-check-input" type="checkbox" role="switch" id="autoNotify" checked>
						  <label class="form-check-label" for="autoNotify">Auto-notify</label>
						</div>
						<div class="form-check form-switch mb-lg-0">
						  <input class="form-check-input" type="checkbox" role="switch" id="autoNotify">
						  <label class="form-check-label" for="autoNotify">Auto-Assign</label>
						</div>
					  </div>
					</div>
					<div class="d-inline-flex align-items-center gap-4">
					  <label for="search" class="form-label-sm mb-0">Search</label>
					  <input type="search" class="form-control form-control-sm" id="search" name="search" placeholder="Search here" autocomplete="on"/>
					</div>
				  </div>
				  <!-- Hoverable rows start -->
				  <div class="row" id="table-hover-row">
				  <div class="col-12">
					<div class="card">
					  <div class="table-responsive">
						<table id="unassigned_data" class="table table-fs-md table-hover" aria-label="">
						  <thead>
							<tr role="row">
							  <th scope="col" class="text-center">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
							  </th>
							  <th scope="col">Provider</th>
							  <th scope="col">Additional Pay</th>
							  <th scope="col" class="text-center">Additional Pay</th>
							  <th scope="col" class="text-center">Time Paid</th>
							  <th scope="col" class="text-center">Total Payment</th>
							  <th class="text-center">Action</th>
							</tr>
						  </thead>
						  <tbody>
							<tr role="row" class="odd">
							  <td class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							  </td>
							  <td class="align-middle">
								<div class="d-flex gap-2 align-items-center">
								  <div>
									<img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
								  </div>
								  <div class="pt-2">
									<div class="font-family-secondary leading-none">Dori Griffiths</div>
									<a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
								  </div>
								</div>
							  </td>
							  <td class="align-middle">
								Additional Pay Label
							  </td>
							  <td class="text-center align-middle">
								$00:00
							  </td>
							  <td class="text-center align-middle">
								08/21/2022 9:45 AM
							  </td>
							  <td class="text-center align-middle">$00:00</td>
							  <td class="align-middle">
								<div class="d-flex actions justify-content-center">
								  <a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M9.00065 9.9974C11.3018 9.9974 13.1673 8.13192 13.1673 5.83073C13.1673 3.52954 11.3018 1.66406 9.00065 1.66406C6.69946 1.66406 4.83398 3.52954 4.83398 5.83073C4.83398 8.13192 6.69946 9.9974 9.00065 9.9974Z" stroke="black" stroke-width="2"/>
									  <path d="M13.167 18.3307H3.38871C3.15236 18.3308 2.9187 18.2806 2.70325 18.1834C2.48779 18.0863 2.29546 17.9444 2.13902 17.7672C1.98258 17.5901 1.86562 17.3816 1.79588 17.1558C1.72614 16.93 1.70524 16.6919 1.73454 16.4574L2.05954 13.8541C2.13512 13.2492 2.42906 12.6929 2.88607 12.2896C3.34308 11.8863 3.93169 11.6638 4.54121 11.6641H4.83371" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									  <path d="M17.3337 15.8307L13.167 11.6641M17.3337 11.6641L13.167 15.8307" stroke="black" stroke-width="2" stroke-linecap="round"/>
									</svg>
								  </a>
								  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M14.286 17.1462C15.075 17.1462 15.7146 16.5066 15.7146 15.7176C15.7146 14.9287 15.075 14.2891 14.286 14.2891C13.497 14.2891 12.8574 14.9287 12.8574 15.7176C12.8574 16.5066 13.497 17.1462 14.286 17.1462Z" fill="black"/>
									  <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7749 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703V18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
									  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0V0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black"/>
									  <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Feedback" aria-label="Feedback" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <mask id="mask0_8558_148040" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="21">
									  <path d="M1 1H21V20.2377H1V1Z" fill="white" stroke="white" stroke-width="0.5"/>
									  </mask>
									  <g mask="url(#mask0_8558_148040)">
									  <path d="M8.85115 17.6655L6.68187 18.8041C6.60059 18.8468 6.51476 18.8777 6.42472 18.8966C6.33469 18.9155 6.24395 18.9215 6.15216 18.9148C6.06037 18.9081 5.97139 18.8892 5.88485 18.8577C5.79867 18.8262 5.71809 18.7834 5.64382 18.7295C5.56955 18.6755 5.50404 18.6125 5.44728 18.5399C5.39053 18.4678 5.34499 18.3889 5.31065 18.3038C5.27597 18.219 5.2539 18.1307 5.24409 18.0397C5.23463 17.9482 5.23743 17.8575 5.25355 17.7671L6.02464 13.2782C6.04216 13.177 6.0348 13.0778 6.00292 12.9805C5.97139 12.8831 5.91849 12.7986 5.84492 12.7272L2.57558 9.54821C2.50971 9.48409 2.45401 9.41228 2.40847 9.33275C2.36292 9.25322 2.32894 9.16914 2.30687 9.08016C2.28515 8.99117 2.27569 8.90078 2.27884 8.80935C2.28235 8.71756 2.29811 8.62822 2.32649 8.54134C2.35487 8.45411 2.3948 8.37248 2.4463 8.29645C2.49745 8.22043 2.55806 8.15282 2.62848 8.09396C2.69855 8.03475 2.77562 7.98641 2.85935 7.94892C2.94308 7.91143 3.03066 7.88621 3.1214 7.8729L7.64004 7.21742C7.74164 7.2027 7.83378 7.16522 7.91716 7.10496C8.00019 7.0447 8.0643 6.96868 8.10984 6.87689L10.1299 2.79302C10.1709 2.71104 10.222 2.63607 10.2837 2.56811C10.3453 2.50014 10.4154 2.44233 10.4935 2.39364C10.5717 2.34529 10.6547 2.30886 10.743 2.28363C10.8316 2.25841 10.9216 2.2458 11.0134 2.2458C11.1052 2.2458 11.1956 2.25841 11.2839 2.28363C11.3722 2.30886 11.4552 2.34529 11.5333 2.39364C11.6115 2.44198 11.6815 2.50014 11.7432 2.56811C11.8048 2.63607 11.856 2.71104 11.897 2.79302L13.9177 6.87759C13.9633 6.96938 14.0274 7.0454 14.1104 7.10566C14.1934 7.16592 14.2859 7.2034 14.3875 7.21812L18.9062 7.8736C18.9969 7.88656 19.0841 7.91214 19.1682 7.94962C19.2519 7.98711 19.3287 8.03545 19.3991 8.09466C19.4691 8.15352 19.5301 8.22113 19.5813 8.29715C19.6328 8.37318 19.6723 8.45481 19.7007 8.54169C19.7294 8.62892 19.7452 8.71826 19.7484 8.81005C19.7519 8.90148 19.7424 8.99187 19.7207 9.08051C19.6986 9.16949 19.6646 9.25392 19.6191 9.33345C19.5735 9.41298 19.5178 9.48479 19.452 9.54856L18.4581 10.5155C18.4272 10.5435 18.3996 10.5747 18.375 10.6083C18.3505 10.642 18.3295 10.6777 18.3123 10.7155C18.2952 10.7534 18.2819 10.7926 18.2724 10.8332C18.2629 10.8739 18.2577 10.9149 18.2563 10.9566C18.2552 10.9982 18.2584 11.0396 18.2654 11.0806C18.2727 11.1216 18.2836 11.1615 18.299 11.2C18.3141 11.2389 18.333 11.2757 18.3558 11.3107C18.3782 11.3458 18.4041 11.3784 18.4332 11.4081C18.4623 11.4379 18.4942 11.4645 18.5285 11.488C18.5632 11.5115 18.5996 11.5311 18.6381 11.5476C18.6767 11.5637 18.7163 11.576 18.7573 11.584C18.7983 11.5921 18.8392 11.5963 18.8813 11.5963C18.923 11.5963 18.9643 11.5921 19.0049 11.5837C19.0459 11.5753 19.0855 11.563 19.1241 11.5469C19.1626 11.5304 19.199 11.5104 19.2334 11.487C19.2677 11.4635 19.2996 11.4369 19.3287 11.4067L20.3233 10.4402C20.3975 10.368 20.4662 10.2909 20.5296 10.2093C20.593 10.1273 20.6501 10.0418 20.7016 9.95214C20.7531 9.86246 20.798 9.76962 20.8365 9.67363C20.875 9.57763 20.9066 9.47954 20.9311 9.37934C20.956 9.2788 20.9738 9.17755 20.9844 9.07455C20.9949 8.9719 20.9984 8.8689 20.9945 8.76555C20.9907 8.66221 20.9798 8.55991 20.9619 8.45796C20.9437 8.35636 20.9185 8.25652 20.8866 8.15807C20.8547 8.05998 20.8158 7.96434 20.7706 7.8715C20.7251 7.77866 20.6736 7.68932 20.6158 7.60349C20.558 7.51766 20.4946 7.43638 20.4252 7.35965C20.3562 7.28258 20.2819 7.21076 20.2027 7.1442C20.1236 7.07763 20.0402 7.01668 19.9526 6.96167C19.865 6.90667 19.7739 6.85797 19.6793 6.81558C19.5851 6.77319 19.4881 6.73746 19.3886 6.70873C19.2891 6.67965 19.1882 6.65758 19.0859 6.64287L14.892 6.03468L13.016 2.24159C12.9701 2.14875 12.9179 2.05977 12.8597 1.97429C12.8012 1.8888 12.7371 1.80788 12.6677 1.73115C12.598 1.65478 12.5234 1.58331 12.4439 1.5171C12.3643 1.45088 12.2802 1.39027 12.1923 1.33562C12.1044 1.28132 12.0129 1.23297 11.918 1.19093C11.8234 1.14924 11.726 1.11386 11.6265 1.08548C11.5267 1.0571 11.4254 1.03573 11.3228 1.02172C11.2201 1.00736 11.1171 1 11.0134 1C10.9097 1 10.8067 1.00736 10.7041 1.02172C10.6014 1.03573 10.5002 1.0571 10.4003 1.08548C10.3008 1.11386 10.2035 1.14924 10.1089 1.19093C10.0139 1.23297 9.92248 1.28132 9.83455 1.33562C9.74661 1.39027 9.66288 1.45088 9.583 1.5171C9.50348 1.58331 9.42886 1.65478 9.35914 1.73115C9.28977 1.80788 9.22566 1.8888 9.16751 1.97429C9.109 2.05977 9.0568 2.14875 9.01091 2.24159L7.13555 6.03223L2.94168 6.64041C2.83938 6.65513 2.73848 6.6772 2.63899 6.70628C2.53949 6.73536 2.4428 6.77109 2.34821 6.81348C2.25397 6.85587 2.16288 6.90457 2.0753 6.95957C1.98771 7.01457 1.90433 7.07553 1.82516 7.1421C1.74598 7.20866 1.67171 7.28048 1.60269 7.35755C1.53368 7.43428 1.47027 7.51555 1.41246 7.60139C1.35465 7.68722 1.30316 7.77656 1.25761 7.86939C1.21242 7.96223 1.17353 8.05753 1.14165 8.15597C1.10977 8.25406 1.08455 8.35426 1.06633 8.45586C1.04846 8.55746 1.0376 8.6601 1.03375 8.7631C1.02989 8.86645 1.0334 8.96945 1.04391 9.0721C1.05442 9.17475 1.07193 9.27635 1.09681 9.37689C1.12168 9.47709 1.15321 9.57518 1.1914 9.67117C1.22994 9.76717 1.27478 9.85966 1.32628 9.94934C1.37743 10.0394 1.43488 10.1249 1.49829 10.2068C1.56135 10.2885 1.63002 10.3655 1.70429 10.4377L4.73925 13.3882L4.02387 17.559C4.006 17.6609 3.99549 17.7639 3.99199 17.8673C3.98848 17.9706 3.99234 18.074 4.00355 18.177C4.01441 18.2796 4.03263 18.3816 4.05785 18.4818C4.08307 18.5823 4.11496 18.6804 4.15419 18.7764C4.19308 18.8724 4.23862 18.9652 4.29047 19.0546C4.34232 19.1443 4.40048 19.2297 4.46424 19.3114C4.52835 19.393 4.59772 19.4697 4.67234 19.5415C4.74696 19.6134 4.82649 19.6799 4.91022 19.7405C4.9943 19.8015 5.08188 19.8562 5.17367 19.9048C5.26546 19.9532 5.3597 19.9952 5.45744 20.031C5.55484 20.0664 5.65433 20.0947 5.75593 20.1165C5.85753 20.1378 5.95983 20.1522 6.06353 20.1595C6.16687 20.1669 6.27057 20.1669 6.37392 20.1599C6.47762 20.1529 6.57992 20.1385 6.68152 20.1172C6.78312 20.0958 6.88261 20.0674 6.98036 20.032C7.07775 19.997 7.17234 19.9549 7.26413 19.9066L9.43306 18.7694C9.4709 18.7512 9.50663 18.7295 9.53991 18.7042C9.57355 18.679 9.60402 18.6506 9.6317 18.6195C9.65973 18.5879 9.6839 18.554 9.70492 18.5179C9.72559 18.4814 9.74276 18.4436 9.75607 18.4037C9.76938 18.3641 9.77849 18.3234 9.7834 18.2817C9.7883 18.24 9.789 18.1987 9.7855 18.1567C9.78235 18.115 9.77464 18.074 9.76308 18.0341C9.75117 17.9938 9.73575 17.9552 9.71613 17.9181C9.69651 17.881 9.67339 17.8463 9.64677 17.8137C9.62049 17.7815 9.59071 17.752 9.55848 17.7254C9.5259 17.6991 9.49087 17.676 9.45373 17.6567C9.41659 17.6371 9.37806 17.6217 9.33742 17.6098C9.29713 17.5982 9.25614 17.5905 9.21445 17.5874C9.17241 17.5839 9.13072 17.5846 9.08903 17.5898C9.04734 17.5947 9.0067 17.6038 8.96676 17.6168C8.92718 17.6301 8.88899 17.6473 8.85255 17.668L8.85115 17.6655Z" fill="black" stroke="black" stroke-width="0.5"/>
									  </g>
									  <path d="M20.9214 13.4954C20.8762 13.356 20.8128 13.2253 20.7312 13.1034C20.6492 12.9815 20.5522 12.8735 20.4397 12.779C20.3272 12.6844 20.2039 12.6073 20.0697 12.5477C19.9356 12.4878 19.7958 12.4475 19.65 12.4272L17.3066 12.0877L16.2581 9.97136C16.2262 9.90585 16.1894 9.84279 16.1488 9.78218C16.1078 9.72157 16.0629 9.66412 16.0139 9.60981C15.9649 9.55586 15.9123 9.50506 15.8562 9.45812C15.8002 9.41117 15.741 9.36843 15.679 9.3299C15.6166 9.29136 15.5522 9.25738 15.4852 9.2276C15.4183 9.19817 15.3497 9.1733 15.2792 9.15333C15.2088 9.13336 15.1374 9.11829 15.0648 9.10848C14.9923 9.09832 14.9194 9.09342 14.8466 9.09377C14.7734 9.09342 14.7005 9.09797 14.628 9.10813C14.5554 9.11794 14.484 9.13266 14.4139 9.15263C14.3435 9.17259 14.2748 9.19712 14.2079 9.22655C14.141 9.25632 14.0765 9.29031 14.0142 9.32884C13.9522 9.36738 13.893 9.40977 13.8369 9.45672C13.7809 9.50331 13.7283 9.55376 13.6793 9.60806C13.6302 9.66201 13.5854 9.71947 13.5444 9.78008C13.5034 9.84034 13.467 9.9034 13.4347 9.96891L12.3862 12.0853L10.0421 12.4248C9.89703 12.4458 9.75724 12.4861 9.62341 12.5463C9.48958 12.6062 9.36627 12.6833 9.25416 12.7776C9.14205 12.8721 9.04466 12.98 8.96268 13.1013C8.8807 13.2228 8.81694 13.3532 8.77175 13.4922C8.7262 13.6317 8.70063 13.7743 8.69537 13.9207C8.69012 14.0671 8.70483 14.2111 8.73987 14.3534C8.7749 14.4956 8.82885 14.6301 8.90172 14.7573C8.97459 14.8845 9.06358 14.999 9.16833 15.1013L10.864 16.7511L10.4642 19.0794C10.4386 19.2237 10.4337 19.3691 10.4495 19.5149C10.4649 19.6606 10.5003 19.8018 10.5557 19.9377C10.6107 20.0737 10.6835 20.1994 10.7743 20.3147C10.865 20.4303 10.9698 20.5312 11.0885 20.6174C11.2076 20.7036 11.3362 20.7719 11.4742 20.822C11.6126 20.8721 11.7549 20.9026 11.9017 20.9127C12.0484 20.9229 12.1938 20.9131 12.3375 20.8826C12.4815 20.8521 12.6184 20.8027 12.7481 20.734L14.8445 19.6354L16.9426 20.7382C17.0726 20.8066 17.2096 20.8556 17.3532 20.8854C17.4972 20.9155 17.6423 20.9253 17.7887 20.9148C17.9351 20.904 18.0774 20.8738 18.2154 20.8234C18.3534 20.7733 18.4817 20.705 18.6004 20.6191C18.7192 20.5329 18.8239 20.4324 18.9147 20.3171C19.0054 20.2019 19.0783 20.0765 19.1336 19.9405C19.189 19.8049 19.2247 19.6645 19.2408 19.5187C19.2566 19.373 19.2524 19.2279 19.2275 19.0836L18.8267 16.7556L20.5231 15.1059C20.6289 15.0039 20.7182 14.889 20.7914 14.7619C20.8647 14.635 20.919 14.5002 20.954 14.3576C20.9894 14.2153 21.0041 14.0706 20.9985 13.9242C20.9929 13.7778 20.9673 13.6348 20.9214 13.4954ZM19.6518 14.215L17.7211 16.0917C17.6472 16.1632 17.5946 16.2476 17.5627 16.345C17.5309 16.4424 17.5235 16.5419 17.5407 16.6428L17.9968 19.2942C18.0087 19.3551 18.0028 19.4143 17.9793 19.4721C17.9555 19.5296 17.9183 19.5762 17.8672 19.6116C17.8171 19.6487 17.761 19.6697 17.699 19.6743C17.637 19.6788 17.5785 19.6666 17.5238 19.6371L15.1367 18.3857C15.0459 18.3377 14.9492 18.3136 14.8466 18.3136C14.7436 18.3136 14.6469 18.3377 14.5561 18.3857L12.169 19.6371C12.114 19.6659 12.0558 19.6778 11.9938 19.6732C11.9321 19.6687 11.8761 19.6483 11.826 19.6119C11.7759 19.5755 11.7391 19.5289 11.7156 19.4714C11.6921 19.4143 11.6855 19.3551 11.696 19.2942L12.1521 16.6428C12.1697 16.5419 12.1623 16.4428 12.1304 16.3454C12.0989 16.248 12.046 16.1632 11.9724 16.0917L10.0414 14.215C9.99687 14.1719 9.96709 14.12 9.95203 14.0598C9.93696 13.9999 9.93907 13.94 9.95833 13.8811C9.97725 13.8219 10.0109 13.7725 10.0582 13.7326C10.1058 13.6926 10.1605 13.6681 10.2218 13.659L12.8906 13.2726C12.9922 13.2579 13.0844 13.2204 13.1678 13.1601C13.2508 13.0999 13.3149 13.0238 13.3605 12.9321L14.5544 10.5196C14.5817 10.4643 14.6217 10.4201 14.6746 10.3872C14.7271 10.3546 14.7846 10.3382 14.8466 10.3382C14.9089 10.3382 14.9664 10.3546 15.0189 10.3872C15.0718 10.4201 15.1118 10.4643 15.1391 10.5196L16.3317 12.9314C16.3772 13.0235 16.4417 13.0995 16.5247 13.1598C16.6081 13.22 16.7006 13.2572 16.8022 13.2719L19.471 13.6587C19.5323 13.6674 19.587 13.6919 19.6343 13.7322C19.6819 13.7722 19.7152 13.8216 19.7341 13.8804C19.7534 13.9393 19.7555 13.9988 19.7408 14.0591C19.7261 14.1193 19.6963 14.1712 19.6518 14.2143V14.215Z" fill="black" stroke="black" stroke-width="0.5"/>
									</svg>
								  </a>
								</div>
							  </td>
							</tr>
							<tr role="row" class="even">
							  <td class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							  </td>
							  <td class="align-middle">
								<div class="d-flex gap-2 align-items-center">
								  <div>
									<img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
								  </div>
								  <div class="pt-2">
									<div class="font-family-secondary leading-none">Dori Griffiths</div>
									<a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
								  </div>
								</div>
							  </td>
							  <td class="align-middle">
								Additional Pay Label
							  </td>
							  <td class="text-center align-middle">
								$00:00
							  </td>
							  <td class="text-center align-middle">
								08/21/2022 9:45 AM
							  </td>
							  <td class="text-center align-middle">$00:00</td>
							  <td class="align-middle">
								<div class="d-flex actions justify-content-center">
								  <a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M9.00065 9.9974C11.3018 9.9974 13.1673 8.13192 13.1673 5.83073C13.1673 3.52954 11.3018 1.66406 9.00065 1.66406C6.69946 1.66406 4.83398 3.52954 4.83398 5.83073C4.83398 8.13192 6.69946 9.9974 9.00065 9.9974Z" stroke="black" stroke-width="2"/>
									  <path d="M13.167 18.3307H3.38871C3.15236 18.3308 2.9187 18.2806 2.70325 18.1834C2.48779 18.0863 2.29546 17.9444 2.13902 17.7672C1.98258 17.5901 1.86562 17.3816 1.79588 17.1558C1.72614 16.93 1.70524 16.6919 1.73454 16.4574L2.05954 13.8541C2.13512 13.2492 2.42906 12.6929 2.88607 12.2896C3.34308 11.8863 3.93169 11.6638 4.54121 11.6641H4.83371" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									  <path d="M17.3337 15.8307L13.167 11.6641M17.3337 11.6641L13.167 15.8307" stroke="black" stroke-width="2" stroke-linecap="round"/>
									</svg>
								  </a>
								  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M14.286 17.1462C15.075 17.1462 15.7146 16.5066 15.7146 15.7176C15.7146 14.9287 15.075 14.2891 14.286 14.2891C13.497 14.2891 12.8574 14.9287 12.8574 15.7176C12.8574 16.5066 13.497 17.1462 14.286 17.1462Z" fill="black"/>
									  <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7749 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703V18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
									  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0V0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black"/>
									  <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Feedback" aria-label="Feedback" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <mask id="mask0_8558_148040" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="21">
									  <path d="M1 1H21V20.2377H1V1Z" fill="white" stroke="white" stroke-width="0.5"/>
									  </mask>
									  <g mask="url(#mask0_8558_148040)">
									  <path d="M8.85115 17.6655L6.68187 18.8041C6.60059 18.8468 6.51476 18.8777 6.42472 18.8966C6.33469 18.9155 6.24395 18.9215 6.15216 18.9148C6.06037 18.9081 5.97139 18.8892 5.88485 18.8577C5.79867 18.8262 5.71809 18.7834 5.64382 18.7295C5.56955 18.6755 5.50404 18.6125 5.44728 18.5399C5.39053 18.4678 5.34499 18.3889 5.31065 18.3038C5.27597 18.219 5.2539 18.1307 5.24409 18.0397C5.23463 17.9482 5.23743 17.8575 5.25355 17.7671L6.02464 13.2782C6.04216 13.177 6.0348 13.0778 6.00292 12.9805C5.97139 12.8831 5.91849 12.7986 5.84492 12.7272L2.57558 9.54821C2.50971 9.48409 2.45401 9.41228 2.40847 9.33275C2.36292 9.25322 2.32894 9.16914 2.30687 9.08016C2.28515 8.99117 2.27569 8.90078 2.27884 8.80935C2.28235 8.71756 2.29811 8.62822 2.32649 8.54134C2.35487 8.45411 2.3948 8.37248 2.4463 8.29645C2.49745 8.22043 2.55806 8.15282 2.62848 8.09396C2.69855 8.03475 2.77562 7.98641 2.85935 7.94892C2.94308 7.91143 3.03066 7.88621 3.1214 7.8729L7.64004 7.21742C7.74164 7.2027 7.83378 7.16522 7.91716 7.10496C8.00019 7.0447 8.0643 6.96868 8.10984 6.87689L10.1299 2.79302C10.1709 2.71104 10.222 2.63607 10.2837 2.56811C10.3453 2.50014 10.4154 2.44233 10.4935 2.39364C10.5717 2.34529 10.6547 2.30886 10.743 2.28363C10.8316 2.25841 10.9216 2.2458 11.0134 2.2458C11.1052 2.2458 11.1956 2.25841 11.2839 2.28363C11.3722 2.30886 11.4552 2.34529 11.5333 2.39364C11.6115 2.44198 11.6815 2.50014 11.7432 2.56811C11.8048 2.63607 11.856 2.71104 11.897 2.79302L13.9177 6.87759C13.9633 6.96938 14.0274 7.0454 14.1104 7.10566C14.1934 7.16592 14.2859 7.2034 14.3875 7.21812L18.9062 7.8736C18.9969 7.88656 19.0841 7.91214 19.1682 7.94962C19.2519 7.98711 19.3287 8.03545 19.3991 8.09466C19.4691 8.15352 19.5301 8.22113 19.5813 8.29715C19.6328 8.37318 19.6723 8.45481 19.7007 8.54169C19.7294 8.62892 19.7452 8.71826 19.7484 8.81005C19.7519 8.90148 19.7424 8.99187 19.7207 9.08051C19.6986 9.16949 19.6646 9.25392 19.6191 9.33345C19.5735 9.41298 19.5178 9.48479 19.452 9.54856L18.4581 10.5155C18.4272 10.5435 18.3996 10.5747 18.375 10.6083C18.3505 10.642 18.3295 10.6777 18.3123 10.7155C18.2952 10.7534 18.2819 10.7926 18.2724 10.8332C18.2629 10.8739 18.2577 10.9149 18.2563 10.9566C18.2552 10.9982 18.2584 11.0396 18.2654 11.0806C18.2727 11.1216 18.2836 11.1615 18.299 11.2C18.3141 11.2389 18.333 11.2757 18.3558 11.3107C18.3782 11.3458 18.4041 11.3784 18.4332 11.4081C18.4623 11.4379 18.4942 11.4645 18.5285 11.488C18.5632 11.5115 18.5996 11.5311 18.6381 11.5476C18.6767 11.5637 18.7163 11.576 18.7573 11.584C18.7983 11.5921 18.8392 11.5963 18.8813 11.5963C18.923 11.5963 18.9643 11.5921 19.0049 11.5837C19.0459 11.5753 19.0855 11.563 19.1241 11.5469C19.1626 11.5304 19.199 11.5104 19.2334 11.487C19.2677 11.4635 19.2996 11.4369 19.3287 11.4067L20.3233 10.4402C20.3975 10.368 20.4662 10.2909 20.5296 10.2093C20.593 10.1273 20.6501 10.0418 20.7016 9.95214C20.7531 9.86246 20.798 9.76962 20.8365 9.67363C20.875 9.57763 20.9066 9.47954 20.9311 9.37934C20.956 9.2788 20.9738 9.17755 20.9844 9.07455C20.9949 8.9719 20.9984 8.8689 20.9945 8.76555C20.9907 8.66221 20.9798 8.55991 20.9619 8.45796C20.9437 8.35636 20.9185 8.25652 20.8866 8.15807C20.8547 8.05998 20.8158 7.96434 20.7706 7.8715C20.7251 7.77866 20.6736 7.68932 20.6158 7.60349C20.558 7.51766 20.4946 7.43638 20.4252 7.35965C20.3562 7.28258 20.2819 7.21076 20.2027 7.1442C20.1236 7.07763 20.0402 7.01668 19.9526 6.96167C19.865 6.90667 19.7739 6.85797 19.6793 6.81558C19.5851 6.77319 19.4881 6.73746 19.3886 6.70873C19.2891 6.67965 19.1882 6.65758 19.0859 6.64287L14.892 6.03468L13.016 2.24159C12.9701 2.14875 12.9179 2.05977 12.8597 1.97429C12.8012 1.8888 12.7371 1.80788 12.6677 1.73115C12.598 1.65478 12.5234 1.58331 12.4439 1.5171C12.3643 1.45088 12.2802 1.39027 12.1923 1.33562C12.1044 1.28132 12.0129 1.23297 11.918 1.19093C11.8234 1.14924 11.726 1.11386 11.6265 1.08548C11.5267 1.0571 11.4254 1.03573 11.3228 1.02172C11.2201 1.00736 11.1171 1 11.0134 1C10.9097 1 10.8067 1.00736 10.7041 1.02172C10.6014 1.03573 10.5002 1.0571 10.4003 1.08548C10.3008 1.11386 10.2035 1.14924 10.1089 1.19093C10.0139 1.23297 9.92248 1.28132 9.83455 1.33562C9.74661 1.39027 9.66288 1.45088 9.583 1.5171C9.50348 1.58331 9.42886 1.65478 9.35914 1.73115C9.28977 1.80788 9.22566 1.8888 9.16751 1.97429C9.109 2.05977 9.0568 2.14875 9.01091 2.24159L7.13555 6.03223L2.94168 6.64041C2.83938 6.65513 2.73848 6.6772 2.63899 6.70628C2.53949 6.73536 2.4428 6.77109 2.34821 6.81348C2.25397 6.85587 2.16288 6.90457 2.0753 6.95957C1.98771 7.01457 1.90433 7.07553 1.82516 7.1421C1.74598 7.20866 1.67171 7.28048 1.60269 7.35755C1.53368 7.43428 1.47027 7.51555 1.41246 7.60139C1.35465 7.68722 1.30316 7.77656 1.25761 7.86939C1.21242 7.96223 1.17353 8.05753 1.14165 8.15597C1.10977 8.25406 1.08455 8.35426 1.06633 8.45586C1.04846 8.55746 1.0376 8.6601 1.03375 8.7631C1.02989 8.86645 1.0334 8.96945 1.04391 9.0721C1.05442 9.17475 1.07193 9.27635 1.09681 9.37689C1.12168 9.47709 1.15321 9.57518 1.1914 9.67117C1.22994 9.76717 1.27478 9.85966 1.32628 9.94934C1.37743 10.0394 1.43488 10.1249 1.49829 10.2068C1.56135 10.2885 1.63002 10.3655 1.70429 10.4377L4.73925 13.3882L4.02387 17.559C4.006 17.6609 3.99549 17.7639 3.99199 17.8673C3.98848 17.9706 3.99234 18.074 4.00355 18.177C4.01441 18.2796 4.03263 18.3816 4.05785 18.4818C4.08307 18.5823 4.11496 18.6804 4.15419 18.7764C4.19308 18.8724 4.23862 18.9652 4.29047 19.0546C4.34232 19.1443 4.40048 19.2297 4.46424 19.3114C4.52835 19.393 4.59772 19.4697 4.67234 19.5415C4.74696 19.6134 4.82649 19.6799 4.91022 19.7405C4.9943 19.8015 5.08188 19.8562 5.17367 19.9048C5.26546 19.9532 5.3597 19.9952 5.45744 20.031C5.55484 20.0664 5.65433 20.0947 5.75593 20.1165C5.85753 20.1378 5.95983 20.1522 6.06353 20.1595C6.16687 20.1669 6.27057 20.1669 6.37392 20.1599C6.47762 20.1529 6.57992 20.1385 6.68152 20.1172C6.78312 20.0958 6.88261 20.0674 6.98036 20.032C7.07775 19.997 7.17234 19.9549 7.26413 19.9066L9.43306 18.7694C9.4709 18.7512 9.50663 18.7295 9.53991 18.7042C9.57355 18.679 9.60402 18.6506 9.6317 18.6195C9.65973 18.5879 9.6839 18.554 9.70492 18.5179C9.72559 18.4814 9.74276 18.4436 9.75607 18.4037C9.76938 18.3641 9.77849 18.3234 9.7834 18.2817C9.7883 18.24 9.789 18.1987 9.7855 18.1567C9.78235 18.115 9.77464 18.074 9.76308 18.0341C9.75117 17.9938 9.73575 17.9552 9.71613 17.9181C9.69651 17.881 9.67339 17.8463 9.64677 17.8137C9.62049 17.7815 9.59071 17.752 9.55848 17.7254C9.5259 17.6991 9.49087 17.676 9.45373 17.6567C9.41659 17.6371 9.37806 17.6217 9.33742 17.6098C9.29713 17.5982 9.25614 17.5905 9.21445 17.5874C9.17241 17.5839 9.13072 17.5846 9.08903 17.5898C9.04734 17.5947 9.0067 17.6038 8.96676 17.6168C8.92718 17.6301 8.88899 17.6473 8.85255 17.668L8.85115 17.6655Z" fill="black" stroke="black" stroke-width="0.5"/>
									  </g>
									  <path d="M20.9214 13.4954C20.8762 13.356 20.8128 13.2253 20.7312 13.1034C20.6492 12.9815 20.5522 12.8735 20.4397 12.779C20.3272 12.6844 20.2039 12.6073 20.0697 12.5477C19.9356 12.4878 19.7958 12.4475 19.65 12.4272L17.3066 12.0877L16.2581 9.97136C16.2262 9.90585 16.1894 9.84279 16.1488 9.78218C16.1078 9.72157 16.0629 9.66412 16.0139 9.60981C15.9649 9.55586 15.9123 9.50506 15.8562 9.45812C15.8002 9.41117 15.741 9.36843 15.679 9.3299C15.6166 9.29136 15.5522 9.25738 15.4852 9.2276C15.4183 9.19817 15.3497 9.1733 15.2792 9.15333C15.2088 9.13336 15.1374 9.11829 15.0648 9.10848C14.9923 9.09832 14.9194 9.09342 14.8466 9.09377C14.7734 9.09342 14.7005 9.09797 14.628 9.10813C14.5554 9.11794 14.484 9.13266 14.4139 9.15263C14.3435 9.17259 14.2748 9.19712 14.2079 9.22655C14.141 9.25632 14.0765 9.29031 14.0142 9.32884C13.9522 9.36738 13.893 9.40977 13.8369 9.45672C13.7809 9.50331 13.7283 9.55376 13.6793 9.60806C13.6302 9.66201 13.5854 9.71947 13.5444 9.78008C13.5034 9.84034 13.467 9.9034 13.4347 9.96891L12.3862 12.0853L10.0421 12.4248C9.89703 12.4458 9.75724 12.4861 9.62341 12.5463C9.48958 12.6062 9.36627 12.6833 9.25416 12.7776C9.14205 12.8721 9.04466 12.98 8.96268 13.1013C8.8807 13.2228 8.81694 13.3532 8.77175 13.4922C8.7262 13.6317 8.70063 13.7743 8.69537 13.9207C8.69012 14.0671 8.70483 14.2111 8.73987 14.3534C8.7749 14.4956 8.82885 14.6301 8.90172 14.7573C8.97459 14.8845 9.06358 14.999 9.16833 15.1013L10.864 16.7511L10.4642 19.0794C10.4386 19.2237 10.4337 19.3691 10.4495 19.5149C10.4649 19.6606 10.5003 19.8018 10.5557 19.9377C10.6107 20.0737 10.6835 20.1994 10.7743 20.3147C10.865 20.4303 10.9698 20.5312 11.0885 20.6174C11.2076 20.7036 11.3362 20.7719 11.4742 20.822C11.6126 20.8721 11.7549 20.9026 11.9017 20.9127C12.0484 20.9229 12.1938 20.9131 12.3375 20.8826C12.4815 20.8521 12.6184 20.8027 12.7481 20.734L14.8445 19.6354L16.9426 20.7382C17.0726 20.8066 17.2096 20.8556 17.3532 20.8854C17.4972 20.9155 17.6423 20.9253 17.7887 20.9148C17.9351 20.904 18.0774 20.8738 18.2154 20.8234C18.3534 20.7733 18.4817 20.705 18.6004 20.6191C18.7192 20.5329 18.8239 20.4324 18.9147 20.3171C19.0054 20.2019 19.0783 20.0765 19.1336 19.9405C19.189 19.8049 19.2247 19.6645 19.2408 19.5187C19.2566 19.373 19.2524 19.2279 19.2275 19.0836L18.8267 16.7556L20.5231 15.1059C20.6289 15.0039 20.7182 14.889 20.7914 14.7619C20.8647 14.635 20.919 14.5002 20.954 14.3576C20.9894 14.2153 21.0041 14.0706 20.9985 13.9242C20.9929 13.7778 20.9673 13.6348 20.9214 13.4954ZM19.6518 14.215L17.7211 16.0917C17.6472 16.1632 17.5946 16.2476 17.5627 16.345C17.5309 16.4424 17.5235 16.5419 17.5407 16.6428L17.9968 19.2942C18.0087 19.3551 18.0028 19.4143 17.9793 19.4721C17.9555 19.5296 17.9183 19.5762 17.8672 19.6116C17.8171 19.6487 17.761 19.6697 17.699 19.6743C17.637 19.6788 17.5785 19.6666 17.5238 19.6371L15.1367 18.3857C15.0459 18.3377 14.9492 18.3136 14.8466 18.3136C14.7436 18.3136 14.6469 18.3377 14.5561 18.3857L12.169 19.6371C12.114 19.6659 12.0558 19.6778 11.9938 19.6732C11.9321 19.6687 11.8761 19.6483 11.826 19.6119C11.7759 19.5755 11.7391 19.5289 11.7156 19.4714C11.6921 19.4143 11.6855 19.3551 11.696 19.2942L12.1521 16.6428C12.1697 16.5419 12.1623 16.4428 12.1304 16.3454C12.0989 16.248 12.046 16.1632 11.9724 16.0917L10.0414 14.215C9.99687 14.1719 9.96709 14.12 9.95203 14.0598C9.93696 13.9999 9.93907 13.94 9.95833 13.8811C9.97725 13.8219 10.0109 13.7725 10.0582 13.7326C10.1058 13.6926 10.1605 13.6681 10.2218 13.659L12.8906 13.2726C12.9922 13.2579 13.0844 13.2204 13.1678 13.1601C13.2508 13.0999 13.3149 13.0238 13.3605 12.9321L14.5544 10.5196C14.5817 10.4643 14.6217 10.4201 14.6746 10.3872C14.7271 10.3546 14.7846 10.3382 14.8466 10.3382C14.9089 10.3382 14.9664 10.3546 15.0189 10.3872C15.0718 10.4201 15.1118 10.4643 15.1391 10.5196L16.3317 12.9314C16.3772 13.0235 16.4417 13.0995 16.5247 13.1598C16.6081 13.22 16.7006 13.2572 16.8022 13.2719L19.471 13.6587C19.5323 13.6674 19.587 13.6919 19.6343 13.7322C19.6819 13.7722 19.7152 13.8216 19.7341 13.8804C19.7534 13.9393 19.7555 13.9988 19.7408 14.0591C19.7261 14.1193 19.6963 14.1712 19.6518 14.2143V14.215Z" fill="black" stroke="black" stroke-width="0.5"/>
									</svg>
								  </a>
								</div>
							  </td>
							</tr>
							<tr role="row" class="odd">
							  <td class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							  </td>
							  <td class="align-middle">
								<div class="d-flex gap-2 align-items-center">
								  <div>
									<img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
								  </div>
								  <div class="pt-2">
									<div class="font-family-secondary leading-none">Dori Griffiths</div>
									<a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
								  </div>
								</div>
							  </td>
							  <td class="align-middle">
								Additional Pay Label
							  </td>
							  <td class="text-center align-middle">
								$00:00
							  </td>
							  <td class="text-center align-middle">
								08/21/2022 9:45 AM
							  </td>
							  <td class="text-center align-middle">$00:00</td>
							  <td class="align-middle">
								<div class="d-flex actions justify-content-center">
								  <a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M9.00065 9.9974C11.3018 9.9974 13.1673 8.13192 13.1673 5.83073C13.1673 3.52954 11.3018 1.66406 9.00065 1.66406C6.69946 1.66406 4.83398 3.52954 4.83398 5.83073C4.83398 8.13192 6.69946 9.9974 9.00065 9.9974Z" stroke="black" stroke-width="2"/>
									  <path d="M13.167 18.3307H3.38871C3.15236 18.3308 2.9187 18.2806 2.70325 18.1834C2.48779 18.0863 2.29546 17.9444 2.13902 17.7672C1.98258 17.5901 1.86562 17.3816 1.79588 17.1558C1.72614 16.93 1.70524 16.6919 1.73454 16.4574L2.05954 13.8541C2.13512 13.2492 2.42906 12.6929 2.88607 12.2896C3.34308 11.8863 3.93169 11.6638 4.54121 11.6641H4.83371" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									  <path d="M17.3337 15.8307L13.167 11.6641M17.3337 11.6641L13.167 15.8307" stroke="black" stroke-width="2" stroke-linecap="round"/>
									</svg>
								  </a>
								  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M14.286 17.1462C15.075 17.1462 15.7146 16.5066 15.7146 15.7176C15.7146 14.9287 15.075 14.2891 14.286 14.2891C13.497 14.2891 12.8574 14.9287 12.8574 15.7176C12.8574 16.5066 13.497 17.1462 14.286 17.1462Z" fill="black"/>
									  <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7749 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703V18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
									  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0V0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black"/>
									  <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Feedback" aria-label="Feedback" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <mask id="mask0_8558_148040" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="21">
									  <path d="M1 1H21V20.2377H1V1Z" fill="white" stroke="white" stroke-width="0.5"/>
									  </mask>
									  <g mask="url(#mask0_8558_148040)">
									  <path d="M8.85115 17.6655L6.68187 18.8041C6.60059 18.8468 6.51476 18.8777 6.42472 18.8966C6.33469 18.9155 6.24395 18.9215 6.15216 18.9148C6.06037 18.9081 5.97139 18.8892 5.88485 18.8577C5.79867 18.8262 5.71809 18.7834 5.64382 18.7295C5.56955 18.6755 5.50404 18.6125 5.44728 18.5399C5.39053 18.4678 5.34499 18.3889 5.31065 18.3038C5.27597 18.219 5.2539 18.1307 5.24409 18.0397C5.23463 17.9482 5.23743 17.8575 5.25355 17.7671L6.02464 13.2782C6.04216 13.177 6.0348 13.0778 6.00292 12.9805C5.97139 12.8831 5.91849 12.7986 5.84492 12.7272L2.57558 9.54821C2.50971 9.48409 2.45401 9.41228 2.40847 9.33275C2.36292 9.25322 2.32894 9.16914 2.30687 9.08016C2.28515 8.99117 2.27569 8.90078 2.27884 8.80935C2.28235 8.71756 2.29811 8.62822 2.32649 8.54134C2.35487 8.45411 2.3948 8.37248 2.4463 8.29645C2.49745 8.22043 2.55806 8.15282 2.62848 8.09396C2.69855 8.03475 2.77562 7.98641 2.85935 7.94892C2.94308 7.91143 3.03066 7.88621 3.1214 7.8729L7.64004 7.21742C7.74164 7.2027 7.83378 7.16522 7.91716 7.10496C8.00019 7.0447 8.0643 6.96868 8.10984 6.87689L10.1299 2.79302C10.1709 2.71104 10.222 2.63607 10.2837 2.56811C10.3453 2.50014 10.4154 2.44233 10.4935 2.39364C10.5717 2.34529 10.6547 2.30886 10.743 2.28363C10.8316 2.25841 10.9216 2.2458 11.0134 2.2458C11.1052 2.2458 11.1956 2.25841 11.2839 2.28363C11.3722 2.30886 11.4552 2.34529 11.5333 2.39364C11.6115 2.44198 11.6815 2.50014 11.7432 2.56811C11.8048 2.63607 11.856 2.71104 11.897 2.79302L13.9177 6.87759C13.9633 6.96938 14.0274 7.0454 14.1104 7.10566C14.1934 7.16592 14.2859 7.2034 14.3875 7.21812L18.9062 7.8736C18.9969 7.88656 19.0841 7.91214 19.1682 7.94962C19.2519 7.98711 19.3287 8.03545 19.3991 8.09466C19.4691 8.15352 19.5301 8.22113 19.5813 8.29715C19.6328 8.37318 19.6723 8.45481 19.7007 8.54169C19.7294 8.62892 19.7452 8.71826 19.7484 8.81005C19.7519 8.90148 19.7424 8.99187 19.7207 9.08051C19.6986 9.16949 19.6646 9.25392 19.6191 9.33345C19.5735 9.41298 19.5178 9.48479 19.452 9.54856L18.4581 10.5155C18.4272 10.5435 18.3996 10.5747 18.375 10.6083C18.3505 10.642 18.3295 10.6777 18.3123 10.7155C18.2952 10.7534 18.2819 10.7926 18.2724 10.8332C18.2629 10.8739 18.2577 10.9149 18.2563 10.9566C18.2552 10.9982 18.2584 11.0396 18.2654 11.0806C18.2727 11.1216 18.2836 11.1615 18.299 11.2C18.3141 11.2389 18.333 11.2757 18.3558 11.3107C18.3782 11.3458 18.4041 11.3784 18.4332 11.4081C18.4623 11.4379 18.4942 11.4645 18.5285 11.488C18.5632 11.5115 18.5996 11.5311 18.6381 11.5476C18.6767 11.5637 18.7163 11.576 18.7573 11.584C18.7983 11.5921 18.8392 11.5963 18.8813 11.5963C18.923 11.5963 18.9643 11.5921 19.0049 11.5837C19.0459 11.5753 19.0855 11.563 19.1241 11.5469C19.1626 11.5304 19.199 11.5104 19.2334 11.487C19.2677 11.4635 19.2996 11.4369 19.3287 11.4067L20.3233 10.4402C20.3975 10.368 20.4662 10.2909 20.5296 10.2093C20.593 10.1273 20.6501 10.0418 20.7016 9.95214C20.7531 9.86246 20.798 9.76962 20.8365 9.67363C20.875 9.57763 20.9066 9.47954 20.9311 9.37934C20.956 9.2788 20.9738 9.17755 20.9844 9.07455C20.9949 8.9719 20.9984 8.8689 20.9945 8.76555C20.9907 8.66221 20.9798 8.55991 20.9619 8.45796C20.9437 8.35636 20.9185 8.25652 20.8866 8.15807C20.8547 8.05998 20.8158 7.96434 20.7706 7.8715C20.7251 7.77866 20.6736 7.68932 20.6158 7.60349C20.558 7.51766 20.4946 7.43638 20.4252 7.35965C20.3562 7.28258 20.2819 7.21076 20.2027 7.1442C20.1236 7.07763 20.0402 7.01668 19.9526 6.96167C19.865 6.90667 19.7739 6.85797 19.6793 6.81558C19.5851 6.77319 19.4881 6.73746 19.3886 6.70873C19.2891 6.67965 19.1882 6.65758 19.0859 6.64287L14.892 6.03468L13.016 2.24159C12.9701 2.14875 12.9179 2.05977 12.8597 1.97429C12.8012 1.8888 12.7371 1.80788 12.6677 1.73115C12.598 1.65478 12.5234 1.58331 12.4439 1.5171C12.3643 1.45088 12.2802 1.39027 12.1923 1.33562C12.1044 1.28132 12.0129 1.23297 11.918 1.19093C11.8234 1.14924 11.726 1.11386 11.6265 1.08548C11.5267 1.0571 11.4254 1.03573 11.3228 1.02172C11.2201 1.00736 11.1171 1 11.0134 1C10.9097 1 10.8067 1.00736 10.7041 1.02172C10.6014 1.03573 10.5002 1.0571 10.4003 1.08548C10.3008 1.11386 10.2035 1.14924 10.1089 1.19093C10.0139 1.23297 9.92248 1.28132 9.83455 1.33562C9.74661 1.39027 9.66288 1.45088 9.583 1.5171C9.50348 1.58331 9.42886 1.65478 9.35914 1.73115C9.28977 1.80788 9.22566 1.8888 9.16751 1.97429C9.109 2.05977 9.0568 2.14875 9.01091 2.24159L7.13555 6.03223L2.94168 6.64041C2.83938 6.65513 2.73848 6.6772 2.63899 6.70628C2.53949 6.73536 2.4428 6.77109 2.34821 6.81348C2.25397 6.85587 2.16288 6.90457 2.0753 6.95957C1.98771 7.01457 1.90433 7.07553 1.82516 7.1421C1.74598 7.20866 1.67171 7.28048 1.60269 7.35755C1.53368 7.43428 1.47027 7.51555 1.41246 7.60139C1.35465 7.68722 1.30316 7.77656 1.25761 7.86939C1.21242 7.96223 1.17353 8.05753 1.14165 8.15597C1.10977 8.25406 1.08455 8.35426 1.06633 8.45586C1.04846 8.55746 1.0376 8.6601 1.03375 8.7631C1.02989 8.86645 1.0334 8.96945 1.04391 9.0721C1.05442 9.17475 1.07193 9.27635 1.09681 9.37689C1.12168 9.47709 1.15321 9.57518 1.1914 9.67117C1.22994 9.76717 1.27478 9.85966 1.32628 9.94934C1.37743 10.0394 1.43488 10.1249 1.49829 10.2068C1.56135 10.2885 1.63002 10.3655 1.70429 10.4377L4.73925 13.3882L4.02387 17.559C4.006 17.6609 3.99549 17.7639 3.99199 17.8673C3.98848 17.9706 3.99234 18.074 4.00355 18.177C4.01441 18.2796 4.03263 18.3816 4.05785 18.4818C4.08307 18.5823 4.11496 18.6804 4.15419 18.7764C4.19308 18.8724 4.23862 18.9652 4.29047 19.0546C4.34232 19.1443 4.40048 19.2297 4.46424 19.3114C4.52835 19.393 4.59772 19.4697 4.67234 19.5415C4.74696 19.6134 4.82649 19.6799 4.91022 19.7405C4.9943 19.8015 5.08188 19.8562 5.17367 19.9048C5.26546 19.9532 5.3597 19.9952 5.45744 20.031C5.55484 20.0664 5.65433 20.0947 5.75593 20.1165C5.85753 20.1378 5.95983 20.1522 6.06353 20.1595C6.16687 20.1669 6.27057 20.1669 6.37392 20.1599C6.47762 20.1529 6.57992 20.1385 6.68152 20.1172C6.78312 20.0958 6.88261 20.0674 6.98036 20.032C7.07775 19.997 7.17234 19.9549 7.26413 19.9066L9.43306 18.7694C9.4709 18.7512 9.50663 18.7295 9.53991 18.7042C9.57355 18.679 9.60402 18.6506 9.6317 18.6195C9.65973 18.5879 9.6839 18.554 9.70492 18.5179C9.72559 18.4814 9.74276 18.4436 9.75607 18.4037C9.76938 18.3641 9.77849 18.3234 9.7834 18.2817C9.7883 18.24 9.789 18.1987 9.7855 18.1567C9.78235 18.115 9.77464 18.074 9.76308 18.0341C9.75117 17.9938 9.73575 17.9552 9.71613 17.9181C9.69651 17.881 9.67339 17.8463 9.64677 17.8137C9.62049 17.7815 9.59071 17.752 9.55848 17.7254C9.5259 17.6991 9.49087 17.676 9.45373 17.6567C9.41659 17.6371 9.37806 17.6217 9.33742 17.6098C9.29713 17.5982 9.25614 17.5905 9.21445 17.5874C9.17241 17.5839 9.13072 17.5846 9.08903 17.5898C9.04734 17.5947 9.0067 17.6038 8.96676 17.6168C8.92718 17.6301 8.88899 17.6473 8.85255 17.668L8.85115 17.6655Z" fill="black" stroke="black" stroke-width="0.5"/>
									  </g>
									  <path d="M20.9214 13.4954C20.8762 13.356 20.8128 13.2253 20.7312 13.1034C20.6492 12.9815 20.5522 12.8735 20.4397 12.779C20.3272 12.6844 20.2039 12.6073 20.0697 12.5477C19.9356 12.4878 19.7958 12.4475 19.65 12.4272L17.3066 12.0877L16.2581 9.97136C16.2262 9.90585 16.1894 9.84279 16.1488 9.78218C16.1078 9.72157 16.0629 9.66412 16.0139 9.60981C15.9649 9.55586 15.9123 9.50506 15.8562 9.45812C15.8002 9.41117 15.741 9.36843 15.679 9.3299C15.6166 9.29136 15.5522 9.25738 15.4852 9.2276C15.4183 9.19817 15.3497 9.1733 15.2792 9.15333C15.2088 9.13336 15.1374 9.11829 15.0648 9.10848C14.9923 9.09832 14.9194 9.09342 14.8466 9.09377C14.7734 9.09342 14.7005 9.09797 14.628 9.10813C14.5554 9.11794 14.484 9.13266 14.4139 9.15263C14.3435 9.17259 14.2748 9.19712 14.2079 9.22655C14.141 9.25632 14.0765 9.29031 14.0142 9.32884C13.9522 9.36738 13.893 9.40977 13.8369 9.45672C13.7809 9.50331 13.7283 9.55376 13.6793 9.60806C13.6302 9.66201 13.5854 9.71947 13.5444 9.78008C13.5034 9.84034 13.467 9.9034 13.4347 9.96891L12.3862 12.0853L10.0421 12.4248C9.89703 12.4458 9.75724 12.4861 9.62341 12.5463C9.48958 12.6062 9.36627 12.6833 9.25416 12.7776C9.14205 12.8721 9.04466 12.98 8.96268 13.1013C8.8807 13.2228 8.81694 13.3532 8.77175 13.4922C8.7262 13.6317 8.70063 13.7743 8.69537 13.9207C8.69012 14.0671 8.70483 14.2111 8.73987 14.3534C8.7749 14.4956 8.82885 14.6301 8.90172 14.7573C8.97459 14.8845 9.06358 14.999 9.16833 15.1013L10.864 16.7511L10.4642 19.0794C10.4386 19.2237 10.4337 19.3691 10.4495 19.5149C10.4649 19.6606 10.5003 19.8018 10.5557 19.9377C10.6107 20.0737 10.6835 20.1994 10.7743 20.3147C10.865 20.4303 10.9698 20.5312 11.0885 20.6174C11.2076 20.7036 11.3362 20.7719 11.4742 20.822C11.6126 20.8721 11.7549 20.9026 11.9017 20.9127C12.0484 20.9229 12.1938 20.9131 12.3375 20.8826C12.4815 20.8521 12.6184 20.8027 12.7481 20.734L14.8445 19.6354L16.9426 20.7382C17.0726 20.8066 17.2096 20.8556 17.3532 20.8854C17.4972 20.9155 17.6423 20.9253 17.7887 20.9148C17.9351 20.904 18.0774 20.8738 18.2154 20.8234C18.3534 20.7733 18.4817 20.705 18.6004 20.6191C18.7192 20.5329 18.8239 20.4324 18.9147 20.3171C19.0054 20.2019 19.0783 20.0765 19.1336 19.9405C19.189 19.8049 19.2247 19.6645 19.2408 19.5187C19.2566 19.373 19.2524 19.2279 19.2275 19.0836L18.8267 16.7556L20.5231 15.1059C20.6289 15.0039 20.7182 14.889 20.7914 14.7619C20.8647 14.635 20.919 14.5002 20.954 14.3576C20.9894 14.2153 21.0041 14.0706 20.9985 13.9242C20.9929 13.7778 20.9673 13.6348 20.9214 13.4954ZM19.6518 14.215L17.7211 16.0917C17.6472 16.1632 17.5946 16.2476 17.5627 16.345C17.5309 16.4424 17.5235 16.5419 17.5407 16.6428L17.9968 19.2942C18.0087 19.3551 18.0028 19.4143 17.9793 19.4721C17.9555 19.5296 17.9183 19.5762 17.8672 19.6116C17.8171 19.6487 17.761 19.6697 17.699 19.6743C17.637 19.6788 17.5785 19.6666 17.5238 19.6371L15.1367 18.3857C15.0459 18.3377 14.9492 18.3136 14.8466 18.3136C14.7436 18.3136 14.6469 18.3377 14.5561 18.3857L12.169 19.6371C12.114 19.6659 12.0558 19.6778 11.9938 19.6732C11.9321 19.6687 11.8761 19.6483 11.826 19.6119C11.7759 19.5755 11.7391 19.5289 11.7156 19.4714C11.6921 19.4143 11.6855 19.3551 11.696 19.2942L12.1521 16.6428C12.1697 16.5419 12.1623 16.4428 12.1304 16.3454C12.0989 16.248 12.046 16.1632 11.9724 16.0917L10.0414 14.215C9.99687 14.1719 9.96709 14.12 9.95203 14.0598C9.93696 13.9999 9.93907 13.94 9.95833 13.8811C9.97725 13.8219 10.0109 13.7725 10.0582 13.7326C10.1058 13.6926 10.1605 13.6681 10.2218 13.659L12.8906 13.2726C12.9922 13.2579 13.0844 13.2204 13.1678 13.1601C13.2508 13.0999 13.3149 13.0238 13.3605 12.9321L14.5544 10.5196C14.5817 10.4643 14.6217 10.4201 14.6746 10.3872C14.7271 10.3546 14.7846 10.3382 14.8466 10.3382C14.9089 10.3382 14.9664 10.3546 15.0189 10.3872C15.0718 10.4201 15.1118 10.4643 15.1391 10.5196L16.3317 12.9314C16.3772 13.0235 16.4417 13.0995 16.5247 13.1598C16.6081 13.22 16.7006 13.2572 16.8022 13.2719L19.471 13.6587C19.5323 13.6674 19.587 13.6919 19.6343 13.7322C19.6819 13.7722 19.7152 13.8216 19.7341 13.8804C19.7534 13.9393 19.7555 13.9988 19.7408 14.0591C19.7261 14.1193 19.6963 14.1712 19.6518 14.2143V14.215Z" fill="black" stroke="black" stroke-width="0.5"/>
									</svg>
								  </a>
								</div>
							  </td>
							</tr>
							<tr role="row" class="even">
							  <td class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							  </td>
							  <td class="align-middle">
								<div class="d-flex gap-2 align-items-center">
								  <div>
									<img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
								  </div>
								  <div class="pt-2">
									<div class="font-family-secondary leading-none">Dori Griffiths</div>
									<a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
								  </div>
								</div>
							  </td>
							  <td class="align-middle">
								Additional Pay Label
							  </td>
							  <td class="text-center align-middle">
								$00:00
							  </td>
							  <td class="text-center align-middle">
								08/21/2022 9:45 AM
							  </td>
							  <td class="text-center align-middle">$00:00</td>
							  <td class="align-middle">
								<div class="d-flex actions justify-content-center">
								  <a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M9.00065 9.9974C11.3018 9.9974 13.1673 8.13192 13.1673 5.83073C13.1673 3.52954 11.3018 1.66406 9.00065 1.66406C6.69946 1.66406 4.83398 3.52954 4.83398 5.83073C4.83398 8.13192 6.69946 9.9974 9.00065 9.9974Z" stroke="black" stroke-width="2"/>
									  <path d="M13.167 18.3307H3.38871C3.15236 18.3308 2.9187 18.2806 2.70325 18.1834C2.48779 18.0863 2.29546 17.9444 2.13902 17.7672C1.98258 17.5901 1.86562 17.3816 1.79588 17.1558C1.72614 16.93 1.70524 16.6919 1.73454 16.4574L2.05954 13.8541C2.13512 13.2492 2.42906 12.6929 2.88607 12.2896C3.34308 11.8863 3.93169 11.6638 4.54121 11.6641H4.83371" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									  <path d="M17.3337 15.8307L13.167 11.6641M17.3337 11.6641L13.167 15.8307" stroke="black" stroke-width="2" stroke-linecap="round"/>
									</svg>
								  </a>
								  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M14.286 17.1462C15.075 17.1462 15.7146 16.5066 15.7146 15.7176C15.7146 14.9287 15.075 14.2891 14.286 14.2891C13.497 14.2891 12.8574 14.9287 12.8574 15.7176C12.8574 16.5066 13.497 17.1462 14.286 17.1462Z" fill="black"/>
									  <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7749 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703V18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
									  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0V0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black"/>
									  <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Feedback" aria-label="Feedback" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <mask id="mask0_8558_148040" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="21">
									  <path d="M1 1H21V20.2377H1V1Z" fill="white" stroke="white" stroke-width="0.5"/>
									  </mask>
									  <g mask="url(#mask0_8558_148040)">
									  <path d="M8.85115 17.6655L6.68187 18.8041C6.60059 18.8468 6.51476 18.8777 6.42472 18.8966C6.33469 18.9155 6.24395 18.9215 6.15216 18.9148C6.06037 18.9081 5.97139 18.8892 5.88485 18.8577C5.79867 18.8262 5.71809 18.7834 5.64382 18.7295C5.56955 18.6755 5.50404 18.6125 5.44728 18.5399C5.39053 18.4678 5.34499 18.3889 5.31065 18.3038C5.27597 18.219 5.2539 18.1307 5.24409 18.0397C5.23463 17.9482 5.23743 17.8575 5.25355 17.7671L6.02464 13.2782C6.04216 13.177 6.0348 13.0778 6.00292 12.9805C5.97139 12.8831 5.91849 12.7986 5.84492 12.7272L2.57558 9.54821C2.50971 9.48409 2.45401 9.41228 2.40847 9.33275C2.36292 9.25322 2.32894 9.16914 2.30687 9.08016C2.28515 8.99117 2.27569 8.90078 2.27884 8.80935C2.28235 8.71756 2.29811 8.62822 2.32649 8.54134C2.35487 8.45411 2.3948 8.37248 2.4463 8.29645C2.49745 8.22043 2.55806 8.15282 2.62848 8.09396C2.69855 8.03475 2.77562 7.98641 2.85935 7.94892C2.94308 7.91143 3.03066 7.88621 3.1214 7.8729L7.64004 7.21742C7.74164 7.2027 7.83378 7.16522 7.91716 7.10496C8.00019 7.0447 8.0643 6.96868 8.10984 6.87689L10.1299 2.79302C10.1709 2.71104 10.222 2.63607 10.2837 2.56811C10.3453 2.50014 10.4154 2.44233 10.4935 2.39364C10.5717 2.34529 10.6547 2.30886 10.743 2.28363C10.8316 2.25841 10.9216 2.2458 11.0134 2.2458C11.1052 2.2458 11.1956 2.25841 11.2839 2.28363C11.3722 2.30886 11.4552 2.34529 11.5333 2.39364C11.6115 2.44198 11.6815 2.50014 11.7432 2.56811C11.8048 2.63607 11.856 2.71104 11.897 2.79302L13.9177 6.87759C13.9633 6.96938 14.0274 7.0454 14.1104 7.10566C14.1934 7.16592 14.2859 7.2034 14.3875 7.21812L18.9062 7.8736C18.9969 7.88656 19.0841 7.91214 19.1682 7.94962C19.2519 7.98711 19.3287 8.03545 19.3991 8.09466C19.4691 8.15352 19.5301 8.22113 19.5813 8.29715C19.6328 8.37318 19.6723 8.45481 19.7007 8.54169C19.7294 8.62892 19.7452 8.71826 19.7484 8.81005C19.7519 8.90148 19.7424 8.99187 19.7207 9.08051C19.6986 9.16949 19.6646 9.25392 19.6191 9.33345C19.5735 9.41298 19.5178 9.48479 19.452 9.54856L18.4581 10.5155C18.4272 10.5435 18.3996 10.5747 18.375 10.6083C18.3505 10.642 18.3295 10.6777 18.3123 10.7155C18.2952 10.7534 18.2819 10.7926 18.2724 10.8332C18.2629 10.8739 18.2577 10.9149 18.2563 10.9566C18.2552 10.9982 18.2584 11.0396 18.2654 11.0806C18.2727 11.1216 18.2836 11.1615 18.299 11.2C18.3141 11.2389 18.333 11.2757 18.3558 11.3107C18.3782 11.3458 18.4041 11.3784 18.4332 11.4081C18.4623 11.4379 18.4942 11.4645 18.5285 11.488C18.5632 11.5115 18.5996 11.5311 18.6381 11.5476C18.6767 11.5637 18.7163 11.576 18.7573 11.584C18.7983 11.5921 18.8392 11.5963 18.8813 11.5963C18.923 11.5963 18.9643 11.5921 19.0049 11.5837C19.0459 11.5753 19.0855 11.563 19.1241 11.5469C19.1626 11.5304 19.199 11.5104 19.2334 11.487C19.2677 11.4635 19.2996 11.4369 19.3287 11.4067L20.3233 10.4402C20.3975 10.368 20.4662 10.2909 20.5296 10.2093C20.593 10.1273 20.6501 10.0418 20.7016 9.95214C20.7531 9.86246 20.798 9.76962 20.8365 9.67363C20.875 9.57763 20.9066 9.47954 20.9311 9.37934C20.956 9.2788 20.9738 9.17755 20.9844 9.07455C20.9949 8.9719 20.9984 8.8689 20.9945 8.76555C20.9907 8.66221 20.9798 8.55991 20.9619 8.45796C20.9437 8.35636 20.9185 8.25652 20.8866 8.15807C20.8547 8.05998 20.8158 7.96434 20.7706 7.8715C20.7251 7.77866 20.6736 7.68932 20.6158 7.60349C20.558 7.51766 20.4946 7.43638 20.4252 7.35965C20.3562 7.28258 20.2819 7.21076 20.2027 7.1442C20.1236 7.07763 20.0402 7.01668 19.9526 6.96167C19.865 6.90667 19.7739 6.85797 19.6793 6.81558C19.5851 6.77319 19.4881 6.73746 19.3886 6.70873C19.2891 6.67965 19.1882 6.65758 19.0859 6.64287L14.892 6.03468L13.016 2.24159C12.9701 2.14875 12.9179 2.05977 12.8597 1.97429C12.8012 1.8888 12.7371 1.80788 12.6677 1.73115C12.598 1.65478 12.5234 1.58331 12.4439 1.5171C12.3643 1.45088 12.2802 1.39027 12.1923 1.33562C12.1044 1.28132 12.0129 1.23297 11.918 1.19093C11.8234 1.14924 11.726 1.11386 11.6265 1.08548C11.5267 1.0571 11.4254 1.03573 11.3228 1.02172C11.2201 1.00736 11.1171 1 11.0134 1C10.9097 1 10.8067 1.00736 10.7041 1.02172C10.6014 1.03573 10.5002 1.0571 10.4003 1.08548C10.3008 1.11386 10.2035 1.14924 10.1089 1.19093C10.0139 1.23297 9.92248 1.28132 9.83455 1.33562C9.74661 1.39027 9.66288 1.45088 9.583 1.5171C9.50348 1.58331 9.42886 1.65478 9.35914 1.73115C9.28977 1.80788 9.22566 1.8888 9.16751 1.97429C9.109 2.05977 9.0568 2.14875 9.01091 2.24159L7.13555 6.03223L2.94168 6.64041C2.83938 6.65513 2.73848 6.6772 2.63899 6.70628C2.53949 6.73536 2.4428 6.77109 2.34821 6.81348C2.25397 6.85587 2.16288 6.90457 2.0753 6.95957C1.98771 7.01457 1.90433 7.07553 1.82516 7.1421C1.74598 7.20866 1.67171 7.28048 1.60269 7.35755C1.53368 7.43428 1.47027 7.51555 1.41246 7.60139C1.35465 7.68722 1.30316 7.77656 1.25761 7.86939C1.21242 7.96223 1.17353 8.05753 1.14165 8.15597C1.10977 8.25406 1.08455 8.35426 1.06633 8.45586C1.04846 8.55746 1.0376 8.6601 1.03375 8.7631C1.02989 8.86645 1.0334 8.96945 1.04391 9.0721C1.05442 9.17475 1.07193 9.27635 1.09681 9.37689C1.12168 9.47709 1.15321 9.57518 1.1914 9.67117C1.22994 9.76717 1.27478 9.85966 1.32628 9.94934C1.37743 10.0394 1.43488 10.1249 1.49829 10.2068C1.56135 10.2885 1.63002 10.3655 1.70429 10.4377L4.73925 13.3882L4.02387 17.559C4.006 17.6609 3.99549 17.7639 3.99199 17.8673C3.98848 17.9706 3.99234 18.074 4.00355 18.177C4.01441 18.2796 4.03263 18.3816 4.05785 18.4818C4.08307 18.5823 4.11496 18.6804 4.15419 18.7764C4.19308 18.8724 4.23862 18.9652 4.29047 19.0546C4.34232 19.1443 4.40048 19.2297 4.46424 19.3114C4.52835 19.393 4.59772 19.4697 4.67234 19.5415C4.74696 19.6134 4.82649 19.6799 4.91022 19.7405C4.9943 19.8015 5.08188 19.8562 5.17367 19.9048C5.26546 19.9532 5.3597 19.9952 5.45744 20.031C5.55484 20.0664 5.65433 20.0947 5.75593 20.1165C5.85753 20.1378 5.95983 20.1522 6.06353 20.1595C6.16687 20.1669 6.27057 20.1669 6.37392 20.1599C6.47762 20.1529 6.57992 20.1385 6.68152 20.1172C6.78312 20.0958 6.88261 20.0674 6.98036 20.032C7.07775 19.997 7.17234 19.9549 7.26413 19.9066L9.43306 18.7694C9.4709 18.7512 9.50663 18.7295 9.53991 18.7042C9.57355 18.679 9.60402 18.6506 9.6317 18.6195C9.65973 18.5879 9.6839 18.554 9.70492 18.5179C9.72559 18.4814 9.74276 18.4436 9.75607 18.4037C9.76938 18.3641 9.77849 18.3234 9.7834 18.2817C9.7883 18.24 9.789 18.1987 9.7855 18.1567C9.78235 18.115 9.77464 18.074 9.76308 18.0341C9.75117 17.9938 9.73575 17.9552 9.71613 17.9181C9.69651 17.881 9.67339 17.8463 9.64677 17.8137C9.62049 17.7815 9.59071 17.752 9.55848 17.7254C9.5259 17.6991 9.49087 17.676 9.45373 17.6567C9.41659 17.6371 9.37806 17.6217 9.33742 17.6098C9.29713 17.5982 9.25614 17.5905 9.21445 17.5874C9.17241 17.5839 9.13072 17.5846 9.08903 17.5898C9.04734 17.5947 9.0067 17.6038 8.96676 17.6168C8.92718 17.6301 8.88899 17.6473 8.85255 17.668L8.85115 17.6655Z" fill="black" stroke="black" stroke-width="0.5"/>
									  </g>
									  <path d="M20.9214 13.4954C20.8762 13.356 20.8128 13.2253 20.7312 13.1034C20.6492 12.9815 20.5522 12.8735 20.4397 12.779C20.3272 12.6844 20.2039 12.6073 20.0697 12.5477C19.9356 12.4878 19.7958 12.4475 19.65 12.4272L17.3066 12.0877L16.2581 9.97136C16.2262 9.90585 16.1894 9.84279 16.1488 9.78218C16.1078 9.72157 16.0629 9.66412 16.0139 9.60981C15.9649 9.55586 15.9123 9.50506 15.8562 9.45812C15.8002 9.41117 15.741 9.36843 15.679 9.3299C15.6166 9.29136 15.5522 9.25738 15.4852 9.2276C15.4183 9.19817 15.3497 9.1733 15.2792 9.15333C15.2088 9.13336 15.1374 9.11829 15.0648 9.10848C14.9923 9.09832 14.9194 9.09342 14.8466 9.09377C14.7734 9.09342 14.7005 9.09797 14.628 9.10813C14.5554 9.11794 14.484 9.13266 14.4139 9.15263C14.3435 9.17259 14.2748 9.19712 14.2079 9.22655C14.141 9.25632 14.0765 9.29031 14.0142 9.32884C13.9522 9.36738 13.893 9.40977 13.8369 9.45672C13.7809 9.50331 13.7283 9.55376 13.6793 9.60806C13.6302 9.66201 13.5854 9.71947 13.5444 9.78008C13.5034 9.84034 13.467 9.9034 13.4347 9.96891L12.3862 12.0853L10.0421 12.4248C9.89703 12.4458 9.75724 12.4861 9.62341 12.5463C9.48958 12.6062 9.36627 12.6833 9.25416 12.7776C9.14205 12.8721 9.04466 12.98 8.96268 13.1013C8.8807 13.2228 8.81694 13.3532 8.77175 13.4922C8.7262 13.6317 8.70063 13.7743 8.69537 13.9207C8.69012 14.0671 8.70483 14.2111 8.73987 14.3534C8.7749 14.4956 8.82885 14.6301 8.90172 14.7573C8.97459 14.8845 9.06358 14.999 9.16833 15.1013L10.864 16.7511L10.4642 19.0794C10.4386 19.2237 10.4337 19.3691 10.4495 19.5149C10.4649 19.6606 10.5003 19.8018 10.5557 19.9377C10.6107 20.0737 10.6835 20.1994 10.7743 20.3147C10.865 20.4303 10.9698 20.5312 11.0885 20.6174C11.2076 20.7036 11.3362 20.7719 11.4742 20.822C11.6126 20.8721 11.7549 20.9026 11.9017 20.9127C12.0484 20.9229 12.1938 20.9131 12.3375 20.8826C12.4815 20.8521 12.6184 20.8027 12.7481 20.734L14.8445 19.6354L16.9426 20.7382C17.0726 20.8066 17.2096 20.8556 17.3532 20.8854C17.4972 20.9155 17.6423 20.9253 17.7887 20.9148C17.9351 20.904 18.0774 20.8738 18.2154 20.8234C18.3534 20.7733 18.4817 20.705 18.6004 20.6191C18.7192 20.5329 18.8239 20.4324 18.9147 20.3171C19.0054 20.2019 19.0783 20.0765 19.1336 19.9405C19.189 19.8049 19.2247 19.6645 19.2408 19.5187C19.2566 19.373 19.2524 19.2279 19.2275 19.0836L18.8267 16.7556L20.5231 15.1059C20.6289 15.0039 20.7182 14.889 20.7914 14.7619C20.8647 14.635 20.919 14.5002 20.954 14.3576C20.9894 14.2153 21.0041 14.0706 20.9985 13.9242C20.9929 13.7778 20.9673 13.6348 20.9214 13.4954ZM19.6518 14.215L17.7211 16.0917C17.6472 16.1632 17.5946 16.2476 17.5627 16.345C17.5309 16.4424 17.5235 16.5419 17.5407 16.6428L17.9968 19.2942C18.0087 19.3551 18.0028 19.4143 17.9793 19.4721C17.9555 19.5296 17.9183 19.5762 17.8672 19.6116C17.8171 19.6487 17.761 19.6697 17.699 19.6743C17.637 19.6788 17.5785 19.6666 17.5238 19.6371L15.1367 18.3857C15.0459 18.3377 14.9492 18.3136 14.8466 18.3136C14.7436 18.3136 14.6469 18.3377 14.5561 18.3857L12.169 19.6371C12.114 19.6659 12.0558 19.6778 11.9938 19.6732C11.9321 19.6687 11.8761 19.6483 11.826 19.6119C11.7759 19.5755 11.7391 19.5289 11.7156 19.4714C11.6921 19.4143 11.6855 19.3551 11.696 19.2942L12.1521 16.6428C12.1697 16.5419 12.1623 16.4428 12.1304 16.3454C12.0989 16.248 12.046 16.1632 11.9724 16.0917L10.0414 14.215C9.99687 14.1719 9.96709 14.12 9.95203 14.0598C9.93696 13.9999 9.93907 13.94 9.95833 13.8811C9.97725 13.8219 10.0109 13.7725 10.0582 13.7326C10.1058 13.6926 10.1605 13.6681 10.2218 13.659L12.8906 13.2726C12.9922 13.2579 13.0844 13.2204 13.1678 13.1601C13.2508 13.0999 13.3149 13.0238 13.3605 12.9321L14.5544 10.5196C14.5817 10.4643 14.6217 10.4201 14.6746 10.3872C14.7271 10.3546 14.7846 10.3382 14.8466 10.3382C14.9089 10.3382 14.9664 10.3546 15.0189 10.3872C15.0718 10.4201 15.1118 10.4643 15.1391 10.5196L16.3317 12.9314C16.3772 13.0235 16.4417 13.0995 16.5247 13.1598C16.6081 13.22 16.7006 13.2572 16.8022 13.2719L19.471 13.6587C19.5323 13.6674 19.587 13.6919 19.6343 13.7322C19.6819 13.7722 19.7152 13.8216 19.7341 13.8804C19.7534 13.9393 19.7555 13.9988 19.7408 14.0591C19.7261 14.1193 19.6963 14.1712 19.6518 14.2143V14.215Z" fill="black" stroke="black" stroke-width="0.5"/>
									</svg>
								  </a>
								</div>
							  </td>
							</tr>
							<tr role="row" class="odd">
							  <td class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							  </td>
							  <td class="align-middle">
								<div class="d-flex gap-2 align-items-center">
								  <div>
									<img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
								  </div>
								  <div class="pt-2">
									<div class="font-family-secondary leading-none">Dori Griffiths</div>
									<a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
								  </div>
								</div>
							  </td>
							  <td class="align-middle">
								Additional Pay Label
							  </td>
							  <td class="text-center align-middle">
								$00:00
							  </td>
							  <td class="text-center align-middle">
								08/21/2022 9:45 AM
							  </td>
							  <td class="text-center align-middle">$00:00</td>
							  <td class="align-middle">
								<div class="d-flex actions justify-content-center">
								  <a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M9.00065 9.9974C11.3018 9.9974 13.1673 8.13192 13.1673 5.83073C13.1673 3.52954 11.3018 1.66406 9.00065 1.66406C6.69946 1.66406 4.83398 3.52954 4.83398 5.83073C4.83398 8.13192 6.69946 9.9974 9.00065 9.9974Z" stroke="black" stroke-width="2"/>
									  <path d="M13.167 18.3307H3.38871C3.15236 18.3308 2.9187 18.2806 2.70325 18.1834C2.48779 18.0863 2.29546 17.9444 2.13902 17.7672C1.98258 17.5901 1.86562 17.3816 1.79588 17.1558C1.72614 16.93 1.70524 16.6919 1.73454 16.4574L2.05954 13.8541C2.13512 13.2492 2.42906 12.6929 2.88607 12.2896C3.34308 11.8863 3.93169 11.6638 4.54121 11.6641H4.83371" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									  <path d="M17.3337 15.8307L13.167 11.6641M17.3337 11.6641L13.167 15.8307" stroke="black" stroke-width="2" stroke-linecap="round"/>
									</svg>
								  </a>
								  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M14.286 17.1462C15.075 17.1462 15.7146 16.5066 15.7146 15.7176C15.7146 14.9287 15.075 14.2891 14.286 14.2891C13.497 14.2891 12.8574 14.9287 12.8574 15.7176C12.8574 16.5066 13.497 17.1462 14.286 17.1462Z" fill="black"/>
									  <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7749 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703V18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
									  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0V0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black"/>
									  <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Feedback" aria-label="Feedback" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <mask id="mask0_8558_148040" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="21">
									  <path d="M1 1H21V20.2377H1V1Z" fill="white" stroke="white" stroke-width="0.5"/>
									  </mask>
									  <g mask="url(#mask0_8558_148040)">
									  <path d="M8.85115 17.6655L6.68187 18.8041C6.60059 18.8468 6.51476 18.8777 6.42472 18.8966C6.33469 18.9155 6.24395 18.9215 6.15216 18.9148C6.06037 18.9081 5.97139 18.8892 5.88485 18.8577C5.79867 18.8262 5.71809 18.7834 5.64382 18.7295C5.56955 18.6755 5.50404 18.6125 5.44728 18.5399C5.39053 18.4678 5.34499 18.3889 5.31065 18.3038C5.27597 18.219 5.2539 18.1307 5.24409 18.0397C5.23463 17.9482 5.23743 17.8575 5.25355 17.7671L6.02464 13.2782C6.04216 13.177 6.0348 13.0778 6.00292 12.9805C5.97139 12.8831 5.91849 12.7986 5.84492 12.7272L2.57558 9.54821C2.50971 9.48409 2.45401 9.41228 2.40847 9.33275C2.36292 9.25322 2.32894 9.16914 2.30687 9.08016C2.28515 8.99117 2.27569 8.90078 2.27884 8.80935C2.28235 8.71756 2.29811 8.62822 2.32649 8.54134C2.35487 8.45411 2.3948 8.37248 2.4463 8.29645C2.49745 8.22043 2.55806 8.15282 2.62848 8.09396C2.69855 8.03475 2.77562 7.98641 2.85935 7.94892C2.94308 7.91143 3.03066 7.88621 3.1214 7.8729L7.64004 7.21742C7.74164 7.2027 7.83378 7.16522 7.91716 7.10496C8.00019 7.0447 8.0643 6.96868 8.10984 6.87689L10.1299 2.79302C10.1709 2.71104 10.222 2.63607 10.2837 2.56811C10.3453 2.50014 10.4154 2.44233 10.4935 2.39364C10.5717 2.34529 10.6547 2.30886 10.743 2.28363C10.8316 2.25841 10.9216 2.2458 11.0134 2.2458C11.1052 2.2458 11.1956 2.25841 11.2839 2.28363C11.3722 2.30886 11.4552 2.34529 11.5333 2.39364C11.6115 2.44198 11.6815 2.50014 11.7432 2.56811C11.8048 2.63607 11.856 2.71104 11.897 2.79302L13.9177 6.87759C13.9633 6.96938 14.0274 7.0454 14.1104 7.10566C14.1934 7.16592 14.2859 7.2034 14.3875 7.21812L18.9062 7.8736C18.9969 7.88656 19.0841 7.91214 19.1682 7.94962C19.2519 7.98711 19.3287 8.03545 19.3991 8.09466C19.4691 8.15352 19.5301 8.22113 19.5813 8.29715C19.6328 8.37318 19.6723 8.45481 19.7007 8.54169C19.7294 8.62892 19.7452 8.71826 19.7484 8.81005C19.7519 8.90148 19.7424 8.99187 19.7207 9.08051C19.6986 9.16949 19.6646 9.25392 19.6191 9.33345C19.5735 9.41298 19.5178 9.48479 19.452 9.54856L18.4581 10.5155C18.4272 10.5435 18.3996 10.5747 18.375 10.6083C18.3505 10.642 18.3295 10.6777 18.3123 10.7155C18.2952 10.7534 18.2819 10.7926 18.2724 10.8332C18.2629 10.8739 18.2577 10.9149 18.2563 10.9566C18.2552 10.9982 18.2584 11.0396 18.2654 11.0806C18.2727 11.1216 18.2836 11.1615 18.299 11.2C18.3141 11.2389 18.333 11.2757 18.3558 11.3107C18.3782 11.3458 18.4041 11.3784 18.4332 11.4081C18.4623 11.4379 18.4942 11.4645 18.5285 11.488C18.5632 11.5115 18.5996 11.5311 18.6381 11.5476C18.6767 11.5637 18.7163 11.576 18.7573 11.584C18.7983 11.5921 18.8392 11.5963 18.8813 11.5963C18.923 11.5963 18.9643 11.5921 19.0049 11.5837C19.0459 11.5753 19.0855 11.563 19.1241 11.5469C19.1626 11.5304 19.199 11.5104 19.2334 11.487C19.2677 11.4635 19.2996 11.4369 19.3287 11.4067L20.3233 10.4402C20.3975 10.368 20.4662 10.2909 20.5296 10.2093C20.593 10.1273 20.6501 10.0418 20.7016 9.95214C20.7531 9.86246 20.798 9.76962 20.8365 9.67363C20.875 9.57763 20.9066 9.47954 20.9311 9.37934C20.956 9.2788 20.9738 9.17755 20.9844 9.07455C20.9949 8.9719 20.9984 8.8689 20.9945 8.76555C20.9907 8.66221 20.9798 8.55991 20.9619 8.45796C20.9437 8.35636 20.9185 8.25652 20.8866 8.15807C20.8547 8.05998 20.8158 7.96434 20.7706 7.8715C20.7251 7.77866 20.6736 7.68932 20.6158 7.60349C20.558 7.51766 20.4946 7.43638 20.4252 7.35965C20.3562 7.28258 20.2819 7.21076 20.2027 7.1442C20.1236 7.07763 20.0402 7.01668 19.9526 6.96167C19.865 6.90667 19.7739 6.85797 19.6793 6.81558C19.5851 6.77319 19.4881 6.73746 19.3886 6.70873C19.2891 6.67965 19.1882 6.65758 19.0859 6.64287L14.892 6.03468L13.016 2.24159C12.9701 2.14875 12.9179 2.05977 12.8597 1.97429C12.8012 1.8888 12.7371 1.80788 12.6677 1.73115C12.598 1.65478 12.5234 1.58331 12.4439 1.5171C12.3643 1.45088 12.2802 1.39027 12.1923 1.33562C12.1044 1.28132 12.0129 1.23297 11.918 1.19093C11.8234 1.14924 11.726 1.11386 11.6265 1.08548C11.5267 1.0571 11.4254 1.03573 11.3228 1.02172C11.2201 1.00736 11.1171 1 11.0134 1C10.9097 1 10.8067 1.00736 10.7041 1.02172C10.6014 1.03573 10.5002 1.0571 10.4003 1.08548C10.3008 1.11386 10.2035 1.14924 10.1089 1.19093C10.0139 1.23297 9.92248 1.28132 9.83455 1.33562C9.74661 1.39027 9.66288 1.45088 9.583 1.5171C9.50348 1.58331 9.42886 1.65478 9.35914 1.73115C9.28977 1.80788 9.22566 1.8888 9.16751 1.97429C9.109 2.05977 9.0568 2.14875 9.01091 2.24159L7.13555 6.03223L2.94168 6.64041C2.83938 6.65513 2.73848 6.6772 2.63899 6.70628C2.53949 6.73536 2.4428 6.77109 2.34821 6.81348C2.25397 6.85587 2.16288 6.90457 2.0753 6.95957C1.98771 7.01457 1.90433 7.07553 1.82516 7.1421C1.74598 7.20866 1.67171 7.28048 1.60269 7.35755C1.53368 7.43428 1.47027 7.51555 1.41246 7.60139C1.35465 7.68722 1.30316 7.77656 1.25761 7.86939C1.21242 7.96223 1.17353 8.05753 1.14165 8.15597C1.10977 8.25406 1.08455 8.35426 1.06633 8.45586C1.04846 8.55746 1.0376 8.6601 1.03375 8.7631C1.02989 8.86645 1.0334 8.96945 1.04391 9.0721C1.05442 9.17475 1.07193 9.27635 1.09681 9.37689C1.12168 9.47709 1.15321 9.57518 1.1914 9.67117C1.22994 9.76717 1.27478 9.85966 1.32628 9.94934C1.37743 10.0394 1.43488 10.1249 1.49829 10.2068C1.56135 10.2885 1.63002 10.3655 1.70429 10.4377L4.73925 13.3882L4.02387 17.559C4.006 17.6609 3.99549 17.7639 3.99199 17.8673C3.98848 17.9706 3.99234 18.074 4.00355 18.177C4.01441 18.2796 4.03263 18.3816 4.05785 18.4818C4.08307 18.5823 4.11496 18.6804 4.15419 18.7764C4.19308 18.8724 4.23862 18.9652 4.29047 19.0546C4.34232 19.1443 4.40048 19.2297 4.46424 19.3114C4.52835 19.393 4.59772 19.4697 4.67234 19.5415C4.74696 19.6134 4.82649 19.6799 4.91022 19.7405C4.9943 19.8015 5.08188 19.8562 5.17367 19.9048C5.26546 19.9532 5.3597 19.9952 5.45744 20.031C5.55484 20.0664 5.65433 20.0947 5.75593 20.1165C5.85753 20.1378 5.95983 20.1522 6.06353 20.1595C6.16687 20.1669 6.27057 20.1669 6.37392 20.1599C6.47762 20.1529 6.57992 20.1385 6.68152 20.1172C6.78312 20.0958 6.88261 20.0674 6.98036 20.032C7.07775 19.997 7.17234 19.9549 7.26413 19.9066L9.43306 18.7694C9.4709 18.7512 9.50663 18.7295 9.53991 18.7042C9.57355 18.679 9.60402 18.6506 9.6317 18.6195C9.65973 18.5879 9.6839 18.554 9.70492 18.5179C9.72559 18.4814 9.74276 18.4436 9.75607 18.4037C9.76938 18.3641 9.77849 18.3234 9.7834 18.2817C9.7883 18.24 9.789 18.1987 9.7855 18.1567C9.78235 18.115 9.77464 18.074 9.76308 18.0341C9.75117 17.9938 9.73575 17.9552 9.71613 17.9181C9.69651 17.881 9.67339 17.8463 9.64677 17.8137C9.62049 17.7815 9.59071 17.752 9.55848 17.7254C9.5259 17.6991 9.49087 17.676 9.45373 17.6567C9.41659 17.6371 9.37806 17.6217 9.33742 17.6098C9.29713 17.5982 9.25614 17.5905 9.21445 17.5874C9.17241 17.5839 9.13072 17.5846 9.08903 17.5898C9.04734 17.5947 9.0067 17.6038 8.96676 17.6168C8.92718 17.6301 8.88899 17.6473 8.85255 17.668L8.85115 17.6655Z" fill="black" stroke="black" stroke-width="0.5"/>
									  </g>
									  <path d="M20.9214 13.4954C20.8762 13.356 20.8128 13.2253 20.7312 13.1034C20.6492 12.9815 20.5522 12.8735 20.4397 12.779C20.3272 12.6844 20.2039 12.6073 20.0697 12.5477C19.9356 12.4878 19.7958 12.4475 19.65 12.4272L17.3066 12.0877L16.2581 9.97136C16.2262 9.90585 16.1894 9.84279 16.1488 9.78218C16.1078 9.72157 16.0629 9.66412 16.0139 9.60981C15.9649 9.55586 15.9123 9.50506 15.8562 9.45812C15.8002 9.41117 15.741 9.36843 15.679 9.3299C15.6166 9.29136 15.5522 9.25738 15.4852 9.2276C15.4183 9.19817 15.3497 9.1733 15.2792 9.15333C15.2088 9.13336 15.1374 9.11829 15.0648 9.10848C14.9923 9.09832 14.9194 9.09342 14.8466 9.09377C14.7734 9.09342 14.7005 9.09797 14.628 9.10813C14.5554 9.11794 14.484 9.13266 14.4139 9.15263C14.3435 9.17259 14.2748 9.19712 14.2079 9.22655C14.141 9.25632 14.0765 9.29031 14.0142 9.32884C13.9522 9.36738 13.893 9.40977 13.8369 9.45672C13.7809 9.50331 13.7283 9.55376 13.6793 9.60806C13.6302 9.66201 13.5854 9.71947 13.5444 9.78008C13.5034 9.84034 13.467 9.9034 13.4347 9.96891L12.3862 12.0853L10.0421 12.4248C9.89703 12.4458 9.75724 12.4861 9.62341 12.5463C9.48958 12.6062 9.36627 12.6833 9.25416 12.7776C9.14205 12.8721 9.04466 12.98 8.96268 13.1013C8.8807 13.2228 8.81694 13.3532 8.77175 13.4922C8.7262 13.6317 8.70063 13.7743 8.69537 13.9207C8.69012 14.0671 8.70483 14.2111 8.73987 14.3534C8.7749 14.4956 8.82885 14.6301 8.90172 14.7573C8.97459 14.8845 9.06358 14.999 9.16833 15.1013L10.864 16.7511L10.4642 19.0794C10.4386 19.2237 10.4337 19.3691 10.4495 19.5149C10.4649 19.6606 10.5003 19.8018 10.5557 19.9377C10.6107 20.0737 10.6835 20.1994 10.7743 20.3147C10.865 20.4303 10.9698 20.5312 11.0885 20.6174C11.2076 20.7036 11.3362 20.7719 11.4742 20.822C11.6126 20.8721 11.7549 20.9026 11.9017 20.9127C12.0484 20.9229 12.1938 20.9131 12.3375 20.8826C12.4815 20.8521 12.6184 20.8027 12.7481 20.734L14.8445 19.6354L16.9426 20.7382C17.0726 20.8066 17.2096 20.8556 17.3532 20.8854C17.4972 20.9155 17.6423 20.9253 17.7887 20.9148C17.9351 20.904 18.0774 20.8738 18.2154 20.8234C18.3534 20.7733 18.4817 20.705 18.6004 20.6191C18.7192 20.5329 18.8239 20.4324 18.9147 20.3171C19.0054 20.2019 19.0783 20.0765 19.1336 19.9405C19.189 19.8049 19.2247 19.6645 19.2408 19.5187C19.2566 19.373 19.2524 19.2279 19.2275 19.0836L18.8267 16.7556L20.5231 15.1059C20.6289 15.0039 20.7182 14.889 20.7914 14.7619C20.8647 14.635 20.919 14.5002 20.954 14.3576C20.9894 14.2153 21.0041 14.0706 20.9985 13.9242C20.9929 13.7778 20.9673 13.6348 20.9214 13.4954ZM19.6518 14.215L17.7211 16.0917C17.6472 16.1632 17.5946 16.2476 17.5627 16.345C17.5309 16.4424 17.5235 16.5419 17.5407 16.6428L17.9968 19.2942C18.0087 19.3551 18.0028 19.4143 17.9793 19.4721C17.9555 19.5296 17.9183 19.5762 17.8672 19.6116C17.8171 19.6487 17.761 19.6697 17.699 19.6743C17.637 19.6788 17.5785 19.6666 17.5238 19.6371L15.1367 18.3857C15.0459 18.3377 14.9492 18.3136 14.8466 18.3136C14.7436 18.3136 14.6469 18.3377 14.5561 18.3857L12.169 19.6371C12.114 19.6659 12.0558 19.6778 11.9938 19.6732C11.9321 19.6687 11.8761 19.6483 11.826 19.6119C11.7759 19.5755 11.7391 19.5289 11.7156 19.4714C11.6921 19.4143 11.6855 19.3551 11.696 19.2942L12.1521 16.6428C12.1697 16.5419 12.1623 16.4428 12.1304 16.3454C12.0989 16.248 12.046 16.1632 11.9724 16.0917L10.0414 14.215C9.99687 14.1719 9.96709 14.12 9.95203 14.0598C9.93696 13.9999 9.93907 13.94 9.95833 13.8811C9.97725 13.8219 10.0109 13.7725 10.0582 13.7326C10.1058 13.6926 10.1605 13.6681 10.2218 13.659L12.8906 13.2726C12.9922 13.2579 13.0844 13.2204 13.1678 13.1601C13.2508 13.0999 13.3149 13.0238 13.3605 12.9321L14.5544 10.5196C14.5817 10.4643 14.6217 10.4201 14.6746 10.3872C14.7271 10.3546 14.7846 10.3382 14.8466 10.3382C14.9089 10.3382 14.9664 10.3546 15.0189 10.3872C15.0718 10.4201 15.1118 10.4643 15.1391 10.5196L16.3317 12.9314C16.3772 13.0235 16.4417 13.0995 16.5247 13.1598C16.6081 13.22 16.7006 13.2572 16.8022 13.2719L19.471 13.6587C19.5323 13.6674 19.587 13.6919 19.6343 13.7322C19.6819 13.7722 19.7152 13.8216 19.7341 13.8804C19.7534 13.9393 19.7555 13.9988 19.7408 14.0591C19.7261 14.1193 19.6963 14.1712 19.6518 14.2143V14.215Z" fill="black" stroke="black" stroke-width="0.5"/>
									</svg>
								  </a>
								</div>
							  </td>
							</tr>
						  </tbody>
						</table>
					  </div>
					</div>
				  </div>
				  </div>
				  <!-- Hoverable rows end -->
				  <div class="d-flex justify-content-between">
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
				  </div>
				</div><!-- /Service 1 Assigned Providers -->
				<!-- Service 2 Assigned Providers -->
				<div class="mb-5">
				  <div class="d-lg-flex align-items-center justify-content-between mb-4">
				  <h2 class="mb-lg-0">Service 2 Assigned Providers</h2>
				  <div class="d-flex gap-3">
					<a href="#" class="btn btn-has-icon btn-outline-dark rounded">
					  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.99995 9.64514C10.8594 9.64629 11.7 9.39247 12.4152 8.9158C13.1304 8.43913 13.6881 7.76102 14.0178 6.96728C14.3476 6.17354 14.4344 5.29983 14.2674 4.45671C14.1005 3.61359 13.6872 2.83894 13.0798 2.23077C12.4725 1.62261 11.6984 1.20826 10.8555 1.04016C10.0126 0.872052 9.13876 0.957746 8.34457 1.28639C7.55039 1.61504 6.87154 2.17188 6.39391 2.88644C5.91627 3.60101 5.66133 4.44119 5.66133 5.30069C5.66133 6.4519 6.11824 7.55605 6.93173 8.37062C7.74521 9.18519 8.84874 9.64359 9.99995 9.64514ZM10.0006 2.4618C10.5614 2.46078 11.1099 2.62621 11.5766 2.93714C12.0434 3.24808 12.4073 3.69053 12.6224 4.20847C12.8375 4.7264 12.8941 5.29652 12.7849 5.84662C12.6758 6.39671 12.4058 6.90204 12.0092 7.2986C11.6127 7.69516 11.1073 7.96512 10.5573 8.07428C10.0072 8.18343 9.43704 8.12689 8.9191 7.9118C8.40117 7.69671 7.95871 7.33275 7.64778 6.86601C7.33684 6.39928 7.17141 5.85077 7.17244 5.28995C7.17381 4.5403 7.47222 3.82175 8.0023 3.29166C8.53238 2.76158 9.25093 2.46318 10.0006 2.4618Z" fill="url(#paint0_linear_8558_41723)" stroke="url(#paint1_linear_8558_41723)" stroke-width="0.4"/>
						<path d="M15.6953 11.8235C13.9915 10.7504 12.0149 10.1901 10.0014 10.2094C8.52715 10.1724 7.06288 10.4608 5.71279 11.0541C4.36161 11.6478 3.15807 12.5324 2.18797 13.6446L2.18772 13.6444L2.18071 13.6535C2.07992 13.7833 2.02422 13.9424 2.02205 14.1068L2.02203 14.1068V14.1094V17.7126C2.01395 18.0672 2.14632 18.4107 2.39036 18.6681L2.53552 18.5306L2.39036 18.6681C2.635 18.9262 2.97192 19.0769 3.32738 19.0871L3.32737 19.0872H3.33314H10.2165H10.6823L10.3615 18.7495L9.30592 17.6384L9.24763 17.577L9.16301 17.5761L3.53314 17.5171V14.3955C4.36079 13.5426 5.35356 12.8667 6.45116 12.4094C7.57328 11.9418 8.78042 11.7129 9.99581 11.7372L9.99581 11.7373L10.0025 11.7372C11.6671 11.7148 13.3055 12.1531 14.7365 13.0036L14.8781 13.0877L14.9878 12.965L15.7378 12.1261L15.8955 11.9497L15.6953 11.8235Z" fill="url(#paint2_linear_8558_41723)" stroke="url(#paint3_linear_8558_41723)" stroke-width="0.4"/>
						<path d="M16.667 18.2769H16.9961C16.897 18.3444 16.7802 18.3833 16.6587 18.388H15.0397L15.1397 18.2769H16.667ZM17.2781 17.7407C17.2788 17.8717 17.2396 17.9988 17.167 18.1058V17.7769V17.7158V15.9849L17.2781 15.8611V17.738H17.2781L17.2781 17.7407Z" fill="black" stroke="url(#paint4_linear_8558_41723)"/>
						<path d="M19.4479 10.1973L19.4479 10.1973L19.4445 10.1943C19.2951 10.0613 19.0991 9.99301 18.8994 10.0043C18.6997 10.0157 18.5126 10.1057 18.3792 10.2548L18.3791 10.2549L12.0697 17.3136L9.33285 14.3714C9.26891 14.2976 9.19124 14.2368 9.10414 14.1925C9.0157 14.1475 8.91926 14.1203 8.82033 14.1126C8.72141 14.1049 8.62193 14.1168 8.52758 14.1475C8.43323 14.1782 8.34586 14.2272 8.27045 14.2917L8.27039 14.2917L8.26587 14.2958C8.192 14.363 8.13219 14.4441 8.08989 14.5346C8.04759 14.6251 8.02364 14.723 8.01942 14.8228C8.01521 14.9225 8.03081 15.0221 8.06533 15.1158C8.09985 15.2095 8.1526 15.2955 8.22053 15.3687L8.2206 15.3687L11.9373 19.3687L12.0865 19.5294L12.2328 19.366L19.505 11.2438L19.5051 11.2438L19.5083 11.24C19.6344 11.0919 19.6985 10.9008 19.6872 10.7066C19.676 10.5123 19.5902 10.3299 19.4479 10.1973Z" fill="url(#paint5_linear_8558_41723)" stroke="url(#paint6_linear_8558_41723)" stroke-width="0.4"/>
						<defs>
						<linearGradient id="paint0_linear_8558_41723" x1="10.0058" y1="1.15625" x2="13.3313" y2="1.15625" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint1_linear_8558_41723" x1="10.0058" y1="1.15625" x2="13.3313" y2="1.15625" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint2_linear_8558_41723" x1="8.90519" y1="10.4062" x2="14.268" y2="10.4062" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint3_linear_8558_41723" x1="8.90519" y1="10.4062" x2="14.268" y2="10.4062" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint4_linear_8558_41723" x1="15.8476" y1="14.5547" x2="17.3966" y2="14.5547" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint5_linear_8558_41723" x1="13.8536" y1="10.2031" x2="18.375" y2="10.2031" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						<linearGradient id="paint6_linear_8558_41723" x1="13.8536" y1="10.2031" x2="18.375" y2="10.2031" gradientUnits="userSpaceOnUse">
						<stop stop-color="#213969"/>
						<stop offset="1" stop-color="#204387"/>
						</linearGradient>
						</defs>
					  </svg>
					  Assign Providers
					</a>
					<a href="#" class="btn btn-has-icon btn-primary rounded">
					  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="white"/>
						<path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="white"/>
					  </svg>
					  Team Chat
					</a>
				  </div>
				  </div>
				  <div class="mb-4">
				  <button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					<span>
					  <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M10.001 0.5V8.625C10.001 9.12228 10.1985 9.5992 10.5501 9.95083C10.9018 10.3025 11.3787 10.5 11.876 10.5H20.001V17.6963L18.3847 16.08C18.2686 15.9639 18.1307 15.8719 17.979 15.8091C17.8273 15.7463 17.6647 15.7141 17.5005 15.7141C17.3363 15.7142 17.1738 15.7466 17.0221 15.8095C16.8705 15.8723 16.7327 15.9645 16.6166 16.0806C16.5005 16.1968 16.4085 16.3346 16.3457 16.4863C16.2829 16.638 16.2507 16.8006 16.2507 16.9648C16.2508 17.129 16.2832 17.2916 16.3461 17.4432C16.4089 17.5949 16.5011 17.7327 16.6172 17.8488L18.0185 19.25H12.501C12.1695 19.25 11.8515 19.3817 11.6171 19.6161C11.3827 19.8505 11.251 20.1685 11.251 20.5C11.251 20.8315 11.3827 21.1495 11.6171 21.3839C11.8515 21.6183 12.1695 21.75 12.501 21.75H18.0185L16.6172 23.1513C16.3827 23.3856 16.2508 23.7036 16.2507 24.0352C16.2506 24.3668 16.3822 24.6848 16.6166 24.9194C16.851 25.1539 17.1689 25.2858 17.5005 25.2859C17.8321 25.286 18.1502 25.1544 18.3847 24.92L19.9797 23.3238C19.9011 23.9256 19.6063 24.4783 19.1502 24.8787C18.6941 25.2791 18.1079 25.5 17.501 25.5H2.50098C1.83794 25.5 1.20205 25.2366 0.733209 24.7678C0.264369 24.2989 0.000976563 23.663 0.000976562 23V3C0.000976562 2.33696 0.264369 1.70107 0.733209 1.23223C1.20205 0.763392 1.83794 0.5 2.50098 0.5H10.001ZM20.001 17.6963L21.9197 19.6163C22.1541 19.8507 22.2857 20.1685 22.2857 20.5C22.2857 20.8315 22.1541 21.1493 21.9197 21.3838L20.001 23.3038V17.6963ZM12.501 0.55375C12.9746 0.654194 13.4088 0.889989 13.751 1.2325L19.2685 6.75C19.611 7.09216 19.8468 7.5264 19.9472 8H12.501V0.55375Z"></path>
					  </svg>
					</span>
				  </button>
				  </div>
				  <div class="d-flex justify-content-between mb-2">
				  <div class="d-inline-flex align-items-center gap-4">
					<div class="d-inline-flex align-items-center gap-4">
					  <label for="show_records_number" class="form-label-sm mb-0">Show</label>
					  <select class="form-select form-select-sm" id="show_records_number">
						<option>10</option>
						<option>15</option>
						<option>20</option>
						<option>25</option>
					  </select>
					</div>
					<div class="d-flex gap-4 align-items-center">
					  <div class="form-check form-switch mb-lg-0">
						<input class="form-check-input" type="checkbox" role="switch" id="autoNotify" checked>
						<label class="form-check-label" for="autoNotify">Auto-notify</label>
					  </div>
					  <div class="form-check form-switch mb-lg-0">
						<input class="form-check-input" type="checkbox" role="switch" id="autoNotify">
						<label class="form-check-label" for="autoNotify">Auto-Assign</label>
					  </div>
					</div>
				  </div>
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="search" class="form-label-sm mb-0">Search</label>
					<input type="search" class="form-control form-control-sm" id="search" name="search" placeholder="Search here" autocomplete="on"/>
				  </div>
				  </div>
				  <!-- Hoverable rows start -->
				  <div class="row" id="table-hover-row">
				  <div class="col-12">
					<div class="card">
					  <div class="table-responsive">
						<table id="unassigned_data" class="table table-fs-md table-hover" aria-label="">
						  <thead>
							<tr role="row">
							  <th scope="col" class="text-center">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
							  </th>
							  <th scope="col">Provider</th>
							  <th scope="col">Additional Pay</th>
							  <th scope="col" class="text-center">Additional Pay</th>
							  <th scope="col" class="text-center">Time Paid</th>
							  <th scope="col" class="text-center">Total Payment</th>
							  <th class="text-center">Action</th>
							</tr>
						  </thead>
						  <tbody>
							<tr role="row" class="odd">
							  <td class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							  </td>
							  <td class="align-middle">
								<div class="d-flex gap-2 align-items-center">
								  <div>
									<img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
								  </div>
								  <div class="pt-2">
									<div class="font-family-secondary leading-none">Dori Griffiths</div>
									<a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
								  </div>
								</div>
							  </td>
							  <td class="align-middle">
								Additional Pay Label
							  </td>
							  <td class="text-center align-middle">
								$00:00
							  </td>
							  <td class="text-center align-middle">
								08/21/2022 9:45 AM
							  </td>
							  <td class="text-center align-middle">$00:00</td>
							  <td class="align-middle">
								<div class="d-flex actions justify-content-center">
								  <a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M9.00065 9.9974C11.3018 9.9974 13.1673 8.13192 13.1673 5.83073C13.1673 3.52954 11.3018 1.66406 9.00065 1.66406C6.69946 1.66406 4.83398 3.52954 4.83398 5.83073C4.83398 8.13192 6.69946 9.9974 9.00065 9.9974Z" stroke="black" stroke-width="2"/>
									  <path d="M13.167 18.3307H3.38871C3.15236 18.3308 2.9187 18.2806 2.70325 18.1834C2.48779 18.0863 2.29546 17.9444 2.13902 17.7672C1.98258 17.5901 1.86562 17.3816 1.79588 17.1558C1.72614 16.93 1.70524 16.6919 1.73454 16.4574L2.05954 13.8541C2.13512 13.2492 2.42906 12.6929 2.88607 12.2896C3.34308 11.8863 3.93169 11.6638 4.54121 11.6641H4.83371" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									  <path d="M17.3337 15.8307L13.167 11.6641M17.3337 11.6641L13.167 15.8307" stroke="black" stroke-width="2" stroke-linecap="round"/>
									</svg>
								  </a>
								  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M14.286 17.1462C15.075 17.1462 15.7146 16.5066 15.7146 15.7176C15.7146 14.9287 15.075 14.2891 14.286 14.2891C13.497 14.2891 12.8574 14.9287 12.8574 15.7176C12.8574 16.5066 13.497 17.1462 14.286 17.1462Z" fill="black"/>
									  <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7749 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703V18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
									  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0V0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black"/>
									  <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Feedback" aria-label="Feedback" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <mask id="mask0_8558_148040" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="21">
									  <path d="M1 1H21V20.2377H1V1Z" fill="white" stroke="white" stroke-width="0.5"/>
									  </mask>
									  <g mask="url(#mask0_8558_148040)">
									  <path d="M8.85115 17.6655L6.68187 18.8041C6.60059 18.8468 6.51476 18.8777 6.42472 18.8966C6.33469 18.9155 6.24395 18.9215 6.15216 18.9148C6.06037 18.9081 5.97139 18.8892 5.88485 18.8577C5.79867 18.8262 5.71809 18.7834 5.64382 18.7295C5.56955 18.6755 5.50404 18.6125 5.44728 18.5399C5.39053 18.4678 5.34499 18.3889 5.31065 18.3038C5.27597 18.219 5.2539 18.1307 5.24409 18.0397C5.23463 17.9482 5.23743 17.8575 5.25355 17.7671L6.02464 13.2782C6.04216 13.177 6.0348 13.0778 6.00292 12.9805C5.97139 12.8831 5.91849 12.7986 5.84492 12.7272L2.57558 9.54821C2.50971 9.48409 2.45401 9.41228 2.40847 9.33275C2.36292 9.25322 2.32894 9.16914 2.30687 9.08016C2.28515 8.99117 2.27569 8.90078 2.27884 8.80935C2.28235 8.71756 2.29811 8.62822 2.32649 8.54134C2.35487 8.45411 2.3948 8.37248 2.4463 8.29645C2.49745 8.22043 2.55806 8.15282 2.62848 8.09396C2.69855 8.03475 2.77562 7.98641 2.85935 7.94892C2.94308 7.91143 3.03066 7.88621 3.1214 7.8729L7.64004 7.21742C7.74164 7.2027 7.83378 7.16522 7.91716 7.10496C8.00019 7.0447 8.0643 6.96868 8.10984 6.87689L10.1299 2.79302C10.1709 2.71104 10.222 2.63607 10.2837 2.56811C10.3453 2.50014 10.4154 2.44233 10.4935 2.39364C10.5717 2.34529 10.6547 2.30886 10.743 2.28363C10.8316 2.25841 10.9216 2.2458 11.0134 2.2458C11.1052 2.2458 11.1956 2.25841 11.2839 2.28363C11.3722 2.30886 11.4552 2.34529 11.5333 2.39364C11.6115 2.44198 11.6815 2.50014 11.7432 2.56811C11.8048 2.63607 11.856 2.71104 11.897 2.79302L13.9177 6.87759C13.9633 6.96938 14.0274 7.0454 14.1104 7.10566C14.1934 7.16592 14.2859 7.2034 14.3875 7.21812L18.9062 7.8736C18.9969 7.88656 19.0841 7.91214 19.1682 7.94962C19.2519 7.98711 19.3287 8.03545 19.3991 8.09466C19.4691 8.15352 19.5301 8.22113 19.5813 8.29715C19.6328 8.37318 19.6723 8.45481 19.7007 8.54169C19.7294 8.62892 19.7452 8.71826 19.7484 8.81005C19.7519 8.90148 19.7424 8.99187 19.7207 9.08051C19.6986 9.16949 19.6646 9.25392 19.6191 9.33345C19.5735 9.41298 19.5178 9.48479 19.452 9.54856L18.4581 10.5155C18.4272 10.5435 18.3996 10.5747 18.375 10.6083C18.3505 10.642 18.3295 10.6777 18.3123 10.7155C18.2952 10.7534 18.2819 10.7926 18.2724 10.8332C18.2629 10.8739 18.2577 10.9149 18.2563 10.9566C18.2552 10.9982 18.2584 11.0396 18.2654 11.0806C18.2727 11.1216 18.2836 11.1615 18.299 11.2C18.3141 11.2389 18.333 11.2757 18.3558 11.3107C18.3782 11.3458 18.4041 11.3784 18.4332 11.4081C18.4623 11.4379 18.4942 11.4645 18.5285 11.488C18.5632 11.5115 18.5996 11.5311 18.6381 11.5476C18.6767 11.5637 18.7163 11.576 18.7573 11.584C18.7983 11.5921 18.8392 11.5963 18.8813 11.5963C18.923 11.5963 18.9643 11.5921 19.0049 11.5837C19.0459 11.5753 19.0855 11.563 19.1241 11.5469C19.1626 11.5304 19.199 11.5104 19.2334 11.487C19.2677 11.4635 19.2996 11.4369 19.3287 11.4067L20.3233 10.4402C20.3975 10.368 20.4662 10.2909 20.5296 10.2093C20.593 10.1273 20.6501 10.0418 20.7016 9.95214C20.7531 9.86246 20.798 9.76962 20.8365 9.67363C20.875 9.57763 20.9066 9.47954 20.9311 9.37934C20.956 9.2788 20.9738 9.17755 20.9844 9.07455C20.9949 8.9719 20.9984 8.8689 20.9945 8.76555C20.9907 8.66221 20.9798 8.55991 20.9619 8.45796C20.9437 8.35636 20.9185 8.25652 20.8866 8.15807C20.8547 8.05998 20.8158 7.96434 20.7706 7.8715C20.7251 7.77866 20.6736 7.68932 20.6158 7.60349C20.558 7.51766 20.4946 7.43638 20.4252 7.35965C20.3562 7.28258 20.2819 7.21076 20.2027 7.1442C20.1236 7.07763 20.0402 7.01668 19.9526 6.96167C19.865 6.90667 19.7739 6.85797 19.6793 6.81558C19.5851 6.77319 19.4881 6.73746 19.3886 6.70873C19.2891 6.67965 19.1882 6.65758 19.0859 6.64287L14.892 6.03468L13.016 2.24159C12.9701 2.14875 12.9179 2.05977 12.8597 1.97429C12.8012 1.8888 12.7371 1.80788 12.6677 1.73115C12.598 1.65478 12.5234 1.58331 12.4439 1.5171C12.3643 1.45088 12.2802 1.39027 12.1923 1.33562C12.1044 1.28132 12.0129 1.23297 11.918 1.19093C11.8234 1.14924 11.726 1.11386 11.6265 1.08548C11.5267 1.0571 11.4254 1.03573 11.3228 1.02172C11.2201 1.00736 11.1171 1 11.0134 1C10.9097 1 10.8067 1.00736 10.7041 1.02172C10.6014 1.03573 10.5002 1.0571 10.4003 1.08548C10.3008 1.11386 10.2035 1.14924 10.1089 1.19093C10.0139 1.23297 9.92248 1.28132 9.83455 1.33562C9.74661 1.39027 9.66288 1.45088 9.583 1.5171C9.50348 1.58331 9.42886 1.65478 9.35914 1.73115C9.28977 1.80788 9.22566 1.8888 9.16751 1.97429C9.109 2.05977 9.0568 2.14875 9.01091 2.24159L7.13555 6.03223L2.94168 6.64041C2.83938 6.65513 2.73848 6.6772 2.63899 6.70628C2.53949 6.73536 2.4428 6.77109 2.34821 6.81348C2.25397 6.85587 2.16288 6.90457 2.0753 6.95957C1.98771 7.01457 1.90433 7.07553 1.82516 7.1421C1.74598 7.20866 1.67171 7.28048 1.60269 7.35755C1.53368 7.43428 1.47027 7.51555 1.41246 7.60139C1.35465 7.68722 1.30316 7.77656 1.25761 7.86939C1.21242 7.96223 1.17353 8.05753 1.14165 8.15597C1.10977 8.25406 1.08455 8.35426 1.06633 8.45586C1.04846 8.55746 1.0376 8.6601 1.03375 8.7631C1.02989 8.86645 1.0334 8.96945 1.04391 9.0721C1.05442 9.17475 1.07193 9.27635 1.09681 9.37689C1.12168 9.47709 1.15321 9.57518 1.1914 9.67117C1.22994 9.76717 1.27478 9.85966 1.32628 9.94934C1.37743 10.0394 1.43488 10.1249 1.49829 10.2068C1.56135 10.2885 1.63002 10.3655 1.70429 10.4377L4.73925 13.3882L4.02387 17.559C4.006 17.6609 3.99549 17.7639 3.99199 17.8673C3.98848 17.9706 3.99234 18.074 4.00355 18.177C4.01441 18.2796 4.03263 18.3816 4.05785 18.4818C4.08307 18.5823 4.11496 18.6804 4.15419 18.7764C4.19308 18.8724 4.23862 18.9652 4.29047 19.0546C4.34232 19.1443 4.40048 19.2297 4.46424 19.3114C4.52835 19.393 4.59772 19.4697 4.67234 19.5415C4.74696 19.6134 4.82649 19.6799 4.91022 19.7405C4.9943 19.8015 5.08188 19.8562 5.17367 19.9048C5.26546 19.9532 5.3597 19.9952 5.45744 20.031C5.55484 20.0664 5.65433 20.0947 5.75593 20.1165C5.85753 20.1378 5.95983 20.1522 6.06353 20.1595C6.16687 20.1669 6.27057 20.1669 6.37392 20.1599C6.47762 20.1529 6.57992 20.1385 6.68152 20.1172C6.78312 20.0958 6.88261 20.0674 6.98036 20.032C7.07775 19.997 7.17234 19.9549 7.26413 19.9066L9.43306 18.7694C9.4709 18.7512 9.50663 18.7295 9.53991 18.7042C9.57355 18.679 9.60402 18.6506 9.6317 18.6195C9.65973 18.5879 9.6839 18.554 9.70492 18.5179C9.72559 18.4814 9.74276 18.4436 9.75607 18.4037C9.76938 18.3641 9.77849 18.3234 9.7834 18.2817C9.7883 18.24 9.789 18.1987 9.7855 18.1567C9.78235 18.115 9.77464 18.074 9.76308 18.0341C9.75117 17.9938 9.73575 17.9552 9.71613 17.9181C9.69651 17.881 9.67339 17.8463 9.64677 17.8137C9.62049 17.7815 9.59071 17.752 9.55848 17.7254C9.5259 17.6991 9.49087 17.676 9.45373 17.6567C9.41659 17.6371 9.37806 17.6217 9.33742 17.6098C9.29713 17.5982 9.25614 17.5905 9.21445 17.5874C9.17241 17.5839 9.13072 17.5846 9.08903 17.5898C9.04734 17.5947 9.0067 17.6038 8.96676 17.6168C8.92718 17.6301 8.88899 17.6473 8.85255 17.668L8.85115 17.6655Z" fill="black" stroke="black" stroke-width="0.5"/>
									  </g>
									  <path d="M20.9214 13.4954C20.8762 13.356 20.8128 13.2253 20.7312 13.1034C20.6492 12.9815 20.5522 12.8735 20.4397 12.779C20.3272 12.6844 20.2039 12.6073 20.0697 12.5477C19.9356 12.4878 19.7958 12.4475 19.65 12.4272L17.3066 12.0877L16.2581 9.97136C16.2262 9.90585 16.1894 9.84279 16.1488 9.78218C16.1078 9.72157 16.0629 9.66412 16.0139 9.60981C15.9649 9.55586 15.9123 9.50506 15.8562 9.45812C15.8002 9.41117 15.741 9.36843 15.679 9.3299C15.6166 9.29136 15.5522 9.25738 15.4852 9.2276C15.4183 9.19817 15.3497 9.1733 15.2792 9.15333C15.2088 9.13336 15.1374 9.11829 15.0648 9.10848C14.9923 9.09832 14.9194 9.09342 14.8466 9.09377C14.7734 9.09342 14.7005 9.09797 14.628 9.10813C14.5554 9.11794 14.484 9.13266 14.4139 9.15263C14.3435 9.17259 14.2748 9.19712 14.2079 9.22655C14.141 9.25632 14.0765 9.29031 14.0142 9.32884C13.9522 9.36738 13.893 9.40977 13.8369 9.45672C13.7809 9.50331 13.7283 9.55376 13.6793 9.60806C13.6302 9.66201 13.5854 9.71947 13.5444 9.78008C13.5034 9.84034 13.467 9.9034 13.4347 9.96891L12.3862 12.0853L10.0421 12.4248C9.89703 12.4458 9.75724 12.4861 9.62341 12.5463C9.48958 12.6062 9.36627 12.6833 9.25416 12.7776C9.14205 12.8721 9.04466 12.98 8.96268 13.1013C8.8807 13.2228 8.81694 13.3532 8.77175 13.4922C8.7262 13.6317 8.70063 13.7743 8.69537 13.9207C8.69012 14.0671 8.70483 14.2111 8.73987 14.3534C8.7749 14.4956 8.82885 14.6301 8.90172 14.7573C8.97459 14.8845 9.06358 14.999 9.16833 15.1013L10.864 16.7511L10.4642 19.0794C10.4386 19.2237 10.4337 19.3691 10.4495 19.5149C10.4649 19.6606 10.5003 19.8018 10.5557 19.9377C10.6107 20.0737 10.6835 20.1994 10.7743 20.3147C10.865 20.4303 10.9698 20.5312 11.0885 20.6174C11.2076 20.7036 11.3362 20.7719 11.4742 20.822C11.6126 20.8721 11.7549 20.9026 11.9017 20.9127C12.0484 20.9229 12.1938 20.9131 12.3375 20.8826C12.4815 20.8521 12.6184 20.8027 12.7481 20.734L14.8445 19.6354L16.9426 20.7382C17.0726 20.8066 17.2096 20.8556 17.3532 20.8854C17.4972 20.9155 17.6423 20.9253 17.7887 20.9148C17.9351 20.904 18.0774 20.8738 18.2154 20.8234C18.3534 20.7733 18.4817 20.705 18.6004 20.6191C18.7192 20.5329 18.8239 20.4324 18.9147 20.3171C19.0054 20.2019 19.0783 20.0765 19.1336 19.9405C19.189 19.8049 19.2247 19.6645 19.2408 19.5187C19.2566 19.373 19.2524 19.2279 19.2275 19.0836L18.8267 16.7556L20.5231 15.1059C20.6289 15.0039 20.7182 14.889 20.7914 14.7619C20.8647 14.635 20.919 14.5002 20.954 14.3576C20.9894 14.2153 21.0041 14.0706 20.9985 13.9242C20.9929 13.7778 20.9673 13.6348 20.9214 13.4954ZM19.6518 14.215L17.7211 16.0917C17.6472 16.1632 17.5946 16.2476 17.5627 16.345C17.5309 16.4424 17.5235 16.5419 17.5407 16.6428L17.9968 19.2942C18.0087 19.3551 18.0028 19.4143 17.9793 19.4721C17.9555 19.5296 17.9183 19.5762 17.8672 19.6116C17.8171 19.6487 17.761 19.6697 17.699 19.6743C17.637 19.6788 17.5785 19.6666 17.5238 19.6371L15.1367 18.3857C15.0459 18.3377 14.9492 18.3136 14.8466 18.3136C14.7436 18.3136 14.6469 18.3377 14.5561 18.3857L12.169 19.6371C12.114 19.6659 12.0558 19.6778 11.9938 19.6732C11.9321 19.6687 11.8761 19.6483 11.826 19.6119C11.7759 19.5755 11.7391 19.5289 11.7156 19.4714C11.6921 19.4143 11.6855 19.3551 11.696 19.2942L12.1521 16.6428C12.1697 16.5419 12.1623 16.4428 12.1304 16.3454C12.0989 16.248 12.046 16.1632 11.9724 16.0917L10.0414 14.215C9.99687 14.1719 9.96709 14.12 9.95203 14.0598C9.93696 13.9999 9.93907 13.94 9.95833 13.8811C9.97725 13.8219 10.0109 13.7725 10.0582 13.7326C10.1058 13.6926 10.1605 13.6681 10.2218 13.659L12.8906 13.2726C12.9922 13.2579 13.0844 13.2204 13.1678 13.1601C13.2508 13.0999 13.3149 13.0238 13.3605 12.9321L14.5544 10.5196C14.5817 10.4643 14.6217 10.4201 14.6746 10.3872C14.7271 10.3546 14.7846 10.3382 14.8466 10.3382C14.9089 10.3382 14.9664 10.3546 15.0189 10.3872C15.0718 10.4201 15.1118 10.4643 15.1391 10.5196L16.3317 12.9314C16.3772 13.0235 16.4417 13.0995 16.5247 13.1598C16.6081 13.22 16.7006 13.2572 16.8022 13.2719L19.471 13.6587C19.5323 13.6674 19.587 13.6919 19.6343 13.7322C19.6819 13.7722 19.7152 13.8216 19.7341 13.8804C19.7534 13.9393 19.7555 13.9988 19.7408 14.0591C19.7261 14.1193 19.6963 14.1712 19.6518 14.2143V14.215Z" fill="black" stroke="black" stroke-width="0.5"/>
									</svg>
								  </a>
								</div>
							  </td>
							</tr>
							<tr role="row" class="even">
							  <td class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							  </td>
							  <td class="align-middle">
								<div class="d-flex gap-2 align-items-center">
								  <div>
									<img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
								  </div>
								  <div class="pt-2">
									<div class="font-family-secondary leading-none">Dori Griffiths</div>
									<a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
								  </div>
								</div>
							  </td>
							  <td class="align-middle">
								Additional Pay Label
							  </td>
							  <td class="text-center align-middle">
								$00:00
							  </td>
							  <td class="text-center align-middle">
								08/21/2022 9:45 AM
							  </td>
							  <td class="text-center align-middle">$00:00</td>
							  <td class="align-middle">
								<div class="d-flex actions justify-content-center">
								  <a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M9.00065 9.9974C11.3018 9.9974 13.1673 8.13192 13.1673 5.83073C13.1673 3.52954 11.3018 1.66406 9.00065 1.66406C6.69946 1.66406 4.83398 3.52954 4.83398 5.83073C4.83398 8.13192 6.69946 9.9974 9.00065 9.9974Z" stroke="black" stroke-width="2"/>
									  <path d="M13.167 18.3307H3.38871C3.15236 18.3308 2.9187 18.2806 2.70325 18.1834C2.48779 18.0863 2.29546 17.9444 2.13902 17.7672C1.98258 17.5901 1.86562 17.3816 1.79588 17.1558C1.72614 16.93 1.70524 16.6919 1.73454 16.4574L2.05954 13.8541C2.13512 13.2492 2.42906 12.6929 2.88607 12.2896C3.34308 11.8863 3.93169 11.6638 4.54121 11.6641H4.83371" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									  <path d="M17.3337 15.8307L13.167 11.6641M17.3337 11.6641L13.167 15.8307" stroke="black" stroke-width="2" stroke-linecap="round"/>
									</svg>
								  </a>
								  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M14.286 17.1462C15.075 17.1462 15.7146 16.5066 15.7146 15.7176C15.7146 14.9287 15.075 14.2891 14.286 14.2891C13.497 14.2891 12.8574 14.9287 12.8574 15.7176C12.8574 16.5066 13.497 17.1462 14.286 17.1462Z" fill="black"/>
									  <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7749 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703V18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
									  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0V0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black"/>
									  <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Feedback" aria-label="Feedback" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <mask id="mask0_8558_148040" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="21">
									  <path d="M1 1H21V20.2377H1V1Z" fill="white" stroke="white" stroke-width="0.5"/>
									  </mask>
									  <g mask="url(#mask0_8558_148040)">
									  <path d="M8.85115 17.6655L6.68187 18.8041C6.60059 18.8468 6.51476 18.8777 6.42472 18.8966C6.33469 18.9155 6.24395 18.9215 6.15216 18.9148C6.06037 18.9081 5.97139 18.8892 5.88485 18.8577C5.79867 18.8262 5.71809 18.7834 5.64382 18.7295C5.56955 18.6755 5.50404 18.6125 5.44728 18.5399C5.39053 18.4678 5.34499 18.3889 5.31065 18.3038C5.27597 18.219 5.2539 18.1307 5.24409 18.0397C5.23463 17.9482 5.23743 17.8575 5.25355 17.7671L6.02464 13.2782C6.04216 13.177 6.0348 13.0778 6.00292 12.9805C5.97139 12.8831 5.91849 12.7986 5.84492 12.7272L2.57558 9.54821C2.50971 9.48409 2.45401 9.41228 2.40847 9.33275C2.36292 9.25322 2.32894 9.16914 2.30687 9.08016C2.28515 8.99117 2.27569 8.90078 2.27884 8.80935C2.28235 8.71756 2.29811 8.62822 2.32649 8.54134C2.35487 8.45411 2.3948 8.37248 2.4463 8.29645C2.49745 8.22043 2.55806 8.15282 2.62848 8.09396C2.69855 8.03475 2.77562 7.98641 2.85935 7.94892C2.94308 7.91143 3.03066 7.88621 3.1214 7.8729L7.64004 7.21742C7.74164 7.2027 7.83378 7.16522 7.91716 7.10496C8.00019 7.0447 8.0643 6.96868 8.10984 6.87689L10.1299 2.79302C10.1709 2.71104 10.222 2.63607 10.2837 2.56811C10.3453 2.50014 10.4154 2.44233 10.4935 2.39364C10.5717 2.34529 10.6547 2.30886 10.743 2.28363C10.8316 2.25841 10.9216 2.2458 11.0134 2.2458C11.1052 2.2458 11.1956 2.25841 11.2839 2.28363C11.3722 2.30886 11.4552 2.34529 11.5333 2.39364C11.6115 2.44198 11.6815 2.50014 11.7432 2.56811C11.8048 2.63607 11.856 2.71104 11.897 2.79302L13.9177 6.87759C13.9633 6.96938 14.0274 7.0454 14.1104 7.10566C14.1934 7.16592 14.2859 7.2034 14.3875 7.21812L18.9062 7.8736C18.9969 7.88656 19.0841 7.91214 19.1682 7.94962C19.2519 7.98711 19.3287 8.03545 19.3991 8.09466C19.4691 8.15352 19.5301 8.22113 19.5813 8.29715C19.6328 8.37318 19.6723 8.45481 19.7007 8.54169C19.7294 8.62892 19.7452 8.71826 19.7484 8.81005C19.7519 8.90148 19.7424 8.99187 19.7207 9.08051C19.6986 9.16949 19.6646 9.25392 19.6191 9.33345C19.5735 9.41298 19.5178 9.48479 19.452 9.54856L18.4581 10.5155C18.4272 10.5435 18.3996 10.5747 18.375 10.6083C18.3505 10.642 18.3295 10.6777 18.3123 10.7155C18.2952 10.7534 18.2819 10.7926 18.2724 10.8332C18.2629 10.8739 18.2577 10.9149 18.2563 10.9566C18.2552 10.9982 18.2584 11.0396 18.2654 11.0806C18.2727 11.1216 18.2836 11.1615 18.299 11.2C18.3141 11.2389 18.333 11.2757 18.3558 11.3107C18.3782 11.3458 18.4041 11.3784 18.4332 11.4081C18.4623 11.4379 18.4942 11.4645 18.5285 11.488C18.5632 11.5115 18.5996 11.5311 18.6381 11.5476C18.6767 11.5637 18.7163 11.576 18.7573 11.584C18.7983 11.5921 18.8392 11.5963 18.8813 11.5963C18.923 11.5963 18.9643 11.5921 19.0049 11.5837C19.0459 11.5753 19.0855 11.563 19.1241 11.5469C19.1626 11.5304 19.199 11.5104 19.2334 11.487C19.2677 11.4635 19.2996 11.4369 19.3287 11.4067L20.3233 10.4402C20.3975 10.368 20.4662 10.2909 20.5296 10.2093C20.593 10.1273 20.6501 10.0418 20.7016 9.95214C20.7531 9.86246 20.798 9.76962 20.8365 9.67363C20.875 9.57763 20.9066 9.47954 20.9311 9.37934C20.956 9.2788 20.9738 9.17755 20.9844 9.07455C20.9949 8.9719 20.9984 8.8689 20.9945 8.76555C20.9907 8.66221 20.9798 8.55991 20.9619 8.45796C20.9437 8.35636 20.9185 8.25652 20.8866 8.15807C20.8547 8.05998 20.8158 7.96434 20.7706 7.8715C20.7251 7.77866 20.6736 7.68932 20.6158 7.60349C20.558 7.51766 20.4946 7.43638 20.4252 7.35965C20.3562 7.28258 20.2819 7.21076 20.2027 7.1442C20.1236 7.07763 20.0402 7.01668 19.9526 6.96167C19.865 6.90667 19.7739 6.85797 19.6793 6.81558C19.5851 6.77319 19.4881 6.73746 19.3886 6.70873C19.2891 6.67965 19.1882 6.65758 19.0859 6.64287L14.892 6.03468L13.016 2.24159C12.9701 2.14875 12.9179 2.05977 12.8597 1.97429C12.8012 1.8888 12.7371 1.80788 12.6677 1.73115C12.598 1.65478 12.5234 1.58331 12.4439 1.5171C12.3643 1.45088 12.2802 1.39027 12.1923 1.33562C12.1044 1.28132 12.0129 1.23297 11.918 1.19093C11.8234 1.14924 11.726 1.11386 11.6265 1.08548C11.5267 1.0571 11.4254 1.03573 11.3228 1.02172C11.2201 1.00736 11.1171 1 11.0134 1C10.9097 1 10.8067 1.00736 10.7041 1.02172C10.6014 1.03573 10.5002 1.0571 10.4003 1.08548C10.3008 1.11386 10.2035 1.14924 10.1089 1.19093C10.0139 1.23297 9.92248 1.28132 9.83455 1.33562C9.74661 1.39027 9.66288 1.45088 9.583 1.5171C9.50348 1.58331 9.42886 1.65478 9.35914 1.73115C9.28977 1.80788 9.22566 1.8888 9.16751 1.97429C9.109 2.05977 9.0568 2.14875 9.01091 2.24159L7.13555 6.03223L2.94168 6.64041C2.83938 6.65513 2.73848 6.6772 2.63899 6.70628C2.53949 6.73536 2.4428 6.77109 2.34821 6.81348C2.25397 6.85587 2.16288 6.90457 2.0753 6.95957C1.98771 7.01457 1.90433 7.07553 1.82516 7.1421C1.74598 7.20866 1.67171 7.28048 1.60269 7.35755C1.53368 7.43428 1.47027 7.51555 1.41246 7.60139C1.35465 7.68722 1.30316 7.77656 1.25761 7.86939C1.21242 7.96223 1.17353 8.05753 1.14165 8.15597C1.10977 8.25406 1.08455 8.35426 1.06633 8.45586C1.04846 8.55746 1.0376 8.6601 1.03375 8.7631C1.02989 8.86645 1.0334 8.96945 1.04391 9.0721C1.05442 9.17475 1.07193 9.27635 1.09681 9.37689C1.12168 9.47709 1.15321 9.57518 1.1914 9.67117C1.22994 9.76717 1.27478 9.85966 1.32628 9.94934C1.37743 10.0394 1.43488 10.1249 1.49829 10.2068C1.56135 10.2885 1.63002 10.3655 1.70429 10.4377L4.73925 13.3882L4.02387 17.559C4.006 17.6609 3.99549 17.7639 3.99199 17.8673C3.98848 17.9706 3.99234 18.074 4.00355 18.177C4.01441 18.2796 4.03263 18.3816 4.05785 18.4818C4.08307 18.5823 4.11496 18.6804 4.15419 18.7764C4.19308 18.8724 4.23862 18.9652 4.29047 19.0546C4.34232 19.1443 4.40048 19.2297 4.46424 19.3114C4.52835 19.393 4.59772 19.4697 4.67234 19.5415C4.74696 19.6134 4.82649 19.6799 4.91022 19.7405C4.9943 19.8015 5.08188 19.8562 5.17367 19.9048C5.26546 19.9532 5.3597 19.9952 5.45744 20.031C5.55484 20.0664 5.65433 20.0947 5.75593 20.1165C5.85753 20.1378 5.95983 20.1522 6.06353 20.1595C6.16687 20.1669 6.27057 20.1669 6.37392 20.1599C6.47762 20.1529 6.57992 20.1385 6.68152 20.1172C6.78312 20.0958 6.88261 20.0674 6.98036 20.032C7.07775 19.997 7.17234 19.9549 7.26413 19.9066L9.43306 18.7694C9.4709 18.7512 9.50663 18.7295 9.53991 18.7042C9.57355 18.679 9.60402 18.6506 9.6317 18.6195C9.65973 18.5879 9.6839 18.554 9.70492 18.5179C9.72559 18.4814 9.74276 18.4436 9.75607 18.4037C9.76938 18.3641 9.77849 18.3234 9.7834 18.2817C9.7883 18.24 9.789 18.1987 9.7855 18.1567C9.78235 18.115 9.77464 18.074 9.76308 18.0341C9.75117 17.9938 9.73575 17.9552 9.71613 17.9181C9.69651 17.881 9.67339 17.8463 9.64677 17.8137C9.62049 17.7815 9.59071 17.752 9.55848 17.7254C9.5259 17.6991 9.49087 17.676 9.45373 17.6567C9.41659 17.6371 9.37806 17.6217 9.33742 17.6098C9.29713 17.5982 9.25614 17.5905 9.21445 17.5874C9.17241 17.5839 9.13072 17.5846 9.08903 17.5898C9.04734 17.5947 9.0067 17.6038 8.96676 17.6168C8.92718 17.6301 8.88899 17.6473 8.85255 17.668L8.85115 17.6655Z" fill="black" stroke="black" stroke-width="0.5"/>
									  </g>
									  <path d="M20.9214 13.4954C20.8762 13.356 20.8128 13.2253 20.7312 13.1034C20.6492 12.9815 20.5522 12.8735 20.4397 12.779C20.3272 12.6844 20.2039 12.6073 20.0697 12.5477C19.9356 12.4878 19.7958 12.4475 19.65 12.4272L17.3066 12.0877L16.2581 9.97136C16.2262 9.90585 16.1894 9.84279 16.1488 9.78218C16.1078 9.72157 16.0629 9.66412 16.0139 9.60981C15.9649 9.55586 15.9123 9.50506 15.8562 9.45812C15.8002 9.41117 15.741 9.36843 15.679 9.3299C15.6166 9.29136 15.5522 9.25738 15.4852 9.2276C15.4183 9.19817 15.3497 9.1733 15.2792 9.15333C15.2088 9.13336 15.1374 9.11829 15.0648 9.10848C14.9923 9.09832 14.9194 9.09342 14.8466 9.09377C14.7734 9.09342 14.7005 9.09797 14.628 9.10813C14.5554 9.11794 14.484 9.13266 14.4139 9.15263C14.3435 9.17259 14.2748 9.19712 14.2079 9.22655C14.141 9.25632 14.0765 9.29031 14.0142 9.32884C13.9522 9.36738 13.893 9.40977 13.8369 9.45672C13.7809 9.50331 13.7283 9.55376 13.6793 9.60806C13.6302 9.66201 13.5854 9.71947 13.5444 9.78008C13.5034 9.84034 13.467 9.9034 13.4347 9.96891L12.3862 12.0853L10.0421 12.4248C9.89703 12.4458 9.75724 12.4861 9.62341 12.5463C9.48958 12.6062 9.36627 12.6833 9.25416 12.7776C9.14205 12.8721 9.04466 12.98 8.96268 13.1013C8.8807 13.2228 8.81694 13.3532 8.77175 13.4922C8.7262 13.6317 8.70063 13.7743 8.69537 13.9207C8.69012 14.0671 8.70483 14.2111 8.73987 14.3534C8.7749 14.4956 8.82885 14.6301 8.90172 14.7573C8.97459 14.8845 9.06358 14.999 9.16833 15.1013L10.864 16.7511L10.4642 19.0794C10.4386 19.2237 10.4337 19.3691 10.4495 19.5149C10.4649 19.6606 10.5003 19.8018 10.5557 19.9377C10.6107 20.0737 10.6835 20.1994 10.7743 20.3147C10.865 20.4303 10.9698 20.5312 11.0885 20.6174C11.2076 20.7036 11.3362 20.7719 11.4742 20.822C11.6126 20.8721 11.7549 20.9026 11.9017 20.9127C12.0484 20.9229 12.1938 20.9131 12.3375 20.8826C12.4815 20.8521 12.6184 20.8027 12.7481 20.734L14.8445 19.6354L16.9426 20.7382C17.0726 20.8066 17.2096 20.8556 17.3532 20.8854C17.4972 20.9155 17.6423 20.9253 17.7887 20.9148C17.9351 20.904 18.0774 20.8738 18.2154 20.8234C18.3534 20.7733 18.4817 20.705 18.6004 20.6191C18.7192 20.5329 18.8239 20.4324 18.9147 20.3171C19.0054 20.2019 19.0783 20.0765 19.1336 19.9405C19.189 19.8049 19.2247 19.6645 19.2408 19.5187C19.2566 19.373 19.2524 19.2279 19.2275 19.0836L18.8267 16.7556L20.5231 15.1059C20.6289 15.0039 20.7182 14.889 20.7914 14.7619C20.8647 14.635 20.919 14.5002 20.954 14.3576C20.9894 14.2153 21.0041 14.0706 20.9985 13.9242C20.9929 13.7778 20.9673 13.6348 20.9214 13.4954ZM19.6518 14.215L17.7211 16.0917C17.6472 16.1632 17.5946 16.2476 17.5627 16.345C17.5309 16.4424 17.5235 16.5419 17.5407 16.6428L17.9968 19.2942C18.0087 19.3551 18.0028 19.4143 17.9793 19.4721C17.9555 19.5296 17.9183 19.5762 17.8672 19.6116C17.8171 19.6487 17.761 19.6697 17.699 19.6743C17.637 19.6788 17.5785 19.6666 17.5238 19.6371L15.1367 18.3857C15.0459 18.3377 14.9492 18.3136 14.8466 18.3136C14.7436 18.3136 14.6469 18.3377 14.5561 18.3857L12.169 19.6371C12.114 19.6659 12.0558 19.6778 11.9938 19.6732C11.9321 19.6687 11.8761 19.6483 11.826 19.6119C11.7759 19.5755 11.7391 19.5289 11.7156 19.4714C11.6921 19.4143 11.6855 19.3551 11.696 19.2942L12.1521 16.6428C12.1697 16.5419 12.1623 16.4428 12.1304 16.3454C12.0989 16.248 12.046 16.1632 11.9724 16.0917L10.0414 14.215C9.99687 14.1719 9.96709 14.12 9.95203 14.0598C9.93696 13.9999 9.93907 13.94 9.95833 13.8811C9.97725 13.8219 10.0109 13.7725 10.0582 13.7326C10.1058 13.6926 10.1605 13.6681 10.2218 13.659L12.8906 13.2726C12.9922 13.2579 13.0844 13.2204 13.1678 13.1601C13.2508 13.0999 13.3149 13.0238 13.3605 12.9321L14.5544 10.5196C14.5817 10.4643 14.6217 10.4201 14.6746 10.3872C14.7271 10.3546 14.7846 10.3382 14.8466 10.3382C14.9089 10.3382 14.9664 10.3546 15.0189 10.3872C15.0718 10.4201 15.1118 10.4643 15.1391 10.5196L16.3317 12.9314C16.3772 13.0235 16.4417 13.0995 16.5247 13.1598C16.6081 13.22 16.7006 13.2572 16.8022 13.2719L19.471 13.6587C19.5323 13.6674 19.587 13.6919 19.6343 13.7322C19.6819 13.7722 19.7152 13.8216 19.7341 13.8804C19.7534 13.9393 19.7555 13.9988 19.7408 14.0591C19.7261 14.1193 19.6963 14.1712 19.6518 14.2143V14.215Z" fill="black" stroke="black" stroke-width="0.5"/>
									</svg>
								  </a>
								</div>
							  </td>
							</tr>
							<tr role="row" class="odd">
							  <td class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							  </td>
							  <td class="align-middle">
								<div class="d-flex gap-2 align-items-center">
								  <div>
									<img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
								  </div>
								  <div class="pt-2">
									<div class="font-family-secondary leading-none">Dori Griffiths</div>
									<a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
								  </div>
								</div>
							  </td>
							  <td class="align-middle">
								Additional Pay Label
							  </td>
							  <td class="text-center align-middle">
								$00:00
							  </td>
							  <td class="text-center align-middle">
								08/21/2022 9:45 AM
							  </td>
							  <td class="text-center align-middle">$00:00</td>
							  <td class="align-middle">
								<div class="d-flex actions justify-content-center">
								  <a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M9.00065 9.9974C11.3018 9.9974 13.1673 8.13192 13.1673 5.83073C13.1673 3.52954 11.3018 1.66406 9.00065 1.66406C6.69946 1.66406 4.83398 3.52954 4.83398 5.83073C4.83398 8.13192 6.69946 9.9974 9.00065 9.9974Z" stroke="black" stroke-width="2"/>
									  <path d="M13.167 18.3307H3.38871C3.15236 18.3308 2.9187 18.2806 2.70325 18.1834C2.48779 18.0863 2.29546 17.9444 2.13902 17.7672C1.98258 17.5901 1.86562 17.3816 1.79588 17.1558C1.72614 16.93 1.70524 16.6919 1.73454 16.4574L2.05954 13.8541C2.13512 13.2492 2.42906 12.6929 2.88607 12.2896C3.34308 11.8863 3.93169 11.6638 4.54121 11.6641H4.83371" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									  <path d="M17.3337 15.8307L13.167 11.6641M17.3337 11.6641L13.167 15.8307" stroke="black" stroke-width="2" stroke-linecap="round"/>
									</svg>
								  </a>
								  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M14.286 17.1462C15.075 17.1462 15.7146 16.5066 15.7146 15.7176C15.7146 14.9287 15.075 14.2891 14.286 14.2891C13.497 14.2891 12.8574 14.9287 12.8574 15.7176C12.8574 16.5066 13.497 17.1462 14.286 17.1462Z" fill="black"/>
									  <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7749 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703V18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
									  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0V0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black"/>
									  <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Feedback" aria-label="Feedback" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <mask id="mask0_8558_148040" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="21">
									  <path d="M1 1H21V20.2377H1V1Z" fill="white" stroke="white" stroke-width="0.5"/>
									  </mask>
									  <g mask="url(#mask0_8558_148040)">
									  <path d="M8.85115 17.6655L6.68187 18.8041C6.60059 18.8468 6.51476 18.8777 6.42472 18.8966C6.33469 18.9155 6.24395 18.9215 6.15216 18.9148C6.06037 18.9081 5.97139 18.8892 5.88485 18.8577C5.79867 18.8262 5.71809 18.7834 5.64382 18.7295C5.56955 18.6755 5.50404 18.6125 5.44728 18.5399C5.39053 18.4678 5.34499 18.3889 5.31065 18.3038C5.27597 18.219 5.2539 18.1307 5.24409 18.0397C5.23463 17.9482 5.23743 17.8575 5.25355 17.7671L6.02464 13.2782C6.04216 13.177 6.0348 13.0778 6.00292 12.9805C5.97139 12.8831 5.91849 12.7986 5.84492 12.7272L2.57558 9.54821C2.50971 9.48409 2.45401 9.41228 2.40847 9.33275C2.36292 9.25322 2.32894 9.16914 2.30687 9.08016C2.28515 8.99117 2.27569 8.90078 2.27884 8.80935C2.28235 8.71756 2.29811 8.62822 2.32649 8.54134C2.35487 8.45411 2.3948 8.37248 2.4463 8.29645C2.49745 8.22043 2.55806 8.15282 2.62848 8.09396C2.69855 8.03475 2.77562 7.98641 2.85935 7.94892C2.94308 7.91143 3.03066 7.88621 3.1214 7.8729L7.64004 7.21742C7.74164 7.2027 7.83378 7.16522 7.91716 7.10496C8.00019 7.0447 8.0643 6.96868 8.10984 6.87689L10.1299 2.79302C10.1709 2.71104 10.222 2.63607 10.2837 2.56811C10.3453 2.50014 10.4154 2.44233 10.4935 2.39364C10.5717 2.34529 10.6547 2.30886 10.743 2.28363C10.8316 2.25841 10.9216 2.2458 11.0134 2.2458C11.1052 2.2458 11.1956 2.25841 11.2839 2.28363C11.3722 2.30886 11.4552 2.34529 11.5333 2.39364C11.6115 2.44198 11.6815 2.50014 11.7432 2.56811C11.8048 2.63607 11.856 2.71104 11.897 2.79302L13.9177 6.87759C13.9633 6.96938 14.0274 7.0454 14.1104 7.10566C14.1934 7.16592 14.2859 7.2034 14.3875 7.21812L18.9062 7.8736C18.9969 7.88656 19.0841 7.91214 19.1682 7.94962C19.2519 7.98711 19.3287 8.03545 19.3991 8.09466C19.4691 8.15352 19.5301 8.22113 19.5813 8.29715C19.6328 8.37318 19.6723 8.45481 19.7007 8.54169C19.7294 8.62892 19.7452 8.71826 19.7484 8.81005C19.7519 8.90148 19.7424 8.99187 19.7207 9.08051C19.6986 9.16949 19.6646 9.25392 19.6191 9.33345C19.5735 9.41298 19.5178 9.48479 19.452 9.54856L18.4581 10.5155C18.4272 10.5435 18.3996 10.5747 18.375 10.6083C18.3505 10.642 18.3295 10.6777 18.3123 10.7155C18.2952 10.7534 18.2819 10.7926 18.2724 10.8332C18.2629 10.8739 18.2577 10.9149 18.2563 10.9566C18.2552 10.9982 18.2584 11.0396 18.2654 11.0806C18.2727 11.1216 18.2836 11.1615 18.299 11.2C18.3141 11.2389 18.333 11.2757 18.3558 11.3107C18.3782 11.3458 18.4041 11.3784 18.4332 11.4081C18.4623 11.4379 18.4942 11.4645 18.5285 11.488C18.5632 11.5115 18.5996 11.5311 18.6381 11.5476C18.6767 11.5637 18.7163 11.576 18.7573 11.584C18.7983 11.5921 18.8392 11.5963 18.8813 11.5963C18.923 11.5963 18.9643 11.5921 19.0049 11.5837C19.0459 11.5753 19.0855 11.563 19.1241 11.5469C19.1626 11.5304 19.199 11.5104 19.2334 11.487C19.2677 11.4635 19.2996 11.4369 19.3287 11.4067L20.3233 10.4402C20.3975 10.368 20.4662 10.2909 20.5296 10.2093C20.593 10.1273 20.6501 10.0418 20.7016 9.95214C20.7531 9.86246 20.798 9.76962 20.8365 9.67363C20.875 9.57763 20.9066 9.47954 20.9311 9.37934C20.956 9.2788 20.9738 9.17755 20.9844 9.07455C20.9949 8.9719 20.9984 8.8689 20.9945 8.76555C20.9907 8.66221 20.9798 8.55991 20.9619 8.45796C20.9437 8.35636 20.9185 8.25652 20.8866 8.15807C20.8547 8.05998 20.8158 7.96434 20.7706 7.8715C20.7251 7.77866 20.6736 7.68932 20.6158 7.60349C20.558 7.51766 20.4946 7.43638 20.4252 7.35965C20.3562 7.28258 20.2819 7.21076 20.2027 7.1442C20.1236 7.07763 20.0402 7.01668 19.9526 6.96167C19.865 6.90667 19.7739 6.85797 19.6793 6.81558C19.5851 6.77319 19.4881 6.73746 19.3886 6.70873C19.2891 6.67965 19.1882 6.65758 19.0859 6.64287L14.892 6.03468L13.016 2.24159C12.9701 2.14875 12.9179 2.05977 12.8597 1.97429C12.8012 1.8888 12.7371 1.80788 12.6677 1.73115C12.598 1.65478 12.5234 1.58331 12.4439 1.5171C12.3643 1.45088 12.2802 1.39027 12.1923 1.33562C12.1044 1.28132 12.0129 1.23297 11.918 1.19093C11.8234 1.14924 11.726 1.11386 11.6265 1.08548C11.5267 1.0571 11.4254 1.03573 11.3228 1.02172C11.2201 1.00736 11.1171 1 11.0134 1C10.9097 1 10.8067 1.00736 10.7041 1.02172C10.6014 1.03573 10.5002 1.0571 10.4003 1.08548C10.3008 1.11386 10.2035 1.14924 10.1089 1.19093C10.0139 1.23297 9.92248 1.28132 9.83455 1.33562C9.74661 1.39027 9.66288 1.45088 9.583 1.5171C9.50348 1.58331 9.42886 1.65478 9.35914 1.73115C9.28977 1.80788 9.22566 1.8888 9.16751 1.97429C9.109 2.05977 9.0568 2.14875 9.01091 2.24159L7.13555 6.03223L2.94168 6.64041C2.83938 6.65513 2.73848 6.6772 2.63899 6.70628C2.53949 6.73536 2.4428 6.77109 2.34821 6.81348C2.25397 6.85587 2.16288 6.90457 2.0753 6.95957C1.98771 7.01457 1.90433 7.07553 1.82516 7.1421C1.74598 7.20866 1.67171 7.28048 1.60269 7.35755C1.53368 7.43428 1.47027 7.51555 1.41246 7.60139C1.35465 7.68722 1.30316 7.77656 1.25761 7.86939C1.21242 7.96223 1.17353 8.05753 1.14165 8.15597C1.10977 8.25406 1.08455 8.35426 1.06633 8.45586C1.04846 8.55746 1.0376 8.6601 1.03375 8.7631C1.02989 8.86645 1.0334 8.96945 1.04391 9.0721C1.05442 9.17475 1.07193 9.27635 1.09681 9.37689C1.12168 9.47709 1.15321 9.57518 1.1914 9.67117C1.22994 9.76717 1.27478 9.85966 1.32628 9.94934C1.37743 10.0394 1.43488 10.1249 1.49829 10.2068C1.56135 10.2885 1.63002 10.3655 1.70429 10.4377L4.73925 13.3882L4.02387 17.559C4.006 17.6609 3.99549 17.7639 3.99199 17.8673C3.98848 17.9706 3.99234 18.074 4.00355 18.177C4.01441 18.2796 4.03263 18.3816 4.05785 18.4818C4.08307 18.5823 4.11496 18.6804 4.15419 18.7764C4.19308 18.8724 4.23862 18.9652 4.29047 19.0546C4.34232 19.1443 4.40048 19.2297 4.46424 19.3114C4.52835 19.393 4.59772 19.4697 4.67234 19.5415C4.74696 19.6134 4.82649 19.6799 4.91022 19.7405C4.9943 19.8015 5.08188 19.8562 5.17367 19.9048C5.26546 19.9532 5.3597 19.9952 5.45744 20.031C5.55484 20.0664 5.65433 20.0947 5.75593 20.1165C5.85753 20.1378 5.95983 20.1522 6.06353 20.1595C6.16687 20.1669 6.27057 20.1669 6.37392 20.1599C6.47762 20.1529 6.57992 20.1385 6.68152 20.1172C6.78312 20.0958 6.88261 20.0674 6.98036 20.032C7.07775 19.997 7.17234 19.9549 7.26413 19.9066L9.43306 18.7694C9.4709 18.7512 9.50663 18.7295 9.53991 18.7042C9.57355 18.679 9.60402 18.6506 9.6317 18.6195C9.65973 18.5879 9.6839 18.554 9.70492 18.5179C9.72559 18.4814 9.74276 18.4436 9.75607 18.4037C9.76938 18.3641 9.77849 18.3234 9.7834 18.2817C9.7883 18.24 9.789 18.1987 9.7855 18.1567C9.78235 18.115 9.77464 18.074 9.76308 18.0341C9.75117 17.9938 9.73575 17.9552 9.71613 17.9181C9.69651 17.881 9.67339 17.8463 9.64677 17.8137C9.62049 17.7815 9.59071 17.752 9.55848 17.7254C9.5259 17.6991 9.49087 17.676 9.45373 17.6567C9.41659 17.6371 9.37806 17.6217 9.33742 17.6098C9.29713 17.5982 9.25614 17.5905 9.21445 17.5874C9.17241 17.5839 9.13072 17.5846 9.08903 17.5898C9.04734 17.5947 9.0067 17.6038 8.96676 17.6168C8.92718 17.6301 8.88899 17.6473 8.85255 17.668L8.85115 17.6655Z" fill="black" stroke="black" stroke-width="0.5"/>
									  </g>
									  <path d="M20.9214 13.4954C20.8762 13.356 20.8128 13.2253 20.7312 13.1034C20.6492 12.9815 20.5522 12.8735 20.4397 12.779C20.3272 12.6844 20.2039 12.6073 20.0697 12.5477C19.9356 12.4878 19.7958 12.4475 19.65 12.4272L17.3066 12.0877L16.2581 9.97136C16.2262 9.90585 16.1894 9.84279 16.1488 9.78218C16.1078 9.72157 16.0629 9.66412 16.0139 9.60981C15.9649 9.55586 15.9123 9.50506 15.8562 9.45812C15.8002 9.41117 15.741 9.36843 15.679 9.3299C15.6166 9.29136 15.5522 9.25738 15.4852 9.2276C15.4183 9.19817 15.3497 9.1733 15.2792 9.15333C15.2088 9.13336 15.1374 9.11829 15.0648 9.10848C14.9923 9.09832 14.9194 9.09342 14.8466 9.09377C14.7734 9.09342 14.7005 9.09797 14.628 9.10813C14.5554 9.11794 14.484 9.13266 14.4139 9.15263C14.3435 9.17259 14.2748 9.19712 14.2079 9.22655C14.141 9.25632 14.0765 9.29031 14.0142 9.32884C13.9522 9.36738 13.893 9.40977 13.8369 9.45672C13.7809 9.50331 13.7283 9.55376 13.6793 9.60806C13.6302 9.66201 13.5854 9.71947 13.5444 9.78008C13.5034 9.84034 13.467 9.9034 13.4347 9.96891L12.3862 12.0853L10.0421 12.4248C9.89703 12.4458 9.75724 12.4861 9.62341 12.5463C9.48958 12.6062 9.36627 12.6833 9.25416 12.7776C9.14205 12.8721 9.04466 12.98 8.96268 13.1013C8.8807 13.2228 8.81694 13.3532 8.77175 13.4922C8.7262 13.6317 8.70063 13.7743 8.69537 13.9207C8.69012 14.0671 8.70483 14.2111 8.73987 14.3534C8.7749 14.4956 8.82885 14.6301 8.90172 14.7573C8.97459 14.8845 9.06358 14.999 9.16833 15.1013L10.864 16.7511L10.4642 19.0794C10.4386 19.2237 10.4337 19.3691 10.4495 19.5149C10.4649 19.6606 10.5003 19.8018 10.5557 19.9377C10.6107 20.0737 10.6835 20.1994 10.7743 20.3147C10.865 20.4303 10.9698 20.5312 11.0885 20.6174C11.2076 20.7036 11.3362 20.7719 11.4742 20.822C11.6126 20.8721 11.7549 20.9026 11.9017 20.9127C12.0484 20.9229 12.1938 20.9131 12.3375 20.8826C12.4815 20.8521 12.6184 20.8027 12.7481 20.734L14.8445 19.6354L16.9426 20.7382C17.0726 20.8066 17.2096 20.8556 17.3532 20.8854C17.4972 20.9155 17.6423 20.9253 17.7887 20.9148C17.9351 20.904 18.0774 20.8738 18.2154 20.8234C18.3534 20.7733 18.4817 20.705 18.6004 20.6191C18.7192 20.5329 18.8239 20.4324 18.9147 20.3171C19.0054 20.2019 19.0783 20.0765 19.1336 19.9405C19.189 19.8049 19.2247 19.6645 19.2408 19.5187C19.2566 19.373 19.2524 19.2279 19.2275 19.0836L18.8267 16.7556L20.5231 15.1059C20.6289 15.0039 20.7182 14.889 20.7914 14.7619C20.8647 14.635 20.919 14.5002 20.954 14.3576C20.9894 14.2153 21.0041 14.0706 20.9985 13.9242C20.9929 13.7778 20.9673 13.6348 20.9214 13.4954ZM19.6518 14.215L17.7211 16.0917C17.6472 16.1632 17.5946 16.2476 17.5627 16.345C17.5309 16.4424 17.5235 16.5419 17.5407 16.6428L17.9968 19.2942C18.0087 19.3551 18.0028 19.4143 17.9793 19.4721C17.9555 19.5296 17.9183 19.5762 17.8672 19.6116C17.8171 19.6487 17.761 19.6697 17.699 19.6743C17.637 19.6788 17.5785 19.6666 17.5238 19.6371L15.1367 18.3857C15.0459 18.3377 14.9492 18.3136 14.8466 18.3136C14.7436 18.3136 14.6469 18.3377 14.5561 18.3857L12.169 19.6371C12.114 19.6659 12.0558 19.6778 11.9938 19.6732C11.9321 19.6687 11.8761 19.6483 11.826 19.6119C11.7759 19.5755 11.7391 19.5289 11.7156 19.4714C11.6921 19.4143 11.6855 19.3551 11.696 19.2942L12.1521 16.6428C12.1697 16.5419 12.1623 16.4428 12.1304 16.3454C12.0989 16.248 12.046 16.1632 11.9724 16.0917L10.0414 14.215C9.99687 14.1719 9.96709 14.12 9.95203 14.0598C9.93696 13.9999 9.93907 13.94 9.95833 13.8811C9.97725 13.8219 10.0109 13.7725 10.0582 13.7326C10.1058 13.6926 10.1605 13.6681 10.2218 13.659L12.8906 13.2726C12.9922 13.2579 13.0844 13.2204 13.1678 13.1601C13.2508 13.0999 13.3149 13.0238 13.3605 12.9321L14.5544 10.5196C14.5817 10.4643 14.6217 10.4201 14.6746 10.3872C14.7271 10.3546 14.7846 10.3382 14.8466 10.3382C14.9089 10.3382 14.9664 10.3546 15.0189 10.3872C15.0718 10.4201 15.1118 10.4643 15.1391 10.5196L16.3317 12.9314C16.3772 13.0235 16.4417 13.0995 16.5247 13.1598C16.6081 13.22 16.7006 13.2572 16.8022 13.2719L19.471 13.6587C19.5323 13.6674 19.587 13.6919 19.6343 13.7322C19.6819 13.7722 19.7152 13.8216 19.7341 13.8804C19.7534 13.9393 19.7555 13.9988 19.7408 14.0591C19.7261 14.1193 19.6963 14.1712 19.6518 14.2143V14.215Z" fill="black" stroke="black" stroke-width="0.5"/>
									</svg>
								  </a>
								</div>
							  </td>
							</tr>
							<tr role="row" class="even">
							  <td class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							  </td>
							  <td class="align-middle">
								<div class="d-flex gap-2 align-items-center">
								  <div>
									<img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
								  </div>
								  <div class="pt-2">
									<div class="font-family-secondary leading-none">Dori Griffiths</div>
									<a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
								  </div>
								</div>
							  </td>
							  <td class="align-middle">
								Additional Pay Label
							  </td>
							  <td class="text-center align-middle">
								$00:00
							  </td>
							  <td class="text-center align-middle">
								08/21/2022 9:45 AM
							  </td>
							  <td class="text-center align-middle">$00:00</td>
							  <td class="align-middle">
								<div class="d-flex actions justify-content-center">
								  <a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M9.00065 9.9974C11.3018 9.9974 13.1673 8.13192 13.1673 5.83073C13.1673 3.52954 11.3018 1.66406 9.00065 1.66406C6.69946 1.66406 4.83398 3.52954 4.83398 5.83073C4.83398 8.13192 6.69946 9.9974 9.00065 9.9974Z" stroke="black" stroke-width="2"/>
									  <path d="M13.167 18.3307H3.38871C3.15236 18.3308 2.9187 18.2806 2.70325 18.1834C2.48779 18.0863 2.29546 17.9444 2.13902 17.7672C1.98258 17.5901 1.86562 17.3816 1.79588 17.1558C1.72614 16.93 1.70524 16.6919 1.73454 16.4574L2.05954 13.8541C2.13512 13.2492 2.42906 12.6929 2.88607 12.2896C3.34308 11.8863 3.93169 11.6638 4.54121 11.6641H4.83371" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									  <path d="M17.3337 15.8307L13.167 11.6641M17.3337 11.6641L13.167 15.8307" stroke="black" stroke-width="2" stroke-linecap="round"/>
									</svg>
								  </a>
								  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M14.286 17.1462C15.075 17.1462 15.7146 16.5066 15.7146 15.7176C15.7146 14.9287 15.075 14.2891 14.286 14.2891C13.497 14.2891 12.8574 14.9287 12.8574 15.7176C12.8574 16.5066 13.497 17.1462 14.286 17.1462Z" fill="black"/>
									  <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7749 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703V18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
									  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0V0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black"/>
									  <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Feedback" aria-label="Feedback" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <mask id="mask0_8558_148040" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="21">
									  <path d="M1 1H21V20.2377H1V1Z" fill="white" stroke="white" stroke-width="0.5"/>
									  </mask>
									  <g mask="url(#mask0_8558_148040)">
									  <path d="M8.85115 17.6655L6.68187 18.8041C6.60059 18.8468 6.51476 18.8777 6.42472 18.8966C6.33469 18.9155 6.24395 18.9215 6.15216 18.9148C6.06037 18.9081 5.97139 18.8892 5.88485 18.8577C5.79867 18.8262 5.71809 18.7834 5.64382 18.7295C5.56955 18.6755 5.50404 18.6125 5.44728 18.5399C5.39053 18.4678 5.34499 18.3889 5.31065 18.3038C5.27597 18.219 5.2539 18.1307 5.24409 18.0397C5.23463 17.9482 5.23743 17.8575 5.25355 17.7671L6.02464 13.2782C6.04216 13.177 6.0348 13.0778 6.00292 12.9805C5.97139 12.8831 5.91849 12.7986 5.84492 12.7272L2.57558 9.54821C2.50971 9.48409 2.45401 9.41228 2.40847 9.33275C2.36292 9.25322 2.32894 9.16914 2.30687 9.08016C2.28515 8.99117 2.27569 8.90078 2.27884 8.80935C2.28235 8.71756 2.29811 8.62822 2.32649 8.54134C2.35487 8.45411 2.3948 8.37248 2.4463 8.29645C2.49745 8.22043 2.55806 8.15282 2.62848 8.09396C2.69855 8.03475 2.77562 7.98641 2.85935 7.94892C2.94308 7.91143 3.03066 7.88621 3.1214 7.8729L7.64004 7.21742C7.74164 7.2027 7.83378 7.16522 7.91716 7.10496C8.00019 7.0447 8.0643 6.96868 8.10984 6.87689L10.1299 2.79302C10.1709 2.71104 10.222 2.63607 10.2837 2.56811C10.3453 2.50014 10.4154 2.44233 10.4935 2.39364C10.5717 2.34529 10.6547 2.30886 10.743 2.28363C10.8316 2.25841 10.9216 2.2458 11.0134 2.2458C11.1052 2.2458 11.1956 2.25841 11.2839 2.28363C11.3722 2.30886 11.4552 2.34529 11.5333 2.39364C11.6115 2.44198 11.6815 2.50014 11.7432 2.56811C11.8048 2.63607 11.856 2.71104 11.897 2.79302L13.9177 6.87759C13.9633 6.96938 14.0274 7.0454 14.1104 7.10566C14.1934 7.16592 14.2859 7.2034 14.3875 7.21812L18.9062 7.8736C18.9969 7.88656 19.0841 7.91214 19.1682 7.94962C19.2519 7.98711 19.3287 8.03545 19.3991 8.09466C19.4691 8.15352 19.5301 8.22113 19.5813 8.29715C19.6328 8.37318 19.6723 8.45481 19.7007 8.54169C19.7294 8.62892 19.7452 8.71826 19.7484 8.81005C19.7519 8.90148 19.7424 8.99187 19.7207 9.08051C19.6986 9.16949 19.6646 9.25392 19.6191 9.33345C19.5735 9.41298 19.5178 9.48479 19.452 9.54856L18.4581 10.5155C18.4272 10.5435 18.3996 10.5747 18.375 10.6083C18.3505 10.642 18.3295 10.6777 18.3123 10.7155C18.2952 10.7534 18.2819 10.7926 18.2724 10.8332C18.2629 10.8739 18.2577 10.9149 18.2563 10.9566C18.2552 10.9982 18.2584 11.0396 18.2654 11.0806C18.2727 11.1216 18.2836 11.1615 18.299 11.2C18.3141 11.2389 18.333 11.2757 18.3558 11.3107C18.3782 11.3458 18.4041 11.3784 18.4332 11.4081C18.4623 11.4379 18.4942 11.4645 18.5285 11.488C18.5632 11.5115 18.5996 11.5311 18.6381 11.5476C18.6767 11.5637 18.7163 11.576 18.7573 11.584C18.7983 11.5921 18.8392 11.5963 18.8813 11.5963C18.923 11.5963 18.9643 11.5921 19.0049 11.5837C19.0459 11.5753 19.0855 11.563 19.1241 11.5469C19.1626 11.5304 19.199 11.5104 19.2334 11.487C19.2677 11.4635 19.2996 11.4369 19.3287 11.4067L20.3233 10.4402C20.3975 10.368 20.4662 10.2909 20.5296 10.2093C20.593 10.1273 20.6501 10.0418 20.7016 9.95214C20.7531 9.86246 20.798 9.76962 20.8365 9.67363C20.875 9.57763 20.9066 9.47954 20.9311 9.37934C20.956 9.2788 20.9738 9.17755 20.9844 9.07455C20.9949 8.9719 20.9984 8.8689 20.9945 8.76555C20.9907 8.66221 20.9798 8.55991 20.9619 8.45796C20.9437 8.35636 20.9185 8.25652 20.8866 8.15807C20.8547 8.05998 20.8158 7.96434 20.7706 7.8715C20.7251 7.77866 20.6736 7.68932 20.6158 7.60349C20.558 7.51766 20.4946 7.43638 20.4252 7.35965C20.3562 7.28258 20.2819 7.21076 20.2027 7.1442C20.1236 7.07763 20.0402 7.01668 19.9526 6.96167C19.865 6.90667 19.7739 6.85797 19.6793 6.81558C19.5851 6.77319 19.4881 6.73746 19.3886 6.70873C19.2891 6.67965 19.1882 6.65758 19.0859 6.64287L14.892 6.03468L13.016 2.24159C12.9701 2.14875 12.9179 2.05977 12.8597 1.97429C12.8012 1.8888 12.7371 1.80788 12.6677 1.73115C12.598 1.65478 12.5234 1.58331 12.4439 1.5171C12.3643 1.45088 12.2802 1.39027 12.1923 1.33562C12.1044 1.28132 12.0129 1.23297 11.918 1.19093C11.8234 1.14924 11.726 1.11386 11.6265 1.08548C11.5267 1.0571 11.4254 1.03573 11.3228 1.02172C11.2201 1.00736 11.1171 1 11.0134 1C10.9097 1 10.8067 1.00736 10.7041 1.02172C10.6014 1.03573 10.5002 1.0571 10.4003 1.08548C10.3008 1.11386 10.2035 1.14924 10.1089 1.19093C10.0139 1.23297 9.92248 1.28132 9.83455 1.33562C9.74661 1.39027 9.66288 1.45088 9.583 1.5171C9.50348 1.58331 9.42886 1.65478 9.35914 1.73115C9.28977 1.80788 9.22566 1.8888 9.16751 1.97429C9.109 2.05977 9.0568 2.14875 9.01091 2.24159L7.13555 6.03223L2.94168 6.64041C2.83938 6.65513 2.73848 6.6772 2.63899 6.70628C2.53949 6.73536 2.4428 6.77109 2.34821 6.81348C2.25397 6.85587 2.16288 6.90457 2.0753 6.95957C1.98771 7.01457 1.90433 7.07553 1.82516 7.1421C1.74598 7.20866 1.67171 7.28048 1.60269 7.35755C1.53368 7.43428 1.47027 7.51555 1.41246 7.60139C1.35465 7.68722 1.30316 7.77656 1.25761 7.86939C1.21242 7.96223 1.17353 8.05753 1.14165 8.15597C1.10977 8.25406 1.08455 8.35426 1.06633 8.45586C1.04846 8.55746 1.0376 8.6601 1.03375 8.7631C1.02989 8.86645 1.0334 8.96945 1.04391 9.0721C1.05442 9.17475 1.07193 9.27635 1.09681 9.37689C1.12168 9.47709 1.15321 9.57518 1.1914 9.67117C1.22994 9.76717 1.27478 9.85966 1.32628 9.94934C1.37743 10.0394 1.43488 10.1249 1.49829 10.2068C1.56135 10.2885 1.63002 10.3655 1.70429 10.4377L4.73925 13.3882L4.02387 17.559C4.006 17.6609 3.99549 17.7639 3.99199 17.8673C3.98848 17.9706 3.99234 18.074 4.00355 18.177C4.01441 18.2796 4.03263 18.3816 4.05785 18.4818C4.08307 18.5823 4.11496 18.6804 4.15419 18.7764C4.19308 18.8724 4.23862 18.9652 4.29047 19.0546C4.34232 19.1443 4.40048 19.2297 4.46424 19.3114C4.52835 19.393 4.59772 19.4697 4.67234 19.5415C4.74696 19.6134 4.82649 19.6799 4.91022 19.7405C4.9943 19.8015 5.08188 19.8562 5.17367 19.9048C5.26546 19.9532 5.3597 19.9952 5.45744 20.031C5.55484 20.0664 5.65433 20.0947 5.75593 20.1165C5.85753 20.1378 5.95983 20.1522 6.06353 20.1595C6.16687 20.1669 6.27057 20.1669 6.37392 20.1599C6.47762 20.1529 6.57992 20.1385 6.68152 20.1172C6.78312 20.0958 6.88261 20.0674 6.98036 20.032C7.07775 19.997 7.17234 19.9549 7.26413 19.9066L9.43306 18.7694C9.4709 18.7512 9.50663 18.7295 9.53991 18.7042C9.57355 18.679 9.60402 18.6506 9.6317 18.6195C9.65973 18.5879 9.6839 18.554 9.70492 18.5179C9.72559 18.4814 9.74276 18.4436 9.75607 18.4037C9.76938 18.3641 9.77849 18.3234 9.7834 18.2817C9.7883 18.24 9.789 18.1987 9.7855 18.1567C9.78235 18.115 9.77464 18.074 9.76308 18.0341C9.75117 17.9938 9.73575 17.9552 9.71613 17.9181C9.69651 17.881 9.67339 17.8463 9.64677 17.8137C9.62049 17.7815 9.59071 17.752 9.55848 17.7254C9.5259 17.6991 9.49087 17.676 9.45373 17.6567C9.41659 17.6371 9.37806 17.6217 9.33742 17.6098C9.29713 17.5982 9.25614 17.5905 9.21445 17.5874C9.17241 17.5839 9.13072 17.5846 9.08903 17.5898C9.04734 17.5947 9.0067 17.6038 8.96676 17.6168C8.92718 17.6301 8.88899 17.6473 8.85255 17.668L8.85115 17.6655Z" fill="black" stroke="black" stroke-width="0.5"/>
									  </g>
									  <path d="M20.9214 13.4954C20.8762 13.356 20.8128 13.2253 20.7312 13.1034C20.6492 12.9815 20.5522 12.8735 20.4397 12.779C20.3272 12.6844 20.2039 12.6073 20.0697 12.5477C19.9356 12.4878 19.7958 12.4475 19.65 12.4272L17.3066 12.0877L16.2581 9.97136C16.2262 9.90585 16.1894 9.84279 16.1488 9.78218C16.1078 9.72157 16.0629 9.66412 16.0139 9.60981C15.9649 9.55586 15.9123 9.50506 15.8562 9.45812C15.8002 9.41117 15.741 9.36843 15.679 9.3299C15.6166 9.29136 15.5522 9.25738 15.4852 9.2276C15.4183 9.19817 15.3497 9.1733 15.2792 9.15333C15.2088 9.13336 15.1374 9.11829 15.0648 9.10848C14.9923 9.09832 14.9194 9.09342 14.8466 9.09377C14.7734 9.09342 14.7005 9.09797 14.628 9.10813C14.5554 9.11794 14.484 9.13266 14.4139 9.15263C14.3435 9.17259 14.2748 9.19712 14.2079 9.22655C14.141 9.25632 14.0765 9.29031 14.0142 9.32884C13.9522 9.36738 13.893 9.40977 13.8369 9.45672C13.7809 9.50331 13.7283 9.55376 13.6793 9.60806C13.6302 9.66201 13.5854 9.71947 13.5444 9.78008C13.5034 9.84034 13.467 9.9034 13.4347 9.96891L12.3862 12.0853L10.0421 12.4248C9.89703 12.4458 9.75724 12.4861 9.62341 12.5463C9.48958 12.6062 9.36627 12.6833 9.25416 12.7776C9.14205 12.8721 9.04466 12.98 8.96268 13.1013C8.8807 13.2228 8.81694 13.3532 8.77175 13.4922C8.7262 13.6317 8.70063 13.7743 8.69537 13.9207C8.69012 14.0671 8.70483 14.2111 8.73987 14.3534C8.7749 14.4956 8.82885 14.6301 8.90172 14.7573C8.97459 14.8845 9.06358 14.999 9.16833 15.1013L10.864 16.7511L10.4642 19.0794C10.4386 19.2237 10.4337 19.3691 10.4495 19.5149C10.4649 19.6606 10.5003 19.8018 10.5557 19.9377C10.6107 20.0737 10.6835 20.1994 10.7743 20.3147C10.865 20.4303 10.9698 20.5312 11.0885 20.6174C11.2076 20.7036 11.3362 20.7719 11.4742 20.822C11.6126 20.8721 11.7549 20.9026 11.9017 20.9127C12.0484 20.9229 12.1938 20.9131 12.3375 20.8826C12.4815 20.8521 12.6184 20.8027 12.7481 20.734L14.8445 19.6354L16.9426 20.7382C17.0726 20.8066 17.2096 20.8556 17.3532 20.8854C17.4972 20.9155 17.6423 20.9253 17.7887 20.9148C17.9351 20.904 18.0774 20.8738 18.2154 20.8234C18.3534 20.7733 18.4817 20.705 18.6004 20.6191C18.7192 20.5329 18.8239 20.4324 18.9147 20.3171C19.0054 20.2019 19.0783 20.0765 19.1336 19.9405C19.189 19.8049 19.2247 19.6645 19.2408 19.5187C19.2566 19.373 19.2524 19.2279 19.2275 19.0836L18.8267 16.7556L20.5231 15.1059C20.6289 15.0039 20.7182 14.889 20.7914 14.7619C20.8647 14.635 20.919 14.5002 20.954 14.3576C20.9894 14.2153 21.0041 14.0706 20.9985 13.9242C20.9929 13.7778 20.9673 13.6348 20.9214 13.4954ZM19.6518 14.215L17.7211 16.0917C17.6472 16.1632 17.5946 16.2476 17.5627 16.345C17.5309 16.4424 17.5235 16.5419 17.5407 16.6428L17.9968 19.2942C18.0087 19.3551 18.0028 19.4143 17.9793 19.4721C17.9555 19.5296 17.9183 19.5762 17.8672 19.6116C17.8171 19.6487 17.761 19.6697 17.699 19.6743C17.637 19.6788 17.5785 19.6666 17.5238 19.6371L15.1367 18.3857C15.0459 18.3377 14.9492 18.3136 14.8466 18.3136C14.7436 18.3136 14.6469 18.3377 14.5561 18.3857L12.169 19.6371C12.114 19.6659 12.0558 19.6778 11.9938 19.6732C11.9321 19.6687 11.8761 19.6483 11.826 19.6119C11.7759 19.5755 11.7391 19.5289 11.7156 19.4714C11.6921 19.4143 11.6855 19.3551 11.696 19.2942L12.1521 16.6428C12.1697 16.5419 12.1623 16.4428 12.1304 16.3454C12.0989 16.248 12.046 16.1632 11.9724 16.0917L10.0414 14.215C9.99687 14.1719 9.96709 14.12 9.95203 14.0598C9.93696 13.9999 9.93907 13.94 9.95833 13.8811C9.97725 13.8219 10.0109 13.7725 10.0582 13.7326C10.1058 13.6926 10.1605 13.6681 10.2218 13.659L12.8906 13.2726C12.9922 13.2579 13.0844 13.2204 13.1678 13.1601C13.2508 13.0999 13.3149 13.0238 13.3605 12.9321L14.5544 10.5196C14.5817 10.4643 14.6217 10.4201 14.6746 10.3872C14.7271 10.3546 14.7846 10.3382 14.8466 10.3382C14.9089 10.3382 14.9664 10.3546 15.0189 10.3872C15.0718 10.4201 15.1118 10.4643 15.1391 10.5196L16.3317 12.9314C16.3772 13.0235 16.4417 13.0995 16.5247 13.1598C16.6081 13.22 16.7006 13.2572 16.8022 13.2719L19.471 13.6587C19.5323 13.6674 19.587 13.6919 19.6343 13.7322C19.6819 13.7722 19.7152 13.8216 19.7341 13.8804C19.7534 13.9393 19.7555 13.9988 19.7408 14.0591C19.7261 14.1193 19.6963 14.1712 19.6518 14.2143V14.215Z" fill="black" stroke="black" stroke-width="0.5"/>
									</svg>
								  </a>
								</div>
							  </td>
							</tr>
							<tr role="row" class="odd">
							  <td class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							  </td>
							  <td class="align-middle">
								<div class="d-flex gap-2 align-items-center">
								  <div>
									<img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
								  </div>
								  <div class="pt-2">
									<div class="font-family-secondary leading-none">Dori Griffiths</div>
									<a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
								  </div>
								</div>
							  </td>
							  <td class="align-middle">
								Additional Pay Label
							  </td>
							  <td class="text-center align-middle">
								$00:00
							  </td>
							  <td class="text-center align-middle">
								08/21/2022 9:45 AM
							  </td>
							  <td class="text-center align-middle">$00:00</td>
							  <td class="align-middle">
								<div class="d-flex actions justify-content-center">
								  <a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M9.00065 9.9974C11.3018 9.9974 13.1673 8.13192 13.1673 5.83073C13.1673 3.52954 11.3018 1.66406 9.00065 1.66406C6.69946 1.66406 4.83398 3.52954 4.83398 5.83073C4.83398 8.13192 6.69946 9.9974 9.00065 9.9974Z" stroke="black" stroke-width="2"/>
									  <path d="M13.167 18.3307H3.38871C3.15236 18.3308 2.9187 18.2806 2.70325 18.1834C2.48779 18.0863 2.29546 17.9444 2.13902 17.7672C1.98258 17.5901 1.86562 17.3816 1.79588 17.1558C1.72614 16.93 1.70524 16.6919 1.73454 16.4574L2.05954 13.8541C2.13512 13.2492 2.42906 12.6929 2.88607 12.2896C3.34308 11.8863 3.93169 11.6638 4.54121 11.6641H4.83371" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									  <path d="M17.3337 15.8307L13.167 11.6641M17.3337 11.6641L13.167 15.8307" stroke="black" stroke-width="2" stroke-linecap="round"/>
									</svg>
								  </a>
								  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M14.286 17.1462C15.075 17.1462 15.7146 16.5066 15.7146 15.7176C15.7146 14.9287 15.075 14.2891 14.286 14.2891C13.497 14.2891 12.8574 14.9287 12.8574 15.7176C12.8574 16.5066 13.497 17.1462 14.286 17.1462Z" fill="black"/>
									  <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7749 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703V18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
									  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0V0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black"/>
									  <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black"/>
									</svg>
								  </a>
								  <a href="#" title="Feedback" aria-label="Feedback" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									  <mask id="mask0_8558_148040" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="21">
									  <path d="M1 1H21V20.2377H1V1Z" fill="white" stroke="white" stroke-width="0.5"/>
									  </mask>
									  <g mask="url(#mask0_8558_148040)">
									  <path d="M8.85115 17.6655L6.68187 18.8041C6.60059 18.8468 6.51476 18.8777 6.42472 18.8966C6.33469 18.9155 6.24395 18.9215 6.15216 18.9148C6.06037 18.9081 5.97139 18.8892 5.88485 18.8577C5.79867 18.8262 5.71809 18.7834 5.64382 18.7295C5.56955 18.6755 5.50404 18.6125 5.44728 18.5399C5.39053 18.4678 5.34499 18.3889 5.31065 18.3038C5.27597 18.219 5.2539 18.1307 5.24409 18.0397C5.23463 17.9482 5.23743 17.8575 5.25355 17.7671L6.02464 13.2782C6.04216 13.177 6.0348 13.0778 6.00292 12.9805C5.97139 12.8831 5.91849 12.7986 5.84492 12.7272L2.57558 9.54821C2.50971 9.48409 2.45401 9.41228 2.40847 9.33275C2.36292 9.25322 2.32894 9.16914 2.30687 9.08016C2.28515 8.99117 2.27569 8.90078 2.27884 8.80935C2.28235 8.71756 2.29811 8.62822 2.32649 8.54134C2.35487 8.45411 2.3948 8.37248 2.4463 8.29645C2.49745 8.22043 2.55806 8.15282 2.62848 8.09396C2.69855 8.03475 2.77562 7.98641 2.85935 7.94892C2.94308 7.91143 3.03066 7.88621 3.1214 7.8729L7.64004 7.21742C7.74164 7.2027 7.83378 7.16522 7.91716 7.10496C8.00019 7.0447 8.0643 6.96868 8.10984 6.87689L10.1299 2.79302C10.1709 2.71104 10.222 2.63607 10.2837 2.56811C10.3453 2.50014 10.4154 2.44233 10.4935 2.39364C10.5717 2.34529 10.6547 2.30886 10.743 2.28363C10.8316 2.25841 10.9216 2.2458 11.0134 2.2458C11.1052 2.2458 11.1956 2.25841 11.2839 2.28363C11.3722 2.30886 11.4552 2.34529 11.5333 2.39364C11.6115 2.44198 11.6815 2.50014 11.7432 2.56811C11.8048 2.63607 11.856 2.71104 11.897 2.79302L13.9177 6.87759C13.9633 6.96938 14.0274 7.0454 14.1104 7.10566C14.1934 7.16592 14.2859 7.2034 14.3875 7.21812L18.9062 7.8736C18.9969 7.88656 19.0841 7.91214 19.1682 7.94962C19.2519 7.98711 19.3287 8.03545 19.3991 8.09466C19.4691 8.15352 19.5301 8.22113 19.5813 8.29715C19.6328 8.37318 19.6723 8.45481 19.7007 8.54169C19.7294 8.62892 19.7452 8.71826 19.7484 8.81005C19.7519 8.90148 19.7424 8.99187 19.7207 9.08051C19.6986 9.16949 19.6646 9.25392 19.6191 9.33345C19.5735 9.41298 19.5178 9.48479 19.452 9.54856L18.4581 10.5155C18.4272 10.5435 18.3996 10.5747 18.375 10.6083C18.3505 10.642 18.3295 10.6777 18.3123 10.7155C18.2952 10.7534 18.2819 10.7926 18.2724 10.8332C18.2629 10.8739 18.2577 10.9149 18.2563 10.9566C18.2552 10.9982 18.2584 11.0396 18.2654 11.0806C18.2727 11.1216 18.2836 11.1615 18.299 11.2C18.3141 11.2389 18.333 11.2757 18.3558 11.3107C18.3782 11.3458 18.4041 11.3784 18.4332 11.4081C18.4623 11.4379 18.4942 11.4645 18.5285 11.488C18.5632 11.5115 18.5996 11.5311 18.6381 11.5476C18.6767 11.5637 18.7163 11.576 18.7573 11.584C18.7983 11.5921 18.8392 11.5963 18.8813 11.5963C18.923 11.5963 18.9643 11.5921 19.0049 11.5837C19.0459 11.5753 19.0855 11.563 19.1241 11.5469C19.1626 11.5304 19.199 11.5104 19.2334 11.487C19.2677 11.4635 19.2996 11.4369 19.3287 11.4067L20.3233 10.4402C20.3975 10.368 20.4662 10.2909 20.5296 10.2093C20.593 10.1273 20.6501 10.0418 20.7016 9.95214C20.7531 9.86246 20.798 9.76962 20.8365 9.67363C20.875 9.57763 20.9066 9.47954 20.9311 9.37934C20.956 9.2788 20.9738 9.17755 20.9844 9.07455C20.9949 8.9719 20.9984 8.8689 20.9945 8.76555C20.9907 8.66221 20.9798 8.55991 20.9619 8.45796C20.9437 8.35636 20.9185 8.25652 20.8866 8.15807C20.8547 8.05998 20.8158 7.96434 20.7706 7.8715C20.7251 7.77866 20.6736 7.68932 20.6158 7.60349C20.558 7.51766 20.4946 7.43638 20.4252 7.35965C20.3562 7.28258 20.2819 7.21076 20.2027 7.1442C20.1236 7.07763 20.0402 7.01668 19.9526 6.96167C19.865 6.90667 19.7739 6.85797 19.6793 6.81558C19.5851 6.77319 19.4881 6.73746 19.3886 6.70873C19.2891 6.67965 19.1882 6.65758 19.0859 6.64287L14.892 6.03468L13.016 2.24159C12.9701 2.14875 12.9179 2.05977 12.8597 1.97429C12.8012 1.8888 12.7371 1.80788 12.6677 1.73115C12.598 1.65478 12.5234 1.58331 12.4439 1.5171C12.3643 1.45088 12.2802 1.39027 12.1923 1.33562C12.1044 1.28132 12.0129 1.23297 11.918 1.19093C11.8234 1.14924 11.726 1.11386 11.6265 1.08548C11.5267 1.0571 11.4254 1.03573 11.3228 1.02172C11.2201 1.00736 11.1171 1 11.0134 1C10.9097 1 10.8067 1.00736 10.7041 1.02172C10.6014 1.03573 10.5002 1.0571 10.4003 1.08548C10.3008 1.11386 10.2035 1.14924 10.1089 1.19093C10.0139 1.23297 9.92248 1.28132 9.83455 1.33562C9.74661 1.39027 9.66288 1.45088 9.583 1.5171C9.50348 1.58331 9.42886 1.65478 9.35914 1.73115C9.28977 1.80788 9.22566 1.8888 9.16751 1.97429C9.109 2.05977 9.0568 2.14875 9.01091 2.24159L7.13555 6.03223L2.94168 6.64041C2.83938 6.65513 2.73848 6.6772 2.63899 6.70628C2.53949 6.73536 2.4428 6.77109 2.34821 6.81348C2.25397 6.85587 2.16288 6.90457 2.0753 6.95957C1.98771 7.01457 1.90433 7.07553 1.82516 7.1421C1.74598 7.20866 1.67171 7.28048 1.60269 7.35755C1.53368 7.43428 1.47027 7.51555 1.41246 7.60139C1.35465 7.68722 1.30316 7.77656 1.25761 7.86939C1.21242 7.96223 1.17353 8.05753 1.14165 8.15597C1.10977 8.25406 1.08455 8.35426 1.06633 8.45586C1.04846 8.55746 1.0376 8.6601 1.03375 8.7631C1.02989 8.86645 1.0334 8.96945 1.04391 9.0721C1.05442 9.17475 1.07193 9.27635 1.09681 9.37689C1.12168 9.47709 1.15321 9.57518 1.1914 9.67117C1.22994 9.76717 1.27478 9.85966 1.32628 9.94934C1.37743 10.0394 1.43488 10.1249 1.49829 10.2068C1.56135 10.2885 1.63002 10.3655 1.70429 10.4377L4.73925 13.3882L4.02387 17.559C4.006 17.6609 3.99549 17.7639 3.99199 17.8673C3.98848 17.9706 3.99234 18.074 4.00355 18.177C4.01441 18.2796 4.03263 18.3816 4.05785 18.4818C4.08307 18.5823 4.11496 18.6804 4.15419 18.7764C4.19308 18.8724 4.23862 18.9652 4.29047 19.0546C4.34232 19.1443 4.40048 19.2297 4.46424 19.3114C4.52835 19.393 4.59772 19.4697 4.67234 19.5415C4.74696 19.6134 4.82649 19.6799 4.91022 19.7405C4.9943 19.8015 5.08188 19.8562 5.17367 19.9048C5.26546 19.9532 5.3597 19.9952 5.45744 20.031C5.55484 20.0664 5.65433 20.0947 5.75593 20.1165C5.85753 20.1378 5.95983 20.1522 6.06353 20.1595C6.16687 20.1669 6.27057 20.1669 6.37392 20.1599C6.47762 20.1529 6.57992 20.1385 6.68152 20.1172C6.78312 20.0958 6.88261 20.0674 6.98036 20.032C7.07775 19.997 7.17234 19.9549 7.26413 19.9066L9.43306 18.7694C9.4709 18.7512 9.50663 18.7295 9.53991 18.7042C9.57355 18.679 9.60402 18.6506 9.6317 18.6195C9.65973 18.5879 9.6839 18.554 9.70492 18.5179C9.72559 18.4814 9.74276 18.4436 9.75607 18.4037C9.76938 18.3641 9.77849 18.3234 9.7834 18.2817C9.7883 18.24 9.789 18.1987 9.7855 18.1567C9.78235 18.115 9.77464 18.074 9.76308 18.0341C9.75117 17.9938 9.73575 17.9552 9.71613 17.9181C9.69651 17.881 9.67339 17.8463 9.64677 17.8137C9.62049 17.7815 9.59071 17.752 9.55848 17.7254C9.5259 17.6991 9.49087 17.676 9.45373 17.6567C9.41659 17.6371 9.37806 17.6217 9.33742 17.6098C9.29713 17.5982 9.25614 17.5905 9.21445 17.5874C9.17241 17.5839 9.13072 17.5846 9.08903 17.5898C9.04734 17.5947 9.0067 17.6038 8.96676 17.6168C8.92718 17.6301 8.88899 17.6473 8.85255 17.668L8.85115 17.6655Z" fill="black" stroke="black" stroke-width="0.5"/>
									  </g>
									  <path d="M20.9214 13.4954C20.8762 13.356 20.8128 13.2253 20.7312 13.1034C20.6492 12.9815 20.5522 12.8735 20.4397 12.779C20.3272 12.6844 20.2039 12.6073 20.0697 12.5477C19.9356 12.4878 19.7958 12.4475 19.65 12.4272L17.3066 12.0877L16.2581 9.97136C16.2262 9.90585 16.1894 9.84279 16.1488 9.78218C16.1078 9.72157 16.0629 9.66412 16.0139 9.60981C15.9649 9.55586 15.9123 9.50506 15.8562 9.45812C15.8002 9.41117 15.741 9.36843 15.679 9.3299C15.6166 9.29136 15.5522 9.25738 15.4852 9.2276C15.4183 9.19817 15.3497 9.1733 15.2792 9.15333C15.2088 9.13336 15.1374 9.11829 15.0648 9.10848C14.9923 9.09832 14.9194 9.09342 14.8466 9.09377C14.7734 9.09342 14.7005 9.09797 14.628 9.10813C14.5554 9.11794 14.484 9.13266 14.4139 9.15263C14.3435 9.17259 14.2748 9.19712 14.2079 9.22655C14.141 9.25632 14.0765 9.29031 14.0142 9.32884C13.9522 9.36738 13.893 9.40977 13.8369 9.45672C13.7809 9.50331 13.7283 9.55376 13.6793 9.60806C13.6302 9.66201 13.5854 9.71947 13.5444 9.78008C13.5034 9.84034 13.467 9.9034 13.4347 9.96891L12.3862 12.0853L10.0421 12.4248C9.89703 12.4458 9.75724 12.4861 9.62341 12.5463C9.48958 12.6062 9.36627 12.6833 9.25416 12.7776C9.14205 12.8721 9.04466 12.98 8.96268 13.1013C8.8807 13.2228 8.81694 13.3532 8.77175 13.4922C8.7262 13.6317 8.70063 13.7743 8.69537 13.9207C8.69012 14.0671 8.70483 14.2111 8.73987 14.3534C8.7749 14.4956 8.82885 14.6301 8.90172 14.7573C8.97459 14.8845 9.06358 14.999 9.16833 15.1013L10.864 16.7511L10.4642 19.0794C10.4386 19.2237 10.4337 19.3691 10.4495 19.5149C10.4649 19.6606 10.5003 19.8018 10.5557 19.9377C10.6107 20.0737 10.6835 20.1994 10.7743 20.3147C10.865 20.4303 10.9698 20.5312 11.0885 20.6174C11.2076 20.7036 11.3362 20.7719 11.4742 20.822C11.6126 20.8721 11.7549 20.9026 11.9017 20.9127C12.0484 20.9229 12.1938 20.9131 12.3375 20.8826C12.4815 20.8521 12.6184 20.8027 12.7481 20.734L14.8445 19.6354L16.9426 20.7382C17.0726 20.8066 17.2096 20.8556 17.3532 20.8854C17.4972 20.9155 17.6423 20.9253 17.7887 20.9148C17.9351 20.904 18.0774 20.8738 18.2154 20.8234C18.3534 20.7733 18.4817 20.705 18.6004 20.6191C18.7192 20.5329 18.8239 20.4324 18.9147 20.3171C19.0054 20.2019 19.0783 20.0765 19.1336 19.9405C19.189 19.8049 19.2247 19.6645 19.2408 19.5187C19.2566 19.373 19.2524 19.2279 19.2275 19.0836L18.8267 16.7556L20.5231 15.1059C20.6289 15.0039 20.7182 14.889 20.7914 14.7619C20.8647 14.635 20.919 14.5002 20.954 14.3576C20.9894 14.2153 21.0041 14.0706 20.9985 13.9242C20.9929 13.7778 20.9673 13.6348 20.9214 13.4954ZM19.6518 14.215L17.7211 16.0917C17.6472 16.1632 17.5946 16.2476 17.5627 16.345C17.5309 16.4424 17.5235 16.5419 17.5407 16.6428L17.9968 19.2942C18.0087 19.3551 18.0028 19.4143 17.9793 19.4721C17.9555 19.5296 17.9183 19.5762 17.8672 19.6116C17.8171 19.6487 17.761 19.6697 17.699 19.6743C17.637 19.6788 17.5785 19.6666 17.5238 19.6371L15.1367 18.3857C15.0459 18.3377 14.9492 18.3136 14.8466 18.3136C14.7436 18.3136 14.6469 18.3377 14.5561 18.3857L12.169 19.6371C12.114 19.6659 12.0558 19.6778 11.9938 19.6732C11.9321 19.6687 11.8761 19.6483 11.826 19.6119C11.7759 19.5755 11.7391 19.5289 11.7156 19.4714C11.6921 19.4143 11.6855 19.3551 11.696 19.2942L12.1521 16.6428C12.1697 16.5419 12.1623 16.4428 12.1304 16.3454C12.0989 16.248 12.046 16.1632 11.9724 16.0917L10.0414 14.215C9.99687 14.1719 9.96709 14.12 9.95203 14.0598C9.93696 13.9999 9.93907 13.94 9.95833 13.8811C9.97725 13.8219 10.0109 13.7725 10.0582 13.7326C10.1058 13.6926 10.1605 13.6681 10.2218 13.659L12.8906 13.2726C12.9922 13.2579 13.0844 13.2204 13.1678 13.1601C13.2508 13.0999 13.3149 13.0238 13.3605 12.9321L14.5544 10.5196C14.5817 10.4643 14.6217 10.4201 14.6746 10.3872C14.7271 10.3546 14.7846 10.3382 14.8466 10.3382C14.9089 10.3382 14.9664 10.3546 15.0189 10.3872C15.0718 10.4201 15.1118 10.4643 15.1391 10.5196L16.3317 12.9314C16.3772 13.0235 16.4417 13.0995 16.5247 13.1598C16.6081 13.22 16.7006 13.2572 16.8022 13.2719L19.471 13.6587C19.5323 13.6674 19.587 13.6919 19.6343 13.7322C19.6819 13.7722 19.7152 13.8216 19.7341 13.8804C19.7534 13.9393 19.7555 13.9988 19.7408 14.0591C19.7261 14.1193 19.6963 14.1712 19.6518 14.2143V14.215Z" fill="black" stroke="black" stroke-width="0.5"/>
									</svg>
								  </a>
								</div>
							  </td>
							</tr>
						  </tbody>
						</table>
					  </div>
					</div>
				  </div>
				  </div>
				  <!-- Hoverable rows end -->
				  <div class="d-flex justify-content-between">
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
				  </div>
				</div><!-- /Service 2 Assigned Providers -->
				<div class="col-12 justify-content-center form-actions d-flex gap-3">
				  <button type="" class="btn btn-outline-dark rounded">Back</button>
				  <button type="" class="btn btn-primary rounded">Next</button>
				</div>
			  </div><!-- END: assigned-providers-tab -->
			  <div class="tab-pane fade" id="attachments" role="tabpanel" aria-labelledby="attachments-tab" tabindex="0">
				<h2>Attachments</h2>
				<div class="col-lg-8 mb-4">
				  <div class="mb-3 position-relative">
					<a href="#" @click="addDocuments = true" class="position-absolute w-100 h-100 d-block"></a>
					<label for="AddDocuments" class="form-label">Add Documents</label>
					<input class="form-control" type="file" id="AddDocuments">
				  </div>
				  <div class="row mb-4">
					<div class="col-lg-3">
					  <img src="/tenant/images/img-placeholder-document.jpg" alt="img-placeholder-document" class="w-100">
					  <p class="font-family-secondary"><small>File Name</small></p>
					</div>
					<div class="col-lg-3">
					  <img src="/tenant/images/img-placeholder-document.jpg" alt="img-placeholder-document" class="w-100">
					  <p class="font-family-secondary"><small>File Name</small></p>
					</div>
				  </div>
				</div>
				<div class="col-12 justify-content-center form-actions d-flex gap-3">
				  <button type="" class="btn btn-outline-dark rounded">Back</button>
				  <button type="" class="btn btn-primary rounded">Next</button>
				</div>
			  </div><!-- END: attachments-tab -->
			  <div class="tab-pane fade" id="payment-details" role="tabpanel" aria-labelledby="payment-details-tab" tabindex="0">
				<h2>Payment Detail</h2>
				<div class="row">
				  <div class="col-lg-6">
					<div class="d-lg-flex flex-lg-column gap-3">
					  <div class="row">
						<div class="col-lg-9">
						  <label class="form-label">Total Service Rate:</label>
						</div>
						<div class="col-lg-3">
						  <div class="font-family-tertiary">$00.00</div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-lg-9">
						  <label class="form-label">Override:</label>
						</div>
						<div class="col-lg-3">
						  <div class="font-family-tertiary">$00.00</div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-lg-9">
						  <label class="form-label">Total Additional Charges:</label>
						</div>
						<div class="col-lg-3">
						  <div class="font-family-tertiary">$00.00</div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-lg-9">
						  <label class="form-label">Service Total:</label>
						</div>
						<div class="col-lg-3">
						  <div class="font-family-tertiary">$00.00</div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-lg-9">
						  <label class="form-label">Discount:</label>
						</div>
						<div class="col-lg-3">
						  <div class="font-family-tertiary">$00.00</div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-lg-9">
						  <label class="form-label">Net Total:</label>
						</div>
						<div class="col-lg-3">
						  <div class="font-family-tertiary">$00.00</div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-lg-9">
						  <label class="form-label">Cancel/Modify/Reschedule Fees (list):</label>
						</div>
						<div class="col-lg-3">
						  <div class="font-family-tertiary">$00.00</div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-lg-9">
						  <label class="form-label">Provider Rate Sum:</label>
						</div>
						<div class="col-lg-3">
						  <div class="font-family-tertiary">$00.00</div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-lg-9">
						  <label class="form-label">Additional Provider Payments:</label>
						</div>
						<div class="col-lg-3">
						  <div class="font-family-tertiary">$00.00</div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-lg-9">
						  <label class="form-label">Profit Margin:</label>
						</div>
						<div class="col-lg-3">
						  <div class="font-family-tertiary">$00.00</div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="col-lg-6">
					<!-- Billing Notes -->
					<div class="mb-4">
					  <label class="form-label">
						Billing Notes
					  </label>
					  <textarea class="form-control" rows="4" cols="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</textarea>
					</div><!-- /Billing Notes -->
					<!-- Payment Notes -->
					<div class="mb-4">
					  <label class="form-label">
						Payment Notes
					  </label>
					  <textarea class="form-control" rows="4" cols="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</textarea>
					</div><!-- /Payment Notes -->
				  </div>
				</div>
				<div class="col-12 justify-content-center form-actions d-flex gap-3">
				  <button type="" class="btn btn-outline-dark rounded">Back</button>
				  <button type="" class="btn btn-primary rounded">Next</button>
				</div>
			  </div><!-- END: payment-details-tab -->
			  <div class="tab-pane fade" id="assignment-log" role="tabpanel" aria-labelledby="assignment-log-tab" tabindex="0">
				<!-- Assignment Discussions -->
				<div class="mb-4">
				  <h2>Assignment Discussions</h2>
				  <div class="d-lg-flex justify-content-between align-items-center mb-4">
					<button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					  <span>
						<svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.001 0.5V8.625C10.001 9.12228 10.1985 9.5992 10.5501 9.95083C10.9018 10.3025 11.3787 10.5 11.876 10.5H20.001V17.6963L18.3847 16.08C18.2686 15.9639 18.1307 15.8719 17.979 15.8091C17.8273 15.7463 17.6647 15.7141 17.5005 15.7141C17.3363 15.7142 17.1738 15.7466 17.0221 15.8095C16.8705 15.8723 16.7327 15.9645 16.6166 16.0806C16.5005 16.1968 16.4085 16.3346 16.3457 16.4863C16.2829 16.638 16.2507 16.8006 16.2507 16.9648C16.2508 17.129 16.2832 17.2916 16.3461 17.4432C16.4089 17.5949 16.5011 17.7327 16.6172 17.8488L18.0185 19.25H12.501C12.1695 19.25 11.8515 19.3817 11.6171 19.6161C11.3827 19.8505 11.251 20.1685 11.251 20.5C11.251 20.8315 11.3827 21.1495 11.6171 21.3839C11.8515 21.6183 12.1695 21.75 12.501 21.75H18.0185L16.6172 23.1513C16.3827 23.3856 16.2508 23.7036 16.2507 24.0352C16.2506 24.3668 16.3822 24.6848 16.6166 24.9194C16.851 25.1539 17.1689 25.2858 17.5005 25.2859C17.8321 25.286 18.1502 25.1544 18.3847 24.92L19.9797 23.3238C19.9011 23.9256 19.6063 24.4783 19.1502 24.8787C18.6941 25.2791 18.1079 25.5 17.501 25.5H2.50098C1.83794 25.5 1.20205 25.2366 0.733209 24.7678C0.264369 24.2989 0.000976563 23.663 0.000976562 23V3C0.000976562 2.33696 0.264369 1.70107 0.733209 1.23223C1.20205 0.763392 1.83794 0.5 2.50098 0.5H10.001ZM20.001 17.6963L21.9197 19.6163C22.1541 19.8507 22.2857 20.1685 22.2857 20.5C22.2857 20.8315 22.1541 21.1493 21.9197 21.3838L20.001 23.3038V17.6963ZM12.501 0.55375C12.9746 0.654194 13.4088 0.889989 13.751 1.2325L19.2685 6.75C19.611 7.09216 19.8468 7.5264 19.9472 8H12.501V0.55375Z"></path>
						</svg>
					  </span>
					</button>
					<a href="#" class="btn btn-primary btn-has-icon rounded">
					  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"></path>
					  </svg>
					  Add New Comment
					</a>
				  </div>
				  <div class="d-flex justify-content-between mb-2">
					<div class="d-inline-flex align-items-center gap-4">
					  <div class="d-inline-flex align-items-center gap-4">
						<label for="show_records_number" class="form-label-sm mb-0">Show</label>
						<select class="form-select form-select-sm" id="show_records_number">
						  <option>10</option>
						  <option>15</option>
						  <option>20</option>
						  <option>25</option>
						</select>
					  </div>
					</div>
					<div class="d-inline-flex align-items-center gap-4">
					  <label for="search" class="form-label-sm mb-0">Search</label>
					  <input type="search" class="form-control form-control-sm" id="search" name="search" placeholder="Search here" autocomplete="on"/>
					</div>
				  </div>
				  <!-- Hoverable rows start -->
				  <div class="row" id="table-hover-row">
					<div class="col-12">
					  <div class="card">
						<div class="table-responsive">
						  <table id="unassigned_data" class="table table-fs-md table-hover" aria-label="">
							<thead>
							  <tr role="row">
								<th scope="col" class="text-center">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
								</th>
								<th scope="col">Name</th>
								<th scope="col" width="50%">Comment</th>
								<th scope="col" class="">Date/Time</th>
								<th class="text-center">Action</th>
							  </tr>
							</thead>
							<tbody>
							  <tr role="row" class="odd">
								<td class="text-center align-middle">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td class="align-middle">
								  <div class="d-flex gap-2 align-items-center">
									<div>
									  <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
									</div>
									<div class="pt-2">
									  <div class="font-family-secondary leading-none">Dori Griffiths (Admin)</div>
									  <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
									</div>
								  </div>
								</td>
								<td class="align-middle">
								  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt @provider @Supervisor
								</td>
								<td class="align-middle">
								  <div>08/21/2022</div>
								  <small>9:45 AM</small>
								</td>
								<td class="align-middle">
								  <div class="d-flex actions justify-content-center">
									<a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.9213 9.69332H17.1285C17.1285 9.12793 16.9069 8.58569 16.5124 8.1859C16.1179 7.78611 15.5828 7.56151 15.0249 7.56151C14.467 7.56151 13.932 7.78611 13.5374 8.1859C13.1429 8.58569 12.9213 9.12793 12.9213 9.69332ZM10.8177 9.69332C10.8177 8.56254 11.261 7.47806 12.05 6.67848C12.839 5.87889 13.9091 5.42969 15.0249 5.42969C16.1408 5.42969 17.2109 5.87889 17.9999 6.67848C18.7889 7.47806 19.2322 8.56254 19.2322 9.69332H24.4912C24.7702 9.69332 25.0377 9.80562 25.235 10.0055C25.4322 10.2054 25.543 10.4765 25.543 10.7592C25.543 11.0419 25.4322 11.313 25.235 11.5129C25.0377 11.7128 24.7702 11.8251 24.4912 11.8251H23.5635L22.6316 22.8466C22.542 23.9109 22.0615 24.9023 21.2851 25.6248C20.5088 26.3472 19.4931 26.748 18.4391 26.7479H11.6108C10.5567 26.748 9.54109 26.3472 8.76472 25.6248C7.98835 24.9023 7.50784 23.9109 7.41824 22.8466L6.48634 11.8251H5.55865C5.27969 11.8251 5.01216 11.7128 4.8149 11.5129C4.61765 11.313 4.50684 11.0419 4.50684 10.7592C4.50684 10.4765 4.61765 10.2054 4.8149 10.0055C5.01216 9.80562 5.27969 9.69332 5.55865 9.69332H10.8177ZM18.1804 16.0888C18.1804 15.8061 18.0695 15.535 17.8723 15.3351C17.675 15.1352 17.4075 15.0229 17.1285 15.0229C16.8496 15.0229 16.5821 15.1352 16.3848 15.3351C16.1876 15.535 16.0767 15.8061 16.0767 16.0888V20.3524C16.0767 20.6351 16.1876 20.9062 16.3848 21.1061C16.5821 21.306 16.8496 21.4183 17.1285 21.4183C17.4075 21.4183 17.675 21.306 17.8723 21.1061C18.0695 20.9062 18.1804 20.6351 18.1804 20.3524V16.0888ZM12.9213 15.0229C13.2003 15.0229 13.4678 15.1352 13.6651 15.3351C13.8623 15.535 13.9731 15.8061 13.9731 16.0888V20.3524C13.9731 20.6351 13.8623 20.9062 13.6651 21.1061C13.4678 21.306 13.2003 21.4183 12.9213 21.4183C12.6424 21.4183 12.3748 21.306 12.1776 21.1061C11.9803 20.9062 11.8695 20.6351 11.8695 20.3524V16.0888C11.8695 15.8061 11.9803 15.535 12.1776 15.3351C12.3748 15.1352 12.6424 15.0229 12.9213 15.0229ZM9.51345 22.6654C9.55826 23.1978 9.79867 23.6936 10.1871 24.0549C10.5755 24.4161 11.0836 24.6164 11.6108 24.6161H18.4391C18.9659 24.6158 19.4735 24.4153 19.8615 24.0541C20.2494 23.693 20.4895 23.1974 20.5343 22.6654L21.4515 11.8251H8.59837L9.51555 22.6654H9.51345Z" fill="black"/>
									  </svg>
									</a>
								  </div>
								</td>
							  </tr>
							  <tr role="row" class="even">
								<td class="text-center align-middle">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td class="align-middle">
								  <div class="d-flex gap-2 align-items-center">
									<div>
									  <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
									</div>
									<div class="pt-2">
									  <div class="font-family-secondary leading-none">Dori Griffiths (Admin)</div>
									  <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
									</div>
								  </div>
								</td>
								<td class="align-middle">
								  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt @provider @Supervisor
								</td>
								<td class="align-middle">
								  <div>08/21/2022</div>
								  <small>9:45 AM</small>
								</td>
								<td class="align-middle">
								  <div class="d-flex actions justify-content-center">
									<a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.9213 9.69332H17.1285C17.1285 9.12793 16.9069 8.58569 16.5124 8.1859C16.1179 7.78611 15.5828 7.56151 15.0249 7.56151C14.467 7.56151 13.932 7.78611 13.5374 8.1859C13.1429 8.58569 12.9213 9.12793 12.9213 9.69332ZM10.8177 9.69332C10.8177 8.56254 11.261 7.47806 12.05 6.67848C12.839 5.87889 13.9091 5.42969 15.0249 5.42969C16.1408 5.42969 17.2109 5.87889 17.9999 6.67848C18.7889 7.47806 19.2322 8.56254 19.2322 9.69332H24.4912C24.7702 9.69332 25.0377 9.80562 25.235 10.0055C25.4322 10.2054 25.543 10.4765 25.543 10.7592C25.543 11.0419 25.4322 11.313 25.235 11.5129C25.0377 11.7128 24.7702 11.8251 24.4912 11.8251H23.5635L22.6316 22.8466C22.542 23.9109 22.0615 24.9023 21.2851 25.6248C20.5088 26.3472 19.4931 26.748 18.4391 26.7479H11.6108C10.5567 26.748 9.54109 26.3472 8.76472 25.6248C7.98835 24.9023 7.50784 23.9109 7.41824 22.8466L6.48634 11.8251H5.55865C5.27969 11.8251 5.01216 11.7128 4.8149 11.5129C4.61765 11.313 4.50684 11.0419 4.50684 10.7592C4.50684 10.4765 4.61765 10.2054 4.8149 10.0055C5.01216 9.80562 5.27969 9.69332 5.55865 9.69332H10.8177ZM18.1804 16.0888C18.1804 15.8061 18.0695 15.535 17.8723 15.3351C17.675 15.1352 17.4075 15.0229 17.1285 15.0229C16.8496 15.0229 16.5821 15.1352 16.3848 15.3351C16.1876 15.535 16.0767 15.8061 16.0767 16.0888V20.3524C16.0767 20.6351 16.1876 20.9062 16.3848 21.1061C16.5821 21.306 16.8496 21.4183 17.1285 21.4183C17.4075 21.4183 17.675 21.306 17.8723 21.1061C18.0695 20.9062 18.1804 20.6351 18.1804 20.3524V16.0888ZM12.9213 15.0229C13.2003 15.0229 13.4678 15.1352 13.6651 15.3351C13.8623 15.535 13.9731 15.8061 13.9731 16.0888V20.3524C13.9731 20.6351 13.8623 20.9062 13.6651 21.1061C13.4678 21.306 13.2003 21.4183 12.9213 21.4183C12.6424 21.4183 12.3748 21.306 12.1776 21.1061C11.9803 20.9062 11.8695 20.6351 11.8695 20.3524V16.0888C11.8695 15.8061 11.9803 15.535 12.1776 15.3351C12.3748 15.1352 12.6424 15.0229 12.9213 15.0229ZM9.51345 22.6654C9.55826 23.1978 9.79867 23.6936 10.1871 24.0549C10.5755 24.4161 11.0836 24.6164 11.6108 24.6161H18.4391C18.9659 24.6158 19.4735 24.4153 19.8615 24.0541C20.2494 23.693 20.4895 23.1974 20.5343 22.6654L21.4515 11.8251H8.59837L9.51555 22.6654H9.51345Z" fill="black"/>
									  </svg>
									</a>
								  </div>
								</td>
							  </tr>
							  <tr role="row" class="odd">
								<td class="text-center align-middle">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td class="align-middle">
								  <div class="d-flex gap-2 align-items-center">
									<div>
									  <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
									</div>
									<div class="pt-2">
									  <div class="font-family-secondary leading-none">Dori Griffiths (Admin)</div>
									  <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
									</div>
								  </div>
								</td>
								<td class="align-middle">
								  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt @provider @Supervisor
								</td>
								<td class="align-middle">
								  <div>08/21/2022</div>
								  <small>9:45 AM</small>
								</td>
								<td class="align-middle">
								  <div class="d-flex actions justify-content-center">
									<a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.9213 9.69332H17.1285C17.1285 9.12793 16.9069 8.58569 16.5124 8.1859C16.1179 7.78611 15.5828 7.56151 15.0249 7.56151C14.467 7.56151 13.932 7.78611 13.5374 8.1859C13.1429 8.58569 12.9213 9.12793 12.9213 9.69332ZM10.8177 9.69332C10.8177 8.56254 11.261 7.47806 12.05 6.67848C12.839 5.87889 13.9091 5.42969 15.0249 5.42969C16.1408 5.42969 17.2109 5.87889 17.9999 6.67848C18.7889 7.47806 19.2322 8.56254 19.2322 9.69332H24.4912C24.7702 9.69332 25.0377 9.80562 25.235 10.0055C25.4322 10.2054 25.543 10.4765 25.543 10.7592C25.543 11.0419 25.4322 11.313 25.235 11.5129C25.0377 11.7128 24.7702 11.8251 24.4912 11.8251H23.5635L22.6316 22.8466C22.542 23.9109 22.0615 24.9023 21.2851 25.6248C20.5088 26.3472 19.4931 26.748 18.4391 26.7479H11.6108C10.5567 26.748 9.54109 26.3472 8.76472 25.6248C7.98835 24.9023 7.50784 23.9109 7.41824 22.8466L6.48634 11.8251H5.55865C5.27969 11.8251 5.01216 11.7128 4.8149 11.5129C4.61765 11.313 4.50684 11.0419 4.50684 10.7592C4.50684 10.4765 4.61765 10.2054 4.8149 10.0055C5.01216 9.80562 5.27969 9.69332 5.55865 9.69332H10.8177ZM18.1804 16.0888C18.1804 15.8061 18.0695 15.535 17.8723 15.3351C17.675 15.1352 17.4075 15.0229 17.1285 15.0229C16.8496 15.0229 16.5821 15.1352 16.3848 15.3351C16.1876 15.535 16.0767 15.8061 16.0767 16.0888V20.3524C16.0767 20.6351 16.1876 20.9062 16.3848 21.1061C16.5821 21.306 16.8496 21.4183 17.1285 21.4183C17.4075 21.4183 17.675 21.306 17.8723 21.1061C18.0695 20.9062 18.1804 20.6351 18.1804 20.3524V16.0888ZM12.9213 15.0229C13.2003 15.0229 13.4678 15.1352 13.6651 15.3351C13.8623 15.535 13.9731 15.8061 13.9731 16.0888V20.3524C13.9731 20.6351 13.8623 20.9062 13.6651 21.1061C13.4678 21.306 13.2003 21.4183 12.9213 21.4183C12.6424 21.4183 12.3748 21.306 12.1776 21.1061C11.9803 20.9062 11.8695 20.6351 11.8695 20.3524V16.0888C11.8695 15.8061 11.9803 15.535 12.1776 15.3351C12.3748 15.1352 12.6424 15.0229 12.9213 15.0229ZM9.51345 22.6654C9.55826 23.1978 9.79867 23.6936 10.1871 24.0549C10.5755 24.4161 11.0836 24.6164 11.6108 24.6161H18.4391C18.9659 24.6158 19.4735 24.4153 19.8615 24.0541C20.2494 23.693 20.4895 23.1974 20.5343 22.6654L21.4515 11.8251H8.59837L9.51555 22.6654H9.51345Z" fill="black"/>
									  </svg>
									</a>
								  </div>
								</td>
							  </tr>
							  <tr role="row" class="even">
								<td class="text-center align-middle">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td class="align-middle">
								  <div class="d-flex gap-2 align-items-center">
									<div>
									  <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
									</div>
									<div class="pt-2">
									  <div class="font-family-secondary leading-none">Dori Griffiths (Admin)</div>
									  <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
									</div>
								  </div>
								</td>
								<td class="align-middle">
								  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt @provider @Supervisor
								</td>
								<td class="align-middle">
								  <div>08/21/2022</div>
								  <small>9:45 AM</small>
								</td>
								<td class="align-middle">
								  <div class="d-flex actions justify-content-center">
									<a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.9213 9.69332H17.1285C17.1285 9.12793 16.9069 8.58569 16.5124 8.1859C16.1179 7.78611 15.5828 7.56151 15.0249 7.56151C14.467 7.56151 13.932 7.78611 13.5374 8.1859C13.1429 8.58569 12.9213 9.12793 12.9213 9.69332ZM10.8177 9.69332C10.8177 8.56254 11.261 7.47806 12.05 6.67848C12.839 5.87889 13.9091 5.42969 15.0249 5.42969C16.1408 5.42969 17.2109 5.87889 17.9999 6.67848C18.7889 7.47806 19.2322 8.56254 19.2322 9.69332H24.4912C24.7702 9.69332 25.0377 9.80562 25.235 10.0055C25.4322 10.2054 25.543 10.4765 25.543 10.7592C25.543 11.0419 25.4322 11.313 25.235 11.5129C25.0377 11.7128 24.7702 11.8251 24.4912 11.8251H23.5635L22.6316 22.8466C22.542 23.9109 22.0615 24.9023 21.2851 25.6248C20.5088 26.3472 19.4931 26.748 18.4391 26.7479H11.6108C10.5567 26.748 9.54109 26.3472 8.76472 25.6248C7.98835 24.9023 7.50784 23.9109 7.41824 22.8466L6.48634 11.8251H5.55865C5.27969 11.8251 5.01216 11.7128 4.8149 11.5129C4.61765 11.313 4.50684 11.0419 4.50684 10.7592C4.50684 10.4765 4.61765 10.2054 4.8149 10.0055C5.01216 9.80562 5.27969 9.69332 5.55865 9.69332H10.8177ZM18.1804 16.0888C18.1804 15.8061 18.0695 15.535 17.8723 15.3351C17.675 15.1352 17.4075 15.0229 17.1285 15.0229C16.8496 15.0229 16.5821 15.1352 16.3848 15.3351C16.1876 15.535 16.0767 15.8061 16.0767 16.0888V20.3524C16.0767 20.6351 16.1876 20.9062 16.3848 21.1061C16.5821 21.306 16.8496 21.4183 17.1285 21.4183C17.4075 21.4183 17.675 21.306 17.8723 21.1061C18.0695 20.9062 18.1804 20.6351 18.1804 20.3524V16.0888ZM12.9213 15.0229C13.2003 15.0229 13.4678 15.1352 13.6651 15.3351C13.8623 15.535 13.9731 15.8061 13.9731 16.0888V20.3524C13.9731 20.6351 13.8623 20.9062 13.6651 21.1061C13.4678 21.306 13.2003 21.4183 12.9213 21.4183C12.6424 21.4183 12.3748 21.306 12.1776 21.1061C11.9803 20.9062 11.8695 20.6351 11.8695 20.3524V16.0888C11.8695 15.8061 11.9803 15.535 12.1776 15.3351C12.3748 15.1352 12.6424 15.0229 12.9213 15.0229ZM9.51345 22.6654C9.55826 23.1978 9.79867 23.6936 10.1871 24.0549C10.5755 24.4161 11.0836 24.6164 11.6108 24.6161H18.4391C18.9659 24.6158 19.4735 24.4153 19.8615 24.0541C20.2494 23.693 20.4895 23.1974 20.5343 22.6654L21.4515 11.8251H8.59837L9.51555 22.6654H9.51345Z" fill="black"/>
									  </svg>
									</a>
								  </div>
								</td>
							  </tr>
							  <tr role="row" class="odd">
								<td class="text-center align-middle">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td class="align-middle">
								  <div class="d-flex gap-2 align-items-center">
									<div>
									  <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
									</div>
									<div class="pt-2">
									  <div class="font-family-secondary leading-none">Dori Griffiths (Admin)</div>
									  <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
									</div>
								  </div>
								</td>
								<td class="align-middle">
								  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt @provider @Supervisor
								</td>
								<td class="align-middle">
								  <div>08/21/2022</div>
								  <small>9:45 AM</small>
								</td>
								<td class="align-middle">
								  <div class="d-flex actions justify-content-center">
									<a href="#" title="Revoke" aria-label="Revoke" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.9213 9.69332H17.1285C17.1285 9.12793 16.9069 8.58569 16.5124 8.1859C16.1179 7.78611 15.5828 7.56151 15.0249 7.56151C14.467 7.56151 13.932 7.78611 13.5374 8.1859C13.1429 8.58569 12.9213 9.12793 12.9213 9.69332ZM10.8177 9.69332C10.8177 8.56254 11.261 7.47806 12.05 6.67848C12.839 5.87889 13.9091 5.42969 15.0249 5.42969C16.1408 5.42969 17.2109 5.87889 17.9999 6.67848C18.7889 7.47806 19.2322 8.56254 19.2322 9.69332H24.4912C24.7702 9.69332 25.0377 9.80562 25.235 10.0055C25.4322 10.2054 25.543 10.4765 25.543 10.7592C25.543 11.0419 25.4322 11.313 25.235 11.5129C25.0377 11.7128 24.7702 11.8251 24.4912 11.8251H23.5635L22.6316 22.8466C22.542 23.9109 22.0615 24.9023 21.2851 25.6248C20.5088 26.3472 19.4931 26.748 18.4391 26.7479H11.6108C10.5567 26.748 9.54109 26.3472 8.76472 25.6248C7.98835 24.9023 7.50784 23.9109 7.41824 22.8466L6.48634 11.8251H5.55865C5.27969 11.8251 5.01216 11.7128 4.8149 11.5129C4.61765 11.313 4.50684 11.0419 4.50684 10.7592C4.50684 10.4765 4.61765 10.2054 4.8149 10.0055C5.01216 9.80562 5.27969 9.69332 5.55865 9.69332H10.8177ZM18.1804 16.0888C18.1804 15.8061 18.0695 15.535 17.8723 15.3351C17.675 15.1352 17.4075 15.0229 17.1285 15.0229C16.8496 15.0229 16.5821 15.1352 16.3848 15.3351C16.1876 15.535 16.0767 15.8061 16.0767 16.0888V20.3524C16.0767 20.6351 16.1876 20.9062 16.3848 21.1061C16.5821 21.306 16.8496 21.4183 17.1285 21.4183C17.4075 21.4183 17.675 21.306 17.8723 21.1061C18.0695 20.9062 18.1804 20.6351 18.1804 20.3524V16.0888ZM12.9213 15.0229C13.2003 15.0229 13.4678 15.1352 13.6651 15.3351C13.8623 15.535 13.9731 15.8061 13.9731 16.0888V20.3524C13.9731 20.6351 13.8623 20.9062 13.6651 21.1061C13.4678 21.306 13.2003 21.4183 12.9213 21.4183C12.6424 21.4183 12.3748 21.306 12.1776 21.1061C11.9803 20.9062 11.8695 20.6351 11.8695 20.3524V16.0888C11.8695 15.8061 11.9803 15.535 12.1776 15.3351C12.3748 15.1352 12.6424 15.0229 12.9213 15.0229ZM9.51345 22.6654C9.55826 23.1978 9.79867 23.6936 10.1871 24.0549C10.5755 24.4161 11.0836 24.6164 11.6108 24.6161H18.4391C18.9659 24.6158 19.4735 24.4153 19.8615 24.0541C20.2494 23.693 20.4895 23.1974 20.5343 22.6654L21.4515 11.8251H8.59837L9.51555 22.6654H9.51345Z" fill="black"/>
									  </svg>
									</a>
								  </div>
								</td>
							  </tr>
							</tbody>
						  </table>
						</div>
					  </div>
					</div>
				  </div>
				  <!-- Hoverable rows end -->
				  <div class="d-flex justify-content-between">
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
				  </div>
				</div><!-- /Assignment Discussions -->
				<!-- Assignment Status -->
				<div class="mb-4">
				  <h2>Assignment Status</h2>
				  <div class="mb-4">
					<button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					<span>
					  <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M10.001 0.5V8.625C10.001 9.12228 10.1985 9.5992 10.5501 9.95083C10.9018 10.3025 11.3787 10.5 11.876 10.5H20.001V17.6963L18.3847 16.08C18.2686 15.9639 18.1307 15.8719 17.979 15.8091C17.8273 15.7463 17.6647 15.7141 17.5005 15.7141C17.3363 15.7142 17.1738 15.7466 17.0221 15.8095C16.8705 15.8723 16.7327 15.9645 16.6166 16.0806C16.5005 16.1968 16.4085 16.3346 16.3457 16.4863C16.2829 16.638 16.2507 16.8006 16.2507 16.9648C16.2508 17.129 16.2832 17.2916 16.3461 17.4432C16.4089 17.5949 16.5011 17.7327 16.6172 17.8488L18.0185 19.25H12.501C12.1695 19.25 11.8515 19.3817 11.6171 19.6161C11.3827 19.8505 11.251 20.1685 11.251 20.5C11.251 20.8315 11.3827 21.1495 11.6171 21.3839C11.8515 21.6183 12.1695 21.75 12.501 21.75H18.0185L16.6172 23.1513C16.3827 23.3856 16.2508 23.7036 16.2507 24.0352C16.2506 24.3668 16.3822 24.6848 16.6166 24.9194C16.851 25.1539 17.1689 25.2858 17.5005 25.2859C17.8321 25.286 18.1502 25.1544 18.3847 24.92L19.9797 23.3238C19.9011 23.9256 19.6063 24.4783 19.1502 24.8787C18.6941 25.2791 18.1079 25.5 17.501 25.5H2.50098C1.83794 25.5 1.20205 25.2366 0.733209 24.7678C0.264369 24.2989 0.000976563 23.663 0.000976562 23V3C0.000976562 2.33696 0.264369 1.70107 0.733209 1.23223C1.20205 0.763392 1.83794 0.5 2.50098 0.5H10.001ZM20.001 17.6963L21.9197 19.6163C22.1541 19.8507 22.2857 20.1685 22.2857 20.5C22.2857 20.8315 22.1541 21.1493 21.9197 21.3838L20.001 23.3038V17.6963ZM12.501 0.55375C12.9746 0.654194 13.4088 0.889989 13.751 1.2325L19.2685 6.75C19.611 7.09216 19.8468 7.5264 19.9472 8H12.501V0.55375Z"></path>
					  </svg>
					</span>
				  </button>
				  </div>
				  <div class="d-flex justify-content-between mb-2">
					<div class="d-inline-flex align-items-center gap-4">
					  <div class="d-inline-flex align-items-center gap-4">
						<label for="show_records_number" class="form-label-sm mb-0">Show</label>
						<select class="form-select form-select-sm" id="show_records_number">
						  <option>10</option>
						  <option>15</option>
						  <option>20</option>
						  <option>25</option>
						</select>
					  </div>
					</div>
					<div class="d-inline-flex align-items-center gap-4">
					  <label for="search" class="form-label-sm mb-0">Search</label>
					  <input type="search" class="form-control form-control-sm" id="search" name="search" placeholder="Search here" autocomplete="on"/>
					</div>
				  </div>
				  <!-- Hoverable rows start -->
				  <div class="row" id="table-hover-row">
					<div class="col-12">
					  <div class="card">
						<div class="table-responsive">
						  <table id="unassigned_data" class="table table-fs-md table-hover" aria-label="">
							<thead>
							  <tr role="row">
								<th scope="col" class="text-center">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
								</th>
								<th scope="col">Interpreter</th>
								<th scope="col" class="text-center">Running Late</th>
								<th scope="col">Check-in</th>
								<th scope="col">Check-out</th>
								<th scope="col" class="text-center">Feedback</th>
								<th scope="col" class="">Status</th>
								<th class="text-center">Action</th>
							  </tr>
							</thead>
							<tbody>
							  <tr role="row" class="odd">
								<td class="text-center align-middle">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td class="align-middle">
								  <div class="d-flex gap-2 align-items-center">
									<div>
									  <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
									</div>
									<div class="pt-2">
									  <div class="font-family-secondary leading-none">Dori Griffiths</div>
									  <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
									</div>
								  </div>
								</td>
								<td class="align-middle text-center">
								  10
								</td>
								<td class="align-middle">
								  <div>05/25/2022</div>
								  <div>7:15 PM</div>
								</td>
								<td class="align-middle">
								  <div>08/21/2022</div>
								  <div>9:45 AM</div>
								</td>
								<td class="text-center align-middle">
								  <a href="#">5</a>
								</td>
								<td class="align-middle">
								  <div class="d-flex align-items-center gap-1">
									<svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
									Pending
								  </div>
								</td>
								<td class="align-middle">
								  <div class="d-flex actions justify-content-center">
									<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.3116 17.4978C15.1006 17.4978 15.7402 16.8582 15.7402 16.0692C15.7402 15.2802 15.1006 14.6406 14.3116 14.6406C13.5226 14.6406 12.8831 15.2802 12.8831 16.0692C12.8831 16.8582 13.5226 17.4978 14.3116 17.4978Z" fill="black"/>
										<path d="M19.8665 15.6926C19.4251 14.5682 18.6635 13.5981 17.6761 12.9024C16.6886 12.2068 15.5188 11.8161 14.3115 11.779C13.1041 11.8161 11.9343 12.2068 10.9468 12.9024C9.95938 13.5981 9.19779 14.5682 8.75645 15.6926L8.59717 16.0647L8.75645 16.4369C9.19779 17.5612 9.95938 18.5314 10.9468 19.227C11.9343 19.9227 13.1041 20.3133 14.3115 20.3504C15.5188 20.3133 16.6886 19.9227 17.6761 19.227C18.6635 18.5314 19.4251 17.5612 19.8665 16.4369L20.0257 16.0647L19.8665 15.6926ZM14.3115 18.9219C13.7464 18.9219 13.194 18.7543 12.7241 18.4404C12.2543 18.1264 11.888 17.6802 11.6718 17.1581C11.4555 16.636 11.399 16.0616 11.5092 15.5073C11.6195 14.9531 11.8916 14.444 12.2911 14.0444C12.6907 13.6448 13.1998 13.3727 13.7541 13.2625C14.3083 13.1522 14.8828 13.2088 15.4048 13.4251C15.9269 13.6413 16.3731 14.0075 16.6871 14.4774C17.001 14.9472 17.1686 15.4996 17.1686 16.0647C17.1677 16.8222 16.8663 17.5484 16.3307 18.084C15.7951 18.6196 15.0689 18.9209 14.3115 18.9219ZM3.59717 11.0647H7.1686V12.4933H3.59717V11.0647ZM3.59717 7.4933H12.1686V8.92188H3.59717V7.4933ZM3.59717 3.92188H12.1686V5.35045H3.59717V3.92188Z" fill="black"/>
										<path d="M14.3116 0.351562H1.45445C1.07592 0.352693 0.713211 0.503566 0.445547 0.77123C0.177882 1.03889 0.0270094 1.4016 0.0258789 1.78013V18.923C0.0270094 19.3015 0.177882 19.6642 0.445547 19.9319C0.713211 20.1996 1.07592 20.3504 1.45445 20.3516H7.16874V18.923H1.45445V1.78013H14.3116V9.63728H15.7402V1.78013C15.739 1.4016 15.5882 1.03889 15.3205 0.77123C15.0528 0.503566 14.6901 0.352693 14.3116 0.351562Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3.02588 16.3516V20.1176L4.54088 19.2086L9.30288 16.3516H14.0259C15.1289 16.3516 16.0259 15.4546 16.0259 14.3516V6.35156C16.0259 5.24856 15.1289 4.35156 14.0259 4.35156H2.02588C0.922879 4.35156 0.0258789 5.24856 0.0258789 6.35156V14.3516C0.0258789 15.4546 0.922879 16.3516 2.02588 16.3516H3.02588ZM2.02588 6.35156H14.0259V14.3516H8.74888L5.02588 16.5856V14.3516H2.02588V6.35156Z" fill="black"/>
										<path d="M18.0259 0.351562H6.02588C4.92288 0.351562 4.02588 1.24856 4.02588 2.35156H16.0259C17.1289 2.35156 18.0259 3.24856 18.0259 4.35156V12.3516C19.1289 12.3516 20.0259 11.4546 20.0259 10.3516V2.35156C20.0259 1.24856 19.1289 0.351562 18.0259 0.351562Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.0258789 0.351562V20.3516H16.0259V5.42849L15.7859 5.19772L10.9859 0.582332L10.7459 0.351562H0.0258789ZM1.62588 1.89002H9.62588V6.50541H14.4259V18.8131H1.62588V1.89002ZM11.2259 2.96695L13.3059 4.96695H11.2259V2.96695ZM7.22588 8.04387V11.89H4.82588L8.02588 14.9669L11.2259 11.89H8.82588V8.04387H7.22588ZM4.82588 15.7362V17.2746H11.2259V15.7362H4.82588Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Accept" aria-label="Accept" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.09766 9.69937C4.12034 9.43545 4.23016 9.20178 4.39182 8.98899C4.9607 8.239 6.23564 7.89515 7.12785 8.44855C7.65316 8.7744 8.07442 9.19386 8.42511 9.69001C8.7164 10.1023 8.97959 10.535 9.26295 10.9704C9.46062 10.6888 9.66009 10.3993 9.8646 10.1134C11.622 7.6586 13.5512 5.35391 15.7889 3.3225C17.1618 2.07636 18.737 1.15067 20.4317 0.418683C20.7245 0.291945 20.9689 0.341272 21.2203 0.595829C21.105 0.703484 20.9905 0.810059 20.8771 0.917714C19.397 2.32011 17.9488 3.75492 16.6343 5.31502C15.8818 6.20759 15.1844 7.14661 14.4668 8.06834C13.0215 9.92404 11.9399 12.012 10.7118 14.0063C10.2376 14.7765 9.76811 15.5495 9.2932 16.3189C9.10453 16.625 8.8561 16.6206 8.66671 16.3081C8.05246 15.2935 7.56819 14.2155 7.11057 13.1231C6.72819 12.2114 6.29901 11.3218 5.75353 10.4933C5.48385 10.0835 5.16593 9.74618 4.64349 9.70153C4.46743 9.68677 4.28776 9.69937 4.09766 9.69937Z" fill="black"/>
										<path d="M17.3886 6.52771L15.9488 7.97223C16.3647 8.89324 16.5954 9.91615 16.5954 10.9931C16.5954 15.049 13.319 18.3367 9.27668 18.3367C5.23438 18.3367 1.95792 15.049 1.95792 10.9931C1.95792 6.93708 5.23438 3.64945 9.27668 3.64945C10.2873 3.64945 11.2494 3.8554 12.1243 4.22662L13.5746 2.77129C12.2907 2.09403 10.8278 1.71094 9.27668 1.71094C4.16755 1.71094 0.0258789 5.86665 0.0258789 10.9931C0.0258789 16.1195 4.16755 20.2748 9.27668 20.2748C14.3858 20.2748 18.5275 16.1191 18.5275 10.9927C18.5275 9.37463 18.1145 7.85233 17.3886 6.52771Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Decline" aria-label="Decline" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19.5352 8.09924C20.7704 13.4734 17.4618 18.843 12.1459 20.0905C6.82965 21.3381 1.51928 17.9938 0.284427 12.6208C-0.950424 7.24779 2.35671 1.87888 7.67296 0.63025C10.3689 -0.00246286 13.4814 0.41076 15.6374 2.19318L14.1234 3.72961C13.9049 3.58739 13.6801 3.45637 13.4487 3.33692C13.2169 3.21747 12.9804 3.10996 12.7383 3.0144C12.4959 2.91921 12.2498 2.83597 11.9993 2.76542C11.7492 2.69487 11.4958 2.63739 11.2398 2.59259C10.9838 2.5478 10.7259 2.51607 10.4666 2.4974C10.2077 2.47837 9.948 2.47314 9.68832 2.48061C9.42864 2.48807 9.1697 2.50898 8.91185 2.54257C8.65438 2.57654 8.39874 2.6232 8.14567 2.6833C3.95041 3.66802 1.3404 7.90364 2.31484 12.1438C3.28928 16.3839 7.4794 19.023 11.675 18.0375C15.8707 17.052 18.4792 12.8183 17.5059 8.5763C17.3549 7.91708 16.9112 6.80396 16.6166 6.23097L18.066 4.71507C18.4131 5.22796 18.7102 5.76885 18.957 6.33773C19.2042 6.90661 19.3967 7.49415 19.5352 8.09924ZM12.0658 10.0638L20.0259 1.9274C19.9697 1.87066 19.9109 1.81654 19.8492 1.76577C19.7879 1.71463 19.724 1.66685 19.6578 1.62243C19.5917 1.57764 19.5234 1.53658 19.4533 1.49888C19.3831 1.4608 19.3115 1.42683 19.2377 1.39585C19.1642 1.36524 19.0896 1.33837 19.0132 1.31522C18.9372 1.29208 18.8601 1.27267 18.7822 1.25736C18.704 1.24169 18.6254 1.23011 18.5464 1.22265C18.4671 1.21481 18.3877 1.21108 18.308 1.21145C18.2287 1.21145 18.1494 1.21593 18.0704 1.22377C17.9911 1.23198 17.9125 1.2443 17.8346 1.25998C17.7567 1.27603 17.6796 1.29581 17.6036 1.3197C17.5279 1.34322 17.453 1.37047 17.3799 1.40182C17.3064 1.43281 17.2348 1.46752 17.1646 1.5056C17.0949 1.54404 17.0269 1.58548 16.9612 1.63064C16.895 1.67544 16.8315 1.72359 16.7705 1.7751C16.7092 1.82662 16.6508 1.88074 16.5946 1.93786L10.3458 8.33366L8.3352 6.30115C8.279 6.24441 8.21987 6.19028 8.15853 6.13914C8.09682 6.08837 8.03291 6.04022 7.9668 5.9958C7.90032 5.95101 7.832 5.90957 7.76185 5.87187C7.69169 5.8338 7.6197 5.79946 7.54625 5.76847C7.47242 5.73786 7.39749 5.71061 7.32146 5.68747C7.24506 5.66395 7.16793 5.64454 7.0897 5.62887C7.01183 5.61319 6.93286 5.60124 6.85389 5.5934C6.77456 5.58556 6.69485 5.58146 6.61515 5.58146C6.53581 5.58146 6.45611 5.58556 6.37677 5.5934C6.29781 5.60124 6.21884 5.61319 6.14097 5.62887C6.06274 5.64454 5.9856 5.66395 5.9092 5.68747C5.83317 5.71061 5.75825 5.73786 5.68442 5.76847C5.61096 5.79946 5.53897 5.8338 5.46882 5.87187C5.39866 5.90957 5.33035 5.95101 5.26386 5.9958C5.19775 6.04022 5.13384 6.08837 5.07214 6.13914C5.0108 6.19028 4.95166 6.24441 4.89547 6.30115L8.6272 10.0739L4.89547 13.9071C4.95166 13.9639 5.01043 14.018 5.07177 14.0688C5.13347 14.1199 5.19738 14.1677 5.2635 14.2125C5.32961 14.2569 5.39756 14.2983 5.46771 14.336C5.53824 14.3737 5.60986 14.4081 5.68332 14.4387C5.75714 14.4693 5.83171 14.4962 5.9081 14.5197C5.98413 14.5428 6.06127 14.5622 6.13913 14.5775C6.21737 14.5932 6.29597 14.6048 6.37494 14.6123C6.45427 14.6201 6.53361 14.6238 6.61295 14.6235C6.69265 14.6235 6.77198 14.6194 6.85095 14.6111C6.93029 14.6029 7.00889 14.591 7.08676 14.5749C7.16462 14.5589 7.24176 14.5391 7.31779 14.5156C7.39382 14.4921 7.46838 14.4644 7.54184 14.4335C7.6153 14.4025 7.68692 14.3678 7.75671 14.3293C7.82686 14.2912 7.89481 14.2498 7.96056 14.2046C8.02667 14.1598 8.09021 14.1113 8.15118 14.0602C8.21252 14.0087 8.27092 13.9545 8.32712 13.8974L10.3572 11.8224L12.403 13.8907C12.4592 13.9474 12.5183 14.0016 12.5797 14.0523C12.6414 14.1035 12.7049 14.1513 12.7714 14.1961C12.8375 14.2405 12.9058 14.2819 12.976 14.3196C13.0461 14.3577 13.1181 14.392 13.1916 14.4226C13.2651 14.4532 13.34 14.4805 13.416 14.5036C13.4924 14.5268 13.5695 14.5462 13.6474 14.5619C13.7256 14.5775 13.8042 14.5891 13.8836 14.5966C13.9625 14.6044 14.0423 14.6082 14.1216 14.6082C14.2013 14.6078 14.2806 14.6037 14.36 14.5958C14.4389 14.5876 14.5175 14.5757 14.5954 14.5596C14.6736 14.544 14.7508 14.5242 14.8268 14.5003C14.9028 14.4768 14.9774 14.4495 15.0508 14.4185C15.1243 14.3875 15.1963 14.3528 15.2661 14.3148C15.3362 14.2763 15.4042 14.2349 15.4703 14.1901C15.536 14.1449 15.6 14.0968 15.6613 14.0456C15.7226 13.9941 15.781 13.94 15.8372 13.8829L12.0658 10.0638Z" fill="black"/>
									  </svg>
									</a>
								  </div>
								</td>
							  </tr>
							  <tr role="row" class="even">
								<td class="text-center align-middle">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td class="align-middle">
								  <div class="d-flex gap-2 align-items-center">
									<div>
									  <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
									</div>
									<div class="pt-2">
									  <div class="font-family-secondary leading-none">Dori Griffiths</div>
									  <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
									</div>
								  </div>
								</td>
								<td class="align-middle text-center">
								  10
								</td>
								<td class="align-middle">
								  <div>05/25/2022</div>
								  <div>7:15 PM</div>
								</td>
								<td class="align-middle">
								  <div>08/21/2022</div>
								  <div>9:45 AM</div>
								</td>
								<td class="text-center align-middle">
								  <a href="#">5</a>
								</td>
								<td class="align-middle">
								  <div class="d-flex align-items-center gap-1">
									<svg class="fill-success" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
									Approved
								  </div>
								</td>
								<td class="align-middle">
								  <div class="d-flex actions justify-content-center">
									<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.3116 17.4978C15.1006 17.4978 15.7402 16.8582 15.7402 16.0692C15.7402 15.2802 15.1006 14.6406 14.3116 14.6406C13.5226 14.6406 12.8831 15.2802 12.8831 16.0692C12.8831 16.8582 13.5226 17.4978 14.3116 17.4978Z" fill="black"/>
										<path d="M19.8665 15.6926C19.4251 14.5682 18.6635 13.5981 17.6761 12.9024C16.6886 12.2068 15.5188 11.8161 14.3115 11.779C13.1041 11.8161 11.9343 12.2068 10.9468 12.9024C9.95938 13.5981 9.19779 14.5682 8.75645 15.6926L8.59717 16.0647L8.75645 16.4369C9.19779 17.5612 9.95938 18.5314 10.9468 19.227C11.9343 19.9227 13.1041 20.3133 14.3115 20.3504C15.5188 20.3133 16.6886 19.9227 17.6761 19.227C18.6635 18.5314 19.4251 17.5612 19.8665 16.4369L20.0257 16.0647L19.8665 15.6926ZM14.3115 18.9219C13.7464 18.9219 13.194 18.7543 12.7241 18.4404C12.2543 18.1264 11.888 17.6802 11.6718 17.1581C11.4555 16.636 11.399 16.0616 11.5092 15.5073C11.6195 14.9531 11.8916 14.444 12.2911 14.0444C12.6907 13.6448 13.1998 13.3727 13.7541 13.2625C14.3083 13.1522 14.8828 13.2088 15.4048 13.4251C15.9269 13.6413 16.3731 14.0075 16.6871 14.4774C17.001 14.9472 17.1686 15.4996 17.1686 16.0647C17.1677 16.8222 16.8663 17.5484 16.3307 18.084C15.7951 18.6196 15.0689 18.9209 14.3115 18.9219ZM3.59717 11.0647H7.1686V12.4933H3.59717V11.0647ZM3.59717 7.4933H12.1686V8.92188H3.59717V7.4933ZM3.59717 3.92188H12.1686V5.35045H3.59717V3.92188Z" fill="black"/>
										<path d="M14.3116 0.351562H1.45445C1.07592 0.352693 0.713211 0.503566 0.445547 0.77123C0.177882 1.03889 0.0270094 1.4016 0.0258789 1.78013V18.923C0.0270094 19.3015 0.177882 19.6642 0.445547 19.9319C0.713211 20.1996 1.07592 20.3504 1.45445 20.3516H7.16874V18.923H1.45445V1.78013H14.3116V9.63728H15.7402V1.78013C15.739 1.4016 15.5882 1.03889 15.3205 0.77123C15.0528 0.503566 14.6901 0.352693 14.3116 0.351562Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3.02588 16.3516V20.1176L4.54088 19.2086L9.30288 16.3516H14.0259C15.1289 16.3516 16.0259 15.4546 16.0259 14.3516V6.35156C16.0259 5.24856 15.1289 4.35156 14.0259 4.35156H2.02588C0.922879 4.35156 0.0258789 5.24856 0.0258789 6.35156V14.3516C0.0258789 15.4546 0.922879 16.3516 2.02588 16.3516H3.02588ZM2.02588 6.35156H14.0259V14.3516H8.74888L5.02588 16.5856V14.3516H2.02588V6.35156Z" fill="black"/>
										<path d="M18.0259 0.351562H6.02588C4.92288 0.351562 4.02588 1.24856 4.02588 2.35156H16.0259C17.1289 2.35156 18.0259 3.24856 18.0259 4.35156V12.3516C19.1289 12.3516 20.0259 11.4546 20.0259 10.3516V2.35156C20.0259 1.24856 19.1289 0.351562 18.0259 0.351562Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.0258789 0.351562V20.3516H16.0259V5.42849L15.7859 5.19772L10.9859 0.582332L10.7459 0.351562H0.0258789ZM1.62588 1.89002H9.62588V6.50541H14.4259V18.8131H1.62588V1.89002ZM11.2259 2.96695L13.3059 4.96695H11.2259V2.96695ZM7.22588 8.04387V11.89H4.82588L8.02588 14.9669L11.2259 11.89H8.82588V8.04387H7.22588ZM4.82588 15.7362V17.2746H11.2259V15.7362H4.82588Z" fill="black"/>
									  </svg>
									</a>
								  </div>
								</td>
							  </tr>
							  <tr role="row" class="odd">
								<td class="text-center align-middle">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td class="align-middle">
								  <div class="d-flex gap-2 align-items-center">
									<div>
									  <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
									</div>
									<div class="pt-2">
									  <div class="font-family-secondary leading-none">Dori Griffiths</div>
									  <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
									</div>
								  </div>
								</td>
								<td class="align-middle text-center">
								  10
								</td>
								<td class="align-middle">
								  <div>05/25/2022</div>
								  <div>7:15 PM</div>
								</td>
								<td class="align-middle">
								  <div>08/21/2022</div>
								  <div>9:45 AM</div>
								</td>
								<td class="text-center align-middle">
								  <a href="#">5</a>
								</td>
								<td class="align-middle">
								  <div class="d-flex align-items-center gap-1">
									<svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
									Pending
								  </div>
								</td>
								<td class="align-middle">
								  <div class="d-flex actions justify-content-center">
									<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.3116 17.4978C15.1006 17.4978 15.7402 16.8582 15.7402 16.0692C15.7402 15.2802 15.1006 14.6406 14.3116 14.6406C13.5226 14.6406 12.8831 15.2802 12.8831 16.0692C12.8831 16.8582 13.5226 17.4978 14.3116 17.4978Z" fill="black"/>
										<path d="M19.8665 15.6926C19.4251 14.5682 18.6635 13.5981 17.6761 12.9024C16.6886 12.2068 15.5188 11.8161 14.3115 11.779C13.1041 11.8161 11.9343 12.2068 10.9468 12.9024C9.95938 13.5981 9.19779 14.5682 8.75645 15.6926L8.59717 16.0647L8.75645 16.4369C9.19779 17.5612 9.95938 18.5314 10.9468 19.227C11.9343 19.9227 13.1041 20.3133 14.3115 20.3504C15.5188 20.3133 16.6886 19.9227 17.6761 19.227C18.6635 18.5314 19.4251 17.5612 19.8665 16.4369L20.0257 16.0647L19.8665 15.6926ZM14.3115 18.9219C13.7464 18.9219 13.194 18.7543 12.7241 18.4404C12.2543 18.1264 11.888 17.6802 11.6718 17.1581C11.4555 16.636 11.399 16.0616 11.5092 15.5073C11.6195 14.9531 11.8916 14.444 12.2911 14.0444C12.6907 13.6448 13.1998 13.3727 13.7541 13.2625C14.3083 13.1522 14.8828 13.2088 15.4048 13.4251C15.9269 13.6413 16.3731 14.0075 16.6871 14.4774C17.001 14.9472 17.1686 15.4996 17.1686 16.0647C17.1677 16.8222 16.8663 17.5484 16.3307 18.084C15.7951 18.6196 15.0689 18.9209 14.3115 18.9219ZM3.59717 11.0647H7.1686V12.4933H3.59717V11.0647ZM3.59717 7.4933H12.1686V8.92188H3.59717V7.4933ZM3.59717 3.92188H12.1686V5.35045H3.59717V3.92188Z" fill="black"/>
										<path d="M14.3116 0.351562H1.45445C1.07592 0.352693 0.713211 0.503566 0.445547 0.77123C0.177882 1.03889 0.0270094 1.4016 0.0258789 1.78013V18.923C0.0270094 19.3015 0.177882 19.6642 0.445547 19.9319C0.713211 20.1996 1.07592 20.3504 1.45445 20.3516H7.16874V18.923H1.45445V1.78013H14.3116V9.63728H15.7402V1.78013C15.739 1.4016 15.5882 1.03889 15.3205 0.77123C15.0528 0.503566 14.6901 0.352693 14.3116 0.351562Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3.02588 16.3516V20.1176L4.54088 19.2086L9.30288 16.3516H14.0259C15.1289 16.3516 16.0259 15.4546 16.0259 14.3516V6.35156C16.0259 5.24856 15.1289 4.35156 14.0259 4.35156H2.02588C0.922879 4.35156 0.0258789 5.24856 0.0258789 6.35156V14.3516C0.0258789 15.4546 0.922879 16.3516 2.02588 16.3516H3.02588ZM2.02588 6.35156H14.0259V14.3516H8.74888L5.02588 16.5856V14.3516H2.02588V6.35156Z" fill="black"/>
										<path d="M18.0259 0.351562H6.02588C4.92288 0.351562 4.02588 1.24856 4.02588 2.35156H16.0259C17.1289 2.35156 18.0259 3.24856 18.0259 4.35156V12.3516C19.1289 12.3516 20.0259 11.4546 20.0259 10.3516V2.35156C20.0259 1.24856 19.1289 0.351562 18.0259 0.351562Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.0258789 0.351562V20.3516H16.0259V5.42849L15.7859 5.19772L10.9859 0.582332L10.7459 0.351562H0.0258789ZM1.62588 1.89002H9.62588V6.50541H14.4259V18.8131H1.62588V1.89002ZM11.2259 2.96695L13.3059 4.96695H11.2259V2.96695ZM7.22588 8.04387V11.89H4.82588L8.02588 14.9669L11.2259 11.89H8.82588V8.04387H7.22588ZM4.82588 15.7362V17.2746H11.2259V15.7362H4.82588Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Accept" aria-label="Accept" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.09766 9.69937C4.12034 9.43545 4.23016 9.20178 4.39182 8.98899C4.9607 8.239 6.23564 7.89515 7.12785 8.44855C7.65316 8.7744 8.07442 9.19386 8.42511 9.69001C8.7164 10.1023 8.97959 10.535 9.26295 10.9704C9.46062 10.6888 9.66009 10.3993 9.8646 10.1134C11.622 7.6586 13.5512 5.35391 15.7889 3.3225C17.1618 2.07636 18.737 1.15067 20.4317 0.418683C20.7245 0.291945 20.9689 0.341272 21.2203 0.595829C21.105 0.703484 20.9905 0.810059 20.8771 0.917714C19.397 2.32011 17.9488 3.75492 16.6343 5.31502C15.8818 6.20759 15.1844 7.14661 14.4668 8.06834C13.0215 9.92404 11.9399 12.012 10.7118 14.0063C10.2376 14.7765 9.76811 15.5495 9.2932 16.3189C9.10453 16.625 8.8561 16.6206 8.66671 16.3081C8.05246 15.2935 7.56819 14.2155 7.11057 13.1231C6.72819 12.2114 6.29901 11.3218 5.75353 10.4933C5.48385 10.0835 5.16593 9.74618 4.64349 9.70153C4.46743 9.68677 4.28776 9.69937 4.09766 9.69937Z" fill="black"/>
										<path d="M17.3886 6.52771L15.9488 7.97223C16.3647 8.89324 16.5954 9.91615 16.5954 10.9931C16.5954 15.049 13.319 18.3367 9.27668 18.3367C5.23438 18.3367 1.95792 15.049 1.95792 10.9931C1.95792 6.93708 5.23438 3.64945 9.27668 3.64945C10.2873 3.64945 11.2494 3.8554 12.1243 4.22662L13.5746 2.77129C12.2907 2.09403 10.8278 1.71094 9.27668 1.71094C4.16755 1.71094 0.0258789 5.86665 0.0258789 10.9931C0.0258789 16.1195 4.16755 20.2748 9.27668 20.2748C14.3858 20.2748 18.5275 16.1191 18.5275 10.9927C18.5275 9.37463 18.1145 7.85233 17.3886 6.52771Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Decline" aria-label="Decline" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19.5352 8.09924C20.7704 13.4734 17.4618 18.843 12.1459 20.0905C6.82965 21.3381 1.51928 17.9938 0.284427 12.6208C-0.950424 7.24779 2.35671 1.87888 7.67296 0.63025C10.3689 -0.00246286 13.4814 0.41076 15.6374 2.19318L14.1234 3.72961C13.9049 3.58739 13.6801 3.45637 13.4487 3.33692C13.2169 3.21747 12.9804 3.10996 12.7383 3.0144C12.4959 2.91921 12.2498 2.83597 11.9993 2.76542C11.7492 2.69487 11.4958 2.63739 11.2398 2.59259C10.9838 2.5478 10.7259 2.51607 10.4666 2.4974C10.2077 2.47837 9.948 2.47314 9.68832 2.48061C9.42864 2.48807 9.1697 2.50898 8.91185 2.54257C8.65438 2.57654 8.39874 2.6232 8.14567 2.6833C3.95041 3.66802 1.3404 7.90364 2.31484 12.1438C3.28928 16.3839 7.4794 19.023 11.675 18.0375C15.8707 17.052 18.4792 12.8183 17.5059 8.5763C17.3549 7.91708 16.9112 6.80396 16.6166 6.23097L18.066 4.71507C18.4131 5.22796 18.7102 5.76885 18.957 6.33773C19.2042 6.90661 19.3967 7.49415 19.5352 8.09924ZM12.0658 10.0638L20.0259 1.9274C19.9697 1.87066 19.9109 1.81654 19.8492 1.76577C19.7879 1.71463 19.724 1.66685 19.6578 1.62243C19.5917 1.57764 19.5234 1.53658 19.4533 1.49888C19.3831 1.4608 19.3115 1.42683 19.2377 1.39585C19.1642 1.36524 19.0896 1.33837 19.0132 1.31522C18.9372 1.29208 18.8601 1.27267 18.7822 1.25736C18.704 1.24169 18.6254 1.23011 18.5464 1.22265C18.4671 1.21481 18.3877 1.21108 18.308 1.21145C18.2287 1.21145 18.1494 1.21593 18.0704 1.22377C17.9911 1.23198 17.9125 1.2443 17.8346 1.25998C17.7567 1.27603 17.6796 1.29581 17.6036 1.3197C17.5279 1.34322 17.453 1.37047 17.3799 1.40182C17.3064 1.43281 17.2348 1.46752 17.1646 1.5056C17.0949 1.54404 17.0269 1.58548 16.9612 1.63064C16.895 1.67544 16.8315 1.72359 16.7705 1.7751C16.7092 1.82662 16.6508 1.88074 16.5946 1.93786L10.3458 8.33366L8.3352 6.30115C8.279 6.24441 8.21987 6.19028 8.15853 6.13914C8.09682 6.08837 8.03291 6.04022 7.9668 5.9958C7.90032 5.95101 7.832 5.90957 7.76185 5.87187C7.69169 5.8338 7.6197 5.79946 7.54625 5.76847C7.47242 5.73786 7.39749 5.71061 7.32146 5.68747C7.24506 5.66395 7.16793 5.64454 7.0897 5.62887C7.01183 5.61319 6.93286 5.60124 6.85389 5.5934C6.77456 5.58556 6.69485 5.58146 6.61515 5.58146C6.53581 5.58146 6.45611 5.58556 6.37677 5.5934C6.29781 5.60124 6.21884 5.61319 6.14097 5.62887C6.06274 5.64454 5.9856 5.66395 5.9092 5.68747C5.83317 5.71061 5.75825 5.73786 5.68442 5.76847C5.61096 5.79946 5.53897 5.8338 5.46882 5.87187C5.39866 5.90957 5.33035 5.95101 5.26386 5.9958C5.19775 6.04022 5.13384 6.08837 5.07214 6.13914C5.0108 6.19028 4.95166 6.24441 4.89547 6.30115L8.6272 10.0739L4.89547 13.9071C4.95166 13.9639 5.01043 14.018 5.07177 14.0688C5.13347 14.1199 5.19738 14.1677 5.2635 14.2125C5.32961 14.2569 5.39756 14.2983 5.46771 14.336C5.53824 14.3737 5.60986 14.4081 5.68332 14.4387C5.75714 14.4693 5.83171 14.4962 5.9081 14.5197C5.98413 14.5428 6.06127 14.5622 6.13913 14.5775C6.21737 14.5932 6.29597 14.6048 6.37494 14.6123C6.45427 14.6201 6.53361 14.6238 6.61295 14.6235C6.69265 14.6235 6.77198 14.6194 6.85095 14.6111C6.93029 14.6029 7.00889 14.591 7.08676 14.5749C7.16462 14.5589 7.24176 14.5391 7.31779 14.5156C7.39382 14.4921 7.46838 14.4644 7.54184 14.4335C7.6153 14.4025 7.68692 14.3678 7.75671 14.3293C7.82686 14.2912 7.89481 14.2498 7.96056 14.2046C8.02667 14.1598 8.09021 14.1113 8.15118 14.0602C8.21252 14.0087 8.27092 13.9545 8.32712 13.8974L10.3572 11.8224L12.403 13.8907C12.4592 13.9474 12.5183 14.0016 12.5797 14.0523C12.6414 14.1035 12.7049 14.1513 12.7714 14.1961C12.8375 14.2405 12.9058 14.2819 12.976 14.3196C13.0461 14.3577 13.1181 14.392 13.1916 14.4226C13.2651 14.4532 13.34 14.4805 13.416 14.5036C13.4924 14.5268 13.5695 14.5462 13.6474 14.5619C13.7256 14.5775 13.8042 14.5891 13.8836 14.5966C13.9625 14.6044 14.0423 14.6082 14.1216 14.6082C14.2013 14.6078 14.2806 14.6037 14.36 14.5958C14.4389 14.5876 14.5175 14.5757 14.5954 14.5596C14.6736 14.544 14.7508 14.5242 14.8268 14.5003C14.9028 14.4768 14.9774 14.4495 15.0508 14.4185C15.1243 14.3875 15.1963 14.3528 15.2661 14.3148C15.3362 14.2763 15.4042 14.2349 15.4703 14.1901C15.536 14.1449 15.6 14.0968 15.6613 14.0456C15.7226 13.9941 15.781 13.94 15.8372 13.8829L12.0658 10.0638Z" fill="black"/>
									  </svg>
									</a>
								  </div>
								</td>
							  </tr>
							  <tr role="row" class="even">
								<td class="text-center align-middle">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td class="align-middle">
								  <div class="d-flex gap-2 align-items-center">
									<div>
									  <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
									</div>
									<div class="pt-2">
									  <div class="font-family-secondary leading-none">Dori Griffiths</div>
									  <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
									</div>
								  </div>
								</td>
								<td class="align-middle text-center">
								  10
								</td>
								<td class="align-middle">
								  <div>05/25/2022</div>
								  <div>7:15 PM</div>
								</td>
								<td class="align-middle">
								  <div>08/21/2022</div>
								  <div>9:45 AM</div>
								</td>
								<td class="text-center align-middle">
								  <a href="#">5</a>
								</td>
								<td class="align-middle">
								  <div class="d-flex align-items-center gap-1">
									<svg class="fill-success" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
									Approved
								  </div>
								</td>
								<td class="align-middle">
								  <div class="d-flex actions justify-content-center">
									<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.3116 17.4978C15.1006 17.4978 15.7402 16.8582 15.7402 16.0692C15.7402 15.2802 15.1006 14.6406 14.3116 14.6406C13.5226 14.6406 12.8831 15.2802 12.8831 16.0692C12.8831 16.8582 13.5226 17.4978 14.3116 17.4978Z" fill="black"/>
										<path d="M19.8665 15.6926C19.4251 14.5682 18.6635 13.5981 17.6761 12.9024C16.6886 12.2068 15.5188 11.8161 14.3115 11.779C13.1041 11.8161 11.9343 12.2068 10.9468 12.9024C9.95938 13.5981 9.19779 14.5682 8.75645 15.6926L8.59717 16.0647L8.75645 16.4369C9.19779 17.5612 9.95938 18.5314 10.9468 19.227C11.9343 19.9227 13.1041 20.3133 14.3115 20.3504C15.5188 20.3133 16.6886 19.9227 17.6761 19.227C18.6635 18.5314 19.4251 17.5612 19.8665 16.4369L20.0257 16.0647L19.8665 15.6926ZM14.3115 18.9219C13.7464 18.9219 13.194 18.7543 12.7241 18.4404C12.2543 18.1264 11.888 17.6802 11.6718 17.1581C11.4555 16.636 11.399 16.0616 11.5092 15.5073C11.6195 14.9531 11.8916 14.444 12.2911 14.0444C12.6907 13.6448 13.1998 13.3727 13.7541 13.2625C14.3083 13.1522 14.8828 13.2088 15.4048 13.4251C15.9269 13.6413 16.3731 14.0075 16.6871 14.4774C17.001 14.9472 17.1686 15.4996 17.1686 16.0647C17.1677 16.8222 16.8663 17.5484 16.3307 18.084C15.7951 18.6196 15.0689 18.9209 14.3115 18.9219ZM3.59717 11.0647H7.1686V12.4933H3.59717V11.0647ZM3.59717 7.4933H12.1686V8.92188H3.59717V7.4933ZM3.59717 3.92188H12.1686V5.35045H3.59717V3.92188Z" fill="black"/>
										<path d="M14.3116 0.351562H1.45445C1.07592 0.352693 0.713211 0.503566 0.445547 0.77123C0.177882 1.03889 0.0270094 1.4016 0.0258789 1.78013V18.923C0.0270094 19.3015 0.177882 19.6642 0.445547 19.9319C0.713211 20.1996 1.07592 20.3504 1.45445 20.3516H7.16874V18.923H1.45445V1.78013H14.3116V9.63728H15.7402V1.78013C15.739 1.4016 15.5882 1.03889 15.3205 0.77123C15.0528 0.503566 14.6901 0.352693 14.3116 0.351562Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3.02588 16.3516V20.1176L4.54088 19.2086L9.30288 16.3516H14.0259C15.1289 16.3516 16.0259 15.4546 16.0259 14.3516V6.35156C16.0259 5.24856 15.1289 4.35156 14.0259 4.35156H2.02588C0.922879 4.35156 0.0258789 5.24856 0.0258789 6.35156V14.3516C0.0258789 15.4546 0.922879 16.3516 2.02588 16.3516H3.02588ZM2.02588 6.35156H14.0259V14.3516H8.74888L5.02588 16.5856V14.3516H2.02588V6.35156Z" fill="black"/>
										<path d="M18.0259 0.351562H6.02588C4.92288 0.351562 4.02588 1.24856 4.02588 2.35156H16.0259C17.1289 2.35156 18.0259 3.24856 18.0259 4.35156V12.3516C19.1289 12.3516 20.0259 11.4546 20.0259 10.3516V2.35156C20.0259 1.24856 19.1289 0.351562 18.0259 0.351562Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.0258789 0.351562V20.3516H16.0259V5.42849L15.7859 5.19772L10.9859 0.582332L10.7459 0.351562H0.0258789ZM1.62588 1.89002H9.62588V6.50541H14.4259V18.8131H1.62588V1.89002ZM11.2259 2.96695L13.3059 4.96695H11.2259V2.96695ZM7.22588 8.04387V11.89H4.82588L8.02588 14.9669L11.2259 11.89H8.82588V8.04387H7.22588ZM4.82588 15.7362V17.2746H11.2259V15.7362H4.82588Z" fill="black"/>
									  </svg>
									</a>
								  </div>
								</td>
							  </tr>
							  <tr role="row" class="odd">
								<td class="text-center align-middle">
								  <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td class="align-middle">
								  <div class="d-flex gap-2 align-items-center">
									<div>
									  <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
									</div>
									<div class="pt-2">
									  <div class="font-family-secondary leading-none">Dori Griffiths</div>
									  <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
									</div>
								  </div>
								</td>
								<td class="align-middle text-center">
								  10
								</td>
								<td class="align-middle">
								  <div>05/25/2022</div>
								  <div>7:15 PM</div>
								</td>
								<td class="align-middle">
								  <div>08/21/2022</div>
								  <div>9:45 AM</div>
								</td>
								<td class="text-center align-middle">
								  <a href="#">5</a>
								</td>
								<td class="align-middle">
								  <div class="d-flex align-items-center gap-1">
									<svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
									Pending
								  </div>
								</td>
								<td class="align-middle">
								  <div class="d-flex actions justify-content-center">
									<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.3116 17.4978C15.1006 17.4978 15.7402 16.8582 15.7402 16.0692C15.7402 15.2802 15.1006 14.6406 14.3116 14.6406C13.5226 14.6406 12.8831 15.2802 12.8831 16.0692C12.8831 16.8582 13.5226 17.4978 14.3116 17.4978Z" fill="black"/>
										<path d="M19.8665 15.6926C19.4251 14.5682 18.6635 13.5981 17.6761 12.9024C16.6886 12.2068 15.5188 11.8161 14.3115 11.779C13.1041 11.8161 11.9343 12.2068 10.9468 12.9024C9.95938 13.5981 9.19779 14.5682 8.75645 15.6926L8.59717 16.0647L8.75645 16.4369C9.19779 17.5612 9.95938 18.5314 10.9468 19.227C11.9343 19.9227 13.1041 20.3133 14.3115 20.3504C15.5188 20.3133 16.6886 19.9227 17.6761 19.227C18.6635 18.5314 19.4251 17.5612 19.8665 16.4369L20.0257 16.0647L19.8665 15.6926ZM14.3115 18.9219C13.7464 18.9219 13.194 18.7543 12.7241 18.4404C12.2543 18.1264 11.888 17.6802 11.6718 17.1581C11.4555 16.636 11.399 16.0616 11.5092 15.5073C11.6195 14.9531 11.8916 14.444 12.2911 14.0444C12.6907 13.6448 13.1998 13.3727 13.7541 13.2625C14.3083 13.1522 14.8828 13.2088 15.4048 13.4251C15.9269 13.6413 16.3731 14.0075 16.6871 14.4774C17.001 14.9472 17.1686 15.4996 17.1686 16.0647C17.1677 16.8222 16.8663 17.5484 16.3307 18.084C15.7951 18.6196 15.0689 18.9209 14.3115 18.9219ZM3.59717 11.0647H7.1686V12.4933H3.59717V11.0647ZM3.59717 7.4933H12.1686V8.92188H3.59717V7.4933ZM3.59717 3.92188H12.1686V5.35045H3.59717V3.92188Z" fill="black"/>
										<path d="M14.3116 0.351562H1.45445C1.07592 0.352693 0.713211 0.503566 0.445547 0.77123C0.177882 1.03889 0.0270094 1.4016 0.0258789 1.78013V18.923C0.0270094 19.3015 0.177882 19.6642 0.445547 19.9319C0.713211 20.1996 1.07592 20.3504 1.45445 20.3516H7.16874V18.923H1.45445V1.78013H14.3116V9.63728H15.7402V1.78013C15.739 1.4016 15.5882 1.03889 15.3205 0.77123C15.0528 0.503566 14.6901 0.352693 14.3116 0.351562Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3.02588 16.3516V20.1176L4.54088 19.2086L9.30288 16.3516H14.0259C15.1289 16.3516 16.0259 15.4546 16.0259 14.3516V6.35156C16.0259 5.24856 15.1289 4.35156 14.0259 4.35156H2.02588C0.922879 4.35156 0.0258789 5.24856 0.0258789 6.35156V14.3516C0.0258789 15.4546 0.922879 16.3516 2.02588 16.3516H3.02588ZM2.02588 6.35156H14.0259V14.3516H8.74888L5.02588 16.5856V14.3516H2.02588V6.35156Z" fill="black"/>
										<path d="M18.0259 0.351562H6.02588C4.92288 0.351562 4.02588 1.24856 4.02588 2.35156H16.0259C17.1289 2.35156 18.0259 3.24856 18.0259 4.35156V12.3516C19.1289 12.3516 20.0259 11.4546 20.0259 10.3516V2.35156C20.0259 1.24856 19.1289 0.351562 18.0259 0.351562Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.0258789 0.351562V20.3516H16.0259V5.42849L15.7859 5.19772L10.9859 0.582332L10.7459 0.351562H0.0258789ZM1.62588 1.89002H9.62588V6.50541H14.4259V18.8131H1.62588V1.89002ZM11.2259 2.96695L13.3059 4.96695H11.2259V2.96695ZM7.22588 8.04387V11.89H4.82588L8.02588 14.9669L11.2259 11.89H8.82588V8.04387H7.22588ZM4.82588 15.7362V17.2746H11.2259V15.7362H4.82588Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Accept" aria-label="Accept" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.09766 9.69937C4.12034 9.43545 4.23016 9.20178 4.39182 8.98899C4.9607 8.239 6.23564 7.89515 7.12785 8.44855C7.65316 8.7744 8.07442 9.19386 8.42511 9.69001C8.7164 10.1023 8.97959 10.535 9.26295 10.9704C9.46062 10.6888 9.66009 10.3993 9.8646 10.1134C11.622 7.6586 13.5512 5.35391 15.7889 3.3225C17.1618 2.07636 18.737 1.15067 20.4317 0.418683C20.7245 0.291945 20.9689 0.341272 21.2203 0.595829C21.105 0.703484 20.9905 0.810059 20.8771 0.917714C19.397 2.32011 17.9488 3.75492 16.6343 5.31502C15.8818 6.20759 15.1844 7.14661 14.4668 8.06834C13.0215 9.92404 11.9399 12.012 10.7118 14.0063C10.2376 14.7765 9.76811 15.5495 9.2932 16.3189C9.10453 16.625 8.8561 16.6206 8.66671 16.3081C8.05246 15.2935 7.56819 14.2155 7.11057 13.1231C6.72819 12.2114 6.29901 11.3218 5.75353 10.4933C5.48385 10.0835 5.16593 9.74618 4.64349 9.70153C4.46743 9.68677 4.28776 9.69937 4.09766 9.69937Z" fill="black"/>
										<path d="M17.3886 6.52771L15.9488 7.97223C16.3647 8.89324 16.5954 9.91615 16.5954 10.9931C16.5954 15.049 13.319 18.3367 9.27668 18.3367C5.23438 18.3367 1.95792 15.049 1.95792 10.9931C1.95792 6.93708 5.23438 3.64945 9.27668 3.64945C10.2873 3.64945 11.2494 3.8554 12.1243 4.22662L13.5746 2.77129C12.2907 2.09403 10.8278 1.71094 9.27668 1.71094C4.16755 1.71094 0.0258789 5.86665 0.0258789 10.9931C0.0258789 16.1195 4.16755 20.2748 9.27668 20.2748C14.3858 20.2748 18.5275 16.1191 18.5275 10.9927C18.5275 9.37463 18.1145 7.85233 17.3886 6.52771Z" fill="black"/>
									  </svg>
									</a>
									<a href="#" title="Decline" aria-label="Decline" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19.5352 8.09924C20.7704 13.4734 17.4618 18.843 12.1459 20.0905C6.82965 21.3381 1.51928 17.9938 0.284427 12.6208C-0.950424 7.24779 2.35671 1.87888 7.67296 0.63025C10.3689 -0.00246286 13.4814 0.41076 15.6374 2.19318L14.1234 3.72961C13.9049 3.58739 13.6801 3.45637 13.4487 3.33692C13.2169 3.21747 12.9804 3.10996 12.7383 3.0144C12.4959 2.91921 12.2498 2.83597 11.9993 2.76542C11.7492 2.69487 11.4958 2.63739 11.2398 2.59259C10.9838 2.5478 10.7259 2.51607 10.4666 2.4974C10.2077 2.47837 9.948 2.47314 9.68832 2.48061C9.42864 2.48807 9.1697 2.50898 8.91185 2.54257C8.65438 2.57654 8.39874 2.6232 8.14567 2.6833C3.95041 3.66802 1.3404 7.90364 2.31484 12.1438C3.28928 16.3839 7.4794 19.023 11.675 18.0375C15.8707 17.052 18.4792 12.8183 17.5059 8.5763C17.3549 7.91708 16.9112 6.80396 16.6166 6.23097L18.066 4.71507C18.4131 5.22796 18.7102 5.76885 18.957 6.33773C19.2042 6.90661 19.3967 7.49415 19.5352 8.09924ZM12.0658 10.0638L20.0259 1.9274C19.9697 1.87066 19.9109 1.81654 19.8492 1.76577C19.7879 1.71463 19.724 1.66685 19.6578 1.62243C19.5917 1.57764 19.5234 1.53658 19.4533 1.49888C19.3831 1.4608 19.3115 1.42683 19.2377 1.39585C19.1642 1.36524 19.0896 1.33837 19.0132 1.31522C18.9372 1.29208 18.8601 1.27267 18.7822 1.25736C18.704 1.24169 18.6254 1.23011 18.5464 1.22265C18.4671 1.21481 18.3877 1.21108 18.308 1.21145C18.2287 1.21145 18.1494 1.21593 18.0704 1.22377C17.9911 1.23198 17.9125 1.2443 17.8346 1.25998C17.7567 1.27603 17.6796 1.29581 17.6036 1.3197C17.5279 1.34322 17.453 1.37047 17.3799 1.40182C17.3064 1.43281 17.2348 1.46752 17.1646 1.5056C17.0949 1.54404 17.0269 1.58548 16.9612 1.63064C16.895 1.67544 16.8315 1.72359 16.7705 1.7751C16.7092 1.82662 16.6508 1.88074 16.5946 1.93786L10.3458 8.33366L8.3352 6.30115C8.279 6.24441 8.21987 6.19028 8.15853 6.13914C8.09682 6.08837 8.03291 6.04022 7.9668 5.9958C7.90032 5.95101 7.832 5.90957 7.76185 5.87187C7.69169 5.8338 7.6197 5.79946 7.54625 5.76847C7.47242 5.73786 7.39749 5.71061 7.32146 5.68747C7.24506 5.66395 7.16793 5.64454 7.0897 5.62887C7.01183 5.61319 6.93286 5.60124 6.85389 5.5934C6.77456 5.58556 6.69485 5.58146 6.61515 5.58146C6.53581 5.58146 6.45611 5.58556 6.37677 5.5934C6.29781 5.60124 6.21884 5.61319 6.14097 5.62887C6.06274 5.64454 5.9856 5.66395 5.9092 5.68747C5.83317 5.71061 5.75825 5.73786 5.68442 5.76847C5.61096 5.79946 5.53897 5.8338 5.46882 5.87187C5.39866 5.90957 5.33035 5.95101 5.26386 5.9958C5.19775 6.04022 5.13384 6.08837 5.07214 6.13914C5.0108 6.19028 4.95166 6.24441 4.89547 6.30115L8.6272 10.0739L4.89547 13.9071C4.95166 13.9639 5.01043 14.018 5.07177 14.0688C5.13347 14.1199 5.19738 14.1677 5.2635 14.2125C5.32961 14.2569 5.39756 14.2983 5.46771 14.336C5.53824 14.3737 5.60986 14.4081 5.68332 14.4387C5.75714 14.4693 5.83171 14.4962 5.9081 14.5197C5.98413 14.5428 6.06127 14.5622 6.13913 14.5775C6.21737 14.5932 6.29597 14.6048 6.37494 14.6123C6.45427 14.6201 6.53361 14.6238 6.61295 14.6235C6.69265 14.6235 6.77198 14.6194 6.85095 14.6111C6.93029 14.6029 7.00889 14.591 7.08676 14.5749C7.16462 14.5589 7.24176 14.5391 7.31779 14.5156C7.39382 14.4921 7.46838 14.4644 7.54184 14.4335C7.6153 14.4025 7.68692 14.3678 7.75671 14.3293C7.82686 14.2912 7.89481 14.2498 7.96056 14.2046C8.02667 14.1598 8.09021 14.1113 8.15118 14.0602C8.21252 14.0087 8.27092 13.9545 8.32712 13.8974L10.3572 11.8224L12.403 13.8907C12.4592 13.9474 12.5183 14.0016 12.5797 14.0523C12.6414 14.1035 12.7049 14.1513 12.7714 14.1961C12.8375 14.2405 12.9058 14.2819 12.976 14.3196C13.0461 14.3577 13.1181 14.392 13.1916 14.4226C13.2651 14.4532 13.34 14.4805 13.416 14.5036C13.4924 14.5268 13.5695 14.5462 13.6474 14.5619C13.7256 14.5775 13.8042 14.5891 13.8836 14.5966C13.9625 14.6044 14.0423 14.6082 14.1216 14.6082C14.2013 14.6078 14.2806 14.6037 14.36 14.5958C14.4389 14.5876 14.5175 14.5757 14.5954 14.5596C14.6736 14.544 14.7508 14.5242 14.8268 14.5003C14.9028 14.4768 14.9774 14.4495 15.0508 14.4185C15.1243 14.3875 15.1963 14.3528 15.2661 14.3148C15.3362 14.2763 15.4042 14.2349 15.4703 14.1901C15.536 14.1449 15.6 14.0968 15.6613 14.0456C15.7226 13.9941 15.781 13.94 15.8372 13.8829L12.0658 10.0638Z" fill="black"/>
									  </svg>
									</a>
								  </div>
								</td>
							  </tr>
							</tbody>
						  </table>
						</div>
					  </div>
					</div>
				  </div>
				  <!-- Hoverable rows end -->
				  <div class="d-flex justify-content-between">
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
				  </div>
				</div><!-- /Assignment Status -->
				<!-- Assignment Log -->
				<div class="mb-4">
				  <h2>Assignment Log</h2>
				  <div class="mb-4">
					<button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					<span>
					  <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M10.001 0.5V8.625C10.001 9.12228 10.1985 9.5992 10.5501 9.95083C10.9018 10.3025 11.3787 10.5 11.876 10.5H20.001V17.6963L18.3847 16.08C18.2686 15.9639 18.1307 15.8719 17.979 15.8091C17.8273 15.7463 17.6647 15.7141 17.5005 15.7141C17.3363 15.7142 17.1738 15.7466 17.0221 15.8095C16.8705 15.8723 16.7327 15.9645 16.6166 16.0806C16.5005 16.1968 16.4085 16.3346 16.3457 16.4863C16.2829 16.638 16.2507 16.8006 16.2507 16.9648C16.2508 17.129 16.2832 17.2916 16.3461 17.4432C16.4089 17.5949 16.5011 17.7327 16.6172 17.8488L18.0185 19.25H12.501C12.1695 19.25 11.8515 19.3817 11.6171 19.6161C11.3827 19.8505 11.251 20.1685 11.251 20.5C11.251 20.8315 11.3827 21.1495 11.6171 21.3839C11.8515 21.6183 12.1695 21.75 12.501 21.75H18.0185L16.6172 23.1513C16.3827 23.3856 16.2508 23.7036 16.2507 24.0352C16.2506 24.3668 16.3822 24.6848 16.6166 24.9194C16.851 25.1539 17.1689 25.2858 17.5005 25.2859C17.8321 25.286 18.1502 25.1544 18.3847 24.92L19.9797 23.3238C19.9011 23.9256 19.6063 24.4783 19.1502 24.8787C18.6941 25.2791 18.1079 25.5 17.501 25.5H2.50098C1.83794 25.5 1.20205 25.2366 0.733209 24.7678C0.264369 24.2989 0.000976563 23.663 0.000976562 23V3C0.000976562 2.33696 0.264369 1.70107 0.733209 1.23223C1.20205 0.763392 1.83794 0.5 2.50098 0.5H10.001ZM20.001 17.6963L21.9197 19.6163C22.1541 19.8507 22.2857 20.1685 22.2857 20.5C22.2857 20.8315 22.1541 21.1493 21.9197 21.3838L20.001 23.3038V17.6963ZM12.501 0.55375C12.9746 0.654194 13.4088 0.889989 13.751 1.2325L19.2685 6.75C19.611 7.09216 19.8468 7.5264 19.9472 8H12.501V0.55375Z"></path>
					  </svg>
					</span>
				  </button>
				  </div>
				  <div class="d-flex justify-content-between mb-2">
					<div class="d-inline-flex align-items-center gap-4">
					  <div class="d-inline-flex align-items-center gap-4">
						<label for="show_records_number" class="form-label-sm mb-0">Show</label>
						<select class="form-select form-select-sm" id="show_records_number">
						  <option>10</option>
						  <option>15</option>
						  <option>20</option>
						  <option>25</option>
						</select>
					  </div>
					</div>
					<div class="d-inline-flex align-items-center gap-4">
					  <label for="search" class="form-label-sm mb-0">Search</label>
					  <input type="search" class="form-control form-control-sm" id="search" name="search" placeholder="Search here" autocomplete="on"/>
					</div>
				  </div>
				  <!-- Hoverable rows start -->
				  <div class="row" id="table-hover-row">
					<div class="col-12">
					  <div class="card">
						<div class="table-responsive">
						  <table id="unassigned_data" class="table table-fs-md table-hover" aria-label="">
							<thead>
							  <tr role="row">
								<th scope="col" class="text-center">#</th>
								<th scope="col">DATE & Time</th>
								<th scope="col">Activity</th>
								<th scope="col">IP Address</th>
							  </tr>
							</thead>
							<tbody>
							  <tr role="row" class="odd">
								<td class="text-center">1</td>
								<td class="">
								  08/21/2022 9:45 AM
								</td>
								<td class="">
								  New booking 101931 created by Admin Admin for customer Testcust Last
								</td>
								<td class="">
								  39.52.108.38
								</td>
							  </tr>
							  <tr role="row" class="even">
								<td class="text-center">1</td>
								<td class="">
								  08/21/2022 9:45 AM
								</td>
								<td class="">
								  New booking 101931 created by Admin Admin for customer Testcust Last
								</td>
								<td class="">
								  39.52.108.38
								</td>
							  </tr>
							  <tr role="row" class="odd">
								<td class="text-center">1</td>
								<td class="">
								  08/21/2022 9:45 AM
								</td>
								<td class="">
								  New booking 101931 created by Admin Admin for customer Testcust Last
								</td>
								<td class="">
								  39.52.108.38
								</td>
							  </tr>
							  <tr role="row" class="even">
								<td class="text-center">1</td>
								<td class="">
								  08/21/2022 9:45 AM
								</td>
								<td class="">
								  New booking 101931 created by Admin Admin for customer Testcust Last
								</td>
								<td class="">
								  39.52.108.38
								</td>
							  </tr>
							  <tr role="row" class="odd">
								<td class="text-center">1</td>
								<td class="">
								  08/21/2022 9:45 AM
								</td>
								<td class="">
								  New booking 101931 created by Admin Admin for customer Testcust Last
								</td>
								<td class="">
								  39.52.108.38
								</td>
							  </tr>
							</tbody>
						  </table>
						</div>
					  </div>
					</div>
				  </div>
				  <!-- Hoverable rows end -->
				  <div class="d-flex justify-content-between">
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
				  </div>
				</div><!-- /Assignment Log -->
				<div class="col-12 justify-content-center form-actions d-flex gap-3">
				  <button type="" class="btn btn-outline-dark rounded">Back</button>
				  <button type="" class="btn btn-primary rounded">Exit</button>
				</div>
			  </div><!-- END: assignment-log-tab -->
			</div>
			<!-- END: Assignment Booking Form -->
		  </div>
		</div>
	  </div>
	  <!-- Modal - Provider Message -->
	  <div class="modal fade" id="ProviderMessageModal" tabindex="-1" aria-labelledby="ProviderMessageModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <h2 class="modal-title fs-5" id="ProviderMessageModalLabel">Provider Message</h2>
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet</p>
			  <div class="d-flex gap-3 justify-content-center mb-5">
				  <a href="#" class="btn btn-sm btn-outline-dark">Deny</a>
				  <a href="#" class="btn btn-sm btn-primary">Approve</a>
			  </div>
			  <div class="d-flex gap-3 justify-content-center mb-3">
				  <a href="#" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">Cancel</a>
				  <a href="#" class="btn rounded btn-primary">Submit</a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- /Modal - Provider Message -->
	  <!-- Modal - Provider Message -->
	  <div class="modal fade" id="ProviderMessageModal" tabindex="-1" aria-labelledby="ProviderMessageModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <h2 class="modal-title fs-5" id="ProviderMessageModalLabel">Provider Message</h2>
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet</p>
			  <div class="d-flex gap-3 justify-content-center mb-5">
				  <a href="#" class="btn btn-sm btn-outline-dark">Deny</a>
				  <a href="#" class="btn btn-sm btn-primary">Approve</a>
			  </div>
			  <div class="d-flex gap-3 justify-content-center mb-3">
				  <a href="#" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">Cancel</a>
				  <a href="#" class="btn rounded btn-primary">Submit</a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- /Modal - Provider Message -->
	  <!-- Modal - Meeting Links -->
	  <div class="modal fade" id="MeetingLinksModal" tabindex="-1" aria-labelledby="MeetingLinksModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <h2 class="modal-title fs-5" id="MeetingLinksModalLabel">Meeting Links</h2>
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			  <h3>Meeting name</h3>
			  <ul class="list-unstyled mb-5 d-flex flex-column gap-3">
				<li>
				  Sign Language Meeting
				</li>
				<li>
				  French Language Meeting
				</li>
				<li class="text-primary selected">
				  Language Translation Meeting
				</li>
				<li>
				  Sign Language Meeting
				</li>
				<li>
				  Sign Language Meeting
				</li>
				<li>
				  Sign Language Meeting
				</li>
			  </ul>
			  <div class="d-flex gap-3 justify-content-center mb-3">
				  <a href="#" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">Cancel</a>
				  <a href="#" class="btn rounded btn-primary">Add</a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- /Modal - Meeting Links -->
	  <!-- Modal - Unassign -->
	  <div class="modal fade" id="UnassignModal" tabindex="-1" aria-labelledby="UnassignModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md">
		  <div class="modal-content">
			<div class="modal-header">
			  <h2 class="modal-title fs-5" id="UnassignModalLabel">Unassign</h2>
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			  <div class="mb-4">
				<label class="form-label">Reason for Unassign</label>
				<textarea class="form-control" rows="5" cols="5"></textarea>
			  </div>
			  <div class="row mb-4">
				<div class="col-lg-6 mb-4">
				  <label class="form-label" for="dateunassign">
					  Date
				  </label>
				  <div class="position-relative">
					  <input type="" name="" class="form-control" placeholder="Select Date" id="dateunassign">
					  <svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
					  </svg>
				  </div>
				</div>
				<div class="col-lg-6">
				  <div class="d-flex">
					<div class="d-flex flex-column justify-content-between">
					  <label class="form-label" for="set_start_time">Time</label>
					  <div class="d-flex gap-2 pt-2">
						<div class="time d-flex align-items-center gap-2">
						  <div class="hours">12</div>
						  <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
						  </svg>
						  <div class="mins">59</div>
						</div>
						<div class="form-check form-switch form-switch-column mb-0">
							<input checked class="form-check-input" type="checkbox" role="switch" id="pm">
							<label class="form-check-label" for="pm">PM</label>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="d-flex gap-3 justify-content-center mb-3">
				  <a href="#" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">Keep Provider</a>
				  <a href="#" class="btn rounded btn-primary">Yes, Unassign Provider</a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- /Modal - Unassign -->
	  @include('panels.booking-details.assign-providers')

	  @include('panels.common.add-documents')
</div>