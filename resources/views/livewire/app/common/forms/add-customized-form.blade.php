<div>
	<div class="content-header row">
		<div class="content-header-left col-12 mb-4">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">
					   Add Saved Form
					</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Home">
									{{-- Updated by Shanila to Add svg icon--}}
									<svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
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
							  Add Saved Form
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- Add Customized Form section Start --}}
	<section id="multiple-column-form">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<form class="form">
							<div class="row">
								<div class="col-md-12 mb-md-2">
									<h1>Add Customized Form</h1>
								</div>
								<div class="col-md-12 mb-md-2">
									<p>Add questions to create your form. When you're finished, press "Publish Form"</p>
								</div>
								<div class="col-md-6 col-12">
									<div class="mb-4">
										<div class="form-group">
											<label class="form-label" for="form-column"> Form <span class="text-danger" aria-hidden="true">*</span></label>

                                            {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id',
                                                    'setup_value_label', 'setup_id', 7, 'setup_value_label', false,
                                                    'custom_form_details.form_name_id',
                                               '','form_name_id') !!}
										  @error('custom_form_details.form_name_id')<span class="d-inline-block invalid-feedback mt-2">The form type is a required field</span>@enderror

										</div>
									</div>
								</div>

								@if($custom_form_details['form_name_id']==37 || $custom_form_details['form_name_id']==38)
								<!-- Begin: This is conditional, link with select "Form" / option "Customer Request Form" / option "Customer Lead and Qoute Form"   -->
								 	<div class="col-md-6 col-12">
										<div class="mb-4">
											<div class="form-group">
			                       				<label class="form-label" for="industry">Select Industry
						                            <span class="mandatory" aria-hidden="true">*</span>
                						        </label>
									
													{!! App\Helpers\SetupHelper::createDropDown('Industry', 'id',
															'name', 'status', 1, 'name', false,
															'custom_form_details.industry_id',
													'','industry') !!}
											
                    			 			</div>	
                    			 		</div>	
                    			 	</div>	
								<!-- End: This is conditional, link with select "Form" / option "Customer Request Form"   -->

								@endif

								@if($custom_form_details['form_name_id']==40)
								 
								<!-- Begin: This is conditional, link with select "Form" / option "New Provider Screening"   -->
								<div class="col-md-6 col-12">
									<div class="mb-4">
										  <div class="form-group">
											<label for="screening-name-column" class="form-label ">Screening Name</label>
											<input type="text" id="screen_name" wire:model.defer="custom_form_details.screen_name" class="form-control" placeholder="Enter Name" name="screening-name-column" />
										</div>
									</div>
								</div>
								<!-- End: This is conditional, link with select "Form" / option "New Provider Screening"   -->
								@endif
								@if($custom_form_details['form_name_id']==37)
								<!-- Begin: This is conditional, link with select "Form" / option "Customer Request Form"   -->
								 <div class="col-md-12">
									<div class="mb-4">
										<div class="form-group">
											<label for="form-name-column" class="form-label">Form Name
						                            {{-- <span class="mandatory" aria-hidden="true">*</span> --}}
											</label>
											<input type="text" id="form-name-column" wire:model.defer="custom_form_details.request_form_name"
											class="form-control" placeholder="Enter Request From Name"
											name="form-name-column" />
										</div>
									</div>
								</div>
								  <!-- End: This is conditional, link with select "Form" / option "Customer Request Form"   -->
								@endif
								
                                @foreach($questions as $index=>$question)
									<div class="border-dashed rounded p-3 mb-3" >

										@if($custom_form_details['form_name_id']==40)

											<!-- Begin: This is conditional, link with select "Form" / option "New Provider Screening"   -->
											<div class="col-md-12">
												<div class="mb-4">
														<div class="form-group">
															<label for="title-column">Title</label>
															<input type="text" id="title-column" wire:key="title-{{ $index }}" wire:model.lazy="questions.{{$index}}.title"
															class="form-control" placeholder="Enter Title"
															name="title-column" />
														</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="mb-4">
													<div class="form-group">
														<label for="scenario">Scenario</label>
														<textarea class="form-control" id="scenario" rows="4" wire:key="scenario-{{ $index }}" wire:model.lazy="questions.{{$index}}.scenario" name="scenario"></textarea>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="mb-4">
													<label for="formFile"
														class="form-label">Upload File</label> 
													<input class="form-control" type="file" id="formFile" wire:key="document-name-{{ $index }}" wire:model.lazy="questions.{{$index}}.document_name">
													<p>Maximum file size (25 MB)</p>
												</div>
											</div>
											<div class="col-md-12">
												<div class="mb-4">
														<div class="form-check">
															<input type="checkbox" id="allow-radio"
															class="form-check-input" wire:key='allow-radio-{{$index}}' wire:model.lazy='questions.{{$index}}.allow_redo'
															name="allow-radio" />
															<label for="required-column" class='form-check-label'>Allow Radio</label>
														</div>
												</div>
											</div> 
											<!-- End: This is conditional, link with select "Form" / option "New Provider Screening"   -->
										@else
											<div class="col-md-12">
												<div class="mb-4">
														<div class="form-group">
															<div class="d-flex justify-content-between">
																<label for="field-name-column">Field Name {{ $loop->index + 1 }} <i class="fa fa-info-circle" role="img" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Type the question or field name you want customers to respond to."></i></label>
																<div class="align-items-center gap-4">
																	<a wire:click.prevent="removeQuestion({{$index}})" href="#" title="Delete" aria-label="Delete"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon">
																		<svg aria-label="Delete" class="delete-icon" width="20" height="20"
																			viewBox="0 0 20 20" fill="none"
																			xmlns="http://www.w3.org/2000/svg">
																			<use xlink:href="/css/sprite.svg#delete-icon"></use>
																		</svg>
																	</a>
																</div>
															</div>
															<input type="text" id="field-name-column" class="form-control" placeholder="Enter Name"name="field-name-column" wire:key="name-{{ $index }}" wire:model.lazy="questions.{{$index}}.field_name"/>
										 					 @error('questions.'.$index.'.field_name')<span class="d-inline-block invalid-feedback mt-2">The field name is required for each question.</span>@enderror
														</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="mb-4">
													<label for="form-type-column" > Field Type <i class="fa fa-info-circle" role="img" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Select the format you want this question to display as"></i></label>
													<select class="form-select " id="form-type-column" wire:key="select-{{ $index }}" wire:model.defer="questions.{{$index}}.field_type">
														<option>Select</option>
														<option wire:key="select-{{ $index }}-1" value="0">Text</option>
														<option wire:key="select-{{ $index }}-2" value="1">Textarea</option>
														<option wire:key="select-{{ $index }}-3" value="2">Dropdown</option>
														<option wire:key="select-{{ $index }}-4" value="3">Checkbox</option>
														<option wire:key="select-{{ $index }}-5" value="4">Radio button</option>
														<option wire:key="select-{{ $index }}-6" value="5">File</option>
													</select>
										 			@error("questions.".$index.".field_type")<span class="d-inline-block invalid-feedback mt-2">The field type is required for each question.</span>@enderror

												</div>

											</div>
											<div class="col-md-12">
												<div class="mb-4">
														<div class="form-group">
															<label for="placeholder-column">Placeholder <i class="fa fa-info-circle" role="img" data-bs-toggle="tooltip" data-bs-placement="top"  aria-label="This is the text shown in the response field before anything is typed."></i></label>
															<input type="text" id="placeholder-column"
															class="form-control" placeholder="Placeholder"
															name="field-name-column" wire:key="placeholder-{{ $index }}" wire:model.lazy="questions.{{$index}}.placeholder"/>
														</div>
												</div>
											</div>

											@if($custom_form_details['form_name_id']==37)

												<!-- Begin: This is conditional, link with select "Form" / option "Customer Request Form"   -->
												<div class="col-md-12">
													<div class="mb-4">
															<div class="form-check">
																<input type="checkbox" id="hide-response-from-provider-column" name="hide-response-from-provider-column" class="form-check-input" wire:key="hide-response-from-provider-{{ $index }}" wire:model.lazy="questions.{{$index}}.hide_response_from_provider"  />
																<label for="hide-response-from-provider-column" class="form-check-label">Hide Response from Provider  <i role="img" class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="When selected, the customers response will not display in the assigned providers 'Assignment Details'. The response will still be visible to you and the customer."></i></label>
															
															</div>
													</div>
												</div> 
												<!-- End: This is conditional, link with select "Form" / option "Customer Request Form"   -->
											@endif

											<div class="col-md-12">
													<div class="mb-4">
														<div class="form-check">
															<input class="form-check-input" id="required-column" name="required-column" type="checkbox" tabindex="3" wire:key="required-{{ $index }}" wire:model.lazy="questions.{{$index}}.required"/>
															<label class="form-check-label" for="required-column"> Required <i class="fa fa-info-circle" role="img" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="When selected, the customer will be required to provide a response to the field before continuing to Step 3."></i></label>
														</div>
													</div>
											</div>

										@endif
									</div>

                              	@endforeach

								<div class=" justify-content-start">
									<div class="mb-4 ">
										<button type="submit"
										class="btn btn-primary rounded" wire:click.prevent="addQuestion">+ Add Question</button>
									</div>
								</div>

								<div class="col-12 justify-content-center form-actions d-flex">
									<button type="submit" wire:click.prevent="save" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });"
									class="btn btn-primary rounded">Publish Form</button>
									<button type="button"
										class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList">Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- Add Customized Form section End --}}
	
    <script>
        function updateVal(attrName,val){
          
            Livewire.emit('updateVal', attrName, val);

        }

    </script>
</div>
