@props([
'type'=>'',
'tags'=>[],
'providers'=>[],
])
<div class="row" wire:ignore>
    @if($type=='assignProvider')
        <div class="col-lg-6 mb-4">
            <label class="form-label">Accommodation</label>
            {!! App\Helpers\SetupHelper::createDropDown('Accommodation', 'id',
            'name', 'status', 1, 'name', true, 'accommodations',
            '','accommodation_filter') !!}
        </div>
    @endif
    <div class="{{ $type=='assignProvider'?'col-lg-6':'col-lg-5' }} ps-lg-3 mb-4">
        <label class="form-label" for="service">Filter by Service</label>
        {!! App\Helpers\SetupHelper::createDropDown('ServiceCategory', 'id',
        'name', 'service_status', 1, 'name', true, 'services',
        '','Service_filter') !!}
    </div>
    <div class="{{ $type=='assignProvider'?'col-lg-6':'col-lg-5' }} pe-lg-3 mb-4">
        <label class="form-label">Specialization</label>
        {{-- updated by shanila to add multiselectdropdown --}}
        {!! App\Helpers\SetupHelper::createDropDown('Specialization', 'id',
        'name', 'status', 1, 'name', true, 'specializations',
        '','specialization_search_filter') !!}
        {{--ended updated--}}
    </div>
    
    @if($type=='assignProvider')
        <div class="col-lg-6 pe-lg-3 mb-4">
            <div class="d-lg-flex justify-content-between align-items-center">
                <label class="form-label mb-lg-0">Associated Tags</label>
                <div class="form-check">
                    <input class="form-check-input" id="MatchAll" name="" type="checkbox" tabindex="">
                    <label class="form-check-label" for="MatchAll">
                        <small>Match All</small>
                    </label>
                </div>
            </div>
            <select data-placeholder="" multiple
                    class="form-select  select2 form-select select2-hidden-accessible" tabindex="" id="tags_selected{{$type}}"  aria-label="Select Tags">
                                                                
                    <option value=""></option>
                    @if (isset($tags))
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                        @endforeach
                    @endif
                </select>
           
        </div>
        @else
    <div class="col-lg-2 d-flex text-nowrap align-items-center align-self-end mb-4">
        <a class="btn btn-inactive dropdown-toggle rounded" data-bs-toggle="collapse" href="#collapseAdvanceFilter{{$type}}"
            role="button" aria-expanded="false" aria-controls="collapseAdvanceFilter{{$type}}">
            <span class="">Advance Filter</span>
        </a>
    </div>
   
    @endif    

