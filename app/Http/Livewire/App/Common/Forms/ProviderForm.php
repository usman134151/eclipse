<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class ProviderForm extends Component
{
	public $component = 'profile';

	public function render()
	{
		return view('livewire.app.common.forms.provider-form');
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
