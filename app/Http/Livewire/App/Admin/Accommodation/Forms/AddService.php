<?php

namespace App\Http\Livewire\App\Admin\Accommodation\Forms;

use Livewire\Component;

class AddService extends Component
{
    public $component = 'basic-service-setup';
	public function render()
	{
		return view('livewire.app.admin.accommodation.forms.add-service');
	}

	public function showList()
	{
		$this->emit('showList');
	}
    public function switch($component)
	{
		$this->component = $component;
	}

}
