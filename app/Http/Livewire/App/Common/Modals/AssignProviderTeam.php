<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Team;
use App\Models\Tenant\TeamProviders;
use App\Models\Tenant\User;
use Livewire\Component;

class AssignProviderTeam extends Component
{
    public $showForm,$teams;
    public $selectedTeams=[];
    protected $listeners = ['showList' => 'resetForm','setData'];
    public $provider_id;

    public function render()
    {
        return view('livewire.app.common.modals.assign-provider-team');
    }

    public function mount()
    {
        $this->teams = Team::where('status', 1)->get();

    }

    public function setData($selectedTeams = [])
    {
        $this->selectedTeams=$selectedTeams;
    }

    // public function setSelectedTeams(){
    //     $this->selectedTeams =TeamProviders::where("provider_id", $this->provider_id)->get()->pluck('team_id')->toArray();
    //     $this->updateData();
    // }

    // Child Laravel component's updateData function
    public function updateData()
    {
        
        // Emit an event to the parent component with the selected Teams
        $this->emit('updateSelectedTeams', $this->selectedTeams);
    }
    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }


}
