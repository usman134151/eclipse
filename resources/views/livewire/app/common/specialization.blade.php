
<div>
  <div id="loader-section" class="loader-section" wire:loading>
    <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
      <div class="spinner-border" role="status" aria-live="polite">
          <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </div>

  @if($showForm)
    @livewire('app.common.forms.specialization-form') <!--show add/edit form-->
  @elseif($importFile)
	  @livewire('app.common.import.specialization-import')    <!--hammad date:13-10-23-->
  @else
  <div class="content-header row">
    <div class="content-header-left col-12 mb-4">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h1 class="content-header-title float-start mb-0">
                   All Specializations
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
                          All Specializations
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
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
                          {{-- <div class="col-md-3 ms-auto text-end">
                            <a href="#"  wire:click="showForm" class="btn btn-primary">Add Specialization</a>
                          </div> --}}
                          <div class="d-flex flex-column flex-md-row justify-content-end mt-4 mb-3 gap-2">
                            <button wire:click.prevent="downloadExportFile()" type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                                <svg aria-label="Download Import File" width="20" height="20" viewBox="0 0 20 20">
                                  <use xlink:href="/css/common-icons.svg#import-file"></use>
                                </svg>
                                <span>Download Import File</span>
                            </button>
                            <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="importFile">
                                <svg aria-label="Import Specialization" width="20" height="20" viewBox="0 0 20 20">
                                  <use xlink:href="/css/common-icons.svg#import-file"></use>
                                </svg>
                                <span>Import Specialization</span>
                              </button>
                              <a href="#"  wire:click="showForm" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">Add Specialization</a>
                          </div>
                          <p>{{$listDescription}}</p>
                        </div>
                        </div>    
                        </div>
                        @livewire('app.common.lists.specializations',key(Str::random(10))) 
          </section>

    <!-- end of list -->
  @endif
</div>
   
