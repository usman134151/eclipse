{{-- BEGIN : Header Section --}}
<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">Import Bookings</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    {{-- Updated by Shanila to Add svg icon --}}
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- End of update by Shanila --}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">
                                    Bookings
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)" class="text-secondary">
                                    All Bookings
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h2>Upload Excel File</h2>

                            <input type="file" wire:model="file">
                            <div class="text-muted" wire:loading>
                                Uploading...
                            </div>

                            @error('file')
                                <span class="d-inline-block invalid-feedback mt-2">
                                    {{ $message }}
                                </span>
                            @enderror
                            @if ($warningMessage)
                                <h3 class="mt-4"><span
                                        class='d-inline-block invalid-feedback mt-2'>{{ $warningMessage }}</span></h3>
                            @endif
                            @if ($bookings)
                                <h2 class="mt-5">Preview bookings</h2>
                                <div class="table-responsive">
                                    <table id="unassigned_data" class="table" aria-label="Admin Staff Teams Table">
                                        <thead>
                                            <tr role="row">

                                                <th scope="col">Booking</th>
                                                <th scope="col">Details</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $booking)
                                                <tr role="row" class="odd">

                                                    <td width=33%>
                                                        <div class="row g-2">

                                                            <div class="col-md-10">

                                                                <div class="mt-2">
                                                                    <label class="form-label-sm" for="First Name">Booking
                                                                        Number</label>
                                                                    <input type="text"
                                                                        wire:model.defer="bookings.{{ $loop->index }}.booking_number"
                                                                        class="form-control" />
                                                                    @error('bookings.' . $loop->index .
                                                                        '.booking_number')
                                                                        <span
                                                                            class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="mt-2">
                                                                    <label class="form-label-sm" for="company">
                                                                        Company
                                                                    </label>

                                                                    <select class="form-select"
                                                                        name="bookings.{{ $loop->index }}.company_id"
                                                                        id="bookings.{{ $loop->index }}.company_id"
                                                                        wire:model='bookings.{{ $loop->index }}.company_id'>
                                                                        <option value="0">Select Option</option>
                                                                        @foreach ($companies as $company)
                                                                            <option value="{{ $company->id }}">
                                                                                {{ $company->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('bookings.' . $loop->index . '.company_id')
                                                                        <span
                                                                            class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="mt-2">
                                                                    <label class="form-label-sm" for="Language">
                                                                        Requester
                                                                    </label>
                                                                    <select class="form-select"
                                                                        wire:model='bookings.{{ $loop->index }}.customer_id'>
                                                                        <option value="0">Select Option</option>
                                                                        @if (key_exists('company_id',$booking) && isset($requesters[$bookings[$loop->index]['company_id']]))
                                                                            @foreach ($requesters[$bookings[$loop->index]['company_id']] as $user)
                                                                                <option value="{{ $user['id'] }}">
                                                                                    {{ $user['name'] }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                                <div class="mt-2">
                                                                    <label class="form-label-sm" for="Language">
                                                                        Booking Total
                                                                    </label>
                                                                    <input type="text"
                                                                    wire:model.defer="bookings.{{ $loop->index }}.override_amount"
                                                                    class="form-control" />
                                                                </div>                                                               


                                                    </td>
                                                    <td width=66%>


                                                        <div class="row">
                                                            <div class="col-lg-6 col-12 mt-2">
                                                                <label class="form-label-sm" for="First Name">Accommodation
                                                                </label>
                                                                <select class="form-select"
                                                                    wire:model='bookings.{{ $loop->index }}.accommodation_id'>
                                                                    <option value="0">Select Option</option>
                                                                    @foreach ($accommodations as $accom)
                                                                        <option value="{{ $accom->id }}">
                                                                            {{ $accom->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <div class="col-lg-6 col-12 mt-2">
                                                                <label class="form-label-sm" for="First Name">Service
                                                                </label>
                                                                <select class="form-select"
                                                                    wire:model='bookings.{{ $loop->index }}.service_id'>
                                                                    <option value="0">Select Option</option>
                                                                    @if (key_exists('accommodation_id',$booking) && isset($services[$bookings[$loop->index]['accommodation_id']]))
                                                                        @foreach ($services[$bookings[$loop->index]['accommodation_id']] as $service)
                                                                            <option value="{{ $service['id'] }}">
                                                                                {{ $service['name'] }}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-lg-6 col-12 mt-2">
                                                                <label class="form-label-sm" for="First Name">Industry
                                                                </label>
                                                                <select class="form-select"
                                                                    wire:model='bookings.{{ $loop->index }}.industry_id'>
                                                                    <option value="0">Select Option</option>
                                                                  
                                                                        @foreach ($industries as $industry)
                                                                            <option value="{{ $industry['id'] }}">
                                                                                {{ $industry['name'] }}</option>
                                                                        @endforeach
                                                                   
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6 col-12 x">
                                                                <label class="form-label-sm mt-2" for="First Name">Provider
                                                                    Count</label>
                                                                <input type="text"
                                                                    wire:model.defer="bookings.{{ $loop->index }}.provider_count"
                                                                    class="form-control" />
                                                            </div>
                                                            <div class="col-lg-6 col-12 mt-2">
                                                                <label class="form-label-sm" for="First Name">Service
                                                                    Type</label>
                                                                <select class="form-select"
                                                                    wire:model='bookings.{{ $loop->index }}.service_type'>
                                                                    <option value="0">Select Option</option>
                                                                    @foreach ($serviceType as $val => $id)
                                                                        <option value="{{ $id }}">
                                                                            {{ $val }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-lg-6 col-md-6 mb-4 mt-2">
                                                                <label class="form-label-sm" for="set_time_zone">
                                                                    Time Zone <span class="mandatory">*</span></label>
                                                                <select class="form-select mb-2"
                                                                    wire:model.defer='bookings.{{ $loop->index }}.timezone'
                                                                    id="timezone_{{ $loop->index }}"
                                                                    name="timezone_{{ $loop->index }}">
                                                                    @foreach ($timezones as $zone)
                                                                        <option value="{{ $zone['id'] }}">
                                                                            {{ $zone['setup_value_label'] }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                              <div class="col-lg-6 col-12 mt-2">
                                                                    <label class="form-label-sm" for="status">
                                                                        Status
                                                                    </label>
                                                                    <select class="form-select" id="status"
                                                                        wire:model='bookings.{{ $loop->index }}.status'>
                                                                        <option value="0">Select Option</option>
                                                                            @foreach ($statuses as $status)
                                                                                <option value="{{ $status }}">
                                                                                    {{ $status }}</option>
                                                                            @endforeach
                                                                     
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-auto col-md-6 mb-4 mt-2">
                                                                <label class="form-label-sm"
                                                                    for="start_date_{{ $loop->index }}">Start Date
                                                                    <span class="mandatory">*</span></label>
                                                                <div class="position-relative">
                                                                    <input type="" name=""
                                                                        class="form-control form-control-md js-single-date"
                                                                        placeholder="MM/DD/YYYY"
                                                                        id="start_date_{{ $loop->index }}"
                                                                        value="{{ $bookings[$loop->index]['booking_start_date'] }}"
                                                                        aria-label="Set Start Date"
                                                                        wire:model="bookings.{{ $loop->index }}.booking_start_date"
                                                                        style="width:200px">

                                                                    <svg aria-label="Date" class="icon-date md"
                                                                        width="20" height="20"
                                                                        viewBox="0 0 20 20" fill="currentColor">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#datefield-icon">
                                                                        </use>
                                                                    </svg>

                                                                </div>
                                                                @error('bookings.' . $loop->index . '.start_date')
                                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                                        Start date is required
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="d-flex col-lg-auto mb-4 mt-2">
                                                                <div class="d-flex flex-column">
                                                                    <label class="form-label-sm"
                                                                        for="set_start_time">Start Time</label>
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="time d-flex align-items-center gap-2">
                                                                            <select
                                                                                wire:model.defer="bookings.{{ $loop->index }}.start_hour">
                                                                                @for ($i = 0; $i < 24; $i++)
                                                                                    <option
                                                                                        value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                                                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                                                                    </option>
                                                                                @endfor

                                                                            </select>

                                                                            <svg aria-label="colon" width="5"
                                                                                height="19" viewBox="0 0 5 19">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#date-colon">
                                                                                </use>
                                                                            </svg>

                                                                            <select
                                                                                wire:model.defer="bookings.{{ $loop->index }}.start_min">
                                                                                @for ($i = 0; $i < 59; $i++)
                                                                                    <option
                                                                                        value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                                                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                                                                    </option>
                                                                                @endfor

                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-auto mb-4 mt-2">
                                                                <label class="form-label-sm"
                                                                    for="end_date_{{ $loop->index }}">End Date<span
                                                                        class="mandatory">*</span></label>
                                                                <div class="position-relative">
                                                                    <input type="" name=""
                                                                        class="form-control form-control-md js-single-date"
                                                                        placeholder="MM/DD/YYYY"
                                                                        id="end_date_{{ $loop->index }}"
                                                                        aria-label="Set End Date"
                                                                        wire:key="endtime-{{ $loop->index }}"
                                                                        wire:model="bookings.{{ $loop->index }}.booking_end_date"
                                                                        style="width:200px">

                                                                    <svg aria-label="Date" class="icon-date md"
                                                                        width="20" height="20"
                                                                        viewBox="0 0 20 20" fill="currentColor">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#datefield-icon">
                                                                        </use>
                                                                    </svg>

                                                                </div>
                                                                @error('bookings.' . $loop->index . '.end_date')
                                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="d-flex col-lg-auto mb-4 mt-2">
                                                                <div class="d-flex flex-column">
                                                                    <label class="form-label-sm"
                                                                        for="set_start_time">End Time</label>
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="time d-flex align-items-center gap-2">
                                                                            <select
                                                                                wire:model.defer="bookings.{{ $loop->index }}.end_hour">
                                                                                @for ($i = 0; $i < 24; $i++)
                                                                                    <option
                                                                                        value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                                                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                                                                    </option>
                                                                                @endfor

                                                                            </select>

                                                                            <svg aria-label="colon" width="5"
                                                                                height="19" viewBox="0 0 5 19">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#date-colon">
                                                                                </use>
                                                                            </svg>

                                                                            <select
                                                                                wire:model.defer="bookings.{{ $loop->index }}.end_min">
                                                                                @for ($i = 0; $i < 59; $i++)
                                                                                    <option
                                                                                        value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                                                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                                                                    </option>
                                                                                @endfor

                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                </div>


                                </td>

                                </tr>
                            @endforeach









                            </tbody>
                            </table>
                        </div>

                        <button wire:click="save"
                            class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">Import
                            Data</button>
                        <span class="d-inline-block invalid-feedback mt-2">{{ $errorMessage }}</span>
                        @endif
                    </div>



                </div>
            </div>
        </div>
    </section>
    @push('scripts')

<script>
        function updateVal(attrName,val){
        
        Livewire.emit('updateVal', attrName, val);

    }
    @endpush
</div>
