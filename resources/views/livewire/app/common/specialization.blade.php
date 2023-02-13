
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
                            <h1>Specializations</h1>
                          </div>
                          <div class="col-md-3 ms-auto text-end">
                            <a href="#"  wire:click="showForm" class="btn btn-primary">Create</a>
                          </div>
                          <p>Here you can create and manage service specializations. Deactivated specializations will not display in the service request form.</p>
                        </div>
                        </div>    
                        </div>
                        @livewire('app.common.lists.specializations',key(Str::random(10))) 
          </section>

    <!-- end of list -->
  @endif
</div>
   
