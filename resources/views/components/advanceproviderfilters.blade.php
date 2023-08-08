@props([
'type'=>'',
'tags'=>[],
'providers'=>[],
])
<div class="row" wire:ignore>
    <div class="col-lg-5 ps-lg-3 mb-5">
        <label class="form-label" for="service">Filter by Service</label>
        {!! App\Helpers\SetupHelper::createDropDown('ServiceCategory', 'id',
        'name', 'service_status', 1, 'name', true, 'services',
        '','Service_filter') !!}
    </div>
    <div class="col-lg-5 pe-lg-3 mb-5">
        <label class="form-label">Specialization</label>
        {{-- updated by shanila to add multiselectdropdown --}}
        {!! App\Helpers\SetupHelper::createDropDown('Specialization', 'id',
        'name', 'status', 1, 'name', true, 'specializations',
        '','specialization_search_filter') !!}
        {{--ended updated--}}
    </div>
    <div class="col-lg-2 d-flex text-nowrap align-items-center align-self-end mb-5">
        <a class="btn btn-inactive dropdown-toggle rounded" data-bs-toggle="collapse" href="#collapseAdvanceFilter"
            role="button" aria-expanded="false" aria-controls="collapseAdvanceFilter">
            <span class="">Advance Filter</span>
        </a>
    </div>
</div>
<div class="collapse" id="collapseAdvanceFilter" wire:ignore>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-5 ps-lg-3 mb-5">
                <label class="form-label">Service Type</label>
                {{-- updated by shanila to add multiselectdropdown --}}
                {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id',
                'setup_value_label', 'setup_id', '5', 'id',true,"service_type_ids",'form-check ') !!}
                {{--ended updated--}}
            </div>
            <div class="col-lg-5 ps-lg-3 mb-5">
                <label class="form-label" for="providers_selected">Provider</label>
                <select wire:model.defer="provider_ids" data-placeholder="Select Provider" multiple class="select2 form-select" tabindex=""
                    id="providers_selected">
                    <option value=""></option>
                    @foreach($providers as $provider)
                        <option value="{{$provider->id}}">{{$provider->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-5 pe-lg-3 mb-5">
                <label class="form-label" for="tags_selected">Tags</label>
                <select wire:model.defer="tag_names" data-placeholder="Select Tags" multiple class="select2 form-select" tabindex="" id="tags_selected">
                    <option value=""></option>
                    @foreach($tags as $tag)
                        <option value="{{$tag->name}}">{{$tag->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-5 mb-4">
                <div class="d-lg-flex justify-content-between align-items-center">
                    <label class="form-label mb-lg-0">Preferred Providers</label>
                    <div class="form-check">
                        <input class="form-check-input" id="MatchAllPreferredProviders" name=""
                            type="checkbox" tabindex="">
                        <label class="form-check-label" for="MatchAllPreferredProviders">
                            <small>Match All</small>
                        </label>
                    </div>
                </div>
                <select data-placeholder="Select Accommodation" multiple
                    class="select2 form-select" tabindex="8">
                    <option value=""></option>
                    <option selected>Thomas Charles</option>
                    <option selected>Paulie Durber</option>
                </select>
                <div class="mt-2">
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
            </div>
            <div class="col-lg-5 mb-4">
                <label class="form-label">Preferred Team Providers</label>
                <select data-placeholder="Select Accommodation" multiple
                    class="select2 form-select" tabindex="8">
                    <option value=""></option>
                    <option selected>Richard Payne</option>
                    <option selected>Mr. Justin Richardson</option>
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
            <div class="col-lg-5 mb-4">
                <label class="form-label">Gender</label>
                {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id',
                'setup_value_label', 'setup_id', 2, 'setup_value_label', false, 'gender',
                '','gender') !!}
            </div>
            <div class="col-lg-5 mb-4">
                <label class="form-label">Ethnicity</label>
                {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id',
                'setup_value_label', 'setup_id', 3, 'setup_value_label', false, 'ethnicity',
                '','ethnicity') !!}
            </div>
            <div class="col-lg-5 mb-4">
                <label class="form-label">Certification</label>
                {{-- updated by shanila to add multiselectdropdown --}}
                {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id', 'setup_value_label', 'setup_id', 8, 'setup_value_label', true, 'certifications','','form-check') !!}
                {{--ended updated--}}
            </div>
        </div>
    </div>
</div>
