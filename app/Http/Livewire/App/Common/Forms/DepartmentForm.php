<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class DepartmentForm extends Component
{
	public $component = 'department-info';
	public function showList()
	{
		$this->emit('showList');
	}

	public function mount()
	{}

	public function switch($component)
	{
		$this->component = $component;
	}

	public function render()
	{
		return view('livewire.app.common.forms.department-form');
	}
}
