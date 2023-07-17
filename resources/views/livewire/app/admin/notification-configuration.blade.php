<div>
    <div class="content-header row  mb-3">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h1 class="content-header-title float-start mb-0">{{$title}}</h1>
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
                    <a href="#">
                      Settings
                    </a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="#">
                        Business profile & Settings
                    </a>
                </li>
                  <li class="breadcrumb-item">
                    <span class="text-secondary">{{$title}}</span>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
	@livewire('app.admin.forms.notification-configuration-form', ['type' => $type]) {{-- Show Add / Edit Form --}}
	@else
	<section id="multiple-column-form">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="form">
							<div class="row">
								<!-- ....Select Trigger Option.... -->
								<div class="mb-4">
									<div class="row w-100">
										<div class="col-md-6 mb-md-2">
											<label class="form-label" for="company-column">
												Select Trigger
											</label>
										</div>
										<div class="col-md-6 text-end">
											<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
												<svg aria-label="Add Notification"  width="20" height="21" viewBox="0 0 20 21">
													<use xlink:href="/css/common-icons.svg#plus"></use>
												</svg>
												<span>Add Notification</span>
											</button>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<select class="select2 form-select" aria-label="Select Trigger">
												<option>Select Trigger</option>
												<option>Assignment Scheduled</option>
												<option>Assignment Modified</option>
												<option>Submit Request</option>
												<option>Approved Request</option>
											</select>
										</div>
									</div>
								</div>
								<!-- ........ -->
								<div class="row">
										<div class="mb-4">
											<div class="col-md-12 col-12">
												<label class="form-label" for="company-column">
													Select Role
												</label>
											</div>
											<div class="col-12 d-flex flex-column flex-md-row gap-2">
												<button wire:click="$set('selectedRoleId', 1)" type="submit" class="btn btn-primary rounded btn-sm">
													<svg aria-label="Admin"  width="27" height="27"
                                                      viewBox="0 0 27 27">
                                                     <use xlink:href="/css/common-icons.svg#admin-person-icon"></use>
                                                    </svg>
														
													<span class="mx-1 text-sm">Admin</span>
												</button>
												<button wire:click="$set('selectedRoleId', 2)" type="submit" class="btn btn-primary rounded btn-sm">
													<svg aria-label="Admin"  width="24" height="27"
                                                      viewBox="0 0 24 27">
                                                     <use xlink:href="/css/common-icons.svg#provider-person-icon"></use>
                                                    </svg>
													<span class="mx-1 text-sm">Provider</span>
												</button>
												<button wire:click="$set('selectedRoleId', 5)" type="submit" class="btn btn-primary rounded px-4 py-2 mx-1">
													<svg aria-label="Supervisor" width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M21.0999 25.4686L20.1913 18.3954C19.9893 16.8593 19.0203 15.566 17.6275 14.9397L13.8724 13.2217V12.4539C14.6394 11.6453 15.0834 10.5338 15.0834 9.30099V7.32047C15.6689 7.21967 16.0931 6.73451 16.0931 6.12839C16.0931 5.60291 15.75 5.13791 15.2652 4.97619C15.1644 3.58207 14.3567 2.36939 13.2058 1.64187L12.58 2.99567C12.5195 3.13723 12.3582 3.23847 12.2167 3.23847C12.1562 3.23847 12.0957 3.21831 12.0554 3.19815C11.8534 3.09691 11.7727 2.87471 11.8534 2.65251L12.5195 1.19747C12.6409 0.954669 12.6208 0.671988 12.459 0.42919C12.3179 0.186829 12.0554 0.0654297 11.7727 0.0654297H9.6125C9.32982 0.0654297 9.08746 0.206989 8.92618 0.42919C8.78462 0.671988 8.76446 0.954669 8.88542 1.21763L9.55202 2.67267C9.65283 2.87471 9.55202 3.11707 9.34998 3.21831C9.14794 3.31911 8.90602 3.21831 8.80478 3.01627L8.13862 1.56123C6.9071 2.28875 6.03889 3.54175 5.93809 4.99679C5.45337 5.15807 5.11021 5.60291 5.11021 6.14855C5.11021 6.75467 5.55461 7.23983 6.11997 7.34107V9.32158C6.11997 10.5741 6.58409 11.686 7.3309 12.474V13.2419L3.57585 14.9599C2.16288 15.6063 1.21404 16.9001 1.012 18.4156L0.103473 25.4887C0.0833123 25.7109 0.224434 25.9134 0.446634 25.9336C0.668834 25.9537 0.870874 25.8122 0.911195 25.59L1.81972 18.5168C1.96084 17.4457 2.56652 16.4955 3.47504 15.9297L4.68641 18.86V20.4566H10.198V17.1827L8.15878 14.8586V13.1411C8.82494 13.5653 9.59234 13.8077 10.4399 13.8077H10.7634C11.611 13.8077 12.3784 13.5653 13.0446 13.1411V14.8586L11.0053 17.1827V20.4566H16.2947V18.86L17.5464 15.8289C18.536 16.3947 19.2223 17.3646 19.3635 18.5168L20.272 25.59C20.2921 25.792 20.474 25.9336 20.6761 25.9336C20.6962 25.9336 20.7164 25.9336 20.7365 25.9336C20.9583 25.8928 21.12 25.6908 21.0999 25.4686ZM5.91793 6.12839C5.91793 5.90619 6.09937 5.72431 6.32157 5.72431H14.8616C15.0834 5.72431 15.2652 5.90619 15.2652 6.12839C15.2652 6.35059 15.0834 6.53247 14.8616 6.53247H6.32157C6.09937 6.53247 5.91793 6.35059 5.91793 6.12839ZM10.7634 12.9995H10.4399C8.48178 12.9995 6.94742 11.3827 6.94742 9.32158V7.34107H14.2761V9.30099C14.2559 11.3827 12.7216 12.9995 10.7634 12.9995Z" fill="url(#paint0_linear_2686_98367)"></path>
														<defs>
															<linearGradient id="paint0_linear_2686_98367" x1="10.6016" y1="0.0654297" x2="19.0267" y2="0.0654297" gradientUnits="userSpaceOnUse">
																<stop stop-color="#ffff"></stop>
																<stop offset="1" stop-color="#ffff"></stop>
															</linearGradient>
														</defs>
													</svg>
													<span>Supervisor</span>
												</button>
												<button type="submit" wire:click="$set('selectedRoleId', 9)" class="btn btn-primary rounded btn-sm">
													<svg aria-label="Admin"  width="23" height="26"
                                                       viewBox="0 0 23 26">
                                                    <use xlink:href="/css/common-icons.svg#admin-icon"></use>
                                                </svg>
													<span class="mx-1 text-sm">Billing Manger</span>
												</button>
												<button type="submit" wire:click="$set('selectedRoleId', 6)" class="btn btn-primary rounded btn-sm">
													<svg aria-label="Admin"  width="23" height="26"
                                                       viewBox="0 0 23 26">
                                                    <use xlink:href="/css/common-icons.svg#person-icon"></use>
													</svg>
													<span class="mx-1 text-sm">Requester</span>
												</button>
												<button type="submit" wire:click="$set('selectedRoleId', 7)" class="btn btn-primary rounded btn-sm">
													<svg aria-label="Consumer"  width="23" height="26"
                                                       viewBox="0 0 23 26">
                                                       <use xlink:href="/css/common-icons.svg#comsumer-person-icon"></use>
                                                     </svg>
													<span class="mx-1 text-sm">Service Consumer</span>
												</button>
										
                                                <button type="submit" wire:click="$set('selectedRoleId', 8)" class="btn btn-primary rounded btn-sm">
													<svg  aria-label="Staff" width="36" height="26"
                                                        viewBox="0 0 36 26">
                                                        <use xlink:href="/css/common-icons.svg#two-person-icon"></use>
                                                    </svg>
													<span class="mx-1 text-sm">Participants</span>
												</button>
											</div>
										</div>
									</div>
								<!-- ...... -->
								@livewire('app.common.lists.notification-configuration', ['selectedRoleId' => $selectedRoleId], key(Str::random(10)))
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
</div>
@push('scripts')
<script>
	function updateVal(attrName,val){

		Livewire.emit('updateVal', attrName, val);
	}
</script>
@endpush
