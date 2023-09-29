<div class="row">
                                    <div class="card-body">
                                      
                                            {{-- update ended by shanila --}}
                                            <div class="col-md-10">
                                                <h2>Service Catalog</h2>
                                            </div>
                                            <div class="col-md-12 between-section-segment-spacing">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <p class="fs-5">
                                                                    Filter By Accommodation
                                                                </p>
                                                                <a href="#" wire:click="resetCatalog" title="Reset" aria-label="Reset" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    <svg aria-label="Reset" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <use xlink:href="/css/provider.svg#revert"></use>
                                                                    </svg>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <div class="content-body">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <form class="form">
                                                                        <div class="overflow-y-auto">
                                                                            <table id="unassigned_data"
                                                                                class="table table-hover"
                                                                                aria-label="Admin Staff Teams Table">
                                                                                <tbody>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="search-record" name="search"
                                                                                        placeholder="Search"
                                                                                        autocomplete="on"
                                                                                        aria-label="Search" 
                                                                                        wire:model.debounce.500ms="searchParameter"
                                                                                        x-on:keydown.enter.prevent
                                                                                        wire:keyup="filterResults" />
                                                                                        @foreach($accomodations as $accomodation)
                                                                                    <tr role="row" class="odd">
                                                                                      
                                                                                        <td class="text-start">
                                                                                            <p wire:click="updateServices({{$accomodation['id']}})">
                                                                                               {{$accomodation['name']}}
                                                                                            </p>
                                                                                        </td>

                                                                                    </tr>
                                                                                    @endforeach
                                                                                   
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-7">
                                                        <div class="mb-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                                <p class="fs-5">
                                                                   Select Service(s)
                                                                </p>
                                                                <a href="#" wire:click="resetCatalog" title="Reset" aria-label="Reset" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    <svg aria-label="Reset" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <use xlink:href="/css/provider.svg#revert"></use>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-body" >
                                                                
                                                                    <div class="overflow-y-auto">
                                                                        <table id="unassigned_data"
                                                                            class="table table-hover"
                                                                            aria-label="Admin Staff Teams Table">
                                                                            <tbody>
                                                                                <input type="text"
                                                                                    class="form-control" name="search"
                                                                                    placeholder="Search"
                                                                                    autocomplete="on"
                                                                                    aria-label="Search"
                                                                                    wire:model.debounce.500ms="serviceSearch"
                                                                                    x-on:keydown.enter.prevent
                                                                                    wire:keyup="filterResults('servicesList','services','serviceSearch')" />
                                                                                    <tr>
                                                                                            <th>Service</th>
                                                                                            @if($modelType=='provider')
                                                                                            <th>Priority</th>
                                                                                            @endif
                                                                                            <th>Status</th>
                                                                                            @if($showRates!='no' || $modelType!='provider')
                                                                                            <th @if($isCustomer) class="hidden" @endif>Actions</th>
                                                                                            @endif
                                                                                        </tr>
                                                                                    @foreach($this->services as $index=>$service)
                                                                                       

                                                                                        <tr role="row" class="odd">
                                                                                            <td class="text-start">
                                                                                                <p>{{$service['name']}}</p>
                                                                                            </td>
                                                                                            @if($modelType=='provider')
                                                                                                <td><input aria-label="priority" style="width: 60px;padding: 0.5rem;" type="text" size="2" class="form-control" maxlength="3" wire:model.lazy="services.{{$index}}.provider_priority"  wire:blur="updatePriority({{ $index }})"></td>
                                                                                            @endif
                                                                                            <td>
                                                                                                <div
                                                                                                    class="form-check form-switch">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        type="checkbox"
                                                                                                        role="switch"
                                                                                                        value="1"
                                                                                                        aria-label="Toggle Status" wire:model="services.{{$index}}.activated"
                                                                                                        wire:click="updateService({{$index}})">

                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="d-flex actions">
                                                                                                    @if($showRates!='no' || $modelType!='provider')
                                                                                                        <a href="javascript:void(0)" wire:click="updateServiceData({{$service['id']}})" title="Add Service Rates" aria-label="Add Service Rates" class="btn btn-sm btn-secondary rounded btn-hs-icon @if($isCustomer) hidden @endif">
                                                                                                            <x-icon name="dollar-icon"/>
                                                                                                        </a>
                                                                                                    @endif
                                                                                                        @if($modelType=='company')
                                                                                                        <a href="javascript:void(0)" wire:click="reloadDepartment({{$modelId}},{{$service['id']}})" title="View Departments" aria-label="View Departments" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                            <x-icon name="building"/>
                                                                                                        </a>
                                                                                                        <a href="#"  @click="associateCustomer = true;$wire.reloadUsers({{$service['id']}})" title="user-group" aria-label="user-group" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                            <x-icon name="user-group"/>
                                                                                                        </a>
                                                                                                        @elseif($modelType=='department')
                                                                                                        <a href="#"  @click="associateCustomer = true;$wire.reloadDepartmentUsers({{$service['id']}})" title="user-group" aria-label="user-group" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                            <x-icon name="user-group"/>
                                                                                                        </a>
                                                                                                        @endif

                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>

                                                                         
                                                                                    @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                       
                                    </div>

                                </div>
