<div>

    @if ($showForm)
        @livewire('app.admin.forms.teams-form')
    @elseif($showProfile)
        @livewire('app.admin.team-details')
    @else
        <!--show add/edit form-->
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-md-2">
                                    <div class="row mt-3">
                                        <div class="col-md-3">
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
