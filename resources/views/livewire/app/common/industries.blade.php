
<div>
  <div id="loader-section" class="loader-section" wire:loading>
    <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
      <div class="spinner-border" role="status" aria-live="polite">
          <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </div>

  @if($showForm)
    @livewire('app.common.forms.industries-form') <!--show add/edit form-->
  @elseif($importFile)
	  @livewire('app.common.import.industry-import')  
  @else
 <!--show add/edit form-->
          <section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-12 mb-md-2">
                          <div class="row mt-3">
                          <div class="col-md-3">
                            <h1>{{$listTitle}}</h1>
                          </div>
                          <div class="d-flex flex-column flex-md-row justify-content-end mt-4 mb-3 gap-2">
										<button wire:click.prevent="downloadExportFile()" type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
												{{-- Updated by Shanila to Add svg icon--}}
												<svg aria-label="Download Import File" width="20" height="20" viewBox="0 0 20 20">
													<use xlink:href="/css/common-icons.svg#import-file"></use>
												</svg>
												{{-- End of update by Shanila --}}
												<span>Download Import File</span>
										</button>
                    <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="importFile">
												{{-- Updated by Shanila to Add svg icon--}}
												<svg aria-label="Import industry" width="20" height="20" viewBox="0 0 20 20">
													<use xlink:href="/css/common-icons.svg#import-file"></use>
												</svg>
												{{-- End of update by Shanila --}}
												<span>Import industry</span>
											</button>
                            <a href="#"  wire:click="showForm" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">Add Industry</a>
                          </div>
                          <p>{{$listDescription}}</p>
                        </div>
                        </div>    
                        </div>
                        @livewire('app.common.lists.industries',key(Str::random(10))) 
          </section>

    <!-- end of list -->
  @endif
</div>
   
