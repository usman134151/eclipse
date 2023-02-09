<div>
    <div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
             <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form class="form">
                      <div class="row">
                        <div class="col-md-12 mb-md-2">
                          <h1 class="mt-2 ">Quickbook Setup</h1>
                          <p class="m-5 ms-3">Here you can setup your Quickbook credentials.</p>
                          
                         <div class="row">
                          <div class="col-sm-6 form-group">
                            <label for="qb-clientId">QB ClientId<span class="mandatory" aria-hidden="true">*</span></label>
                            <input type="text" id="qb-clientId" class="form-control" placeholder="">
                          </div>
                          <div class="col-sm-6 form-group">
                            <label for="qb-clientsecret">QB ClientSecret<span class="mandatory" aria-hidden="true">*</span></label>
                            <input type="text" id="qb-clientsecret" class="form-control" placeholder="">
                          </div>
                         </div>

                         <div class="col-sm-6">
                          <label for="qb-callBackurl">QB CallBackUrl <span class="mandatory" aria-hidden="true">*</span></label>
                            <input type="text" id="qb-callBackurl" class="form-control" placeholder="">
                         </div>
                        
                            
                          </div>
                        </div>                        
                        </div>
                        <div class="col-12 justify-content-center form-actions d-flex">
                          <button type="submit" class="btn btn-primary rounded mx-2">Save</button>
  
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Basic Floating Label Form section end -->
</div>
