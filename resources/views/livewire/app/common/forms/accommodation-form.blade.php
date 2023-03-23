<div>
	<section id="multiple-column-form">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<form class="form">
							<div class="row">
								<div class="col-md-12 mb-md-2">
									<h1>{{ $label }} Accommodation</h1>
									<p>
										Create a unique name to set up a new category by which to group your more specific services.
									</p>
									<div class="row">
										<div class="col-md-4">
											<div class="mb-4">
												<label class="form-label" for="accommodation-name">
													Name
													<span class="text-danger">*</span>
												</label>
												<input
													type="text"
													id="accommodation-name"
													name="accommodation-name"
													class="form-control"
													placeholder="Enter accommodation name"
													wire:model.defer="accommodation.name"
												/>
												@error('accommodation.name')
												<span class="d-inline-block text-danger mt-2">
													{{ $message }}
												</span>
												@enderror
											</div>
										</div>
										<div class="col-md-4"></div>
										<div class="col-md-4"></div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="mb-4">
												<label class="form-label" for="accommodation-description">
													Description
												</label>
												<textarea
													type="text"
													id="accommodation-description"
													name="accommodation-description"
													cols="10"
													rows="3"
													class="form-control"
													wire:model.defer="accommodation.description"
												></textarea>
											</div>
										</div>
										<div class="col-md-4"></div>
										<div class="col-md-4"></div>
									</div>
								</div>
							</div>
						</form>
						<div class="col-12 justify-content-center form-actions d-flex">
							<button type="submit" class="btn btn-primary rounded mx-2" wire:click.prevent="save">
								Submit
							</button>
							<button type="submit" class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList">
								Back
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>