@props([
'type'=>''
])
<div class="row">
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
<div class="collapse" id="collapseAdvanceFilter">
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
        </div>
    </div>
</div>
