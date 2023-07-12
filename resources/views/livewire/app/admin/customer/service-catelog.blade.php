<div class="row">
                                    <div class="card-body">
                                        <form class="form">
                                            {{-- updated by shanila to add csrf--}}
                                            @csrf
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
                                                                                        wire:keyup="filterResults" />
                                                                                        @foreach($accomodations as $accomodation)
                                                                                    <tr role="row" class="odd">
                                                                                      
                                                                                        <td class="text-start" wire:click="updateServices({{$accomodation['id']}})">
                                                                                            <p>
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
                                                            <div class="card-body">
                                                                <form class="form">
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
                                                                                    wire:keyup="filterResults('servicesList','services','serviceSearch')"                                                                                      />
                                                                                    @foreach($this->services as $index=>$service)
                                                                                        <tr role="row" class="odd">
                                                                                            <td class="text-start">
                                                                                                <p>{{$service['name']}}</p>
                                                                                            </td>
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
                                                                                                    <a @click="customers = true"
                                                                                                        href="#"
                                                                                                        title="Customers (coming soon)"
                                                                                                        aria-label="Customers (coming soon)"
                                                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                        <svg aria-label="Customers"
                                                                                                            class="fill"
                                                                                                            width="21"
                                                                                                            height="20"
                                                                                                            viewBox="0 0 21 20"
                                                                                                            fill="none"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <use
                                                                                                                xlink:href="/css/sprite.svg#user-group">
                                                                                                            </use>
                                                                                                        </svg>
                                                                                                    </a>
                                                                                                    <a href="#"
                                                                                                        title="Department  (coming soon)"
                                                                                                        aria-label="Department (coming soon)"
                                                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                        <svg aria-label="Department"
                                                                                                            class="fill"
                                                                                                            width="21"
                                                                                                            height="20"
                                                                                                            viewBox="0 0 21 20"
                                                                                                            fill="none"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <use
                                                                                                                xlink:href="/css/sprite.svg#building">
                                                                                                            </use>
                                                                                                        </svg>
                                                                                                    </a>
                                                                                                </div>
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
                                            </div>


                                        </form>
                                    </div>
                                </div>
