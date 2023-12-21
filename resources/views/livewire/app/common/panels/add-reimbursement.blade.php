<div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <form class="form" wire:submit.prevent="save">
        {{-- updated by shanila to add csrf --}}
        @csrf
        {{-- update ended by shanila --}}
        <div class="row">
            @if (!session()->get('isProvider'))
                <div class="col-md-10 mb-4">
                    <label class="form-label" for="provider_id">
                        Provider
                    </label>
                    {{-- <input type="text" class="form-control" name="provider" placeholder="Imogene Guthrie"
                    aria-label="Provider" /> --}}
                    <select wire:model.defer="reimbursement.provider_id" data-placeholder="Select Provider"
                        class="select2 form-select" tabindex="" id="provider_id">
                        <option value=""></option>
                        @foreach ($providers as $provider)
                            <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                        @endforeach
                    </select>
                    @error('reimbursement.provider_id')
                        <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                    @enderror
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-10 mb-4">
                <label class="form-label" for="booking_id">
                    Assignment No.
                </label>
                {{-- <input type="text" id="assignment-no" class="form-control" name="assignment-no"
                    placeholder="100995-6" /> --}}
                @if($booking_id)
                    <input  type="text" id="" class="form-control" name="" value="{{$booking_id}}" disabled >
                @else
                <select wire:model.defer="selectedValue" class="form-select" tabindex="" name="selectedValue"
                    id="selectedValue">
                    <option value=""></option>
                    @foreach ($assignments as $assign)
                        <option value="{{ $assign->id }}">{{ $assign->booking_number }}</option>
                    @endforeach
                </select>
                @endif
                @error('reimbursement.booking_id')
                    <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class=" col-md-10 mb-4">
                <label class="form-label" for="reason-for-reimbursement">
                    Reason for Reimbursement
                </label>
                <div class="form-check">
                    <input wire:model.defer="reimbursement.reason" class="form-check-input" type="radio"
                        name="reason-for-reimbursement" id="mileage" checked="" value="mileage">
                    <label for="mileage" class="form-check-label">Mileage</label>
                </div>
                <div class="form-check">
                    <label for="compensated-travel-time" class="form-check-label mb-2">Compensated Travel Time</label>
                    <input wire:model.defer="reimbursement.reason" class="form-check-input show-hidden-content"
                        type="radio" name="reason-for-reimbursement" id="compensated-travel-time" checked=""
                        value="compensated-travel-time">
                    <div class="hidden-content col-lg-4">
                        <div class="d-flex justify-content-around">
                            <label class="form-label-sm">Hours</label>
                            <label class="form-label-sm">Minutes</label>
                        </div>
                        <div class="input-group">
                            <input wire:model.defer="time.hours" type="text"
                                class="form-control form-control-md text-center" placeholder="00" aria-label="00"
                                aria-describedby="">
                            <input wire:model.defer="time.mins" type="text"
                                class="form-control form-control-md text-center" placeholder="00" aria-label="00"
                                aria-describedby="">
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <label for="" class="form-check-label">Other</label>
                    <input wire:model.defer="reimbursement.reason" class="form-check-input show-hidden-content"
                        type="radio" name="reason-for-reimbursement" id="reason-for-reimbursement" checked=""
                        value="other">
                    <div class="hidden-content">
                        <input wire:model.defer="other.details" type="text" id="" class="form-control"
                            name="" placeholder="Reason for Reimbursement" aria-label="Reason for Reimbursement">
                    </div>
                </div>
                @error('reimbursement.reason')
                    <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mb-4">
                <div>
                    <div class="">
                        <label class="form-label" for="reimbursement-amount">
                            Reimbursement Amount
                        </label>
                        <input wire:model.defer="reimbursement.amount" type="text" id="reimbursement-amount"
                            class="form-control" name="reimbursement-amount" placeholder="$00.00">
                        @error('reimbursement.amount')
                            <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-10">
                <label class="form-label" for="upload-document">
                    Receipt for Reimbursement
                </label>
                {{-- <input wire:model.defer="reimbursement.file" type="file" id="upload-document" class="form-control"
                    name="upload-document" placeholder="upload-document" /> --}}


                {{-- Upload File --}}
                <div class="col-md-6 col-12 ps-lg-2">
                    <div class="row d-flex">
                        <div class="col-lg-12 d-flex text-center">
                            <label class="form-label" for="first-name-column">
                                Upload File</label>
                        </div>
                        <div class="text-center col-lg-3 d-flex ">

                            <div class="btn btn-outline-primary d-block px-2 pb-0">
                                <label for="file">
                                    <svg class="mb-2" width="35" height="35" viewBox="0 0 35 35"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M32.0833 1.1498e-06H25.5208C25.3274 1.1498e-06 25.142 0.076824 25.0052 0.213569C24.8685 0.350315 24.7917 0.535781 24.7917 0.729168V8.75C24.7917 9.13678 24.638 9.50771 24.3645 9.7812C24.091 10.0547 23.7201 10.2083 23.3333 10.2083H11.7214C11.3429 10.2143 10.9763 10.0765 10.6955 9.82281C10.4147 9.56906 10.2406 9.21824 10.2083 8.84115C10.1959 8.64211 10.2244 8.44263 10.292 8.25504C10.3597 8.06745 10.4652 7.89573 10.6019 7.75051C10.7385 7.60528 10.9036 7.48964 11.0867 7.41072C11.2699 7.3318 11.4672 7.29128 11.6667 7.29167H21.875V0.729168C21.875 0.535781 21.7982 0.350315 21.6614 0.213569C21.5247 0.076824 21.3392 1.1498e-06 21.1458 1.1498e-06H10.8099C10.427 -0.000339916 10.0478 0.0752001 9.69421 0.222257C9.34065 0.369313 9.01973 0.584972 8.75 0.856772L0.856772 8.75C0.584972 9.01973 0.369313 9.34065 0.222257 9.69421C0.0752001 10.0478 -0.000339916 10.427 1.1498e-06 10.8099V32.0833C1.1498e-06 32.8569 0.307292 33.5987 0.854273 34.1457C1.40125 34.6927 2.14312 35 2.91667 35H32.0833C32.8569 35 33.5987 34.6927 34.1457 34.1457C34.6927 33.5987 35 32.8569 35 32.0833V2.91667C35 2.14312 34.6927 1.40125 34.1457 0.854273C33.5987 0.307292 32.8569 1.1498e-06 32.0833 1.1498e-06ZM17.5 26.25C16.4905 26.25 15.5037 25.9506 14.6643 25.3898C13.8249 24.8289 13.1707 24.0318 12.7844 23.0991C12.398 22.1665 12.297 21.1402 12.4939 20.1501C12.6909 19.16 13.177 18.2505 13.8908 17.5366C14.6046 16.8228 15.5141 16.3367 16.5042 16.1397C17.4943 15.9428 18.5206 16.0439 19.4533 16.4302C20.3859 16.8165 21.1831 17.4707 21.744 18.3101C22.3048 19.1495 22.6042 20.1363 22.6042 21.1458C22.5994 22.4981 22.0601 23.7935 21.1039 24.7497C20.1477 25.7059 18.8522 26.2452 17.5 26.25Z"
                                            fill="url(#paint0_linear_2957_105064)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_2957_105064" x1="17.5"
                                                y1="0" x2="31.5419" y2="0"
                                                gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#213969" />
                                                <stop offset="1" stop-color="#204387" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <p class="text-primary mb-0 fw-medium"> Attach from Device </p>
                                </label>
                                <input style=" opacity: 0; z-index: -1; position: absolute;" id="file"
                                    class="" wire:model="file" type="file">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div x-show="isUploading">
                                <progress max="100" x-bind:value="progress"></progress>
                            </div>
                            <div class="">
                                @if ($file)
                                    {{ $this->file->getClientOriginalName() }}
                                @endif
                            </div>
                        </div>
                        @error('file')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form-check mb-4 {{session()->get('isProvider') ? 'hidden' : ''}}">
            <input wire:model.defer="reimbursement.charge_to_customer" class="form-check-input" type="checkbox"
                value="" id="charge-To-customer" checked>
            <label class="form-check-label" for="charge-To-customer">
                Charge to Customer
            </label>
        </div>
        <div class="col-12 justify-content-center form-actions d-flex gap-3">
            {{-- <button class="btn btn-outline-primary rounded" x-on:click="addReimbursement = !addReimbursement"> --}}
            {{-- <button wire:click.prevent="showList" class="btn btn-outline-primary rounded"> --}}
            <button x-on:click="addReimbursement = !addReimbursement" class="btn btn-outline-primary rounded">
                CANCEL
            </button>
            {{-- <button type="submit" class="btn btn-primary rounded"
                    x-on:click="addReimbursement = !addReimbursement"> --}}
            <button x-on:close-add-reimbursement.window="addReimbursement = false; assignmentDetails = false;"
                wire:click.prevent="save" type="submit" class="btn btn-primary rounded">
                ADD
            </button>
        </div>

    </form>
</div>
@push('scripts')
    <script>
        $('#provider_id').on('change', function() {

            // Call the Livewire component function getProviderAssignments
            Livewire.emit('getProviderAssignments', $(this).val());
        });
        $('#booking_id').on('change', function() {
            @this.set('reimbursement.booking_id', $(this).val());
        });

        function updateVal(attrName, val) {

            Livewire.emit('updateVal', attrName, val);

        }
    </script>
@endpush
