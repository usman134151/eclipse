<div x-data="{ accountNumber: true, routingNumber: true }">
    <div class="row mb-0 mt-3">
        <p>Here you can manage your preferred method of compensation for remittance payments.</p>
    </div>
    <div class="col-12 form-actions">
        <div class="mb-0" role="tablist" id="myTab" tabindex="0">
            <button type="button" wire:click.prevent="$set('method',1)" tabindex="0"
                class="btn {{ $method == 1 ? 'btn-outline-primary active' : ' btn-primary' }} " id="direct-deposit-tab"
                data-bs-toggle="tab" data-bs-target="#direct-deposit" type="button" role="tab"
                aria-controls="direct-deposit" aria-selected="true">Direct Deposit</button>
            <button type="button" wire:click.prevent="$set('method',2)" tabindex="0"
                class="btn {{ $method == 2 ? 'btn-outline-primary active' : ' btn-primary' }} mx-2" id="mail-a-check-tab"
                data-bs-toggle="tab" data-bs-target="#mail-a-check" type="button" role="tab"
                aria-controls="mail-a-check" aria-selected="false">Mail a Cheque</button>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade {{ $method == 1 ? 'show active' : '' }}" id="direct-deposit" role="tabpanel"
            aria-labelledby="direct-deposit-tab">
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <label class="form-label" for="bank-name">
                        Bank Name
                    </label>
                    <input type="text" wire:model.defer='payment.bank_name' id="bank-name" class="form-control"
                        name="bank-name" placeholder="Enter Bank Name" />
                    @error('payment.bank_name')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror

                </div>
                <div class="col-lg-5 mb-4">
                    <label class="form-label" for="routing-number">
                        Routing Number
                    </label>
                    <div class="d-flex align-items-center w-100">
                        <div class="position-relative flex-grow-1">
                            <input type="password" :type="routingNumber ? 'password' : 'text'"
                                wire:model.defer='payment.routing_number' id="routing-number" class="form-control"
                                name="routing-number" placeholder="______________" />
                            @error('payment.routing_number')
                                <span class="d-inline-block invalid-feedback mt-2">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>
                        <button type="button" class="btn px-2" @click="routingNumber = !routingNumber">
                            <svg aria-label="View" width="24" height="17" viewBox="0 0 24 17">
                                <use xlink:href="/css/common-icons.svg#black-eye">
                                </use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <label class="form-label" for="account-number">
                        Account Number
                    </label>
                    <div class="d-flex align-items-center w-100">
                        <div class="position-relative flex-grow-1">
                            <input wire:model.defer='payment.account_number' type="password"
                                :type="accountNumber ? 'password' : 'text'" id="account-number" class="form-control"
                                name="account-number" placeholder="______________" />
                            @error('payment.account_number')
                                <span class="d-inline-block invalid-feedback mt-2">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <button type="button" class="btn px-2" @click="accountNumber = !accountNumber">
                            <svg aria-label="View" width="24" height="17" viewBox="0 0 24 17">
                                <use xlink:href="/css/common-icons.svg#black-eye">
                                </use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade {{ $method == 2 ? 'show active' : '' }}" id="mail-a-check" role="tabpanel"
            aria-labelledby="mail-a-check-tab">
            <div class="row">
                <h2>Select Address</h2>
                <small>(coming soon)</small>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="0"
                            wire:model.defer="payment.address_id" name="address_id" id="address_id">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Select Profile Default Address
                        </label>
                    </div>
                    <div class="mb-3 mx-4">
                        <span
                            class="text-secondary">{{ $user->userdetail->address_line1 . ', ' . $user->userdetail->address_line2 . ', ' . $user->userdetail->city . ', ' . $user->userdetail->state . ', ' . $user->userdetail->country . '  ' . $user->userdetail->zip }}
                        </span>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary btn-has-icon rounded mb-4"
                            data-bs-toggle="modal" data-bs-target="#addAddressModal">
                            <svg aria-label="Add Address" width="20" height="21" viewBox="0 0 20 21">
                                <use xlink:href="/css/common-icons.svg#plus"></use>
                            </svg>
                            <span>Add Address</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 justify-content-center form-actions d-flex">

        <button type="submit" wire:click.prevent="{{ $method == 1 ? 'directDeposit' : 'mailCheque' }}"
            class="btn btn-primary rounded">Save</button>
    </div>

</div>
