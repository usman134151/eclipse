<div>
  <div class="content-header row">
    <div class="content-header-left col-12 mb-4">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h1 class="content-header-title float-start mb-0">
                  Deactivated Customers
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
                                Customers
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                          Deactivated Customers
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
                <div class="row">
                  <div class="col-md-12 mb-md-2">
                    <div class="row">
                      <div class="col-md-12 mb-md-2">
                        <h1 class="mt-2 ">Deactivated Customers</h1>
                        </div>
                         <div class="row">
                          <div class="col-lg-12">
                           <P>Deactivated customer users will be unable to log in, request, and view scheduled services until they are reactivated. </P>
                            </div>
                         </div> </div>
                  </div>
                  </div>
                  {{-- updated by Ali to list of deactivated-customer --}}
                  @livewire('app.common.lists.customers', ['status' => 0], key(Str::random(10)))
                  
                 {{-- icon bar start--}}
                 <div class="d-flex actions gap-3 justify-content-end mb-2">
                    <div class="d-flex gap-2 align-items-center">
                        <a href="#" title="Activate" aria-label="Activate" class="btn btn-sm btn-secondary rounded btn-hs-icon"  data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                            <i style="margin-left: 8px" class="fa fa-check-circle "></i>
                          </a>
                        <span class="text-sm">
                            Activate </span>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon"  data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                            <i style="margin-left: 8px" class="fa fa-trash "></i>
                          </a>
                        <span class="text-sm">
                            Delete                                                        </span>
                    </div>

                    </div>
                   {{-- icon bar  end--}}
            </div>

          </div>
        </div>
      </div>
    </section>
</div>
