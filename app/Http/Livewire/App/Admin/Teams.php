<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;

class Teams extends Component
{
    public $showForm;
    public $showProfile;
    public $listTitle="Provider Teams";

    public function render()
    {
        return view('livewire.app.admin.teams');
    }

    public function mount()
    {


    }

    function showForm()
    {
       $this->showForm=true;
       $this->dispatchBrowserEvent('refreshSelects');
    }
    public function resetForm()
    {
        $this->showForm=false;
        $this->showProfile = false;
    }

    public function showProfile()
	{
		$this->showProfile = true;
	}

}
