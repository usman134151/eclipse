<?php

namespace App\Http\Livewire\App\Provider;

use Livewire\Component;

class Dashboard extends Component
{
	public function render()
	{
		return view('livewire.app.provider.dashboard');
	}

	public function mount()
	{


		$this->dispatchBrowserEvent('refreshSelects');
		$this->dispatchBrowserEvent('refreshSelects2');
	}
}
