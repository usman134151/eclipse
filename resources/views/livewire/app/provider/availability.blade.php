<div class="" x-data="{ defaultAvailability: false, specificDateAvailability: false, timeOffSlots: false }">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">Manage Availability</h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                        <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                        Manage Availability
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row inner-section-segment-spacing">
                    <p>Here you can set your default or custom availability to ensure you only receive service requests for
                        dates and times that match your set availability.</p>
                </div>
                @livewire('app.provider.manage-availability', ['provider_id' => Auth::id()])

            </div>
        </div>
        @include('panels.common.default-availability', ['userid' => Auth::id()])
        @include('panels.common.specific-date-availibility', ['userid' => Auth::id()])
			 @include('panels.common.time-off-panel',['userid'=>Auth::id()])

    </div>
    @push('scripts')
    <script>
    function updateVal(attrName,val){
		 if(attrName=='select-days')
		 	Livewire.emit('updateDay', val);
		 else
		 Livewire.emit('updateVal', attrName, val);
		//Livewire.emit('refreshFilters', attrName, val);
	}
    </script>
    @endpush