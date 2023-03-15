<div>
<section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form class="form">
                      <div class="row">
                        <div class="col-md-12 mb-md-2">
                          <h1>{{$label}} Specialization</h1>
                          <p>Create a specialization to add to your service catalog.</p>
                          <div class="row">
                            <div class="col-12">
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
                                  @error('specialization.name') <span class="error">{{ $message }}</span> @enderror
                              </div>
                            </div>
                            <div class="col-12">
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
                        <div class="col-12 justify-content-center form-actions d-flex">
                          <button type="submit" class="btn btn-primary rounded mx-2" wire:click.prevent="save">Submit</button>
                          <button class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList" >Back</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
</div>
