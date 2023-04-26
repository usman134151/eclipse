<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;

class Teams extends Component
{
    public $showForm;
    public $showProfile;
    public $listTitle="Provider Teams";
    protected $listeners = [
        'showForm' => 'showForm', // show form when the parent component requests it
    ];

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
       $this->dispatchBrowserEvent('update-url', ['url' => '/admin/teams/create']);  //updated by Amna Bilal to set url

    //    $this->dispatchBrowserEvent('refreshSelects');
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
