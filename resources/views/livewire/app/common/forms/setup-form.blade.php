<div>
	<div class="content-header row">
        <div class="content-header-left col-12 mb-4">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        Add Setup Value
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Home">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- End of update by Shanila --}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">
                                    Settings
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                             Add Setup Value
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                                {!! $setupValues['setup']['rendered'] !!}
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
@push('scripts')
<script>
    Livewire.on('updateVal', (attrName, val) => {
       
        // Call the updateVal function with the attribute name and value
        @this.call('updateVal', attrName, val);
    });
</script>
@endpush
