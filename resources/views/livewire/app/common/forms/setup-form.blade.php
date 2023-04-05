<div>
	<section id="multiple-column-form">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<form class="form" wire:submit.prevent="save">
							<div class="row">
								<div class="col-md-12 mb-md-2">
									<h1>{{ $label }} Setup Value</h1>
									<p>
										Create a unique name to set up a new category by which to group your more specific services.
									</p>
									<div class="row">
										<div class="col-6">
											<div class="mb-4">
												<label class="form-label" for="setupvalue-setup_value_label">
													Value for
													<span class="text-danger">*</span>
												</label>
												{!! App\Helpers\SetupHelper::createDropDown('Setup', 'id', 'setup_value', '', '', 'setup_value', false, 'setupvalue.setup_id', '','setup_id') !!}

												@error('setupvalue.setup_id')
												<span class="d-inline-block invalid-feedback mt-2">
													{{ $message }}
												</span>
												@enderror
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6">
											<div class="mb-4">
												<label class="form-label" for="setupvalue-setup_value_label">
													Setup Value Name
													<span class="text-danger">*</span>
												</label>
												<input
													type="text"
													id="setupvalue-name"
													name="setupvalue-name"
													class="form-control"
													placeholder="Enter Value"
													wire:model.defer="setupvalue.setup_value_label"
												/>
												@error('setupvalue.setup_value_label')
												<span class="d-inline-block invalid-feedback mt-2">
													{{ $message }}
												</span>
												@enderror
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</form>
						<div class="col-6 justify-content-center form-actions d-flex justify-content-between">
							<div>
								<button type="submit" class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList">
									Back
								</button>
							</div>
							<div>
								<button type="submit" class="btn btn-primary rounded mx-2" wire:click.prevent="save">
									Submit
								</button>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>