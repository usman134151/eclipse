<div>
  
            <div class="row mb-4 p-3">
										<div class="col-md-4 border rounded">
											<div class="row">
												<div class="d-flex justify-content-between mb-2 p-2">
													<div class="d-inline-flex align-items-center gap-4">
														<svg  width="47" height="41" class="ms-2"  viewBox="0 0 47 41"  fill="none"
														xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#text"></use>
														</svg>
														<span>Text</span>
													</div>
													<div class="d-inline-flex align-items-center gap-4">
														<div class="form-check form-switch">
															<input class="form-check-input" wire:model.defer="text" type="checkbox" role="switch" id="ToggleText">
															<label class="form-check-label" for="ToggleText">OFF</label>
															<label class="form-check-label" for="ToggleText">ON</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4 border rounded mx-5">
											<div class="row">
												<div class="d-flex justify-content-between mb-2 p-2">
													<div class="d-inline-flex align-items-center gap-4">
														<svg  width="52" height="36"  viewBox="0 0 52 36"  fill="none"
														xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#email"></use>
														</svg>
														<span>Email</span>
													</div>
													<div class="d-inline-flex align-items-center gap-4">
														<div class="form-check form-switch">
															<input wire:model.defer="email" class="form-check-input" type="checkbox" role="switch" id="ToggleEmail">
															<label class="form-check-label" for="ToggleEmail">
																OFF
															</label>
															<label class="form-check-label" for="ToggleEmail">
																ON
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4"></div>
									</div>
									<div class="row mb-5 p-3">
										<div class="col-md-4 mt-2 border rounded">
											<div class="row">
												<div class="d-flex justify-content-between mb-2 p-2">
													<div class="d-inline-flex align-items-center gap-4">
														<svg  width="57" height="41" viewBox="0 0 57 41"  fill="none"
														xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#notification"></use>
														</svg>
														<span>Notification</span>
													</div>
													<div class="d-inline-flex align-items-center gap-4">
														<div class="form-check form-switch">
															<input wire:model.defer="notification" class="form-check-input" type="checkbox" role="switch" id="NotificationToggle">
															<label class="form-check-label" for="NotificationToggle">OFF</label>
															<label class="form-check-label" for="NotificationToggle">ON</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
            
           
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary rounded" wire:click.prevent="save">Save</button>
            </div>
        
</div>
