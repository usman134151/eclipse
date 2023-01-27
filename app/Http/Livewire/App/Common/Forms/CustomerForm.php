<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class CustomerForm extends Component
{
	public function showList()
	{
		$this->emit('showList');
	}

	public function render()
	{
		return view('livewire.app.common.forms.customer-form');
	}
}
