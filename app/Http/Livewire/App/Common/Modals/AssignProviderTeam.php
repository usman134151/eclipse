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
    protected $listeners = ['showList' => 'resetForm','editRecord' => 'setSelectedTeams'];
    public $provider_id=8;

    public function render()
    {
        return view('livewire.app.common.modals.assign-provider-team');
    }

    public function mount()
    {

        $this->teams = Team::where('status', 1)->get();
    }

    public function setSelectedTeams(User $provider){
        $this->selectedTeams =TeamProviders::where("provider_id", $provider->id)->get()->pluck('team_id')->toArray();
        // dd($this->selectedTeams,$provider);
        $this->updateData();
    }

    // Child Laravel component's updateData function
    public function updateData()
    {
        $teamNames = [];
        foreach ($this->selectedTeams as $team) {
            $teamRecord = $this->teams->firstWhere('id', $team);
            if (!is_null($teamRecord)) {
                $teamNames[] = $teamRecord->name;
            }
        }
        // Emit an event to the parent component with the selected Teams
        $this->emit('updateSelectedTeams', $this->selectedTeams,$teamNames);
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
