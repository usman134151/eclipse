<?php

namespace App\Http\Livewire\App\Admin\Forms;

use Livewire\Component;

class AddCompany extends Component
{
	public $component = 'company-info';
	public function showList()
	{
		$this->emit('showList');
	}

	public function render()
	{
		return view('livewire.app.admin.forms.add-company');
	}
	public function switch($component)
	{
		$this->component = $component;
	}
}
