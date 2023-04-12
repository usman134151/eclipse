<?php

namespace App\Http\Livewire\App\Admin\Forms;

use Livewire\Component;

class TeamsForm extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.forms.teams-form');
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
