<?php

namespace App\Http\Livewire\App\Admin;

use App\Models\Tenant\Team;
use Livewire\Component;

class TeamDetails extends Component
{
    public $showForm;
    public $showList;
    protected $listeners = ['showList' => 'resetForm'];
    public $team, $description, $notes, $providers;

    public function render()
    {
        return view('livewire.app.admin.team-details');
    }

    public function mount($teamID = null)
    {
        // dd($teamID);
        if ($teamID != null)
            $this->showDetails($teamID);
    }

    public function showDetails($teamID)
    {
        $this->team = Team::where('id',$teamID)->with(['providers','accommodations','specializations','services'])->first();
        // dd($this->team);
        $this->team->tags = json_decode($this->team->tags);
        $this->description = $this->team->description;
        $this->notes = $this->team->team_notes;
        $this->providers = $this->team->providers;
    }

    public function updateData()
    {
        Team::where('id', $this->team->id)->update([
            'team_notes' => $this->notes,
            'description' => $this->description,
        ]);
        
        $this->showDetails($this->team->id);
        
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => 'Success',
            'text' => "Notes & Description updated successfully",
        ]);
    }

    public function showList()
	{
		$this->emit('showList');
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
