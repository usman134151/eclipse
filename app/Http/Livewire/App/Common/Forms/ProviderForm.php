<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class ProviderForm extends Component
{
	public function showList()
	{
		$this->emit('showList');
	}

	public function render()
	{
		return view('livewire.app.common.forms.provider-form');
	}
}
