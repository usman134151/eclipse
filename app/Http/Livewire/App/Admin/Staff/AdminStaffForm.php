<?php

namespace App\Http\Livewire\App\Admin\Staff;

use Livewire\Component;

class AdminStaffForm extends Component
{

    public $ethnicity;
    public $timezone;
    public $gender;
	public function showList()
	{
		$this->emit("showList");
	}

	public function render()
	{
		return view('livewire.app.admin.staff.admin-staff-form');
	}
}
