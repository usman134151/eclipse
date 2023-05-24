<div>
  <div class="content-header row">
    <div class="content-header-left col-12 mb-4">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h1 class="content-header-title float-start mb-0">
                   Add Industry
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
                          Add Industry
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
                    <form class="form">
                      <div class="row">
                        <div class="col-md-12 mb-md-2">
                          <h1>{{$label}} Industry</h1>
                          <p>Create a industry to add to your service catalog.</p>
                          <div class="row">
                            <div class="col-6">
                              <div class="mb-4">
                                <label class="form-label" for="industry-name" >Industry Name
                                  <span class="text-danger">*</span> </label>
                                <input
                                  type="text"
                                  id="industry.name"
                                  class="form-control"
                                  name="industry.name"
                                  placeholder="Enter industry name"
                                  wire:model.defer="industry.name"
                                  />
                                  @error('industry.name') <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span> @enderror
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <div class="col-6 justify-content-center form-actions col-6 form-actions d-flex justify-content-between">
                          <div>
                            <button class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList" >Back</button>
                          </div>
                          <div>
                            <button type="submit" class="btn btn-primary rounded mx-2" wire:click.prevent="save">Submit</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
</div>
