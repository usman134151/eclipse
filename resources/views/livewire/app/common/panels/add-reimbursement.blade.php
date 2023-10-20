<form class="form" wire:submit.prevent="save">
    {{-- updated by shanila to add csrf--}}
    @csrf
    {{-- update ended by shanila --}}
    <div class="row">
        <div class="col-md-10 mb-4">
            <label class="form-label" for="provider_rid">
                Provider
            </label>
            {{-- <input type="text"  class="form-control" name="provider" placeholder="Imogene Guthrie"  aria-label="Provider"/> --}}
            <select wire:model.defer="reimbursement.provider_id" data-placeholder="Select Provider" class="select2 form-select"
                tabindex="" id="provider_rid">
                <option value=""></option>
                @foreach($providers as $provider)
                <option value="{{$provider->id}}">{{$provider->name}}</option>
                @endforeach
            </select>
            @error('reimbursement.provider_id')
            <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mb-4">
            <label class="form-label" for="booking_id">
                Assignment No.
            </label>
            {{-- <input type="text" id="assignment-no" class="form-control" name="assignment-no" placeholder="100995-6" /> --}}
            <select wire:model="reimbursement.booking_id" data-placeholder="Select Assignment No." class="select2 form-select"
                tabindex="" id="booking_id">
                <option value=""></option>
                @foreach($assignments as $assign)
                <option value="{{$assign->id}}">{{$assign->booking_number}}</option>
                @endforeach
            </select>
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
                <input wire:model.defer="reimbursement.reason" class="form-check-input" type="radio" name="reason-for-reimbursement" id="mileage"
                    checked="">
                <label for="mileage" class="form-check-label">Mileage</label>
            </div>
            <div class="form-check">
                <label for="compensated-travel-time" class="form-check-label mb-2">Compensated Travel Time</label>
                <input wire:model.defer="reimbursement.reason" class="form-check-input show-hidden-content" type="radio" name="reason-for-reimbursement"
                    id="compensated-travel-time" checked="">
                <div class="hidden-content col-lg-4">
                    <div class="d-flex justify-content-around">
                        <label class="form-label-sm">Hours</label>
                        <label class="form-label-sm">Minutes</label>
                    </div>
                    <div class="input-group">
                        <input wire:model.defer="time.hours" type="text" class="form-control form-control-md text-center" placeholder="00"
                            aria-label="00" aria-describedby="">
                        <input wire:model.defer="time.mins" type="text" class="form-control form-control-md text-center" placeholder="00"
                            aria-label="00" aria-describedby="">
                    </div>
                </div>
            </div>
            <div class="form-check">
                <label for="" class="form-check-label">Other</label>
                <input wire:model.defer="reimbursement.reason" class="form-check-input show-hidden-content" type="radio" name="reason-for-reimbursement"
                    id="reason-for-reimbursement" checked="">
                <div class="hidden-content">
                    <input wire:model.defer="other.detail" type="text" id="" class="form-control" name="" placeholder="Reason for Reimbursement"
                        aria-label="Reason for Reimbursement">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mb-4">
            <div>
                <div class="">
                    <label class="form-label" for="reimbursement-amount">
                        Reimbursement Amount
                    </label>
                    <input wire:model.defer="reimbursement.amount" type="text" id="reimbursement-amount" class="form-control" name="reimbursement-amount"
                        placeholder="$00.00">
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-10">
            <label class="form-label" for="upload-document">
                Receipt for Reimbursement
            </label>
            <input wire:model.defer="reimbursement.file" type="file" id="upload-document" class="form-control" name="upload-document"
                placeholder="upload-document" />
        </div>
    </div>
    <div class="form-check mb-4">
        <input wire:model.defer="reimbursement.charge_to_customer" class="form-check-input" type="checkbox" value="" id="charge-To-customer" checked>
        <label class="form-check-label" for="charge-To-customer">
            Charge to Customer
        </label>
    </div>
    <div class="col-12 justify-content-center form-actions d-flex gap-3">
        {{-- <button class="btn btn-outline-primary rounded" x-on:click="addReimbursement = !addReimbursement"> --}}
        <button wire:click.prevent="showList" class="btn btn-outline-primary rounded">
            CANCEL
        </button>
        {{-- <button type="submit" class="btn btn-primary rounded" x-on:click="addReimbursement = !addReimbursement"> --}}
        <button wire:click.prevent="save" type="submit" class="btn btn-primary rounded">
            ADD
        </button>
    </div>

</form>
@push('scripts')
    <script>
        $('#provider_rid').on('change', function () {

            // Call the Livewire component function addPhone
            Livewire.emit('getProviderAssignments', $(this).val());
        });
    </script>
@endpush