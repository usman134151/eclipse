<div>
<section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form class="form" wire:submit.prevent="save">
                      <div class="row">
                        <div class="col-md-12 mb-md-2">
                          <h1>{{$label}} Specialization</h1>
                          <p>Create a specialization to add to your service catalog.</p>
                          <div class="row">
                            <div class="col-6">
                              <div class="mb-4">
                                <label class="form-label" for="specialization-name" >Specialization Name 
                                  <span class="text-danger">*</span> </label>
                                <input
                                  type="text"
                                  id="specialization.name"
                                  class="form-control"
                                  name="specialization.name"
                                  placeholder="Enter specialization name"
                                  wire:model="specialization.name"
                                  />
                                  @error('specialization.name') <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span> @enderror
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="mb-4">
                                <label class="form-label" for="specialization-description">Specialization Description</label>
                                <textarea type="text"
                                id="specialization-description"
                                cols="10"
                                rows="3"
                                class="form-control"
                                name="specialization-description"
                                wire:model="specialization.description"></textarea>
                              </div>
                            </div>   
                          </div>
                        </div>                        
                        </div>
                        <div class="col-6 form-actions d-flex justify-content-between">
                           <div>
                            <button class="btn btn-outline-dark rounded mx-2 justify-content-end" wire:click.prevent="showList" >Back</button>
                           </div>
                           <div>
                            <button type="submit" class="btn btn-primary rounded mx-2 justify-content-start" wire:click.prevent="save">Submit</button>
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
