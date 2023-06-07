<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="providerModalLabel">
            Assigned Provider Teams
        </h2>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
        ></button>
    </div>
    <div class="modal-body">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row mb-2">
                    <div class="col-lg-8 py-2">
                        <label class="form-label-sm fw-bold mb-0 mx-4">Teams</label>
                    </div>
                    <div class="col-lg-4 text-center py-2">
                        <label class="form-label-sm fw-bold mb-0">Select Team
                        </label>
                    </div>
                </div>
                {{-- END: Row Header --}}
                @foreach($teams as $team)
                <div class="row">
                    <div class="col-lg-8 py-1">
                        <div class="form-check mb-0">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <img src="/tenant/images/portrait/small/avatar-s-11.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                </div>
                                <div class="col-md-9">
                                    <h6 class="fw-semibold">{{$team->name}}</h6>
                                    <p>{{$team->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center py-1">
                        <div class="form-check mb-0 mx-auto d-inline-block mt-4">
                            <input class="form-check-input" type="checkbox"  wire:model.defer="selectedTeams"  value="{{$team->id}}" aria-label="Select Team">
                        </div>
                    </div>
                </div>
                {{-- END: Row Data --}}
                @endforeach
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="col-12 form-actions">
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">
                    Cancel
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" wire:click="updateData" data-bs-dismiss="modal" class="btn rounded w-100 btn-primary">
                    Add
                </button>
            </div>
        </div>
    </div>
</div>