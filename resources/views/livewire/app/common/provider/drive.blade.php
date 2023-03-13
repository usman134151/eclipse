<div x-data="{pendingCredentials: false}"> 
      <div class="row">
        <h3>My Drive</h3>
        <p>Here you can manage your professional credentials and required documents. You will receive notifications when your credentials are approaching expiration or have expired.</p>
    </div>
    <div class="col-md-12 d-flex col-12 gap-4 mb-4">
        <div class="col-md-3 col-12">
            <div>
                <label class="form-label" for="keyword-search">
                    Search
                </label>
                <input type="text" id="keyword-search" class="form-control"  placeholder="Keyword Search"/>
            </div>
        </div>
        <div class="col-md-3 col-12">
            <div>
                <label class="form-label" for="tags">
                    Tags
                </label>
                <input type="text" id="tags" class="form-control"  placeholder="Tags"/>
            </div>
        </div>
        <div class="col-md-3 col-12">
            <div class="mb-4">
                <label class="form-label" for="payment-status">
                    Document Type
                </label>
                <select class="select2 form-select" id="payment-status">
                    <option>Select Document Type</option>
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
                    <x-icon name="datefield-icon"/>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12">
            <div class="mb-4">
                <label class="form-label" for="payment-status">
                    Status
                </label>
                <select class="select2 form-select" id="payment-status">
                    <option>Pending</option>
                </select>	
            </div>
        </div>
    </div>
    <div class="row">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active btn btn-primary rounded" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending-tab-pane" type="button" role="tab" aria-controls="pending-tab-pane" aria-selected="true">Pending Credentials</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn btn-inactive rounded" id="active-credentials-tab" data-bs-toggle="tab" data-bs-target="#active-credentials-tab-pane" type="button" role="tab" aria-controls="active-credentials-tab-pane" aria-selected="false">Active Credentials</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn btn-inactive rounded" id="expired-tab" data-bs-toggle="tab" data-bs-target="#expired-tab-pane" type="button" role="tab" aria-controls="expired-tab-pane" aria-selected="false">Expired Credentials</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="pending-tab-pane" role="tabpanel" aria-labelledby="pending-tab" tabindex="0">
                <div class="row">
                    <h3>Pending Credentials</h3>
                </div>
                <div class="container">
                    <div class="row mb-4">
                      <div class="col-md-11">
                        <div class="row">
                            <div class="col border border-warning rounded ">
                                <div class="mt-4">
                                    <div>Credential Title</div>
                                    <div>Associated with Tag: Covid19</div>
                                    <div>Type: Upload Only</div>
                                    <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
                                    </div>
                              </div>
                              <div class="col border border-warning rounded mx-3">
                                <div class="mt-4">
                                <div>Credential Title</div>
                                <div>Associated with Tag: Covid19</div>
                                <div>Type: Upload Only</div>
                                <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
                                </div>
                              </div>
                              <div class="col border border-warning rounded">
                                <div class="mt-4">
                                    <div>Credential Title</div>
                                    <div>Associated with Tag: Covid19</div>
                                    <div>Type: Upload Only</div>
                                    <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
                                    </div>
                              </div>
                              <div class="col border border-warning rounded mx-3">
                                <div class="mt-4">
                                    <div>Credential Title</div>
                                    <div>Associated with Tag: Covid19</div>
                                    <div>Type: Upload Only</div>
                                    <button @click="pendingCredentials = true" class="btn btn-primary rounded m-3">Upload</button>
                                    </div>
                              </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-11">
                          <div class="row">
                              <div class="col border border-warning rounded ">
                                  <div class="mt-4">
                                      <div>Credential Title</div>
                                      <div>Associated with Tag: Covid19</div>
                                      <div>Type: Upload Only</div>
                                      <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
                                      </div>
                                </div>
                                <div class="col border border-warning rounded mx-3">
                                  <div class="mt-4">
                                  <div>Credential Title</div>
                                  <div>Associated with Tag: Covid19</div>
                                  <div>Type: Upload Only</div>
                                  <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
                                  </div>
                                </div>
                                <div class="col border border-warning rounded">
                                  <div class="mt-4">
                                      <div>Credential Title</div>
                                      <div>Associated with Tag: Covid19</div>
                                      <div>Type: Upload Only</div>
                                      <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
                                      </div>
                                </div>
                                <div class="col border border-warning rounded mx-3">
                                  <div class="mt-4">
                                      <div>Credential Title</div>
                                      <div>Associated with Tag: Covid19</div>
                                      <div>Type: Upload Only</div>
                                      <button @click="pendingCredentials = true" class="btn btn-primary rounded m-3">Upload</button>
                                      </div>
                                </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-md-11">
                          <div class="row">
                              <div class="col border border-warning rounded ">
                                  <div class="mt-4">
                                      <div>Credential Title</div>
                                      <div>Associated with Tag: Covid19</div>
                                      <div>Type: Upload Only</div>
                                      <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
                                      </div>
                                </div>
                                <div class="col border border-warning rounded mx-3">
                                  <div class="mt-4">
                                  <div>Credential Title</div>
                                  <div>Associated with Tag: Covid19</div>
                                  <div>Type: Upload Only</div>
                                  <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
                                  </div>
                                </div>
                                <div class="col border border-warning rounded">
                                  <div class="mt-4">
                                      <div>Credential Title</div>
                                      <div>Associated with Tag: Covid19</div>
                                      <div>Type: Upload Only</div>
                                      <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
                                      </div>
                                </div>
                                <div class="col border border-warning rounded mx-3">
                                  <div class="mt-4">
                                      <div>Credential Title</div>
                                      <div>Associated with Tag: Covid19</div>
                                      <div>Type: Upload Only</div>
                                      <button @click="pendingCredentials = true" class="btn btn-primary rounded m-3">Upload</button>
                                      </div>
                                </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="active-credentials-tab-pane" role="tabpanel" aria-labelledby="active-credentials-tab" tabindex="0">
                <div class="row">
                    <h3>Active Credentials</h3>
                </div>
                <div class="container">
                    <div class="row mb-4">
                      <div class="col-md-11">
                        <div class="row">
                            <div class="col border border-success rounded ">
                                <div class="mt-4">
                                    <div>Credential Title</div>
                                    <div>Associated with Tag: Covid19</div>
                                    <div>Type: Upload Only</div>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#viewButtonModal" class="btn btn-primary btn-has-icon rounded m-3">View</button>
                                    </div>
                              </div>
                              <div class="col border border-success rounded mx-3">
                                <div class="mt-4">
                                <div>Credential Title</div>
                                <div>Associated with Tag: Covid19</div>
                                <div>Type: Upload Only</div>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#viewButtonModal" class="btn btn-primary btn-has-icon rounded m-3">View</button>
                                </div>
                              </div>
                              <div class="col border border-success rounded">
                                <div class="mt-4">
                                    <div>Credential Title</div>
                                    <div>Associated with Tag: Covid19</div>
                                    <div>Type: Upload Only</div>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#viewButtonModal" class="btn btn-primary btn-has-icon rounded m-3">View</button>
                                    </div>
                              </div>
                              <div class="col border border-success rounded mx-3">
                                <div class="mt-4">
                                    <div>Credential Title</div>
                                    <div>Associated with Tag: Covid19</div>
                                    <div>Type: Upload Only</div>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#viewButtonModal" class="btn btn-primary btn-has-icon rounded m-3">View</button>
                                    </div>
                              </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="expired-tab-pane" role="tabpanel" aria-labelledby="expired-tab" tabindex="0">
                <div class="row">
                    <h3>Expired Credentials</h3>
                </div>
                <div class="container">
                    <div class="row mb-4">
                      <div class="col-md-11">
                        <div class="row">
                            <div class="col border border-danger rounded ">
                                <div class="mt-4">
                                    <div>Credential Title</div>
                                    <div>Associated with Tag: Covid19</div>
                                    <div>Type: Sign & Upload</div>
                                    <div>Expiry: 12/04/2023</div>
                                    <button class="btn btn-primary rounded mx-3 mt-3">Renew</button>
                                    </div>
                              </div>
                              <div class="col border border-danger rounded mx-3">
                                <div class="mt-4">
                                <div>Credential Title</div>
                                <div>Associated with Tag: Covid19</div>
                                <div>Type: Sign & Upload</div>
                                <div>Expiry: 12/04/2023</div>
                                <button class="btn btn-primary rounded mx-3 mt-3">Renew</button>
                                </div>
                              </div>
                              <div class="col border border-danger rounded">
                                <div class="mt-4">
                                    <div>Credential Title</div>
                                    <div>Associated with Tag: Covid19</div>
                                    <div>Type: Sign & Upload</div>
                                    <div>Expiry: 12/04/2023</div>
                                    <button class="btn btn-primary rounded mx-3 mt-3">Renew</button>
                                    </div>
                              </div>
                              <div class="col border border-danger rounded mx-3">
                                <div class="mt-4">
                                    <div>Credential Title</div>
                                    <div>Associated with Tag: Covid19</div>
                                    <div>Type: Sign & Upload</div>
                                    <div>Expiry: 12/04/2023</div>
                                    <button class="btn btn-primary rounded m-3">Renew</button>
                                    </div>
                              </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>  
        @include('panels.common.pending-credentials')
        @include('modals.common.view-button')  
</div>
