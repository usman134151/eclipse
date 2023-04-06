<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
	@livewire('app.common.forms.coupon-form') {{-- Show Add / Edit Form --}}
	@else
	{{-- Basic multiple Column Form section start --}}
	   <section id="multiple-column-form">
			<div class="row">
				<div class="col-12">
				   <div class="card">
				      <div class="card-body">
                         <div class="row">
						    <div class="col-md-12 mb-md-2">
							   <div class="row">
							      <div class="col-md-3">
							         <h1>{{$listTitle}}</h1>
							       </div>
							       <div class="col-md-3 ms-auto text-end">
							        <a href="#" wire:click="showForm" class="btn btn-primary rounded">Create Coupon</a>
							       </div>
							       <p>{{ $listDescription }}</p>
						        </div>
						    </div>
						  </div>
						@livewire('app.common.lists.coupons',key(Str::random(10)))
                        {{-- icon legend bar start --}}
                        <div class="d-flex actions gap-3 justify-content-end mb-2 mt-2">
                           <div class="d-flex gap-2 align-items-center">
                              <a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
									<use xlink:href="/css/common-icons.svg#pencil">
									</use>
								</svg>
                              </a>
                              <span class="text-sm">
                             Edit
                              </span>
                            </div>
					       {{--  
                             <div class="d-flex gap-2 align-items-center">
                                 <a href="#" title="cross" aria-label="cross " class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                     <x-icon name="cross"/>
                                 </a>
                                 <span class="text-sm">
                                         Deactivate                              </span>
                             </div>
					       --}}
                        </div>
                        {{-- icon legend bar end --}}
					</div>
				  </div>
				</div>
			  </div>
		</section>
		{{-- Basic Floating Label Form section end --}}
		@endif
</div>
