<div>
    
    <div>
        <div id="loader-section" class="loader-section" wire:loading>
          <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
          </div>
        </div>
    @if ($showForm)
        @livewire('app.admin.forms.teams-form')
    @elseif($showProfile)
        @livewire('app.admin.team-details',['teamID'=>$teamID])
    @else
    <div class="content-header row">
        <div class="content-header-left col-12 mb-4">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        Provider Teams
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Home">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- End of update by Shanila --}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">
                                    Providers
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Provider Teams
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--show add/edit form-->
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-md-2">
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <h1>{{ $listTitle }}</h1>
                                        </div>
                                        <div class="col-md-3 ms-auto text-end">
                                            <a href="#" wire:click="showForm" class="btn btn-primary">Add
                                                Provider Team</a>
                                        </div>
                                        {{-- <p>{{ $listDescription }}</p> --}}
                                    </div>
                                </div>
                            </div>
                            @livewire('app.admin.lists.teams', key(Str::random(10)))
        </section>

        <!-- end of list -->
    @endif
</div>
<script>
	function updateVal(attrName,val){

		Livewire.emit('updateVal', attrName, val);

	}
</script>