</div>
<div class="collapse" id="collapseAdvanceFilter{{$type}}" wire:ignore>
    <div class="col-lg-12">
        <div class="row">
            
            @if($type!='assignProvider')
                <div class="col-lg-5 ps-lg-3 mb-4">
                    <label class="form-label">Service Type</label>
                    {{-- updated by shanila to add multiselectdropdown --}}
                    {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id',
                    'setup_value_label', 'setup_id', '5', 'id',true,"service_type_ids",'form-check ') !!}
                    {{--ended updated--}}
                </div>
                <div class="col-lg-5 ps-lg-3 mb-4">
                    <label class="form-label" for="providers_selected">Provider</label>
                    <select wire:model.defer="provider_ids" data-placeholder="Select Provider" multiple class="select2 form-select" tabindex=""
                        id="providers_selected">
                        <option value=""></option>
                        @foreach($providers as $provider)
                            <option value="{{$provider->id}}">{{$provider->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="{{ $type=='assignProvider'?'col-lg-6':'col-lg-5' }} pe-lg-3 mb-4">
                    <label class="form-label" for="tags_selected">Tags</label>
                    <select wire:model.defer="tag_names" data-placeholder="Select Tags" multiple class="select2 form-select" tabindex="" id="tags_selected">
                        <option value=""></option>
                        @foreach($tags as $tag)
                            <option value="{{$tag->name}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            <div class="{{ $type=='assignProvider'?'col-lg-6':'col-lg-5' }} mb-4">
                <div class="d-lg-flex justify-content-between align-items-center">
                    <label class="form-label mb-lg-0">Preferred Providers</label>
                    @if($type=='assignProvider')
                        <div class="form-check">
                            <input class="form-check-input" id="MatchAllPreferredProviders" name=""
                                type="checkbox" tabindex="">
                            <label class="form-check-label" for="MatchAllPreferredProviders">
                                <small>Match All</small>
                            </label>
                        </div>
                    @endif
                </div>
                <select wire:model.defer="preferred_provider_ids" disabled data-placeholder="Select Preferred Providers" multiple
                    class="select2 form-select" tabindex="8" id="preferred_provider_ids">
                    <option value=""></option>
                    @foreach($providers as $provider)
                        <option value="{{$provider->id}}">{{$provider->name}}</option>
                    @endforeach
                </select>
                @if($type=='assignProvider')
                    <div class="mt-2">
                    <small>(coming soon)</small>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="Requester" name="" type="checkbox"
                                tabindex="">
                            <label class="form-check-label"
                                for="Requester"><small>Requester</small></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="ServiceConsumers" name=""
                                type="checkbox" tabindex="">
                            <label class="form-check-label" for="ServiceConsumers"><small>Service
                                    Consumer(s)</small></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="Participants" name=""
                                type="checkbox" tabindex="">
                            <label class="form-check-label"
                                for="Participants"><small>Participant(s)</small></label>
                        </div>
                    </div>
                @endif
            </div>
            @if($type=='assignProvider')
                <div class="{{ $type=='assignProvider'?'col-lg-6':'col-lg-5' }} mb-4">
                    <label class="form-label">Preferred Team Providers
                    <small>(coming soon)</small>
                    </label>
                    <select data-placeholder="Select Accommodation" multiple
                        class="select2 form-select" tabindex="8" disabled>
                        <option value=""></option>
                     
                    </select>
                    <div class="mt-2">
                        <div class="form-check">
                            <input class="form-check-input" id="AssignedProviders" name=""
                                type="checkbox" tabindex="">
                            <label class="form-check-label" for="AssignedProviders"><small>Assigned
                                    Providers</small></label>
                        </div>
                    </div>
                </div> 
            @endif
            <div class="{{ $type=='assignProvider'?'col-lg-4':'col-lg-5' }} mb-4">
                <label class="form-label">Gender</label>
                {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id',
                'setup_value_label', 'setup_id', 2, 'setup_value_label', false, 'gender',
                '','gender') !!}
            </div>
            <div class="{{ $type=='assignProvider'?'col-lg-4':'col-lg-5' }} mb-4">
                <label class="form-label">Ethnicity</label>
                {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id',
                'setup_value_label', 'setup_id', 3, 'setup_value_label', false, 'ethnicity',
                '','ethnicity') !!}
            </div>
            <div class="{{ $type=='assignProvider'?'col-lg-4':'col-lg-5' }} mb-4">
                <label class="form-label">Certification</label>
                {{-- updated by shanila to add multiselectdropdown --}}
                {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id', 'setup_value_label', 'setup_id', 8, 'setup_value_label', true, 'certifications','','certifications') !!}
                {{--ended updated--}}
            </div>
            @if($type=='assignProvider')
                <div class="col-lg-4 mb-4">
                    <div class="d-lg-flex justify-content-between align-items-center mb-2">
                        <label class="form-label mb-lg-0">Distance</label><small>(coming soon)</small>
                        <div>
                            MILES
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 12.0837V15H3.91626L12.5173 6.39897L9.60103 3.48271L1 12.0837ZM14.7725 4.14373C15.0758 3.84044 15.0758 3.35051 14.7725 3.04722L12.9528 1.22747C12.6495 0.924177 12.1596 0.924177 11.8563 1.22747L10.4331 2.6506L13.3494 5.56687L14.7725 4.14373Z"
                                    fill="#0A1E46" />
                            </svg>
                        </div>
                    </div>
                    <select data-placeholder="Select Distance" class="select2 form-select"  wire:model.defer='distance' id="distance_filter" disabled >
                        <option ></option>
                        <option value='5'>5</option>
                        <option value='15'>15</option>
                        <option value='25'>25</option>
                        <option value='35'>35</option>
                        <option value='45'>45</option>
                        <option value='55'>55</option>
                        <option value='65'>65</option>
                        <option value='75'>75</option>
                        <option value='85'>85</option>
                        <option value='95'>95</option>
                        <option value='100'>100</option>

                    </select>
                    <div class="mt-2 d-flex gap-2">
                        <div class="form-check">
                            <input class="form-check-input" id="ReimburseTravelTime" name=""
                                type="checkbox" tabindex="">
                            <label class="form-check-label"
                                for="ReimburseTravelTime"><small>Reimburse Travel
                                    Time</small></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="ReimburseTravelTime" name=""
                                type="checkbox" tabindex="">
                            <label class="form-check-label"
                                for="ReimburseTravelTime"><small>Reimburse Mileage</small></label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <label class="form-label">Search</label>
                    <input class="form-control" wire:model.defer="search" id="search"  placeholder="Name Search">
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="mt-5 d-flex gap-1">
                        <div class="form-check">
                            <input class="form-check-input" id="ProviderAvailability" name=""
                                type="checkbox" tabindex="">
                            <label class="form-check-label text-nowrap"
                                for="ProviderAvailability"><small>Provider
                                    Availability</small></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="ProviderServiceRadius" name=""
                                type="checkbox" tabindex="">
                            <label class="form-check-label text-nowrap"
                                for="ProviderServiceRadius"><small>Provider Service
                                    Radius</small></label>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@if($type=='assignProvider')  
        <div class="col-lg-12 d-flex justify-content-start gap-2 mb-4">
        <div class="mb-4 mb-lg-0">
                <button wire:click="refreshProviders" type="button" class="btn btn-xs btn-outline-dark rounded">
                    Apply Filters
                </button>
            </div>
            <div class="mb-4 mb-lg-0">
                <button wire:click="resetFilters" type="button" class="btn btn-xs btn-outline-dark rounded">
                    Clear all
                </button>
            </div>
            <div class="mb-4 mb-lg-0">
                <button class="btn btn-xs btn-inactive dropdown-toggle bg-secondary rounded"
                    data-bs-toggle="collapse" href="#collapseAdvanceFilter{{$type}}" role="button"
                    aria-expanded="false" aria-controls="collapseAdvanceFilter{{$type}}">
                    Advance Filter
                </button>
            </div>


        </div>
        @endif
