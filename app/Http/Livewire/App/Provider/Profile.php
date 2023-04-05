<?php

namespace App\Http\Livewire\App\Provider;

use Livewire\Component;

class Profile extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $component = 'profile';
    public function render()
    {
        return view('livewire.app.provider.profile');
    }

    public function mount()
    {


    }

    function showForm()
    {
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }
    public function switch($component)
	{
		$this->component = $component;
	}

}
