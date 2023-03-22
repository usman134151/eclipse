<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class CredentialManager extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.forms.credential-manager');
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
