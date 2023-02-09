<?php

namespace App\Http\Livewire\App\Admin\Accommodation\Forms;

use Livewire\Component;

class AddService extends Component
{
	public function render()
	{
		return view('livewire.app.admin.accommodation.forms.add-service');
	}
	
	public function showList()
	{
		$this->emit('showList');
	}

}
