<div class="modal-content">
    <div class="modal-header justify-center">
        <h2 class="modal-title fs-5 text-center" id="addNewCompanyLabel">ADD NEW COMPANY</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">

            <div class="col-lg-12 d-flex gap-2">

                <div class="col-lg-6 ps-lg-5 col-12">
                    <label class="form-label" for="first-name-column">
                        Name
                        <span class="mandatory" aria-hidden="true">
                            *
                        </span>
                    </label>
                    <input type="text" id="company-name-column" class="form-control" placeholder="Company Name"
                        name="name-column" wire:model.defer="company.name" />
                    @error('company.name')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 d-flex gap-2">
                {{-- Industry --}}
                <div class="col-lg-6 ps-lg-5 col-12">
                    <label class="form-label" for="industry-column">
                        Industry
                        <span class="mandatory" aria-hidden="true">
                            *
                        </span>
                    </label>
                    <select wire:model='company.industry_id' name="industry" class="form-select" id="industry">
                        @if (isset($industries))
                        <option value="">Select Industry</option>
                        @foreach ($industries as $option)
                        <option value="{{ $option->id }}">{{ $option->name }}</option>
                        @endforeach
                        @endif
                    </select>
                    @error('company.industry_id')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>


        </div>
    </div>
    <div class="modal-footer">
        <div class="row justify-content-center w-100 mb-2">
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-primary" wire:click.prevent="addCompany">Add</button>
            </div>
        </div>
    </div>
</div>