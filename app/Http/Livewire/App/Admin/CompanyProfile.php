<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;

class CompanyProfile extends Component
{

	public function render()
	{
		return view('livewire.app.admin.company-profile');
	}

	public function mount()
	{}

	public function showList()
	{
		$this->emit('showList');
	}
}