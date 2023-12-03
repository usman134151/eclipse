<div>
    <div class="inner-section-segment-spacing">
        <p>Add new payment for an individual provider, multiple providers and or for a team. When adding a new
            payment for the team you can split the amount equally in the team or pay the same to each team member.
        </p>
    </div>
    <div class="row ">
        {{-- <div class="mb-4">
                <label class="form-label" for="">
                    Select Providers Or Team <span class="mandatory">*</span>
                </label>
                <button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup d-flex align-items-center gap-1"
                    data-bs-toggle="modal" data-bs-target="#ProvidersOrTeamModal">
                    <div>
                        <svg aria-label="Providers Or Team" width="25" height="18" viewBox="0 0 25 18"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.80372 0.945312H1.09069L0 1.03113L7.99841 8.9915L0 16.9514L1.09069 17.0546H6.80372L14.9061 8.9915L6.80372 0.945312Z"
                                fill="#0A1E46"></path>
                            <path
                                d="M16.8975 0.945312H11.1844L10.0938 1.03113L18.0922 8.9915L10.0938 16.9514L11.1844 17.0546H16.8975L24.9999 8.9915L16.8975 0.945312Z"
                                fill="#0A1E46"></path>
                        </svg>
                    </div>
                    <div class="text-primary fw-semibold">
                        Providers Or Team
                    </div>
                </button>
            </div> --}}
        <div class="mb-4">
            <label class="form-label" for="provider_id">
                Provider
            </label>
            {{-- <input type="text" class="form-control" name="provider" placeholder="Imogene Guthrie"
                    aria-label="Provider" /> --}}
            <select wire:model.defer="payment.provider_id" data-placeholder="Select Provider" class="select2 form-select"
                tabindex="" id="provider_id">
                <option value=""></option>
                @foreach ($providers as $provider)
                    <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                @endforeach
            </select>
            @error('payment.provider_id')
                <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label class="form-label" for="ReasonforPayment">
                Reason for Payment
            </label>
            <input wire:model.defer="payment.reason" class="form-control" id="ReasonforPayment"
                placeholder="Reason for Payment">

            @error('payment.reason')
                <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
            @enderror
        </div>
        <div class="between-section-segment-spacing">
            <label class="form-label" for="Amount">
                Amount <span class="mandatory">*</span>
            </label>
            <input wire:model.defer="payment.total_amount" class="form-control" id="Amount" placeholder="$00.00">

            @error('payment.total_amount')
                <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <div class="form-check">
                <input class="form-check-input" disabled type="checkbox" value="" id="ChargetoCustomer">
                <label class="form-check-label" for="ChargetoCustomer">
                    Charge to Customer (coming soon)
                </label>
            </div>
        </div>
    </div>
    {{-- <div class="mb-5">
            <label class="form-label" for="PaymentOptions">
                Payment Options
            </label>
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="PaymentOptions" id="SplitBetweenProviders">
                <label class="form-check-label" for="SplitBetweenProviders">
                    Split between providers
                </label>
            </div>
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="PaymentOptions" id="MultipleByProviders" checked>
                <label class="form-check-label" for="MultipleByProviders">
                    Multiple by providers
                </label>
            </div>
        </div>
        <div class="between-section-segment-spacing">
            <label class="form-label" for="TotalSelectedProviders">Total Selected Providers</label>
            <div>Teams: 1</div>
            <div>Providers: 10</div>
            <div>Payable Amount: $00.00</div>
        </div> --}}
    <div class="form-actions d-flex gap-3">
        <button type="button" x-on:click="addNewPayment = !addNewPayment"
            class="btn btn-outline-dark rounded">CANCEL</button>
        <button x-on:close-add-new-payment.window="addNewPayment = !addNewPayment" wire:click.prevent="addPayment"
            type="submit" class="btn btn-primary rounded">ADD</button>
    </div>
    {{-- @include('modals.provider-team-modal') --}}
</div>
