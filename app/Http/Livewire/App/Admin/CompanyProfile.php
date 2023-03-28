<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;

class CompanyProfile extends Component
{
    Public $showDepartmentProfile;
	public function render()
	{
		return view('livewire.app.admin.company-profile');
	}

	public function mount()
	{}

	public function showDepartmentProfile()
	{
		$this->showDepartmentProfile = true;
	}

	public function showList()
	{
		$this->emit('showList');
	}
}