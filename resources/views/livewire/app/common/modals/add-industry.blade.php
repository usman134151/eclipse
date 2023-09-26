<div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="industryModalLabel">Select Industry</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="row">
                <div class="col-lg-8 py-2">
                  <label class="form-label-sm fw-bold mb-0">Select Industry</label>
                </div>
                @if(!$isBooking)
                <div class="col-lg-4 text-center py-2">
                  <label class="form-label-sm fw-bold mb-0">Default <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                </div>
                @endif
              </div><!-- END: Row Header -->
              @foreach($industries as $industry)
              <div class="row">
                <div class="col-lg-8 py-2">
                  <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" wire:model="selectedIndustries" value="{{ $industry->id }}" id="IndustryNameCheckbox{{ $industry->id }}">
                    <label class="form-check-label " for="IndustryNameCheckbox{{ $industry->id }}">
                      <small>{{$industry->name}}</small>
                    </label>
                  </div>
                </div>
                @if(!$isBooking)
                <div class="col-lg-4 text-center py-2">
                  <div class="form-check mb-0 mx-auto d-inline-block">
                    <input class="form-check-input" type="radio" name="defaultIndustry" id="defaultIndustry" value="{{ $industry->id }}" wire:model="defaultIndustry">
                  </div>
                </div>
                @endif
              </div><!-- END: Row Data -->
              @endforeach
             
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="col-12 form-actions">
            <div class="col-lg-3">
              <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
            </div>
            <div class="col-lg-3">
              <button type="button" class="btn rounded w-100 btn-primary" wire:click="updateData" data-bs-dismiss="modal">Add</button>
            </div>
          </div>
        </div>
</div>