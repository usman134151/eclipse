<div>
                  					
									<div class="col-md-12 d-flex col-12 gap-4 mb-4">
										<div class="col-md-3 col-12">
											<div>
												<label class="form-label" for="keyword-search">
													Search
												</label>
												<input type="text" wire:model="keywords" id="keyword-search" class="form-control"  placeholder="Keyword Search"/>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div>
												<label class="form-label" for="tags">
													Tags <small>(coming soon)</small>
												</label>
												<input type="text" id="tags" class="form-control"  placeholder="Tags"/>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="mb-4">
												<label class="form-label" for="payment-status">
													Document Type
												</label>
											    <select class="select2 form-select" wire:model="documentType" id="documentType">
													<option value="">Select Document Type</option>
													<option value="acknowledge_document">Acknowledge Document</option>
													<option value="upload_only">Upload Only</option>
													<option value="sign_document">Sign & Upload</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-12 d-flex col-12 gap-4 mb-4">

										<div class="col-md-3 col-12">
											<div>
												<label class="form-label" for="set_set_date">
													Expiry Date
												</label>
												<div class="position-relative">
													<input type="" name="" class="form-control js-single-date" placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
													<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
														xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
													</svg>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="mb-4">
												<label class="form-label" for="payment-status">
													Status
												</label>
											    <select class="select2 form-select" wire:model="tab" id="tab">
													<option value=""></option>
													<option value="pending">Pending</option>
													<option value="active">Active</option>
													<option value="expired">Expired</option>

												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<ul class="nav nav-tabs" id="myTab" role="tablist">
											<li class="nav-item mx-5" role="presentation">
											  <button class="nav-link {{$tab=='pending'?'active':''}} btn btn-inactive rounded" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending-tab-pane" type="button" role="tab" aria-controls="pending-tab-pane" aria-selected="true">Pending Credentials</button>
											</li>
											<li class="nav-item mx-5" role="presentation">
											  <button class="nav-link {{$tab=='active'?'active':''}} btn btn-inactive rounded" id="active-credentials-tab" data-bs-toggle="tab" data-bs-target="#active-credentials-tab-pane" type="button" role="tab" aria-controls="active-credentials-tab-pane" aria-selected="false">Active Credentials</button>
											</li>
											<li class="nav-item mx-5" role="presentation">
											  <button class="nav-link {{$tab=='expired'?'active':''}} btn btn-inactive rounded bg-inactive" id="expired-tab" data-bs-toggle="tab" data-bs-target="#expired-tab-pane" type="button" role="tab" aria-controls="expired-tab-pane" aria-selected="false">Expired Credentials</button>
											</li>
										  </ul>
										  <div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show {{$tab=='pending'?'active':''}}" id="pending-tab-pane" role="tabpanel" aria-labelledby="pending-tab" tabindex="0">
												<div class="row">
													<h3>Pending Credentials</h3>
												</div>
												<div class="container">
													<div class="row mb-4">
													  <div class="col-md-11">
														@if(isset($credentials['pending'])&&count($credentials['pending']))
															@foreach($credentials['pending'] as $index => $credential)
																@if($index%4==0)
																	<div class="row flex-nowrap ">
																@endif
																	
																		<div class="col-md-3 m-2  border border-warning rounded ">
																			<div class="mt-4 pb-2"> 
																				<div>{{$credential['title']}}</div>
																				@if($credential['upload_file']!=null)
																					<div>Associated Document:
																							@if($credential['document_type']=='acknowledge_document')
																								<a href="{{$credential['upload_file']}}" target="_blank">
																									{{basename($credential['upload_file'])}}</a>
																							@else
																								{{basename($credential['upload_file'])}}
																							@endif
																					 </div>
																				@endif
																				{{-- <div>Associated with Tag: Covid19</div> --}}

																				<div>Type: {{ucwords(str_replace('_', ' ', strtolower($credential['document_type'])))}}</div>
																				@if($credential['document_type']=='acknowledge_document')
																					<button  wire:click="acceptCredential({{$credential['id']}})" class="btn btn-primary rounded mx-3 mt-3">Accept</button>
																				@else	
																					<button  wire:click="openCredential({{$credential['id']}}, '{{$credential['title']}}')" @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
																				@endif
																			</div>
																		</div>
																@if($index%4==3)
																	</div>
																@endif
															@endforeach
															@if(count($credentials['pending'])-1%4<3)
																
																</div>	@endif
														@else
															<p>No Pending Credentials</p>
														@endif
													  </div>
													</div>
													</div>

													
											</div>
											<div class="tab-pane fade {{$tab=='active'?'active':''}}" id="active-credentials-tab-pane" role="tabpanel" aria-labelledby="active-credentials-tab" tabindex="0">
												<div class="row">
													<h3>Active Credentials</h3>
												</div>
												<div class="container">
													<div class="row mb-4">
													  <div class="col-md-11">
														@if(isset($credentials['active'])&&count($credentials['active']))
															
															@foreach($credentials['active'] as $index => $credential)
																	@if($index%4==0)
																		<div class="row flex-nowrap ">
																	@endif
																		
																			<div class="col-md-3 m-2  border border-success rounded ">
																				<div class="mt-4 pb-2"> 
																					<div>{{$credential['title']}}</div>
																					@if($credential['upload_file']!=null)
																						<div>Associated Document:
																								@if($credential['document_type']=='acknowledge_document')
																									<a href="{{$credential['upload_file']}}" target="_black">
																										{{basename($credential['upload_file'])}}</a>
																								@else
																									{{basename($credential['upload_file'])}}
																								@endif
																						</div>
																					@endif
																					{{-- <div>Associated with Tag: Covid19</div> --}}

																					<div>Type: {{ucwords(str_replace('_', ' ', strtolower($credential['document_type'])))}}</div>
																						
																					<button type="button" wire:click="$emit('openActiveCredentialModal', {{ $credential['provider_doc_id'] }})"  data-bs-target="#viewButtonModal" class="btn btn-primary btn-has-icon rounded m-3">View</button>
																			
																					 
																					
																				</div>
																			</div>
																	@if($index%4==3)
																		</div>
																	@endif
															@endforeach
															@if(count($credentials['active'])-1%4<3)
																	</div>	
															@endif
														@else
															<p>No Active Credentials</p>
														@endif
													
													  </div>
													</div>
												  </div>
											</div>
											<div class="tab-pane fade {{$tab=='expired'?'active':''}}" id="expired-tab-pane" role="tabpanel" aria-labelledby="expired-tab" tabindex="0">
												<div class="row">
													<h3>Expired Credentials</h3>
												</div>
												<div class="container">
													<div class="row mb-4">
													  <div class="col-md-11">
														@if(isset($credentials['expired'])&&count($credentials['expired']))
																@foreach($credentials['expired'] as $index => $credential)
																	@if($index%4==0)
																		<div class="row flex-nowrap ">
																	@endif
																		
																			<div class="col-md-3 m-2  border border-danger rounded ">
																				<div class="mt-4 pb-2"> 
																					<div>{{$credential['title']}}</div>
																					@if($credential['upload_file']!=null)
																						<div>Associated Document:
																								@if($credential['document_type']=='acknowledge_document')
																									<a href="{{$credential['upload_file']}}" target="_blank">
																										{{basename($credential['upload_file'])}}</a>
																								@else
																									{{basename($credential['upload_file'])}}
																								@endif
																						</div>
																					@endif
																					{{-- <div>Associated with Tag: Covid19</div> --}}

																					<div>Type: {{ucwords(str_replace('_', ' ', strtolower($credential['document_type'])))}}</div>
																					<div>Expiry: {{date_format(date_create($credential['expiry_date']), "m/d/Y")}}</div>
																						
																					@if($credential['document_type']=='acknowledge_document')
																						<button  wire:click="renewAcceptance({{$credential['id']}})" class="btn btn-primary rounded mx-3 mt-3">Accept</button>
																					@else	
																						<button  wire:click="openCredential({{$credential['id']}}, '{{$credential['title']}}')" @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Renew</button>
																					@endif
																					 
																					
																				</div>
																			</div>
																	@if($index%4==3)
																		</div>
																	@endif
															@endforeach
															@if(count($credentials['expired'])-1%4<3 )
																	</div>	
															@endif
													
														@else
															<p>No Expired Credentials</p>
														@endif
													  </div>
													</div>
												  </div>
											</div>
										  </div>
									</div>

</div>
