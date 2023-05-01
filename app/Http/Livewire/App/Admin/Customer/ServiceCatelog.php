<?php

namespace App\Http\Livewire\App\Admin\Customer;

use Livewire\Component;

class ServiceCatelog extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.customer.service-catelog');
    }

    public function mount()
    {
       
       
    }
	public function switch($component)
	{
		$this->component = $component;
	}
    public function next()
{
    $this->emit('stepIncremented');
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
