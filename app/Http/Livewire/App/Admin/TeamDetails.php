<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;

class TeamDetails extends Component
{
    public $showForm;
    public $showList;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.team-details');
    }

    public function mount()
    {
       
       
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
