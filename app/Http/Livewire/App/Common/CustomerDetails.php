<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class CustomerDetails extends Component
{
	public function render()
	{
		return view('livewire.app.common.customer-details');
	}

	public function mount()
	{}

	public function showList()
	{
		$this->emit('showList');
	}
}