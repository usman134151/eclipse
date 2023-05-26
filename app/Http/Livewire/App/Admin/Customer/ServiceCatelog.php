<?php

namespace App\Http\Livewire\App\Admin\Customer;
use App\Models\Tenant\Company;
use App\Models\Tenant\Accommodation;

use Livewire\Component;

class ServiceCatelog extends Component
{
    public $showForm,$accomodations;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.customer.service-catelog');
    }

    public function mount()
    {
       $this->accomodations=Accommodation::with('services')->get();
       
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
