<?php

namespace App\Http\Livewire\App\Admin\Accommodation;

use Livewire\Component;

class ServiceCategory extends Component
{
    public $component = 'basic-service-setup';
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.accommodation.service-category');
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
