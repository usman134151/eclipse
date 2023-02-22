<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class ProviderDetails extends Component
{
	public function render()
	{
		return view('livewire.app.common.provider-details');
	}

	public function mount()
	{}

	public function showList()
	{
		$this->emit("showList");
	}
}