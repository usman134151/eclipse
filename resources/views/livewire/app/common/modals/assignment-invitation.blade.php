<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5 text-center" id="payInvoiceLabel">Submit Availability </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">

            <div class="col-lg-0 d-flex gap-2">

            <div class="mb-2">
                                        <label class="form-label">Availability</label>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="availability" id="availability" wire:model="data.status" value="1">
                                          <label class="form-check-label" for="available">
                                           Available
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="availability" id="availability" wire:model="data.status" value="2">
                                          <label class="form-check-label" for="no-available">
                                           Not Available
                                          </label>
                                        </div>
                                    </div>
            </div>

            <div class="col-lg-8">
                <label class="form-label" for="notes-column">
                    Message
                    <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#fill-question"></use>
                    </svg> 
                </label>
                <textarea class="form-control" rows="3" placeholder="" name="notesColumn" id="notes-column" wire:model="data.notes"  ></textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="row justify-content-center w-100 mb-2">
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-outline-dark"
                    data-bs-dismiss="modal">Cancel</button>
            </div>
            <div class="col-lg-3">
                <button type="button" wire:click="save" class="btn rounded w-100 btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>