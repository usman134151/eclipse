<div>
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
