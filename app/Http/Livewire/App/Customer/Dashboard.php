<?php

namespace App\Http\Livewire\App\Customer;

use Livewire\Component;

class Dashboard extends Component
{
    public $component = 'requester-info';
    
	public function render()
	{
		return view('livewire.app.customer.dashboard');
	}

	public function mount()
	{

		$this->dispatchBrowserEvent('refreshSelects');
		$this->dispatchBrowserEvent('refreshSelects2');

	}
    public function switch($component)
	{
		$this->component = $component;
	}

}
