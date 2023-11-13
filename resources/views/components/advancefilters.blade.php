@props(['type' => '', 'hideProvider' => false, 'filterProviders' => [], 'bmanagers' => [], 'setupValues' => []])
<div class="row">
    @if ($type == 'invoice-filters')
        <div class="col-lg-5 pe-lg-3 ">
            <div>
                <label class="form-label" for="company-column-1">Company</label>
                {!! $setupValues['companies']['rendered'] !!}

            </div>
        </div>
        <div class="col-lg-5 ps-lg-3">
            <div>
                <label class="form-label" for="Billing-Manager">Billing Manager</label>


                <select wire:model='filter_bmanager' name="filter_bmanager" class="select2 form-select"
                    id="filter_bmanager">
                    @if (isset($bmanagers))
                        @foreach ($bmanagers as $bmanager)
                            <option value="{{ $bmanager->id }}">{{ $bmanager->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    @else
        @if (isset($setupValues['accommodations']))
            <div class="col-lg-5 pe-lg-3 ">
                <label class="form-label">Filter by Accommodation</label>
                {!! $setupValues['accommodations']['rendered'] !!}
            </div>
        @endif
        @if (isset($setupValues['services']))
            <div class="col-lg-5 ps-lg-3">
                <label class="form-label" for="service">Filter by Service</label>
                {!! $setupValues['services']['rendered'] !!}
            </div>
        @endif
    @endif
    <div class="col-lg-2 d-flex text-nowrap align-items-center align-self-end " style="margin-left: -10px;">

        <a class="btn btn-inactive dropdown-toggle rounded" data-bs-toggle="collapse" href="#collapseAdvanceFilter"
            role="button" aria-expanded="false" aria-controls="collapseAdvanceFilter">
            <span class="">Advance Filter</span>
        </a>


    </div>

</div>
<div class="collapse" id="collapseAdvanceFilter" wire:ignore>
    <div class="col-lg-12 mt-3">
        <div class="row">
            @if ($type == 'invoice-filters')
                <div class="col-lg-5 pe-lg-3 mb-5">
                    <label class="form-label" for="set_date">Date Range</label>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="Issued">
                            <label class="form-check-label" for="Issued">
                                Issued
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="Due">
                            <label class="form-check-label" for="Due">
                                Due
                            </label>
                        </div>
                    </div>
                    <div class="position-relative">
                        <input type="" name="" class="form-control js-single-date"
                            placeholder="Select Date" id="set_date">
                        <svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                fill="black" />
                        </svg>
                    </div>
                </div>
                <div class="col-lg-5 pe-lg-3 mb-5">
                    <label class="form-label" for="payment-status">Payment Status</label>
                    <select class="select2 form-select" id="payment-status">
                        <option>Select Payment Status</option>
                        <option>Payment Status-1</option>
                        <option>Payment Status-2</option>
                    </select>
                </div>
            @else
                @if (isset($setupValues['specializations']))
                    <div class="col-lg-5 pe-lg-3 mb-5">
                        <label class="form-label">Specialization</label>
                        {!! $setupValues['specializations']['rendered'] !!}
                    </div>
                @endif
                @if (isset($setupValues['service_type_ids']))
                    <div class="col-lg-5 ps-lg-3 mb-5">
                        <label class="form-label">Service Type</label>
                        {!! $setupValues['service_type_ids']['rendered'] !!}

                    </div>
                @endif
                <div class="col-lg-5 pe-lg-3 mb-5">
                    <label class="form-label" for="OrgDeptUser">Company </span>

                    </label>
                    <input type="text" class="form-control" name="name_seacrh_filter" id="name_seacrh_filter"
                        placeholder="Enter Company Name " wire:model.defer="name_seacrh_filter">
                </div>
                <div class="col-lg-5 ps-lg-3 mb-5 {{ $hideProvider ? 'hidden' : '' }}">
                    <label class="form-label" for="provider_ids">Provider</label>
                    <select wire:model.defer="provider_ids" name="provider_ids" id="provider_ids"
                        data-placeholder="Select Provider" multiple class="select2 form-select" tabindex="">
                        <option value=""></option>
                        @if (isset($filterProviders))
                            @foreach ($filterProviders as $provider)
                                <option value="{{ $provider['id'] }}">{{ $provider['name'] }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-lg-5 pe-lg-3 mb-5">
                    <label class="form-label" for="tags">Tags
                        <small>(coming soon)</small>
                    </label>
                    <select wire:model.defer="tag_names" data-placeholder="Select Tags" multiple
                        class="select2 form-select" tabindex="" id="tags_selected">
                        <option value=""></option>
                        @if (isset($tags))
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                @if (isset($setupValues['industries']))
                    <div class="col-lg-5 ps-lg-3 mb-5">
                        <label class="form-label">Industry</label>
                        {!! $setupValues['industries']['rendered'] !!}

                    </div>
                @endif
                <div class="col-lg-5 ps-lg-3 mb-5">
                    <label class="form-label">Status</label>
                    <select data-placeholder="Select Booking Status" wire:model.defer="booking_status_filter"
                        class="select2 form-select" tabindex="" id="booking_status_filter"
                        name="booking_status_filter">
                        <option value=""></option>
                        <option value=1>Approved</option>
                        <option value=0>Pending</option>
                        <option selected=2>Declined</option>

                    </select>
                </div>

                <div class="col-lg-5 ps-lg-3 mb-5">
                    <label class="form-label">Booking Number</label>
                    <input type="text" class="form-control" name="booking_number_filter"
                        id="booking_number_filter" placeholder="Enter Booking Number"
                        wire:model.defer="booking_number_filter">
                </div>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 d-flex mb-5  mt-1">
        <div class="text-start my-1 mb-lg-0 me-1 ">
            <button wire:click="applyFilters" type="button" class="btn btn-xs btn-outline-dark rounded">
                Apply Filters
            </button>
        </div>
        <div class="text-start my-1 mb-lg-0 ">
            <button wire:click="resetFilters" type="button" class="btn btn-xs btn-outline-dark rounded">
                Clear all
            </button>
        </div>
    </div>
</div>
