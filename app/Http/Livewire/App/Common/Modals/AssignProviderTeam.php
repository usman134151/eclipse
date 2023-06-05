<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Team;
use App\Models\Tenant\TeamProviders;
use Livewire\Component;

class AssignProviderTeam extends Component
{
    public $showForm,$teams;
    public $selectedTeams=[];
    protected $listeners = ['showList' => 'resetForm'];
    public $provider_id=8;

    public function render()
    {
        return view('livewire.app.common.modals.assign-provider-team');
    }

    public function mount()
    {

        $this->teams = Team::where('status', 1)->get();
        $this->selectedTeams = array_fill_keys(TeamProviders::where("provider_id",8)->get()->pluck('team_id')->toArray(), false);
    }

    // Child Laravel component's updateData function
    public function updateData()
    {

        // Emit an event to the parent component with the selected Teams
        $this->emit('updateSelectedTeams', $this->selectedTeams);
    }


    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}
