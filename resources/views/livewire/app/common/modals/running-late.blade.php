<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="runningLateModalLabel">Running Late</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="d-flex justify-content-center flex-column align-items-center">
            <p class="mb-4">How late are you running for Booking#{{ isset($booking->booking_number) ? $booking->booking_number : '' }}</p>
            <div class="d-flex gap-3 align-items-center mb-4">
                <a href="#" wire:click="fastSet(15)" class="btn btn-outline-dark btn-sm rounded">15 mins</a>
                <a href="#" wire:click="fastSet(30)" class="btn btn-outline-dark btn-sm rounded">30 mins</a>
                <a href="#" wire:click="fastSet(45)" class="btn btn-outline-dark btn-sm rounded">45 mins</a>
                <a href="#" class="btn btn-outline-dark btn-sm rounded">Custom</a>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-5">
                    <div class="d-flex justify-content-around">
                        <label class="form-label-sm" aria-label="Hours">Hours</label>
                        <label class="form-label-sm" aria-label="Minutes">Minutes</label>
                    </div>
                    <div class="input-group">
                        <input type="number" wire:model.defer="hours" class="form-control form-control-md text-center"
                            placeholder="00" aria-label="Hours">
                        <input type="number" wire:model.defer="mins" class="form-control form-control-md text-center"
                            placeholder="00" aria-label="Hours">
                    </div>
                </div>
                <div class="text-center">
                @error('hours')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                @enderror
                @error('mins')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer d-flex justify-content-center gap-2">
        <button type="button" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
        <button type="button" wire:click="save" class="btn rounded btn-primary">Notify</button>
    </div>
</div>
